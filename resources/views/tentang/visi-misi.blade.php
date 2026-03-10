<x-layouts.app>
    <x-slot:title>Profil Perusahaan — PT. Mahakam Gerbang Raja Migas</x-slot:title>

    {{-- ═══════════════════════════════════════════════
         SECTION 1 — COMPANY PROFILE (Hero)
    ═══════════════════════════════════════════════ --}}
    <section class="relative min-h-screen flex items-center bg-slate-900 overflow-hidden">
        {{-- Background Image --}}
        <div class="absolute inset-0 z-0 pointer-events-none">
            <img src="{{ asset('images/WhatsApp-Image-2023-07-25-at-11.11.33.webp') }}" alt="Background MGRM" class="absolute inset-0 w-full h-full object-cover opacity-20 mix-blend-overlay" />
        </div>

        {{-- Grid texture --}}
        <div class="absolute inset-0 opacity-[0.04] pointer-events-none z-0"
             style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Aksen merah kanan --}}
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-red-900/20 to-transparent pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                {{-- Teks --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-16'"
                    class="transition-all duration-1000 ease-out"
                >
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-1 bg-red-600"></div>
                        <span class="text-red-500 font-bold tracking-widest text-sm uppercase">PT. MGRM (Perseroda)</span>
                    </div>

                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white leading-[1.05] uppercase tracking-tight mb-6">
                        COMPANY<br/>
                        <span class="text-red-600">PROFILE</span>
                    </h1>

                    <div class="w-16 h-1 bg-red-600 mb-6"></div>

                    <p class="text-slate-300 text-lg font-semibold uppercase tracking-widest mb-10">
                        Inovatif, Berdaya Saing, dan Mandiri<br/>
                        <span class="text-slate-400 font-medium normal-case tracking-normal">untuk Kukar Idaman Terbaik.</span>
                    </p>

                    <div class="flex items-center gap-4 mt-8">
                        <img src="{{ asset('images/logo.webp') }}" alt="Logo PT MGRM"
                             class="h-16 object-contain"
                             onerror="this.style.display='none'">
                        <div>
                            <p class="text-white font-black text-lg uppercase tracking-tight">PT. MGRM (Perseroda)</p>
                            <p class="text-slate-400 text-sm font-semibold uppercase tracking-widest">Kutai Kartanegara</p>
                        </div>
                    </div>
                </div>

                {{-- Foto --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-16'"
                    class="transition-all duration-1000 ease-out delay-200 relative"
                >
                    <div class="relative group">
                        <!-- Decorative blur/glow bg -->
                        <div class="absolute -inset-2 bg-gradient-to-r from-red-600/30 to-blue-500/20 rounded-[2.5rem] blur-xl opacity-70 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 border border-white/20 rounded-[2rem] translate-x-3 translate-y-3 z-0"></div>
                        <div class="relative z-10 rounded-[2rem] overflow-hidden shadow-2xl border border-white/10 bg-slate-800">
                            <img src="{{ asset('images/WhatsApp-Image-2023-07-25-at-11.11.33.webp') }}"
                                 alt="Fasilitas PT. MGRM"
                                 class="w-full h-[500px] object-cover transition-transform duration-700 group-hover:scale-105"
                                 onerror="this.outerHTML='<div class=\'w-full h-[500px] bg-slate-800 flex items-center justify-center\'><svg class=\'w-20 h-20 text-slate-600\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-width=\'1.5\' d=\'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\'/></svg></div>'">
                        </div>
                        <div class="absolute bottom-6 left-6 z-20 bg-gradient-to-r from-red-600 to-red-500 px-6 py-3 rounded-full text-white font-black text-[15px] uppercase tracking-wide shadow-[0_8px_20px_rgba(220,38,38,0.4)] border border-red-400/30">
                            PI 10% Blok Mahakam
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/30 animate-bounce">
            <span class="text-xs font-bold tracking-widest uppercase">Scroll</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         SECTION 2 — TENTANG PERUSAHAAN
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 lg:py-32 bg-white relative overflow-hidden">

        <div class="absolute inset-0 opacity-[0.02] pointer-events-none"
             style="background-image: linear-gradient(#000 1px, transparent 1px), linear-gradient(90deg, #000 1px, transparent 1px); background-size: 40px 40px;"></div>

        <div class="absolute top-0 left-0 w-2 h-full bg-red-600"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                {{-- Foto kiri --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-16'"
                    class="transition-all duration-1000 ease-out order-2 lg:order-1"
                >
                    <div class="relative group">
                        <!-- Soft decorative shadow -->
                        <div class="absolute -inset-4 bg-slate-200/50 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 border border-slate-200 rounded-[2rem] -translate-x-3 translate-y-3 z-0"></div>
                        <div class="relative z-10 rounded-[2rem] overflow-hidden shadow-xl bg-slate-100">
                            <img src="{{ asset('images/IMG-20230103-WA0022-768x436-1.webp') }}"
                                 alt="Tentang PT. MGRM"
                                 class="w-full h-64 sm:h-[420px] object-contain sm:object-cover p-4 sm:p-0 transition-transform duration-700 group-hover:scale-105"
                                 onerror="this.outerHTML='<div class=\'w-full h-[420px] bg-slate-100 flex flex-col items-center justify-center border border-slate-200\'><svg class=\'w-16 h-16 text-slate-300 mb-4\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-width=\'1.5\' d=\'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\'/></svg><span class=\'text-slate-400 font-bold text-sm uppercase tracking-widest\'>Foto Perusahaan</span></div>'">
                        </div>
                        <div class="absolute -bottom-4 -right-4 z-20 bg-slate-900 text-white px-6 py-4 text-center shadow-xl rounded-2xl border border-slate-700 backdrop-blur-md">
                            <p class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-400">2018</p>
                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest mt-1">Didirikan</p>
                        </div>
                    </div>
                </div>

                {{-- Teks kanan --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-16'"
                    class="transition-all duration-1000 ease-out delay-200 order-1 lg:order-2"
                >
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-8 h-1 bg-red-600"></div>
                        <span class="text-slate-500 font-bold tracking-widest text-sm uppercase">Profil Perusahaan</span>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-8 leading-tight uppercase">
                        TENTANG<br/>
                        <span class="text-red-600">PERUSAHAAN</span>
                    </h2>

                    <div class="space-y-5 text-slate-700 leading-relaxed">
                        <p>
                            PT. MGRM (Perseroda) adalah Badan Usaha Milik Daerah (BUMD) yang didirikan secara resmi pada 26 Oktober 2018 oleh Pemerintah Kabupaten Kutai Kartanegara. Pendirian perusahaan ini merupakan wujud nyata dari komitmen daerah untuk berdaulat atas sumber daya energi, merealisasikan amanah Undang-Undang yang memungkinkan BUMD berpartisipasi aktif dalam sektor Minyak dan Gas Bumi (Migas) serta industri penunjangnya.
                        </p>
                        <p>
                            Sebagai perusahaan milik daerah, PT. MGRM (Perseroda) mengemban mandat strategis sebagai BUMD Penerima Participating Interest (PI) 10% dari Wilayah Kerja (WK) Migas yang beroperasi di wilayah Kabupaten Kutai Kartanegara, diantaranya Blok Mahakam, Blok Sanga-Sanga, dan Blok Eastkal-Attaka.
                        </p>
                    </div>

                    <div class="grid grid-cols-3 gap-4 mt-10 border-t border-slate-200 pt-8">
                        <div>
                            <p class="text-3xl font-black text-red-600 mb-1">PI 10%</p>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-widest">Participating Interest</p>
                        </div>
                        <div>
                            <p class="text-3xl font-black text-red-600 mb-1">3</p>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-widest">Blok Migas</p>
                        </div>
                        <div>
                            <p class="text-3xl font-black text-red-600 mb-1">10+</p>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-widest">Lini Bisnis</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         SECTION 3 — KATA SAMBUTAN DIREKTUR
         Teks sambutan di kiri, foto direktur BESAR di kanan
         Background putih bersih
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 lg:py-32 bg-slate-50 relative overflow-hidden">

        {{-- Aksen merah kanan --}}
        <div class="absolute top-0 right-0 w-2 h-full bg-red-600"></div>

        {{-- Motif titik-titik dekoratif --}}
        <div class="absolute left-10 top-10 w-56 h-56 opacity-[0.07] pointer-events-none"
             style="background-image: radial-gradient(#dc2626 1.5px, transparent 1.5px); background-size: 18px 18px;"></div>
        <div class="absolute right-14 bottom-14 w-56 h-56 opacity-[0.07] pointer-events-none"
             style="background-image: radial-gradient(#dc2626 1.5px, transparent 1.5px); background-size: 18px 18px;"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">

            {{-- Label section --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out text-center mb-16"
            >
                <div class="inline-flex items-center gap-3 mb-3">
                    <div class="w-10 h-1 bg-red-600"></div>
                    <span class="text-slate-500 font-bold tracking-widest text-sm uppercase">Dari Pimpinan</span>
                    <div class="w-10 h-1 bg-red-600"></div>
                </div>
                <h2 class="text-5xl md:text-6xl font-black text-slate-900 uppercase leading-tight">
                    KATA <span class="text-red-600">SAMBUTAN</span>
                </h2>
            </div>

            {{-- Grid: teks kiri (3/5), foto kanan (2/5) --}}
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16 items-stretch">

                {{-- Kolom Teks Sambutan (KIRI) --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-16'"
                    class="transition-all duration-1000 ease-out lg:col-span-3 flex flex-col justify-center"
                >
                    {{-- Tanda kutip besar dekoratif --}}
                    <div class="text-red-600/15 font-serif text-[140px] leading-none select-none -mb-10">"</div>

                    {{-- Teks --}}
                    <div class="space-y-5 text-slate-700 leading-relaxed text-justify">
                        <p>
                            Kami memahami bahwa perusahaan yang besar dibangun atas integritas, loyalitas dan semangat kolaborasi untuk maju bersama. PT. MGRM (Perseroda) membuka diri untuk bekerja sama dengan seluruh pihak membangun dan mengembangkan bisnis di sektor minyak dan gas bumi (Migas) serta industri penunjang-nya.
                        </p>
                        <p>
                            PT. MGRM (Perseroda) merupakan BUMD penerima PI 10% di Blok Mahakam dan Blok Sanga-Sanga serta dalam proses selaku penerima PI 10% pada Blok Eastkal-Attaka. Selain menerima PI 10%, kami menjalankan bisnis penunjang diantaranya sebagai Trading & Transportir BBM Industri (HSD B-40), Vendor Held Stock (VHS) di beberapa Perusahaan Pertambangan dan Perkebunan, Supplier Gas LPG PSO & Non PSO, Vendor & Kontraktor Pertamina Group serta Rentral Kendaraan Operasional & Lapangan.
                        </p>
                        <p>
                            Di tahun 2026-2027 mendatang, PT. MGRM (Perseroda) akan mengembangkan bisnis di bidang trading gas alam baik dalam bentuk <em>Liquefied Natural Gas (LNG)</em> atau <em>Compressed Natural Gas (CNG)</em> sebagai tindaklanjut Permen ESDM Nomor 6 Tahun 2016. Melaksanakan ketentuan Permen ESDM Nomor 37 Tahun 2016 Jo. Permen ESDM Nomor 1 Tahun 2025, PT MGRM (Perseroda) bersama Pemerintah Daerah akan terus memperjuangkan kepemilikan PI 10% pada Blok Migas yang berada diatas 12 Mil laut.
                        </p>
                    </div>

                    {{-- Kutipan penutup --}}
                    <div class="mt-10 border-l-4 border-red-500 pl-6 bg-white/60 backdrop-blur-md rounded-r-2xl py-6 pr-6 shadow-[0_4px_20px_rgba(0,0,0,0.03)] border-y border-r border-slate-100">
                        <p class="text-red-700 font-bold text-lg italic leading-snug drop-shadow-sm">
                            "Bersama membangun Kutai Kartanegara yang Inovatif, Berdaya Saing, dan Mandiri."
                        </p>
                        <p class="text-slate-700 font-black mt-4 text-[13px] uppercase tracking-widest">— Efri Novianto, Direktur</p>
                    </div>
                </div>

                {{-- Kolom Foto Direktur BESAR (KANAN) --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-16'"
                    class="transition-all duration-1000 ease-out delay-200 lg:col-span-2"
                >
                    <div class="relative h-full group">
                        {{-- Frame dekoratif --}}
                        <div class="absolute -inset-4 border-2 border-red-500/30 rounded-[2.5rem] translate-x-5 translate-y-5 hidden lg:block transition-transform duration-700 group-hover:translate-x-3 group-hover:translate-y-3"></div>

                        {{-- Foto besar --}}
                        <div class="relative z-10 border border-slate-200 rounded-[2rem] shadow-2xl overflow-hidden h-full min-h-[500px] bg-slate-50">
                            <img src="{{ asset('images/direktur.webp') }}"
                                 alt="Efri Novianto — Direktur PT. MGRM"
                                 class="w-full h-full object-cover object-top"
                                 style="min-height: 500px;"
                                 loading="lazy"
                                 onerror="this.outerHTML='<div style=\'min-height:500px\' class=\'w-full h-full bg-slate-200 flex flex-col items-center justify-center\'><svg class=\'w-20 h-20 text-slate-400 mb-4\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-width=\'1.5\' d=\'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\'/></svg><span class=\'text-slate-500 text-sm font-bold uppercase tracking-widest\'>Foto Direktur</span></div>'">

                            {{-- Overlay badge nama di bagian bawah foto --}}
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent pt-16 pb-6 px-6 z-10">
                                <p class="text-white font-black text-2xl leading-tight">Efri Novianto</p>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-6 h-0.5 bg-red-500"></div>
                                    <p class="text-red-400 font-bold text-sm uppercase tracking-widest">Direktur</p>
                                </div>
                                <p class="text-slate-400 text-sm mt-1">PT. MGRM (Perseroda)</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         SECTION 4 — VISI
         Background putih bersih, teks kiri + foto kanan
    ═══════════════════════════════════════════════ --}}
    <section class="py-20 lg:py-28 bg-white relative overflow-hidden">

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">

                {{-- Teks Visi (KIRI) --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-16'"
                    class="transition-all duration-1000 ease-out"
                >
                    <h2 class="text-5xl md:text-6xl font-black text-slate-900 mb-6 leading-tight">
                        Visi
                    </h2>
                    <div class="w-12 h-1 bg-red-600 mb-8"></div>
                    <p class="text-slate-700 text-xl leading-relaxed">
                        Menjadi BUMD terbaik di Kalimantan Timur pada Tahun 2027
                    </p>
                    <div class="mt-10 flex items-center gap-4">
                        <div class="w-1 h-12 bg-red-600"></div>
                        <p class="text-slate-500 text-base leading-relaxed italic">
                            "Menjadi Badan Usaha Milik Daerah yang Inovatif, Berdaya Saing Global, dan Mandiri Menuju Perseroda Idaman Kutai Kartanegara."
                        </p>
                    </div>
                </div>

                {{-- Foto Gedung (KANAN) --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-16'"
                    class="transition-all duration-1000 ease-out delay-200 relative"
                >
                    {{-- Titik-titik dekoratif biru kiri atas --}}
                    <div class="absolute -left-6 -top-6 w-28 h-28 opacity-30 pointer-events-none z-0"
                         style="background-image: radial-gradient(#3b82f6 2px, transparent 2px); background-size: 14px 14px;"></div>

                    {{-- Titik-titik dekoratif biru kanan bawah --}}
                    <div class="absolute -right-6 -bottom-6 w-28 h-28 opacity-30 pointer-events-none z-0"
                         style="background-image: radial-gradient(#3b82f6 2px, transparent 2px); background-size: 14px 14px;"></div>

                    {{-- Frame merah pojok kanan atas --}}
                    <div class="absolute top-0 right-0 w-20 h-20 border-t-4 border-r-4 rounded-tr-3xl border-red-500 z-20"></div>

                    {{-- Frame merah pojok kiri bawah --}}
                    <div class="absolute bottom-0 left-0 w-20 h-20 border-b-4 border-l-4 rounded-bl-3xl border-red-500 z-20"></div>

                    {{-- Foto --}}
                    <div class="relative z-10 overflow-hidden rounded-[2rem] shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-slate-100 group bg-slate-50">
                        <img src="{{ asset('images/WhatsApp-Image-2023-07-25-at-11.11.33.webp') }}"
                             alt="Kantor PT. MGRM Kutai Kartanegara"
                             class="w-full h-64 sm:h-[380px] object-contain sm:object-cover p-4 sm:p-0"
                             onerror="this.outerHTML='<div class=\'w-full h-[380px] bg-slate-100 flex flex-col items-center justify-center\'><svg class=\'w-16 h-16 text-slate-300 mb-3\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\'/></svg><span class=\'text-slate-400 text-sm font-bold uppercase tracking-widest\'>Foto Kantor</span></div>'">
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         SECTION 4b — MISI
         Background gelap (slate-900), konsisten dengan desain web
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 lg:py-32 bg-slate-900 relative overflow-hidden">

        {{-- Grid texture --}}
        <div class="absolute inset-0 opacity-[0.04] pointer-events-none"
             style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Aksen merah kanan --}}
        <div class="absolute top-0 right-0 w-2 h-full bg-red-600"></div>

        {{-- Lingkaran dekoratif --}}
        <div class="absolute -left-24 bottom-0 w-96 h-96 rounded-full bg-red-900/10 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">

            {{-- Header --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out mb-16"
            >
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-1 bg-red-600"></div>
                    <span class="text-red-500 font-bold tracking-widest text-sm uppercase">Arah Kami</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-black text-white uppercase leading-tight">
                    MISI <span class="text-red-600">PERUSAHAAN</span>
                </h2>
                <p class="text-slate-400 mt-3 text-lg max-w-2xl">
                    Menjadikan PT. MGRM sebagai Perseroda <strong class="text-white">IDAMAN</strong> — Inovatif, Berdaya Saing dan Mandiri.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

                {{-- Kiri: List 5 Misi bernomor --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-16'"
                    class="transition-all duration-1000 ease-out"
                >
                    <div class="space-y-4">
                        @foreach([
                            'Mengelola dan mengembangkan Participating Interest (PI) 10% secara profesional dan bertanggung jawab demi mengoptimalkan Pendapatan Asli Daerah.',
                            'Mengembangkan lini bisnis yang berdaya saing dan berorientasi pada pertumbuhan ekonomi daerah yang berkelanjutan.',
                            'Meningkatkan kompetensi sumber daya manusia melalui pelatihan dan pengembangan berkelanjutan untuk mendukung inovasi perusahaan.',
                            'Membangun kemitraan strategis yang kokoh dengan berbagai pihak demi memperkuat posisi dan kapasitas perusahaan di industri migas.',
                            'Berkontribusi aktif pada peningkatan kesejahteraan masyarakat dan pembangunan daerah Kutai Kartanegara secara berkelanjutan.',
                        ] as $idx => $misi)
                        <div class="flex gap-5 items-start group">
                            <div class="w-11 h-11 flex-shrink-0 bg-red-600/20 group-hover:bg-red-600 border border-red-500/30 rounded-full flex items-center justify-center font-black text-sm text-red-500 group-hover:text-white transition-all duration-300 shadow-[0_0_15px_rgba(220,38,38,0)] group-hover:shadow-[0_0_15px_rgba(220,38,38,0.5)]">
                                {{ str_pad($idx + 1, 2, '0', STR_PAD_LEFT) }}
                            </div>
                            <div class="border-l-2 border-slate-800/50 pl-5 py-1 group-hover:border-red-500 transition-colors duration-300">
                                <p class="text-slate-400 font-medium leading-relaxed group-hover:text-white transition-colors duration-300">{{ $misi }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Kanan: 3 highlight card IDAMAN --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-16'"
                    class="transition-all duration-1000 ease-out delay-200"
                >
                    <div class="grid grid-cols-1 gap-4">

                        {{-- Inovatif --}}
                        <div class="flex gap-5 items-start bg-slate-800/50 hover:bg-slate-800 border border-white/5 hover:border-red-500/40 rounded-3xl p-6 transition-all duration-300 group hover:shadow-[0_8px_30px_rgba(220,38,38,0.15)] hover:-translate-y-1 active:scale-95 touch-manipulation">
                            <div class="w-12 h-12 rounded-full flex-shrink-0 bg-gradient-to-br from-red-500 to-red-600 shadow-lg shadow-red-500/20 flex items-center justify-center group-hover:shadow-red-500/50 group-active:scale-90 transition-all duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-black text-base uppercase tracking-wide mb-1 transition-colors">Inovatif</p>
                                <p class="text-slate-400 text-sm leading-relaxed group-hover:text-slate-300 transition-colors duration-300">
                                    PT. MGRM terus berinovasi untuk menghasilkan PAD bagi daerah dengan terus mengembangkan bisnis perusahaan.
                                </p>
                            </div>
                        </div>

                        {{-- Berdaya Saing --}}
                        <div class="flex gap-5 items-start bg-slate-800/50 hover:bg-slate-800 border border-white/5 hover:border-red-500/40 rounded-3xl p-6 transition-all duration-300 group hover:shadow-[0_8px_30px_rgba(220,38,38,0.15)] hover:-translate-y-1 active:scale-95 touch-manipulation">
                            <div class="w-12 h-12 rounded-full flex-shrink-0 bg-slate-800 border border-slate-600 group-hover:border-red-500 group-hover:bg-slate-700 shadow-lg flex items-center justify-center group-active:scale-90 transition-all duration-300">
                                <svg class="w-5 h-5 text-slate-300 group-hover:text-red-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-black text-base uppercase tracking-wide mb-1 transition-colors">Berdaya Saing</p>
                                <p class="text-slate-400 text-sm leading-relaxed group-hover:text-slate-300 transition-colors duration-300">
                                    PT. MGRM menjadi perseroda yang kompetitif di Kalimantan Timur sebagai penghasil PAD.
                                </p>
                            </div>
                        </div>

                        {{-- Mandiri --}}
                        <div class="flex gap-5 items-start bg-slate-800/50 hover:bg-slate-800 border border-white/5 hover:border-red-500/40 rounded-3xl p-6 transition-all duration-300 group hover:shadow-[0_8px_30px_rgba(220,38,38,0.15)] hover:-translate-y-1 active:scale-95 touch-manipulation">
                            <div class="w-12 h-12 rounded-xl flex-shrink-0 bg-gradient-to-br from-red-500 to-red-600 shadow-md shadow-red-500/20 flex items-center justify-center group-hover:shadow-lg group-hover:shadow-red-500/50 group-active:scale-90 transition-all duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-black text-base uppercase tracking-wide mb-1 transition-colors">Mandiri</p>
                                <p class="text-slate-400 text-sm leading-relaxed group-hover:text-slate-300 transition-colors duration-300">
                                    PT. MGRM menjadi perseroda yang mandiri, sehat dan profesional serta tidak menjadi beban Pemerintah Daerah.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         SECTION 5 — NILAI-NILAI PERUSAHAAN (PROBAT)
         Background putih, card animasi tiap nilai
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 lg:py-32 bg-white relative overflow-hidden">

        {{-- Grid texture halus --}}
        <div class="absolute inset-0 opacity-[0.02] pointer-events-none"
             style="background-image: linear-gradient(#000 1px, transparent 1px), linear-gradient(90deg, #000 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Aksen kiri --}}
        <div class="absolute top-0 left-0 w-2 h-full bg-red-600"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">

            {{-- Header --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out text-center mb-16"
            >
                <div class="inline-flex items-center gap-3 mb-3">
                    <div class="w-10 h-1 bg-red-600"></div>
                    <span class="text-slate-500 font-bold tracking-widest text-sm uppercase">Landasan Kami</span>
                    <div class="w-10 h-1 bg-red-600"></div>
                </div>
                <h2 class="text-5xl md:text-6xl font-black text-slate-900 uppercase leading-tight">
                    NILAI-NILAI <span class="text-red-600">PERUSAHAAN</span>
                </h2>
                <p class="text-slate-500 mt-4 text-lg max-w-2xl mx-auto">
                    Tata Nilai Perusahaan yang disingkat <strong class="text-slate-700">PROBAT</strong> menjadi inti budaya kerja PT. MGRM (Perseroda).
                </p>
            </div>

            {{-- Cards nilai --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5">

                @php
                $nilais = [
                    [
                        'kode'  => 'P', 'nama' => 'PROFESIONAL', 'warna' => 'red',
                        'ikon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
                        'desc'  => 'Setiap pekerjaan dijalankan dengan rasa tanggung jawab yang profesional.',
                    ],
                    [
                        'kode'  => 'R', 'nama' => 'RESPONSIF', 'warna' => 'slate',
                        'ikon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                        'desc'  => 'Tanggap dan cepat dalam merespons setiap kebutuhan stakeholder.',
                    ],
                    [
                        'kode'  => 'O', 'nama' => 'ORIENTASI HASIL', 'warna' => 'red',
                        'ikon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>',
                        'desc'  => 'Berorientasi pada hasil yang nyata dan terukur bagi daerah.',
                    ],
                    [
                        'kode'  => 'B', 'nama' => 'BERSIH', 'warna' => 'slate',
                        'ikon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>',
                        'desc'  => 'Bebas dari benturan kepentingan dan korupsi, menjunjung tinggi integritas.',
                    ],
                    [
                        'kode'  => 'AT', 'nama' => 'AKUNTABEL & TRANSPARAN', 'warna' => 'red',
                        'ikon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>',
                        'desc'  => 'Pengelolaan perusahaan yang dapat dipertanggungjawabkan dan terbuka.',
                    ],
                ];
                @endphp

                @foreach($nilais as $idx => $n)
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                    class="transition-all duration-700 ease-out group"
                    style="transition-delay: {{ $idx * 100 }}ms"
                >
                    <div class="h-full rounded-3xl {{ $n['warna'] === 'red' ? 'bg-gradient-to-br from-red-600 to-red-700 shadow-xl shadow-red-600/20' : 'bg-gradient-to-br from-slate-800 to-slate-900 shadow-xl shadow-slate-900/30' }} p-7 flex flex-col relative overflow-hidden group-hover:-translate-y-2 transition-all duration-300">
                        {{-- Kode huruf besar dekoratif --}}
                        <div class="absolute -right-3 -top-3 text-[100px] font-black opacity-[0.08] text-white leading-none select-none">{{ $n['kode'] }}</div>

                        {{-- Ikon --}}
                        <div class="w-14 h-14 rounded-full bg-white/20 flex items-center justify-center mb-6 flex-shrink-0 backdrop-blur-sm shadow-[inset_0_2px_10px_rgba(255,255,255,0.2)] group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                {!! $n['ikon'] !!}
                            </svg>
                        </div>

                        {{-- Nama --}}
                        <p class="text-white font-black text-sm uppercase tracking-widest mb-3 leading-tight">{{ $n['nama'] }}</p>

                        {{-- Garis pemisah --}}
                        <div class="w-8 h-0.5 bg-white/40 mb-4"></div>

                        {{-- Deskripsi --}}
                        <p class="text-white/80 text-sm leading-relaxed flex-1">{{ $n['desc'] }}</p>
                    </div>
                </div>
                @endforeach

            </div>

            {{-- Catatan tambahan PROBAT --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out delay-500 mt-12 bg-white border border-slate-100 rounded-[2rem] p-8 md:p-10 grid grid-cols-1 md:grid-cols-3 gap-8 shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.08)] transition-shadow duration-300"
            >
                <div class="flex gap-4 items-start group">
                    <div class="w-12 h-12 rounded-full bg-red-600 flex-shrink-0 flex items-center justify-center shadow-lg shadow-red-600/20 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <p class="font-black text-slate-900 uppercase text-sm tracking-wide group-hover:text-red-600 transition-colors">Inovatif</p>
                        <p class="text-slate-600 text-sm mt-1">PT MGRM terus berinovasi untuk meningkatkan PAD bagi daerah dengan terus mengembangkan bisnis Perusahaan.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start group">
                    <div class="w-12 h-12 rounded-full bg-slate-900 flex-shrink-0 flex items-center justify-center shadow-lg shadow-slate-900/20 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/></svg>
                    </div>
                    <div>
                        <p class="font-black text-slate-900 uppercase text-sm tracking-wide group-hover:text-slate-700 transition-colors">Berdaya Saing</p>
                        <p class="text-slate-600 text-sm mt-1">PT MGRM menjadi perseroda yang kompetitif di Kalimantan Timur sebagai penghasil PAD.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start group">
                    <div class="w-12 h-12 rounded-full bg-red-600 flex-shrink-0 flex items-center justify-center shadow-lg shadow-red-600/20 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div>
                        <p class="font-black text-slate-900 uppercase text-sm tracking-wide group-hover:text-red-600 transition-colors">Mandiri</p>
                        <p class="text-slate-600 text-sm mt-1">PT MGRM menjadi perseroda yang mandiri, sehat dan profesional serta tidak menjadi beban Pemerintah Daerah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         SECTION 5b — TATA NILAI DENGAN PROTAB
         Background putih, list 3 nilai (P-T-B) kiri + logo ProTaB kanan
    ═══════════════════════════════════════════════ --}}
    <section class="py-20 lg:py-28 bg-white relative overflow-hidden">

        {{-- Aksen kanan --}}
        <div class="absolute top-0 right-0 w-2 h-full bg-red-600"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">

                {{-- Kiri: Judul + 3 nilai PROTAB --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-16'"
                    class="transition-all duration-1000 ease-out"
                >
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-10 h-1 bg-red-600"></div>
                        <span class="text-slate-500 font-bold tracking-widest text-xs uppercase">Budaya Kerja</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-10 leading-tight">
                        Tata Nilai dengan <span class="text-red-600">PROTAB</span>
                    </h2>

                    <div class="space-y-6">
                        {{-- Profesional --}}
                        <div class="flex gap-4 items-start group hover:-translate-y-1 active:scale-95 touch-manipulation transition-all duration-300 cursor-default">
                            <div class="w-12 h-12 rounded-full flex-shrink-0 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center shadow-lg shadow-red-600/30 group-hover:scale-110 group-active:scale-90 transition-all duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-black text-slate-900 group-hover:text-red-600 uppercase text-sm tracking-widest mb-1 transition-colors">Profesional</p>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Inti dari prinsip <em>Good Corporate Governance</em> (GCG) sebagai dasar pengelolaan perusahaan.
                                </p>
                            </div>
                        </div>

                        <div class="w-full h-px bg-slate-100"></div>

                        {{-- Tanggung Jawab --}}
                        <div class="flex gap-4 items-start group hover:-translate-y-1 active:scale-95 touch-manipulation transition-all duration-300 cursor-default">
                            <div class="w-12 h-12 rounded-full flex-shrink-0 bg-gradient-to-br from-slate-800 to-slate-900 flex items-center justify-center shadow-lg shadow-slate-900/30 group-hover:scale-110 group-active:scale-90 transition-all duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-black text-slate-900 group-hover:text-red-600 uppercase text-sm tracking-widest mb-1 transition-colors">Tanggung Jawab</p>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Setiap pekerjaan yang diamban oleh karyawan wajib dijalankan dengan rasa tanggung jawab.
                                </p>
                            </div>
                        </div>

                        <div class="w-full h-px bg-slate-100"></div>

                        {{-- Bersih --}}
                        <div class="flex gap-4 items-start group hover:-translate-y-1 active:scale-95 touch-manipulation transition-all duration-300 cursor-default">
                            <div class="w-12 h-12 rounded-full flex-shrink-0 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center shadow-lg shadow-red-600/30 group-hover:scale-110 group-active:scale-90 transition-all duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-black text-slate-900 group-hover:text-red-600 uppercase text-sm tracking-widest mb-1 transition-colors">Bersih</p>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Perusahaan bebas dari benturan kepentingan dan korupsi, menjunjung tinggi integritas dan loyalitas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kanan: Logo ProTaB besar --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-16'"
                    class="transition-all duration-1000 ease-out delay-200 flex items-center justify-center"
                >
                    <div class="relative flex flex-col items-center justify-center bg-white border border-slate-100 rounded-[2.5rem] p-16 w-full max-w-sm mx-auto shadow-[0_20px_40px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.1)] transition-all duration-500 group">
                        {{-- Aksen blur elips --}}
                        <div class="absolute -top-4 -left-4 w-24 h-24 bg-red-600/10 rounded-full blur-2xl group-hover:bg-red-600/20 transition-all duration-500"></div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-slate-900/10 rounded-full blur-2xl group-hover:bg-slate-900/20 transition-all duration-500"></div>

                        {{-- Logo ProTaB teks --}}
                        <p class="leading-none mb-4 select-none" style="font-size: 5rem; font-weight: 900; letter-spacing: -2px;">
                            <span style="color: #c8102e;">Pro</span><span style="color: #1e293b;">Tab</span>
                        </p>
                        <div class="w-16 h-0.5 bg-slate-200 mb-4"></div>
                        <p class="text-slate-500 text-xs font-semibold tracking-widest uppercase text-center leading-relaxed">
                            Profesional<br>Tanggung Jawab Bersih
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         SECTION 5c — BUDAYA SEHAT & PRODUKTIF
         Foto lapangan kiri + teks kanan, bg slate-900 gelap
    ═══════════════════════════════════════════════ --}}
    <section class="relative overflow-hidden bg-slate-900">

        {{-- Grid texture --}}
        <div class="absolute inset-0 opacity-[0.04] pointer-events-none"
             style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Aksen kiri --}}
        <div class="absolute top-0 left-0 w-2 h-full bg-red-600"></div>

        <div class="max-w-7xl mx-auto lg:pl-2">
            <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[420px]">

                {{-- Kiri: Foto lapangan --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-16'"
                    class="transition-all duration-1000 ease-out relative overflow-hidden min-h-[220px] sm:min-h-[320px] lg:m-8 lg:rounded-[2.5rem] lg:shadow-[0_20px_40px_rgba(0,0,0,0.3)] bg-slate-800 flex items-center justify-center p-4 lg:p-0"
                >
                    <img src="{{ asset('images/IMG-20230103-WA0022-768x436-1.webp') }}"
                         alt="Pekerja Lapangan PT. MGRM"
                         class="w-full h-full object-contain lg:object-cover lg:object-center lg:absolute lg:inset-0"
                         onerror="this.outerHTML='<div class=\'w-full h-full bg-slate-800 flex flex-col items-center justify-center min-h-[320px]\'><svg class=\'w-14 h-14 text-slate-600 mb-3\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\'/></svg><span class=\'text-slate-500 text-xs tracking-widest uppercase\'>Foto Lapangan</span></div>'">
                    {{-- Overlay gradient --}}
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-transparent to-slate-900/60 lg:to-slate-900/10"></div>
                </div>

                {{-- Kanan: Teks --}}
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-16'"
                    class="transition-all duration-1000 ease-out delay-200 flex flex-col justify-center px-10 py-16"
                >
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-1 bg-red-600"></div>
                        <span class="text-red-500 font-bold tracking-widest text-xs uppercase">Etos Kerja</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-white mb-10 leading-tight">
                        Budaya Sehat &<br><span class="text-red-600">Produktif</span>
                    </h2>

                    <div class="space-y-5">
                        {{-- Sehat --}}
                        <div class="flex gap-4 items-start group">
                            <div class="w-12 h-12 rounded-full flex-shrink-0 bg-red-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-red-600/30">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-black text-white uppercase text-sm tracking-widest mb-1">Sehat</p>
                                <p class="text-slate-400 text-sm leading-relaxed group-hover:text-slate-300 transition-colors duration-300">
                                    Terus bertumbuh dan berkembang serta stabil dalam menjalankan bisnis.
                                </p>
                            </div>
                        </div>

                        <div class="w-full h-px bg-white/10"></div>

                        {{-- Produktif --}}
                        <div class="flex gap-4 items-start group">
                            <div class="w-12 h-12 rounded-full flex-shrink-0 bg-slate-800 border-2 border-slate-700 flex items-center justify-center group-hover:scale-110 group-hover:border-red-500 transition-all duration-300">
                                <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-black text-white uppercase text-sm tracking-widest mb-1">Produktif</p>
                                <p class="text-slate-400 text-sm leading-relaxed group-hover:text-slate-300 transition-colors duration-300">
                                    Mampu menghasilkan PAD bagi Kutai Kartanegara.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         SECTION 6 — DATA PERUSAHAAN
         Background slate-900 gelap, tabel profil lengkap
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 lg:py-32 bg-slate-900 relative overflow-hidden">

        {{-- Grid texture --}}
        <div class="absolute inset-0 opacity-[0.04] pointer-events-none"
             style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Aksen kanan --}}
        <div class="absolute top-0 right-0 w-2 h-full bg-red-600"></div>

        <div class="max-w-5xl mx-auto px-6 md:px-12 w-full">

            {{-- Header --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out text-center mb-16"
            >
                <div class="inline-flex items-center gap-3 mb-3">
                    <div class="w-10 h-1 bg-red-600"></div>
                    <span class="text-red-500 font-bold tracking-widest text-sm uppercase">Identitas Resmi</span>
                    <div class="w-10 h-1 bg-red-600"></div>
                </div>
                <h2 class="text-5xl md:text-6xl font-black text-white uppercase leading-tight">
                    DATA <span class="text-red-600">PERUSAHAAN</span>
                </h2>
            </div>

            {{-- Tabel profil --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                class="transition-all duration-700 ease-out border border-slate-700 rounded-[2rem] overflow-hidden shadow-xl"
            >
                @php
                $data = [
                    ['Nama Resmi',             'PT. Mahakam Gerbang Raja Migas'],
                    ['Singkatan',              'PT MGRM (Perseroda)'],
                    ['Status Hukum',           'Badan Usaha Milik Daerah (BUMD)'],
                    ['Pemilik Saham',          'Pemerintah Daerah Kabupaten Kutai Kartanegara (99%) · PT KUKAR SEJAHTERA DAMBAAN ETAM (0,4%) · PT TUNGGANG PARANGAN (0,6%)'],
                    ['Tahun Pendirian',        '26 Oktober 2018 (Berdasarkan Akta No. 33)'],
                    ['Nomor Induk Berusaha (NIB)', '1406220059469'],
                    ['NPWP',                   '88.549.160.9-728.000'],
                    ['Alamat Kantor Pusat',    'Jl. Lais No. 77, Timbau, Tenggarong, Kab. Kutai Kartanegara, Kaltim 75511'],
                    ['Telepon',                '0541 6720041'],
                    ['Email Resmi',            'mgrm.pt@gmail.com'],
                    ['Website',               'www.mgrmkutaikartanegara.com'],
                ];
                @endphp

                @foreach($data as $i => [$label, $value])
                <div class="flex flex-col sm:flex-row {{ $i % 2 === 0 ? 'bg-slate-800/60' : 'bg-slate-800/30' }} border-b border-slate-700/50 last:border-b-0 group hover:bg-red-900/20 transition-colors duration-200">
                    <div class="sm:w-64 lg:w-72 flex-shrink-0 px-6 py-4 flex items-center">
                        <p class="text-red-400 font-bold text-sm uppercase tracking-wide">{{ $label }}</p>
                    </div>
                    <div class="hidden sm:block w-px bg-slate-700 flex-shrink-0 self-stretch"></div>
                    <div class="flex-1 px-6 py-4 flex items-center">
                        <p class="text-white font-medium leading-relaxed">{{ $value }}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         SECTION 7 — STRUKTUR ORGANISASI
         Background putih bersih, card foto pengurus
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 lg:py-32 bg-white relative overflow-hidden">

        {{-- Aksen kiri --}}
        <div class="absolute top-0 left-0 w-2 h-full bg-red-600"></div>

        {{-- Motif dekoratif --}}
        <div class="absolute right-10 top-10 w-56 h-56 opacity-[0.05] pointer-events-none"
             style="background-image: radial-gradient(#dc2626 1.5px, transparent 1.5px); background-size: 18px 18px;"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">

            {{-- Header --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out text-center mb-20"
            >
                <div class="inline-flex items-center gap-3 mb-3">
                    <div class="w-10 h-1 bg-red-600"></div>
                    <span class="text-slate-500 font-bold tracking-widest text-sm uppercase">Pengurus Perusahaan</span>
                    <div class="w-10 h-1 bg-red-600"></div>
                </div>
                <h2 class="text-5xl md:text-6xl font-black text-slate-900 uppercase leading-tight">
                    STRUKTUR <span class="text-red-600">ORGANISASI</span>
                </h2>
            </div>

            {{-- Baris 1: Direktur & Komisaris --}}
            <div class="flex flex-col sm:flex-row justify-center gap-8 mb-8">

                @php
                $pimpinan = [
                    ['nama' => 'Efri Novianto',  'jabatan' => 'Direktur',   'foto' => 'images/Efri.webp',  'color' => 'red'],
                    ['nama' => 'Alfian Noor',    'jabatan' => 'Komisaris',  'foto' => 'images/Alfianoor.webp',              'color' => 'slate'],
                ];
                @endphp

                @foreach($pimpinan as $idx => $p)
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                    class="transition-all duration-700 ease-out w-full sm:w-64"
                    style="transition-delay: {{ $idx * 150 }}ms"
                >
                    <div class="group relative text-center">
                        {{-- Frame luar --}}
                        <div class="absolute -inset-1 {{ $p['color'] === 'red' ? 'bg-red-600' : 'bg-slate-900' }} rounded-[2rem] translate-x-2 translate-y-2 transition-transform group-hover:translate-x-1 group-hover:translate-y-1 duration-300"></div>

                        <div class="relative z-10 bg-white border border-slate-200 rounded-[2rem] overflow-hidden shadow-lg">
                            {{-- Foto --}}
                            <div class="h-52 sm:h-72 bg-slate-50 flex items-center justify-center p-6 sm:p-4 rounded-t-[2rem]">
                                @if($p['foto'])
                                    <img src="{{ asset($p['foto']) }}"
                                         alt="{{ $p['nama'] }}"
                                         class="max-w-full max-h-full object-contain rounded-2xl">
                                @else
                                    {{-- Avatar placeholder SVG --}}
                                    <svg viewBox="0 0 200 240" class="w-full h-full" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="200" height="240" fill="#1e293b"/>
                                        <circle cx="100" cy="90" r="45" fill="#334155"/>
                                        <ellipse cx="100" cy="210" rx="75" ry="60" fill="#334155"/>
                                        <circle cx="100" cy="90" r="38" fill="#475569"/>
                                        <ellipse cx="100" cy="85" rx="18" ry="20" fill="#94a3b8"/>
                                        <ellipse cx="100" cy="220" rx="60" ry="50" fill="#475569"/>
                                    </svg>
                                @endif
                            </div>

                            {{-- Nama & jabatan --}}
                            <div class="{{ $p['color'] === 'red' ? 'bg-red-600' : 'bg-slate-900' }} px-4 py-4 text-white">
                                <p class="font-black text-base uppercase tracking-wide leading-tight">{{ $p['nama'] }}</p>
                                <p class="text-white/70 text-xs uppercase tracking-widest mt-1">{{ $p['jabatan'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Garis konektor --}}
            <div class="flex justify-center mb-8">
                <div class="w-px h-10 bg-slate-300"></div>
            </div>
            <div class="flex justify-center mb-0">
                <div class="w-3/4 h-px bg-slate-300"></div>
            </div>

            {{-- Baris 2: Manager --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7 max-w-4xl mx-auto mt-0">

                @php
                $managers = [
                    ['nama' => 'Denny Dharmawan', 'jabatan' => 'Manager SDM & SJB',              'color' => 'slate', 'foto' => ''],
                    ['nama' => 'Marsuki',          'jabatan' => 'Manager Keuangan',               'color' => 'red',   'foto' => ''],
                    ['nama' => 'Syamsudi Sese',    'jabatan' => 'Manager Operasional, RISET & Pengembangan Bisnis', 'color' => 'slate', 'foto' => ''],
                ];
                @endphp

                @foreach($managers as $idx => $m)
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                    class="transition-all duration-700 ease-out"
                    style="transition-delay: {{ $idx * 150 }}ms"
                >
                    <div class="flex justify-center mb-0">
                        <div class="w-px h-8 bg-slate-300"></div>
                    </div>
                    <div class="group relative text-center">
                        <div class="absolute -inset-1 {{ $m['color'] === 'red' ? 'bg-red-600' : 'bg-slate-900' }} rounded-3xl translate-x-2 translate-y-2 transition-transform group-hover:translate-x-1 group-hover:translate-y-1 duration-300"></div>

                        <div class="relative z-10 bg-white border border-slate-200 rounded-3xl overflow-hidden shadow-md">
                            {{-- Avatar --}}
                            <div class="h-44 sm:h-56 bg-slate-50 flex items-center justify-center p-5 sm:p-4 rounded-t-3xl">
                                @if($m['foto'])
                                    <img src="{{ asset($m['foto']) }}"
                                         alt="{{ $m['nama'] }}"
                                         class="max-w-full max-h-full object-contain rounded-xl">
                                @else
                                    <svg viewBox="0 0 200 200" class="w-full h-full" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="200" height="200" fill="#f1f5f9"/>
                                        <circle cx="100" cy="75" r="40" fill="#cbd5e1"/>
                                        <ellipse cx="100" cy="200" rx="80" ry="80" fill="#cbd5e1"/>
                                        <circle cx="100" cy="75" r="33" fill="#e2e8f0"/>
                                        <ellipse cx="100" cy="70" rx="15" ry="16" fill="#94a3b8"/>
                                    </svg>
                                @endif
                            </div>

                            {{-- Nama & jabatan --}}
                            <div class="{{ $m['color'] === 'red' ? 'bg-red-600' : 'bg-slate-900' }} px-4 py-3 text-white">
                                <p class="font-black text-sm uppercase tracking-wide leading-tight">{{ $m['nama'] }}</p>
                                <p class="text-white/70 text-xs tracking-wide mt-1 leading-snug">{{ $m['jabatan'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         SECTION 8 — BISNIS KAMI
         Background slate-900 gelap, grid foto lini bisnis
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 lg:py-32 bg-slate-900 relative overflow-hidden">

        {{-- Grid texture --}}
        <div class="absolute inset-0 opacity-[0.04] pointer-events-none"
             style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Aksen kiri --}}
        <div class="absolute top-0 left-0 w-2 h-full bg-red-600"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">

            {{-- Header --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out mb-16"
            >
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-1 bg-red-600"></div>
                    <span class="text-red-500 font-bold tracking-widest text-sm uppercase">Lini Usaha</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-black text-white uppercase leading-tight">
                    BISNIS <span class="text-red-600">KAMI</span>
                </h2>
                <p class="text-slate-400 mt-4 text-lg max-w-2xl">
                    PT. MGRM (Perseroda) bergerak di berbagai sektor bisnis strategis di bidang energi dan industri penunjangnya.
                </p>
            </div>

            {{-- Grid Bisnis --}}
            @php
            $bisnis = [
                [
                    'judul' => 'Trading & Transportir BBM Industri',
                    'sub'   => 'HSD B-40',
                    'ikon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h8M8 11h4m-6 4h8M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v4m6-4v4"/>',
                    'foto'  => 'WhatsApp-Image-2023-07-25-at-11.11.33.webp',
                    'span'  => '',
                ],
                [
                    'judul' => 'Vendor & Kontraktor Pertamina Group',
                    'sub'   => 'Oil & Gas Services',
                    'ikon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>',
                    'foto'  => 'IMG-20230103-WA0022-768x436-1.webp',
                    'span'  => 'lg:col-span-1 lg:row-span-2',
                ],
                [
                    'judul' => 'Supplier Gas LPG PSO & Non PSO',
                    'sub'   => 'LPG Distribution',
                    'ikon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h3m10-12h3a1 1 0 011 1v10a1 1 0 01-1 1h-3m-13 0h10m-5-16v16"/>',
                    'foto'  => '',
                    'span'  => '',
                ],
                [
                    'judul' => 'Rental Kendaraan Operasional & Lapangan',
                    'sub'   => 'Fleet Management',
                    'ikon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h8M8 11h4m4-8H4a2 2 0 00-2 2v8a2 2 0 002 2h1l3 3 3-3h7a2 2 0 002-2V5a2 2 0 00-2-2z"/>',
                    'foto'  => '',
                    'span'  => '',
                ],
                [
                    'judul' => 'Vendor Held Stock (VHS)',
                    'sub'   => 'Supply Chain & Warehouse',
                    'ikon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>',
                    'foto'  => 'menujuperseroidaman.webp',
                    'span'  => 'sm:col-span-2 lg:col-span-1',
                ],
            ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach($bisnis as $idx => $b)
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    class="transition-all duration-700 ease-out {{ $b['span'] }} group"
                    style="transition-delay: {{ $idx * 100 }}ms"
                >
                    <div class="relative h-56 rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.2)] border border-slate-700/50 group-hover:border-red-600/50 transition-all duration-300 group-hover:-translate-y-1">
                        {{-- Foto atau bg gradient --}}
                        @if($b['foto'])
                            <img src="{{ asset($b['foto']) }}" alt="{{ $b['judul'] }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                        @else
                            <div class="w-full h-full flex items-center justify-center"
                                 style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);">
                                <svg class="w-20 h-20 text-red-600/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    {!! $b['ikon'] !!}
                                </svg>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
                        @endif

                        {{-- Nomor --}}
                        <div class="absolute top-4 right-4 w-10 h-10 bg-red-600 rounded-full flex items-center justify-center font-black text-white text-sm shadow-lg shadow-red-600/30">
                            {{ str_pad($idx + 1, 2, '0', STR_PAD_LEFT) }}
                        </div>

                        {{-- Konten bawah --}}
                        <div class="absolute bottom-0 left-0 right-0 p-5">
                            <p class="text-red-400 text-xs font-bold uppercase tracking-widest mb-1">{{ $b['sub'] }}</p>
                            <p class="text-white font-black text-base uppercase leading-tight">{{ $b['judul'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Info tambahan LNG/CNG --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out delay-500 mt-8 rounded-[2rem] border border-red-600/30 bg-red-600/10 p-6 flex flex-col md:flex-row gap-5 items-start"
            >
                <div class="w-14 h-14 rounded-full bg-red-600 shadow-lg shadow-red-600/20 flex-shrink-0 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-white font-black text-base uppercase tracking-wide mb-1">Pengembangan Bisnis 2026–2027</p>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        PT. MGRM (Perseroda) akan mengembangkan bisnis trading gas alam dalam bentuk <strong class="text-white">Liquefied Natural Gas (LNG)</strong> dan <strong class="text-white">Compressed Natural Gas (CNG)</strong> sebagai tindaklanjut Permen ESDM Nomor 6 Tahun 2016.
                    </p>
                </div>
            </div>

        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         SECTION 9 — LEGALITAS & SERTIFIKASI
         Background putih, card dokumen legalitas
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 lg:py-32 bg-slate-50 relative overflow-hidden">

        {{-- Aksen kanan --}}
        <div class="absolute top-0 right-0 w-2 h-full bg-red-600"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">

            {{-- Header --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out text-center mb-16"
            >
                <div class="inline-flex items-center gap-3 mb-3">
                    <div class="w-10 h-1 bg-red-600"></div>
                    <span class="text-slate-500 font-bold tracking-widest text-sm uppercase">Dokumen Resmi</span>
                    <div class="w-10 h-1 bg-red-600"></div>
                </div>
                <h2 class="text-5xl md:text-6xl font-black text-slate-900 uppercase leading-tight">
                    LEGALITAS & <span class="text-red-600">SERTIFIKASI</span>
                </h2>
                <p class="text-slate-500 mt-4 text-lg max-w-2xl mx-auto">
                    Seluruh legalitas dan sertifikasi resmi PT. MGRM (Perseroda) sebagai jaminan profesionalitas dan kepercayaan.
                </p>
            </div>

            @php
            $legalitas = [
                ['nama' => 'KTA KADIN',                         'ket' => 'Kamar Dagang dan Industri Indonesia',              'ikon_type' => 'badge'],
                ['nama' => 'KTA GAPENSI',                       'ket' => 'Gabungan Pelaksana Konstruksi Nasional Indonesia',  'ikon_type' => 'building'],
                ['nama' => 'KTA PJIM',                          'ket' => 'Perkumpulan Jasa Industri Migas',                  'ikon_type' => 'fire'],
                ['nama' => 'Sertifikat Izin Usaha Perdagangan Migas & Gas Bumi', 'ket' => 'Kementerian ESDM',               'ikon_type' => 'document'],
                ['nama' => 'SBU Kualifikasi ISGH',              'ket' => 'Sertifikat Badan Usaha',                           'ikon_type' => 'shield'],
                ['nama' => 'NPWP Perusahaan',                   'ket' => '88.549.160.9-728.000',                            'ikon_type' => 'id'],
                ['nama' => 'SKT Vendor Pertamina',              'ket' => 'Surat Keterangan Terdaftar – Pertamina Group',     'ikon_type' => 'check'],
                ['nama' => 'SPA di Pertamina No.1',             'ket' => 'Surat Perjanjian Afiliasi',                       'ikon_type' => 'document'],
                ['nama' => 'Sra Jual Kontrol Bidang Larutan',   'ket' => 'Ijin Distribusi Produk Spesifik',                 'ikon_type' => 'document'],
                ['nama' => 'Sra Jual Kontrol Bidang TP',        'ket' => 'Ijin Distribusi Produk Tegak Penuh',              'ikon_type' => 'document'],
            ];

            $ikons = [
                'badge'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
                'building' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
                'fire'     => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/>',
                'document' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
                'shield'   => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
                'id'       => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2"/>',
                'check'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>',
            ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                @foreach($legalitas as $idx => $leg)
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    class="transition-all duration-700 ease-out group hover:-translate-y-1"
                    style="transition-delay: {{ $idx * 80 }}ms"
                >
                    <div class="bg-white rounded-[2rem] shadow-sm hover:shadow-2xl hover:shadow-red-600/10 border border-slate-200 group-hover:border-red-200 transition-all duration-300 p-6 h-full flex flex-col relative overflow-hidden">

                        {{-- Nomor pojok --}}
                        <div class="absolute top-3 right-3 text-slate-200 font-black text-4xl leading-none select-none group-hover:text-red-600/20 transition-colors duration-300">
                            {{ str_pad($idx + 1, 2, '0', STR_PAD_LEFT) }}
                        </div>

                        {{-- Ikon --}}
                        <div class="w-12 h-12 rounded-full bg-slate-900 group-hover:bg-gradient-to-br group-hover:from-red-500 group-hover:to-red-600 transition-all duration-300 flex items-center justify-center mb-5 flex-shrink-0 shadow-sm group-hover:shadow-red-500/30">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                {!! $ikons[$leg['ikon_type']] !!}
                            </svg>
                        </div>

                        {{-- Garis --}}
                        <div class="w-8 h-0.5 bg-red-600 mb-3"></div>

                        {{-- Nama --}}
                        <p class="text-slate-900 font-black text-sm uppercase tracking-wide leading-tight mb-2 flex-1">{{ $leg['nama'] }}</p>

                        {{-- Keterangan --}}
                        <p class="text-slate-500 text-xs leading-relaxed">{{ $leg['ket'] }}</p>

                        {{-- Centang verified --}}
                        <div class="flex items-center gap-1.5 mt-4 pt-3 border-t border-slate-100">
                            <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-green-600 text-xs font-bold uppercase tracking-wide">Terverifikasi</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         SECTION 10 — MITRA BISNIS
         Background slate-900, logo-logo mitra
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 lg:py-32 bg-slate-900 relative overflow-hidden">

        {{-- Grid texture --}}
        <div class="absolute inset-0 opacity-[0.04] pointer-events-none"
             style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Aksen kiri --}}
        <div class="absolute top-0 left-0 w-2 h-full bg-red-600"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full">

            {{-- Header --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out text-center mb-16"
            >
                <div class="inline-flex items-center gap-3 mb-3">
                    <div class="w-10 h-1 bg-red-600"></div>
                    <span class="text-red-500 font-bold tracking-widest text-sm uppercase">Kolaborasi Strategis</span>
                    <div class="w-10 h-1 bg-red-600"></div>
                </div>
                <h2 class="text-5xl md:text-6xl font-black text-white uppercase leading-tight">
                    MITRA <span class="text-red-600">BISNIS</span>
                </h2>
                <p class="text-slate-400 mt-4 text-lg max-w-2xl mx-auto">
                    Kami bangga bermitra dengan perusahaan-perusahaan terkemuka di industri energi dan migas nasional.
                </p>
            </div>

            @php
            $mitras = [
                ['nama' => 'Pertamina',              'ket' => 'Vendor & Kontraktor Utama',     'warna' => 'from-blue-900 to-blue-800',  'aksen' => '#60a5fa'],
                ['nama' => 'Sinergi',                'ket' => 'Mitra Bisnis Energi',           'warna' => 'from-green-900 to-green-800','aksen' => '#4ade80'],
                ['nama' => 'PT. Danapati Mulia',     'ket' => 'Kemitraan Investasi',           'warna' => 'from-amber-900 to-amber-800','aksen' => '#fbbf24'],
                ['nama' => 'Patra Jasa',             'ket' => 'Anak Perusahaan Pertamina',     'warna' => 'from-sky-900 to-sky-800',    'aksen' => '#38bdf8'],
                ['nama' => 'PT. Wiranaga Energi Mandiri', 'ket' => 'Mitra Distribusi Energi',  'warna' => 'from-purple-900 to-purple-800','aksen' => '#c084fc'],
                ['nama' => 'PT. Surya Baja Utama',  'ket' => 'Mitra Konstruksi & Material',  'warna' => 'from-orange-900 to-orange-800','aksen' => '#fb923c'],
                ['nama' => 'MMP',                   'ket' => 'Mahakam Mitra Pertambangan',    'warna' => 'from-red-900 to-red-800',    'aksen' => '#f87171'],
                ['nama' => 'KODE Perseroda',         'ket' => 'Koperasi Daerah Energi',       'warna' => 'from-teal-900 to-teal-800',  'aksen' => '#2dd4bf'],
                ['nama' => 'TP',                    'ket' => 'Tunggang Parangan (Perseroda)', 'warna' => 'from-rose-900 to-rose-800',  'aksen' => '#fb7185'],
            ];
            @endphp

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5 max-w-4xl mx-auto">
                @foreach($mitras as $idx => $mitra)
                <div
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                    class="transition-all duration-500 ease-out group"
                    style="transition-delay: {{ $idx * 80 }}ms"
                >
                    <div class="relative rounded-[2rem] bg-gradient-to-br {{ $mitra['warna'] }} border border-white/10 group-hover:border-white/30 p-7 flex flex-col items-center justify-center text-center h-36 overflow-hidden transition-all duration-300 group-hover:-translate-y-1 group-hover:shadow-xl group-hover:shadow-black/30">

                        {{-- Lingkaran dekoratif --}}
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 rounded-full border border-white/10"></div>
                        <div class="absolute -top-4 -left-4 w-16 h-16 rounded-full border border-white/5"></div>

                        {{-- Nama logo (teks besar) --}}
                        <p class="text-white font-black text-lg uppercase tracking-wide leading-tight relative z-10">{{ $mitra['nama'] }}</p>
                        <div class="w-8 h-0.5 my-2 relative z-10" style="background-color: {{ $mitra['aksen'] }}"></div>
                        <p class="text-white/60 text-xs leading-snug relative z-10">{{ $mitra['ket'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Ajakan kerjasama --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out delay-700 mt-16 text-center"
            >
                <p class="text-slate-400 text-lg mb-6">Tertarik untuk bermitra dengan PT. MGRM (Perseroda)?</p>
                <a href="mailto:mgrm.pt@gmail.com"
                   class="inline-flex items-center gap-3 bg-red-600 hover:bg-red-700 text-white font-black uppercase tracking-widest px-8 py-4 rounded-full shadow-[0_8px_20px_rgba(220,38,38,0.3)] hover:shadow-[0_12px_25px_rgba(220,38,38,0.5)] hover:-translate-y-1 transition-all duration-300 text-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Hubungi Kami
                </a>
            </div>

        </div>
    </section>

</x-layouts.app>

