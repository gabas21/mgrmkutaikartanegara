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

            {{-- Management Cards: 2 people --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-3xl mx-auto"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition-all duration-700 ease-out delay-200">

                @foreach([
                    ['name' => 'Elin Sumarlinah, S.Sos., M.Si', 'position' => 'Direktur', 'role' => 'PT. MGRM (Perseroda)', 'img' => 'Efri.webp'],
                    ['name' => 'Alfian Wanjah Amiruji', 'position' => 'Komisaris', 'role' => 'PT. MGRM (Perseroda)', 'img' => 'Alfianoor.webp'],
                ] as $i => $person)
                <div class="group bg-white rounded-3xl p-8 text-center shadow-[0_10px_40px_rgba(0,0,0,0.04)] border border-slate-100 hover:shadow-[0_20px_50px_rgba(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 active:scale-[0.98]">
                    
                    {{-- Photo Frame --}}
                    <div class="w-36 h-36 mx-auto mb-6 rounded-full bg-slate-100 border-4 border-white shadow-lg overflow-hidden relative flex items-center justify-center group-hover:shadow-xl group-hover:shadow-red-500/10 transition-all duration-500">
                        <img src="{{ asset('images/' . $person['img']) }}" alt="{{ $person['name'] }}" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500">
                    </div>

                    {{-- Info --}}
                    <h3 class="text-lg font-black text-slate-800 mb-1 group-hover:text-red-600 transition-colors">{{ $person['name'] }}</h3>
                    <p class="text-red-600 font-bold text-sm mb-1 tracking-wide uppercase">{{ $person['position'] }}</p>
                    <p class="text-slate-400 text-xs font-medium tracking-wider">{{ $person['role'] }}</p>
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
                   class="group inline-flex items-center gap-3 bg-red-600 hover:bg-red-500 text-white font-bold py-4 px-8 rounded-full uppercase tracking-wide transition-all duration-300 hover:shadow-[0_0_30px_rgba(220,38,38,0.4)] hover:scale-105 active:scale-95 flex-shrink-0">
                    Contact Us
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
