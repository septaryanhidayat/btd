<!DOCTYPE html>
<html lang="id" class="scroll-smooth theme-light light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'CV. Beranda Teknologi Digital - Startup Software House, Mobile App & AI')</title>
    <meta name="description" content="@yield('meta_description', 'CV. Beranda Teknologi Digital adalah startup agensi teknologi modern di Indonesia. Jasa pembuatan website, aplikasi Android/iOS, solusi AI, dan workshop IT.')">
    <meta name="keywords" content="software house palembang, jasa pembuatan website, aplikasi mobile flutter, ai rag document, cv beranda teknologi digital, jasa web murah berkualitas, pelatihan it komdigi">
    <meta name="author" content="CV. Beranda Teknologi Digital">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon & App Icons (Dynamic from Settings) -->
    <link rel="icon" type="image/png" href="{{ asset($settings['site_favicon'] ?? 'favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset($settings['site_favicon'] ?? 'apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset($settings['site_favicon'] ?? 'favicon.png') }}">

    <!-- OpenGraph (OG) Meta Tags for WhatsApp, Facebook, LinkedIn, Telegram -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', ($settings['site_title'] ?? 'CV. Beranda Teknologi Digital') . ' - Software House, Mobile App & Solusi AI')">
    <meta property="og:description" content="@yield('meta_description', $settings['site_description'] ?? 'CV. Beranda Teknologi Digital adalah agensi teknologi digital modern di Indonesia. Jasa pembuatan website, aplikasi Android/iOS, solusi AI privat, dan workshop IT profesional.')">
    <meta property="og:image" content="{{ asset($settings['og_image'] ?? $settings['site_logo'] ?? 'images/Logo-BTD.png') }}">
    <meta property="og:image:secure_url" content="{{ asset($settings['og_image'] ?? $settings['site_logo'] ?? 'images/Logo-BTD.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $settings['site_title'] ?? 'CV. Beranda Teknologi Digital' }}">
    <meta property="og:site_name" content="{{ $settings['site_title'] ?? 'CV. Beranda Teknologi Digital' }}">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', ($settings['site_title'] ?? 'CV. Beranda Teknologi Digital') . ' - Software House & Solusi AI')">
    <meta name="twitter:description" content="@yield('meta_description', $settings['site_description'] ?? 'Jasa pembuatan website enterprise, aplikasi mobile Flutter, sistem informasi, solusi AI privat, dan pelatihan IT.')">
    <meta name="twitter:image" content="{{ asset($settings['og_image'] ?? $settings['site_logo'] ?? 'images/Logo-BTD.png') }}">

    <!-- Schema.org JSON-LD Structured Data for Google Rich Snippets -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "ProfessionalService",
      "name": "CV. Beranda Teknologi Digital",
      "image": "{{ asset('images/Logo-BTD.png') }}",
      "@id": "https://berandadigital.net",
      "url": "https://berandadigital.net",
      "telephone": "+6289695249089",
      "priceRange": "Rp 3.000.000 - Rp 10.000.000",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Ogan Ilir & Palembang Hub",
        "addressLocality": "Ogan Ilir",
        "addressRegion": "Sumatera Selatan",
        "postalCode": "30662",
        "addressCountry": "ID"
      },
      "geo": {
        "@@type": "GeoCoordinates",
        "latitude": -3.2458,
        "longitude": 104.6644
      },
      "openingHoursSpecification": {
        "@@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday"
        ],
        "opens": "08:00",
        "closes": "17:00"
      },
      "sameAs": [
        "https://www.instagram.com/bteknologi_digital",
        "https://linkedin.com/company/berandadigital",
        "https://github.com/septaryanhidayat/btd"
      ]
    }
    </script>

    <!-- Google Fonts: Poppins, Inter & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    @php
        try {
            $sitePrimaryColor = \App\Models\Setting::where('key', 'theme_primary_color')->value('value') ?? '#3E5CE7';
            $siteAccentColor = \App\Models\Setting::where('key', 'theme_accent_color')->value('value') ?? '#fe6000';
        } catch (\Throwable $e) {
            $sitePrimaryColor = '#3E5CE7';
            $siteAccentColor = '#fe6000';
        }
    @endphp

    <style>
        :root {
            --e-global-color-primary: {{ $sitePrimaryColor }};
            --e-global-color-accent: {{ $siteAccentColor }};
            --accent: {{ $siteAccentColor }};
        }
        body, button, input, select, textarea {
            font-family: 'Poppins', 'Inter', sans-serif !important;
        }
        .bg-flymotion-hero {
            background: radial-gradient(ellipse at 85% 20%, #e0e9ff 0%, #fff1eb 30%, #f0f4ff 60%, #ffffff 100%) !important;
        }
        .bg-flymotion-soft {
            background: #f4f7fe !important;
        }

        /* ═══════════════════════ COMPLETE HIGH-CONTRAST DARK THEME ═══════════════════════ */
        html.dark, html.theme-dark {
            color-scheme: dark;
            background-color: #060B17 !important;
        }
        html.dark body, html.theme-dark body {
            background-color: #060B17 !important;
            color: #F8FAFC !important;
        }
        html.dark .bg-flymotion-hero, html.theme-dark .bg-flymotion-hero {
            background: radial-gradient(ellipse at 85% 20%, #0d1e48 0%, #070e24 45%, #040817 100%) !important;
        }
        html.dark .bg-flymotion-soft, html.theme-dark .bg-flymotion-soft {
            background: #080f24 !important;
        }
        html.dark .bg-white, html.theme-dark .bg-white {
            background-color: #0f172a !important;
            border-color: rgba(255, 255, 255, 0.1) !important;
        }
        html.dark .bg-[#f8faff], html.theme-dark .bg-[#f8faff] {
            background-color: #080f24 !important;
        }
        html.dark .text-[#07153f], html.theme-dark .text-[#07153f] {
            color: #f8fafc !important;
        }
        html.dark .text-[#4a4a4a], html.theme-dark .text-[#4a4a4a] {
            color: #cbd5e1 !important;
        }
        html.dark .text-[#64748b], html.theme-dark .text-[#64748b] {
            color: #94a3b8 !important;
        }
        html.dark .border-slate-100, html.dark .border-slate-200,
        html.theme-dark .border-slate-100, html.theme-dark .border-slate-200 {
            border-color: rgba(255, 255, 255, 0.1) !important;
        }
        /* ═══════════════════════ THEME LOGO SWITCHER ═══════════════════════ */
        html.dark .logo-dark-mode, html.theme-dark .logo-dark-mode {
            display: block !important;
        }
        html.dark .logo-light-mode, html.theme-dark .logo-light-mode {
            display: none !important;
        }
        html:not(.dark):not(.theme-dark) .logo-dark-mode {
            display: none !important;
        }
        html:not(.dark):not(.theme-dark) .logo-light-mode {
            display: block !important;
        }

        /* ═══════════════════════ SCROLL FADE-UP ANIMATIONS (SmartNews Standard) ═══════════════════════ */
        .fade-up-init, .fade-up, .reveal-on-scroll {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.65s cubic-bezier(0.16, 1, 0.3, 1), transform 0.65s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }
        .fade-up-init.fade-up-in, .fade-up.in-view, .reveal-on-scroll.in-view {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
        .delay-75  { transition-delay: 0.075s; }
        .delay-100 { transition-delay: 0.1s; }
        .delay-150 { transition-delay: 0.15s; }
        .delay-200 { transition-delay: 0.2s; }
        .delay-250 { transition-delay: 0.25s; }
        .delay-300 { transition-delay: 0.3s; }
        .delay-350 { transition-delay: 0.35s; }
        .delay-400 { transition-delay: 0.4s; }
        .delay-500 { transition-delay: 0.5s; }

        @media (prefers-reduced-motion: reduce) {
            .fade-up-init, .fade-up, .reveal-on-scroll {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }

        @keyframes logo-object {
            0%, 100% { transform: translateY(-10px); }
            50% { transform: translateY(10px); }
        }
        @keyframes logo-object-top {
            0%, 100% { transform: translateX(-8px) translateY(-5px); }
            50% { transform: translateX(8px) translateY(5px); }
        }
        @keyframes logo-object-bottom {
            0%, 100% { transform: translateX(-6px) rotate(-3deg); }
            50% { transform: translateX(6px) rotate(3deg); }
        }
        @keyframes shape-rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        /* Universal Image & Layout Fail-safe Constraints */
        *, ::before, ::after {
            box-sizing: border-box;
        }
        img, svg, video {
            display: block;
            max-width: 100%;
            height: auto;
        }
        img.h-16, img.h-18, img.h-20, img.h-22, img.h-26 {
            max-height: 5rem !important;
            width: auto !important;
            object-fit: contain !important;
        }
        .anim-logo-object {
            animation: logo-object 4s ease-in-out infinite !important;
        }
        .anim-logo-top {
            animation: logo-object-top 5s ease-in-out infinite !important;
        }
        .anim-logo-bottom {
            animation: logo-object-bottom 6s ease-in-out infinite !important;
        }
        .anim-shape-rotate {
            animation: shape-rotate 25s linear infinite !important;
        }
    </style>

    <!-- Production Compiled Stylesheet & Vite Assets -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-B9ThRUf5.css') }}">
    <link rel="stylesheet" href="/build/assets/app-B9ThRUf5.css">
    
    <!-- Tailwind Play CDN Fallback with Custom Palette & Typography -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            blue: '#3E5CE7',
                            orange: '#fe6000',
                            navy: '#07153f',
                            pink: '#E83E8C',
                            teal: '#20C997'
                        }
                    },
                    fontFamily: {
                        sans: ['Poppins', 'Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace']
                    }
                }
            }
        }
    </script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(base_path('public/build/manifest.json')) || file_exists(base_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        // High-Contrast Theme Script with persistence (SmartFeed Light/Dark System)
        (function() {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.documentElement.classList.add('theme-dark', 'dark');
                document.documentElement.classList.remove('theme-light', 'light');
            } else {
                document.documentElement.classList.remove('theme-dark', 'dark');
                document.documentElement.classList.add('theme-light', 'light');
                localStorage.setItem('theme', 'light');
            }
        })();
    </script>
