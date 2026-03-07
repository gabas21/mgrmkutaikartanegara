<x-layouts.app>
    <x-slot:title>Layanan | PT. Mahakam Gerbang Raja Migas</x-slot:title>

    {{-- ═══════════════════════════════════════════════
         HERO SECTION LAYANAN
    ═══════════════════════════════════════════════ --}}
    <section class="relative pt-32 pb-24 bg-[#0B1120] overflow-hidden">
        {{-- Background Glow --}}
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
            
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-sm mb-8">
                <span class="flex h-2 w-2 rounded-full bg-red-500 animate-pulse"></span>
                <span class="text-red-400 font-bold tracking-widest text-[11px] uppercase">Layanan & Bisnis Utama</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-[60px] font-black text-white leading-[1.1] mb-6 tracking-tight">
                Dedikasi Kami Untuk <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-400 drop-shadow-lg">Pertumbuhan Energi</span>
            </h1>
            
            <p class="text-slate-400 text-lg md:text-xl max-w-2xl mx-auto font-medium leading-relaxed mb-10">
                Penyedia layanan energi dan pendukung operasional yang handal serta terpercaya, untuk memajukan industri dan ekonomi Kutai Kartanegara.
            </p>

            {{-- Quick Nav Pills --}}
            <div class="flex flex-wrap justify-center gap-3">
                @foreach(['Vendor Held Stock', 'Transportir BBM', 'SPBN', 'Vendor & Kontraktor', 'Kontraktor'] as $i => $label)
                <a href="#section-{{ $i }}" class="px-5 py-2.5 rounded-full text-sm font-bold transition-all duration-300 active:scale-95 touch-manipulation
                    {{ $i === 0 ? 'bg-red-600 text-white shadow-lg shadow-red-600/30 hover:bg-red-500' : 'bg-white/5 text-white/70 border border-white/10 hover:bg-white/10 hover:text-white' }}">
                    {{ $label }}
                </a>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         SECTION 1: VENDOR HELD STOCK
    ═══════════════════════════════════════════════ --}}
    <section id="section-0" class="relative py-24 lg:py-32 bg-white overflow-hidden">
        {{-- Decorative --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-red-50 rounded-full blur-[80px] translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-slate-100 rounded-full blur-[60px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            {{-- Section Header --}}
            <div class="text-center mb-16"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                 class="transition-all duration-700 ease-out">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 mb-5">
                    <span class="flex h-2 w-2 rounded-full bg-red-500"></span>
                    <span class="text-red-600 font-bold tracking-widest text-[11px] uppercase">Layanan Utama</span>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight mb-4">Vendor Held Stock</h2>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto font-medium leading-relaxed">
                    Jasa handling atau jasa pengelolaan Stok BBM dan Pelayanan kepada End User di Lokasi Pertambangan atau Perkebunan.
                </p>
            </div>

            {{-- Content: 2 Images Side by Side --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition-all duration-700 ease-out delay-200">

                {{-- Image 1 --}}
                <div class="group relative rounded-3xl overflow-hidden shadow-[0_15px_50px_rgba(0,0,0,0.08)] border border-slate-100 hover:shadow-[0_25px_60px_rgba(0,0,0,0.12)] transition-all duration-500 hover:-translate-y-1">
                    <div class="aspect-[4/3] bg-slate-100 overflow-hidden">
                        <img src="{{ asset('images/vendor.webp') }}" alt="Vendor Held Stock - Fasilitas Tangki BBM" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white font-bold text-sm tracking-wide">Fasilitas Penyimpanan BBM</span>
                    </div>
                </div>

                {{-- Image 2 --}}
                <div class="group relative rounded-3xl overflow-hidden shadow-[0_15px_50px_rgba(0,0,0,0.08)] border border-slate-100 hover:shadow-[0_25px_60px_rgba(0,0,0,0.12)] transition-all duration-500 hover:-translate-y-1">
                    <div class="aspect-[4/3] bg-slate-100 overflow-hidden">
                        <img src="{{ asset('images/vendor2webp.webp') }}" alt="Vendor Held Stock - Tim Operasional" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white font-bold text-sm tracking-wide">Tim Operasional Lapangan</span>
                    </div>
                </div>
            </div>

            {{-- Feature Highlights --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mt-10"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                 class="transition-all duration-700 ease-out delay-300">
                @foreach([
                    ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Pengelolaan Terpercaya', 'desc' => 'Manajemen stok BBM yang profesional dan akuntabel'],
                    ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z', 'title' => 'Lokasi Strategis', 'desc' => 'Tersedia di area pertambangan dan perkebunan'],
                    ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'title' => 'Respon Cepat', 'desc' => 'Layanan on-site dengan waktu respon yang optimal'],
                ] as $feat)
                <div class="flex items-start gap-4 bg-slate-50 rounded-2xl p-5 border border-slate-100 hover:border-red-100 hover:bg-red-50/30 active:scale-95 touch-manipulation transition-all duration-300 cursor-default group">
                    <div class="w-11 h-11 rounded-xl bg-white shadow-sm flex items-center justify-center flex-shrink-0 group-hover:bg-red-600 group-hover:text-white group-hover:shadow-lg group-hover:shadow-red-500/20 group-active:scale-90 transition-all duration-300 text-red-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feat['icon'] }}"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-black text-slate-800 mb-1">{{ $feat['title'] }}</h4>
                        <p class="text-xs text-slate-500 leading-relaxed font-medium">{{ $feat['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         SECTION 2: TRANSPORTIR BBM
    ═══════════════════════════════════════════════ --}}
    <section id="section-1" class="relative py-24 lg:py-32 bg-[#0B1120] overflow-hidden">
        {{-- Background Glow --}}
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/4 right-0 w-[500px] h-[500px] bg-red-600/10 rounded-full blur-[100px] translate-x-1/3"></div>
            <div class="absolute bottom-0 left-1/4 w-[400px] h-[400px] bg-blue-500/10 rounded-full blur-[80px] translate-y-1/3"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                {{-- Left: Image --}}
                <div x-data="{ visible: false }" x-intersect.once="visible = true"
                     :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-8'"
                     class="transition-all duration-700 ease-out">
                    <div class="group relative">
                        {{-- Glow Aura --}}
                        <div class="absolute -inset-4 bg-gradient-to-tr from-red-600/20 to-slate-500/10 rounded-[2.5rem] blur-2xl group-hover:blur-3xl transition-all duration-500 opacity-60"></div>
                        
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-white/10">
                            <div class="aspect-[4/3] bg-slate-800 overflow-hidden">
                                <img src="{{ asset('images/transporterwebp.webp') }}" alt="Transportir BBM - Armada Truk Tangki" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            </div>
                        </div>

                        {{-- Floating Mini Badge --}}
                        <div class="absolute -bottom-5 -right-5 bg-white/10 backdrop-blur-xl p-4 rounded-2xl border border-white/20 shadow-xl flex items-center gap-3 hover:scale-105 transition-transform duration-300">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center text-white shadow-[0_0_15px_rgba(220,38,38,0.5)]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <div>
                                <p class="text-xl font-black text-white leading-none mb-0.5">B35/B40</p>
                                <p class="text-[9px] text-red-300 font-bold tracking-[0.15em] uppercase">HSD Industri</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right: Text Content --}}
                <div x-data="{ visible: false }" x-intersect.once="visible = true"
                     :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-8'"
                     class="transition-all duration-700 ease-out delay-200">

                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-800/80 border border-white/5 mb-6">
                        <span class="flex h-2 w-2 rounded-full bg-red-500"></span>
                        <span class="text-red-400 font-bold tracking-widest text-[11px] uppercase">Distribusi Energi</span>
                    </div>

                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight mb-6">
                        Transportir <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-600">BBM Industri</span>
                    </h2>

                    <div class="pl-5 border-l-2 border-slate-700 mb-8">
                        <p class="text-slate-300 text-lg leading-relaxed font-medium">
                            PT. MGRM saat ini telah melakukan kerjasama sebagai <span class="text-white font-bold">Transportir BBM Industri HSD (B35/B40)</span> untuk Perusahaan Pertambangan dan Perkebunan di wilayah Kalimantan Timur.
                        </p>
                    </div>

                    {{-- Info Cards --}}
                    <div class="space-y-4">
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:bg-white/10 active:scale-95 touch-manipulation transition-all duration-300 group cursor-default">
                            <h4 class="text-base font-black text-white mb-2 flex items-center gap-3">
                                <span class="w-2.5 h-2.5 rounded-full bg-red-500 shadow-[0_0_10px_rgba(220,38,38,0.6)] group-hover:scale-125 transition-transform"></span>
                                Penyalur BBM B35 & B40
                            </h4>
                            <p class="text-sm text-slate-400 leading-relaxed font-medium pl-5">
                                BBM dipasok dari Perusahaan/Lembaga Penyalur Agen resmi dan didistribusikan secara aman dengan armada yang terawat.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:bg-white/10 active:scale-95 touch-manipulation transition-all duration-300 group cursor-default">
                            <h4 class="text-base font-black text-white mb-2 flex items-center gap-3">
                                <span class="w-2.5 h-2.5 rounded-full bg-red-500 shadow-[0_0_10px_rgba(220,38,38,0.6)] group-hover:scale-125 transition-transform"></span>
                                Fleksibilitas Pembayaran
                            </h4>
                            <div class="flex flex-wrap gap-2 pl-5 mt-3">
                                @foreach(['Cash Before Delivery (CBD)', 'Cash On Delivery (COD)', 'Termin Adaptif'] as $pay)
                                <span class="px-3 py-1.5 rounded-full bg-slate-800 border border-slate-700 text-xs font-bold text-slate-300 tracking-wide">{{ $pay }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         SECTION 3: SPBN
    ═══════════════════════════════════════════════ --}}
    <section id="section-2" class="relative py-24 lg:py-32 bg-slate-50 overflow-hidden">
        {{-- Decorative --}}
        <div class="absolute top-0 left-0 w-96 h-96 bg-red-50 rounded-full blur-[80px] -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            {{-- Section Header --}}
            <div class="text-center mb-16"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                 class="transition-all duration-700 ease-out">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-200/60 border border-slate-200 mb-5">
                    <span class="flex h-2 w-2 rounded-full bg-slate-500"></span>
                    <span class="text-slate-600 font-bold tracking-widest text-[11px] uppercase">Pengisian BBM Nelayan</span>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight mb-4">
                    SPBN <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-400">Nelayan</span>
                </h2>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto font-medium leading-relaxed">
                    Stasiun Pengisian Bahan Bakar Nelayan — mendukung kehidupan nelayan dengan layanan pengisian BBM terjangkau dan mudah diakses.
                </p>
            </div>

            {{-- Main Content: Card with Table + Image Placeholder --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition-all duration-700 ease-out delay-200">

                {{-- Left: Image --}}
                <div class="lg:col-span-5 flex flex-col h-full">
                    <div class="flex-1 group relative rounded-3xl overflow-hidden shadow-[0_15px_50px_rgba(0,0,0,0.08)] border border-slate-100 hover:shadow-[0_25px_60px_rgba(0,0,0,0.12)] transition-all duration-500 hover:-translate-y-1 min-h-[350px] lg:min-h-0">
                        <div class="absolute inset-0 bg-slate-100 overflow-hidden">
                            <img src="{{ asset('images/kapal.webp') }}" alt="Kapal SPBN Nelayan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-5 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                            <span class="text-white font-bold text-sm tracking-wide">Kapal SPBN Nelayan</span>
                        </div>
                    </div>
                </div>

                {{-- Right: Data Table --}}
                <div class="lg:col-span-7 flex flex-col h-full">
                    <div class="bg-white rounded-3xl shadow-[0_15px_50px_rgba(0,0,0,0.06)] border border-slate-100 overflow-hidden flex-1">
                        {{-- Table Header --}}
                        <div class="bg-gradient-to-r from-slate-800 to-slate-900 px-6 py-5 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10M13 16l4-4h3a1 1 0 011 1v3"/></svg>
                            </div>
                            <div>
                                <h3 class="text-white font-black text-lg">Spesifikasi Kapal SPBN</h3>
                                <p class="text-slate-400 text-xs font-medium">Data Teknis Kapal Pengisi BBM Nelayan</p>
                            </div>
                        </div>

                        {{-- Table --}}
                        <div class="w-full">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="border-b-2 border-slate-100">
                                        <th class="py-3 px-2 sm:px-5 font-bold text-slate-400 text-[10px] sm:text-xs uppercase tracking-wider w-8 text-center">No</th>
                                        <th class="py-3 px-2 sm:px-5 font-bold text-slate-400 text-[10px] sm:text-xs uppercase tracking-wider">Uraian</th>
                                        <th class="py-3 px-2 sm:px-5 font-bold text-slate-400 text-[10px] sm:text-xs uppercase tracking-wider">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody class="text-slate-600 font-medium divide-y divide-slate-50">
                                    @foreach([
                                        ['Nama Kapal', 'Kapal SPBN Nelayan'],
                                        ['Tipe', 'Ponton'],
                                        ['No. Registrasi', 'KN. 0325 (48)'],
                                        ['Panjang', '14.00 Meter'],
                                        ['Lebar', '4.00 Meter'],
                                        ['Dalam', '1.50 Meter'],
                                        ['Isi Kotor (GT)', '34 M³'],
                                        ['Isi Bersih (NT)', '11 M³'],
                                        ['Tahun Pembuatan', 'Samarinda 2008'],
                                        ['Bahan', 'Baja, dengan 1 (satu) Geladak'],
                                    ] as $i => $row)
                                    <tr class="hover:bg-slate-50/80 transition-colors {{ $i % 2 === 1 ? 'bg-slate-50/40' : '' }}">
                                        <td class="py-2.5 px-2 sm:px-5 text-center text-slate-400 text-[10px] sm:text-xs font-bold">{{ $i + 1 }}</td>
                                        <td class="py-2.5 px-2 sm:px-5 text-slate-800 font-bold text-[11px] sm:text-sm">{{ $row[0] }}</td>
                                        <td class="py-2.5 px-2 sm:px-5 text-slate-600 text-[11px] sm:text-sm">{{ $row[1] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         SECTION 4: VENDOR & KONTRAKTOR
    ═══════════════════════════════════════════════ --}}
    <section id="section-3" class="relative py-24 lg:py-32 bg-white overflow-hidden">
        {{-- Decorative --}}
        <div class="absolute top-0 left-1/3 w-96 h-96 bg-red-50 rounded-full blur-[100px] -translate-y-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-slate-100 rounded-full blur-[60px] translate-y-1/3 translate-x-1/4 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            {{-- Section Header --}}
            <div class="text-center mb-16"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                 class="transition-all duration-700 ease-out">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 mb-5">
                    <span class="flex h-2 w-2 rounded-full bg-red-500"></span>
                    <span class="text-red-600 font-bold tracking-widest text-[11px] uppercase">Penyedia Barang & Jasa</span>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight mb-4">
                    Vendor & <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-400">Kontraktor</span>
                </h2>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto font-medium leading-relaxed">
                    Penyedia Barang dan Jasa Pertamina & Afiliasi — mendukung operasi hulu hilir migas dengan mitra terpercaya.
                </p>
            </div>

            {{-- 3 Image Placeholders --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition-all duration-700 ease-out delay-200">

                @foreach([
                    ['img' => 'kontrakto1.webp', 'caption' => 'Dokumentasi Vendor 1', 'small' => true],
                    ['img' => 'kontraktor.webp', 'caption' => 'Dokumentasi Vendor 2', 'small' => false],
                    ['img' => 'kontraktor2.webp', 'caption' => 'Dokumentasi Vendor 3', 'small' => true],
                ] as $i => $item)
                <div class="group relative rounded-3xl overflow-hidden shadow-[0_10px_40px_rgba(0,0,0,0.06)] border border-slate-100 hover:shadow-[0_20px_50px_rgba(0,0,0,0.1)] hover:-translate-y-1 active:scale-95 touch-manipulation transition-all duration-500 cursor-default">
                    <div class="aspect-[4/3] bg-slate-900 relative overflow-hidden">
                        @if($item['small'])
                            <img src="{{ asset($item['img']) }}" alt="Background" class="absolute inset-0 w-full h-full object-cover blur-xl opacity-40 scale-125 pointer-events-none">
                            <img src="{{ asset($item['img']) }}" alt="{{ $item['caption'] }}" class="absolute inset-0 w-full h-full object-contain group-hover:scale-105 transition-transform duration-700 z-10 bg-slate-200/5 backdrop-blur-[2px]">
                        @else
                            <img src="{{ asset($item['img']) }}" alt="{{ $item['caption'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20 pointer-events-none"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-5 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 z-30 pointer-events-none">
                            <span class="text-white font-bold text-sm tracking-wide">{{ $item['caption'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Feature Highlights --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mt-10"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                 class="transition-all duration-700 ease-out delay-300">
                @foreach([
                    ['icon' => 'M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z', 'title' => 'Kontraktor Berpengalaman', 'desc' => 'Pengerjaan proyek oleh tenaga ahli bersertifikasi'],
                    ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4', 'title' => 'Standar Kepatuhan', 'desc' => 'Mengikuti standar mutu dan keselamatan Pertamina'],
                    ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Mitra Terpercaya', 'desc' => 'Jaringan vendor tersertifikasi dan berkualitas'],
                ] as $feat)
                <div class="flex items-start gap-4 bg-slate-50 rounded-2xl p-5 border border-slate-100 hover:border-red-100 hover:bg-red-50/30 active:scale-95 touch-manipulation transition-all duration-300 cursor-default group">
                    <div class="w-11 h-11 rounded-xl bg-white shadow-sm flex items-center justify-center flex-shrink-0 group-hover:bg-red-600 group-hover:text-white group-hover:shadow-lg group-hover:shadow-red-500/20 group-active:scale-90 transition-all duration-300 text-red-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feat['icon'] }}"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-black text-slate-800 mb-1">{{ $feat['title'] }}</h4>
                        <p class="text-xs text-slate-500 leading-relaxed font-medium">{{ $feat['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         SECTION 5: KONTRAKTOR
    ═══════════════════════════════════════════════ --}}
    <section id="section-4" class="relative py-24 lg:py-32 bg-[#0B1120] overflow-hidden">
        {{-- Background Glow --}}
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 left-1/3 w-[500px] h-[500px] bg-red-600/10 rounded-full blur-[100px] -translate-y-1/3"></div>
            <div class="absolute bottom-0 right-1/4 w-[400px] h-[400px] bg-blue-500/10 rounded-full blur-[80px] translate-y-1/3"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            {{-- Section Header --}}
            <div class="text-center mb-16"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                 class="transition-all duration-700 ease-out">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-800/80 border border-white/5 mb-5">
                    <span class="flex h-2 w-2 rounded-full bg-red-500"></span>
                    <span class="text-red-400 font-bold tracking-widest text-[11px] uppercase">Jasa Konstruksi & Proyek</span>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-white tracking-tight mb-4">
                    Layanan <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-600">Kontraktor</span>
                </h2>
                <p class="text-slate-400 text-lg max-w-2xl mx-auto font-medium leading-relaxed">
                    Pelaksanaan proyek konstruksi, pengadaan, dan jasa pendukung industri migas yang profesional dan tepat waktu.
                </p>
            </div>

            {{-- 3 Image Placeholders --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition-all duration-700 ease-out delay-200">

                @foreach([
                    ['img' => 'kontrakto1.webp', 'caption' => 'Proyek Kontraktor 1', 'small' => true],
                    ['img' => 'kontraktor.webp', 'caption' => 'Proyek Kontraktor 2', 'small' => false],
                    ['img' => 'kontraktor2.webp', 'caption' => 'Proyek Kontraktor 3', 'small' => true],
                ] as $i => $item)
                <div class="group relative rounded-3xl overflow-hidden border border-white/10 hover:border-white/20 shadow-2xl hover:shadow-[0_25px_60px_rgba(0,0,0,0.3)] hover:-translate-y-1 active:scale-95 touch-manipulation transition-all duration-500 cursor-default">
                    <div class="aspect-[4/3] bg-slate-900 relative overflow-hidden">
                        @if($item['small'])
                            <img src="{{ asset($item['img']) }}" alt="Background" class="absolute inset-0 w-full h-full object-cover blur-xl opacity-40 scale-125 pointer-events-none">
                            <img src="{{ asset($item['img']) }}" alt="{{ $item['caption'] }}" class="absolute inset-0 w-full h-full object-contain group-hover:scale-105 transition-transform duration-700 z-10 bg-slate-900/20 backdrop-blur-[2px]">
                        @else
                            <img src="{{ asset($item['img']) }}" alt="{{ $item['caption'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20 pointer-events-none"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-5 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 z-30 pointer-events-none">
                            <span class="text-white font-bold text-sm tracking-wide">{{ $item['caption'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Feature Highlights --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mt-10"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                 class="transition-all duration-700 ease-out delay-300">
                @foreach([
                    ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'title' => 'Infrastruktur', 'desc' => 'Pembangunan dan perawatan fasilitas industri'],
                    ['icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Kualitas Terjamin', 'desc' => 'Standar mutu tinggi dan pengawasan ketat'],
                    ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Tepat Waktu', 'desc' => 'Komitmen penyelesaian proyek sesuai jadwal'],
                ] as $feat)
                <div class="flex items-start gap-4 bg-white/5 rounded-2xl p-5 border border-white/10 hover:border-red-500/30 hover:bg-white/10 active:scale-95 touch-manipulation transition-all duration-300 group cursor-default">
                    <div class="w-11 h-11 rounded-xl bg-slate-800 shadow-sm flex items-center justify-center flex-shrink-0 group-hover:bg-red-600 group-hover:text-white group-hover:shadow-lg group-hover:shadow-red-500/20 group-active:scale-90 transition-all duration-300 text-red-400 border border-white/10">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feat['icon'] }}"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-black text-white mb-1">{{ $feat['title'] }}</h4>
                        <p class="text-xs text-slate-400 leading-relaxed font-medium">{{ $feat['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         CTA BOTTOM SECTION
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 bg-[#0B1120] relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/2 left-1/2 w-[600px] h-[600px] bg-red-600/10 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-3xl mx-auto px-6 text-center relative z-10"
             x-data="{ visible: false }" x-intersect.once="visible = true"
             :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
             class="transition-all duration-700 ease-out">
            <h2 class="text-3xl md:text-4xl font-black text-white mb-6 tracking-tight">
                Tertarik Bermitra <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-600">Bersama Kami?</span>
            </h2>
            <p class="text-slate-400 text-lg mb-10 font-medium leading-relaxed">Hubungi kami untuk informasi lebih lanjut tentang layanan dan peluang kerja sama.</p>
            <a href="{{ url('/kontak') }}" wire:navigate
               class="group inline-flex items-center gap-3 bg-red-600 hover:bg-red-500 text-white font-bold py-4 px-10 rounded-full uppercase tracking-wide transition-all duration-300 hover:shadow-[0_0_30px_rgba(220,38,38,0.4)] hover:scale-105 active:scale-95 touch-manipulation">
                Hubungi Kami
                <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </section>

</x-layouts.app>
