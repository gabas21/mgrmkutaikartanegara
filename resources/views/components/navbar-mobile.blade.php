{{-- ============================================================
     MOBILE NAVBAR — Fixed bottom bar (hidden on lg+)
     ============================================================ --}}
<nav
    x-data="{
        activeSheet: null,
        openSheet(name) { this.activeSheet = this.activeSheet === name ? null : name },
        closeSheet() { this.activeSheet = null }
    }"
    class="lg:hidden fixed bottom-0 inset-x-0 z-50"
    role="navigation"
    aria-label="Navigasi Mobile"
>
    {{-- ── Backdrop ── --}}
    <div
        x-show="activeSheet !== null"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="closeSheet()"
        class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-40"
        aria-hidden="true"
    ></div>

    {{-- ── Bottom Sheet Panel ── --}}
    <div
        x-show="activeSheet !== null"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-full"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-full"
        class="fixed bottom-[4.25rem] inset-x-0 z-50 mx-3 mb-3 bg-white/95 backdrop-blur-xl rounded-3xl border border-white/20 shadow-[0_-10px_40px_rgba(0,0,0,0.1)] overflow-hidden"
    >
        {{-- Tentang Sheet --}}
        <div x-show="activeSheet === 'about'" class="p-4">
            <p class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-3 px-1">Tentang Kami</p>
            <div class="space-y-1">
                @foreach([
                    ['href' => '/tentang/visi-misi',          'label' => 'Profil Perusahaan',           'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                    ['href' => '/tentang/sejarah',             'label' => 'Sejarah Perusahaan',    'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['href' => '/tentang/struktur-organisasi', 'label' => 'Struktur Organisasi',   'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
                ] as $item)
                <a href="{{ url($item['href']) }}" wire:navigate @click="closeSheet()"
                   class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-slate-50 active:bg-slate-100 transition-all duration-300 hover:translate-x-1 active:scale-95">
                    <div class="w-10 h-10 rounded-full bg-red-50 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/>
                        </svg>
                    </div>
                    <span class="text-sm font-bold text-slate-800">{{ $item['label'] }}</span>
                    <svg class="w-4 h-4 text-slate-400 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                @endforeach
            </div>
        </div>

    </div>

    {{-- ── Bottom Tab Bar ── --}}
    <div class="relative z-50 bg-white border-t-2 border-slate-200 safe-area-inset-bottom">
        <div class="flex items-center justify-around h-[4.25rem] px-2">

            {{-- Beranda --}}
            <a href="{{ url('/') }}" wire:navigate
               class="flex flex-col items-center justify-center gap-1 px-3 py-2 text-slate-500 hover:text-red-600 transition-all duration-300 active:scale-90 min-w-[3.5rem]"
               aria-label="Beranda">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span class="text-[10px] font-bold uppercase tracking-wider">Beranda</span>
            </a>

            {{-- Tentang --}}
            <button
                @click="openSheet('about')"
                :class="activeSheet === 'about' ? 'text-red-600 scale-105' : 'text-slate-500'"
                class="flex flex-col items-center justify-center gap-1 px-3 py-2 hover:text-red-600 transition-all duration-300 active:scale-90 min-w-[3.5rem]"
                aria-label="Tentang Kami"
                :aria-expanded="activeSheet === 'about'">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <span class="text-[10px] font-bold uppercase tracking-wider">Tentang</span>
            </button>

            {{-- Layanan (FAB/Center) --}}
            <a href="{{ url('/layanan') }}" wire:navigate
               class="flex flex-col items-center justify-center -translate-y-6 relative group active:scale-95 transition-transform"
               aria-label="Layanan">
                <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-slate-900 to-slate-800 shadow-[0_8px_30px_rgba(220,38,38,0.3)] flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:-translate-y-1 group-hover:shadow-[0_15px_40px_rgba(220,38,38,0.5)] border border-slate-700">
                    <span class="absolute inset-0 rounded-full bg-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <svg class="w-7 h-7 text-red-500 group-hover:text-white relative z-10 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </a>

            {{-- Berita --}}
            <a href="{{ url('/berita') }}" wire:navigate
               class="flex flex-col items-center justify-center gap-1 px-3 py-2 text-slate-500 hover:text-red-600 transition-all duration-300 active:scale-90 min-w-[3.5rem]"
               aria-label="Berita">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
                <span class="text-[10px] font-bold uppercase tracking-wider">Berita</span>
            </a>

            {{-- Kontak --}}
            <a href="{{ url('/kontak') }}" wire:navigate
               class="flex flex-col items-center justify-center gap-1 px-3 py-2 text-slate-500 hover:text-red-600 transition-all duration-300 active:scale-90 min-w-[3.5rem]"
               aria-label="Kontak">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <span class="text-[10px] font-bold uppercase tracking-wider">Kontak</span>
            </a>

        </div>
    </div>
</nav>

{{-- Safe area bottom spacer for mobile --}}
<div class="lg:hidden h-[4.25rem]"></div>