</head>
<body class="min-h-screen flex flex-col antialiased selection:bg-blue-600 selection:text-white transition-colors duration-300 relative">

    <!-- Top Announcement Live Bar (Slim & Sleek on Mobile) -->
    <div class="bg-slate-950 text-white text-[11px] sm:text-xs py-1.5 px-3 sm:px-4 border-b border-slate-800/80 flex items-center justify-between z-50">
        <div class="max-w-7xl mx-auto w-full flex items-center justify-between">
            <div class="flex items-center gap-2 sm:gap-3">
                <span class="chip chip-attention text-[10px] py-0.5 px-2 font-bold tracking-wider">
                    STARTUP TECH 2026
                </span>
                <span class="hidden sm:inline text-slate-300 font-medium text-xs">CV. Beranda Teknologi Digital &bull; Software House, Mobile App & Solusi AI</span>
                <span class="inline sm:hidden text-slate-300 font-medium text-[11px] truncate">Software House & Solusi AI</span>
            </div>
            <div class="flex items-center gap-3 text-[11px] sm:text-xs font-bold shrink-0">
                <a href="https://wa.me/6289695249089" target="_blank" class="text-amber-300 hover:text-amber-200 flex items-center gap-1.5 mono">
                    <span>💬 <span class="hidden xs:inline">WhatsApp:</span> 0896 9524 9089</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Floating Glassmorphic Header Navigation Bar -->
    <header x-data="{ open: false, scrolled: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 20)"
            :class="scrolled ? 'backdrop-blur-xl shadow-lg py-2 sm:py-2.5' : 'backdrop-blur-md py-2.5 sm:py-3.5'"
            class="sticky top-0 inset-x-0 z-50 transition-all duration-300 border-b"
            style="background-color: var(--bg-panel); border-color: var(--border); opacity: 0.98;">
        <div class="max-w-7xl mx-auto px-3.5 sm:px-6 lg:px-8 flex items-center justify-between">
            
            <!-- Official Brand Logo (Light & Pure White Dark Mode) -->
            <a href="{{ route('home') }}" class="flex items-center py-0.5 group focus:outline-none shrink-0">
                <img src="{{ asset('images/Logo-BTD.png') }}" alt="CV. Beranda Teknologi Digital" class="logo-light-mode block dark:hidden h-10 sm:h-12 md:h-14 lg:h-16 w-auto max-w-[200px] sm:max-w-xs md:max-w-none object-contain hover:scale-105 transition-transform drop-shadow-xs" />
                <img src="{{ asset('images/Logo-BTD-white.png') }}" alt="CV. Beranda Teknologi Digital" class="logo-dark-mode hidden dark:block h-10 sm:h-12 md:h-14 lg:h-16 w-auto max-w-[200px] sm:max-w-xs md:max-w-none object-contain hover:scale-105 transition-transform drop-shadow-md" />
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-1 surface rounded-full px-3 py-1.5 shadow-xs">
                <a href="{{ route('home') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('home') ? 'btn-primary text-white shadow-md' : 'hover:text-blue-600' }}" style="color: {{ request()->routeIs('home') ? '#fff' : 'var(--text-muted)' }};">Beranda</a>
                <a href="{{ route('services') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('services') ? 'btn-primary text-white shadow-md' : 'hover:text-blue-600' }}" style="color: {{ request()->routeIs('services') ? '#fff' : 'var(--text-muted)' }};">Layanan</a>
                <a href="{{ route('projects.index') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('projects.*') ? 'btn-primary text-white shadow-md' : 'hover:text-blue-600' }}" style="color: {{ request()->routeIs('projects.*') ? '#fff' : 'var(--text-muted)' }};">Portofolio</a>
                <a href="{{ route('products.index') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('products.*') ? 'btn-primary text-white shadow-md' : 'hover:text-blue-600' }}" style="color: {{ request()->routeIs('products.*') ? '#fff' : 'var(--text-muted)' }};">Produk Digital</a>
                <a href="{{ route('trainer.index') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('trainer.index') ? 'btn-primary text-white shadow-md' : 'hover:text-blue-600' }}" style="color: {{ request()->routeIs('trainer.index') ? '#fff' : 'var(--text-muted)' }};">Trainer & Galeri</a>
                <a href="{{ route('blog.index') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('blog.*') ? 'btn-primary text-white shadow-md' : 'hover:text-blue-600' }}" style="color: {{ request()->routeIs('blog.*') ? '#fff' : 'var(--text-muted)' }};">Informasi</a>
            </nav>

            <!-- Right Controls: Theme Switcher & Contact Button -->
            <div class="hidden md:flex items-center gap-3">
                <button onclick="toggleTheme()" 
                        type="button" 
                        title="Beralih Mode Tampilan"
                        class="w-10 h-10 rounded-full surface flex items-center justify-center hover:scale-105 transition-all shadow-xs"
                        style="color: var(--text);">
                    <svg class="w-5 h-5 hidden dark:block text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg class="w-5 h-5 block dark:hidden text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <a href="{{ route('contact') }}" class="px-5 py-2.5 rounded-md bg-[#fe6000] hover:bg-[#e05400] text-white font-bold text-xs uppercase tracking-wider shadow-md hover:shadow-orange-500/30 transition-all flex items-center gap-2">
                    <span>Mulai Proyek</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>

            <!-- Mobile Controls (Well-spaced, No Button Clashes) -->
            <div class="flex items-center gap-1.5 sm:gap-2 md:hidden">
                <button onclick="toggleTheme()" 
                        type="button" 
                        aria-label="Mode Tema"
                        class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl surface flex items-center justify-center hover:scale-105 active:scale-95 transition-all shadow-xs shrink-0" 
                        style="color: var(--text);">
                    <svg class="w-4 h-4 hidden dark:block text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg class="w-4 h-4 block dark:hidden text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
                <button @click="open = !open" 
                        type="button" 
                        aria-label="Navigasi Menu"
                        class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl surface flex items-center justify-center hover:scale-105 active:scale-95 transition-all shadow-xs shrink-0" 
                        style="color: var(--text);">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="md:hidden border-b py-3 px-4 sm:px-6 space-y-2 shadow-2xl backdrop-blur-2xl" 
             style="background: var(--bg-panel); border-color: var(--border);">
            <div class="grid grid-cols-1 gap-1">
                <a href="{{ route('home') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-600 dark:bg-blue-950/50 dark:text-blue-400' : 'hover:bg-slate-100 dark:hover:bg-slate-800/60' }}" style="color: {{ request()->routeIs('home') ? '' : 'var(--text)' }};">
                    <span class="flex items-center gap-2.5">
                        <span>🏠</span>
                        <span>Beranda</span>
                    </span>
                    @if(request()->routeIs('home'))
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400"></span>
                    @endif
                </a>
                <a href="{{ route('services') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('services') ? 'bg-blue-50 text-blue-600 dark:bg-blue-950/50 dark:text-blue-400' : 'hover:bg-slate-100 dark:hover:bg-slate-800/60' }}" style="color: {{ request()->routeIs('services') ? '' : 'var(--text)' }};">
                    <span class="flex items-center gap-2.5">
                        <span>⚙️</span>
                        <span>Layanan</span>
                    </span>
                    @if(request()->routeIs('services'))
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400"></span>
                    @endif
                </a>
                <a href="{{ route('projects.index') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('projects.*') ? 'bg-blue-50 text-blue-600 dark:bg-blue-950/50 dark:text-blue-400' : 'hover:bg-slate-100 dark:hover:bg-slate-800/60' }}" style="color: {{ request()->routeIs('projects.*') ? '' : 'var(--text)' }};">
                    <span class="flex items-center gap-2.5">
                        <span>💼</span>
                        <span>Portofolio</span>
                    </span>
                    @if(request()->routeIs('projects.*'))
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400"></span>
                    @endif
                </a>
                <a href="{{ route('products.index') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('products.*') ? 'bg-blue-50 text-blue-600 dark:bg-blue-950/50 dark:text-blue-400' : 'hover:bg-slate-100 dark:hover:bg-slate-800/60' }}" style="color: {{ request()->routeIs('products.*') ? '' : 'var(--text)' }};">
                    <span class="flex items-center gap-2.5">
                        <span>🛍️</span>
                        <span>Produk Digital</span>
                    </span>
                    @if(request()->routeIs('products.*'))
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400"></span>
                    @endif
                </a>
                <a href="{{ route('trainer.index') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('trainer.index') ? 'bg-blue-50 text-blue-600 dark:bg-blue-950/50 dark:text-blue-400' : 'hover:bg-slate-100 dark:hover:bg-slate-800/60' }}" style="color: {{ request()->routeIs('trainer.index') ? '' : 'var(--text)' }};">
                    <span class="flex items-center gap-2.5">
                        <span>🎓</span>
                        <span>Trainer & Galeri</span>
                    </span>
                    @if(request()->routeIs('trainer.index'))
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400"></span>
                    @endif
                </a>
                <a href="{{ route('blog.index') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('blog.*') ? 'bg-blue-50 text-blue-600 dark:bg-blue-950/50 dark:text-blue-400' : 'hover:bg-slate-100 dark:hover:bg-slate-800/60' }}" style="color: {{ request()->routeIs('blog.*') ? '' : 'var(--text)' }};">
                    <span class="flex items-center gap-2.5">
                        <span>📰</span>
                        <span>Informasi</span>
                    </span>
                    @if(request()->routeIs('blog.*'))
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 dark:bg-blue-400"></span>
                    @endif
                </a>
            </div>
            <div class="pt-2 border-t" style="border-color: var(--border);">
                <a href="{{ route('contact') }}" class="flex items-center justify-center gap-2 w-full text-center px-4 py-3 rounded-xl bg-gradient-to-r from-[#fe6000] to-[#ff7a29] text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-orange-500/25 active:scale-98 transition-all">
                    <span>🚀 Konsultasi & Estimasi Biaya</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @if(session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 6000)" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="p-4 rounded-2xl flex items-center justify-between shadow-sm surface" style="background-color: var(--accent-soft); border-color: var(--accent);">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-xs font-extrabold" style="color: var(--text);">{{ session('success') }}</span>
                    </div>
                    <button @click="show = false" class="font-extrabold" style="color: var(--text);">✕</button>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Permanent Professional Responsive Footer (Centered on Mobile, Multi-Column on Desktop) -->
    <footer class="border-t pt-14 pb-10 transition-colors duration-300" style="background-color: var(--bg-deep); border-color: var(--border);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-10 pb-10 border-b text-center md:text-left" style="border-color: var(--border);">
                
                <!-- Column 1: Brand Info (2 columns on lg) -->
                <div class="lg:col-span-2 space-y-4 flex flex-col items-center md:items-start">
                    <a href="{{ route('home') }}" class="inline-block py-1 group">
                        <img src="{{ asset('images/Logo-BTD.png') }}" alt="CV. Beranda Teknologi Digital" class="logo-light-mode block dark:hidden h-12 sm:h-14 md:h-16 w-auto object-contain mx-auto md:mx-0 drop-shadow-xs hover:scale-105 transition-transform" />
                        <img src="{{ asset('images/Logo-BTD-white.png') }}" alt="CV. Beranda Teknologi Digital" class="logo-dark-mode hidden dark:block h-12 sm:h-14 md:h-16 w-auto object-contain mx-auto md:mx-0 drop-shadow-md hover:scale-105 transition-transform" />
                    </a>
                    <p class="text-xs sm:text-sm leading-relaxed max-w-sm font-medium" style="color: var(--text-muted);">
                        <strong style="color: var(--text);">CV. Beranda Teknologi Digital</strong> &bull; Digital Agency & Software House terpercaya penyedia solusi Website Enterprise, Mobile Apps (Android/iOS), Sistem Informasi Instansi, Virtual Reality, dan IT Training.
                    </p>
                    
                    <!-- Legalitas Singkat Badan Usaha -->
                    <div class="p-3 rounded-xl bg-slate-50 dark:bg-slate-800/80 border border-slate-200/80 dark:border-slate-700/80 text-[11px] space-y-1 w-full max-w-sm text-left">
                        <div class="font-bold text-[#07153f] dark:text-white flex items-center gap-1.5">
                            <span>🏛️</span> <span>Badan Usaha Resmi Berbadan Hukum</span>
                        </div>
                        <div class="text-slate-600 dark:text-slate-300">
                            <strong>SK Kemenkumham:</strong> AHU-0003819-AH.01.14 Th 2022
                        </div>
                        <div class="text-slate-600 dark:text-slate-300">
                            <strong>NPWP:</strong> 63.100.018.9-312.000
                        </div>
                        <div class="pt-1">
                            <span class="inline-flex items-center gap-1 text-emerald-600 dark:text-emerald-400 font-bold">
                                <span>✓ Terdaftar di E-Katalog LKPP RI</span>
                            </span>
                        </div>
                    </div>

                    <div class="pt-1 space-y-1.5 text-xs font-semibold" style="color: var(--text-muted);">
                        <a href="https://wa.me/6289695249089" target="_blank" class="flex items-center justify-center md:justify-start gap-2 hover:text-emerald-500 transition-colors">
                            <span class="text-emerald-500 font-bold">💬 WhatsApp:</span>
                            <span class="mono font-bold" style="color: var(--text);">0896 9524 9089</span>
                        </a>
                        <a href="mailto:{{ $siteSettings['contact_email'] ?? 'info@berandadigital.net' }}" class="flex items-center justify-center md:justify-start gap-2 hover:text-blue-500 transition-colors">
                            <span class="text-blue-500 font-bold">✉️ Email:</span>
                            <span class="font-bold" style="color: var(--text);">{{ $siteSettings['contact_email'] ?? 'info@berandadigital.net' }}</span>
                        </a>
                        <div class="flex items-start justify-center md:justify-start gap-2 text-left" style="color: var(--text-dim);">
                            <span class="shrink-0 mt-0.5">📍</span>
                            <span>{{ $siteSettings['contact_address'] ?? 'Jl. Sarjana Kel. Timbangan Blok A No. 15, Indralaya Utara, Ogan Ilir, Sumatera Selatan' }}</span>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Layanan Utama -->
                <div class="space-y-3 flex flex-col items-center md:items-start">
                    <h4 class="font-extrabold text-xs tracking-wider uppercase mono text-[#3E5CE7] dark:text-blue-400">Layanan Utama</h4>
                    <ul class="space-y-2 text-xs font-semibold" style="color: var(--text-muted);">
                        <li><a href="{{ route('services') }}" class="hover:text-[#3E5CE7] transition-colors">Web App Enterprise & Portal</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-[#3E5CE7] transition-colors">Mobile App Android & iOS (Flutter)</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-[#3E5CE7] transition-colors">Custom AI Chatbot & RAG Engine</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-[#3E5CE7] transition-colors">Website Sekolah & Digital Desa</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-[#3E5CE7] transition-colors">Maintenance Server & SSL</a></li>
                    </ul>
                </div>

                <!-- Column 3: Navigasi Cepat -->
                <div class="space-y-3 flex flex-col items-center md:items-start">
                    <h4 class="font-extrabold text-xs tracking-wider uppercase mono text-[#3E5CE7] dark:text-blue-400">Navigasi</h4>
                    <ul class="space-y-2 text-xs font-semibold" style="color: var(--text-muted);">
                        <li><a href="{{ route('home') }}" class="hover:text-[#3E5CE7] transition-colors">Beranda</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-[#3E5CE7] transition-colors">Layanan</a></li>
                        <li><a href="{{ route('projects.index') }}" class="hover:text-[#3E5CE7] transition-colors">Portofolio Proyek</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-[#3E5CE7] transition-colors">Produk Digital</a></li>
                        <li><a href="{{ route('trainer.index') }}" class="hover:text-[#3E5CE7] transition-colors">Trainer & Galeri</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-[#3E5CE7] transition-colors">Informasi & Berita</a></li>
                    </ul>
                </div>

                <!-- Column 4: Konsultasi & Estimasi -->
                <div class="space-y-3 flex flex-col items-center md:items-start">
                    <h4 class="font-extrabold text-xs tracking-wider uppercase mono text-[#fe6000]">Konsultasi Cepat</h4>
                    <p class="text-xs leading-relaxed" style="color: var(--text-muted);">
                        Diskusikan kebutuhan sistem Anda langsung dengan tim developer kami.
                    </p>
                    <a href="https://wa.me/6289695249089" target="_blank" 
                       style="background-color: #fe6000 !important; color: #ffffff !important;"
                       class="w-full text-center px-4 py-2.5 rounded-xl font-black text-xs uppercase tracking-wider shadow-md hover:scale-105 transition-all inline-block">
                        <span style="color: #ffffff !important;">Chat WhatsApp &rarr;</span>
                    </a>
                    <a href="{{ route('contact') }}" class="w-full text-center px-4 py-2.5 rounded-xl surface hover:border-[#3E5CE7] text-xs font-bold transition-all inline-block" style="color: var(--text);">
                        Kalkulator Biaya
                    </a>
                </div>

            </div>

            <!-- Bottom Copyright (Clean & Linked to Website) -->
            <div class="pt-6 text-center text-xs font-medium" style="color: var(--text-dim);">
                <p>&copy; {{ date('Y') }} <a href="{{ route('home') }}" class="font-bold hover:underline" style="color: var(--text);">Beranda Teknologi Digital</a>. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Fixed Floating Action Group (Scroll to Top + WA Direct Chat) -->
    <div x-data="{ showTop: false }" 
         @scroll.window="showTop = (window.pageYOffset > 300)" 
         class="fixed bottom-5 right-4 sm:bottom-6 sm:right-6 z-50 flex flex-col items-center gap-2.5">
        
        <!-- Back to Top Button -->
        <button x-show="showTop" 
                x-transition 
                @click="window.scrollTo({ top: 0, behavior: 'smooth' })" 
                type="button" 
                aria-label="Kembali ke atas"
                class="w-10 h-10 sm:w-11 sm:h-11 rounded-full surface flex items-center justify-center hover:scale-110 active:scale-95 transition-all shadow-xl"
                style="color: var(--text);">
            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>

        <!-- Floating WhatsApp Launcher Button (Icon Only Circle) -->
        <a href="https://wa.me/6289695249089?text=Halo%20CV.%20Beranda%20Teknologi%20Digital,%20saya%20ingin%20konsultasi%20pembuatan%20sistem" 
           target="_blank" 
           aria-label="Chat WhatsApp Resmi"
           title="Chat WhatsApp: 0896 9524 9089"
           class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-[#25D366] hover:bg-[#20bd5a] text-white flex items-center justify-center shadow-2xl shadow-emerald-500/50 hover:scale-110 active:scale-95 transition-all">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
            </svg>
        </a>
    </div>

    <script>
        function toggleTheme() {
            const isDark = document.documentElement.classList.contains('theme-dark') || document.documentElement.classList.contains('dark');
            if (isDark) {
                document.documentElement.classList.remove('theme-dark', 'dark');
                document.documentElement.classList.add('theme-light', 'light');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.remove('theme-light', 'light');
                document.documentElement.classList.add('theme-dark', 'dark');
                localStorage.setItem('theme', 'dark');
            }
        }

        /* SmartNews Standard Scroll Fade-Up Intersection Observer */
        document.addEventListener('DOMContentLoaded', () => {
            const animTargets = document.querySelectorAll(
                'section, .fade-up-target, .reveal-on-scroll, .fade-up, .bento-card, .service-card, .article-card, .gallery-item, .tech-card'
            );

            if ('IntersectionObserver' in window) {
                const fadeUpObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('fade-up-in', 'in-view');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    root: null,
                    threshold: 0.08,
                    rootMargin: '0px 0px -30px 0px'
                });

                animTargets.forEach(el => {
                    el.classList.add('fade-up-init');
                    fadeUpObserver.observe(el);
                });
            } else {
                animTargets.forEach(el => el.classList.add('fade-up-in', 'in-view'));
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
