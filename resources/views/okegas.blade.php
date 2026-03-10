<x-layouts.app>
    <x-slot:title>OKE GAS - Antrian Tabung LPG 3Kg | PT. Mahakam Gerbang Raja Migas</x-slot:title>

    {{-- ═══════════════════════════════════════════════
         HERO BANNER (Compact)
    ═══════════════════════════════════════════════ --}}
    <section class="relative pt-32 pb-20 bg-[#0B1120] overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <img src="{{ asset('images/WhatsApp-Image-2023-07-25-at-11.11.33.webp') }}" alt="Background MGRM" class="absolute inset-0 w-full h-full object-cover opacity-30 mix-blend-overlay" />
            <div class="absolute top-1/4 left-1/4 w-[600px] h-[600px] bg-emerald-500/10 rounded-full blur-[120px] mix-blend-screen animate-pulse" style="animation-duration:4s"></div>
            <div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-blue-500/10 rounded-full blur-[100px] mix-blend-screen animate-pulse" style="animation-duration:6s"></div>
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;40&quot; height=&quot;40&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M0 0h40v40H0z&quot; fill=&quot;none&quot; stroke=&quot;white&quot; stroke-width=&quot;0.5&quot;/%3E%3C/svg%3E'); background-repeat: repeat;"></div>
            <div class="absolute inset-0 bg-[#0B1120]/70"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-8 text-center"
             x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
             class="transition-all duration-700 ease-out">

            <div class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 backdrop-blur-sm mb-8">
                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center shadow-lg shadow-emerald-500/30">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/></svg>
                </div>
                <span class="text-emerald-400 font-black tracking-widest text-sm uppercase">OKE GAS</span>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-[60px] font-black text-white leading-[1.08] mb-6 tracking-tight">
                Layanan Antrian
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-emerald-300 drop-shadow-lg">Tabung LPG 3Kg</span>
            </h1>

            <p class="text-slate-400 text-lg md:text-xl max-w-2xl mx-auto font-medium leading-relaxed mb-10">
                Sistem antrian digital untuk pembelian tabung gas LPG 3Kg bersubsidi. Mudah, cepat, dan transparan untuk masyarakat Kutai Kartanegara.
            </p>

            <a href="#panduan" class="inline-flex flex-col items-center gap-2 text-slate-500 hover:text-emerald-400 active:scale-95 touch-manipulation transition-colors group">
                <span class="text-xs font-bold uppercase tracking-widest">Baca Panduan Dulu</span>
                <svg class="w-5 h-5 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            </a>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         SECTION: PANDUAN PENGGUNAAN (Pertama Kali Dilihat)
    ═══════════════════════════════════════════════ --}}
    <section id="panduan" class="py-24 lg:py-32 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-50 rounded-full blur-[80px] translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-emerald-50 rounded-full blur-[60px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            {{-- Section Header --}}
            <div class="text-center mb-16"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                 class="transition-all duration-700 ease-out">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-50 border border-emerald-100 mb-5">
                    <span class="flex h-2 w-2 rounded-full bg-emerald-500"></span>
                    <span class="text-emerald-600 font-bold tracking-widest text-[11px] uppercase">Wajib Dibaca</span>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight mb-4">
                    Panduan <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-emerald-400">Penggunaan</span>
                </h2>
                <p class="text-slate-500 text-lg max-w-xl mx-auto font-medium leading-relaxed">
                    Ikuti 3 langkah mudah berikut untuk mendapatkan nomor antrian tabung LPG 3Kg bersubsidi Anda.
                </p>
            </div>

            {{-- Steps --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto mb-16"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition-all duration-700 ease-out delay-200">

                @foreach([
                    ['step' => '01', 'icon' => 'M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2', 'title' => 'Masukkan NIK KTP', 'desc' => 'Siapkan KTP Anda dan ketik 16 digit Nomor Induk Kependudukan (NIK) pada kolom yang tersedia di bawah.'],
                    ['step' => '02', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Verifikasi Data', 'desc' => 'Sistem akan otomatis memverifikasi NIK Anda untuk memastikan kelayakan sebagai penerima gas subsidi.'],
                    ['step' => '03', 'icon' => 'M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z', 'title' => 'Dapatkan Nomor Antrian', 'desc' => 'Nomor antrian digital akan langsung muncul di layar. Simpan dan tunjukkan saat pengambilan tabung di agen.'],
                ] as $item)
                <div class="group bg-white rounded-3xl p-8 shadow-[0_10px_40px_rgba(0,0,0,0.04)] border border-slate-100 hover:shadow-[0_20px_50px_rgba(0,0,0,0.08)] hover:-translate-y-2 active:scale-95 touch-manipulation transition-all duration-500 text-center relative cursor-default">
                    <div class="absolute top-5 right-6 text-6xl font-black text-slate-100 group-hover:text-emerald-50 transition-colors select-none pointer-events-none">{{ $item['step'] }}</div>
                    
                    <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-emerald-50 flex items-center justify-center group-hover:bg-emerald-500 group-hover:shadow-lg group-hover:shadow-emerald-500/20 group-active:scale-90 transition-all duration-300">
                        <svg class="w-7 h-7 text-emerald-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/></svg>
                    </div>
                    
                    <h3 class="text-lg font-black text-slate-800 mb-3 relative z-10">{{ $item['title'] }}</h3>
                    <p class="text-sm text-slate-500 leading-relaxed font-medium relative z-10">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>

            {{-- Important Notes --}}
            <div class="max-w-3xl mx-auto mb-14"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                 class="transition-all duration-700 ease-out delay-300">
                <div class="bg-amber-50 border border-amber-100 rounded-3xl p-6 md:p-8">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-black text-amber-800 text-sm mb-1">Perhatian Penting</h4>
                            <p class="text-amber-700 text-xs font-medium leading-relaxed">Pastikan Anda telah menyiapkan hal-hal berikut sebelum memulai:</p>
                        </div>
                    </div>
                    <ul class="space-y-2.5 ml-14">
                        @foreach([
                            'Memiliki KTP asli dengan NIK terdaftar',
                            'Setiap KTP hanya dapat mengambil 1 tabung per periode',
                            'Nomor antrian berlaku sesuai tanggal yang tertera',
                            'Wajib membawa KTP asli saat pengambilan tabung',
                        ] as $note)
                        <li class="flex items-center gap-3 text-amber-700 text-sm font-medium">
                            <svg class="w-4 h-4 flex-shrink-0 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            {{ $note }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- CTA Button to Form --}}
            <div class="text-center"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                 class="transition-all duration-700 ease-out delay-[400ms]">
                <a href="#form-antrian"
                   class="group inline-flex items-center gap-3 bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-400 hover:to-emerald-500 text-white font-black py-5 px-12 rounded-full uppercase tracking-wide text-lg transition-all duration-300 shadow-[0_8px_30px_rgba(16,185,129,0.3)] hover:shadow-[0_12px_40px_rgba(16,185,129,0.4)] hover:scale-105 active:scale-95 touch-manipulation">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                    Mulai Ambil Antrian
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <p class="mt-4 text-slate-400 text-xs font-medium">Scroll ke bawah atau klik tombol di atas</p>
            </div>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         SECTION: FORM ANTRIAN
    ═══════════════════════════════════════════════ --}}
    <section id="form-antrian" class="relative py-24 lg:py-32 bg-[#0B1120] overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-emerald-500/10 rounded-full blur-[120px] mix-blend-screen animate-pulse" style="animation-duration:4s"></div>
            <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-blue-500/10 rounded-full blur-[100px] mix-blend-screen animate-pulse" style="animation-duration:6s"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-20 items-center">

                {{-- Left: Stats & Info --}}
                <div x-data="{ visible: false }" x-intersect.once="visible = true"
                     :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                     class="transition-all duration-700 ease-out text-center lg:text-left">

                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/5 border border-white/10 mb-6">
                        <span class="flex h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span class="text-emerald-400 font-bold tracking-widest text-[11px] uppercase">Sistem Aktif</span>
                    </div>

                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-white tracking-tight mb-6 leading-tight">
                        Masukkan NIK
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-emerald-300">Untuk Cek Antrian</span>
                    </h2>

                    <p class="text-slate-400 text-lg max-w-lg mx-auto lg:mx-0 font-medium leading-relaxed mb-10">
                        Pastikan Anda sudah membaca panduan di atas sebelum memasukkan NIK KTP Anda.
                    </p>

                    {{-- Stats --}}
                    <div class="grid grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
                        @foreach([
                            ['value' => '3Kg', 'label' => 'Tabung Subsidi'],
                            ['value' => '24/7', 'label' => 'Sistem Online'],
                            ['value' => '100%', 'label' => 'Terverifikasi'],
                        ] as $stat)
                        <div class="bg-white/5 rounded-2xl p-4 border border-white/5 text-center hover:bg-white/10 active:scale-95 touch-manipulation transition-all duration-300 group cursor-default">
                            <p class="text-2xl font-black text-emerald-400 mb-1 group-hover:scale-110 group-active:scale-95 transition-transform">{{ $stat['value'] }}</p>
                            <p class="text-[10px] text-slate-500 font-bold uppercase tracking-widest">{{ $stat['label'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Right: Form Card --}}
                <div x-data="{ show: false, nik: '', loading: false, result: false }" x-intersect.once="show = true"
                     :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                     class="transition-all duration-700 ease-out delay-200">

                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500/20 via-blue-500/10 to-emerald-500/20 rounded-[2.5rem] blur-2xl opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>

                        <div class="relative bg-slate-900/80 backdrop-blur-2xl rounded-[2.5rem] border border-white/10 shadow-2xl p-8 md:p-10 overflow-hidden">
                            <div class="absolute -top-20 -right-20 w-60 h-60 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>
                            <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>

                            {{-- Logo --}}
                            <div class="flex justify-center mb-8">
                                <div class="w-20 h-20 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center shadow-lg">
                                    <img src="{{ asset('images/Desain tanpa judul.webp') }}" alt="Logo MGRM" class="w-14 h-14 object-contain">
                                </div>
                            </div>

                            {{-- ===== FORM VIEW ===== --}}
                            <div x-show="!result" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
                                <div class="text-center mb-8">
                                    <h2 class="text-2xl font-black text-white mb-2 tracking-tight">Ambil Nomor Antrian</h2>
                                    <p class="text-slate-400 text-sm font-medium">Tabung Subsidi LPG 3Kg - Masukkan NIK KTP Anda</p>
                                </div>

                                <div class="space-y-5 relative z-10">
                                    <div class="relative group/input">
                                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-slate-500 group-focus-within/input:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                                            </svg>
                                        </div>
                                        <input type="text"
                                               x-model="nik"
                                               maxlength="16"
                                               inputmode="numeric"
                                               pattern="[0-9]*"
                                               placeholder="Masukkan 16 Digit NIK KTP"
                                               class="w-full bg-white/5 border border-white/10 rounded-2xl py-4 pl-14 pr-5 text-white placeholder-slate-500 font-bold text-lg tracking-widest focus:outline-none focus:ring-2 focus:ring-emerald-500/50 focus:border-emerald-500/50 transition-all duration-300 hover:bg-white/[0.07]"
                                               @input="nik = nik.replace(/\D/g, '')">
                                        
                                        <div class="absolute inset-y-0 right-0 pr-5 flex items-center pointer-events-none">
                                            <span class="text-xs font-bold transition-colors"
                                                  :class="nik.length === 16 ? 'text-emerald-400' : 'text-slate-600'"
                                                  x-text="nik.length + '/16'"></span>
                                        </div>
                                    </div>

                                    <button @click="if(nik.length === 16) { loading = true; setTimeout(() => { loading = false; result = true; }, 1500); }"
                                            :disabled="nik.length !== 16"
                                            :class="nik.length === 16 ? 'bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-400 hover:to-emerald-500 shadow-[0_8px_30px_rgba(16,185,129,0.3)] hover:shadow-[0_12px_40px_rgba(16,185,129,0.4)] hover:scale-[1.02] cursor-pointer' : 'bg-slate-800 cursor-not-allowed opacity-50'"
                                            class="w-full py-4 rounded-2xl text-white font-black text-lg uppercase tracking-wider active:scale-95 touch-manipulation transition-all duration-300 flex items-center justify-center gap-3 relative overflow-hidden group">
                                        
                                        <template x-if="!loading">
                                            <span class="flex items-center gap-3">
                                                <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                                Cek NIK
                                            </span>
                                        </template>
                                        <template x-if="loading">
                                            <span class="flex items-center gap-3">
                                                <svg class="w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                                                Memeriksa...
                                            </span>
                                        </template>
                                    </button>

                                    <p class="text-center text-slate-600 text-xs font-medium">
                                        <svg class="w-3.5 h-3.5 inline-block mr-1 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                        Data NIK Anda terenkripsi dan aman
                                    </p>
                                </div>
                            </div>

                            {{-- ===== RESULT VIEW (Tiket Bergaya QRIS) ===== --}}
                            <div x-show="result" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" style="display:none">
                                
                                {{-- Success Badge --}}
                                <div class="text-center mb-5">
                                    <div class="w-14 h-14 mx-auto mb-3 rounded-full bg-emerald-500/20 flex items-center justify-center animate-bounce" style="animation-duration:2s; animation-iteration-count:3">
                                        <svg class="w-7 h-7 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    <h2 class="text-lg font-black text-emerald-400 mb-1 tracking-tight">NIK Terverifikasi!</h2>
                                    <p class="text-slate-500 text-xs font-medium">Simpan / Download tiket di bawah</p>
                                </div>

                                {{-- ===== TIKET QRIS-STYLE (White Card) ===== --}}
                                <div id="tiket-antrian" class="bg-white rounded-3xl p-6 mb-5 shadow-lg relative overflow-hidden">
                                    
                                    {{-- Header Strip --}}
                                    <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-2xl px-5 py-4 mb-5 flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center">
                                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/></svg>
                                            </div>
                                            <div>
                                                <p class="text-white font-black text-sm tracking-wide leading-none">OKE GAS</p>
                                                <p class="text-white/70 text-[10px] font-medium mt-0.5">PT. MGRM Kutai Kartanegara</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-white/60 text-[9px] font-bold uppercase tracking-widest">Tiket Antrian</p>
                                            <p class="text-white font-black text-xs" x-text="new Date().toLocaleDateString('id-ID', { day: '2-digit', month: '2-digit', year: 'numeric' })"></p>
                                        </div>
                                    </div>

                                    {{-- Nomor Antrian Besar --}}
                                    <div class="text-center py-5 border-2 border-dashed border-emerald-200 rounded-2xl mb-5 bg-emerald-50/50">
                                        <p class="text-emerald-600/60 text-[10px] font-bold uppercase tracking-[0.2em] mb-1">Nomor Antrian Anda</p>
                                        <p class="text-5xl font-black text-emerald-600 tracking-tight leading-none">A-0042</p>
                                    </div>

                                    {{-- Logo Perusahaan (logo.webp) --}}
                                    <div class="flex justify-center mb-5">
                                        <div class="w-28 h-28 rounded-xl border-2 border-slate-100 flex items-center justify-center bg-white p-4 shadow-sm">
                                            <img id="logo-tiket" src="{{ asset('images/Desain tanpa judul.webp') }}" alt="Logo MGRM" class="w-full h-full object-contain">
                                        </div>
                                    </div>

                                    {{-- Dotted Separator --}}
                                    <div class="flex items-center gap-2 mb-4 px-2">
                                        <div class="flex-1 border-b-2 border-dotted border-slate-200"></div>
                                        <span class="text-slate-300 text-[10px] font-bold uppercase tracking-widest">Detail</span>
                                        <div class="flex-1 border-b-2 border-dotted border-slate-200"></div>
                                    </div>

                                    {{-- Detail Info --}}
                                    <div class="space-y-2.5 mb-4 px-1">
                                        <div class="flex justify-between items-center">
                                            <span class="text-slate-400 text-[11px] font-bold uppercase tracking-wider">Nama</span>
                                            <span class="text-slate-800 text-xs font-black">Contoh Nama Penerima</span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <span class="text-slate-400 text-[11px] font-bold uppercase tracking-wider">NIK</span>
                                            <span class="text-slate-800 text-xs font-black tracking-wider" x-text="nik"></span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <span class="text-slate-400 text-[11px] font-bold uppercase tracking-wider">Tanggal</span>
                                            <span class="text-slate-800 text-xs font-black" x-text="new Date().toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' })"></span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <span class="text-slate-400 text-[11px] font-bold uppercase tracking-wider">Agen</span>
                                            <span class="text-slate-800 text-xs font-black">Agen LPG Tenggarong</span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <span class="text-slate-400 text-[11px] font-bold uppercase tracking-wider">Status</span>
                                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-700 text-[10px] font-black uppercase tracking-wider">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                                Aktif
                                            </span>
                                        </div>
                                    </div>

                                    {{-- Footer --}}
                                    <div class="border-t border-slate-100 pt-3 text-center">
                                        <p class="text-slate-300 text-[9px] font-bold uppercase tracking-widest">Tunjukkan tiket ini saat pengambilan tabung</p>
                                    </div>
                                </div>

                                {{-- Download & Back Buttons --}}
                                <div class="space-y-3">
                                    <button @click="window.downloadTiket()"
                                            class="w-full py-4 rounded-2xl bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-400 hover:to-emerald-500 text-white font-black text-sm uppercase tracking-wider transition-all duration-300 shadow-lg shadow-emerald-500/25 hover:shadow-emerald-500/40 hover:scale-[1.02] active:scale-95 touch-manipulation flex items-center justify-center gap-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                        Download Tiket PDF
                                    </button>

                                    <button @click="result = false; nik = ''"
                                            class="w-full py-3.5 rounded-2xl border border-white/10 text-white/70 hover:text-white hover:bg-white/5 font-bold text-sm uppercase tracking-wider transition-all duration-300 active:scale-95 touch-manipulation flex items-center justify-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                                        Cek NIK Lain
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
         SECTION: BUTUH BANTUAN
    ═══════════════════════════════════════════════ --}}
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="bg-slate-50 rounded-3xl p-8 md:p-12 border border-slate-100 flex flex-col md:flex-row items-center justify-between gap-8"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition-all duration-700 ease-out">
                <div class="text-center md:text-left">
                    <h3 class="text-xl font-black text-slate-800 mb-2">Butuh Bantuan?</h3>
                    <p class="text-slate-500 text-sm font-medium">Hubungi kami jika mengalami kendala dalam proses pendaftaran antrian.</p>
                </div>
                <a href="{{ url('/kontak') }}" wire:navigate
                   class="group inline-flex items-center gap-3 bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-4 px-8 rounded-full uppercase tracking-wide transition-all duration-300 hover:shadow-[0_0_20px_rgba(16,185,129,0.4)] hover:scale-[1.02] active:scale-95 touch-manipulation flex-shrink-0">
                    Hubungi Kami
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1 group-active:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- jsPDF Library for PDF Download --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        window.downloadTiket = function() {
            if (typeof window.jspdf === 'undefined') {
                alert('Mohon tunggu sebentar, library sedang dimuat. Coba klik lagi.');
                return;
            }

            // Loading state
            var btn = event.target.closest('button');
            var originalHTML = btn.innerHTML;
            btn.innerHTML = '<svg class="w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg> Membuat PDF...';
            btn.disabled = true;

            try {
                var jsPDF = window.jspdf.jsPDF;
                var w = 80; // width mm
                var h = 150; // height mm
                var pdf = new jsPDF({ orientation: 'portrait', unit: 'mm', format: [w, h] });
                var x = 5; // left margin
                var rw = w - 10; // content width (70mm)
                var y = 8;

                // ── Background
                pdf.setFillColor(255, 255, 255);
                pdf.rect(0, 0, w, h, 'F');

                // ── Green Header Bar
                pdf.setFillColor(16, 185, 129); // emerald-500
                pdf.roundedRect(x, y, rw, 18, 3, 3, 'F');

                // Header text: OKE GAS
                pdf.setFont('helvetica', 'bold');
                pdf.setFontSize(14);
                pdf.setTextColor(255, 255, 255);
                pdf.text('OKE GAS', x + 5, y + 8);

                pdf.setFontSize(6);
                pdf.setTextColor(255, 255, 255);
                pdf.text('PT. MGRM Kutai Kartanegara', x + 5, y + 13);

                // Header right: Tiket Antrian & Date
                pdf.setFontSize(5);
                pdf.setTextColor(200, 255, 230);
                pdf.text('TIKET ANTRIAN', x + rw - 5, y + 7, { align: 'right' });

                var today = new Date();
                var dateStr = today.toLocaleDateString('id-ID', { day: '2-digit', month: '2-digit', year: 'numeric' });
                pdf.setFontSize(7);
                pdf.setTextColor(255, 255, 255);
                pdf.text(dateStr, x + rw - 5, y + 13, { align: 'right' });

                y += 24;

                // ── Dashed border box: Nomor Antrian
                pdf.setDrawColor(16, 185, 129);
                pdf.setLineDashPattern([1.5, 1], 0);
                pdf.setFillColor(240, 253, 244); // emerald-50
                pdf.roundedRect(x, y, rw, 26, 3, 3, 'FD');
                pdf.setLineDashPattern([], 0);

                pdf.setFontSize(6);
                pdf.setTextColor(100, 160, 130);
                pdf.text('NOMOR ANTRIAN ANDA', w / 2, y + 7, { align: 'center' });

                pdf.setFontSize(28);
                pdf.setFont('helvetica', 'bold');
                pdf.setTextColor(5, 150, 105); // emerald-600
                pdf.text('A-0042', w / 2, y + 21, { align: 'center' });

                y += 32;

                // ── Draw Logo Image
                var logoImg = document.getElementById('logo-tiket');
                var logoSize = 25;
                var logoX = (w - logoSize) / 2;
                
                // Draw a soft border around logo
                pdf.setDrawColor(240, 240, 240);
                pdf.setLineDashPattern([], 0);
                pdf.roundedRect(logoX - 2, y - 2, logoSize + 4, logoSize + 4, 3, 3, 'S');

                if (logoImg && logoImg.complete) {
                    var canvas = document.createElement('canvas');
                    canvas.width = logoImg.naturalWidth;
                    canvas.height = logoImg.naturalHeight;
                    var ctx = canvas.getContext('2d');
                    ctx.drawImage(logoImg, 0, 0);
                    var imgData = canvas.toDataURL('image/png');
                    pdf.addImage(imgData, 'PNG', logoX, y, logoSize, logoSize);
                }

                y += logoSize + 8;

                // ── Dotted Separator
                pdf.setDrawColor(200, 200, 200);
                pdf.setLineDashPattern([1, 1], 0);
                pdf.line(x + 5, y, x + rw - 5, y);
                pdf.setLineDashPattern([], 0);

                pdf.setFontSize(5);
                pdf.setTextColor(180, 180, 180);
                pdf.text('DETAIL', w / 2, y - 1, { align: 'center' });

                y += 5;

                // ── Detail rows
                // Get NIK from the page
                var nikEl = document.querySelector('[x-text="nik"]');
                var nikVal = nikEl ? nikEl.textContent : '0000000000000000';
                var tanggalEl = document.querySelector('[x-text*="toLocaleDateString"]');
                var tanggalVal = tanggalEl ? tanggalEl.textContent : dateStr;

                var details = [
                    { label: 'NAMA', value: 'Contoh Nama Penerima' },
                    { label: 'NIK', value: nikVal },
                    { label: 'TANGGAL', value: tanggalVal },
                    { label: 'AGEN', value: 'Agen LPG Tenggarong' },
                    { label: 'STATUS', value: 'AKTIF' },
                ];

                details.forEach(function(item) {
                    pdf.setFontSize(6);
                    pdf.setFont('helvetica', 'bold');
                    pdf.setTextColor(160, 160, 160);
                    pdf.text(item.label, x + 3, y);

                    pdf.setTextColor(30, 30, 30);
                    pdf.text(item.value, x + rw - 3, y, { align: 'right' });

                    y += 1.5;
                    pdf.setDrawColor(240, 240, 240);
                    pdf.setLineDashPattern([], 0);
                    pdf.line(x + 3, y, x + rw - 3, y);
                    y += 5;
                });

                y += 2;

                // ── Footer
                pdf.setFontSize(5);
                pdf.setTextColor(180, 180, 180);
                pdf.text('Tunjukkan tiket ini saat pengambilan tabung', w / 2, y, { align: 'center' });
                y += 4;
                pdf.text('© ' + today.getFullYear() + ' PT. MGRM Kutai Kartanegara', w / 2, y, { align: 'center' });

                // Save
                pdf.save('Tiket-Antrian-OKE-GAS.pdf');

                btn.innerHTML = originalHTML;
                btn.disabled = false;

            } catch(err) {
                alert('Gagal membuat PDF: ' + err.message);
                btn.innerHTML = originalHTML;
                btn.disabled = false;
            }
        };
    </script>

</x-layouts.app>
