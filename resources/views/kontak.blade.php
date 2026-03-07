<x-layouts.app>
    <x-slot:title>Kontak Kami | PT. Mahakam Gerbang Raja Migas</x-slot:title>

    {{-- ═══════════════════════════════════════════════
         DARK HERO SECTION (Konsisten dengan halaman lain)
    ═══════════════════════════════════════════════ --}}
    <section class="relative bg-slate-900 pt-32 pb-48 overflow-hidden z-0">
        {{-- Abstact gradient glow & Image Background --}}
        <div class="absolute inset-0 z-0 pointer-events-none">
            <img src="{{ asset('images/WhatsApp-Image-2023-07-25-at-11.11.33.webp') }}" alt="Background MGRM" class="absolute inset-0 w-full h-full object-cover opacity-20 mix-blend-overlay" />
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-3xl h-full bg-red-600/10 blur-[120px] rounded-full mix-blend-screen"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 text-center"
             x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
             class="transition-all duration-700 ease-out">
            
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-red-500/10 text-red-400 font-bold text-sm tracking-wide border border-red-500/20 mb-6 uppercase">
                <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                Hubungi Kami
            </div>
            
            <h1 class="text-4xl md:text-5xl font-black text-white tracking-tight mb-6 leading-tight">
                Mari Terhubung<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-600">Dengan Tim Kami</span>
            </h1>
            <p class="text-lg text-slate-400 max-w-2xl mx-auto leading-relaxed">
                Kami siap membantu Anda. Jangan ragu untuk menghubungi kami melalui telepon, email, atau kunjungi kantor pusat kami di Tenggarong.
            </p>
        </div>
        
    </section>

    {{-- ═══════════════════════════════════════════════
         CONTACT INFO CARDS (Rounded 3XL style)
    ═══════════════════════════════════════════════ --}}
    <section class="relative z-20 pt-16 pb-20 bg-slate-50">
        <div class="max-w-5xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                {{-- Phone Card --}}
                <div class="bg-white rounded-[2rem] p-8 flex flex-col items-center text-center shadow-[0_15px_50px_rgba(0,0,0,0.06)] border border-slate-100 hover:border-red-100 hover:-translate-y-2 active:scale-95 touch-manipulation transition-all duration-300 ring-1 ring-slate-900/5 group cursor-default">
                    <div class="w-16 h-16 rounded-[1.25rem] bg-red-50 text-red-600 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-red-600 group-hover:text-white group-active:scale-90 transition-all duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-slate-800 mb-2 group-hover:text-red-600 transition-colors">Telepon Pusat</h3>
                    <p class="text-slate-500 font-medium">(0541) 6666324</p>
                </div>

                {{-- Email Card --}}
                <div class="bg-white rounded-[2rem] p-8 flex flex-col items-center text-center shadow-[0_15px_50px_rgba(0,0,0,0.06)] border border-slate-100 hover:border-red-100 hover:-translate-y-2 active:scale-95 touch-manipulation transition-all duration-300 ring-1 ring-slate-900/5 group xl:scale-105 relative overflow-hidden cursor-default">
                    <div class="w-16 h-16 rounded-[1.25rem] bg-slate-900 text-white flex items-center justify-center mb-6 shadow-xl shadow-slate-900/20 group-hover:scale-110 group-hover:bg-red-600 group-active:scale-90 transition-all duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-slate-800 mb-2 group-hover:text-red-600 transition-colors">Email Resmi</h3>
                    <p class="text-slate-500 font-medium relative z-10">mgrm.pt@gmail.com</p>
                </div>

                {{-- Address Card --}}
                <div class="bg-white rounded-[2rem] p-8 flex flex-col items-center text-center shadow-[0_15px_50px_rgba(0,0,0,0.06)] border border-slate-100 hover:border-red-100 hover:-translate-y-2 active:scale-95 touch-manipulation transition-all duration-300 ring-1 ring-slate-900/5 group cursor-default">
                    <div class="w-16 h-16 rounded-[1.25rem] bg-red-50 text-red-600 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-red-600 group-hover:text-white group-active:scale-90 transition-all duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-slate-800 mb-2 group-hover:text-red-600 transition-colors">Alamat Kantor</h3>
                    <p class="text-slate-500 font-medium text-sm leading-relaxed">
                        Jl. Lais No.77 RT.7, Timbau, Kec. Tenggarong, Kabupaten Kutai Kartanegara, Kalimantan Timur 75513
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 relative bg-slate-50 overflow-hidden" x-data="{ focused: null, success: false, isSubmitting: false }">
        {{-- Background Accents --}}
        <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/3 w-[800px] h-[800px] bg-red-500/5 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 translate-y-1/3 -translate-x-1/3 w-[600px] h-[600px] bg-blue-500/5 rounded-full blur-[80px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            
            <div class="text-center mb-16 max-w-2xl mx-auto"
                 x-data="{ visible: false }" x-intersect.once="visible = true"
                 :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition-all duration-700 ease-out">
                <h2 class="text-3xl md:text-4xl font-black text-slate-800 tracking-tight">Komunikasi Dengan <span class="text-slate-800">Tim Pemasaran Kami:</span></h2>
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-16 max-w-6xl mx-auto">
                
                {{-- Left Side: Rounded Image --}}
                <div class="w-full lg:w-5/12 relative"
                     x-data="{ visible: false }" x-intersect.once="visible = true"
                     :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12'"
                     class="transition-all duration-700 ease-out delay-100">
                    
                    <div class="relative aspect-[4/5] rounded-[2.5rem] overflow-hidden shadow-2xl border-[12px] border-white group">
                        <img src="{{ asset('images/vendor2webp.webp') }}" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out" onerror="this.src='https://placehold.co/600x800/e2e8f0/0f172a?text=Tim+Pemasaran'">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
                        
                        <div class="absolute bottom-8 left-8 right-8">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="flex h-3 w-3 rounded-full bg-green-400 border border-white animate-pulse"></span>
                                <span class="text-white font-bold text-sm tracking-wide">Tim Pemasaran Aktif</span>
                            </div>
                            <h3 class="text-xl font-bold text-white leading-snug">Total Customer: <br><span class="text-4xl font-black text-red-500">45,950+</span></h3>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Dynamic Interactive Form --}}
                <div class="w-full lg:w-7/12"
                     x-data="{ visible: false }" x-intersect.once="visible = true"
                     :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-12'"
                     class="transition-all duration-700 ease-out delay-200">
                    
                    <div class="bg-white p-8 md:p-12 rounded-[2.5rem] relative">
                        
                        <div class="mb-8">
                            <h3 class="text-2xl font-black text-slate-800">Jika Ada Pertanyaan;</h3>
                        </div>

                        <form @submit.prevent="isSubmitting = true; setTimeout(() => { isSubmitting = false; success = true; focused = null; $refs.nama.value = ''; $refs.telp.value = ''; $refs.email.value = ''; $refs.subject.value = ''; $refs.pesan.value = ''; }, 1500)" class="space-y-5">
                            
                            {{-- Nama --}}
                            <div class="relative" @click.outside="if($refs.nama.value === '') focused = null">
                                <label class="absolute left-5 top-4 text-slate-400 font-medium transition-all duration-200 pointer-events-none"
                                        :class="focused === 'nama' || $refs.nama.value !== '' ? '-translate-y-2.5 text-xs text-blue-500 font-bold' : 'text-sm'">
                                    Nama
                                </label>
                                <input x-ref="nama" type="text" @focus="focused = 'nama'" required
                                        class="w-full px-5 pt-6 pb-2 rounded-2xl bg-white border border-slate-300 focus:bg-white focus:border-blue-300 focus:ring-4 focus:ring-blue-50 outline-none text-slate-800 font-bold transition-all">
                                <div class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 w-0 bg-blue-500 transition-all duration-300 rounded-b-2xl"
                                        :class="focused === 'nama' ? 'w-[98%]' : 'w-0'"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                {{-- Telepon --}}
                                <div class="relative" @click.outside="if($refs.telp.value === '') focused = null">
                                    <label class="absolute left-5 top-4 text-slate-400 font-medium transition-all duration-200 pointer-events-none"
                                           :class="focused === 'telp' || $refs.telp.value !== '' ? '-translate-y-2.5 text-xs text-blue-500 font-bold' : 'text-sm'">
                                        No. HP / WA
                                    </label>
                                    <input x-ref="telp" type="tel" @focus="focused = 'telp'" required
                                           class="w-full px-5 pt-6 pb-2 rounded-2xl bg-white border border-slate-300 focus:bg-white focus:border-blue-300 focus:ring-4 focus:ring-blue-50 outline-none text-slate-800 font-bold transition-all">
                                    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 w-0 bg-blue-500 transition-all duration-300 rounded-b-2xl"
                                         :class="focused === 'telp' ? 'w-[98%]' : 'w-0'"></div>
                                </div>

                                {{-- Email --}}
                                <div class="relative" @click.outside="if($refs.email.value === '') focused = null">
                                    <label class="absolute left-5 top-4 text-slate-400 font-medium transition-all duration-200 pointer-events-none"
                                           :class="focused === 'email' || $refs.email.value !== '' ? '-translate-y-2.5 text-xs text-blue-500 font-bold' : 'text-sm'">
                                        Email
                                    </label>
                                    <input x-ref="email" type="email" @focus="focused = 'email'" required
                                           class="w-full px-5 pt-6 pb-2 rounded-2xl bg-white border border-slate-300 focus:bg-white focus:border-blue-300 focus:ring-4 focus:ring-blue-50 outline-none text-slate-800 font-bold transition-all">
                                    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 w-0 bg-blue-500 transition-all duration-300 rounded-b-2xl"
                                         :class="focused === 'email' ? 'w-[98%]' : 'w-0'"></div>
                                </div>
                            </div>

                            {{-- Subject --}}
                            <div class="relative" @click.outside="if($refs.subject.value === '') focused = null">
                                <label class="absolute left-5 top-4 text-slate-400 font-medium transition-all duration-200 pointer-events-none"
                                       :class="focused === 'subject' || $refs.subject.value !== '' ? '-translate-y-2.5 text-xs text-blue-500 font-bold' : 'text-sm'">
                                    Subject
                                </label>
                                <input x-ref="subject" type="text" @focus="focused = 'subject'" required
                                       class="w-full px-5 pt-6 pb-2 rounded-2xl bg-white border border-slate-300 focus:bg-white focus:border-blue-300 focus:ring-4 focus:ring-blue-50 outline-none text-slate-800 font-bold transition-all">
                                <div class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 w-0 bg-blue-500 transition-all duration-300 rounded-b-2xl"
                                     :class="focused === 'subject' ? 'w-[98%]' : 'w-0'"></div>
                            </div>

                            {{-- Pesan --}}
                            <div class="relative" @click.outside="if($refs.pesan.value === '') focused = null">
                                <label class="absolute left-5 top-4 text-slate-400 font-medium transition-all duration-200 pointer-events-none"
                                       :class="focused === 'pesan' || $refs.pesan.value !== '' ? '-translate-y-2.5 text-xs text-blue-500 font-bold' : 'text-sm'">
                                    Pesan Anda
                                </label>
                                <textarea x-ref="pesan" rows="4" @focus="focused = 'pesan'" required
                                          class="w-full px-5 pt-8 pb-4 rounded-2xl bg-white border border-slate-300 focus:bg-white focus:border-blue-300 focus:ring-4 focus:ring-blue-50 outline-none text-slate-800 font-bold transition-all resize-none"></textarea>
                                <div class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 w-0 bg-blue-500 transition-all duration-300 rounded-b-2xl"
                                     :class="focused === 'pesan' ? 'w-[98%]' : 'w-0'"></div>
                            </div>

                            {{-- Submit Btn & Info --}}
                            <div class="flex items-center justify-end gap-6 pt-2">
                                <p x-show="success" style="display: none;" class="text-green-600 font-bold text-sm flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                    Terimakasih :)
                                </p>
                                <button type="submit" 
                                        :disabled="isSubmitting"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full active:scale-95 touch-manipulation transition-all duration-300 shadow-lg shadow-blue-500/30 flex items-center justify-center gap-2 group disabled:opacity-70 disabled:cursor-not-allowed">
                                    
                                    <span x-show="!isSubmitting">Kirim</span>
                                    <svg x-show="!isSubmitting" class="w-4 h-4 group-hover:translate-x-1 group-active:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg>

                                    {{-- Loading Spinner --}}
                                    <svg x-show="isSubmitting" style="display: none;" class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         FULL WIDTH MAP SECTION (Modern Framing)
    ═══════════════════════════════════════════════ --}}
    <section class="py-12 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center mb-8">
            <h2 class="text-2xl font-black text-slate-800">Temukan Kami di <span class="text-red-600">Google Maps</span></h2>
        </div>
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="h-[450px] w-full bg-slate-200 rounded-[2.5rem] overflow-hidden shadow-xl border border-slate-200 ring-4 ring-slate-50">
                <iframe 
                    src="https://maps.google.com/maps?q=Jl.+Lais+No.77+RT.7,+Timbau,+Kec.+Tenggarong,+Kabupaten+Kutai+Kartanegara,+Kalimantan+Timur+75513&t=&z=16&ie=UTF8&iwloc=&output=embed" 
                    class="w-full h-full border-0" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

</x-layouts.app>
