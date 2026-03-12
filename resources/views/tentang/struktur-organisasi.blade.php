<x-layouts.app>
    <x-slot:title>Struktur Organisasi | PT. Mahakam Gerbang Raja Migas</x-slot:title>

    {{-- ═══════════════════════════════════════════════
         HERO SECTION
    ═══════════════════════════════════════════════ --}}
    <section class="relative pt-32 pb-20 bg-[#0B1120] overflow-hidden">
        <div class="absolute inset-0 z-0 pointer-events-none">
            <img src="{{ asset('images/WhatsApp-Image-2023-07-25-at-11.11.33.webp') }}" alt="Background MGRM" class="absolute inset-0 w-full h-full object-cover opacity-30 mix-blend-overlay" />
            <div class="absolute top-0 left-1/3 w-[500px] h-[500px] bg-red-600/15 rounded-full blur-[120px] mix-blend-screen -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-1/4 w-[400px] h-[400px] bg-blue-500/10 rounded-full blur-[80px] mix-blend-screen translate-y-1/3"></div>
            <div class="absolute inset-0 bg-[#0B1120]/70"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center"
             x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
             class="transition-all duration-700 ease-out">
            
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-sm mb-8">
                <span class="flex h-2 w-2 rounded-full bg-red-500 animate-pulse"></span>
                <span class="text-red-400 font-bold tracking-widest text-[11px] uppercase">Tentang Kami</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-[60px] font-black text-white leading-[1.1] mb-6 tracking-tight">
                Struktur <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-400 drop-shadow-lg">Organisasi</span>
            </h1>
            
            <p class="text-slate-400 text-lg md:text-xl max-w-2xl mx-auto font-medium leading-relaxed">
                Susunan organisasi PT. Mahakam Gerbang Raja Migas (Perseroda) yang terstruktur dan profesional untuk mendukung kinerja optimal perusahaan.
            </p>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         SECTION: BAGAN STRUKTUR ORGANISASI
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 lg:py-32 bg-white relative overflow-hidden">
        {{-- Decorative --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-red-50 rounded-full blur-[80px] translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            {{-- Section Header --}}
            <div class="text-center mb-14"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                 class="transition-all duration-700 ease-out">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 mb-5">
                    <span class="flex h-2 w-2 rounded-full bg-red-500"></span>
                    <span class="text-red-600 font-bold tracking-widest text-[11px] uppercase">Bagan Organisasi</span>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight mb-4">
                    Struktur Organisasi <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-400">Perusahaan</span>
                </h2>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto font-medium leading-relaxed">
                    Bagan resmi susunan jabatan dan hierarki organisasi PT. Mahakam Gerbang Raja Migas (Perseroda).
                </p>
            </div>

            {{-- IMAGE PLACEHOLDER: Bagan Struktur Organisasi --}}
            <div class="max-w-5xl mx-auto"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition-all duration-700 ease-out delay-200">
                <div class="bg-white rounded-[2.5rem] p-4 md:p-6 shadow-[0_20px_60px_rgba(0,0,0,0.06)] border border-slate-100 relative overflow-hidden group">
                    {{-- Glow Corner --}}
                    <div class="absolute -top-20 -right-20 w-60 h-60 bg-red-500/5 rounded-full blur-3xl pointer-events-none"></div>
                    
                    {{-- Original Image for org chart --}}
                    <div class="w-full bg-slate-50 rounded-3xl border-2 border-slate-100 flex items-center justify-center relative overflow-hidden p-2 hover:border-slate-300 transition-all duration-500">
                        <img src="{{ asset('images/struktur organisasi.webp') }}" alt="Bagan Struktur Organisasi MGRM" class="w-full h-auto object-contain rounded-2xl group-hover:scale-[1.02] transition-transform duration-700">
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         SECTION: TOP MANAGEMENT
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 lg:py-32 bg-slate-50 relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-red-50 rounded-full blur-[80px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            {{-- Section Header --}}
            <div class="text-center mb-16"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                 class="transition-all duration-700 ease-out">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-200/60 border border-slate-200 mb-5">
                    <span class="flex h-2 w-2 rounded-full bg-slate-500"></span>
                    <span class="text-slate-600 font-bold tracking-widest text-[11px] uppercase">Pimpinan</span>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight mb-4">
                    Top <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-400">Management</span>
                </h2>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto font-medium leading-relaxed">
                    Jajaran pimpinan yang memimpin dan mengarahkan perusahaan menuju visi yang lebih baik.
                </p>
            </div>

            {{-- Management Cards: 3 people --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition-all duration-700 ease-out delay-200">

                @foreach([
                    ['name' => 'Elin Sumarlinah, S.Sos., M.Si', 'position' => 'Direktur', 'role' => 'PT. MGRM (Perseroda)', 'img' => 'Efri.webp'],
                    ['name' => 'Alfian Wanjah Amiruji', 'position' => 'Komisaris', 'role' => 'PT. MGRM (Perseroda)', 'img' => 'Alfianoor.webp'],
                ] as $i => $person)
                <div class="group relative text-center">
                    {{-- Solid offset shadow (Red for Efri, Dark for Alfian) --}}
                    @php $bgColor = $i === 0 ? 'bg-red-600' : 'bg-[#0B1120]'; @endphp
                    <div class="absolute inset-0 {{ $bgColor }} rounded-[1.5rem] translate-x-3 translate-y-3 transition-transform group-hover:translate-x-4 group-hover:translate-y-4 duration-500"></div>

                    <div class="relative z-10 bg-white border border-slate-100 rounded-[1.5rem] overflow-hidden">
                        {{-- Photo Container (White Background) --}}
                        <div class="h-64 sm:h-80 bg-white flex items-center justify-center p-6 sm:p-4 pt-8">
                            <div class="w-40 h-40 sm:w-48 sm:h-48 rounded-full bg-slate-50 shadow-md overflow-hidden relative flex items-center justify-center group-hover:shadow-xl transition-all duration-500">
                                <img src="{{ asset('images/' . $person['img']) }}" alt="{{ $person['name'] }}" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-700">
                            </div>
                        </div>

                        {{-- Info (Inset Banner) --}}
                        <div class="p-4 pt-0 pb-6">
                            <div class="{{ $bgColor }} px-4 py-4 text-white flex flex-col justify-center min-h-[5rem]">
                                <h3 class="text-xs sm:text-sm font-black uppercase tracking-wide leading-tight group-hover:text-white transition-colors">{{ $person['name'] }}</h3>
                                <p class="text-white/80 font-bold text-[10px] sm:text-xs mt-1 tracking-widest uppercase">{{ $person['position'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Management Cards: Operational Team --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto mt-12"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition-all duration-700 ease-out delay-300">

                @foreach([
                    ['name' => 'Denny Dharmawan', 'position' => 'Manager SDM & SJB', 'img' => 'denny.png'],
                    ['name' => 'Marsuki', 'position' => 'Manager Keuangan', 'img' => 'marsuki.png'],
                    ['name' => 'Syamsudi Sese', 'position' => 'Manager Operasional, RISET & Pengembangan Bisnis', 'img' => 'syamsudi.png'],
                ] as $i => $manager)
                <div class="group relative text-center">
                    {{-- Solid offset shadow (Red for Marsuki[1], Dark for others) --}}
                    @php $bColor = $i === 1 ? 'bg-red-600' : 'bg-[#0B1120]'; @endphp
                    <div class="absolute inset-0 {{ $bColor }} rounded-[1.5rem] translate-x-3 translate-y-3 transition-transform group-hover:translate-x-4 group-hover:translate-y-4 duration-500"></div>

                    <div class="relative z-10 bg-white border border-slate-100 rounded-[1.5rem] overflow-hidden">
                        {{-- Photo Container (White Background) --}}
                        <div class="h-56 sm:h-64 bg-white flex items-center justify-center p-5 sm:p-4 pt-8">
                            <div class="w-36 h-36 sm:w-44 sm:h-44 rounded-full bg-slate-50 shadow-md overflow-hidden relative flex items-center justify-center group-hover:shadow-xl transition-all duration-500">
                                <img src="{{ asset('images/' . $manager['img']) }}" alt="{{ $manager['name'] }}" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-700">
                            </div>
                        </div>

                        {{-- Info (Inset Banner) --}}
                        <div class="p-4 pt-0 pb-6">
                            <div class="{{ $bColor }} px-3 py-4 text-white flex flex-col justify-center min-h-[5.5rem]">
                                <h3 class="text-xs sm:text-sm font-black uppercase tracking-wide leading-tight">{{ $manager['name'] }}</h3>
                                <p class="text-white/80 font-bold text-[9px] sm:text-[10px] mt-1 tracking-widest uppercase">{{ $manager['position'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         CTA SECTION
    ═══════════════════════════════════════════════ --}}
    <section class="py-20 bg-[#0B1120] relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/2 left-1/2 w-[600px] h-[600px] bg-red-600/10 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-4xl mx-auto px-6 relative z-10"
             x-data="{ visible: false }" x-intersect.once="visible = true"
             :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
             class="transition-all duration-700 ease-out">
            <div class="bg-gradient-to-r from-slate-800 to-slate-900 rounded-3xl p-10 md:p-14 border border-white/10 shadow-2xl flex flex-col md:flex-row items-center justify-between gap-8">
                <div>
                    <p class="text-red-400 font-bold text-xs tracking-widest uppercase mb-2">PT Mahakam Gerbang Raja Migas (Perseroda)</p>
                    <h3 class="text-2xl md:text-3xl font-black text-white tracking-tight">
                        Ingin Konsultasi dengan <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-600">Tim Kami?</span>
                    </h3>
                </div>
                <a href="{{ url('/kontak') }}" wire:navigate
                   class="group inline-flex items-center gap-3 bg-red-600 hover:bg-red-500 text-white font-bold py-4 px-8 rounded-full uppercase tracking-wide transition-all duration-300 hover:shadow-[0_0_30px_rgba(220,38,38,0.4)] hover:scale-105 active:scale-95 touch-manipulation flex-shrink-0">
                    Contact Us
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
