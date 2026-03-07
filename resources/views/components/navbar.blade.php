{{-- ============================================================
     NAVBAR — Desktop (hidden on mobile, replaced by navbar-mobile)
     ============================================================ --}}
<header
    x-data="{
        scrolled: false,
        activeDropdown: null,
        toggleDropdown(name) {
            this.activeDropdown = this.activeDropdown === name ? null : name
        },
        closeAll() { this.activeDropdown = null }
    }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
    @click.outside="closeAll()"
    :class="scrolled
        ? 'top-4 w-[calc(100%-2rem)] max-w-6xl mx-auto rounded-full bg-white/85 backdrop-blur-xl shadow-lg border border-white/50'
        : 'top-0 w-full max-w-full rounded-none bg-white/95 backdrop-blur-md border-b border-transparent shadow-none'"
    class="fixed inset-x-0 mx-auto z-50 transition-all duration-500 ease-out"
    role="banner"
>
    {{-- Skip to content (a11y) --}}
    <a href="#main-content"
       class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-[9999]
              focus:px-4 focus:py-2 focus:bg-red-600 focus:text-slate-900 focus:rounded-sm focus:text-sm focus:font-bold">
        Lewati ke konten utama
    </a>

    <nav class="max-w-7xl mx-auto px-6 md:px-12 overflow-visible" aria-label="Navigasi Utama">
        <div class="flex items-center justify-between h-16 lg:h-20">

            {{-- ── Logo ── --}}
            <div class="flex items-center gap-3 lg:gap-4 flex-shrink-0">
                <a href="{{ url('/') }}" wire:navigate
                   class="flex items-center gap-3 group"
                   aria-label="MGRM – Beranda">
                    <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center shadow-md p-1.5 transition-all duration-300 group-hover:shadow-red-500/20 group-hover:-translate-y-0.5 border border-slate-100 shrink-0">
                        <img src="{{ asset('images/logofix.svg') }}" alt="Logo MGRM" class="w-full h-full object-contain">
                    </div>
                    
                    {{-- Logo Kukar --}}
                    <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center shadow-md p-1.5 transition-all duration-300 group-hover:shadow-blue-500/20 border border-slate-100 shrink-0">
                        <img src="{{ asset('images/kabupaten-kukar-seeklogo.png') }}" alt="Logo Kab Kukar" class="w-full h-full object-contain">
                    </div>

                    <div class="leading-none overflow-hidden transition-all duration-500 ease-in-out whitespace-nowrap"
                         :class="scrolled ? 'max-w-0 opacity-0 ml-0' : 'max-w-[150px] opacity-100 opacity-100 ml-1'">
                        <span class="block text-xl font-black text-slate-800 tracking-tight uppercase group-hover:text-red-600 transition-colors">MGRM</span>
                        <span class="block text-[10px] text-slate-500 font-bold uppercase tracking-widest mt-0.5">Kutai Kartanegara</span>
                    </div>
                </a>
            </div>

            {{-- ── Desktop Nav Links ── --}}
            <ul class="hidden lg:flex items-center gap-2 overflow-visible" role="list">

                {{-- Beranda --}}
                <li>
                    <a href="{{ url('/') }}" wire:navigate
                       class="px-4 py-2.5 text-sm font-bold text-slate-600 uppercase tracking-wide hover:text-red-700 hover:bg-slate-50 transition-all duration-300 active:scale-95 rounded-full inline-block">
                        Beranda
                    </a>
                </li>

                {{-- About Us (Dropdown) --}}
                <li class="relative">
                    <button
                        @click.stop="toggleDropdown('about')"
                        :class="activeDropdown === 'about' ? 'text-red-700 bg-red-50' : 'text-slate-600'"
                        class="flex items-center gap-1.5 px-4 py-2.5 rounded-full text-sm font-bold uppercase tracking-wide hover:text-red-700 hover:bg-red-50 transition-all duration-300 active:scale-95"
                        aria-haspopup="true"
                        :aria-expanded="activeDropdown === 'about'">
                        Tentang Kami
                        <svg class="w-4 h-4 transition-transform duration-200"
                             :class="activeDropdown === 'about' ? 'rotate-180 text-red-700' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    {{-- Dropdown Panel --}}
                    <div
                        x-show="activeDropdown === 'about'"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                        x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                        style="display:none"
                        class="absolute top-full left-0 mt-2 w-64 bg-white/95 backdrop-blur-md border border-white/20 shadow-[0_20px_40px_rgba(0,0,0,0.1)] py-3 z-[9999] rounded-3xl overflow-hidden"
                        role="menu">
                        @foreach([
                            ['href' => '/tentang/visi-misi',          'label' => 'Profil Perusahaan'],
                            ['href' => '/tentang/sejarah',             'label' => 'Sejarah Perusahaan'],
                            ['href' => '/tentang/struktur-organisasi', 'label' => 'Struktur Organisasi'],
                        ] as $item)
                        <a href="{{ url($item['href']) }}" wire:navigate
                           @click="closeAll()"
                           class="flex items-center gap-3 px-6 py-3 text-sm font-semibold text-slate-600 hover:text-red-700 hover:bg-red-50 hover:pl-8 transition-all duration-200"
                           role="menuitem">
                            <span class="w-1.5 h-1.5 rounded-full bg-red-500 flex-shrink-0"></span>
                            {{ $item['label'] }}
                        </a>
                        @endforeach
                    </div>
                </li>

                {{-- Layanan --}}
                <li>
                    <a href="{{ url('/layanan') }}" wire:navigate
                       class="px-4 py-2.5 text-sm font-bold text-slate-600 uppercase tracking-wide hover:text-red-700 hover:bg-slate-50 transition-all duration-300 active:scale-95 rounded-full inline-block">
                        Layanan
                    </a>
                </li>

                {{-- Berita --}}
                <li>
                    <a href="{{ url('/berita') }}" wire:navigate
                       class="px-4 py-2.5 text-sm font-bold text-slate-600 uppercase tracking-wide hover:text-red-700 hover:bg-slate-50 transition-all duration-300 active:scale-95 rounded-full inline-block">
                        Berita
                    </a>
                </li>

                {{-- PPID --}}
                <li>
                    <a href="https://ppid.kukarkab.go.id/opd/78" target="_blank" rel="noopener noreferrer"
                       class="px-4 py-2.5 text-sm font-bold text-slate-600 uppercase tracking-wide hover:text-red-700 hover:bg-slate-50 transition-all duration-300 active:scale-95 rounded-full inline-block">
                        PPID
                    </a>
                </li>

                {{-- OKE GAS --}}
                <li>
                    <a href="{{ url('/okegas') }}" wire:navigate
                       :class="scrolled ? 'px-4 py-2 text-xs' : 'px-5 py-2.5 text-sm'"
                       class="ml-2 inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-400 hover:to-emerald-500 text-white font-black rounded-full uppercase tracking-wide transition-all duration-300 shadow-[0_4px_14px_rgba(16,185,129,0.25)] hover:shadow-[0_6px_20px_rgba(16,185,129,0.4)] hover:-translate-y-0.5 active:scale-95">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                        OKE GAS
                    </a>
                </li>

                {{-- Kontak --}}
                <li>
                    <a href="{{ url('/kontak') }}" wire:navigate
                       :class="scrolled ? 'px-5 py-2 text-xs' : 'px-7 py-2.5 text-sm'"
                       class="ml-2 bg-slate-900 hover:bg-red-600 text-white font-bold rounded-full uppercase tracking-wide transition-all duration-300 shadow-[0_4px_14px_rgba(0,0,0,0.1)] hover:shadow-[0_6px_20px_rgba(220,38,38,0.3)] hover:-translate-y-0.5 active:scale-95 inline-block">
                        Kontak
                    </a>
                </li>

            </ul>
        </div>
    </nav>
</header>

{{-- Spacer agar konten tidak tertutup navbar fixed --}}
<div class="h-16 lg:h-20"></div>
