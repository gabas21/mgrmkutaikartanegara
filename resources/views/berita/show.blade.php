<x-layouts.app>
    <x-slot:title>{{ $berita->title }} | PT. Mahakam Gerbang Raja Migas</x-slot:title>

    {{-- ═══════════════════════════════════════════════
         ARTICLE HERO SECTION (Soft Light Version)
    ═══════════════════════════════════════════════ --}}
    <section class="relative pt-32 pb-16 bg-white overflow-hidden border-b border-slate-100">
        {{-- Decorative Mesh & Gradients --}}
        <div class="absolute inset-0 z-0 pointer-events-none">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-red-50 rounded-full blur-[80px] -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-slate-50 rounded-full blur-[60px] translate-y-1/3 -translate-x-1/4"></div>
            <div class="absolute inset-0 opacity-[0.02]" style="background-image: linear-gradient(#000 1px, transparent 1px), linear-gradient(90deg, #000 1px, transparent 1px); background-size: 30px 30px;"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-8 text-center"
             x-data="{ show: false }" x-init="setTimeout(() => show = true, 50)"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
             class="transition-all duration-700 ease-out">
            
            {{-- Back Button --}}
            <div class="flex justify-center mb-10">
                <a href="{{ url('/berita') }}" wire:navigate class="group inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full bg-white border border-slate-200 shadow-sm hover:shadow-md hover:border-red-200 active:scale-95 touch-manipulation transition-all duration-300 text-sm font-bold text-slate-600 hover:text-red-600 uppercase tracking-widest">
                    <svg class="w-5 h-5 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    Kembali ke Berita
                </a>
            </div>

            {{-- Breadcrumb Navigation --}}
            <nav class="flex items-center justify-center gap-2 text-sm font-bold text-slate-400 mb-8 tracking-wide uppercase">
                <a href="{{ url('/') }}" wire:navigate class="hover:text-red-600 transition-colors">Beranda</a>
                <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                <a href="{{ url('/berita') }}" wire:navigate class="hover:text-red-600 transition-colors">Publikasi</a>
                <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                <span class="text-slate-800">Berita Utama</span>
            </nav>

            {{-- Category Pill --}}
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-100 border border-red-200 mb-6">
                <span class="flex h-2 w-2 rounded-full bg-red-600"></span>
                <span class="text-red-700 font-bold tracking-widest text-[11px] uppercase">{{ $berita->category ?? 'Info Korporat' }}</span>
            </div>
            
            <h1 class="text-3xl md:text-5xl lg:text-[52px] font-black text-slate-900 leading-[1.15] mb-8 tracking-tight">
                {{ $berita->title }}
            </h1>
            
            {{-- Article Meta info --}}
            <div class="flex flex-wrap items-center justify-center gap-y-4 gap-x-6 text-sm font-semibold text-slate-500">
                <div class="flex items-center gap-2 bg-slate-50 px-4 py-2 rounded-full border border-slate-100">
                    <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    {{ $berita->published_at ? $berita->published_at->translatedFormat('d F Y') : '' }}
                </div>
                <div class="flex items-center gap-2 bg-slate-50 px-4 py-2 rounded-full border border-slate-100">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Humas MGRM
                </div>
                <div class="flex items-center gap-2 bg-slate-50 px-4 py-2 rounded-full border border-slate-100">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    Dibaca 1.2K kali
                </div>
            </div>
            
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         MAIN ARTICLE CONTENT
    ═══════════════════════════════════════════════ --}}
    <section class="pb-24 pt-10 bg-white relative">
        <div class="max-w-4xl mx-auto px-6 lg:px-8">
            
            {{-- Featured Image Wrapper --}}
            <div class="relative w-full aspect-video rounded-[2rem] overflow-hidden bg-slate-900 shadow-[0_20px_60px_rgba(0,0,0,0.1)] mb-12 border border-slate-100 -mt-20 z-20"
                 x-data="{ show: false }" x-intersect.once="show = true"
                 :class="show ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                 class="transition-all duration-700 ease-out delay-200">
                <img src="{{ $berita->featured_image_path ? asset($berita->featured_image_path) : asset('images/WhatsApp-Image-2023-07-25-at-11.11.33.webp') }}" alt="{{ $berita->title }}" class="w-full h-full object-cover">
            </div>

            {{-- Typography Post Content (Prose Wrapper) --}}
            <article class="prose prose-lg prose-slate max-w-none prose-headings:font-black prose-headings:text-slate-800 prose-p:text-slate-600 prose-p:leading-relaxed prose-p:font-medium prose-a:text-red-600 hover:prose-a:text-red-700 prose-img:rounded-3xl prose-img:shadow-xl"
                     x-data="{ show: false }" x-intersect.once="show = true"
                     :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                     class="transition-all duration-700 ease-out delay-300 relative z-10">
                
                {!! $berita->content !!}
            </article>

            {{-- Tags & Share Component --}}
            <div class="mt-16 pt-8 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between gap-6">
                {{-- Tags --}}
                <div class="flex items-center gap-2">
                    <span class="text-sm font-bold text-slate-800 uppercase tracking-widest mr-2">Tags:</span>
                    <a href="#" class="px-4 py-1.5 rounded-full bg-slate-50 text-slate-500 font-bold hover:bg-slate-100 hover:text-red-600 text-xs uppercase tracking-wide transition-colors">SKK Migas</a>
                    <a href="#" class="px-4 py-1.5 rounded-full bg-slate-50 text-slate-500 font-bold hover:bg-slate-100 hover:text-red-600 text-xs uppercase tracking-wide transition-colors">Korporat</a>
                    <a href="#" class="px-4 py-1.5 rounded-full bg-slate-50 text-slate-500 font-bold hover:bg-slate-100 hover:text-red-600 text-xs uppercase tracking-wide transition-colors">PI 10%</a>
                </div>

                {{-- Share --}}
                <div class="flex items-center gap-3">
                    <span class="text-sm font-bold text-slate-800 uppercase tracking-widest mr-2">Bagikan:</span>
                    <button class="w-10 h-10 rounded-full bg-slate-50 hover:bg-blue-50 hover:text-blue-600 text-slate-400 flex items-center justify-center active:scale-95 touch-manipulation transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-slate-50 hover:bg-sky-50 hover:text-sky-500 text-slate-400 flex items-center justify-center active:scale-95 touch-manipulation transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-slate-50 hover:bg-green-50 hover:text-green-500 text-slate-400 flex items-center justify-center active:scale-95 touch-manipulation transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                    </button>
                </div>
            </div>

        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         RELATED POSTS WIDGET
    ═══════════════════════════════════════════════ --}}
    <section class="py-20 bg-slate-50 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            
            <div class="mb-10 text-center md:text-left flex flex-col md:flex-row items-end justify-between gap-6 border-b border-slate-200 pb-6">
                <div>
                    <h3 class="text-2xl font-black text-slate-800 tracking-tight">Baca Juga Berita Lainnya</h3>
                </div>
                <a href="{{ url('/berita') }}" wire:navigate class="inline-flex items-center gap-2 text-sm font-bold text-red-600 hover:text-red-700 uppercase tracking-widest group active:scale-95 touch-manipulation transition-all">
                    Kembali ke Indeks
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1 group-active:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach([
                    ['date' => '02 Agustus 2024', 'category' => 'Press Release', 'title' => 'Peresmian Fasilitas Kapal SPBN Nelayan Terbaru', 'img' => 'kapal.webp'],
                    ['date' => '21 Juli 2024', 'category' => 'Info Korporat', 'title' => 'Sertifikasi ISO 9001:2015 Berhasil Dipertahankan', 'img' => 'menujuperseroidaman.webp'],
                    ['date' => '10 Juli 2024', 'category' => 'Kegiatan CSR', 'title' => 'Pemberdayaan UMKM Lokal Binaan MGRM', 'img' => 'kontraktor.webp']
                ] as $index => $news)
                
                {{-- Quick Card --}}
                <a href="#" class="group bg-white rounded-3xl border border-slate-100 shadow-[0_10px_30px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] overflow-hidden hover:-translate-y-2 active:scale-95 touch-manipulation flex flex-col h-full cursor-pointer" style="transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.6s ease;">
                    <div class="relative h-48 bg-slate-900 overflow-hidden flex-shrink-0">
                        <img src="{{ asset($news['img']) }}" alt="Berita Lain" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700 mix-blend-screen">
                    </div>
                    <div class="p-6 flex flex-col flex-1 relative">
                        <div class="flex items-center gap-2 text-xs font-bold text-slate-400 mb-2 uppercase tracking-wide">
                            {{ $news['date'] }}
                        </div>
                        <h4 class="text-lg font-black text-slate-800 leading-snug group-hover:text-red-600 transition-colors line-clamp-2">
                            {{ $news['title'] }}
                        </h4>
                    </div>
                </a>
                @endforeach
            </div>

        </div>
    </section>

</x-layouts.app>
