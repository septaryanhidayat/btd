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
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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
                background-color: #FAFAFC;
                color: #0F172A;
            }
            h1, h2, h3, h4, h5, h6, .font-heading {
                font-family: 'Outfit', sans-serif;
                letter-spacing: -0.02em;
            }
        }

        /* 2026 Modern Startup Card Styles (Vercel/Linear Light Aesthetics) */
        .bento-card {
            background: #FFFFFF;
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 1.5rem;
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.03), 0 2px 6px -1px rgba(15, 23, 42, 0.02);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .bento-card:hover {
            border-color: rgba(99, 102, 241, 0.4);
            box-shadow: 0 20px 40px -15px rgba(79, 70, 229, 0.08), 0 8px 16px -4px rgba(15, 23, 42, 0.03);
            transform: translateY(-3px);
        }

        .gradient-text-2026 {
            background: linear-gradient(135deg, #0F172A 0%, #2563EB 50%, #4F46E5 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .gradient-text-accent {
            background: linear-gradient(135deg, #2563EB 0%, #7C3AED 50%, #06B6D4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg-grid-pattern {
            background-size: 32px 32px;
            background-image: 
                linear-gradient(to right, rgba(226, 232, 240, 0.6) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(226, 232, 240, 0.6) 1px, transparent 1px);
        }

        .badge-pill {
            background: rgba(241, 245, 249, 0.9);
            border: 1px solid rgba(203, 213, 225, 0.6);
            backdrop-filter: blur(8px);
        }
    </style>
</head>
<body class="bg-[#FAFAFC] text-slate-900 min-h-screen flex flex-col antialiased selection:bg-indigo-600 selection:text-white">

    <!-- Top Announcement Bar -->
    <div class="bg-slate-900 text-slate-200 text-xs py-2.5 px-4 text-center font-medium flex items-center justify-center gap-2 shadow-sm border-b border-slate-800">
        <span class="bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 px-2.5 py-0.5 rounded-full font-bold text-[10px] uppercase tracking-wider">Inovasi 2026</span>
        <span>Startup Software House & AI Solution Center &bull; CV. Beranda Teknologi Digital</span>
        <a href="https://wa.me/6289695249089" target="_blank" class="text-cyan-400 font-bold hover:underline ml-1">Konsultasi WA 0896 9524 9089 &rarr;</a>
    </div>

    <!-- Header Navigation -->
    <header x-data="{ open: false, scrolled: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 20)"
            :class="scrolled ? 'bg-white/90 backdrop-blur-xl border-b border-slate-200/80 shadow-xs py-3.5' : 'bg-transparent py-5'"
            class="sticky top-0 inset-x-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-600 via-indigo-600 to-cyan-500 flex items-center justify-center text-white font-extrabold text-xl shadow-lg shadow-indigo-500/20 group-hover:scale-105 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-heading font-extrabold text-xl tracking-tight text-slate-900 flex items-center gap-1.5">
                        Beranda<span class="text-indigo-600">Digital</span>
                        <span class="inline-flex items-center justify-center w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    </span>
                    <span class="text-[10px] font-bold tracking-widest text-slate-600 uppercase -mt-1">Startup & Software House</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-1.5 bg-white/80 backdrop-blur-md border border-slate-200/80 rounded-full px-4 py-1.5 shadow-xs">
                <a href="{{ route('home') }}" class="px-4 py-1.5 rounded-full text-xs font-bold transition-all {{ request()->routeIs('home') ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900' }}">Beranda</a>
                <a href="{{ route('services') }}" class="px-4 py-1.5 rounded-full text-xs font-bold transition-all {{ request()->routeIs('services') ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900' }}">Layanan</a>
                <a href="{{ route('projects.index') }}" class="px-4 py-1.5 rounded-full text-xs font-bold transition-all {{ request()->routeIs('projects.*') ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900' }}">Portofolio</a>
                <a href="{{ route('products.index') }}" class="px-4 py-1.5 rounded-full text-xs font-bold transition-all {{ request()->routeIs('products.*') ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900' }}">Produk Digital</a>
                <a href="{{ route('trainer.index') }}" class="px-4 py-1.5 rounded-full text-xs font-bold transition-all {{ request()->routeIs('trainer.index') ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900' }}">Trainer & Galeri</a>
                <a href="{{ route('blog.index') }}" class="px-4 py-1.5 rounded-full text-xs font-bold transition-all {{ request()->routeIs('blog.*') ? 'bg-slate-900 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900' }}">Informasi</a>
            </nav>

            <!-- Action CTA Button -->
            <div class="hidden md:flex items-center gap-3">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-xs shadow-md shadow-indigo-600/20 hover:scale-105 transition-all">
                    <span>Mulai Proyek</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>

            <!-- Mobile Drawer Button -->
            <div class="flex items-center md:hidden">
                <button @click="open = !open" type="button" class="p-2 rounded-lg text-slate-700 hover:bg-slate-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div x-show="open" x-transition class="md:hidden bg-white border-b border-slate-200 py-4 px-6 space-y-3 shadow-lg">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 hover:bg-slate-100">Beranda</a>
            <a href="{{ route('services') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 hover:bg-slate-100">Layanan</a>
            <a href="{{ route('projects.index') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 hover:bg-slate-100">Portofolio</a>
            <a href="{{ route('products.index') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 hover:bg-slate-100">Produk Digital</a>
            <a href="{{ route('trainer.index') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 hover:bg-slate-100">Trainer & Galeri</a>
            <a href="{{ route('blog.index') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 hover:bg-slate-100">Informasi</a>
            <a href="{{ route('contact') }}" class="block w-full text-center px-4 py-2.5 rounded-xl bg-indigo-600 text-white font-bold text-xs shadow-md mt-4">Kalkulator Estimasi Biaya</a>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @if(session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 6000)" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3.5 rounded-2xl flex items-center justify-between shadow-sm">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-xs font-bold">{{ session('success') }}</span>
                    </div>
                    <button @click="show = false" class="text-emerald-600 font-bold">✕</button>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- 2026 Startup Footer (Clean Modern Light Base with Indigo/Slate Accents) -->
    <footer class="bg-white border-t border-slate-200/80 text-slate-600 pt-16 pb-12 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-200/80">
                <!-- Column 1: Brand Info -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 flex items-center justify-center text-white font-extrabold text-xl shadow-md">
                            BD
                        </div>
                        <span class="font-heading font-extrabold text-xl text-slate-900">Beranda<span class="text-indigo-600">Digital</span></span>
                    </a>
                    <p class="text-xs sm:text-sm leading-relaxed text-slate-500 max-w-sm">
                        <strong class="text-slate-800">CV. Beranda Teknologi Digital</strong> &bull; Startup Software House & IT Agency Terdepan di Indonesia. Menyediakan jasa aplikasi web, Android/iOS, AI privat, & pelatihan IT.
                    </p>
                    <div class="pt-2 text-xs text-slate-500 space-y-1">
                        <p class="font-bold text-slate-800">Direktur Utama: Septa Ryan Hidayat, S.Kom</p>
                        <p>WhatsApp Support: 0896 9524 9089 / 0811 7448 447</p>
                    </div>
                </div>

                <!-- Column 2: Layanan -->
                <div>
                    <h4 class="font-heading font-bold text-slate-900 text-xs tracking-wider uppercase mb-4">Layanan Utama</h4>
                    <ul class="space-y-2.5 text-xs text-slate-600">
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-600 transition-colors">&bull; Web App & Website Enterprise</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-600 transition-colors">&bull; Mobile App Android & iOS (Flutter)</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-600 transition-colors">&bull; Custom AI Chatbot & RAG Document</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-indigo-600 transition-colors">&bull; Website Sekolah & Digital Desa</a></li>
                    </ul>
                </div>

                <!-- Column 3: Menu Navigasi -->
                <div>
                    <h4 class="font-heading font-bold text-slate-900 text-xs tracking-wider uppercase mb-4">Navigasi</h4>
                    <ul class="space-y-2.5 text-xs text-slate-600">
                        <li><a href="{{ route('home') }}" class="hover:text-indigo-600 transition-colors">&bull; Beranda</a></li>
                        <li><a href="{{ route('projects.index') }}" class="hover:text-indigo-600 transition-colors">&bull; Portofolio Proyek</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-indigo-600 transition-colors">&bull; Etalase Produk Digital</a></li>
                        <li><a href="{{ route('trainer.index') }}" class="hover:text-indigo-600 transition-colors">&bull; Trainer & Galeri Foto</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-indigo-600 transition-colors">&bull; Informasi & Artikel</a></li>
                    </ul>
                </div>

                <!-- Column 4: Kontak Resmi -->
                <div>
                    <h4 class="font-heading font-bold text-slate-900 text-xs tracking-wider uppercase mb-4">Kontak Resmi</h4>
                    <ul class="space-y-2 text-xs text-slate-600">
                        <li class="flex items-center gap-2">
                            <span class="font-bold text-indigo-600">💬 WA 1:</span>
                            <span class="font-mono font-bold text-slate-900">0896 9524 9089</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="font-bold text-indigo-600">💬 WA 2:</span>
                            <span class="font-mono">0811 7448 447</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="font-bold text-indigo-600">✉️ Email:</span>
                            <span>info@berandadigital.net</span>
                        </li>
                        <li class="text-[11px] text-slate-500 pt-1 leading-relaxed">
                            📍 Sumatera Selatan, Indonesia.
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Copyright Bar -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                <p>&copy; {{ date('Y') }} CV. Beranda Teknologi Digital (berandadigital.net). All Rights Reserved.</p>
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-100 text-slate-700 font-mono text-[11px] font-bold border border-slate-200">
                        Laravel 13 & PHP 8.4 Powered
                    </span>
                </div>
            </div>
        </div>
    </footer>
    @stack('scripts')
</body>
</html>
