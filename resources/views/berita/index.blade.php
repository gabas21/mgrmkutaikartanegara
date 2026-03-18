<x-layouts.app>
    <x-slot:title>Berita & Press | PT. Mahakam Gerbang Raja Migas</x-slot:title>

    {{-- ═══════════════════════════════════════════════
         HERO SECTION BERITA
    ═══════════════════════════════════════════════ --}}
    <section class="relative pt-32 pb-24 bg-[#0B1120] overflow-hidden">
        {{-- Background Glow & Image --}}
        <div class="absolute inset-0 z-0 pointer-events-none">
            <img src="{{ asset('images/WhatsApp-Image-2023-07-25-at-11.11.33.webp') }}" alt="Background MGRM" 
                 class="absolute inset-0 w-full h-full object-cover opacity-30 mix-blend-overlay" />
            <div class="absolute top-0 right-1/4 w-[600px] h-[600px] bg-red-600/15 rounded-full blur-[120px] mix-blend-screen -translate-y-1/2"></div>
            <div class="absolute bottom-0 left-1/4 w-[500px] h-[500px] bg-blue-500/10 rounded-full blur-[100px] mix-blend-screen translate-y-1/3"></div>
            <div class="absolute inset-0 bg-[#0B1120]/70"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center"
             x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
             class="transition-all duration-700 ease-out">
            
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-sm mb-8 hover:bg-white/10 transition-colors cursor-default">
                <span class="flex h-2 w-2 rounded-full bg-red-500 animate-pulse"></span>
                <span class="text-red-400 font-bold tracking-widest text-[11px] uppercase">Publikasi Perusahaan</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-[60px] font-black text-white leading-[1.1] mb-6 tracking-tight">
                Berita & <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-400 drop-shadow-lg">Press Release</span>
            </h1>
            
            <p class="text-slate-400 text-lg md:text-xl max-w-2xl mx-auto font-medium leading-relaxed mb-10">
                Pusat informasi dan pembaruan terkini seputar aktivitas, program, dan pencapaian PT. Mahakam Gerbang Raja Migas.
            </p>


        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         HIGHLIGHT FEATURED POST (Berita Utama)
    ═══════════════════════════════════════════════ --}}
    <section class="relative py-12 lg:py-16 bg-slate-50 overflow-hidden">
        {{-- Decorative Soft Blobs --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-red-100 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10"
             x-data="{ show: false }" x-intersect.once="show = true"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
             class="transition-all duration-700 ease-out delay-100">
            
            <div class="group relative rounded-3xl overflow-hidden bg-white shadow-[0_15px_50px_rgba(0,0,0,0.06)] border border-slate-100 hover:shadow-[0_25px_60px_rgba(0,0,0,0.12)] active:scale-95 touch-manipulation transition-all duration-500 cursor-pointer">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    
                    {{-- Image Side --}}
                    <div class="relative min-h-[300px] lg:min-h-full overflow-hidden bg-slate-900 border-b lg:border-b-0 lg:border-r border-slate-100">
                        <img src="{{ asset('images/WhatsApp-Image-2023-07-25-at-11.11.33.webp') }}" alt="Berita Utama" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        
                        {{-- Tag --}}
                        <div class="absolute top-6 left-6 z-10">
                            <span class="px-4 py-1.5 rounded-full bg-red-600 text-white text-xs font-bold uppercase tracking-widest shadow-lg shadow-red-600/30">
                                Berita Utama
                            </span>
                        </div>
                    </div>

                    {{-- Content Side --}}
                    <div class="p-8 lg:p-12 flex flex-col justify-center relative">
                        {{-- Meta Date --}}
                        <div class="flex items-center gap-4 text-sm font-semibold text-slate-500 mb-4">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                24 Agustus 2024
                            </span>
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                            <span>Oleh: Humas MGRM</span>
                        </div>

                        {{-- Title --}}
                        <h2 class="text-3xl lg:text-4xl font-black text-slate-800 leading-tight mb-5 group-hover:text-red-600 transition-colors">
                            Kunjungan Strategis SKK Migas Kalsul ke Fasilitas MGRM
                        </h2>

                        {{-- Excerpt --}}
                        <p class="text-slate-500 text-base lg:text-lg leading-relaxed font-medium mb-8 line-clamp-3">
                            Dalam rangka memperkuat sinergi operasional dan manajemen hulu migas di wilayah Kalimantan Timur, SKK Migas perwakilan Kalimantan Sulawesi (Kalsul) melakukan kunjungan kerja komprehensif ke area.....
                        </p>

                        {{-- Read More --}}
                        @if($berita->isNotEmpty())
                        <a href="{{ url('/berita/' . $berita->first()->slug) }}" wire:navigate class="inline-flex items-center gap-2 text-sm font-black text-slate-900 group-hover:text-red-600 uppercase tracking-widest w-max transition-all after:content-[''] after:absolute after:inset-0">
                            Baca Selengkapnya
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        @endif
                    </div>

                </div>
            </div>
            
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         INTERACTIVE NEWS APP & SEARCH SECTION
    ═══════════════════════════════════════════════ --}}
    <div x-data="{
        searchQuery: '',
        selectedCategory: '',
        sortOrder: 'terbaru',
        currentPage: 1,
        itemsPerPage: 6,
        newsData: @js($berita->map(function($item) {
            $catSlug = \Illuminate\Support\Str::slug($item->category ?? 'Info Korporat');
            $img = $item->featured_image_path ? $item->featured_image_path : 'images/WhatsApp-Image-2023-07-25-at-11.11.33.webp';
            
            return [
                'id' => $item->id,
                'date' => $item->published_at ? $item->published_at->translatedFormat('d F Y') : '',
                'timestamp' => $item->published_at ? $item->published_at->format('Y-m-d') : '',
                'category' => $catSlug,
                'label' => $item->category ?: 'Info Korporat',
                'title' => $item->title,
                'slug' => $item->slug,
                'desc' => \Illuminate\Support\Str::limit(strip_tags($item->excerpt ?: $item->content), 150),
                'img' => $img,
                'url' => $item->url,
            ];
        })),
        get filteredNews() {
            let result = this.newsData;
            
            // Search text filter
            if (this.searchQuery !== '') {
                const query = this.searchQuery.toLowerCase();
                result = result.filter(n => n.title.toLowerCase().includes(query) || n.desc.toLowerCase().includes(query));
            }
            
            // Category filter
            if (this.selectedCategory !== '') {
                result = result.filter(n => n.category === this.selectedCategory);
            }
            
            // Sorting
            result = result.sort((a, b) => {
                const dateA = new Date(a.timestamp);
                const dateB = new Date(b.timestamp);
                return this.sortOrder === 'terbaru' ? dateB - dateA : dateA - dateB;
            });
            
            return result;
        },
        get totalPages() {
            return Math.ceil(this.filteredNews.length / this.itemsPerPage);
        },
        get paginatedNews() {
            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;
            return this.filteredNews.slice(start, end);
        },
        goToPage(page) {
            if (page >= 1 && page <= this.totalPages) {
                this.currentPage = page;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        },
        nextPage() {
            if (this.currentPage < this.totalPages) {
                this.currentPage++;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        },
        prevPage() {
            if (this.currentPage > 1) {
                this.currentPage--;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }
    }"
    x-effect="filteredNews; currentPage = 1">
    
    {{-- ═══════════════════════════════════════════════
         NEWS GRID LIST
    ═══════════════════════════════════════════════ --}}
    <section class="py-12 lg:py-24 bg-white relative z-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            {{-- SEARCH FORM INTEGRATED --}}
            <div class="max-w-4xl mx-auto mb-16"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                 class="transition-all duration-700 ease-out delay-200">
                
                <div class="bg-white p-2 rounded-2xl md:rounded-[2rem] shadow-[0_15px_50px_rgba(0,0,0,0.06)] border border-slate-100 hover:border-red-100 transition-all duration-300 ring-1 ring-slate-900/5 focus-within:ring-4 focus-within:ring-red-100 focus-within:border-red-200 relative overflow-visible">
                    <div class="flex flex-col md:flex-row items-center divide-y md:divide-y-0 md:divide-x divide-slate-100 overflow-visible">
                        
                        {{-- Input Area --}}
                        <div class="flex items-center flex-1 w-full pl-6 py-2 group">
                            <svg class="w-6 h-6 text-slate-400 group-focus-within:text-red-500 transition-colors shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            <input type="text" x-model="searchQuery" placeholder="Cari judul artikel atau berita..." 
                                   class="w-full bg-transparent border-none focus:outline-none focus:ring-0 text-slate-800 font-medium placeholder-slate-400 text-base md:text-lg py-3 ml-3">
                        </div>

                        {{-- Custom Dropdown: Filter Kategori --}}
                        <div class="relative w-full md:w-auto px-6 py-4 md:py-2 bg-slate-50/50 hover:bg-slate-50 transition-colors cursor-pointer group"
                             x-data="{ open: false }" @click.outside="open = false" @click="open = !open">
                            
                            <div class="flex items-center justify-between gap-3 w-full md:w-44">
                                <div class="flex items-center gap-2.5">
                                    <svg class="w-5 h-5" :class="selectedCategory !== '' ? 'text-red-500' : 'text-slate-400 group-hover:text-red-500 transition-colors'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                                    <span class="text-sm font-bold truncate transition-colors"
                                          :class="selectedCategory !== '' ? 'text-slate-900' : 'text-slate-600 group-hover:text-slate-900'"
                                          x-text="selectedCategory === '' ? 'Semua Kategori' : 
                                                  selectedCategory === 'press-release' ? 'Press Release' :
                                                  selectedCategory === 'kegiatan-csr' ? 'Kegiatan CSR' :
                                                  selectedCategory === 'penghargaan' ? 'Penghargaan' : 'Info Korporat'">
                                    </span>
                                </div>
                                <svg class="w-4 h-4 text-slate-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                            </div>

                            {{-- Dropdown Panel --}}
                            <div x-show="open" 
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                                 x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                                 x-transition:leave="transition ease-in duration-100"
                                 x-transition:leave-start="opacity-100 -translate-y-0 scale-100"
                                 x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                                 class="absolute top-full left-0 right-0 md:right-auto md:w-56 mt-3 bg-white rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-slate-100 overflow-hidden z-50 p-2"
                                 style="display: none;">
                                @foreach([
                                    ['value' => '', 'label' => 'Semua Kategori'],
                                    ['value' => 'press-release', 'label' => 'Press Release'],
                                    ['value' => 'kegiatan-csr', 'label' => 'Kegiatan CSR'],
                                    ['value' => 'penghargaan', 'label' => 'Penghargaan'],
                                    ['value' => 'info-korporat', 'label' => 'Info Korporat']
                                ] as $cat)
                                <div @click="selectedCategory = '{{ $cat['value'] }}'" 
                                     class="px-4 py-2.5 rounded-xl text-sm font-bold flex items-center justify-between transition-colors cursor-pointer"
                                     :class="selectedCategory === '{{ $cat['value'] }}' ? 'bg-red-50 text-red-600' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                                    {{ $cat['label'] }}
                                    <svg x-show="selectedCategory === '{{ $cat['value'] }}'" class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Custom Dropdown: Filter Urutan --}}
                        <div class="relative w-full md:w-auto px-6 py-4 md:py-2 bg-slate-50/50 hover:bg-slate-50 transition-colors cursor-pointer group"
                             x-data="{ open: false }" @click.outside="open = false" @click="open = !open">
                            
                            <div class="flex items-center justify-between gap-3 w-full md:w-36">
                                <div class="flex items-center gap-2.5">
                                    <svg class="w-5 h-5 text-slate-400 group-hover:text-red-500 transition-colors" :class="sortOrder !== 'terbaru' ? 'text-red-500' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12"/></svg>
                                    <span class="text-sm font-bold text-slate-600 group-hover:text-slate-900 transition-colors"
                                          x-text="sortOrder === 'terbaru' ? 'Terbaru' : 'Terlama'">
                                    </span>
                                </div>
                                <svg class="w-4 h-4 text-slate-400 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                            </div>

                            {{-- Dropdown Panel --}}
                            <div x-show="open" 
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                                 x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                                 x-transition:leave="transition ease-in duration-100"
                                 x-transition:leave-start="opacity-100 -translate-y-0 scale-100"
                                 x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                                 class="absolute top-full right-0 md:w-48 mt-3 bg-white rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-slate-100 overflow-hidden z-50 p-2"
                                 style="display: none;">
                                @foreach([
                                    ['value' => 'terbaru', 'label' => 'Terbaru'],
                                    ['value' => 'terlama', 'label' => 'Terlama']
                                ] as $sort)
                                <div @click="sortOrder = '{{ $sort['value'] }}'" 
                                     class="px-4 py-2.5 rounded-xl text-sm font-bold flex items-center justify-between transition-colors cursor-pointer"
                                     :class="sortOrder === '{{ $sort['value'] }}' ? 'bg-red-50 text-red-600' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                                    {{ $sort['label'] }}
                                    <svg x-show="sortOrder === '{{ $sort['value'] }}'" class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Empty State (No Results) --}}
            <div x-show="filteredNews.length === 0" style="display: none;" class="py-20 text-center flex flex-col items-center">
                <div class="w-24 h-24 mb-6 rounded-full bg-slate-50 flex items-center justify-center text-slate-300">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-2xl font-black text-slate-800 mb-2">Pencarian Tidak Ditemukan</h3>
                <p class="text-slate-500 font-medium max-w-md">Maaf, kami tidak dapat menemukan artikel yang sesuai dengan kriteria filter Anda. Coba reset pencarian Anda.</p>
                <button @click="searchQuery = ''; selectedCategory = ''; sortOrder = 'terbaru';" class="mt-8 px-6 py-2.5 rounded-full bg-red-50 text-red-600 font-bold text-sm hover:bg-red-600 hover:text-white active:scale-95 touch-manipulation transition-colors duration-300">
                    Reset Pencarian
                </button>
            </div>

            {{-- Data Loop Using Alpine --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <template x-for="(news, index) in paginatedNews" :key="news.id">
                    {{-- Card --}}
                    <article class="group bg-white rounded-3xl border border-slate-100 shadow-[0_10px_30px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] overflow-hidden hover:-translate-y-2 active:scale-95 touch-manipulation flex flex-col h-full cursor-pointer"
                             x-data="{ show: false }" x-intersect.once="show = true"
                             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                             style="transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.6s ease, opacity 0.6s ease; transition-delay: 50ms">
                        
                        {{-- Image Wrapper --}}
                        <div class="relative h-56 bg-slate-900 overflow-hidden flex-shrink-0">
                            {{-- Because we can't use blade's asset helper purely inside JS, we'll format the image path relative to root --}}
                            <img :src="'/' + news.img" :alt="news.title" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700 mix-blend-screen"
                                 onerror="this.src='https://placehold.co/600x400/0B1120/475569?text=MGRM'">
                            
                            {{-- Category floating --}}
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-slate-800 text-[10px] font-black uppercase tracking-widest shadow-md" x-text="news.label">
                                </span>
                            </div>
                        </div>

                        {{-- Content Wrapper --}}
                        <div class="p-6 md:p-8 flex flex-col flex-1 relative">
                            <div class="flex items-center gap-2 text-[13px] font-bold text-slate-400 mb-3 uppercase tracking-wide">
                                <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span x-text="news.date"></span>
                            </div>

                            <h3 class="text-xl font-black text-slate-800 leading-snug mb-3 group-hover:text-red-600 transition-colors line-clamp-2" x-text="news.title">
                            </h3>

                            <p class="text-sm text-slate-500 font-medium leading-relaxed mb-6 line-clamp-3" x-text="news.desc">
                            </p>

                            {{-- Link at bottom --}}
                            <div class="mt-auto pt-4 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-xs font-black text-slate-400 uppercase tracking-widest group-hover:text-red-600 transition-colors">Baca Artikel</span>
                                <div class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-red-600 group-hover:text-white text-slate-400 transition-colors duration-300">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </div>
                            </div>
                            
                            {{-- Pseudo full link --}}
                            <a :href="'/berita/' + news.slug" wire:navigate class="absolute inset-0" :aria-label="'Baca selengkapnya: ' + news.title"></a>
                        </div>

                    </article>
                </template>

            </div>

            {{-- Pagination Component --}}
            <div x-show="totalPages > 1" class="mt-16 flex justify-center items-center gap-2">
                {{-- Previous Button --}}
                <button @click="prevPage()" :disabled="currentPage === 1" 
                        class="w-10 h-10 rounded-full flex items-center justify-center transition-colors shadow-sm disabled:opacity-50 disabled:cursor-not-allowed active:scale-95 touch-manipulation"
                        :class="currentPage === 1 ? 'text-slate-400 bg-slate-50' : 'text-slate-700 bg-white border border-slate-200 hover:bg-slate-50 hover:text-red-600'">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                
                {{-- Page Numbers --}}
                <div class="flex items-center gap-1">
                    <template x-for="page in totalPages" :key="page">
                        <button @click="goToPage(page)" 
                                class="w-10 h-10 rounded-full flex items-center justify-center font-bold transition-colors shadow-sm active:scale-95 touch-manipulation"
                                :class="currentPage === page ? 'bg-red-600 text-white shadow-md shadow-red-600/30' : 'text-slate-600 bg-white border border-slate-200 hover:bg-slate-50'">
                            <span x-text="page"></span>
                        </button>
                    </template>
                </div>

                {{-- Next Button --}}
                <button @click="nextPage()" :disabled="currentPage === totalPages" 
                        class="w-10 h-10 rounded-full flex items-center justify-center transition-colors shadow-sm disabled:opacity-50 disabled:cursor-not-allowed active:scale-95 touch-manipulation"
                        :class="currentPage === totalPages ? 'text-slate-400 bg-slate-50' : 'text-slate-700 bg-white border border-slate-200 hover:bg-slate-50 hover:text-red-600'">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>

        </div>
    </section>

    </div> {{-- End Alpine Application Scope --}}

</x-layouts.app>
