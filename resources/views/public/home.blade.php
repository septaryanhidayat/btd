@extends('layouts.app')

@section('title', 'CV. Beranda Teknologi Digital - Software House, Mobile App & AI Digital Agency')

@section('content')
<!-- SECTION 1: HERO HEADER (FlyMotion Dynamic Style with Clean Mobile Layout & Crisp Typography) -->
<section class="relative pt-6 sm:pt-10 md:pt-14 pb-14 sm:pb-18 md:pb-24 lg:pt-16 lg:pb-28 overflow-hidden bg-flymotion-hero transition-colors duration-300">
    
    <!-- Organic Background Wave & Animated SVG Elements (Constrained to prevent mobile overflow) -->
    <div class="absolute -top-20 -right-20 sm:-top-24 sm:-right-24 w-72 h-72 sm:w-[500px] sm:h-[500px] bg-gradient-to-br from-blue-200/40 via-indigo-100/30 to-orange-100/30 dark:from-blue-900/20 dark:to-orange-950/20 rounded-full blur-3xl pointer-events-none anim-logo-object"></div>
    <div class="absolute top-1/2 -left-16 sm:-left-20 w-60 h-60 sm:w-80 sm:h-80 bg-orange-100/50 dark:bg-orange-900/10 rounded-full blur-3xl pointer-events-none anim-logo-bottom"></div>
    
    <!-- Floating Decorative Dotted Grids & Shapes -->
    <div class="hidden sm:block absolute top-12 left-10 text-slate-300 dark:text-slate-700 text-xs pointer-events-none select-none tracking-widest anim-logo-top">••••••••••••••••</div>
    <div class="hidden sm:block absolute bottom-20 left-1/3 text-[#fe6000]/40 text-4xl font-black pointer-events-none select-none anim-logo-bottom">~</div>
    <div class="hidden sm:block absolute top-20 right-20 text-[#3E5CE7]/30 text-5xl font-black pointer-events-none select-none anim-shape-rotate">✦</div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-8 items-center">
            
            <!-- Left Column: Typography & FlyMotion Action Buttons -->
            <div class="lg:col-span-7 space-y-4 sm:space-y-6 text-center lg:text-left reveal-on-scroll">
                
                <!-- Subtitle / Tagline Badge (Corporate Eyebrow) -->
                <div class="flex items-center justify-center lg:justify-start">
                    <div class="inline-flex items-center gap-2 px-3 sm:px-3.5 py-1 sm:py-1.5 rounded-full bg-blue-50/90 dark:bg-blue-950/50 border border-blue-200/80 dark:border-blue-800/60 text-[#3E5CE7] dark:text-blue-400 text-[11px] sm:text-xs font-extrabold tracking-wide uppercase shadow-xs">
                        <span class="w-2 h-2 rounded-full bg-[#3E5CE7] dark:bg-blue-400 animate-pulse"></span>
                        <span>Digital Agency & Software House Terpercaya</span>
                    </div>
                </div>

                <!-- Main Dynamic Headline -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-[#07153f] dark:text-white leading-[1.18]">
                    Bangun Ekosistem Digital <br class="hidden sm:inline" />
                    <span class="text-[#3E5CE7] dark:text-blue-400">yang Berdampak Nyata</span>
                </h1>

                <!-- Subtitle Description -->
                <p class="text-xs sm:text-sm md:text-base text-slate-600 dark:text-slate-300 max-w-xl mx-auto lg:mx-0 leading-relaxed font-medium">
                    Kami mengintegrasikan solusi perangkat lunak mutakhir dan program edukasi untuk mentransformasi operasional bisnis Anda. Mulai dari perancangan web korporat, pengembangan aplikasi seluler, solusi otomasi cerdas, hingga penciptaan talenta digital profesional.
                </p>

                <!-- 4 Quick Feature / Service Circular Icons Row (FlyMotion Signature) -->
                <div class="pt-1 pb-1 flex flex-wrap items-center justify-center lg:justify-start gap-2 sm:gap-3">
                    <div class="flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50/90 dark:bg-blue-950/50 border border-blue-100 dark:border-blue-800/60 text-[11px] font-extrabold text-[#3E5CE7] dark:text-blue-300 shadow-xs">
                        <span>🌐</span>
                        <span>Web Enterprise</span>
                    </div>
                    <div class="flex items-center gap-1.5 px-3 py-1 rounded-full bg-orange-50/90 dark:bg-orange-950/50 border border-orange-100 dark:border-orange-800/60 text-[11px] font-extrabold text-[#fe6000] dark:text-orange-400 shadow-xs">
                        <span>📱</span>
                        <span>Mobile Flutter</span>
                    </div>
                    <div class="flex items-center gap-1.5 px-3 py-1 rounded-full bg-purple-50/90 dark:bg-purple-950/50 border border-purple-100 dark:border-purple-800/60 text-[11px] font-extrabold text-purple-700 dark:text-purple-300 shadow-xs">
                        <span>🤖</span>
                        <span>AI Automation</span>
                    </div>
                    <div class="flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50/90 dark:bg-emerald-950/50 border border-emerald-100 dark:border-emerald-800/60 text-[11px] font-extrabold text-emerald-700 dark:text-emerald-300 shadow-xs">
                        <span>🎓</span>
                        <span>IT Training</span>
                    </div>
                </div>

                <!-- Strategic 2-CTA Hierarchy (Clear Road, High Conversion, Zero Clutter) -->
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3.5">
                    <!-- Primary CTA: Konsultasi Gratis (Solid Orange) -->
                    <a href="#kalkulator" 
                       class="w-full sm:w-auto px-7 py-3.5 sm:px-8 sm:py-4 rounded-xl font-black text-xs sm:text-sm uppercase tracking-wider shadow-xl shadow-orange-500/30 hover:shadow-orange-500/50 hover:scale-105 active:scale-98 transition-all flex items-center justify-center gap-2 border border-orange-300"
                       style="background: linear-gradient(135deg, #fe6000 0%, #ff7a29 100%) !important; color: #ffffff !important;">
                        <span class="font-black drop-shadow-xs" style="color: #ffffff !important;">KONSULTASI GRATIS</span>
                        <svg class="w-4 h-4" style="color: #ffffff !important;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    
                    <!-- Secondary CTA: Lihat Portofolio (Clean Corporate Outline Button) -->
                    <a href="{{ route('projects.index') }}" 
                       class="w-full sm:w-auto px-7 py-3.5 sm:px-8 sm:py-4 rounded-xl font-black text-xs sm:text-sm uppercase tracking-wider border-2 border-[#3E5CE7] dark:border-blue-400 text-[#3E5CE7] dark:text-blue-400 hover:bg-[#3E5CE7] hover:text-white dark:hover:bg-blue-600 dark:hover:text-white active:scale-98 transition-all flex items-center justify-center gap-2 shadow-xs">
                        <span>LIHAT PORTOFOLIO</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Feature Mini Badges & Guarantee -->
                <div class="pt-1 flex flex-wrap items-center justify-center lg:justify-start gap-2 text-[11px] text-slate-500 dark:text-slate-400 font-medium">
                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-md bg-white/90 dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 shadow-xs font-semibold text-slate-700 dark:text-slate-300">
                        <span class="text-amber-500 font-bold">★</span> Garansi 100% Selesai & Teruji
                    </span>
                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-md bg-white/90 dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 shadow-xs">
                        🚀 Free Domain & SSD NVMe
                    </span>
                </div>
            </div>

            <!-- Right Column: FlyMotion Hero Person Showcase with Multi-layer Animation -->
            <div class="lg:col-span-5 flex justify-center relative mt-4 lg:mt-0 reveal-on-scroll delay-200">
                <div class="relative w-full max-w-[310px] sm:max-w-sm md:max-w-md">
                    
                    <!-- Background Ambient Disk -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-300/40 via-purple-200/30 to-orange-200/40 dark:from-blue-800/20 dark:via-purple-900/20 dark:to-orange-900/20 rounded-full blur-2xl opacity-80 anim-logo-object"></div>
                    
                    <!-- Hero Person Card Container -->
                    <div class="relative bg-white/95 dark:bg-slate-900/95 backdrop-blur-md rounded-2xl sm:rounded-3xl p-3.5 sm:p-5 shadow-2xl border border-slate-100 dark:border-slate-800">
                        
                        <!-- Top Mini Browser Bar -->
                        <div class="flex items-center justify-between pb-2.5 border-b border-slate-100 dark:border-slate-800 text-xs mb-3">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-rose-400"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                                <span class="font-bold text-[#07153f] dark:text-slate-200 ml-1.5 text-[10px] sm:text-[11px] mono">berandadigital.net</span>
                            </div>
                            <span class="px-2 py-0.5 rounded-full bg-blue-50 dark:bg-blue-950/70 text-[#3E5CE7] dark:text-blue-300 font-bold text-[9px] sm:text-[10px]">Official Agency</span>
                        </div>

                        <!-- Hero Image -->
                        <div class="relative rounded-xl sm:rounded-2xl overflow-hidden bg-gradient-to-b from-blue-50 via-slate-50 to-indigo-50/60 dark:from-slate-800 dark:via-slate-900 dark:to-slate-950 p-2 sm:p-3 border border-slate-100 dark:border-slate-800 flex items-center justify-center">
                            <img src="/images/hero-person-old.png" alt="CV. Beranda Teknologi Digital Hero" class="w-full h-auto object-contain drop-shadow-2xl hover:scale-105 transition-transform duration-500" />
                            
                            <!-- Bottom Verified Badge -->
                            <div class="absolute bottom-2.5 left-2.5 right-2.5 p-2.5 rounded-xl bg-[#07153f]/95 dark:bg-slate-950/95 backdrop-blur-md text-white text-xs space-y-0.5 shadow-xl border border-white/10">
                                <div class="flex items-center justify-between text-[9px] sm:text-[10px]">
                                    <span class="text-amber-400 font-bold">★ Garansi 100% Selesai</span>
                                    <span class="text-cyan-300 font-semibold">Palembang & Ogan Ilir</span>
                                </div>
                                <div class="font-bold text-white text-[11px] sm:text-xs">Jasa Website & Aplikasi IT Terpercaya</div>
                            </div>
                        </div>

                        <!-- Floating Badges (Contained & Responsive) -->
                        <div class="absolute -top-3 left-2 sm:-top-4 sm:-left-4 bg-white dark:bg-slate-800 px-2.5 sm:px-3.5 py-1 sm:py-1.5 rounded-xl sm:rounded-2xl shadow-xl border border-slate-100 dark:border-slate-700 flex items-center gap-1.5 text-[10px] sm:text-xs font-bold text-[#fe6000] anim-logo-top">
                            <span>🎨 Figma UI Design</span>
                        </div>

                        <div class="absolute -top-3 right-2 sm:-top-4 sm:-right-4 bg-white dark:bg-slate-800 px-2.5 sm:px-3.5 py-1 sm:py-1.5 rounded-xl sm:rounded-2xl shadow-xl border border-slate-100 dark:border-slate-700 flex items-center gap-1.5 text-[10px] sm:text-xs font-bold text-pink-600 dark:text-pink-400 anim-logo-bottom">
                            <span>⚡ Web Builder</span>
                        </div>

                        <div class="absolute -bottom-3 right-2 sm:-bottom-4 sm:-right-4 bg-white dark:bg-slate-800 px-2.5 sm:px-3.5 py-1 sm:py-1.5 rounded-xl sm:rounded-2xl shadow-xl border border-slate-100 dark:border-slate-700 flex items-center gap-1.5 text-[10px] sm:text-xs font-bold text-[#3E5CE7] dark:text-blue-400 anim-logo-top">
                            <span>🚀 Laravel & Flutter</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 2: WHAT WE DO (6 Bento Cards with Centered Icon on Mobile & Full Dark Mode) -->
<section class="py-20 bg-[#f8faff] dark:bg-slate-900/50 border-t border-slate-100 dark:border-slate-800 transition-colors duration-300 relative overflow-hidden">
    
    <!-- Background Floating Accents -->
    <div class="absolute top-10 right-10 text-slate-200 dark:text-slate-800 text-xs pointer-events-none select-none tracking-widest anim-logo-bottom">••••••••••••</div>
    <div class="absolute bottom-10 left-10 text-blue-200/40 dark:text-blue-900/20 text-6xl font-black pointer-events-none select-none anim-logo-top">✦</div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 relative z-10">
        
        <!-- Section Title Header -->
        <div class="space-y-2 text-left reveal-on-scroll">
            <div class="flex items-center gap-3">
                <span class="w-8 h-1 bg-[#fe6000] rounded-full"></span>
                <span class="text-sm font-bold tracking-wider uppercase text-[#fe6000]">SERVICE</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#07153f] dark:text-white">What We Do</h2>
            <p class="text-sm sm:text-base text-slate-600 dark:text-slate-300">Solusi komprehensif teknologi informasi, pengembangan software, dan pemasaran digital untuk bisnis Anda.</p>
        </div>

        <!-- 6 Bento Cards Grid (Icons Centered on Mobile, Clean Typography & Border Dark Mode) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            
            <!-- Card 1: Web Development -->
            <div class="bg-white dark:bg-slate-800/90 p-6 sm:p-8 rounded-3xl border border-slate-100 dark:border-slate-700/70 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-5 flex flex-col justify-between group reveal-on-scroll delay-100">
                <div class="space-y-4">
                    <!-- Icon Centered on Mobile (mx-auto sm:mx-0) -->
                    <div class="w-16 h-16 rounded-2xl bg-orange-50 dark:bg-orange-950/50 text-[#fe6000] flex items-center justify-center text-3xl font-bold shadow-inner mx-auto sm:mx-0">
                        💻
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#07153f] dark:text-white group-hover:text-[#3E5CE7] dark:group-hover:text-blue-400 transition-colors text-center sm:text-left">Web Development</h3>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed text-center sm:text-left">
                        Jasa pembuatan website company profile, portal berita instansi, sistem informasi desa & sekolah, hingga web application Laravel.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold pt-2 border-t border-slate-100 dark:border-slate-700">
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Desain Engaging & 100% Mobile Responsive</span></li>
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Panel Admin CMS Mudah Digunakan</span></li>
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Gratis Domain .com & Server SSD Fast</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100 dark:border-slate-700">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-[#3E5CE7] dark:text-blue-400 hover:underline flex items-center justify-center sm:justify-start gap-1">
                        <span>Konsultasi Web Development</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 2: Web Promotion -->
            <div class="bg-white dark:bg-slate-800/90 p-6 sm:p-8 rounded-3xl border border-slate-100 dark:border-slate-700/70 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-5 flex flex-col justify-between group reveal-on-scroll delay-150">
                <div class="space-y-4">
                    <!-- Icon Centered on Mobile (mx-auto sm:mx-0) -->
                    <div class="w-16 h-16 rounded-2xl bg-blue-50 dark:bg-blue-950/50 text-[#3E5CE7] dark:text-blue-400 flex items-center justify-center text-3xl font-bold shadow-inner mx-auto sm:mx-0">
                        🚀
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#07153f] dark:text-white group-hover:text-[#3E5CE7] dark:group-hover:text-blue-400 transition-colors text-center sm:text-left">Web Promotion</h3>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed text-center sm:text-left">
                        Strategi pemasaran digital, SEO optimasi mesin pencari, dan promosi online terukur untuk mempercepat pertumbuhan bisnis Anda.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold pt-2 border-t border-slate-100 dark:border-slate-700">
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Optimasi Kata Kunci Masuk Halaman 1 Google</span></li>
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Audit Kecepatan & Performa Situs</span></li>
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Laporan Analisis Trafik Pengunjung</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100 dark:border-slate-700">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-[#3E5CE7] dark:text-blue-400 hover:underline flex items-center justify-center sm:justify-start gap-1">
                        <span>Konsultasi SEO & Promosi</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 3: Web Maintenance -->
            <div class="bg-white dark:bg-slate-800/90 p-6 sm:p-8 rounded-3xl border border-slate-100 dark:border-slate-700/70 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-5 flex flex-col justify-between group reveal-on-scroll delay-200">
                <div class="space-y-4">
                    <!-- Icon Centered on Mobile (mx-auto sm:mx-0) -->
                    <div class="w-16 h-16 rounded-2xl bg-amber-50 dark:bg-amber-950/50 text-amber-500 flex items-center justify-center text-3xl font-bold shadow-inner mx-auto sm:mx-0">
                        🛠️
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#07153f] dark:text-white group-hover:text-[#3E5CE7] dark:group-hover:text-blue-400 transition-colors text-center sm:text-left">Web Maintenance</h3>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed text-center sm:text-left">
                        Layanan pemeliharaan teknis berkala, keamanan sertifikat SSL, pembaruan server cloud hosting, dan perbaikan bug sistem.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold pt-2 border-t border-slate-100 dark:border-slate-700">
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Backup Rutin Berkala & Anti-Malware</span></li>
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Update Patch Keamanan & Server</span></li>
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Bantuan Teknis Prioritas 24/7</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100 dark:border-slate-700">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-[#3E5CE7] dark:text-blue-400 hover:underline flex items-center justify-center sm:justify-start gap-1">
                        <span>Konsultasi Pemeliharaan</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 4: Social Media Management -->
            <div class="bg-white dark:bg-slate-800/90 p-6 sm:p-8 rounded-3xl border border-slate-100 dark:border-slate-700/70 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-5 flex flex-col justify-between group reveal-on-scroll delay-250">
                <div class="space-y-4">
                    <!-- Icon Centered on Mobile (mx-auto sm:mx-0) -->
                    <div class="w-16 h-16 rounded-2xl bg-pink-50 dark:bg-pink-950/50 text-[#E83E8C] flex items-center justify-center text-3xl font-bold shadow-inner mx-auto sm:mx-0">
                        📱
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#07153f] dark:text-white group-hover:text-[#3E5CE7] dark:group-hover:text-blue-400 transition-colors text-center sm:text-left">Social Media Management</h3>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed text-center sm:text-left">
                        Pengelolaan konten media sosial profesional, desain feed & reels estetik, penulisan caption persuasif, dan kampanye interaktif.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold pt-2 border-t border-slate-100 dark:border-slate-700">
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Desain Visual Grafis & Video Reels</span></li>
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Riset Hashtag & Target Audience</span></li>
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Jadwal Publikasi Konten Konsisten</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100 dark:border-slate-700">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-[#3E5CE7] dark:text-blue-400 hover:underline flex items-center justify-center sm:justify-start gap-1">
                        <span>Konsultasi Sosial Media</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 5: Logo & Visual Branding -->
            <div class="bg-white dark:bg-slate-800/90 p-6 sm:p-8 rounded-3xl border border-slate-100 dark:border-slate-700/70 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-5 flex flex-col justify-between group reveal-on-scroll delay-300">
                <div class="space-y-4">
                    <!-- Icon Centered on Mobile (mx-auto sm:mx-0) -->
                    <div class="w-16 h-16 rounded-2xl bg-emerald-50 dark:bg-emerald-950/50 text-[#20C997] flex items-center justify-center text-3xl font-bold shadow-inner mx-auto sm:mx-0">
                        🎨
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#07153f] dark:text-white group-hover:text-[#3E5CE7] dark:group-hover:text-blue-400 transition-colors text-center sm:text-left">Logo & Visual Branding</h3>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed text-center sm:text-left">
                        Perancangan identitas visual merek, logo vektor modern, brand guidelines profesional, dan perlengkapan stationery bisnis.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold pt-2 border-t border-slate-100 dark:border-slate-700">
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">File Master Vektor (AI, SVG, PDF, PNG)</span></li>
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Panduan Tipografi & Skema Warna</span></li>
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Revisi Desain Fleksibel</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100 dark:border-slate-700">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-[#3E5CE7] dark:text-blue-400 hover:underline flex items-center justify-center sm:justify-start gap-1">
                        <span>Konsultasi Logo & Brand</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 6: Google & Meta Ads -->
            <div class="bg-white dark:bg-slate-800/90 p-6 sm:p-8 rounded-3xl border border-slate-100 dark:border-slate-700/70 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-5 flex flex-col justify-between group reveal-on-scroll delay-350">
                <div class="space-y-4">
                    <!-- Icon Centered on Mobile (mx-auto sm:mx-0) -->
                    <div class="w-16 h-16 rounded-2xl bg-cyan-50 dark:bg-cyan-950/50 text-[#17A2B8] flex items-center justify-center text-3xl font-bold shadow-inner mx-auto sm:mx-0">
                        🎯
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#07153f] dark:text-white group-hover:text-[#3E5CE7] dark:group-hover:text-blue-400 transition-colors text-center sm:text-left">Google & Meta Ads</h3>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed text-center sm:text-left">
                        Kampanye iklan digital berbayar Google Search, YouTube, dan Instagram/Facebook Ads tertarget untuk mendatangkan omset nyata.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold pt-2 border-t border-slate-100 dark:border-slate-700">
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Target Demografi & Minat Akurat</span></li>
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Pelacakan Pixel & Retargeting Leads</span></li>
                        <li class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400">✓ <span class="text-slate-600 dark:text-slate-300">Efisiensi Biaya Iklan Tertinggi (ROAS)</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100 dark:border-slate-700">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-[#3E5CE7] dark:text-blue-400 hover:underline flex items-center justify-center sm:justify-start gap-1">
                        <span>Konsultasi Iklan Ads</span> &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 3: TECH STACK & EKOSISTEM TEKNOLOGI (Compact, Elegant, Full Ecosystem) -->
<section class="py-14 sm:py-16 bg-white dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800 transition-colors duration-300 relative overflow-hidden">
    
    <!-- Watermark "Stack" -->
    <div class="absolute top-4 left-1/2 -translate-x-1/2 text-7xl sm:text-8xl font-black text-slate-100/60 dark:text-slate-800/30 pointer-events-none select-none tracking-wider -z-0">
        Stack
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 relative z-10">
        
        <!-- Header Text (Compact) -->
        <div class="text-center space-y-2 max-w-xl mx-auto reveal-on-scroll">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 dark:bg-blue-950/60 border border-blue-100 dark:border-blue-800/50 text-[#3E5CE7] dark:text-blue-400 text-[11px] font-extrabold uppercase tracking-wider">
                <span>⚡ Ekosistem & Framework</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#07153f] dark:text-white">
                Teknologi yang Kami Gunakan
            </h2>
            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                Standar teknologi modern dan teruji untuk membangun website, mobile app, dan sistem enterprise.
            </p>
        </div>

        <!-- Compact 4-Card Grid Layout with WordPress Included -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- 1. Frontend & UI -->
            <div class="p-4 sm:p-5 rounded-2xl bg-[#f8faff] dark:bg-slate-800/80 border border-slate-100 dark:border-slate-700/80 shadow-xs space-y-3 hover:shadow-md transition-all reveal-on-scroll delay-75">
                <div class="flex items-center gap-2.5">
                    <span class="text-xl">🎨</span>
                    <div>
                        <h3 class="font-extrabold text-xs text-[#07153f] dark:text-white">Frontend & UI</h3>
                        <p class="text-[10px] text-slate-500 dark:text-slate-400">User Interface & Layout</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-1.5 pt-1">
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-orange-600 dark:text-orange-400">HTML5</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-blue-600 dark:text-blue-400">CSS3</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-cyan-600 dark:text-cyan-400">Tailwind</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-yellow-600 dark:text-yellow-400">JavaScript</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-blue-500 dark:text-blue-400">TypeScript</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-emerald-600 dark:text-emerald-400">Vue.js</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-cyan-500 dark:text-cyan-300">React</span>
                </div>
            </div>

            <!-- 2. Backend & CMS (Includes WordPress) -->
            <div class="p-4 sm:p-5 rounded-2xl bg-[#f8faff] dark:bg-slate-800/80 border border-slate-100 dark:border-slate-700/80 shadow-xs space-y-3 hover:shadow-md transition-all reveal-on-scroll delay-100">
                <div class="flex items-center gap-2.5">
                    <span class="text-xl">⚙️</span>
                    <div>
                        <h3 class="font-extrabold text-xs text-[#07153f] dark:text-white">Backend & CMS</h3>
                        <p class="text-[10px] text-slate-500 dark:text-slate-400">Server & Content Engine</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-1.5 pt-1">
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-indigo-600 dark:text-indigo-400">PHP 8.4</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-red-600 dark:text-red-400">Laravel 13</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-orange-600 dark:text-orange-400">CodeIgniter</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-blue-600 dark:text-blue-300">WordPress</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-cyan-700 dark:text-cyan-300">Golang</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-amber-600 dark:text-amber-300">Python</span>
                </div>
            </div>

            <!-- 3. Mobile Apps -->
            <div class="p-4 sm:p-5 rounded-2xl bg-[#f8faff] dark:bg-slate-800/80 border border-slate-100 dark:border-slate-700/80 shadow-xs space-y-3 hover:shadow-md transition-all reveal-on-scroll delay-150">
                <div class="flex items-center gap-2.5">
                    <span class="text-xl">📱</span>
                    <div>
                        <h3 class="font-extrabold text-xs text-[#07153f] dark:text-white">Mobile Apps</h3>
                        <p class="text-[10px] text-slate-500 dark:text-slate-400">Android & iOS Solutions</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-1.5 pt-1">
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-sky-600 dark:text-sky-400">Flutter</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-blue-600 dark:text-blue-400">Dart</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-purple-600 dark:text-purple-400">Kotlin</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-cyan-600 dark:text-cyan-400">React Native</span>
                </div>
            </div>

            <!-- 4. Database & DevOps -->
            <div class="p-4 sm:p-5 rounded-2xl bg-[#f8faff] dark:bg-slate-800/80 border border-slate-100 dark:border-slate-700/80 shadow-xs space-y-3 hover:shadow-md transition-all reveal-on-scroll delay-200">
                <div class="flex items-center gap-2.5">
                    <span class="text-xl">🗄️</span>
                    <div>
                        <h3 class="font-extrabold text-xs text-[#07153f] dark:text-white">Database & Tools</h3>
                        <p class="text-[10px] text-slate-500 dark:text-slate-400">Data Storage & Versioning</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-1.5 pt-1">
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-blue-700 dark:text-blue-300">MySQL</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-blue-600 dark:text-blue-400">PostgreSQL</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-indigo-500 dark:text-indigo-300">SQLite</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-emerald-600 dark:text-emerald-400">NoSQL</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-red-600 dark:text-red-400">Redis</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-slate-800 dark:text-slate-200">Git / GitHub</span>
                    <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-[11px] font-bold text-sky-600 dark:text-sky-400">Docker</span>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- SECTION 4: ABOUT US (FlyMotion Layout with Animated Floating Illustrations) -->
<section class="py-20 bg-[#f8faff] dark:bg-slate-950 border-t border-slate-100 dark:border-slate-800 transition-colors duration-300 relative overflow-hidden">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left reveal-on-scroll">
                <div class="flex items-center justify-center lg:justify-start gap-3">
                    <span class="w-8 h-1 bg-[#3E5CE7] rounded-full"></span>
                    <span class="text-sm font-bold tracking-wider uppercase text-[#3E5CE7]">About us</span>
                </div>
                
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#07153f] dark:text-white leading-tight">
                    We develop digital strategies products and services.
                </h2>
                
                <p class="text-sm sm:text-base text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                    <strong class="text-[#07153f] dark:text-white font-bold">CV. Beranda Teknologi Digital</strong> adalah Digital Creative Agency & Software House terpercaya yang mempunyai pengalaman pembuatan puluhan website bisnis, sistem informasi instansi, dan toko online secara elegan dan profesional. Kami hadir dengan desain website yang mengikuti tren terkini, user friendly, dan mudah dioperasikan.
                </p>

                <div class="pt-2 flex justify-center lg:justify-start">
                    <a href="{{ route('services') }}" class="px-7 py-3.5 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-md inline-flex items-center gap-2 transition-all">
                        <span>Pelajari Selengkapnya</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Right Column: Interactive Illustration Showcase with Floating Shapes -->
            <div class="lg:col-span-5 flex justify-center relative reveal-on-scroll delay-200">
                
                <!-- Floating Decorative Shapes -->
                <div class="absolute -top-6 -left-6 text-[#fe6000] text-3xl font-black anim-logo-top">✦</div>
                <div class="absolute -bottom-6 -right-6 text-[#3E5CE7] text-4xl font-black anim-logo-bottom">~</div>

                <div class="bg-white dark:bg-slate-800 p-5 rounded-3xl border border-slate-100 dark:border-slate-700 shadow-xl max-w-md w-full relative">
                    <div class="aspect-video rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 shadow-xs p-2 flex items-center justify-center">
                        <img src="/images/Ilustrasi-Homepage-1-1.png" alt="Beranda Digital Agency Showcase" class="w-full h-full object-contain" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 5: PRODUCT ("Our Products" with FlyMotion Watermark & Landscape Thumbnails) -->
<section class="py-20 bg-white dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800 transition-colors duration-300 relative overflow-hidden">
    
    <!-- Background Watermark Text "Product" -->
    <div class="absolute top-8 left-8 text-8xl sm:text-9xl font-black text-slate-200/40 dark:text-slate-800/30 pointer-events-none select-none tracking-wider -z-0">
        Product
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 relative z-10">
        
        <div class="space-y-2 text-left reveal-on-scroll">
            <div class="flex items-center gap-3">
                <span class="w-8 h-1 bg-[#fe6000] rounded-full"></span>
                <span class="text-sm font-bold tracking-wider uppercase text-[#fe6000]">Product</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#07153f] dark:text-white">Our Products</h2>
            <p class="text-sm sm:text-base text-slate-600 dark:text-slate-300">Temukan berbagai produk digital berkualitas di sini! Nikmati koleksi kami dan jadikan proyek Anda terlihat trendi dan profesional.</p>
        </div>

        <!-- Featured Projects Showcase Grid (16:9 Landscape Thumbnails) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
            @foreach($featuredProjects as $index => $project)
                <div class="bg-white dark:bg-slate-800/90 rounded-3xl overflow-hidden border border-slate-100 dark:border-slate-700/70 shadow-sm hover:shadow-2xl transition-all duration-300 flex flex-col group reveal-on-scroll delay-{{ ($index + 1) * 100 }}">
                    <div class="aspect-video overflow-hidden relative border-b border-slate-100 dark:border-slate-700 bg-slate-100 dark:bg-slate-900">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 rounded-full bg-blue-50 dark:bg-blue-950/80 text-[#3E5CE7] dark:text-blue-300 font-bold text-[10px] shadow-xs">
                                {{ $project->category?->name ?? 'Proyek Klien' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="text-base font-bold text-[#07153f] dark:text-white group-hover:text-[#3E5CE7] dark:group-hover:text-blue-400 transition-colors line-clamp-1">
                                {{ $project->title }}
                            </h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 line-clamp-2 leading-relaxed">
                                {{ $project->summary }}
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100 dark:border-slate-700 flex items-center justify-between text-xs">
                            <span class="font-bold text-[#3E5CE7] dark:text-blue-400">{{ $project->client_name }}</span>
                            <a href="{{ route('projects.show', $project->slug) }}" class="font-bold text-[#07153f] dark:text-slate-200 hover:text-[#3E5CE7] dark:hover:text-blue-400">
                                Detail &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-left pt-2 reveal-on-scroll">
            <a href="{{ route('projects.index') }}" class="px-7 py-3.5 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-md inline-flex items-center gap-2 transition-all">
                <span>Lihat Katalog Produk</span> &rarr;
            </a>
        </div>
    </div>
</section>

<!-- SECTION 6: CONTACT / INQUIRY & INTERACTIVE ESTIMATOR ("Punya Proyek di pikiran Anda ?") -->
<section id="kalkulator" class="py-20 bg-[#f8faff] dark:bg-slate-950 border-t border-slate-100 dark:border-slate-800 transition-colors duration-300 scroll-mt-20 relative overflow-hidden"
         x-data="{
            baseTier: 3000000,
            tierName: 'Standard Website (Rp 3 Juta)',
            addonPayment: false,
            addonWhatsapp: false,
            addonMultilang: false,
            addonAI: false,

            selectTier(price, name) {
                this.baseTier = price;
                this.tierName = name;
            },

            getTotal() {
                let total = this.baseTier;
                if (this.addonPayment) total += 1000000;
                if (this.addonWhatsapp) total += 1000000;
                if (this.addonMultilang) total += 500000;
                if (this.addonAI) total += 2000000;
                return new Intl.NumberFormat('id-ID').format(total);
            }
         }">
    
    <!-- Background Watermark Text "Client" -->
    <div class="absolute top-10 left-10 text-8xl sm:text-9xl font-black text-slate-200/30 dark:text-slate-800/20 pointer-events-none select-none tracking-wider -z-0">
        Client
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Column: Headline & Explanations -->
            <div class="lg:col-span-5 space-y-6 reveal-on-scroll">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-1 bg-[#fe6000] rounded-full"></span>
                    <span class="text-sm font-bold tracking-wider uppercase text-[#fe6000]">Client / Contact</span>
                </div>
                
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#07153f] dark:text-white leading-tight">
                    Punya Proyek di pikiran Anda ?
                </h2>
                
                <p class="text-sm sm:text-base text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                    Mari kita bicarakan. Tim kami terdiri dari web designer dan web developer professional yang sudah berpengalaman memberikan hasil terbaik. Dengan konsep engaging design untuk hasil website yang optimal untuk bisnis Anda.
                </p>

                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 space-y-3 text-xs font-semibold shadow-sm">
                    <div class="text-emerald-700 dark:text-emerald-400 font-bold flex items-center gap-2">✓ Garansi 100% Proyek Selesai & Teruji</div>
                    <div class="text-[#3E5CE7] dark:text-blue-400 font-bold flex items-center gap-2">✓ Domain .com & Server SSD NVMe (1 Tahun) Included</div>
                    <div class="text-purple-700 dark:text-purple-400 font-bold flex items-center gap-2">✓ Sertifikat SSL Enkripsi & Free Technical Maintenance</div>
                </div>
            </div>

            <!-- Right Column: Interactive Project Cost Estimator Card -->
            <div class="lg:col-span-7 bg-white dark:bg-slate-900 p-6 sm:p-8 rounded-3xl border border-slate-100 dark:border-slate-800 shadow-2xl space-y-6 reveal-on-scroll delay-200">
                
                <div class="border-b border-slate-100 dark:border-slate-800 pb-3 flex items-center justify-between">
                    <h3 class="text-lg sm:text-xl font-extrabold text-[#07153f] dark:text-white">Dapatkan Penawaran & Estimasi Biaya</h3>
                    <span class="px-3 py-1 rounded-full bg-orange-50 dark:bg-orange-950/60 text-[#fe6000] font-bold text-[10px]">Hitung Otomatis</span>
                </div>

                <!-- 1. Tier Selection Buttons (3jt, 5jt, 10juta) -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-[#07153f] dark:text-slate-200">
                        1. Pilih Nominal Skala Proyek Utama:
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <button type="button"
                                @click="selectTier(3000000, 'Standard Website (Rp 3 Juta)')"
                                :class="baseTier === 3000000 ? 'bg-[#fe6000] text-white font-bold shadow-md ring-2 ring-[#fe6000]/50' : 'bg-slate-50 dark:bg-slate-800 text-slate-700 dark:text-slate-200 font-semibold hover:bg-slate-100 dark:hover:bg-slate-700/80'"
                                class="p-3.5 rounded-xl text-left text-xs transition-all border border-slate-200 dark:border-slate-700 flex flex-col justify-between">
                            <div class="text-sm font-extrabold">3 JUTA</div>
                            <span class="text-[10px] opacity-90 block mt-1">Rp 3.000.000</span>
                        </button>

                        <button type="button"
                                @click="selectTier(5000000, 'Advanced Web & System (Rp 5 Juta)')"
                                :class="baseTier === 5000000 ? 'bg-[#fe6000] text-white font-bold shadow-md ring-2 ring-[#fe6000]/50' : 'bg-slate-50 dark:bg-slate-800 text-slate-700 dark:text-slate-200 font-semibold hover:bg-slate-100 dark:hover:bg-slate-700/80'"
                                class="p-3.5 rounded-xl text-left text-xs transition-all border border-slate-200 dark:border-slate-700 flex flex-col justify-between">
                            <div class="text-sm font-extrabold">5 JUTA</div>
                            <span class="text-[10px] opacity-90 block mt-1">Rp 5.000.000</span>
                        </button>

                        <button type="button"
                                @click="selectTier(10000000, 'Enterprise Web, Mobile & AI (Rp 10 Juta)')"
                                :class="baseTier === 10000000 ? 'bg-[#fe6000] text-white font-bold shadow-md ring-2 ring-[#fe6000]/50' : 'bg-slate-50 dark:bg-slate-800 text-slate-700 dark:text-slate-200 font-semibold hover:bg-slate-100 dark:hover:bg-slate-700/80'"
                                class="p-3.5 rounded-xl text-left text-xs transition-all border border-slate-200 dark:border-slate-700 flex flex-col justify-between">
                            <div class="text-sm font-extrabold">10 JUTA</div>
                            <span class="text-[10px] opacity-90 block mt-1">Rp 10.000.000</span>
                        </button>
                    </div>
                </div>

                <!-- Package Specifications Breakdown -->
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/80 border border-slate-100 dark:border-slate-700 text-xs space-y-2">
                    <div class="flex items-center justify-between font-bold text-[#07153f] dark:text-white">
                        <span>Fitur Paket Bawaan:</span>
                        <span x-text="tierName" class="text-[#3E5CE7] dark:text-blue-400"></span>
                    </div>
                    <ul x-show="baseTier === 3000000" class="space-y-1.5 text-[11px] text-slate-600 dark:text-slate-300">
                        <li>✓ Website Landing Page / Company Profile Responsive</li>
                        <li>✓ Domain .com & Server SSD Fast (1 Tahun) + SSL Enkripsi</li>
                        <li>✓ Panel Admin CMS & Free Technical Support 3 Bulan</li>
                    </ul>
                    <ul x-show="baseTier === 5000000" class="space-y-1.5 text-[11px] text-slate-600 dark:text-slate-300">
                        <li>✓ Web App Dinamis Laravel 13 & Database Multi-role</li>
                        <li>✓ System PPDB Sekolah / SIM Desa / E-Commerce + Ekspor Data</li>
                        <li>✓ Garansi Maintenance & Technical Support Prioritas 6 Bulan</li>
                    </ul>
                    <ul x-show="baseTier === 10000000" class="space-y-1.5 text-[11px] text-slate-600 dark:text-slate-300">
                        <li>✓ Fullsuite Enterprise Web App + Mobile Flutter (iOS & Android)</li>
                        <li>✓ Engine AI RAG Privat Pembaca Dokumen SOP Perusahaan</li>
                        <li>✓ Full Source Code, Training Tim, & Support VIP 1 Tahun</li>
                    </ul>
                </div>

                <!-- 2. Add-on Options -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-[#07153f] dark:text-slate-200">
                        2. Fitur Tambahan (Add-ons):
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 text-xs">
                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 cursor-pointer hover:border-orange-400 transition-colors">
                            <span class="flex items-center gap-2 font-semibold text-[#07153f] dark:text-slate-200">
                                <input type="checkbox" x-model="addonPayment" class="rounded text-[#fe6000]">
                                <span>Payment Gateway</span>
                            </span>
                            <span class="mono font-bold text-[#fe6000]">+1 JT</span>
                        </label>

                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 cursor-pointer hover:border-orange-400 transition-colors">
                            <span class="flex items-center gap-2 font-semibold text-[#07153f] dark:text-slate-200">
                                <input type="checkbox" x-model="addonWhatsapp" class="rounded text-[#fe6000]">
                                <span>WA Notification</span>
                            </span>
                            <span class="mono font-bold text-[#fe6000]">+1 JT</span>
                        </label>

                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 cursor-pointer hover:border-orange-400 transition-colors">
                            <span class="flex items-center gap-2 font-semibold text-[#07153f] dark:text-slate-200">
                                <input type="checkbox" x-model="addonMultilang" class="rounded text-[#fe6000]">
                                <span>Multi-Language</span>
                            </span>
                            <span class="mono font-bold text-[#fe6000]">+500 RB</span>
                        </label>

                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 cursor-pointer hover:border-orange-400 transition-colors">
                            <span class="flex items-center gap-2 font-semibold text-[#07153f] dark:text-slate-200">
                                <input type="checkbox" x-model="addonAI" class="rounded text-[#fe6000]">
                                <span>Engine AI RAG</span>
                            </span>
                            <span class="mono font-bold text-purple-600 dark:text-purple-400">+2 JT</span>
                        </label>
                    </div>
                </div>

                <!-- Total Calculated Output & Direct WhatsApp Action -->
                <div class="p-5 rounded-2xl bg-[#07153f] text-white flex flex-col sm:flex-row items-center justify-between gap-4 shadow-xl border border-white/10">
                    <div>
                        <span class="text-[10px] text-slate-300 font-bold block">Total Perkiraan Biaya:</span>
                        <div class="text-2xl sm:text-3xl font-extrabold mono text-white flex items-baseline gap-1">
                            <span class="text-sm text-slate-400">Rp</span>
                            <span x-text="getTotal()" class="text-cyan-300"></span>
                        </div>
                    </div>

                    <a :href="`https://wa.me/6289695249089?text=Halo%20CV.%20Beranda%20Teknologi%20Digital,%20saya%20tertarik%20dengan%20estimasi%20paket%20${encodeURIComponent(tierName)}%20dengan%20total%20perkiraan%20Rp%20${getTotal()}`"
                       target="_blank"
                       class="w-full sm:w-auto px-7 py-4 rounded-xl bg-[#fe6000] hover:bg-[#e05400] text-white font-black text-xs text-center shadow-lg transition-all uppercase tracking-wider border border-orange-400">
                        Kirim Penawaran via WA &rarr;
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- SECTION 7: PERFORMANCE / STATS COUNTER BAND -->
<section class="py-16 bg-white dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800 transition-colors duration-300 relative overflow-hidden">
    
    <!-- Background Animated Graphic -->
    <div class="absolute -top-10 -right-10 w-48 h-48 bg-blue-100/50 dark:bg-blue-950/30 rounded-full blur-2xl pointer-events-none anim-logo-object"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            
            <div class="p-6 rounded-3xl bg-[#f8faff] dark:bg-slate-800 border border-slate-100 dark:border-slate-700 shadow-sm space-y-1 hover:shadow-xl transition-shadow reveal-on-scroll delay-100">
                <div class="text-3xl sm:text-4xl font-extrabold text-[#3E5CE7] dark:text-blue-400 mono">150+</div>
                <div class="text-xs font-bold text-[#07153f] dark:text-slate-200">Happy Clients</div>
            </div>

            <div class="p-6 rounded-3xl bg-[#f8faff] dark:bg-slate-800 border border-slate-100 dark:border-slate-700 shadow-sm space-y-1 hover:shadow-xl transition-shadow reveal-on-scroll delay-150">
                <div class="text-3xl sm:text-4xl font-extrabold text-[#3E5CE7] dark:text-blue-400 mono">99+</div>
                <div class="text-xs font-bold text-[#07153f] dark:text-slate-200">Projects Done</div>
            </div>

            <div class="p-6 rounded-3xl bg-[#f8faff] dark:bg-slate-800 border border-slate-100 dark:border-slate-700 shadow-sm space-y-1 hover:shadow-xl transition-shadow reveal-on-scroll delay-200">
                <div class="text-3xl sm:text-4xl font-extrabold text-[#3E5CE7] dark:text-blue-400 mono">85+</div>
                <div class="text-xs font-bold text-[#07153f] dark:text-slate-200">Top Reviews & Event</div>
            </div>

            <div class="p-6 rounded-3xl bg-[#f8faff] dark:bg-slate-800 border border-slate-100 dark:border-slate-700 shadow-sm space-y-1 hover:shadow-xl transition-shadow reveal-on-scroll delay-250">
                <div class="text-3xl sm:text-4xl font-extrabold text-[#fe6000] mono">10+</div>
                <div class="text-xs font-bold text-[#07153f] dark:text-slate-200">Years Experience</div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 8: CLIENT SECTION (Pure Text Names - No Logos, No Icons) -->
<section class="py-16 bg-[#f8faff] dark:bg-slate-950 overflow-hidden border-t border-slate-100 dark:border-slate-800 marquee-pause relative">
    
    <!-- Watermark "Client" -->
    <div class="absolute top-4 left-1/2 -translate-x-1/2 text-8xl font-black text-slate-100/60 dark:text-slate-800/30 pointer-events-none select-none tracking-wider -z-0">
        Client
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6 text-center relative z-10 reveal-on-scroll">
        
        <h2 class="text-3xl font-extrabold text-[#07153f] dark:text-white">Client & Partner Kami</h2>
        
        <p class="text-xs font-bold uppercase tracking-wider text-[#64748B] dark:text-slate-400 mono">
            Dipercaya Oleh Instansi Pemerintah, Perguruan Tinggi & Perusahaan Mitra
        </p>

        <!-- Marquee Text List (Pure Text Names, Clean Rounded Cards) -->
        <div class="relative w-full overflow-hidden marquee-mask pt-4">
            <div class="marquee-track marquee-medium items-center gap-6 sm:gap-8">
                <div class="h-12 px-6 py-2.5 bg-white dark:bg-slate-800 border border-blue-100 dark:border-slate-700 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] dark:text-slate-200 shadow-xs">
                    Kementerian Komunikasi dan Digital RI (Komdigi RI)
                </div>
                <div class="h-12 px-6 py-2.5 bg-white dark:bg-slate-800 border border-blue-100 dark:border-slate-700 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] dark:text-slate-200 shadow-xs">
                    Politeknik Akamigas Palembang
                </div>
                <div class="h-12 px-6 py-2.5 bg-white dark:bg-slate-800 border border-blue-100 dark:border-slate-700 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] dark:text-slate-200 shadow-xs">
                    SIT Robbani Ogan Ilir
                </div>
                <div class="h-12 px-6 py-2.5 bg-white dark:bg-slate-800 border border-blue-100 dark:border-slate-700 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] dark:text-slate-200 shadow-xs">
                    Pemerintah Desa Senuro Timur Ogan Ilir
                </div>
                <div class="h-12 px-6 py-2.5 bg-white dark:bg-slate-800 border border-blue-100 dark:border-slate-700 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] dark:text-slate-200 shadow-xs">
                    Yayasan Pendidikan Islam Ash-Shaff
                </div>
                <div class="h-12 px-6 py-2.5 bg-white dark:bg-slate-800 border border-blue-100 dark:border-slate-700 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] dark:text-slate-200 shadow-xs">
                    PT. Duta Solusi Rumput Palembang
                </div>
                <div class="h-12 px-6 py-2.5 bg-white dark:bg-slate-800 border border-blue-100 dark:border-slate-700 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] dark:text-slate-200 shadow-xs">
                    Kabar32 News Media
                </div>
                <div class="h-12 px-6 py-2.5 bg-white dark:bg-slate-800 border border-blue-100 dark:border-slate-700 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] dark:text-slate-200 shadow-xs">
                    PT. Heritage Papua Indonesia
                </div>

                <!-- Loop Duplicate for Infinite Loop -->
                <div class="h-12 px-6 py-2.5 bg-white dark:bg-slate-800 border border-blue-100 dark:border-slate-700 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] dark:text-slate-200 shadow-xs">
                    Kementerian Komunikasi dan Digital RI (Komdigi RI)
                </div>
                <div class="h-12 px-6 py-2.5 bg-white dark:bg-slate-800 border border-blue-100 dark:border-slate-700 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] dark:text-slate-200 shadow-xs">
                    Politeknik Akamigas Palembang
                </div>
                <div class="h-12 px-6 py-2.5 bg-white dark:bg-slate-800 border border-blue-100 dark:border-slate-700 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] dark:text-slate-200 shadow-xs">
                    SIT Robbani Ogan Ilir
                </div>
                <div class="h-12 px-6 py-2.5 bg-white dark:bg-slate-800 border border-blue-100 dark:border-slate-700 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] dark:text-slate-200 shadow-xs">
                    Pemerintah Desa Senuro Timur Ogan Ilir
                </div>
            </div>
        </div>

    </div>
</section>

<!-- SECTION 9: WORKSHOP & WEBINAR GALLERY (Exact File 2 Square Grid with Filtering) -->
<section class="py-20 bg-white dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800 transition-colors duration-300 relative overflow-hidden"
         x-data="{ 
            activeTab: 'all',
            items: [
                { 
                    id: 1, 
                    title: 'Insight Talks Bersama Komdigi RI & Media Indonesia', 
                    category: 'webinar', 
                    image: '/images/Insight-Talks-Komdigi.jpeg', 
                    tag: 'Webinar Nasional',
                    organizer: 'Komdigi RI & Media Indonesia'
                },
                { 
                    id: 2, 
                    title: 'The Era of Vibe Coding: AI Pembelajaran & Manajemen Informasi', 
                    category: 'pelatihan', 
                    image: '/images/631476506_1210308331315502_7735877304621369529_n.jpg', 
                    tag: 'Pelatihan Dosen IT',
                    organizer: 'Politeknik Akamigas Palembang'
                },
                { 
                    id: 3, 
                    title: 'Lecturer Development Program: Pembuatan Aplikasi AI Tanpa Coding', 
                    category: 'pelatihan', 
                    image: '/images/626271180_17940187239113665_1282635413631214268_n.jpg', 
                    tag: 'Pelatihan Dosen',
                    organizer: 'Politeknik Akamigas Palembang'
                },
                { 
                    id: 4, 
                    title: 'Pelatihan Coding & AI Tenaga Pendidik SD & SMP OKU Timur', 
                    category: 'pelatihan', 
                    image: '/images/545410148_1090108853335451_8582489098678183559_n.jpg', 
                    tag: 'Pelatihan Guru',
                    organizer: 'Dinas Pendidikan OKU Timur'
                },
                { 
                    id: 5, 
                    title: 'Pelatihan Coding & AI Optimalisasi SDM SIT Robbani', 
                    category: 'pelatihan', 
                    image: '/images/561378805_1119891467023856_3474954454940095689_n.jpg', 
                    tag: 'Pelatihan Guru',
                    organizer: 'SIT Robbani Ogan Ilir'
                },
                { 
                    id: 6, 
                    title: 'Workshop Online: Menciptakan Chatbot AI dengan Python', 
                    category: 'webinar', 
                    image: '/images/486603910_961047622908242_7404185485069841584_n.jpg', 
                    tag: 'Workshop Online 32 JP',
                    organizer: 'IGI Kab. Ogan Ilir'
                },
                { 
                    id: 7, 
                    title: 'Online Training of Trainer: Coding for Kids IGI Ogan Ilir', 
                    category: 'webinar', 
                    image: '/images/485185738_958093913203613_4067422706425259653_n.jpg', 
                    tag: 'Online Training 32 JP',
                    organizer: 'IGI Kab. Ogan Ilir'
                },
                { 
                    id: 8, 
                    title: 'Pelatihan Website & Aplikasi Administrasi Surat Desa Senuro Timur', 
                    category: 'pelatihan', 
                    image: '/images/495965916_995856726093998_1582227333173346053_n.jpg', 
                    tag: 'Digitalisasi Desa',
                    organizer: 'Pemdes Senuro Timur'
                },
                { 
                    id: 9, 
                    title: 'Augmented Reality for Education: Pembuatan Media Pembelajaran AR', 
                    category: 'pelatihan', 
                    image: '/images/Flyer-AR-New-1-scaled.jpg', 
                    tag: 'Workshop AR',
                    organizer: 'Ralenta Learning Center'
                },
                { 
                    id: 10, 
                    title: 'Pelatihan Coding for Kids: Belajar Koding Mudah & Menyenangkan', 
                    category: 'pelatihan', 
                    image: '/images/FlyerCoding-for-Kids2023-scaled.jpg', 
                    tag: 'Coding for Kids',
                    organizer: 'Ralenta Learning Center'
                },
                { 
                    id: 11, 
                    title: 'Training for Trainer Coding for Kids Guru SIT Robbani', 
                    category: 'pelatihan', 
                    image: '/images/Flyer-Coding-for-Kids-3.png', 
                    tag: 'ToT Guru Sekolah',
                    organizer: 'SIT Robbani Ogan Ilir'
                }
            ]
         }">
    
    <!-- Watermark Background -->
    <div class="absolute top-6 left-1/2 -translate-x-1/2 text-8xl sm:text-9xl font-black text-slate-200/30 dark:text-slate-800/30 pointer-events-none select-none tracking-wider -z-0">
        Gallery
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 relative z-10">
        
        <!-- Header Text (Centered Style matching File 2) -->
        <div class="text-center space-y-2 reveal-on-scroll">
            <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-[#3E5CE7] dark:text-blue-400">
                <span>—</span>
                <span>Berita & Dokumentasi Terbaru</span>
                <span>—</span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#07153f] dark:text-white">
                Workshop dan Webinar Kami
            </h2>
            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 max-w-xl mx-auto font-medium">
                Dokumentasi kegiatan pelatihan teknologi, coding, workshop kecerdasan buatan (AI), dan seminar digital yang telah kami selenggarakan.
            </p>
        </div>

        <!-- Filter Tabs (ALL / PELATIHAN / WEBINAR) -->
        <div class="flex items-center justify-center gap-2 sm:gap-3 reveal-on-scroll delay-100">
            <button type="button"
                    @click="activeTab = 'all'"
                    :class="activeTab === 'all' ? 'bg-[#3E5CE7] text-white shadow-md' : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 border border-slate-200 dark:border-slate-700'"
                    class="px-5 py-2 rounded-full text-xs font-bold tracking-wider uppercase transition-all">
                ALL
            </button>
            <button type="button"
                    @click="activeTab = 'pelatihan'"
                    :class="activeTab === 'pelatihan' ? 'bg-[#3E5CE7] text-white shadow-md' : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 border border-slate-200 dark:border-slate-700'"
                    class="px-5 py-2 rounded-full text-xs font-bold tracking-wider uppercase transition-all">
                PELATIHAN
            </button>
            <button type="button"
                    @click="activeTab = 'webinar'"
                    :class="activeTab === 'webinar' ? 'bg-[#3E5CE7] text-white shadow-md' : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 border border-slate-200 dark:border-slate-700'"
                    class="px-5 py-2 rounded-full text-xs font-bold tracking-wider uppercase transition-all">
                WEBINAR
            </button>
        </div>

        <!-- 3-Column Square Grid Layout (Exact File 2 Aspect-Ratio) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 pt-4">
            <template x-for="(item, idx) in items" :key="item.id">
                <div x-show="activeTab === 'all' || activeTab === item.category"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden border border-slate-200/80 dark:border-slate-700 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 group flex flex-col reveal-on-scroll">
                    
                    <!-- Square Poster Box (1:1 Ratio) -->
                    <div class="aspect-square relative overflow-hidden bg-slate-900 flex items-center justify-center">
                        <img :src="item.image" 
                             :alt="item.title" 
                             class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" 
                             loading="lazy" />
                        
                        <!-- Top Category Badge Overlay -->
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 rounded-full bg-[#07153f]/90 backdrop-blur-md text-white font-bold text-[10px] shadow-sm tracking-wide"
                                  x-text="item.tag">
                            </span>
                        </div>
                    </div>

                    <!-- Caption & Details -->
                    <div class="p-4 space-y-1.5 flex-grow flex flex-col justify-between">
                        <h3 class="text-xs sm:text-sm font-bold text-[#07153f] dark:text-slate-100 line-clamp-2 group-hover:text-[#3E5CE7] dark:group-hover:text-blue-400 transition-colors"
                            x-text="item.title">
                        </h3>
                        <div class="pt-2 border-t border-slate-100 dark:border-slate-700 flex items-center justify-between text-[11px] font-semibold text-[#3E5CE7] dark:text-blue-400">
                            <span>CV. Beranda Teknologi Digital</span>
                            <span class="text-xs">&rarr;</span>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <!-- Direct CTA to Trainer Page -->
        <div class="text-center pt-6 reveal-on-scroll">
            <a href="{{ route('trainer.index') }}" class="px-8 py-3.5 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider shadow-lg hover:shadow-blue-600/30 transition-all inline-flex items-center gap-2">
                <span>Lihat Seluruh Galeri & Workshop</span> &rarr;
            </a>
        </div>

    </div>
</section>

<!-- SECTION 10: LET'S WORK TOGETHER (Ultra High-Contrast Solid Deep Navy Banner with Crystal Clear Text) -->
<section class="py-16 bg-[#f8faff] dark:bg-slate-950 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-[#07153f] dark:bg-[#060e24] p-8 sm:p-14 lg:p-16 text-center text-white space-y-6 shadow-2xl border-2 border-blue-600/40 relative overflow-hidden reveal-on-scroll">
            
            <div class="space-y-3 relative z-10">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-blue-500/20 border border-blue-400/40 text-cyan-300 text-xs font-bold uppercase tracking-wider">
                    <span>⚡ Transformasi Digital Terpercaya</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight drop-shadow-md">
                    Let's Work Together
                </h2>
            </div>
            
            <p class="text-white text-sm sm:text-base md:text-lg leading-relaxed max-w-2xl mx-auto font-medium drop-shadow-md opacity-100">
                Revolusi Teknologi mengubah aspek kehidupan kita, dan struktur masyarakat itu sendiri. Itu juga mengubah cara kita belajar dan apa yang kita pelajari. Konsultasikan rencana pembuatan website perusahaan, aplikasi mobile Flutter, sistem informasi, atau pelatihan IT bersama CV. Beranda Teknologi Digital.
            </p>
            
            <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 relative z-10">
                <a href="https://wa.me/6289695249089" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-to-r from-[#fe6000] to-[#ff7a29] hover:from-[#e05400] hover:to-[#fe6000] text-white font-black text-xs sm:text-sm uppercase tracking-wider shadow-2xl shadow-orange-500/50 hover:scale-105 active:scale-95 transition-all inline-flex items-center justify-center gap-2 border border-orange-400">
                    <span>💬 Hubungi Tim Kami (WhatsApp)</span> &rarr;
                </a>
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-7 py-4 rounded-xl bg-white hover:bg-slate-100 text-[#07153f] font-extrabold text-xs sm:text-sm uppercase tracking-wider shadow-lg hover:scale-105 active:scale-95 transition-all inline-flex items-center justify-center">
                    <span>Kalkulator Estimasi Biaya</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
