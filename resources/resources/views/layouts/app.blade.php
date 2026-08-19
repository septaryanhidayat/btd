<!DOCTYPE html>
<html lang="id" class="scroll-smooth light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Beranda Teknologi Digital - Jasa Pembuatan Website dan Aplikasi Android')</title>
    <meta name="description" content="@yield('meta_description', 'Bangun Usaha & Bisnis Anda Go Digital ! Beranda Teknologi Digital Jasa pembuatan website, sistem informasi, aplikasi android & desain grafis.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Styles & Tailwind v4 -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style type="text/tailwindcss">
        @layer base {
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
                background-color: #ffffff;
                color: #334155;
            }
            h1, h2, h3, h4, h5, h6, .font-heading {
                font-family: 'Outfit', sans-serif;
            }
        }

        .bg-brand-blue {
            background-color: #0170b9;
        }
        .text-brand-blue {
            color: #0170b9;
        }
        .border-brand-blue {
            border-color: #0170b9;
        }

        .bg-brand-orange {
            background-color: #f53003;
        }
        .text-brand-orange {
            color: #f53003;
        }

        .shadow-soft {
            box-shadow: 0 10px 30px -5px rgba(1, 112, 185, 0.08), 0 4px 12px -2px rgba(0, 0, 0, 0.03);
        }
    </style>

    <script>
        // Enforce Light Mode as primary default
        if (localStorage.theme === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.theme = 'light';
        }
    </script>
