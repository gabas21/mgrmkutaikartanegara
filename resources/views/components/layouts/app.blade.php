<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PT. Mahakam Gerbang Raja Migas' }}</title>
    
    {{-- Favicon --}}
    <link rel="icon" type="image/webp" href="{{ asset('images/logofix.webp') }}">
    <link rel="shortcut icon" href="{{ asset('images/logofix.webp') }}">

    {{-- Font Preconnect (speeds up Google Fonts) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans text-text-body bg-surface antialiased">

    <x-navbar />

    <div class="scroll-progress" id="scrollProgress"></div>

    {{ $slot }}

    {{-- ═══════════════════════════════════════════════
         CONSULTATION CTA STRIP
    ═══════════════════════════════════════════════ --}}
    <div class="relative bg-white py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-2xl overflow-hidden bg-slate-900 border-l-8 border-red-600 shadow-2xl flex flex-col md:flex-row items-center justify-between p-8 md:p-12 gap-8">
                
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 30px 30px;"></div>
                
                <!-- Content -->
                <div class="relative z-10 text-center md:text-left">
                    <p class="text-red-500 font-bold uppercase tracking-widest text-sm mb-2">PT. Mahakam Gerbang Raja Migas (Perseroda)</p>
                    <h2 class="text-3xl md:text-4xl font-black text-white tracking-tight">Ingin Konsultasi dengan Tim Kami?</h2>
                </div>

                <!-- Button -->
                <div class="relative z-10 shrink-0">
                    <a href="{{ url('/kontak') }}" wire:navigate class="group inline-flex items-center justify-center gap-3 bg-red-600 hover:bg-red-500 text-white font-bold py-4 px-8 rounded-lg uppercase tracking-wide transition-all duration-300 shadow-lg shadow-red-600/30">
                        <span>Contact Us</span>
                        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </a>
                </div>
                
                <!-- Decorative Graphic (Optional/Abstract) -->
                <div class="absolute hidden lg:block right-0 bottom-0 opacity-20 pointer-events-none translate-x-1/4 translate-y-1/4">
                    <svg width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <x-footer />

    <x-mobile-navbar /> {{-- hanya tampil di mobile --}}

    @livewireScriptConfig

    <script>
        // Scroll progress bar
        window.addEventListener('scroll', () => {
            const scrollProgress = document.getElementById('scrollProgress')
            if (scrollProgress) {
                const scrollTop = document.documentElement.scrollTop
                const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight
                const progress = scrollHeight > 0 ? (scrollTop / scrollHeight) * 100 : 0
                scrollProgress.style.width = progress + '%'
            }
        })
    </script>

    <!-- UserWay widget styling to avoid mobile navbar -->
    <style>
        .userway_buttons_wrapper, .uwy {
            bottom: 100px !important;
            cursor: grab !important;
        }
        @media (max-width: 768px) {
            .userway_buttons_wrapper, .uwy {
                bottom: 90px !important; /* Above mobile navbar */
                right: 10px !important;
                transform: scale(0.9) !important; /* Slightly smaller on mobile */
                transform-origin: bottom right !important;
            }
        }
    </style>
    
    {{-- UserWay widget — loaded AFTER page is ready (deferred) --}}
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                var s = document.createElement('script');
                s.src = 'https://cdn.userway.org/widget.js';
                s.dataset.account = 'YOUR_ACCOUNT_ID_HERE';
                document.body.appendChild(s);

                // Make draggable after widget loads
                var attempts = 0;
                function makeDraggable() {
                    var w = document.querySelector('.userway_buttons_wrapper') || document.querySelector('.uwy') || document.querySelector('[data-uw-container]');
                    if (!w) { if (++attempts < 20) setTimeout(makeDraggable, 500); return; }
                    w.style.position = 'fixed'; w.style.zIndex = '999999'; w.style.cursor = 'grab';
                    var drag = false, ox, oy;
                    function start(cx, cy) { drag = true; ox = cx - w.getBoundingClientRect().left; oy = cy - w.getBoundingClientRect().top; w.style.transition = 'none'; }
                    function move(cx, cy) { if (!drag) return; var mx = window.innerWidth - w.offsetWidth, my = window.innerHeight - w.offsetHeight; w.style.left = Math.max(0, Math.min(cx - ox, mx)) + 'px'; w.style.top = Math.max(0, Math.min(cy - oy, my)) + 'px'; w.style.right = 'auto'; w.style.bottom = 'auto'; }
                    function stop() { drag = false; }
                    w.addEventListener('mousedown', function(e) { start(e.clientX, e.clientY); }, { passive: true });
                    document.addEventListener('mousemove', function(e) { move(e.clientX, e.clientY); });
                    document.addEventListener('mouseup', stop);
                    w.addEventListener('touchstart', function(e) { var t = e.touches[0]; start(t.clientX, t.clientY); if (e.cancelable) e.preventDefault(); }, { passive: false });
                    document.addEventListener('touchmove', function(e) { if (!drag) return; if (e.cancelable) e.preventDefault(); var t = e.touches[0]; move(t.clientX, t.clientY); }, { passive: false });
                    document.addEventListener('touchend', stop);
                }
                setTimeout(makeDraggable, 2000);
            }, 3000); // Delay 3s after page load — not critical for first paint
        });
    </script>
</body>
</html>
