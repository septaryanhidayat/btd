<!DOCTYPE html>
<html lang="id" class="scroll-smooth light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'CV. Beranda Teknologi Digital - Startup Software House, Mobile App & AI')</title>
    <meta name="description" content="@yield('meta_description', 'CV. Beranda Teknologi Digital adalah startup agensi teknologi modern di Indonesia. Jasa pembuatan website, aplikasi Android/iOS, solusi AI, dan workshop IT.')">

    <!-- Google Fonts: Plus Jakarta Sans & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Vite Assets & Tailwind v4 -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style type="text/tailwindcss">
        @layer base {
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
            h1, h2, h3, h4, h5, h6, .font-heading {
                font-family: 'Outfit', sans-serif;
                letter-spacing: -0.025em;
            }
            .font-mono {
                font-family: 'JetBrains Mono', monospace;
            }
        }

        /* Root Background & Typography Base */
        body {
            background-color: #FAFAFC;
            color: #0F172A;
            overflow-x: hidden;
        }
        .dark body {
            background-color: #070A11;
            color: #F8FAFC;
        }

        /* 100% Solid Text Contrast Rule for Light Mode */
        html.light body,
        html.light .bento-card,
        html.light .glass-panel {
            color: #0F172A !important;
        }
        html.light h1, html.light h2, html.light h3, html.light h4, html.light h5, html.light h6 {
            color: #0F172A !important;
        }
        html.light p, html.light span, html.light li {
            color: #1E293B;
        }
        html.light .text-contrast-muted {
            color: #475569 !important;
        }

        /* Ultra-Futuristic Bento Cards */
        .bento-card {
            background: #FFFFFF;
            border: 1.5px solid #E2E8F0;
            border-radius: 1.75rem;
            box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.06), 0 4px 6px -2px rgba(15, 23, 42, 0.02);
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
        }
        .dark .bento-card {
            background: #0E1424;
            border: 1.5px solid #1E293B;
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.6);
            color: #F8FAFC !important;
        }
        .dark .bento-card h1, .dark .bento-card h2, .dark .bento-card h3, .dark .bento-card h4 {
            color: #FFFFFF !important;
        }
        .dark .bento-card p, .dark .bento-card span {
            color: #CBD5E1;
        }
        .bento-card:hover {
            border-color: #6366F1;
            transform: translateY(-4px);
            box-shadow: 0 25px 50px -12px rgba(99, 102, 241, 0.18);
        }
        .dark .bento-card:hover {
            border-color: #818CF8;
            box-shadow: 0 25px 50px -12px rgba(99, 102, 241, 0.35);
        }

        /* Animated Glowing Border Effect */
        .glow-border {
            position: relative;
        }
        .glow-border::before {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(135deg, #4F46E5, #06B6D4, #9333EA, #3B82F6);
            border-radius: inherit;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        .glow-border:hover::before {
            opacity: 1;
        }

        /* Futuristic Gradient Typography */
        .gradient-text-electric {
            background: linear-gradient(135deg, #1D4ED8 0%, #7C3AED 50%, #0284C7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .dark .gradient-text-electric {
            background: linear-gradient(135deg, #60A5FA 0%, #C084FC 50%, #38BDF8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* 3D Holographic Parallax Container */
        .perspective-1000 {
            perspective: 1000px;
        }
        .preserve-3d {
            transform-style: preserve-3d;
        }

        /* Floating Micro-animation */
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(0.5deg); }
        }
        .animate-float-slow {
            animation: floatSlow 6s ease-in-out infinite;
        }

        /* Infinite Marquee */
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: 200%;
            animation: marquee 25s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #F1F5F9;
        }
        .dark ::-webkit-scrollbar-track {
            background: #0B1120;
        }
        ::-webkit-scrollbar-thumb {
            background: #6366F1;
            border-radius: 9999px;
        }
    </style>

    <script>
        // Default Light Mode script with persistence
        if (localStorage.theme === 'dark') {
            document.documentElement.classList.add('dark');
            document.documentElement.classList.remove('light');
        } else {
            document.documentElement.classList.remove('dark');
            document.documentElement.classList.add('light');
            localStorage.theme = 'light';
        }
    </script>
</head>
<body class="bg-[#FAFAFC] dark:bg-[#070A11] text-slate-900 dark:text-slate-100 min-h-screen flex flex-col antialiased selection:bg-indigo-600 selection:text-white transition-colors duration-300">

    <!-- Futuristic Top Live Broadcast Bar -->
    <div class="bg-slate-950 text-white text-xs py-2 px-4 border-b border-slate-800 flex items-center justify-between overflow-hidden">
        <div class="max-w-7xl mx-auto w-full flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-emerald-500/20 text-emerald-300 font-mono text-[10px] font-bold border border-emerald-500/30">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                    ONLINE 2026
                </span>
                <span class="hidden sm:inline text-slate-300 font-medium text-xs">CV. Beranda Teknologi Digital &bull; Enterprise Software House & AI Agency</span>
            </div>
            <div class="flex items-center gap-4 text-xs font-semibold">
                <a href="https://wa.me/6289695249089" target="_blank" class="text-amber-300 hover:text-amber-200 flex items-center gap-1">
                    <span>💬 WhatsApp: 0896 9524 9089</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Floating Glassmorphic Header Navigation -->
    <header x-data="{ open: false, scrolled: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 20)"
            :class="scrolled ? 'bg-white/90 dark:bg-slate-950/90 backdrop-blur-xl border-b border-slate-200 dark:border-slate-800 shadow-md py-3' : 'bg-transparent py-5'"
            class="sticky top-0 inset-x-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            
            <!-- Official Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="p-1 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm group-hover:scale-105 transition-all">
                    <img src="/images/Logo-BTD.png" alt="Beranda Teknologi Digital Logo" class="h-10 w-auto object-contain" />
                </div>
                <div class="flex flex-col">
                    <span class="font-heading font-extrabold text-lg tracking-tight text-slate-950 dark:text-white flex items-center gap-1">
                        Beranda<span class="text-indigo-600 dark:text-indigo-400">Digital</span>
                    </span>
                    <span class="text-[10px] font-extrabold tracking-widest text-slate-600 dark:text-slate-400 uppercase -mt-1">Startup & Software House</span>
                </div>
            </a>

            <!-- High-Tech Navigation Pills -->
            <nav class="hidden md:flex items-center gap-1 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border border-slate-200 dark:border-slate-800 rounded-full px-3 py-1.5 shadow-sm">
                <a href="{{ route('home') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('home') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-800 dark:text-slate-200 hover:text-indigo-600 dark:hover:text-indigo-400' }}">Beranda</a>
                <a href="{{ route('services') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('services') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-800 dark:text-slate-200 hover:text-indigo-600 dark:hover:text-indigo-400' }}">Layanan</a>
                <a href="{{ route('projects.index') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('projects.*') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-800 dark:text-slate-200 hover:text-indigo-600 dark:hover:text-indigo-400' }}">Portofolio</a>
                <a href="{{ route('products.index') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('products.*') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-800 dark:text-slate-200 hover:text-indigo-600 dark:hover:text-indigo-400' }}">Produk Digital</a>
                <a href="{{ route('trainer.index') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('trainer.index') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-800 dark:text-slate-200 hover:text-indigo-600 dark:hover:text-indigo-400' }}">Trainer & Galeri</a>
                <a href="{{ route('blog.index') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('blog.*') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-800 dark:text-slate-200 hover:text-indigo-600 dark:hover:text-indigo-400' }}">Informasi</a>
            </nav>

            <!-- Right Controls: Theme Switcher & Contact Button -->
            <div class="hidden md:flex items-center gap-3">
                <button onclick="toggleTheme()" 
                        type="button" 
                        title="Beralih Mode Tampilan"
                        class="w-10 h-10 rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-800 dark:text-amber-300 hover:scale-105 transition-all shadow-sm">
                    <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg class="w-5 h-5 block dark:hidden text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white font-extrabold text-xs shadow-lg shadow-indigo-500/25 hover:scale-105 transition-all">
                    <span>Mulai Proyek</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>

            <!-- Mobile Controls -->
            <div class="flex items-center gap-2 md:hidden">
                <button onclick="toggleTheme()" type="button" class="p-2 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-800 dark:text-amber-300">
                    <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg class="w-5 h-5 block dark:hidden text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
                <button @click="open = !open" type="button" class="p-2 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="open" x-transition class="md:hidden bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 py-4 px-6 space-y-3 shadow-xl">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-xl text-sm font-extrabold text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Beranda</a>
            <a href="{{ route('services') }}" class="block px-3 py-2 rounded-xl text-sm font-extrabold text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Layanan</a>
            <a href="{{ route('projects.index') }}" class="block px-3 py-2 rounded-xl text-sm font-extrabold text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Portofolio</a>
            <a href="{{ route('products.index') }}" class="block px-3 py-2 rounded-xl text-sm font-extrabold text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Produk Digital</a>
            <a href="{{ route('trainer.index') }}" class="block px-3 py-2 rounded-xl text-sm font-extrabold text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Trainer & Galeri</a>
            <a href="{{ route('blog.index') }}" class="block px-3 py-2 rounded-xl text-sm font-extrabold text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Informasi</a>
            <a href="{{ route('contact') }}" class="block w-full text-center px-4 py-3 rounded-2xl bg-indigo-600 text-white font-extrabold text-xs shadow-md mt-4">Kalkulator Estimasi Biaya</a>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @if(session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 6000)" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="bg-emerald-50 border-2 border-emerald-300 text-emerald-950 dark:bg-emerald-950/70 dark:border-emerald-800 dark:text-emerald-300 px-4 py-3.5 rounded-2xl flex items-center justify-between shadow-sm">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-xs font-extrabold">{{ session('success') }}</span>
                    </div>
                    <button @click="show = false" class="text-emerald-800 font-extrabold">✕</button>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Futuristic High-End Footer -->
    <footer class="bg-white dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 pt-16 pb-12 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-200 dark:border-slate-800">
                <!-- Column 1: Brand -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <img src="/images/Logo-BTD.png" alt="Beranda Teknologi Digital" class="h-10 w-auto object-contain" />
                        <span class="font-heading font-extrabold text-xl text-slate-950 dark:text-white">Beranda<span class="text-indigo-600 dark:text-indigo-400">Digital</span></span>
                    </a>
                    <p class="text-xs sm:text-sm leading-relaxed text-slate-600 dark:text-slate-400 max-w-sm font-medium">
                        <strong class="text-slate-900 dark:text-white font-bold">CV. Beranda Teknologi Digital</strong> &bull; Mitra transformasi digital inovatif penyedia software enterprise, aplikasi mobile Android/iOS, solusi AI privat, dan pelatihan teknologi profesional.
                    </p>
                    <div class="pt-2 text-xs text-slate-700 dark:text-slate-300 space-y-1 font-semibold">
                        <p class="text-slate-900 dark:text-white font-bold">Direktur Utama: Septa Ryan Hidayat, S.Kom</p>
                        <p>WhatsApp Resmi: 0896 9524 9089 / 0811 7448 447</p>
                    </div>
                </div>

                <!-- Column 2: Layanan -->
                <div>
                    <h4 class="font-heading font-bold text-slate-950 dark:text-white text-xs tracking-wider uppercase mb-4">Layanan Utama</h4>
                    <ul class="space-y-2.5 text-xs text-slate-700 dark:text-slate-300 font-semibold">
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">&bull; Web App & Website Enterprise</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">&bull; Mobile App Android & iOS (Flutter)</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">&bull; Custom AI Chatbot & RAG Document</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">&bull; Website Sekolah & Digital Desa</a></li>
                    </ul>
                </div>

                <!-- Column 3: Navigasi -->
                <div>
                    <h4 class="font-heading font-bold text-slate-950 dark:text-white text-xs tracking-wider uppercase mb-4">Navigasi</h4>
                    <ul class="space-y-2.5 text-xs text-slate-700 dark:text-slate-300 font-semibold">
                        <li><a href="{{ route('home') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">&bull; Beranda</a></li>
                        <li><a href="{{ route('projects.index') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">&bull; Portofolio Proyek</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">&bull; Etalase Produk Digital</a></li>
                        <li><a href="{{ route('trainer.index') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">&bull; Trainer & Galeri Foto</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">&bull; Informasi & Artikel</a></li>
                    </ul>
                </div>

                <!-- Column 4: Kontak Resmi -->
                <div>
                    <h4 class="font-heading font-bold text-slate-950 dark:text-white text-xs tracking-wider uppercase mb-4">Kontak Resmi</h4>
                    <ul class="space-y-2 text-xs text-slate-700 dark:text-slate-300 font-semibold">
                        <li class="flex items-center gap-2">
                            <span class="text-indigo-600 dark:text-indigo-400 font-bold">💬 WA 1:</span>
                            <span class="font-mono text-slate-900 dark:text-white font-bold">0896 9524 9089</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-indigo-600 dark:text-indigo-400 font-bold">💬 WA 2:</span>
                            <span class="font-mono font-bold">0811 7448 447</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-indigo-600 dark:text-indigo-400 font-bold">✉️ Email:</span>
                            <span>info@berandadigital.net</span>
                        </li>
                        <li class="text-[11px] text-slate-600 dark:text-slate-400 pt-1 leading-relaxed">
                            📍 Sumatera Selatan, Indonesia.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-600 dark:text-slate-400 font-medium gap-4">
                <p>&copy; {{ date('Y') }} CV. Beranda Teknologi Digital (berandadigital.net). All Rights Reserved.</p>
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-900 text-slate-800 dark:text-slate-200 font-mono text-[11px] font-bold border border-slate-200 dark:border-slate-800">
                        <span class="w-2 h-2 rounded-full bg-indigo-500 animate-pulse"></span>
                        Laravel 13 & PHP 8.4 Powered
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                document.documentElement.classList.add('light');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                document.documentElement.classList.remove('light');
                localStorage.theme = 'dark';
            }
        }
    </script>
    @stack('scripts')
</body>
</html>