</head>
<body class="bg-white text-slate-800 min-h-screen flex flex-col antialiased selection:bg-[#0170b9] selection:text-white">

    <!-- Top Notification Announcement Bar -->
    <div class="bg-gradient-to-r from-[#0170b9] via-blue-600 to-cyan-600 text-white text-xs py-2 px-4 text-center font-medium flex items-center justify-center gap-2 shadow-sm">
        <span class="bg-white/20 text-white px-2 py-0.5 rounded-full font-bold text-[10px] uppercase tracking-wider">Promo Digital</span>
        <span>Bangun Usaha & Bisnis Anda Go Digital! Konsultasi Gratis & Penawaran Spesial</span>
        <a href="https://wa.me/6289695249089" target="_blank" class="underline font-bold hover:text-amber-200 ml-1">Hubungi Kami 0896 9524 9089 &rarr;</a>
    </div>

    <!-- Header Navigation -->
    <header x-data="{ open: false, scrolled: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 20)"
            :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-md py-3' : 'bg-white py-4 border-b border-slate-100'"
            class="sticky top-0 inset-x-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-[#0170b9] flex items-center justify-center text-white font-extrabold text-xl shadow-md shadow-blue-500/20 group-hover:scale-105 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-heading font-extrabold text-xl tracking-tight text-slate-900 flex items-center gap-1">
                        Beranda<span class="text-[#0170b9]">Teknologi Digital</span>
                    </span>
                    <span class="text-[10px] font-semibold tracking-wider text-slate-500 uppercase -mt-1">Jasa Pembuatan Website & Aplikasi Android</span>
                </div>
            </a>

            <!-- Desktop Navigation Menu -->
            <nav class="hidden md:flex items-center gap-6">
                <a href="{{ route('home') }}" class="text-sm font-bold transition-colors {{ request()->routeIs('home') ? 'text-[#0170b9]' : 'text-slate-700 hover:text-[#0170b9]' }}">Beranda</a>
                <a href="{{ route('services') }}" class="text-sm font-bold transition-colors {{ request()->routeIs('services') ? 'text-[#0170b9]' : 'text-slate-700 hover:text-[#0170b9]' }}">Layanan</a>
                <a href="{{ route('projects.index') }}" class="text-sm font-bold transition-colors {{ request()->routeIs('projects.*') ? 'text-[#0170b9]' : 'text-slate-700 hover:text-[#0170b9]' }}">Portofolio</a>
                <a href="{{ route('products.index') }}" class="text-sm font-bold transition-colors {{ request()->routeIs('products.*') ? 'text-[#0170b9]' : 'text-slate-700 hover:text-[#0170b9]' }}">Produk Digital</a>
                <a href="{{ route('trainer.index') }}" class="text-sm font-bold transition-colors {{ request()->routeIs('trainer.index') ? 'text-[#0170b9]' : 'text-slate-700 hover:text-[#0170b9]' }}">Trainer & Galeri</a>
                <a href="{{ route('blog.index') }}" class="text-sm font-bold transition-colors {{ request()->routeIs('blog.*') ? 'text-[#0170b9]' : 'text-slate-700 hover:text-[#0170b9]' }}">Informasi</a>
            </nav>

            <!-- Right Action CTA -->
            <div class="hidden md:flex items-center gap-3">
                <a href="https://wa.me/6289695249089" target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-[#f53003] hover:bg-orange-600 text-white font-bold text-xs shadow-md shadow-orange-500/20 hover:scale-105 transition-all">
                    <span>Hubungi Kami 0896 9524 9089</span>
                </a>
            </div>

            <!-- Mobile Drawer Toggle -->
            <div class="flex items-center md:hidden">
                <button @click="open = !open" type="button" class="p-2 rounded-lg text-slate-700 hover:bg-slate-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu Drawer -->
        <div x-show="open" 
             x-transition
             class="md:hidden bg-white border-b border-slate-200 py-4 px-6 space-y-3">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 hover:bg-slate-100">Beranda</a>
            <a href="{{ route('services') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 hover:bg-slate-100">Layanan</a>
            <a href="{{ route('projects.index') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 hover:bg-slate-100">Portofolio</a>
            <a href="{{ route('products.index') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 hover:bg-slate-100">Produk Digital</a>
            <a href="{{ route('trainer.index') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 hover:bg-slate-100">Trainer & Galeri</a>
            <a href="{{ route('blog.index') }}" class="block px-3 py-2 rounded-lg text-sm font-bold text-slate-800 hover:bg-slate-100">Informasi</a>
            <a href="{{ route('contact') }}" class="block w-full text-center px-4 py-2.5 rounded-xl bg-[#f53003] text-white font-bold text-xs shadow-md mt-4">Hubungi Kami (Kalkulator Estimasi)</a>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow bg-white">
        @if(session('success'))
            <div x-data="{ show: true }" 
                 x-show="show" 
                 x-init="setTimeout(() => show = false, 6000)"
                 class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3.5 rounded-2xl flex items-center justify-between shadow-sm">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-xs font-bold">{{ session('success') }}</span>
                    </div>
                    <button @click="show = false" class="text-emerald-600 hover:text-emerald-800 font-bold">✕</button>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Classic Cyan-Blue Footer (#0170b9) -->
    <footer class="bg-[#0170b9] text-white pt-16 pb-12 transition-colors border-t border-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-blue-400/40">
                <!-- Column 1: Brand Info -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-white text-[#0170b9] flex items-center justify-center font-extrabold text-xl shadow-md">
                            BTD
                        </div>
                        <span class="font-heading font-extrabold text-xl text-white">Beranda<span class="text-amber-300">Teknologi Digital</span></span>
                    </div>
                    <p class="text-xs leading-relaxed text-blue-100 max-w-sm">
                        <strong class="text-white">CV. Beranda Teknologi Digital</strong> adalah mitra transformasi digital terdepan di Indonesia. Menyediakan jasa pembuatan website profesional, aplikasi Android & iOS, sistem informasi enterprise, serta pelatihan IT.
                    </p>
                    <div class="pt-2 text-xs text-blue-100 space-y-1">
                        <p class="font-bold text-white">Direktur Utama: Septa Ryan Hidayat, S.Kom</p>
                        <p>Nomor WhatsApp: 0896 9524 9089 / 0811 7448 447</p>
                    </div>
                </div>

                <!-- Column 2: Layanan Kami -->
                <div>
                    <h4 class="font-heading font-extrabold text-amber-300 text-xs tracking-wider uppercase mb-4">Layanan Jasa Kami</h4>
                    <ul class="space-y-2.5 text-xs text-blue-100">
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">&bull; Jasa Pembuatan Website & E-Commerce</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">&bull; Aplikasi Mobile Android & iOS (Flutter)</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">&bull; Sistem Informasi Sekolah & Desa Digital</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">&bull; Custom AI Chatbot & RAG Document</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">&bull; Desain Grafis, Branding & UI/UX</a></li>
                    </ul>
                </div>

                <!-- Column 3: Ekosistem -->
                <div>
                    <h4 class="font-heading font-extrabold text-amber-300 text-xs tracking-wider uppercase mb-4">Menu Navigasi</h4>
                    <ul class="space-y-2.5 text-xs text-blue-100">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">&bull; Beranda Utama</a></li>
                        <li><a href="{{ route('projects.index') }}" class="hover:text-white transition-colors">&bull; Portofolio Proyek Klien</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">&bull; Etalase Produk Digital</a></li>
                        <li><a href="{{ route('trainer.index') }}" class="hover:text-white transition-colors">&bull; Trainer & Galeri Foto Event</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-white transition-colors">&bull; Informasi & Berita Event</a></li>
                    </ul>
                </div>

                <!-- Column 4: Kontak Resmi -->
                <div>
                    <h4 class="font-heading font-extrabold text-amber-300 text-xs tracking-wider uppercase mb-4">Kontak Resmi & Alamat</h4>
                    <ul class="space-y-2 text-xs text-blue-100">
                        <li class="flex items-center gap-2">
                            <span class="font-bold text-white">💬 WA 1:</span>
                            <span class="font-mono">0896 9524 9089</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="font-bold text-white">💬 WA 2:</span>
                            <span class="font-mono">0811 7448 447</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="font-bold text-white">✉️ Email:</span>
                            <span>info@berandadigital.net</span>
                        </li>
                        <li class="text-[11px] text-blue-100 pt-2 leading-relaxed">
                            📍 Sumatera Selatan, Indonesia.
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Copyright Bar -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-blue-100 gap-4">
                <p>&copy; {{ date('Y') }} CV. Beranda Teknologi Digital (berandadigital.net). All Rights Reserved.</p>
                <div class="flex items-center gap-4">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/20 text-white font-mono text-[11px] font-bold">
                        Laravel 13 & PHP 8.4 Enabled
                    </span>
                </div>
            </div>
        </div>
    </footer>
    @stack('scripts')
</body>
</html>
