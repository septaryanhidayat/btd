<!DOCTYPE html>
<html lang="id" class="scroll-smooth theme-light light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'CV. Beranda Teknologi Digital - Startup Software House, Mobile App & AI')</title>
    <meta name="description" content="@yield('meta_description', 'CV. Beranda Teknologi Digital adalah startup agensi teknologi modern di Indonesia. Jasa pembuatan website, aplikasi Android/iOS, solusi AI, dan workshop IT.')">
    <meta name="keywords" content="software house palembang, jasa pembuatan website, aplikasi mobile flutter, ai rag document, cv beranda teknologi digital, jasa web murah berkualitas, pelatihan it komdigi">
    <meta name="author" content="CV. Beranda Teknologi Digital - Septa Ryan Hidayat, S.Kom">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon & App Icons -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- OpenGraph (OG) Meta Tags for WhatsApp, Facebook, LinkedIn, Telegram -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'CV. Beranda Teknologi Digital - Software House, Mobile App & Solusi AI')">
    <meta property="og:description" content="@yield('meta_description', 'CV. Beranda Teknologi Digital adalah agensi teknologi digital modern di Indonesia. Jasa pembuatan website, aplikasi Android/iOS, solusi AI privat, dan workshop IT profesional.')">
    <meta property="og:image" content="{{ asset('images/Logo-BTD.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('images/Logo-BTD.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Logo Resmi CV. Beranda Teknologi Digital">
    <meta property="og:site_name" content="CV. Beranda Teknologi Digital">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'CV. Beranda Teknologi Digital - Software House & Solusi AI')">
    <meta name="twitter:description" content="@yield('meta_description', 'Jasa pembuatan website enterprise, aplikasi mobile Flutter, sistem informasi, solusi AI privat, dan pelatihan IT.')">
    <meta name="twitter:image" content="{{ asset('images/Logo-BTD.png') }}">

    <!-- Schema.org JSON-LD Structured Data for Google Rich Snippets -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "CV. Beranda Teknologi Digital",
      "image": "{{ asset('images/Logo-BTD.png') }}",
      "@id": "https://berandadigital.net",
      "url": "https://berandadigital.net",
      "telephone": "+6289695249089",
      "priceRange": "Rp 3.000.000 - Rp 10.000.000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Ogan Ilir & Palembang Hub",
        "addressLocality": "Ogan Ilir",
        "addressRegion": "Sumatera Selatan",
        "postalCode": "30662",
        "addressCountry": "ID"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -3.2458,
        "longitude": 104.6644
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
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
        $sitePrimaryColor = \App\Models\Setting::where('key', 'theme_primary_color')->value('value') ?? '#3E5CE7';
        $siteAccentColor = \App\Models\Setting::where('key', 'theme_accent_color')->value('value') ?? '#fe6000';
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

    <!-- Vite Assets & Tailwind -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
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

    <!-- Top Announcement Live Bar (SmartFeed Styled) -->
    <div class="bg-slate-900 text-white text-xs py-2 px-4 border-b border-slate-800 flex items-center justify-between z-50">
        <div class="max-w-7xl mx-auto w-full flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="chip chip-attention">
                    STARTUP TECH 2026
                </span>
                <span class="hidden sm:inline text-slate-300 font-medium text-xs">CV. Beranda Teknologi Digital &bull; Software House, Mobile App & Solusi AI</span>
            </div>
            <div class="flex items-center gap-4 text-xs font-bold">
                <a href="https://wa.me/6289695249089" target="_blank" class="text-amber-300 hover:text-amber-200 flex items-center gap-1.5 mono">
                    <span>💬 WhatsApp: 0896 9524 9089</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Floating Glassmorphic Header Navigation Bar -->
    <header x-data="{ open: false, scrolled: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 20)"
            :class="scrolled ? 'backdrop-blur-xl shadow-lg py-3' : 'backdrop-blur-md py-4'"
            class="sticky top-0 inset-x-0 z-50 transition-all duration-300 border-b"
            style="background-color: var(--bg-panel); border-color: var(--border); opacity: 0.95;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            
            <!-- Official Brand Logo (Large & Clear) -->
            <a href="{{ route('home') }}" class="flex items-center py-1 group">
                <img src="/images/Logo-BTD.png" alt="CV. Beranda Teknologi Digital" class="h-16 sm:h-20 md:h-22 w-auto object-contain hover:scale-105 transition-transform drop-shadow-xs" />
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

            <!-- Mobile Controls -->
            <div class="flex items-center gap-2 md:hidden">
                <button onclick="toggleTheme()" type="button" class="p-2 rounded-xl surface" style="color: var(--text);">
                    <svg class="w-5 h-5 hidden dark:block text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg class="w-5 h-5 block dark:hidden text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
                <button @click="open = !open" type="button" class="p-2 rounded-xl surface" style="color: var(--text);">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="open" x-transition class="md:hidden border-b py-4 px-6 space-y-3 shadow-xl" style="background: var(--bg-panel); border-color: var(--border);">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-xl text-sm font-extrabold" style="color: var(--text);">Beranda</a>
            <a href="{{ route('services') }}" class="block px-3 py-2 rounded-xl text-sm font-extrabold" style="color: var(--text);">Layanan</a>
            <a href="{{ route('projects.index') }}" class="block px-3 py-2 rounded-xl text-sm font-extrabold" style="color: var(--text);">Portofolio</a>
            <a href="{{ route('products.index') }}" class="block px-3 py-2 rounded-xl text-sm font-extrabold" style="color: var(--text);">Produk Digital</a>
            <a href="{{ route('trainer.index') }}" class="block px-3 py-2 rounded-xl text-sm font-extrabold" style="color: var(--text);">Trainer & Galeri</a>
            <a href="{{ route('blog.index') }}" class="block px-3 py-2 rounded-xl text-sm font-extrabold" style="color: var(--text);">Informasi</a>
            <a href="{{ route('contact') }}" class="block w-full text-center px-4 py-3 rounded-2xl btn-cta mt-4">Kalkulator Estimasi Biaya</a>
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

    <!-- Permanent High-Contrast Dark Footer (SmartFeed Styled) -->
    <footer class="border-t pt-16 pb-12 transition-colors duration-300" style="background-color: var(--bg-deep); border-color: var(--border);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b" style="border-color: var(--border);">
                <!-- Column 1: Brand Info (Large Logo) -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="{{ route('home') }}" class="inline-block py-1">
                        <img src="/images/Logo-BTD.png" alt="CV. Beranda Teknologi Digital" class="h-18 sm:h-22 md:h-26 w-auto object-contain drop-shadow-xs" />
                    </a>
                    <p class="text-xs sm:text-sm leading-relaxed max-w-sm font-medium" style="color: var(--text-muted);">
                        <strong style="color: var(--text);">CV. Beranda Teknologi Digital</strong> &bull; Mitra transformasi digital inovatif penyedia software enterprise, aplikasi mobile Android/iOS, solusi AI privat, dan pelatihan teknologi profesional.
                    </p>
                    <div class="pt-2 text-xs space-y-1 font-semibold" style="color: var(--text-dim);">
                        <p style="color: var(--text);">Direktur Utama: Septa Ryan Hidayat, S.Kom</p>
                        <p class="mono">WhatsApp Resmi: 0896 9524 9089 / 0811 7448 447</p>
                    </div>
                </div>

                <!-- Column 2: Layanan -->
                <div>
                    <h4 class="font-bold text-xs tracking-wider uppercase mb-4 mono" style="color: var(--accent);">Layanan Utama</h4>
                    <ul class="space-y-2.5 text-xs font-semibold" style="color: var(--text-muted);">
                        <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">&bull; Web App & Website Enterprise</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">&bull; Mobile App Android & iOS (Flutter)</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">&bull; Custom AI Chatbot & RAG Document</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">&bull; Website Sekolah & Digital Desa</a></li>
                    </ul>
                </div>

                <!-- Column 3: Navigasi -->
                <div>
                    <h4 class="font-bold text-xs tracking-wider uppercase mb-4 mono" style="color: var(--accent);">Navigasi</h4>
                    <ul class="space-y-2.5 text-xs font-semibold" style="color: var(--text-muted);">
                        <li><a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">&bull; Beranda</a></li>
                        <li><a href="{{ route('projects.index') }}" class="hover:text-blue-600 transition-colors">&bull; Portofolio Proyek</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-blue-600 transition-colors">&bull; Etalase Produk Digital</a></li>
                        <li><a href="{{ route('trainer.index') }}" class="hover:text-blue-600 transition-colors">&bull; Trainer & Galeri Foto</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-blue-600 transition-colors">&bull; Informasi & Artikel</a></li>
                    </ul>
                </div>

                <!-- Column 4: Kontak Resmi -->
                <div>
                    <h4 class="font-bold text-xs tracking-wider uppercase mb-4 mono" style="color: var(--accent);">Kontak Resmi</h4>
                    <ul class="space-y-2 text-xs font-semibold" style="color: var(--text-muted);">
                        <li class="flex items-center gap-2">
                            <span class="text-blue-600 font-bold">💬 WA 1:</span>
                            <span class="mono font-bold" style="color: var(--text);">0896 9524 9089</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-blue-600 font-bold">💬 WA 2:</span>
                            <span class="mono font-bold" style="color: var(--text);">0811 7448 447</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-blue-600 font-bold">✉️ Email:</span>
                            <span class="font-bold" style="color: var(--text);">info@berandadigital.net</span>
                        </li>
                        <li class="text-[11px] pt-1 leading-relaxed" style="color: var(--text-dim);">
                            📍 Sumatera Selatan, Indonesia.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs font-medium gap-4" style="color: var(--text-dim);">
                <p>&copy; {{ date('Y') }} CV. Beranda Teknologi Digital (berandadigital.net). All Rights Reserved.</p>
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full surface mono text-[11px] font-bold">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        Laravel 13 & PHP 8.4 Powered
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Action Buttons -->
    <div x-data="{ showTop: false }" 
         @scroll.window="showTop = (window.pageYOffset > 350)" 
         class="fixed bottom-6 right-6 z-40 flex flex-col gap-3">
        
        <!-- Scroll to Top Button -->
        <button x-show="showTop" 
                x-transition 
                @click="window.scrollTo({ top: 0, behavior: 'smooth' })" 
                type="button" 
                class="w-11 h-11 rounded-full surface flex items-center justify-center hover:scale-110 transition-all shadow-xl"
                style="color: var(--text);">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>

        <!-- Floating WhatsApp Launcher Button -->
        <a href="https://wa.me/6289695249089?text=Halo%20CV.%20Beranda%20Teknologi%20Digital,%20saya%20ingin%20konsultasi%20pembuatan%20sistem" 
           target="_blank" 
           class="inline-flex items-center gap-2 px-4 py-3 rounded-full bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold text-xs shadow-2xl shadow-emerald-500/40 hover:scale-105 transition-all">
            <span class="w-2.5 h-2.5 rounded-full bg-white animate-ping"></span>
            <span>Konsultasi WA</span>
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
    </script>
    @stack('scripts')
</body>
</html>
