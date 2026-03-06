{{-- ============================================================
     FOOTER — Global Footer MGRM
     ============================================================ --}}
<footer class="bg-slate-900 text-white relative overflow-hidden border-t border-slate-800" role="contentinfo">

    {{-- Decorative background elements (Glow ala Hero Migas) --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden" aria-hidden="true">
        <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-red-600/10 rounded-full blur-[100px] mix-blend-screen mix-blend-color-dodge -translate-y-1/2 -content"></div>
        <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-blue-500/10 rounded-full blur-[120px] mix-blend-screen translate-y-1/3"></div>
        <div class="absolute inset-0 bg-[#0B1120]/80"></div>
    </div>

    {{-- ── Main Footer Content ── --}}
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">

            {{-- Kolom 1: Brand --}}
            <div class="lg:col-span-1">
                {{-- Logo / Brand --}}
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 rounded-2xl bg-white flex items-center justify-center flex-shrink-0 shadow-[0_4px_20px_rgba(255,255,255,0.1)] p-1.5 border border-white/20 relative group">
                        <span class="absolute inset-0 rounded-2xl bg-white/50 blur opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        <img src="{{ asset('images/logo-icon.webp') }}" alt="Logo MGRM" class="w-full h-full object-contain relative z-10">
                    </div>
                    <div class="leading-none">
                        <p class="text-xl font-black text-white italic tracking-tight uppercase drop-shadow-md">PT. MGRM</p>
                        <p class="text-[10px] text-red-500 font-bold tracking-widest uppercase mt-1">Kutai Kartanegara</p>
                    </div>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed mb-6 font-medium">
                    BUMD milik Pemda Kutai Kartanegara yang mengelola Participating Interest (PI) 10% pada Blok Mahakam, Blok Sanga-Sanga, dan Blok Eastkal-Attaka, serta mengembangkan bisnis hulu–hilir migas.
                </p>
                {{-- Social Media --}}
                <div class="flex items-center gap-3" role="list" aria-label="Media Sosial">
                    @foreach([
                        ['label' => 'Facebook',  'href' => '#', 'icon' => 'M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z'],
                        ['label' => 'Instagram', 'href' => '#', 'icon' => 'M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01M6.5 19.5h11a3 3 0 003-3v-11a3 3 0 00-3-3h-11a3 3 0 00-3 3v11a3 3 0 003 3z'],
                        ['label' => 'YouTube',   'href' => '#', 'icon' => 'M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 00-1.95 1.96A29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58zM9.75 15.02V8.98L15.5 12l-5.75 3.02z'],
                    ] as $social)
                    <a href="{{ $social['href'] }}"
                       class="w-10 h-10 rounded-full bg-white/5 hover:bg-red-600 text-white border border-white/10 hover:border-red-500 hover:shadow-[0_0_15px_rgba(220,38,38,0.5)] flex items-center justify-center transition-all duration-300 hover:-translate-y-1 active:scale-90"
                       aria-label="{{ $social['label'] }}"
                       target="_blank"
                       rel="noopener noreferrer"
                       role="listitem">
                        <svg class="w-5 h-5 currentColor" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $social['icon'] }}"/>
                        </svg>
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- Kolom 2: Tautan Halaman --}}
            <div>
                <h3 class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-5">Halaman</h3>
                <ul class="space-y-2.5" role="list">
                    @foreach([
                        ['href' => '/',                           'label' => 'Beranda'],
                        ['href' => '/tentang/visi-misi',          'label' => 'Profil Perusahaan'],
                        ['href' => '/tentang/sejarah',             'label' => 'Sejarah Perusahaan'],
                        ['href' => '/tentang/struktur-organisasi', 'label' => 'Struktur Organisasi'],
                        ['href' => '/layanan',                     'label' => 'Layanan'],
                        ['href' => '/ppid',                        'label' => 'PPID'],
                    ] as $link)
                    <li role="listitem">
                        <a href="{{ url($link['href']) }}" wire:navigate
                           class="text-sm font-semibold text-slate-400 hover:text-white transition-all duration-300 active:scale-95 origin-left flex items-center gap-3 group">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-700 group-hover:bg-red-500 group-hover:scale-150 group-hover:shadow-[0_0_10px_rgba(239,68,68,0.8)] transition-all duration-300 flex-shrink-0"></span>
                            {{ $link['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Kolom 3: Publikasi --}}
            <div>
                <h3 class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-5">Publikasi</h3>
                <ul class="space-y-2.5" role="list">
                    @foreach([
                        ['href' => '/berita',     'label' => 'Berita & Press Release'],
                        ['href' => '/pengumuman', 'label' => 'Pengumuman'],
                        ['href' => '/dokumen',    'label' => 'Dokumen Publik'],
                        ['href' => '/kontak',     'label' => 'Kontak Kami'],
                    ] as $link)
                    <li role="listitem">
                        <a href="{{ url($link['href']) }}" wire:navigate
                           class="text-sm font-semibold text-slate-400 hover:text-white transition-all duration-300 active:scale-95 origin-left flex items-center gap-3 group">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-700 group-hover:bg-red-500 group-hover:scale-150 group-hover:shadow-[0_0_10px_rgba(239,68,68,0.8)] transition-all duration-300 flex-shrink-0"></span>
                            {{ $link['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Kolom 4: Kontak --}}
            <div>
                <h3 class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-5">Kontak</h3>
                <address class="not-italic space-y-4">

                    {{-- Alamat --}}
                    <div class="flex items-start gap-4 group px-3 py-2 -mx-3 rounded-2xl hover:bg-white/5 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-white/5 group-hover:bg-gradient-to-br from-red-500 to-red-600 text-slate-400 group-hover:text-white flex items-center justify-center flex-shrink-0 mt-0.5 border border-white/10 group-hover:border-red-500 transition-all shadow-[0_4px_10px_rgba(0,0,0,0.1)] group-hover:shadow-[0_4px_15px_rgba(220,38,38,0.4)]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-slate-400 group-hover:text-white transition-colors leading-relaxed">
                            Jl. Lais, Timbau, Kec. Tenggarong,<br>Kab. Kutai Kartanegara,<br>Kalimantan Timur
                        </p>
                    </div>

                    {{-- Telepon --}}
                    <div class="flex items-center gap-4 group px-3 py-2 -mx-3 rounded-2xl hover:bg-white/5 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-white/5 group-hover:bg-gradient-to-br from-red-500 to-red-600 text-slate-400 group-hover:text-white flex items-center justify-center flex-shrink-0 border border-white/10 group-hover:border-red-500 transition-all shadow-[0_4px_10px_rgba(0,0,0,0.1)] group-hover:shadow-[0_4px_15px_rgba(220,38,38,0.4)]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <a href="tel:+6254112345" class="text-sm font-semibold text-slate-400 group-hover:text-white transition-colors">(0541) 12345</a>
                    </div>

                    {{-- Email --}}
                    <div class="flex items-center gap-4 group px-3 py-2 -mx-3 rounded-2xl hover:bg-white/5 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-white/5 group-hover:bg-gradient-to-br from-red-500 to-red-600 text-slate-400 group-hover:text-white flex items-center justify-center flex-shrink-0 border border-white/10 group-hover:border-red-500 transition-all shadow-[0_4px_10px_rgba(0,0,0,0.1)] group-hover:shadow-[0_4px_15px_rgba(220,38,38,0.4)]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <a href="mailto:info@mgrm.co.id" class="text-sm font-semibold text-slate-400 group-hover:text-white transition-colors">info@mgrm.co.id</a>
                    </div>

                    {{-- Jam Kerja --}}
                    <div class="flex items-start gap-4 group px-3 py-2 -mx-3 rounded-2xl hover:bg-white/5 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-white/5 group-hover:bg-gradient-to-br from-red-500 to-red-600 text-slate-400 group-hover:text-white flex items-center justify-center flex-shrink-0 mt-0.5 border border-white/10 group-hover:border-red-500 transition-all shadow-[0_4px_10px_rgba(0,0,0,0.1)] group-hover:shadow-[0_4px_15px_rgba(220,38,38,0.4)]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-slate-400 group-hover:text-white transition-colors leading-relaxed">
                            Sen – Jum: 08.00 – 16.00 WITA<br>
                            <span class="text-white/40 text-xs">Sabtu & Minggu: Tutup</span>
                        </p>
                    </div>

                </address>
            </div>

        </div>

        {{-- ── Divider ── --}}
        <div class="border-t border-slate-800 mt-12 pt-7 flex flex-col lg:flex-row items-center justify-between gap-5">
            <div class="flex flex-col sm:flex-row items-center gap-4">
                <p class="text-xs font-bold text-slate-500 text-center sm:text-left">
                    &copy; {{ date('Y') }} PT. Mahakam Gerbang Raja Migas. Semua hak dilindungi.
                </p>
                <div class="hidden sm:block w-px h-4 bg-slate-700"></div>
                
                {{-- TALL Stack Standardization Badge --}}
                <div class="flex items-center gap-2 group cursor-default hover:scale-105 transition-transform duration-300" title="Tailwind CSS, Alpine.js, Laravel, Livewire">
                    <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Standarisasi</span>
                    <div class="flex items-center gap-1.5 bg-slate-800/80 border border-slate-700/50 px-3 py-1 rounded-full group-hover:border-red-500/50 group-hover:bg-slate-800 transition-all shadow-sm">
                        <span class="text-[11px] font-black tracking-widest text-transparent bg-clip-text bg-gradient-to-r from-sky-400 via-teal-400 to-red-500">TALL</span>
                        <span class="text-[10px] font-bold text-slate-300 tracking-wider">STACK</span>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ url('/kebijakan-privasi') }}" wire:navigate
                   class="text-xs font-bold text-slate-500 hover:text-red-500 transition-colors">Kebijakan Privasi</a>
                <span class="text-slate-700">·</span>
                <a href="{{ url('/syarat-ketentuan') }}" wire:navigate
                   class="text-xs font-bold text-slate-500 hover:text-red-500 transition-colors">Syarat & Ketentuan</a>
            </div>
        </div>

    </div>
</footer>
