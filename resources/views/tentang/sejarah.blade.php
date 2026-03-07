<x-layouts.app>
    <x-slot:title>Sejarah Perusahaan — PT. Mahakam Gerbang Raja Migas</x-slot:title>

    {{-- ═══════════════════════════════════════════════
         SECTION 1 — HERO SEJARAH
    ═══════════════════════════════════════════════ --}}
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden bg-white">
        
        {{-- Grid pattern background --}}
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none"
             style="background-image: linear-gradient(#1e293b 1px, transparent 1px), linear-gradient(90deg, #1e293b 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Dekorasi Glow Halus --}}
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-red-600/5 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-slate-400/10 rounded-full blur-[80px] translate-y-1/2 -translate-x-1/3"></div>

        <div class="max-w-4xl mx-auto px-6 md:px-12 relative z-10 text-center">
            
            {{-- Badge Top --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 ease-out inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-100 border border-slate-200 mb-8"
            >
                <div class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></div>
                <span class="text-xs font-bold uppercase tracking-widest text-slate-600">Jejak Langkah</span>
            </div>

            {{-- Judul --}}
            <div
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 delay-100 ease-out"
            >
                <h1 class="text-5xl md:text-6xl font-black text-slate-900 tracking-tight leading-tight mb-6">
                    Sejarah <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-900 to-red-600">Perusahaan</span>
                </h1>
                
                <p class="text-lg md:text-xl text-slate-600 leading-relaxed max-w-3xl mx-auto font-medium">
                    PT. Mahakam Gerbang Raja Migas (Perseroda) adalah BUMD milik Pemerintah Daerah Kabupaten Kutai Kartanegara yang ditugaskan untuk menerima Participating Interest 10% dan mengembangkan bisnis di sektor hulu dan hilir minyak dan gas bumi.
                </p>
            </div>
            
            {{-- Divider --}}
            <div class="flex justify-center mt-12 mb-8"
                 x-data="{ visible: false }"
                 x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 scale-100' : 'opacity-0 scale-0'"
                 class="transition-all duration-700 delay-300">
                <div class="w-24 h-1 rounded-full bg-red-600/20 relative overflow-hidden">
                    <div class="absolute inset-y-0 left-0 bg-red-600 w-1/3 rounded-full animate-[slideRight_3s_ease-in-out_infinite_alternate]"></div>
                </div>
            </div>

        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         SECTION 2 — PERDA PEMBENTUKAN (Berjalan Vertikal)
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 relative bg-slate-50 overflow-hidden">
        
        {{-- Aksen Gelombang Garis Putus --}}
        <div class="absolute inset-0 pointer-events-none opacity-20 hidden md:block">
            <svg class="w-full h-full" viewBox="0 0 1440 400" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M-50 350 C 300 150, 600 450, 1000 200 C 1200 100, 1500 50, 1500 50" stroke="#0f172a" stroke-width="2" stroke-dasharray="10 15" stroke-linecap="round"/>
            </svg>
        </div>

        <div class="max-w-6xl mx-auto px-6 md:px-12 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-20 items-center">
                
                {{-- Kiri: Ilustrasi Dasar Hukum --}}
                <div 
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12'"
                    class="transition-all duration-1000 ease-out order-2 lg:order-1 relative"
                >
                    <div class="relative w-full max-w-sm mx-auto lg:mr-auto rounded-[3rem] bg-white border border-slate-100 shadow-[0_20px_40px_rgba(0,0,0,0.06)] p-12 aspect-square flex flex-col items-center justify-center group hover:-translate-y-2 active:scale-95 touch-manipulation transition-all duration-500 cursor-default">
                        {{-- Glow Belakang Box --}}
                        <div class="absolute -z-10 -inset-4 bg-gradient-to-br from-amber-500/20 to-red-600/10 rounded-[3.5rem] blur-2xl group-hover:blur-3xl transition-all duration-500 opacity-50"></div>
                        
                        {{-- Ikon Palu Sidang (Dummy/Placeholder) --}}
                        <div class="w-32 h-32 mb-8 relative">
                            <div class="absolute inset-0 bg-yellow-500/20 rounded-full animate-ping opacity-50"></div>
                            <div class="relative z-10 w-full h-full bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center p-6 shadow-lg shadow-amber-500/30 group-active:scale-90 transition-transform duration-500">
                                <svg class="w-full h-full text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                </svg>
                            </div>
                        </div>

                        <h3 class="text-3xl font-black text-slate-900 tracking-tight text-center uppercase transition-colors group-hover:text-red-600">Dasar<br>Hukum</h3>
                    </div>
                </div>

                {{-- Kanan: Teks --}}
                <div 
                    x-data="{ visible: false }"
                    x-intersect.once="visible = true"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12'"
                    class="transition-all duration-1000 ease-out delay-200 order-1 lg:order-2"
                >
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-8 leading-tight">
                        Perda<br><span class="text-red-600">Pembentukan BUMD</span>
                    </h2>

                    <div class="space-y-6">
                        {{-- Point 1 --}}
                        <div class="relative pl-8 group">
                            <div class="absolute top-2 left-0 w-2 h-2 rounded-full bg-red-600 shadow-[0_0_10px_rgba(220,38,38,0.8)] group-hover:scale-150 transition-transform"></div>
                            <p class="text-slate-600 leading-relaxed text-sm md:text-base">
                                Peraturan Daerah Kabupaten Kutai Kartanegara Nomor 12 Tahun 2017 tentang Pembentukan Badan Usaha Milik Daerah Perseroan Terbatas Mahakam Gerbang Raja Migas sebagaimana telah diubah beberapa kali, terakhir melalui Peraturan Daerah Nomor 5 Tahun 2021 tentang Perubahan Kedua Peraturan Daerah Nomor 12 Tahun 2017 tentang Pembentukan Badan Usaha Milik Daerah Perseroan Terbatas Mahakam Gerbang Raja Migas.
                            </p>
                        </div>
                        
                        {{-- Point 2 --}}
                        <div class="relative pl-8 group">
                            <div class="absolute top-2 left-0 w-2 h-2 rounded-full bg-slate-400 group-hover:bg-red-600 group-hover:shadow-[0_0_10px_rgba(220,38,38,0.8)] transition-all"></div>
                            <p class="text-slate-600 leading-relaxed text-sm md:text-base">
                                Akta Pendirian PT. Mahakam Gerbang Raja Migas Nomor 33 Tanggal 26 Oktober 2018 oleh Bambang Sudarsono, SH Notaris di Tenggarong.
                            </p>
                        </div>

                        {{-- Point 3 --}}
                        <div class="relative pl-8 group">
                            <div class="absolute top-2 left-0 w-2 h-2 rounded-full bg-slate-400 group-hover:bg-red-600 group-hover:shadow-[0_0_10px_rgba(220,38,38,0.8)] transition-all"></div>
                            <p class="text-slate-600 leading-relaxed text-sm md:text-base">
                                Keputusan Menteri Hukum dan Hak Asasi Manusia RI Nomor AHU-0052233.AH.01.01 Tahun 2018 tentang Pengesahan Pendirian Badan Hukum PT. Mahakam Gerbang Raja Migas.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         SECTION 3 — LEGALITAS PERUSAHAAN (Card Gelap)
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 relative bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            
            <div 
                x-data="{ visible: false }"
                x-intersect.once="visible = true"
                :class="visible ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-16 scale-95'"
                class="transition-all duration-1000 ease-out relative rounded-[3rem] bg-[#0A1128] overflow-hidden text-white shadow-2xl shadow-blue-900/20 p-10 md:p-16 lg:p-20"
            >
                {{-- Decorative Shapes Background --}}
                <div class="absolute top-0 right-0 w-80 h-80 bg-red-600/10 rounded-full blur-[80px] -translate-y-1/2 translate-x-1/2"></div>
                
                {{-- Pattern Subtle --}}
                <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#fff 1.5px, transparent 1.5px); background-size: 32px 32px;"></div>

                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
                    
                    {{-- Icon Visual Kiri --}}
                    <div class="lg:col-span-3 flex items-start justify-center lg:justify-start lg:pt-4">
                        <div class="w-full max-w-[200px] aspect-square rounded-[2rem] bg-white border border-slate-100 flex flex-col items-center justify-center p-6 shadow-[0_20px_40px_rgba(0,0,0,0.15)] group hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(0,0,0,0.25)] active:scale-95 touch-manipulation transition-all duration-300 cursor-default relative overflow-hidden">
                            <div class="w-24 h-24 bg-blue-50/50 rounded-full flex items-center justify-center mb-4 ring-8 ring-blue-50 group-hover:ring-red-50 group-active:scale-90 transition-all duration-300">
                                <svg class="w-12 h-12 text-blue-900 group-hover:text-red-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15M9 11l3 3L22 4"/>
                                </svg>
                            </div>
                            <span class="text-[0.65rem] font-black uppercase tracking-[0.2em] text-cyan-900 group-hover:text-red-700 transition-colors text-center mt-2">Legalitas<br>Usaha</span>
                        </div>
                    </div>

                    {{-- Judul H2 & List Kanan --}}
                    <div class="lg:col-span-9 flex flex-col justify-center">
                        <h2 class="text-4xl md:text-5xl font-black mb-12 text-white tracking-tight border-b border-white/10 pb-6 inline-block w-max">
                            Legalitas <span class="text-red-500">Perusahaan</span>
                        </h2>

                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-7">
                            @php
                            $legalList = [
                                "Akta Perubahan Salinan/Grosse Berita Acara RUPSLB Nomor 01 Tanggal 04 Januari 2021 oleh Bakhtiar, SH Notaris di Tenggarong.",
                                "Akta Perubahan Salinan/Grosse Berita Acara RUPSLB Nomor 61 Tanggal 31 Januari 2022 oleh Bakhtiar, SH Notaris di Tenggarong.",
                                "Keputusan Menteri Hukum dan Hak Asasi Manusia RI Nomor AHU-AH.01.03-0222187 Tahun 2023 tentang Pemberitahuan Perubahan Anggaran Dasar PT. Mahakam Gerbang Raja Migas",
                                "Nomor Induk Berusaha (NIB) : 1406220059469",
                                "Nomor Pokok Wajib Pajak (NPWP) : 88.549.160.9-728.000",
                                "Sertifikat Pengganti Dokumen Administrasi (SPDA) Nomor : S8220/P-M/2022 dengan Nomor Vendor ID : 17471",
                                "Kode Izin Usaha Pengangkutan Minyak dan Gas Bumi dari Kementerian ESDM : 05.411.03.59.51.2733",
                                "Surat Keterangan Registrasi Vendor Pertamina Nomor : 1406220059469",
                                "Sertifikat Merek Dengan Nomor Pendaftaran IDM001423352."
                            ];
                            @endphp

                            @foreach($legalList as $list)
                            <li class="flex items-start gap-4 group active:scale-95 touch-manipulation transition-transform duration-300 cursor-default">
                                <span class="w-6 h-6 shrink-0 mt-0.5 rounded-full bg-slate-800/50 border border-slate-700 flex items-center justify-center group-hover:bg-red-500 group-hover:border-red-500 transition-all duration-300">
                                    <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"></path></svg>
                                </span>
                                <span class="text-slate-300 leading-snug text-sm group-hover:text-white transition-colors">
                                    {!! str_replace('PT. Mahakam Gerbang Raja Migas', '<strong class="text-white font-medium group-hover:text-red-400 transition-colors">PT. Mahakam Gerbang Raja Migas</strong>', $list) !!}
                                </span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section>

</x-layouts.app>
