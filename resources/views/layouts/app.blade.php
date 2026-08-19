<!DOCTYPE html>
<html lang="id" class="scroll-smooth light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'CV. Beranda Teknologi Digital - Startup Software House, Mobile App & AI')</title>
    <meta name="description" content="@yield('meta_description', 'CV. Beranda Teknologi Digital adalah startup agensi teknologi modern di Indonesia. Jasa pembuatan website, aplikasi Android/iOS, solusi AI, dan workshop IT.')">

    <!-- Fonts: Outfit & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

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
                letter-spacing: -0.02em;
            }
        }

        /* High-Contrast Light Mode (#0F172A on #FFFFFF) & Futuristic Dark Mode */
        body {
            background-color: #F8FAFC;
            color: #0F172A;
        }
        .dark body {
            background-color: #080C14;
            color: #F8FAFC;
        }

        .bento-card {
            background: #FFFFFF;
            border: 1.5px solid #CBD5E1;
            border-radius: 1.75rem;
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.05);
            transition: all 0.3s ease;
        }
        .dark .bento-card {
            background: #0F172A;
            border: 1.5px solid #1E293B;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.5);
        }
        .bento-card:hover {
            border-color: #4F46E5;
            transform: translateY(-3px);
            box-shadow: 0 20px 35px -10px rgba(79, 70, 229, 0.15);
        }

        /* High Contrast Gradient Text */
        .gradient-text-accent {
            background: linear-gradient(135deg, #1D4ED8 0%, #6D28D9 50%, #0369A1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .dark .gradient-text-accent {
            background: linear-gradient(135deg, #60A5FA 0%, #A78BFA 50%, #38BDF8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg-grid-pattern {
            background-size: 36px 36px;
            background-image: 
                linear-gradient(to right, rgba(203, 213, 225, 0.6) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(203, 213, 225, 0.6) 1px, transparent 1px);
        }
        .dark .bg-grid-pattern {
            background-size: 36px 36px;
            background-image: 
                linear-gradient(to right, rgba(30, 41, 59, 0.5) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(30, 41, 59, 0.5) 1px, transparent 1px);
        }

        .parallax-container {
            perspective: 1200px;
        }
        .parallax-layer {
            transform-style: preserve-3d;
            transition: transform 0.15s ease-out;
        }
        .parallax-float {
            animation: floatSlow 5s ease-in-out infinite;
        }
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>

    <script>
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
<body class="bg-[#F8FAFC] dark:bg-[#080C14] text-slate-900 dark:text-slate-100 min-h-screen flex flex-col antialiased selection:bg-indigo-600 selection:text-white transition-colors duration-300">

    <!-- Top High-Contrast Announcement Bar -->
    <div class="bg-slate-900 text-white text-xs py-2.5 px-4 text-center font-bold flex items-center justify-center gap-2 shadow-sm border-b border-slate-800">
        <span class="bg-indigo-600 text-white px-2.5 py-0.5 rounded-full font-bold text-[10px] uppercase tracking-wider">Inovasi 2026</span>
        <span>CV. Beranda Teknologi Digital &bull; Jasa Website, Mobile App & AI</span>
        <a href="https://wa.me/6289695249089" target="_blank" class="text-amber-300 font-extrabold hover:underline ml-1">Konsultasi WA 0896 9524 9089 &rarr;</a>
    </div>

    <!-- Header Navigation Bar -->
    <header x-data="{ open: false, scrolled: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 20)"
            :class="scrolled ? 'bg-white/95 dark:bg-slate-900/95 backdrop-blur-xl border-b border-slate-300 dark:border-slate-800 shadow-sm py-3.5' : 'bg-white/80 dark:bg-slate-950/80 py-4 border-b border-slate-200 dark:border-slate-800'"
            class="sticky top-0 inset-x-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-700 via-indigo-700 to-cyan-600 flex items-center justify-center text-white font-extrabold text-xl shadow-md group-hover:scale-105 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-heading font-extrabold text-xl tracking-tight text-slate-900 dark:text-white flex items-center gap-1.5">
                        Beranda<span class="text-indigo-700 dark:text-indigo-400">Digital</span>
                        <span class="inline-flex items-center justify-center w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    </span>
                    <span class="text-[10px] font-extrabold tracking-widest text-slate-700 dark:text-slate-300 uppercase -mt-1">Startup & Software House</span>
                </div>
            </a>

            <!-- High Contrast Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-1 bg-slate-100 dark:bg-slate-900 border border-slate-300 dark:border-slate-800 rounded-full px-3 py-1.5 shadow-xs">
                <a href="{{ route('home') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('home') ? 'bg-indigo-700 text-white shadow-xs' : 'text-slate-900 dark:text-slate-200 hover:text-indigo-700 dark:hover:text-indigo-400' }}">Beranda</a>
                <a href="{{ route('services') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('services') ? 'bg-indigo-700 text-white shadow-xs' : 'text-slate-900 dark:text-slate-200 hover:text-indigo-700 dark:hover:text-indigo-400' }}">Layanan</a>
                <a href="{{ route('projects.index') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('projects.*') ? 'bg-indigo-700 text-white shadow-xs' : 'text-slate-900 dark:text-slate-200 hover:text-indigo-700 dark:hover:text-indigo-400' }}">Portofolio</a>
                <a href="{{ route('products.index') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('products.*') ? 'bg-indigo-700 text-white shadow-xs' : 'text-slate-900 dark:text-slate-200 hover:text-indigo-700 dark:hover:text-indigo-400' }}">Produk Digital</a>
                <a href="{{ route('trainer.index') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('trainer.index') ? 'bg-indigo-700 text-white shadow-xs' : 'text-slate-900 dark:text-slate-200 hover:text-indigo-700 dark:hover:text-indigo-400' }}">Trainer & Galeri</a>
                <a href="{{ route('blog.index') }}" class="px-4 py-1.5 rounded-full text-xs font-extrabold transition-all {{ request()->routeIs('blog.*') ? 'bg-indigo-700 text-white shadow-xs' : 'text-slate-900 dark:text-slate-200 hover:text-indigo-700 dark:hover:text-indigo-400' }}">Informasi</a>
            </nav>

            <!-- Theme Switcher & Action Button -->
            <div class="hidden md:flex items-center gap-3">
                <button onclick="toggleTheme()" 
                        type="button" 
                        title="Beralih Mode Light/Dark"
                        class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 border-2 border-slate-300 dark:border-slate-700 flex items-center justify-center text-slate-900 dark:text-amber-300 hover:scale-105 transition-all shadow-xs">
                    <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg class="w-5 h-5 block dark:hidden text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-indigo-700 hover:bg-indigo-800 text-white font-extrabold text-xs shadow-md shadow-indigo-700/25 hover:scale-105 transition-all">
                    <span>Mulai Proyek</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>

            <!-- Mobile Controls -->
            <div class="flex items-center gap-2 md:hidden">
                <button onclick="toggleTheme()" type="button" class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-amber-300 font-bold">
                    <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg class="w-5 h-5 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
                <button @click="open = !open" type="button" class="p-2 rounded-lg text-slate-900 dark:text-slate-100 hover:bg-slate-200 dark:hover:bg-slate-800">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Drawer -->
        <div x-show="open" x-transition class="md:hidden bg-white dark:bg-slate-900 border-b border-slate-300 dark:border-slate-800 py-4 px-6 space-y-3 shadow-xl">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg text-sm font-extrabold text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Beranda</a>
            <a href="{{ route('services') }}" class="block px-3 py-2 rounded-lg text-sm font-extrabold text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Layanan</a>
            <a href="{{ route('projects.index') }}" class="block px-3 py-2 rounded-lg text-sm font-extrabold text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Portofolio</a>
            <a href="{{ route('products.index') }}" class="block px-3 py-2 rounded-lg text-sm font-extrabold text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Produk Digital</a>
            <a href="{{ route('trainer.index') }}" class="block px-3 py-2 rounded-lg text-sm font-extrabold text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Trainer & Galeri</a>
            <a href="{{ route('blog.index') }}" class="block px-3 py-2 rounded-lg text-sm font-extrabold text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Informasi</a>
            <a href="{{ route('contact') }}" class="block w-full text-center px-4 py-2.5 rounded-xl bg-indigo-700 text-white font-extrabold text-xs shadow-md mt-4">Kalkulator Estimasi Biaya</a>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @if(session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 6000)" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="bg-emerald-100 border-2 border-emerald-400 text-emerald-950 dark:bg-emerald-950/70 dark:border-emerald-800 dark:text-emerald-300 px-4 py-3.5 rounded-2xl flex items-center justify-between shadow-sm">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

    <!-- Footer -->
    <footer class="bg-white dark:bg-slate-950 border-t-2 border-slate-300 dark:border-slate-800 text-slate-800 dark:text-slate-300 pt-16 pb-12 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-300 dark:border-slate-800">
                <!-- Column 1: Brand Info -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-700 to-indigo-700 flex items-center justify-center text-white font-extrabold text-xl shadow-md">
                            BD
                        </div>
                        <span class="font-heading font-extrabold text-xl text-slate-900 dark:text-white">Beranda<span class="text-indigo-700 dark:text-indigo-400">Digital</span></span>
                    </a>
                    <p class="text-xs sm:text-sm leading-relaxed text-slate-700 dark:text-slate-300 max-w-sm font-semibold">
                        <strong class="text-slate-900 dark:text-white font-extrabold">CV. Beranda Teknologi Digital</strong> &bull; Startup Software House & IT Agency Terdepan di Indonesia. Menyediakan jasa pembuatan website enterprise, aplikasi mobile Android/iOS, solusi AI privat, & pelatihan IT.
                    </p>
                    <div class="pt-2 text-xs text-slate-800 dark:text-slate-300 space-y-1 font-bold">
                        <p class="text-slate-900 dark:text-white">Direktur Utama: Septa Ryan Hidayat, S.Kom</p>
                        <p>WhatsApp Support: 0896 9524 9089 / 0811 7448 447</p>
                    </div>
                </div>

                <!-- Column 2: Layanan -->
                <div>
                    <h4 class="font-heading font-extrabold text-slate-900 dark:text-white text-xs tracking-wider uppercase mb-4">Layanan Utama</h4>
                    <ul class="space-y-2.5 text-xs text-slate-800 dark:text-slate-300 font-bold">
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-700 dark:hover:text-indigo-400 transition-colors">&bull; Web App & Website Enterprise</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-700 dark:hover:text-indigo-400 transition-colors">&bull; Mobile App Android & iOS (Flutter)</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-700 dark:hover:text-indigo-400 transition-colors">&bull; Custom AI Chatbot & RAG Document</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-700 dark:hover:text-indigo-400 transition-colors">&bull; Website Sekolah & Digital Desa</a></li>
                    </ul>
                </div>

                <!-- Column 3: Navigasi -->
                <div>
                    <h4 class="font-heading font-extrabold text-slate-900 dark:text-white text-xs tracking-wider uppercase mb-4">Navigasi</h4>
                    <ul class="space-y-2.5 text-xs text-slate-800 dark:text-slate-300 font-bold">
                        <li><a href="{{ route('home') }}" class="hover:text-indigo-700 dark:hover:text-indigo-400 transition-colors">&bull; Beranda</a></li>
                        <li><a href="{{ route('projects.index') }}" class="hover:text-indigo-700 dark:hover:text-indigo-400 transition-colors">&bull; Portofolio Proyek</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-indigo-700 dark:hover:text-indigo-400 transition-colors">&bull; Etalase Produk Digital</a></li>
                        <li><a href="{{ route('trainer.index') }}" class="hover:text-indigo-700 dark:hover:text-indigo-400 transition-colors">&bull; Trainer & Galeri Foto</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-indigo-700 dark:hover:text-indigo-400 transition-colors">&bull; Informasi & Artikel</a></li>
                    </ul>
                </div>

                <!-- Column 4: Kontak Resmi -->
                <div>
                    <h4 class="font-heading font-extrabold text-slate-900 dark:text-white text-xs tracking-wider uppercase mb-4">Kontak Resmi</h4>
                    <ul class="space-y-2 text-xs text-slate-800 dark:text-slate-300 font-bold">
                        <li class="flex items-center gap-2">
                            <span class="text-indigo-700 dark:text-indigo-400">💬 WA 1:</span>
                            <span class="font-mono text-slate-900 dark:text-white">0896 9524 9089</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-indigo-700 dark:text-indigo-400">💬 WA 2:</span>
                            <span class="font-mono">0811 7448 447</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-indigo-700 dark:text-indigo-400">✉️ Email:</span>
                            <span>info@berandadigital.net</span>
                        </li>
                        <li class="text-[11px] text-slate-700 dark:text-slate-300 pt-1 leading-relaxed">
                            📍 Sumatera Selatan, Indonesia.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-700 dark:text-slate-300 font-semibold gap-4">
                <p>&copy; {{ date('Y') }} CV. Beranda Teknologi Digital (berandadigital.net). All Rights Reserved.</p>
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-200 dark:bg-slate-900 text-slate-900 dark:text-slate-200 font-mono text-[11px] font-extrabold border border-slate-300 dark:border-slate-800">
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
