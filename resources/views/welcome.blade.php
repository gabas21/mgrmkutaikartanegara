<x-layouts.app>
    <x-slot:title>PT. Mahakam Gerbang Raja Migas | BUMD Kutai Kartanegara</x-slot:title>

    {{-- ═══════════════════════════════════════════════
         MODERN ENERGY HERO SECTION
    ═══════════════════════════════════════════════ --}}
    <section class="relative w-full min-h-[90vh] flex flex-col justify-center bg-[#0B1120] overflow-hidden pt-28 pb-16 lg:pb-32">
        
        <!-- Background Elements (Modern Gas/Oil Abstract) -->
        <div class="absolute inset-0 z-0">
            <!-- Background Image with blended curves -->
            <img src="{{ asset('images/WhatsApp-Image-2023-07-25-at-11.11.33.webp') }}" alt="Fasilitas Migas MGRM" 
                 class="w-full h-full object-cover object-center opacity-30 mix-blend-overlay" />
            
            <!-- Abstract Glow / Flare gradients (Tema Migas: Api biru/orange) -->
            <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-red-600/20 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3 mix-blend-screen"></div>
            <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-blue-500/10 rounded-full blur-[100px] translate-y-1/3 -translate-x-1/4 mix-blend-screen"></div>
            
            <!-- Dark Overlay Gradients for Readability -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#0B1120]/80 via-[#0B1120]/60 to-[#0B1120]"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-12 w-full pt-4 md:pt-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                {{-- Kiri: Teks dan Tombol --}}
                <div class="lg:col-span-7 flex flex-col items-center text-center lg:items-start lg:text-left"
                     x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)"
                     :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-12'"
                     class="transition-all duration-1000 ease-out">
                    
                    <!-- Modern Pill Badge -->
                    <div class="inline-flex items-center justify-center lg:justify-start gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-6 hover:bg-white/10 transition-colors cursor-default">
                        <span class="flex h-2 w-2 rounded-full bg-red-500 animate-pulse"></span>
                        <span class="text-red-400 font-semibold tracking-wider text-xs sm:text-sm uppercase text-center lg:text-left">BUMD Energi Kutai Kartanegara</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-6xl lg:text-[72px] font-black text-white leading-[1.1] mb-6 tracking-tight">
                        Sinergi <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-400 drop-shadow-lg">Energi</span>,<br/>
                        Membangun Kemandirian Daerah.
                    </h1>
                    
                    <p class="text-slate-300/90 text-lg md:text-xl font-medium mb-10 max-w-xl leading-relaxed">
                        PT. Mahakam Gerbang Raja Migas, BUMD Kutai Kartanegara pengelola Participating Interest (PI) 10% terpercaya untuk masa depan energi yang berkelanjutan.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-5 w-full sm:w-auto">
                        <!-- Primary CTA: Glow & Rounded-full -->
                        <a href="#layanan" wire:navigate class="group relative flex items-center justify-center w-full sm:w-auto bg-red-600 text-white font-bold px-8 py-4 rounded-full overflow-hidden transition-all duration-300 hover:scale-105 active:scale-95 hover:shadow-[0_0_30px_rgba(220,38,38,0.4)]">
                            <span class="absolute inset-0 bg-gradient-to-r from-red-500 to-red-600 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            <span class="relative z-10 flex items-center gap-2">
                                Pelajari Bisnis Kami
                                <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </span>
                        </a>
                        
                        <!-- Secondary CTA: Glassmorphism Outline -->
                        <a href="{{ url('/tentang/visi-misi') }}" wire:navigate class="flex items-center justify-center w-full sm:w-auto px-8 py-4 rounded-full text-white font-bold bg-white/5 border border-white/20 backdrop-blur-sm hover:bg-white/10 hover:border-white/40 transition-all duration-300 hover:scale-105 active:scale-95">
                            Profil MGRM
                        </a>
                    </div>
                </div>

                {{-- Kanan: Visual Logo 3D & Nama Perusahaan --}}
                <div class="lg:col-span-5 relative flex flex-col justify-center lg:justify-end items-center mt-10 lg:mt-0"
                     x-data="{ show: false }" x-init="setTimeout(() => show = true, 400)"
                     :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                     class="transition-all duration-1000 ease-out delay-200">
                    
                    {{-- Logo Container --}}
                    <div class="relative group w-80 h-80 md:w-96 md:h-96 lg:w-[450px] lg:h-[450px] flex items-center justify-center">
                        {{-- Glowing Backing --}}
                        <div class="absolute inset-0 bg-red-600/30 blur-[80px] rounded-full scale-100 group-hover:scale-110 group-hover:bg-red-500/40 transition-all duration-700 pointer-events-none"></div>
                        <div class="absolute inset-0 bg-white/10 blur-[40px] rounded-full scale-75 group-hover:scale-100 transition-all duration-700 pointer-events-none"></div>
                        
                        {{-- Logo Icon Image --}}
                        <img src="{{ asset('images/Desain tanpa judul.svg') }}" alt="Logo Icon MGRM" 
                             class="relative z-10 w-full h-auto max-w-full drop-shadow-[0_20px_50px_rgba(0,0,0,0.5)] transition-all duration-700 ease-out group-hover:-translate-y-4 group-hover:scale-110 transform-gpu"
                             style="filter: drop-shadow(0 0 30px rgba(220, 38, 38, 0.3));">
                    </div>

                    {{-- Nama Perusahaan di bawah Logo --}}
                    <div class="mt-8 text-center hidden lg:block"
                         x-data="{ showText: false }" x-init="setTimeout(() => showText = true, 800)"
                         :class="showText ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                         class="transition-all duration-1000 ease-out delay-500">
                        <h2 class="text-3xl md:text-4xl font-black text-white tracking-widest uppercase drop-shadow-lg">
                            PT. MGRM
                        </h2>
                        <p class="text-red-400 font-bold tracking-[0.25em] text-sm md:text-base uppercase mt-3 drop-shadow-md">
                            Kutai Kartanegara
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </section>

    {{-- ═══════════════════════════════════════════════
         MODERN FLOATING STATS
    ═══════════════════════════════════════════════ --}}
    <div class="w-full bg-gradient-to-b from-[#0B1120] to-slate-900 pt-px pb-12">
        <div class="relative z-20 max-w-7xl mx-auto px-6 md:px-12 -mt-16 sm:-mt-24 lg:mx-auto"
             x-data="{ show: false }"
             x-init="setTimeout(() => show = true, 400)"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
             class="transition-all duration-1000 ease-out"
        >
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 bg-white/10 backdrop-blur-2xl border border-white/10 shadow-[0_8px_40px_rgba(0,0,0,0.3)] rounded-3xl p-4 divide-y md:divide-y-0 md:divide-x divide-white/10">
                
                <!-- Stat Item 1 -->
                <div class="flex items-center gap-6 p-6 group hover:-translate-y-1 active:scale-95 transition-all duration-300 cursor-default">
                    <div class="w-16 h-16 flex items-center justify-center bg-gradient-to-br from-red-500 to-red-600 text-white rounded-2xl shadow-lg shrink-0 group-hover:shadow-red-500/40 transition-shadow">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                    <div>
                        <h3 class="text-3xl font-black text-white leading-none mb-1 drop-shadow-md">PI 10%</h3>
                        <p class="text-sm text-red-300 font-semibold uppercase tracking-wider">Blok Mahakam</p>
                    </div>
                </div>

                <!-- Stat Item 2 -->
                <div class="flex items-center gap-6 p-6 group hover:-translate-y-1 active:scale-95 transition-all duration-300 cursor-default">
                    <div class="w-16 h-16 flex items-center justify-center bg-gradient-to-br from-slate-700 to-slate-800 border border-slate-600 text-white rounded-2xl shadow-lg shrink-0 group-hover:shadow-slate-600/40 transition-shadow">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M21 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6M10 3h4a2 2 0 012 2v2H8V5a2 2 0 012-2z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-3xl font-black text-white leading-none mb-1 drop-shadow-md">10+</h3>
                        <p class="text-sm text-slate-300 font-semibold uppercase tracking-wider">Fokus Lini Bisnis</p>
                    </div>
                </div>

                <!-- Stat Item 3 -->
                <div class="flex items-center gap-6 p-6 group hover:-translate-y-1 active:scale-95 transition-all duration-300 cursor-default">
                    <div class="w-16 h-16 flex items-center justify-center bg-gradient-to-br from-red-500 to-red-600 text-white rounded-2xl shadow-lg shrink-0 group-hover:shadow-red-500/40 transition-shadow">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1v2H9V7zm0 4h1v2H9v-2zm0 4h1v2H9v-2zm3-8h1v2h-1V7zm0 4h1v2h-1v-2zm0 4h1v2h-1v-2zm3-8h1v2h-1V7zm0 4h1v2h-1v-2zm0 4h1v2h-1v-2z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-3xl font-black text-white leading-none mb-1 drop-shadow-md">BUMD</h3>
                        <p class="text-sm text-red-300 font-semibold uppercase tracking-wider">Kutai Kartanegara</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <style>
        @keyframes scrolldown {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(8px); opacity: 0; }
        }
    </style>

    {{-- ═══════════════════════════════════════════════
         VIDEO SECTION — Autoplay Loop (Modern & Rounded)
    ═══════════════════════════════════════════════ --}}
    @php $videoId = '8B6LCkgIcMc'; @endphp
    <section class="py-24 px-6 md:px-12 bg-slate-900 relative overflow-hidden" aria-labelledby="video-heading">
        {{-- Deco (Soft gradient blobs instead of hard skewed lines) --}}
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-red-600/10 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-blue-500/10 rounded-full blur-[80px] translate-y-1/2 -translate-x-1/4"></div>

        <div class="max-w-7xl mx-auto relative z-10 flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

            {{-- Left: Text Content --}}
            <div class="lg:w-1/3 text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-800/50 border border-slate-700 backdrop-blur-sm mb-6">
                    <span class="flex h-2 w-2 rounded-full bg-red-500"></span>
                    <span class="text-red-400 font-bold tracking-widest text-[11px] uppercase">Video Profil</span>
                </div>
                <h2 id="video-heading" class="text-4xl md:text-5xl lg:text-[54px] font-black text-white mb-6 leading-[1.15] tracking-tight">
                    Mengenal <br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600">PT. MGRM</span> <br />
                    Lebih Dekat
                </h2>
                <p class="text-slate-400 text-lg leading-relaxed mb-8">
                    Simak video profil resmi kami untuk mengetahui lebih lanjut tentang peran dan kontribusi MGRM bagi masa depan energi daerah Kutai Kartanegara.
                </p>
            </div>

            {{-- Right: Autoplay Embed (Rounded Glass Frame) --}}
            <div class="lg:w-2/3 w-full" x-data="{ muted: true }">
                <div class="relative rounded-3xl overflow-hidden border-[6px] lg:border-[8px] border-slate-800/50 shadow-[0_20px_50px_rgba(0,0,0,0.5)] bg-slate-800">
                    <div class="aspect-video w-full bg-black">
                        <iframe
                            id="mgrm-video"
                            :src="muted
                                ? 'https://www.youtube.com/embed/{{ $videoId }}?autoplay=1&loop=1&playlist={{ $videoId }}&mute=1&rel=0&modestbranding=1&controls=1'
                                : 'https://www.youtube.com/embed/{{ $videoId }}?autoplay=1&loop=1&playlist={{ $videoId }}&mute=0&rel=0&modestbranding=1&controls=1'"
                            title="Video Profil PT. Mahakam Gerbang Raja Migas"
                            class="w-full h-full"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>

                    {{-- Mute / Unmute pill badge --}}
                    <div class="absolute bottom-4 left-4 sm:bottom-6 sm:left-6">
                        <button
                            @click="muted = !muted"
                            class="flex items-center gap-2 px-4 py-2 sm:px-5 sm:py-2.5 rounded-full bg-slate-900/80 backdrop-blur-md hover:bg-red-600 text-white text-xs sm:text-sm font-bold uppercase tracking-wider transition-all duration-300 border border-white/10 hover:border-red-500 hover:shadow-[0_0_20px_rgba(220,38,38,0.5)] group"
                            :aria-label="muted ? 'Aktifkan suara' : 'Matikan suara'"
                        >
                            <template x-if="muted">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2"/></svg>
                            </template>
                            <template x-if="!muted">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M15.536 8.464a5 5 0 010 7.072M12 6v12m0 0l-3-3m3 3l3-3M9 9H5a2 2 0 00-2 2v2a2 2 0 002 2h4l5 5V4L9 9z"/></svg>
                            </template>
                            <span x-text="muted ? 'Suara Off' : 'Suara On'"></span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         MITRA BISNIS & WILAYAH KERJA SECTION (Soft Cards)
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 px-6 md:px-12 bg-slate-50 relative border-b border-t border-slate-200" aria-labelledby="mitra-heading">
        {{-- Soft Grid Background --}}
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(#cbd5e1 1px, transparent 1px), linear-gradient(90deg, #cbd5e1 1px, transparent 1px); background-size: 40px 40px;"></div>

        <div class="max-w-7xl mx-auto relative z-10 flex flex-col items-center">
            
            <div class="text-center w-full z-10 relative mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-100 border border-red-200 mb-6">
                    <span class="flex h-2 w-2 rounded-full bg-red-600"></span>
                    <span class="text-red-700 font-bold tracking-widest text-[11px] uppercase">Profil Perusahaan</span>
                </div>
                <h2 id="mitra-heading" class="text-4xl md:text-5xl font-black text-slate-900 mb-6 tracking-tight leading-tight">
                    PT <span class="text-slate-500">Mahakam Gerbang Raja Migas</span>
                </h2>
                <p class="text-slate-600 max-w-3xl mx-auto text-lg leading-relaxed font-medium">
                    Merupakan Badan Usaha Milik Daerah (BUMD) Penerima <span class="bg-red-100 text-red-700 font-bold px-2 py-0.5 rounded-md">Participating Interest (PI) 10%</span> pada Wilayah Kerja Minyak dan Gas Bumi di Kabupaten Kutai Kartanegara.
                </p>
            </div>

            {{-- 3 Working Blocks Cards (Modern Soft Shadow Cards) --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mb-24 max-w-5xl w-full">
                @foreach([
                    ['title' => 'Blok Mahakam', 'color' => 'from-red-500 to-red-600', 'shadow' => 'shadow-red-500/20'],
                    ['title' => 'Blok Sanga-Sanga', 'color' => 'from-slate-700 to-slate-800', 'shadow' => 'shadow-slate-500/10'],
                    ['title' => 'Blok Eastkal-Attaka', 'color' => 'from-red-500 to-red-600', 'shadow' => 'shadow-red-500/20']
                ] as $i => $blok)
                <div class="group relative bg-white rounded-3xl p-10 flex flex-col items-center justify-center min-h-[240px] shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_50px_rgba(0,0,0,0.08)] transition-all duration-500 border border-slate-100 hover:-translate-y-2">
                    
                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-br {{ $blok['color'] }} shadow-lg {{ $blok['shadow'] }} text-white flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                        </svg>
                    </div>
                    <h3 class="text-xl lg:text-2xl font-black text-slate-800 uppercase tracking-wide text-center transition-colors">{{ $blok['title'] }}</h3>
                </div>
                @endforeach
            </div>

            {{-- Mitra Bisnis Section (Marquee Carousel) --}}
            <div class="w-full max-w-6xl mx-auto">
                <div class="flex items-center gap-4 mb-8">
                    <div class="h-px bg-slate-200 flex-1"></div>
                    <h3 class="text-xs font-bold text-slate-400 uppercase tracking-[0.2em] text-center px-4">Mitra Strategis & Afiliasi</h3>
                    <div class="h-px bg-slate-200 flex-1"></div>
                </div>
                
                <style>
                    @keyframes marqueeLogo {
                        0% { transform: translateX(0); }
                        100% { transform: translateX(-50%); }
                    }
                    .animate-marquee-logo {
                        animation: marqueeLogo 30s linear infinite;
                        display: flex;
                        width: max-content;
                    }
                    .animate-marquee-logo:hover {
                        animation-play-state: paused;
                    }
                </style>
                
                <div class="relative w-full overflow-hidden bg-white/70 backdrop-blur-md rounded-[2.5rem] p-8 md:p-10 shadow-[0_10px_40px_rgba(0,0,0,0.03)] border border-slate-100 flex items-center">
                    {{-- Gradient Edge Masks --}}
                    <div class="absolute left-0 top-0 bottom-0 w-16 md:w-32 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
                    <div class="absolute right-0 top-0 bottom-0 w-16 md:w-32 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>
                    
                    {{-- Carousel Track --}}
                    <div class="animate-marquee-logo gap-8 md:gap-12 pl-8 md:pl-12">
                        @php
                            $mitra = [
                                ['img' => 'images/kutaireadymix.svg', 'alt' => 'Kutai Ready Mix'],
                                ['img' => 'images/tp.svg', 'alt' => 'TP'],
                                ['img' => 'images/skmmigas.svg', 'alt' => 'SKK Migas'],
                                ['img' => 'images/pertamina.svg', 'alt' => 'Pertamina'],
                                ['img' => 'images/kutaimahakam.svg', 'alt' => 'Kutai Mahakam'],
                                ['img' => 'images/logofix.svg', 'alt' => 'MGRM'],
                            ];
                        @endphp
                        
                        {{-- We render the array twice to create a seamless infinite loop illusion --}}
                        @foreach([1, 2] as $set)
                            @foreach($mitra as $m)
                            <div class="flex items-center justify-center bg-white rounded-2xl md:rounded-[2rem] shadow-[0_10px_30px_rgba(0,0,0,0.06)] border border-slate-100 hover:shadow-[0_20px_40px_rgba(0,0,0,0.12)] transition-all duration-500 cursor-pointer flex-shrink-0 group overflow-hidden"
                                 style="width: clamp(220px, 28vw, 360px); height: clamp(140px, 18vw, 220px); min-width: 220px; max-width: 360px;">
                                <img src="{{ asset($m['img']) }}" alt="{{ $m['alt'] }}" 
                                     class="object-contain drop-shadow-sm group-hover:scale-110 transition-transform duration-500"
                                     style="width: 100%; height: 100%; max-height: 100%; max-width: 100%; padding: 1.5rem;">
                            </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         LINI BISNIS (MODERN ROUNDED CARDS)
    ═══════════════════════════════════════════════ --}}
    <section id="layanan" class="py-24 bg-slate-50 relative overflow-hidden">
        {{-- Deco Blobs --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-red-100 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 w-full relative z-10">
            
            <!-- Section Header -->
            <div class="mb-16 flex flex-col md:flex-row md:items-end justify-between gap-6"
                 x-data="{ show: false }"
                 x-intersect.once="show = true"
                 :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                 class="transition-all duration-700 ease-out"
            >
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-200/60 mb-4">
                        <span class="flex h-2 w-2 rounded-full bg-slate-500"></span>
                        <span class="text-slate-600 font-bold tracking-widest text-[11px] uppercase">Fokus Operasional</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight tracking-tight">
                        Lini Bisnis <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-400">Perusahaan</span>
                    </h2>
                </div>
                
                <a href="{{ url('/layanan') }}" wire:navigate class="inline-flex items-center gap-2 font-bold text-white bg-slate-900 hover:bg-red-600 px-6 py-3 rounded-full transition-all duration-300 hover:shadow-lg hover:shadow-red-600/30 active:scale-95 group">
                    Lihat Semua Bisnis
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            {{-- Modern Cards Grid (5 Columns) & Modal Logic --}}
            <div x-data="{ 
                modalOpen: false, 
                activeService: null,
                services: [
                    {
                        title: 'Kapal Ponton',
                        desc: 'Penyewaan Kapal Ponton untuk penyimpanan BBM',
                        full_desc: 'PT MGRM menyediakan layanan penyewaan kapal ponton berkualitas tinggi yang dirancang khusus untuk memenuhi kebutuhan penyimpanan serta transportasi Bahan Bakar Minyak (BBM) yang efisien, aman, dan mematuhi regulasi perairan yang ketat.',
                        image: 'https://images.unsplash.com/photo-1588613254060-141fed78622c?auto=format&fit=crop&q=80&w=800&h=450',
                        icon: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M2 16h20M6 16l-2-8h16l-2 8M10 8V5a2 2 0 014 0v3M3 19c3.5-2 14.5-2 18 0\'/>'
                    },
                    {
                        title: 'Pangkalan LPG',
                        desc: 'Supplier LPG PSO & Non PSO',
                        full_desc: 'Sebagai mitra tepercaya, kami bertindak sebagai supplier LPG baik subsidi (PSO) maupun non-subsidi (Non PSO) untuk memastikan pasokan bahan bakar gas yang andal dan konsisten bagi masyarakat maupun sektor industri di wilayah kerja kami.',
                        image: 'https://images.unsplash.com/photo-1621644781423-eccff30045f8?auto=format&fit=crop&q=80&w=800&h=450',
                        icon: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M12 2c-2 4-6 6.5-6 11a6 6 0 0012 0c0-4.5-4-7-6-11z\'/><path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M9.5 16a2.5 2.5 0 005 0c0-2-2.5-3.5-2.5-3.5S9.5 14 9.5 16z\'/>'
                    },
                    {
                        title: 'Trading HSD B-40',
                        desc: 'Distribusi Bahan Bakar HSD B-40',
                        full_desc: 'Lini bisnis distribusi unggulan kami untuk Bahan Bakar High Speed Diesel (HSD B-40), melayani kebutuhan operasional mesin-mesin kapasitas besar khususnya di sektor pertambangan dan perkebunan untuk menjamin produktivitas alat berat klien kami.',
                        image: 'https://images.unsplash.com/photo-1542289456-42fbbed850ad?auto=format&fit=crop&q=80&w=800&h=450',
                        icon: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M12 3L5 10.5a7.5 7.5 0 1014 0L12 3z\'/><path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M9 15a3 3 0 003 3\'/>'
                    },
                    {
                        title: 'Rental Mobil',
                        desc: 'Penyewaan Mobil Operasional Karyawan',
                        full_desc: 'Mendukung mobilitas perusahaan dengan menghadirkan layanan rental mobil yang memadai. Berfokus pada penyewaan kendaraan operasional lapangan dan angkutan karyawan yang aman, nyaman, dan terawat secara berkala.',
                        image: 'https://images.unsplash.com/photo-1580273916550-e323be2ae537?auto=format&fit=crop&q=80&w=800&h=450',
                        icon: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M5 17a2 2 0 100 4 2 2 0 000-4zm14 0a2 2 0 100 4 2 2 0 000-4zM3 11h18M5 11l2-6h10l2 6M5 11v6h14v-6\'/>'
                    },
                    {
                        title: 'Transportir BBM',
                        desc: 'Penyedia Jasa Angkutan BBM',
                        full_desc: 'Mengoperasikan armada yang memenuhi standar spesifikasi angkutan migas untuk menyalurkan Bahan Bakar Minyak (BBM) dari depo suplai ke titik distribusi maupun langsung ke pengguna akhir secara tepat waktu.',
                        image: 'https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&q=80&w=800&h=450',
                        icon: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M16 6h4l3 5v4h-3m-4-9H2v13h3m11-13v13m0 0h-3m3 0h3M5 19a2 2 0 100 4 2 2 0 000-4zm11 0a2 2 0 100 4 2 2 0 000-4z\'/>'
                    },
                    {
                        title: 'Vendor & Kontraktor',
                        desc: 'Penyedia Barang/Jasa Pertamina',
                        full_desc: 'Berperan sebagai pemasok (vendor) madya dan kontraktor yang terdaftar serta memenuhi ketentuan spesifikasi teknis untuk mendukung proyek-proyek operasional Pertamina dan perusahan-perusahaan afiliasi di bidang migas.',
                        image: 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&q=80&w=800&h=450',
                        icon: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z\'/>'
                    },
                    {
                        title: 'Vendor Held Stock',
                        desc: 'Pengelolaan Persediaan BBM',
                        full_desc: 'Layanan manajemen inventori BBM terpadu dimana MGRM mengelola ketersediaan stok secara optimal dengan menempatkan fasilitas penampungan yang diawasi dengan sistem terkontrol guna mencegah kelangkaan suplai.',
                        image: 'https://images.unsplash.com/photo-1587293852726-70cdb56c2836?auto=format&fit=crop&q=80&w=800&h=450',
                        icon: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2\'/><circle cx=\'9\' cy=\'7\' r=\'4\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/><path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75\'/>'
                    },
                    {
                        title: 'Penyewaan Ruang',
                        desc: 'Penyewaan Fasilitas Ruang Kantor',
                        full_desc: 'Mengoptimalkan aset properti dengan menawarkan layanan penyewaan ruang kantor berfasilitas lengkap. Memberikan lingkungan kerja yang nyaman, representatif, dan strategis.',
                        image: 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=800&h=450',
                        icon: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M3 21h18M3 7l9-4 9 4v14H3zM9 21v-6h6v6\'/><path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M9 10h.01M15 10h.01M12 10h.01\'/>'
                    },
                    {
                        title: 'SPBUN',
                        desc: 'Pengisian BBM Khusus Nelayan',
                        full_desc: 'Stasiun Pengisian Bahan Bakar Umum Nelayan (SPBUN) yang didedikasikan untuk memastikan nelayan daerah memperoleh akses pasokan BBM dengan harga kompetitif dan takaran yang akurat untuk mendukung perekonomian pesisir.',
                        image: 'https://images.unsplash.com/photo-1549424168-9844fcc41808?auto=format&fit=crop&q=80&w=800&h=450',
                        icon: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M3 22V4a1 1 0 011-1h10a1 1 0 011 1v18M3 22h12M7 8h4M7 4h4M19 7l2 2-4 4 2 2 2-2V7h-2z\'/>'
                    },
                    {
                        title: 'Batching Plant',
                        desc: 'Supplier Beton & Material Agregat',
                        full_desc: 'Lini bisnis penyedia material esensial konstruksi seperti ready-mix beton, batu split agregat, dan pasir urug. Divisi ini berperan penting dalam menyokong berbagai pembangunan infrastruktur fasilitas perusahaan maupun publik.',
                        image: 'https://images.unsplash.com/photo-1533422902700-50bc4938d9dc?auto=format&fit=crop&q=80&w=800&h=450',
                        icon: '<path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M2 22V10l4-4v4l4-4v4l4-4v4h4V8l2-2v16M2 22h20\'/><path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M14 12h4v4h-4z\'/>'
                    }
                ],
                openModal(index) {
                    this.activeService = this.services[index];
                    this.modalOpen = true;
                    document.body.style.overflow = 'hidden';
                },
                closeModal() {
                    this.modalOpen = false;
                    document.body.style.overflow = '';
                    setTimeout(() => { this.activeService = null; }, 300);
                }
            }">

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5 lg:gap-6">
                    <template x-for="(svc, index) in services" :key="index">
                        <button @click="openModal(index)"
                            x-data="{ visible: false }"
                            x-intersect.once="visible = true"
                            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                            :style="'transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.6s ease; transition-delay: ' + (index * 0.05) + 's'"
                            class="group block relative bg-white border border-slate-100 p-6 flex flex-col items-start text-left rounded-3xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_40px_rgba(220,38,38,0.1)] hover:-translate-y-2 hover:border-red-100 active:scale-[0.98] transition-all duration-300 w-full h-full"
                        >
                            {{-- Icon Container --}}
                            <div class="w-14 h-14 bg-slate-50 text-slate-400 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-gradient-to-br group-hover:from-red-500 group-hover:to-red-600 group-hover:text-white group-hover:shadow-lg group-hover:shadow-red-500/30 transition-all duration-300 flex-shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" x-html="svc.icon"></svg>
                            </div>

                            {{-- Content --}}
                            <h3 class="text-[17px] font-black text-slate-800 mb-3 group-hover:text-red-600 transition-colors leading-snug" x-html="svc.title"></h3>
                            <p class="text-[13px] text-slate-500 leading-relaxed font-medium mb-4 flex-grow" x-html="svc.desc"></p>

                            <div class="flex items-center gap-1.5 text-[11px] font-bold text-red-600 uppercase tracking-widest opacity-0 -translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 mt-auto">
                                Detail <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </div>
                        </button>
                    </template>
                </div>

                {{-- Modal Dialog Component --}}
                <div x-show="modalOpen" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
                        {{-- Background overlay --}}
                        <div x-show="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-slate-900/60 backdrop-blur-sm" @click="closeModal()" aria-hidden="true"></div>

                        {{-- Modal panel --}}
                        <div x-show="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="relative inline-block w-full max-w-3xl overflow-hidden text-left align-middle transition-all transform bg-white rounded-3xl shadow-2xl sm:my-8 border border-slate-100">
                            
                            {{-- Close Button --}}
                            <div class="absolute top-4 right-4 z-10">
                                <button @click="closeModal()" type="button" class="flex items-center justify-center w-10 h-10 bg-black/20 hover:bg-red-600 text-white rounded-full transition-colors focus:outline-none backdrop-blur-md">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                                </button>
                            </div>

                            <template x-if="activeService">
                                <div class="flex flex-col">
                                    {{-- Image Section --}}
                                    <div class="relative w-full h-48 sm:h-64 lg:h-72 bg-slate-100 overflow-hidden">
                                        <img :src="activeService.image" :alt="activeService.title.replace('<br>', ' ')" class="w-full h-full object-cover object-center">
                                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>
                                        <div class="absolute bottom-0 left-0 p-6 flex items-end gap-4">
                                            <div class="w-14 h-14 bg-white/10 backdrop-blur-md text-white rounded-2xl flex items-center justify-center border border-white/20 shadow-lg">
                                                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" x-html="activeService.icon"></svg>
                                            </div>
                                            <h3 class="text-3xl font-black text-white leading-tight drop-shadow-md" x-html="activeService.title.replace('<br>', ' ')"></h3>
                                        </div>
                                    </div>
                                    
                                    {{-- Content Section --}}
                                    <div class="p-6 sm:p-8 bg-white">
                                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-50 mb-4 border border-red-100">
                                            <span class="flex h-2 w-2 rounded-full bg-red-500"></span>
                                            <span class="text-red-600 font-bold tracking-widest text-[10px] uppercase">Detail Layanan</span>
                                        </div>
                                        
                                        <p class="text-sm sm:text-base text-slate-600 leading-relaxed font-medium" x-text="activeService.full_desc"></p>
                                        
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         VISI PERUSAHAAN (MODERN ROUNDED GLASS)
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 lg:py-32 px-4 sm:px-6 lg:px-12 bg-[#0B1120] relative overflow-hidden" aria-labelledby="visi-heading">
        
        {{-- Decorative Soft Blobs --}}
        <div class="absolute right-0 top-0 w-[500px] h-[500px] bg-red-600/10 rounded-full blur-[100px] translate-x-1/2 -translate-y-1/4" aria-hidden="true"></div>
        <div class="absolute inset-0 opacity-10 pointer-events-none mix-blend-overlay" style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 40px 40px;"></div>

        <div class="max-w-7xl mx-auto relative z-10 transition-all duration-700 ease-out"
             x-data="{ visible: false }" x-intersect.once="visible = true"
             :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
        >
            <div class="bg-white/5 border border-white/10 rounded-[3rem] p-8 md:p-12 lg:p-16 backdrop-blur-3xl shadow-[0_30px_60px_rgba(0,0,0,0.5)]">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                    
                    {{-- Left Side: Text Content --}}
                    <div class="lg:col-span-6 text-left">
                        
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-800/80 border border-white/5 mb-6">
                            <span class="flex h-2 w-2 rounded-full bg-red-500"></span>
                            <span class="text-red-400 font-bold tracking-widest text-[11px] uppercase">Visi Perusahaan</span>
                        </div>

                        <h2 id="visi-heading" class="text-4xl md:text-5xl lg:text-[56px] font-black text-white leading-[1.1] tracking-tight mb-8">
                            Menuju <br />
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-600 drop-shadow">Perseroda Idaman</span>
                        </h2>
                        
                        <div class="pl-6 border-l-2 border-slate-700 mb-10">
                            <p class="text-slate-300 md:text-xl font-medium mb-3 leading-relaxed">
                                Menjadikan PT. MGRM sebagai ujung tombak kemajuan energi daerah.
                            </p>
                            <p class="text-red-400 italic text-lg font-bold tracking-wide">
                                "Inovatif, Berdaya Saing, dan Mandiri"
                            </p>
                        </div>
                        
                        <a href="{{ url('/tentang/visi-misi') }}" wire:navigate 
                           class="group inline-flex items-center justify-center gap-3 bg-red-600 hover:bg-red-500 text-white font-bold py-4 px-8 rounded-full uppercase tracking-wide transition-all duration-300 hover:shadow-[0_0_20px_rgba(220,38,38,0.4)] hover:scale-105 active:scale-95">
                            Pelajari Visi Kami
                            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>

                    {{-- Right Side: Image Content --}}
                    <div class="lg:col-span-6 relative w-full">
                         <div class="relative group mx-auto w-full">
                             <!-- Glowing background aura -->
                             <div class="absolute inset-0 bg-gradient-to-tr from-red-600/30 to-slate-400/10 rounded-3xl blur-[30px] group-hover:blur-[40px] transition-all duration-500"></div>
                             
                             <!-- Main Image Container -->
                             <div class="relative rounded-3xl overflow-hidden shadow-2xl z-10 border border-white/10 group-hover:-translate-y-2 transition-all duration-500 bg-slate-800">
                                 <img src="{{ asset('images/menujuperseroidaman.webp') }}" alt="Menuju Perseroda Idaman" class="w-full h-auto object-cover scale-[1.02] group-hover:scale-105 transition-transform duration-700"
                                      onerror="this.outerHTML='<div class=\'w-full h-[350px] lg:h-[450px] bg-slate-900 flex flex-col items-center justify-center text-center p-6\'><svg class=\'w-16 h-16 text-slate-700 mb-4\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\'/></svg><span class=\'text-slate-600 font-bold uppercase tracking-widest text-sm\'>Corporate Image</span></div>'">
                                 
                                 <!-- Modern Floating Badge -->
                                 <div class="absolute bottom-6 -left-6 bg-white/10 backdrop-blur-md p-5 rounded-2xl border border-white/20 shadow-xl flex items-center gap-4">
                                     <div class="w-14 h-14 rounded-full bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center text-white shadow-[0_0_15px_rgba(220,38,38,0.5)]">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                     </div>
                                     <div>
                                         <p class="text-3xl font-black text-white leading-none mb-1">100%</p>
                                         <p class="text-[10px] text-red-300 font-bold tracking-[0.2em] uppercase">Komitmen Daerah</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         INSTAGRAM WIDGET SECTION
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 px-4 sm:px-6 lg:px-12 bg-white relative overflow-hidden flex flex-col items-center" aria-labelledby="ig-heading">
        <div class="absolute right-0 bottom-0 w-[400px] h-[400px] bg-red-50 rounded-full blur-[80px] translate-x-1/2 translate-y-1/2 pointer-events-none" aria-hidden="true"></div>
        <div class="max-w-7xl mx-auto w-full relative z-10 text-center transition-all duration-700 ease-out"
             x-data="{ visible: false }" x-intersect.once="visible = true"
             :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
             
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-100 border border-red-200 mb-6">
                <span class="flex h-2 w-2 rounded-full bg-red-600"></span>
                <span class="text-red-700 font-bold tracking-widest text-[11px] uppercase">Media Sosial</span>
            </div>

            <h2 id="ig-heading" class="text-4xl md:text-5xl font-black text-slate-900 leading-tight tracking-tight mb-4">
                Ikuti <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-400">Instagram</span> Kami
            </h2>
            
            <p class="text-slate-500 mb-12 max-w-2xl mx-auto text-lg font-medium">Dapatkan update terbaru seputar kegiatan dan layanan operasional perusahaan langsung di feed media sosial Anda.</p>
            
            <div class="w-full max-w-4xl mx-auto relative shadow-[0_20px_60px_rgba(0,0,0,0.06)] rounded-3xl overflow-hidden bg-slate-50 border border-slate-100 group">
                <script src="https://static.elfsight.com/platform/platform.js" async></script>
                <div class="elfsight-app-499a9910-fa14-45e6-9e29-97bae6bef20f w-full" data-elfsight-app-lazy></div>
            </div>
            
            <a href="https://instagram.com/mgrmofficial" target="_blank" rel="noopener noreferrer" class="mt-10 inline-flex items-center gap-3 font-bold text-white bg-gradient-to-r from-purple-600 via-pink-500 to-red-500 hover:opacity-90 px-8 py-4 rounded-full transition-all duration-300 hover:shadow-lg hover:shadow-pink-500/30 active:scale-95 group">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                Follow Kami di Instagram
            </a>
        </div>
    </section>
    </section>

    {{-- ═══════════════════════════════════════════════
         LATEST PUBLICATION / BERITA SECTION
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 px-4 sm:px-6 lg:px-12 bg-slate-50 relative overflow-hidden" aria-labelledby="publikasi-heading">
        <div class="max-w-7xl mx-auto w-full relative z-10 transition-all duration-700 ease-out"
             x-data="{ visible: false }" x-intersect.once="visible = true"
             :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
             
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white border border-slate-200 mb-4 shadow-sm">
                        <span class="flex h-2 w-2 rounded-full bg-red-600"></span>
                        <span class="text-slate-700 font-bold tracking-widest text-[11px] uppercase">Pusat Informasi</span>
                    </div>
                    <h2 id="publikasi-heading" class="text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 leading-tight tracking-tight">
                        Publikasi <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-400">Terkini</span>
                    </h2>
                </div>
                
                <a href="{{ url('/berita') }}" wire:navigate class="inline-flex items-center gap-2 font-bold text-slate-700 bg-white border border-slate-200 hover:border-red-300 hover:text-red-600 px-6 py-3 rounded-full transition-all duration-300 hover:shadow-lg active:scale-95 group">
                    Kunjungi Halaman Berita
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"
                 x-data="{
                    newsData: [
                        { id: 1, date: '15 Agustus 2024', category: 'Kegiatan CSR', title: 'MGRM Salurkan Bantuan Pendidikan untuk Ring 1', desc: 'Program Corporate Social Responsibility (CSR) kembali disalurkan berupa beasiswa pendidikan bagi putra/putri daerah di wilayah ring 1 operasional.', img: 'images/vendor2webp.webp' },
                        { id: 2, date: '02 Agustus 2024', category: 'Press Release', title: 'Peresmian Fasilitas Kapal SPBN Nelayan Terbaru', desc: 'Dukungan terhadap komunitas nelayan pesisir Kutai Kartanegara diwujudkan melalui peresmian armada SPBN terbaru oleh Direktur Utama.', img: 'images/kapal.webp' },
                        { id: 3, date: '21 Juli 2024', category: 'Info Korporat', title: 'Sertifikasi ISO 9001:2015 Berhasil Dipertahankan', desc: 'PT. Mahakam Gerbang Raja Migas sukses mempertahankan sertifikasi manajemen mutu internasional melalui serangkaian audit ketat.', img: 'images/menujuperseroidaman.webp' }
                    ]
                 }">
                
                <template x-for="(news, index) in newsData" :key="news.id">
                    {{-- Card --}}
                    <a href="{{ url('/berita/detail') }}" wire:navigate class="group bg-white rounded-3xl overflow-hidden shadow-[0_10px_40px_rgba(0,0,0,0.04)] border border-slate-100 hover:shadow-[0_20px_40px_rgba(220,38,38,0.1)] hover:-translate-y-2 transition-all duration-500 flex flex-col h-full"
                       :style="'transition-delay: ' + (index * 100) + 'ms'">
                        
                        <div class="aspect-[16/10] relative overflow-hidden bg-slate-900">
                            <img :src="'/' + news.img" :alt="news.title" class="w-full h-full object-cover mix-blend-screen opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-transform duration-700"
                                 onerror="this.src='https://placehold.co/800x500/slate/white?text=Berita'">
                            <div class="absolute top-4 left-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/90 backdrop-blur-sm text-xs font-bold text-red-600 uppercase tracking-wider shadow-sm" x-text="news.category">
                            </div>
                        </div>
                        
                        <div class="p-6 md:p-8 flex flex-col flex-grow">
                            <div class="flex items-center gap-3 text-sm text-slate-500 font-medium mb-3">
                                <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> <span x-text="news.date"></span></span>
                            </div>
                            
                            <h3 class="text-xl font-black text-slate-900 mb-3 group-hover:text-red-600 transition-colors leading-snug line-clamp-2" x-text="news.title"></h3>
                            
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3" x-text="news.desc"></p>
                            
                            <div class="mt-auto flex items-center justify-between border-t border-slate-100 pt-5">
                                <span class="text-sm font-bold text-slate-800 group-hover:text-red-600 transition-colors">Baca Selengkapnya</span>
                                <div class="w-8 h-8 rounded-full bg-slate-50 group-hover:bg-red-50 flex items-center justify-center transition-colors">
                                    <svg class="w-4 h-4 text-slate-400 group-hover:text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                                </div>
                            </div>
                        </div>
                        
                    </a>
                </template>

            </div>
        </div>
    </section>

</x-layouts.app>
