<!DOCTYPE html>
<html lang="id" class="scroll-smooth light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'CV. Beranda Teknologi Digital - Jasa Pembuatan Website, Mobile App & AI')</title>
    <meta name="description" content="@yield('meta_description', 'CV. Beranda Teknologi Digital adalah startup agensi teknologi & pelatihan IT modern di Indonesia. Jasa pembuatan website, aplikasi Android/iOS, solusi AI, dan workshop IT.')">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

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
            }
        }

        /* Ultra-Premium Glassmorphism & Card Styles */
        .glass-card-light {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(226, 232, 240, 0.9);
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.04), 0 4px 12px -2px rgba(0, 0, 0, 0.02);
        }
        .dark .glass-card-light {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(30, 41, 59, 0.9);
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.3);
        }

        .gradient-text-primary {
            background: linear-gradient(135deg, #2563eb 0%, #7c3aed 50%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .dark .gradient-text-primary {
            background: linear-gradient(135deg, #60a5fa 0%, #a78bfa 50%, #38bdf8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glow-effect {
            position: relative;
        }
        .glow-effect::before {
            content: '';
            position: absolute;
            top: -2px; left: -2px; right: -2px; bottom: -2px;
            background: linear-gradient(135deg, #4f46e5, #06b6d4, #10b981);
            border-radius: inherit;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .glow-effect:hover::before {
            opacity: 1;
        }
    </style>

    <!-- Theme Control Script (Default Light Mode) -->
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
<body class="bg-slate-50/70 text-slate-800 dark:bg-[#070A11] dark:text-slate-100 min-h-screen flex flex-col transition-colors duration-300 antialiased selection:bg-indigo-600 selection:text-white">

    <!-- Header Navigation -->
    <header x-data="{ open: false, scrolled: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 20)"
            :class="scrolled ? 'glass-card-light shadow-lg py-3' : 'bg-transparent py-5'"
            class="fixed top-0 inset-x-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-blue-600 via-indigo-600 to-cyan-500 flex items-center justify-center text-white shadow-lg shadow-indigo-500/25 group-hover:scale-105 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-heading font-extrabold text-xl tracking-tight text-slate-900 dark:text-white flex items-center gap-1.5">
                        Beranda<span class="text-indigo-600 dark:text-indigo-400">Digital</span>
                        <span class="inline-flex items-center justify-center w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                    </span>
                    <span class="text-[10px] font-bold tracking-widest text-slate-500 dark:text-slate-400 uppercase -mt-1">Startup & Tech Agency</span>
                </div>
            </a>

            <!-- Desktop Nav Menu Pills -->
            <nav class="hidden md:flex items-center gap-1 bg-white/90 dark:bg-slate-900/90 backdrop-blur-md border border-slate-200/90 dark:border-slate-800 rounded-full px-4 py-1.5 shadow-sm">
                <a href="{{ route('home') }}" class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ request()->routeIs('home') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400' }}">Beranda</a>
                <a href="{{ route('services') }}" class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ request()->routeIs('services') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400' }}">Layanan</a>
                <a href="{{ route('projects.index') }}" class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ request()->routeIs('projects.*') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400' }}">Portofolio</a>
                <a href="{{ route('products.index') }}" class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ request()->routeIs('products.*') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400' }}">Produk Digital</a>
                <a href="{{ route('trainer.index') }}" class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ request()->routeIs('trainer.index') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400' }}">Trainer & Galeri</a>
                <a href="{{ route('blog.index') }}" class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ request()->routeIs('blog.*') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400' }}">Insights</a>
            </nav>

            <!-- Right Controls: Theme Switcher & Contact Button -->
            <div class="hidden md:flex items-center gap-3">
                <!-- Theme Switcher Button -->
                <button onclick="toggleTheme()" 
                        type="button"
                        aria-label="Toggle Mode Tampilan"
                        class="w-10 h-10 rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-700 dark:text-amber-400 hover:scale-105 transition-all shadow-sm">
                    <!-- Sun Icon (Light Active) -->
                    <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <!-- Moon Icon (Dark Active) -->
                    <svg class="w-5 h-5 block dark:hidden text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-to-r from-blue-600 via-indigo-600 to-indigo-700 text-white font-bold text-xs shadow-md shadow-indigo-500/20 hover:shadow-indigo-500/35 hover:-translate-y-0.5 transition-all">
                    <span>Konsultasi Proyek</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="flex items-center gap-2 md:hidden">
                <button onclick="toggleTheme()" type="button" class="w-9 h-9 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-700 dark:text-amber-400">
                    <svg class="w-4 h-4 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg class="w-4 h-4 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
                <button @click="open = !open" type="button" class="p-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="md:hidden glass-card-light border-t border-b border-slate-200 dark:border-slate-800 mt-3 py-4 px-6 space-y-3">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800">Beranda</a>
            <a href="{{ route('services') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800">Layanan Agency</a>
            <a href="{{ route('projects.index') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800">Portofolio Digital</a>
            <a href="{{ route('products.index') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800">Produk Digital</a>
            <a href="{{ route('trainer.index') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800">Trainer & Galeri</a>
            <a href="{{ route('blog.index') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800">Insights & Blog</a>
            <a href="{{ route('contact') }}" class="block w-full text-center px-4 py-2.5 rounded-xl bg-indigo-600 text-white font-bold text-xs shadow-md mt-4">Hubungi Kami / Estimator</a>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow pt-24 pb-16">
        @if(session('success'))
            <div x-data="{ show: true }" 
                 x-show="show" 
                 x-init="setTimeout(() => show = false, 6000)"
                 class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6">
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 dark:bg-emerald-950/40 dark:border-emerald-800 dark:text-emerald-300 px-4 py-3.5 rounded-2xl flex items-center justify-between shadow-sm">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-xs font-semibold">{{ session('success') }}</span>
                    </div>
                    <button @click="show = false" class="text-emerald-600 hover:text-emerald-800">✕</button>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 pt-16 pb-12 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-200 dark:border-slate-800">
                <!-- Column 1: Brand Overview -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="{{ route('home') }}" class="flex items-center gap-2.5">
                        <div class="w-10 h-10 rounded-2xl bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center text-white font-extrabold text-lg shadow-md">
                            BTD
                        </div>
                        <span class="font-heading font-extrabold text-xl text-slate-900 dark:text-white">Beranda<span class="text-indigo-600 dark:text-indigo-400">Digital</span></span>
                    </a>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed max-w-sm">
                        <strong class="text-slate-800 dark:text-slate-200">CV. Beranda Teknologi Digital</strong> adalah startup software agency & IT training center profesional di Indonesia. Kami menghadirkan jasa pembuatan website, aplikasi Android/iOS, solusi AI privat, dan workshop IT.
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <a href="https://www.instagram.com/bteknologi_digital" target="_blank" class="w-9 h-9 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-700 dark:text-slate-300 hover:bg-indigo-600 hover:text-white transition-colors">
                            <span class="text-xs font-bold">ig</span>
                        </a>
                        <a href="https://github.com/septaryanhidayat/btd" target="_blank" class="w-9 h-9 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-700 dark:text-slate-300 hover:bg-indigo-600 hover:text-white transition-colors">
                            <span class="text-xs font-bold">git</span>
                        </a>
                        <a href="https://wa.me/6289695249089" target="_blank" class="w-9 h-9 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-700 dark:text-slate-300 hover:bg-emerald-600 hover:text-white transition-colors">
                            <span class="text-xs font-bold">wa</span>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Layanan Utama -->
                <div>
                    <h4 class="font-heading font-bold text-slate-900 dark:text-white text-xs tracking-wider uppercase mb-4">Layanan Agency</h4>
                    <ul class="space-y-2.5 text-xs">
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Website & Web App Custom</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Aplikasi Mobile Android & iOS</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Sistem AI Privat & RAG Document</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Website Sekolah & Digital Desa</a></li>
                    </ul>
                </div>

                <!-- Column 3: Ekosistem -->
                <div>
                    <h4 class="font-heading font-bold text-slate-900 dark:text-white text-xs tracking-wider uppercase mb-4">Ekosistem</h4>
                    <ul class="space-y-2.5 text-xs">
                        <li><a href="{{ route('projects.index') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Portofolio Digital</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Etalase Produk Digital</a></li>
                        <li><a href="{{ route('trainer.index') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Profil Speaker & Galeri Workshop</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Insights & Berita Event</a></li>
                    </ul>
                </div>

                <!-- Column 4: Kontak Resmi -->
                <div>
                    <h4 class="font-heading font-bold text-slate-900 dark:text-white text-xs tracking-wider uppercase mb-4">Kontak Resmi</h4>
                    <ul class="space-y-2 text-xs">
                        <li class="flex items-center gap-2">
                            <span class="text-emerald-600 font-bold">💬 WA:</span>
                            <span class="font-mono">0896 9524 9089</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-emerald-600 font-bold">💬 WA:</span>
                            <span class="font-mono">0811 7448 447</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-indigo-600 font-bold">✉️ Email:</span>
                            <span>info@berandadigital.net</span>
                        </li>
                        <li class="text-[11px] text-slate-500 pt-1 leading-relaxed">
                            Ogan Ilir & Palembang, Sumatra Selatan, Indonesia.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 dark:text-slate-400 gap-4">
                <p>&copy; {{ date('Y') }} CV. Beranda Teknologi Digital (berandadigital.net). Direktur Utama: Septa Ryan Hidayat.</p>
                <div class="flex items-center gap-4">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-700 dark:text-emerald-400 font-mono text-[11px] font-bold">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Laravel 13 & PHP 8.4 Support
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Theme Toggle Function -->
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
