<div
    x-data="{
        active: '{{ request()->is('/') ? 'beranda' : (request()->is('layanan*') ? 'layanan' : (request()->is('okegas*') ? 'okegas' : (request()->is('berita*') ? 'berita' : (request()->is('tentang*') ? 'tentang' : (request()->is('ppid*') ? 'ppid' : (request()->is('kontak*') ? 'kontak' : '')))))) }}',
        pressed: null,
        init() {
            document.addEventListener('livewire:navigated', () => {
                const path = window.location.pathname;
                if (path === '/') this.active = 'beranda';
                else if (path.includes('/layanan'))  this.active = 'layanan';
                else if (path.includes('/okegas'))   this.active = 'okegas';
                else if (path.includes('/berita'))   this.active = 'berita';
                else if (path.includes('/tentang'))  this.active = 'tentang';
                else if (path.includes('/ppid'))     this.active = 'ppid';
                else if (path.includes('/kontak'))   this.active = 'kontak';
            });
        }
    }"
    class="lg:hidden fixed bottom-0 left-0 right-0 z-[100] pb-[env(safe-area-inset-bottom)] overflow-visible"
    style="height: calc(68px + env(safe-area-inset-bottom));"
>
    <style>
        .mnav-bar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: saturate(180%) blur(20px);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            border-top: 1px solid rgba(220, 38, 38, 0.1);
            box-shadow: 0 -10px 40px rgba(0, 0, 0, 0.05);
        }

        /* ── Base Icon Container ── */
        .mnav-icon {
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1),
                        background 0.3s ease,
                        box-shadow 0.3s ease;
        }

        /* ── SVG Internal Transition ── */
        .mnav-icon svg {
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1),
                        color 0.3s ease;
        }

        /* ── Hover State (Desktop Touch) ── */
        @media (hover: hover) {
            .mnav-item:hover .mnav-icon:not(.is-active) {
                transform: translateY(-4px) scale(1.05);
                background: rgba(220, 38, 38, 0.05);
            }
            .mnav-item:hover .mnav-icon:not(.is-active) svg {
                color: #dc2626; /* hover red */
            }
            .mnav-item:hover .mnav-lbl:not(.on-red) {
                color: #dc2626;
            }
        }

        /* ── Click/Press State (Micro-interaction) ── */
        .mnav-item.is-pressed .mnav-icon {
            transform: scale(0.85) !important;
        }
        .mnav-item.is-pressed .mnav-lbl {
            transform: scale(0.95) translateY(2px);
            opacity: 0.7;
        }

        /* ── Active State ── */
        .mnav-icon.is-active {
            background: linear-gradient(135deg, #ef4444 0%, #b91c1c 100%);
            transform: translateY(-13px) scale(1.15);
            box-shadow: 0 10px 25px rgba(220, 38, 38, 0.4);
        }
        .mnav-icon.is-active svg {
            color: #fff !important;
        }

        /* ── OKE GAS FAB ── */
        .mnav-fab {
            background: linear-gradient(135deg, #10b981 0%, #047857 100%);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
            transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1),
                        box-shadow 0.3s ease;
            transform: translateY(-16px);
        }
        .mnav-item:hover .mnav-fab:not(.is-active) {
            transform: translateY(-20px) scale(1.05);
            box-shadow: 0 12px 30px rgba(16, 185, 129, 0.5);
        }
        .mnav-item.is-pressed .mnav-fab {
            transform: translateY(-10px) scale(0.9) !important;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3) !important;
        }
        .mnav-fab.is-active {
            box-shadow: 0 15px 35px rgba(16, 185, 129, 0.6);
            transform: translateY(-24px) scale(1.15);
        }

        /* ── Navigation Item Constraint ── */
        .mnav-item {
            min-width: 0; /* Prevents flex items from overflowing when there are 7 items */
        }

        /* ── Label ── */
        .mnav-lbl {
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            transform-origin: top center;
            /* Adjustments for 7 items tight layout */
            font-size: clamp(6px, 2.2vw, 8px) !important;
            letter-spacing: -0.01em !important;
            display: block;
            width: 100%;
            text-align: center;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .mnav-lbl.on-red   { color: #dc2626; font-weight: 800; transform: translateY(2px); }
        .mnav-lbl.on-green { color: #059669; font-weight: 800; transform: translateY(2px); }

        /* ── Ripple ── */
        @keyframes mnav-pop {
            0%   { transform: scale(0.5); opacity: 0.8; border-width: 4px; }
            50%  { opacity: 1; }
            100% { transform: scale(1.8); opacity: 0; border-width: 0px; }
        }
        .mnav-ripple {
            animation: mnav-pop 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            border: solid rgba(220, 38, 38, 0.6);
            border-radius: 9999px;
            position: absolute; inset: 0;
            pointer-events: none;
        }
        .mnav-ripple-g { border-color: rgba(16, 185, 129, 0.6); }

        /* ── Little Dot Indicator under active label (REMOVED) ── */
    </style>

    <div class="mnav-bar flex items-end justify-around h-[68px] px-1 pb-1.5 relative !overflow-visible">

        <!-- ① Beranda -->
        <a href="{{ url('/') }}" wire:navigate
           @click="active = 'beranda'"
           @touchstart="pressed = 'beranda'" @touchend="pressed = null" @touchcancel="pressed = null"
           @mousedown="pressed = 'beranda'" @mouseup="pressed = null" @mouseleave="pressed = null"
           class="mnav-item flex flex-col items-center flex-1 pt-2 relative select-none cursor-pointer"
           :class="pressed === 'beranda' ? 'is-pressed' : ''"
           aria-label="Beranda">
            <div class="mnav-icon flex items-center justify-center w-9 h-9 rounded-2xl"
                 :class="active === 'beranda' ? 'is-active' : 'text-slate-400 bg-transparent'">
                <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <div x-show="active === 'beranda'" class="mnav-ripple" aria-hidden="true"></div>
            </div>
            <span class="mnav-lbl relative text-[8px] mt-1 uppercase tracking-wider whitespace-nowrap"
                  :class="active === 'beranda' ? 'on-red' : 'text-slate-500 font-semibold'">
                Beranda
            </span>
        </a>

        <!-- ② Layanan -->
        <a href="{{ url('/layanan') }}" wire:navigate
           @click="active = 'layanan'"
           @touchstart="pressed = 'layanan'" @touchend="pressed = null" @touchcancel="pressed = null"
           @mousedown="pressed = 'layanan'" @mouseup="pressed = null" @mouseleave="pressed = null"
           class="mnav-item flex flex-col items-center flex-1 pt-2 relative select-none cursor-pointer"
           :class="pressed === 'layanan' ? 'is-pressed' : ''"
           aria-label="Layanan">
            <div class="mnav-icon flex items-center justify-center w-9 h-9 rounded-2xl"
                 :class="active === 'layanan' ? 'is-active' : 'text-slate-400 bg-transparent'">
                <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                          d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <div x-show="active === 'layanan'" class="mnav-ripple" aria-hidden="true"></div>
            </div>
            <span class="mnav-lbl relative text-[8px] mt-1 uppercase tracking-wider whitespace-nowrap"
                  :class="active === 'layanan' ? 'on-red' : 'text-slate-500 font-semibold'">
                Layanan
            </span>
        </a>

        <!-- ③ Tentang -->
        <a href="{{ url('/tentang/visi-misi') }}" wire:navigate
           @click="active = 'tentang'"
           @touchstart="pressed = 'tentang'" @touchend="pressed = null" @touchcancel="pressed = null"
           @mousedown="pressed = 'tentang'" @mouseup="pressed = null" @mouseleave="pressed = null"
           class="mnav-item flex flex-col items-center flex-1 pt-2 relative select-none cursor-pointer"
           :class="pressed === 'tentang' ? 'is-pressed' : ''"
           aria-label="Tentang Kami">
            <div class="mnav-icon flex items-center justify-center w-9 h-9 rounded-2xl"
                 :class="active === 'tentang' ? 'is-active' : 'text-slate-400 bg-transparent'">
                <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                          d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <div x-show="active === 'tentang'" class="mnav-ripple" aria-hidden="true"></div>
            </div>
            <span class="mnav-lbl relative text-[8px] mt-1 uppercase tracking-wider whitespace-nowrap"
                  :class="active === 'tentang' ? 'on-red' : 'text-slate-500 font-semibold'">
                Tentang
            </span>
        </a>

        <!-- ④ OKE GAS — FAB Center -->
        <a href="{{ url('/okegas') }}" wire:navigate
           @click="active = 'okegas'"
           @touchstart="pressed = 'okegas'" @touchend="pressed = null" @touchcancel="pressed = null"
           @mousedown="pressed = 'okegas'" @mouseup="pressed = null" @mouseleave="pressed = null"
           class="mnav-item flex flex-col items-center flex-1 relative select-none cursor-pointer"
           :class="pressed === 'okegas' ? 'is-pressed' : ''"
           aria-label="OKE GAS">
            <div class="mnav-fab relative flex items-center justify-center w-12 h-12 rounded-full"
                 :class="active === 'okegas' ? 'is-active' : ''">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                          d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                </svg>
                <div x-show="active === 'okegas'" class="mnav-ripple mnav-ripple-g" aria-hidden="true"></div>
            </div>
            <span class="mnav-lbl relative text-[8px] mt-0.5 uppercase tracking-wider whitespace-nowrap"
                  style="margin-top: -10px;"
                  :class="active === 'okegas' ? 'on-green' : 'text-slate-500 font-semibold'">
                OKE GAS
            </span>
        </a>

        <!-- ⑤ Berita -->
        <a href="{{ url('/berita') }}" wire:navigate
           @click="active = 'berita'"
           @touchstart="pressed = 'berita'" @touchend="pressed = null" @touchcancel="pressed = null"
           @mousedown="pressed = 'berita'" @mouseup="pressed = null" @mouseleave="pressed = null"
           class="mnav-item flex flex-col items-center flex-1 pt-2 relative select-none cursor-pointer"
           :class="pressed === 'berita' ? 'is-pressed' : ''"
           aria-label="Berita">
            <div class="mnav-icon flex items-center justify-center w-9 h-9 rounded-2xl"
                 :class="active === 'berita' ? 'is-active' : 'text-slate-400 bg-transparent'">
                <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                          d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
                <div x-show="active === 'berita'" class="mnav-ripple" aria-hidden="true"></div>
            </div>
            <span class="mnav-lbl relative text-[8px] mt-1 uppercase tracking-wider whitespace-nowrap"
                  :class="active === 'berita' ? 'on-red' : 'text-slate-500 font-semibold'">
                Berita
            </span>
        </a>

        <!-- ⑥ Kontak -->
        <a href="{{ url('/kontak') }}" wire:navigate
           @click="active = 'kontak'"
           @touchstart="pressed = 'kontak'" @touchend="pressed = null" @touchcancel="pressed = null"
           @mousedown="pressed = 'kontak'" @mouseup="pressed = null" @mouseleave="pressed = null"
           class="mnav-item flex flex-col items-center flex-1 pt-2 relative select-none cursor-pointer"
           :class="pressed === 'kontak' ? 'is-pressed' : ''"
           aria-label="Kontak">
            <div class="mnav-icon flex items-center justify-center w-9 h-9 rounded-2xl"
                 :class="active === 'kontak' ? 'is-active' : 'text-slate-400 bg-transparent'">
                <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <div x-show="active === 'kontak'" class="mnav-ripple" aria-hidden="true"></div>
            </div>
            <span class="mnav-lbl relative text-[8px] mt-1 uppercase tracking-wider whitespace-nowrap"
                  :class="active === 'kontak' ? 'on-red' : 'text-slate-500 font-semibold'">
                Kontak
            </span>
        </a>

        <!-- ⑦ PPID -->
        <a href="https://ppid.kukarkab.go.id/opd/78" target="_blank" rel="noopener noreferrer"
           @click="active = 'ppid'"
           @touchstart="pressed = 'ppid'" @touchend="pressed = null" @touchcancel="pressed = null"
           @mousedown="pressed = 'ppid'" @mouseup="pressed = null" @mouseleave="pressed = null"
           class="mnav-item flex flex-col items-center flex-1 pt-2 relative select-none cursor-pointer"
           :class="pressed === 'ppid' ? 'is-pressed' : ''"
           aria-label="PPID">
            <div class="mnav-icon flex items-center justify-center w-9 h-9 rounded-2xl"
                 :class="active === 'ppid' ? 'is-active' : 'text-slate-400 bg-transparent'">
                <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <div x-show="active === 'ppid'" class="mnav-ripple" aria-hidden="true"></div>
            </div>
            <span class="mnav-lbl relative text-[8px] mt-1 uppercase tracking-wider whitespace-nowrap"
                  :class="active === 'ppid' ? 'on-red' : 'text-slate-500 font-semibold'">
                PPID
            </span>
        </a>

    </div>
</div>

<!-- Bottom Spacer -->
<div class="lg:hidden" style="height: calc(68px + env(safe-area-inset-bottom));"></div>
