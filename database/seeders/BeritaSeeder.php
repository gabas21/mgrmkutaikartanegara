<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = base_path('database/seeders/beritas.json');

        if (!File::exists($jsonPath)) {
            $this->command->warn("beritas.json not found. Run 'php artisan wp:fetch-posts' first if you want to seed news data.");
            return;
        }

        $json = File::get($jsonPath);
        $data = json_decode($json, true);

        if (!empty($data)) {
            foreach ($data as $item) {
                Berita::updateOrCreate(
                    ['source_id' => $item['source_id']],
                    $item
                );
            }
            $this->command->info('Seeded ' . count($data) . ' records from beritas.json');
        } else {
            $this->command->info('beritas.json is empty.');
        }
    }
}
