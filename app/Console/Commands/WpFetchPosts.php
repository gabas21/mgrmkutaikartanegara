<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Berita;
use Carbon\Carbon;

class WpFetchPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wp:fetch-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch and synchronize news articles from WordPress REST API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting to fetch posts from WordPress API...');

        try {
            $response = Http::get('https://mgrmkutaikartanegara.com/wp-json/wp/v2/posts?_embed&per_page=15');
            
            if ($response->failed()) {
                $this->error('Failed to fetch data from WordPress API.');
                return;
            }

            $posts = $response->json();
            $count = 0;

            foreach ($posts as $post) {
                $sourceId = $post['id'];
                $berita = Berita::where('source_id', $sourceId)->first();

                $title = html_entity_decode($post['title']['rendered'] ?? 'Untitled');
                $content = $post['content']['rendered'] ?? '';
                // Simple sanitize to remove scripts/styles, keeping basic formatting
                $cleanContent = strip_tags($content, '<p><a><b><strong><i><em><ul><ol><li><br><h1><h2><h3><h4><h5><h6><blockquote><img>');
                $excerpt = strip_tags(html_entity_decode($post['excerpt']['rendered'] ?? ''));

                // Get primary category name if available
                $categoryName = null;
                if (isset($post['_embedded']['wp:term'][0][0]['name'])) {
                    $categoryName = html_entity_decode($post['_embedded']['wp:term'][0][0]['name']);
                }

                if (!$berita) {
                    $localImagePath = null;
                    if (isset($post['_embedded']['wp:featuredmedia'][0]['source_url'])) {
                        $imageUrl = $post['_embedded']['wp:featuredmedia'][0]['source_url'];
                        
                        try {
                            $imageContents = Http::timeout(15)->get($imageUrl)->body();
                            $filename = basename(parse_url($imageUrl, PHP_URL_PATH));
                            $safeFilename = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $filename);
                            
                            // Save directly to public/images/news/ — no symlink needed
                            $saveDir = public_path('images/news');
                            if (!is_dir($saveDir)) {
                                mkdir($saveDir, 0755, true);
                            }
                            file_put_contents($saveDir . '/' . $safeFilename, $imageContents);
                            
                            // Path relative to public/ so we can call asset() on it
                            $localImagePath = 'images/news/' . $safeFilename;
                        } catch (\Exception $e) {
                            $this->warn('Failed to download image: ' . $imageUrl);
                        }
                    }

                    Berita::create([
                        'source_id' => $sourceId,
                        'url' => $post['link'] ?? null,
                        'title' => $title,
                        'slug' => $post['slug'] ?? Str::slug($title),
                        'content' => $cleanContent,
                        'excerpt' => $excerpt,
                        'featured_image_path' => $localImagePath,
                        'category' => $categoryName,
                        'published_at' => $post['date'] ? Carbon::parse($post['date']) : now(),
                    ]);
                    $this->info("Created new post: {$title}");
                } else {
                    $berita->update([
                        'title' => $title,
                        'slug' => $post['slug'] ?? Str::slug($title),
                        'content' => $cleanContent,
                        'excerpt' => $excerpt,
                        'category' => $categoryName,
                        'url' => $post['link'] ?? null,
                        // Not overriding image path if already exists implicitly
                    ]);
                    $this->info("Updated existing post: {$title}");
                }

                $count++;
            }

            $this->info("Successfully processed {$count} posts.");

            $this->info("Exporting data to JSON for seeding...");
            $allBeritas = Berita::all();
            $jsonPath = base_path('database/seeders/beritas.json');
            file_put_contents($jsonPath, $allBeritas->toJson(JSON_PRETTY_PRINT));
            $this->info("Exported " . $allBeritas->count() . " records to database/seeders/beritas.json");

        } catch (\Exception $e) {
            $this->error("Error: " . $e->getMessage());
        }
    }
}
