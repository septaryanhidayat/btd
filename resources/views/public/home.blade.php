@extends('layouts.app')

@section('title', 'CV. Beranda Teknologi Digital - Software House, Mobile App & AI Digital Agency')

@section('content')
<!-- SECTION 1: HERO HEADER (FlyMotion Dynamic Style with Rich Animated Elements & SVG Orbs) -->
<section class="relative pt-12 pb-20 lg:pt-16 lg:pb-28 overflow-hidden bg-flymotion-hero transition-colors duration-300">
    
    <!-- Organic Background Wave & Animated SVG Elements -->
    <div class="absolute -top-24 -right-24 w-[600px] h-[600px] bg-gradient-to-br from-blue-200/40 via-indigo-100/30 to-orange-100/30 rounded-full blur-3xl pointer-events-none anim-logo-object"></div>
    <div class="absolute top-1/2 -left-20 w-80 h-80 bg-orange-100/50 rounded-full blur-3xl pointer-events-none anim-logo-bottom"></div>
    
    <!-- Floating Decorative Dotted Grids & Shapes -->
    <div class="absolute top-12 left-10 text-slate-300 text-xs pointer-events-none select-none tracking-widest anim-logo-top">••••••••••••••••</div>
    <div class="absolute bottom-20 left-1/3 text-[#fe6000]/40 text-4xl font-black pointer-events-none select-none anim-logo-bottom">~</div>
    <div class="absolute top-20 right-20 text-[#3E5CE7]/30 text-5xl font-black pointer-events-none select-none anim-shape-rotate">✦</div>

    <!-- Multi-colored SVG Dot Grid (FlyMotion Signature) -->
    <div class="absolute top-10 right-1/3 opacity-20 pointer-events-none anim-logo-top">
        <svg width="120" height="120" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="3" fill="#3E5CE7"/>
            <circle cx="30" cy="10" r="3" fill="#FE6000"/>
            <circle cx="50" cy="10" r="3" fill="#E83E8C"/>
            <circle cx="70" cy="10" r="3" fill="#20C997"/>
            <circle cx="90" cy="10" r="3" fill="#3E5CE7"/>
            <circle cx="10" cy="30" r="3" fill="#FE6000"/>
            <circle cx="30" cy="30" r="3" fill="#3E5CE7"/>
            <circle cx="50" cy="30" r="3" fill="#20C997"/>
            <circle cx="70" cy="30" r="3" fill="#FE6000"/>
            <circle cx="90" cy="30" r="3" fill="#E83E8C"/>
            <circle cx="10" cy="50" r="3" fill="#20C997"/>
            <circle cx="30" cy="50" r="3" fill="#E83E8C"/>
            <circle cx="50" cy="50" r="3" fill="#3E5CE7"/>
            <circle cx="70" cy="50" r="3" fill="#20C997"/>
            <circle cx="90" cy="50" r="3" fill="#FE6000"/>
            <circle cx="10" cy="70" r="3" fill="#E83E8C"/>
            <circle cx="30" cy="70" r="3" fill="#FE6000"/>
            <circle cx="50" cy="70" r="3" fill="#20C997"/>
            <circle cx="70" cy="70" r="3" fill="#3E5CE7"/>
            <circle cx="90" cy="70" r="3" fill="#E83E8C"/>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Typography & FlyMotion Action Buttons -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <!-- Subtitle / Tagline Badge -->
                <div class="flex items-center justify-center lg:justify-start gap-3">
                    <span class="w-8 h-1 bg-[#fe6000] rounded-full"></span>
                    <span class="text-xs sm:text-sm font-bold tracking-wider uppercase text-[#fe6000]">
                        Jasa Web Design & Software House
                    </span>
                </div>

                <!-- Main Dynamic Headline -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-[#07153f] leading-[1.15]">
                    Jasa Pembuatan <br class="hidden sm:inline" />
                    <span class="text-[#3E5CE7]">Website Perusahaan</span>
                </h1>

                <!-- Subtitle Description -->
                <p class="text-base sm:text-lg text-[#4a4a4a] max-w-xl leading-relaxed font-normal">
                    CV. Beranda Teknologi Digital adalah Digital Creative Agency & Software House terpercaya di Indonesia. Kami menghadirkan <strong class="text-[#07153f] font-bold">Website Enterprise</strong>, <strong class="text-[#07153f] font-bold">Aplikasi Mobile Flutter</strong>, <strong class="text-[#07153f] font-bold">Engine AI Privat</strong>, dan <strong class="text-[#07153f] font-bold">Pelatihan IT Profesional</strong>.
                </p>

                <!-- Dual FlyMotion CTA Buttons -->
                <div class="pt-2 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                    <a href="#kalkulator" class="px-8 py-4 rounded-md bg-[#fe6000] hover:bg-[#e05400] text-white font-bold text-xs sm:text-sm uppercase tracking-wider shadow-lg hover:shadow-orange-500/30 transition-all flex items-center gap-2">
                        <span>KONSULTASI SEKARANG</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="{{ route('projects.index') }}" class="px-8 py-4 rounded-md bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs sm:text-sm uppercase tracking-wider shadow-lg hover:shadow-blue-600/30 transition-all">
                        <span>PORTOFOLIO</span>
                    </a>
                    <a href="https://wa.me/6289695249089" target="_blank" class="px-6 py-4 rounded-md border-2 border-emerald-500 text-emerald-700 font-bold text-xs hover:bg-emerald-50 transition-all flex items-center gap-2 bg-white/80">
                        <span>💬 WA: 0896 9524 9089</span>
                    </a>
                </div>

                <!-- Feature Mini Badges -->
                <div class="pt-3 flex flex-wrap items-center justify-center lg:justify-start gap-2.5 text-xs text-[#64748B] font-medium">
                    <span class="px-3 py-1.5 rounded-md bg-white border border-slate-200 shadow-xs">⚡ Laravel 13 & PHP 8.4</span>
                    <span class="px-3 py-1.5 rounded-md bg-white border border-slate-200 shadow-xs">📱 Flutter iOS & Android</span>
                    <span class="px-3 py-1.5 rounded-md bg-white border border-slate-200 shadow-xs">🤖 Private AI RAG System</span>
                    <span class="px-3 py-1.5 rounded-md bg-white border border-slate-200 shadow-xs">🚀 Free Domain & Fast Server</span>
                </div>
            </div>

            <!-- Right Column: FlyMotion Hero Person Showcase with Multi-layer Animation -->
            <div class="lg:col-span-5 flex justify-center relative">
                <div class="relative w-full max-w-md">
                    
                    <!-- Background Ambient Disk -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-300/40 via-purple-200/30 to-orange-200/40 rounded-full blur-2xl opacity-80 anim-logo-object"></div>
                    
                    <!-- Hero Person Card Container -->
                    <div class="relative bg-white/90 backdrop-blur-md rounded-3xl p-5 sm:p-6 shadow-2xl border border-slate-100">
                        
                        <!-- Top Mini Browser Bar -->
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 text-xs mb-4">
                            <div class="flex items-center gap-1.5">
                                <span class="w-3 h-3 rounded-full bg-rose-400"></span>
                                <span class="w-3 h-3 rounded-full bg-amber-400"></span>
                                <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                                <span class="font-bold text-[#07153f] ml-2 text-[11px]">berandadigital.net</span>
                            </div>
                            <span class="px-2.5 py-0.5 rounded-full bg-blue-50 text-[#3E5CE7] font-bold text-[10px]">Official Agency</span>
                        </div>

                        <!-- Hero Image from XML Backup -->
                        <div class="relative rounded-2xl overflow-hidden bg-gradient-to-b from-blue-50 via-slate-50 to-indigo-50/60 p-3 border border-slate-100 flex items-center justify-center">
                            <img src="/images/hero-person-old.png" alt="CV. Beranda Teknologi Digital Hero" class="w-full h-auto object-contain drop-shadow-2xl hover:scale-105 transition-transform duration-500" />
                            
                            <!-- Bottom Verified Badge -->
                            <div class="absolute bottom-3 left-3 right-3 p-3 rounded-xl bg-[#07153f]/90 backdrop-blur-md text-white text-xs space-y-0.5 shadow-xl">
                                <div class="flex items-center justify-between text-[10px]">
                                    <span class="text-amber-400 font-bold">★ Garansi 100% Selesai</span>
                                    <span class="text-cyan-300">Palembang & Ogan Ilir</span>
                                </div>
                                <div class="font-bold text-white text-xs">Jasa Website & Aplikasi IT Terpercaya</div>
                            </div>
                        </div>

                        <!-- Floating Badges with FlyMotion Smooth Physics Animations -->
                        <div class="absolute -top-4 -left-4 bg-white px-4 py-2 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-2 text-xs font-bold text-[#fe6000] anim-logo-top">
                            <span>🎨 Figma UI Design</span>
                        </div>

                        <div class="absolute -top-4 -right-4 bg-white px-4 py-2 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-2 text-xs font-bold text-pink-600 anim-logo-bottom">
                            <span>⚡ Elementor & Web Builder</span>
                        </div>

                        <div class="absolute -bottom-4 -right-4 bg-white px-4 py-2 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-2 text-xs font-bold text-[#3E5CE7] anim-logo-top">
                            <span>🚀 Laravel 13 & Flutter</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 2: WHAT WE DO (FlyMotion 6-Card Bento Grid with Pastel Icons & Background Dots) -->
<section class="py-20 bg-[#f8faff] border-t border-slate-100 transition-colors duration-300 relative overflow-hidden">
    
    <!-- Background Floating Accents -->
    <div class="absolute top-10 right-10 text-slate-200 text-xs pointer-events-none select-none tracking-widest anim-logo-bottom">••••••••••••</div>
    <div class="absolute bottom-10 left-10 text-blue-200/50 text-6xl font-black pointer-events-none select-none anim-logo-top">✦</div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 relative z-10">
        
        <!-- Section Title Header -->
        <div class="space-y-2 text-left">
            <div class="flex items-center gap-3">
                <span class="w-8 h-1 bg-[#fe6000] rounded-full"></span>
                <span class="text-sm font-bold tracking-wider uppercase text-[#fe6000]">SERVICE</span>
            </div>
            <h2 class="text-4xl font-extrabold text-[#07153f]">What We Do</h2>
            <p class="text-base text-[#4a4a4a]">Solusi komprehensif teknologi informasi, pengembangan software, dan pemasaran digital untuk bisnis Anda.</p>
        </div>

        <!-- 6 Bento Cards Grid (Pastel Icons & High Contrast Clean Cards - No Long Screencaptures) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card 1: Web Development -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-5 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-16 h-16 rounded-2xl bg-orange-50 text-[#fe6000] flex items-center justify-center text-3xl font-bold shadow-inner">
                        💻
                    </div>
                    <h3 class="text-2xl font-bold text-[#07153f] group-hover:text-[#3E5CE7] transition-colors">Web Development</h3>
                    <p class="text-sm text-[#4a4a4a] leading-relaxed">
                        Jasa pembuatan website company profile, portal berita instansi, sistem informasi desa & sekolah, hingga web application Laravel.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold text-[#07153f] pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Desain Engaging & 100% Mobile Responsive</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Panel Admin CMS Mudah Digunakan</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Gratis Domain .com & Server SSD Fast</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-[#3E5CE7] hover:underline flex items-center gap-1">
                        <span>Konsultasi Web Development</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 2: Web Promotion -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-5 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-16 h-16 rounded-2xl bg-blue-50 text-[#3E5CE7] flex items-center justify-center text-3xl font-bold shadow-inner">
                        🚀
                    </div>
                    <h3 class="text-2xl font-bold text-[#07153f] group-hover:text-[#3E5CE7] transition-colors">Web Promotion</h3>
                    <p class="text-sm text-[#4a4a4a] leading-relaxed">
                        Strategi pemasaran digital, SEO optimasi mesin pencari, dan promosi online terukur untuk mempercepat pertumbuhan bisnis Anda.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold text-[#07153f] pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Optimasi Kata Kunci Masuk Halaman 1 Google</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Audit Kecepatan & Performa Situs</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Laporan Analisis Trafik Pengunjung</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-[#3E5CE7] hover:underline flex items-center gap-1">
                        <span>Konsultasi SEO & Promosi</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 3: Web Maintenance -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-5 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-16 h-16 rounded-2xl bg-amber-50 text-amber-500 flex items-center justify-center text-3xl font-bold shadow-inner">
                        🛠️
                    </div>
                    <h3 class="text-2xl font-bold text-[#07153f] group-hover:text-[#3E5CE7] transition-colors">Web Maintenance</h3>
                    <p class="text-sm text-[#4a4a4a] leading-relaxed">
                        Layanan pemeliharaan teknis berkala, keamanan sertifikat SSL, pembaruan server cloud hosting, dan perbaikan bug sistem.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold text-[#07153f] pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Backup Rutin Berkala & Anti-Malware</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Update Patch Keamanan & Server</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Bantuan Teknis Prioritas 24/7</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-[#3E5CE7] hover:underline flex items-center gap-1">
                        <span>Konsultasi Pemeliharaan</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 4: Social Media Management -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-5 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-16 h-16 rounded-2xl bg-pink-50 text-[#E83E8C] flex items-center justify-center text-3xl font-bold shadow-inner">
                        📱
                    </div>
                    <h3 class="text-2xl font-bold text-[#07153f] group-hover:text-[#3E5CE7] transition-colors">Social Media Management</h3>
                    <p class="text-sm text-[#4a4a4a] leading-relaxed">
                        Pengelolaan konten media sosial profesional, desain feed & reels estetik, penulisan caption persuasif, dan kampanye interaktif.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold text-[#07153f] pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Desain Visual Grafis & Video Reels</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Riset Hashtag & Target Audience</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Jadwal Publikasi Konten Konsisten</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-[#3E5CE7] hover:underline flex items-center gap-1">
                        <span>Konsultasi Sosial Media</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 5: Logo & Visual Branding -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-5 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-16 h-16 rounded-2xl bg-emerald-50 text-[#20C997] flex items-center justify-center text-3xl font-bold shadow-inner">
                        🎨
                    </div>
                    <h3 class="text-2xl font-bold text-[#07153f] group-hover:text-[#3E5CE7] transition-colors">Logo & Visual Branding</h3>
                    <p class="text-sm text-[#4a4a4a] leading-relaxed">
                        Perancangan identitas visual merek, logo vektor modern, brand guidelines profesional, dan perlengkapan stationery bisnis.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold text-[#07153f] pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">File Master Vektor (AI, SVG, PDF, PNG)</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Panduan Tipografi & Skema Warna</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Revisi Desain Fleksibel</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-[#3E5CE7] hover:underline flex items-center gap-1">
                        <span>Konsultasi Logo & Brand</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 6: Google & Meta Ads -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-5 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-16 h-16 rounded-2xl bg-cyan-50 text-[#17A2B8] flex items-center justify-center text-3xl font-bold shadow-inner">
                        🎯
                    </div>
                    <h3 class="text-2xl font-bold text-[#07153f] group-hover:text-[#3E5CE7] transition-colors">Google & Meta Ads</h3>
                    <p class="text-sm text-[#4a4a4a] leading-relaxed">
                        Kampanye iklan digital berbayar Google Search, YouTube, dan Instagram/Facebook Ads tertarget untuk mendatangkan omset nyata.
                    </p>
                    <ul class="space-y-2 text-xs font-semibold text-[#07153f] pt-2 border-t border-slate-100">
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Target Demografi & Minat Akurat</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Pelacakan Pixel & Retargeting Leads</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-[#4a4a4a]">Efisiensi Biaya Iklan Tertinggi (ROAS)</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-100">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-[#3E5CE7] hover:underline flex items-center gap-1">
                        <span>Konsultasi Iklan Ads</span> &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 3: ABOUT US (FlyMotion Layout with Animated Floating Illustrations) -->
<section class="py-20 bg-white border-t border-slate-100 transition-colors duration-300 relative overflow-hidden">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-7 space-y-6">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-1 bg-[#3E5CE7] rounded-full"></span>
                    <span class="text-sm font-bold tracking-wider uppercase text-[#3E5CE7]">About us</span>
                </div>
                
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#07153f] leading-tight">
                    We develop digital strategies products and services.
                </h2>
                
                <p class="text-base text-[#4a4a4a] leading-relaxed">
                    <strong class="text-[#07153f] font-bold">CV. Beranda Teknologi Digital</strong> adalah Digital Creative Agency & Software House terpercaya yang mempunyai pengalaman pembuatan puluhan website bisnis, sistem informasi instansi, dan toko online secara elegan dan profesional. Kami hadir dengan desain website yang mengikuti tren terkini, user friendly, dan mudah dioperasikan.
                </p>

                <div class="pt-2">
                    <a href="{{ route('services') }}" class="px-7 py-3.5 rounded-md bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-md inline-flex items-center gap-2 transition-all">
                        <span>Learn More</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Right Column: Interactive Illustration Showcase with Floating Shapes -->
            <div class="lg:col-span-5 flex justify-center relative">
                
                <!-- Floating Decorative Shapes -->
                <div class="absolute -top-6 -left-6 text-[#fe6000] text-3xl font-black anim-logo-top">✦</div>
                <div class="absolute -bottom-6 -right-6 text-[#3E5CE7] text-4xl font-black anim-logo-bottom">~</div>

                <div class="bg-[#f8faff] p-5 rounded-3xl border border-slate-100 shadow-xl max-w-md w-full relative">
                    <div class="aspect-video rounded-2xl overflow-hidden border border-slate-100 bg-white shadow-xs p-2 flex items-center justify-center">
                        <img src="/images/Ilustrasi-Homepage-1-1.png" alt="Beranda Digital Agency Showcase" class="w-full h-full object-contain" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 4: PRODUCT ("Our Products" with FlyMotion Watermark & Landscape Thumbnails) -->
<section class="py-20 bg-flymotion-soft border-t border-slate-100 transition-colors duration-300 relative overflow-hidden">
    
    <!-- Background Watermark Text "Product" -->
    <div class="absolute top-8 left-8 text-8xl sm:text-9xl font-black text-slate-200/40 pointer-events-none select-none tracking-wider -z-0">
        Product
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 relative z-10">
        
        <div class="space-y-2 text-left">
            <div class="flex items-center gap-3">
                <span class="w-8 h-1 bg-[#fe6000] rounded-full"></span>
                <span class="text-sm font-bold tracking-wider uppercase text-[#fe6000]">Product</span>
            </div>
            <h2 class="text-4xl font-extrabold text-[#07153f]">Our Products</h2>
            <p class="text-base text-[#4a4a4a]">Temukan berbagai produk digital berkualitas di sini! Nikmati koleksi kami dan jadikan proyek Anda terlihat trendi dan profesional.</p>
        </div>

        <!-- Featured Projects Showcase Grid (16:9 Landscape Thumbnails) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-300 flex flex-col group">
                    <div class="aspect-video overflow-hidden relative border-b border-slate-100 bg-slate-100">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 rounded-full bg-blue-50 text-[#3E5CE7] font-bold text-[10px]">
                                {{ $project->category?->name ?? 'Proyek Klien' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="text-base font-bold text-[#07153f] group-hover:text-[#3E5CE7] transition-colors line-clamp-1">
                                {{ $project->title }}
                            </h3>
                            <p class="text-xs text-[#4a4a4a] line-clamp-2 leading-relaxed">
                                {{ $project->summary }}
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="font-bold text-[#3E5CE7]">{{ $project->client_name }}</span>
                            <a href="{{ route('projects.show', $project->slug) }}" class="font-bold text-[#07153f] hover:text-[#3E5CE7]">
                                Detail &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-left pt-2">
            <a href="{{ route('projects.index') }}" class="px-7 py-3.5 rounded-md bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-md inline-flex items-center gap-2 transition-all">
                <span>Lihat Katalog Produk</span> &rarr;
            </a>
        </div>
    </div>
</section>

<!-- SECTION 5: CONTACT / INQUIRY & INTERACTIVE ESTIMATOR ("Punya Proyek di pikiran Anda ?") -->
<section id="kalkulator" class="py-20 bg-white border-t border-slate-100 transition-colors duration-300 scroll-mt-20 relative overflow-hidden"
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
    <div class="absolute top-10 left-10 text-8xl sm:text-9xl font-black text-slate-200/30 pointer-events-none select-none tracking-wider -z-0">
        Client
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Column: Headline & Explanations -->
            <div class="lg:col-span-5 space-y-6">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-1 bg-[#fe6000] rounded-full"></span>
                    <span class="text-sm font-bold tracking-wider uppercase text-[#fe6000]">Client / Contact</span>
                </div>
                
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#07153f] leading-tight">
                    Punya Proyek di pikiran Anda ?
                </h2>
                
                <p class="text-base text-[#4a4a4a] leading-relaxed">
                    Mari kita bicarakan. Tim kami terdiri dari web designer dan web developer professional yang sudah berpengalaman memberikan hasil terbaik. Dengan konsep engaging design untuk hasil website yang optimal untuk bisnis Anda.
                </p>

                <div class="p-6 rounded-2xl bg-[#f8faff] border border-slate-100 space-y-3 text-xs font-semibold">
                    <div class="text-emerald-700 font-bold flex items-center gap-2">✓ Garansi 100% Proyek Selesai & Teruji</div>
                    <div class="text-[#3E5CE7] font-bold flex items-center gap-2">✓ Domain .com & Server SSD NVMe (1 Tahun) Included</div>
                    <div class="text-purple-700 font-bold flex items-center gap-2">✓ Sertifikat SSL Enkripsi & Free Technical Maintenance</div>
                </div>
            </div>

            <!-- Right Column: Interactive Project Cost Estimator Card -->
            <div class="lg:col-span-7 bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-2xl space-y-6">
                
                <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                    <h3 class="text-xl font-extrabold text-[#07153f]">Dapatkan Penawaran & Estimasi Biaya</h3>
                    <span class="px-3 py-1 rounded-full bg-orange-50 text-[#fe6000] font-bold text-[10px]">Hitung Otomatis</span>
                </div>

                <!-- 1. Tier Selection Buttons (3jt, 5jt, 10juta) -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-[#07153f]">
                        1. Pilih Nominal Skala Proyek Utama:
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <button type="button"
                                @click="selectTier(3000000, 'Standard Website (Rp 3 Juta)')"
                                :class="baseTier === 3000000 ? 'bg-[#fe6000] text-white font-bold shadow-md ring-2 ring-[#fe6000]/50' : 'bg-slate-50 text-slate-700 font-semibold hover:bg-slate-100'"
                                class="p-3.5 rounded-xl text-left text-xs transition-all border border-slate-200 flex flex-col justify-between">
                            <div class="text-sm font-extrabold">3 JUTA</div>
                            <span class="text-[10px] opacity-90 block mt-1">Rp 3.000.000</span>
                        </button>

                        <button type="button"
                                @click="selectTier(5000000, 'Advanced Web & System (Rp 5 Juta)')"
                                :class="baseTier === 5000000 ? 'bg-[#fe6000] text-white font-bold shadow-md ring-2 ring-[#fe6000]/50' : 'bg-slate-50 text-slate-700 font-semibold hover:bg-slate-100'"
                                class="p-3.5 rounded-xl text-left text-xs transition-all border border-slate-200 flex flex-col justify-between">
                            <div class="text-sm font-extrabold">5 JUTA</div>
                            <span class="text-[10px] opacity-90 block mt-1">Rp 5.000.000</span>
                        </button>

                        <button type="button"
                                @click="selectTier(10000000, 'Enterprise Web, Mobile & AI (Rp 10 Juta)')"
                                :class="baseTier === 10000000 ? 'bg-[#fe6000] text-white font-bold shadow-md ring-2 ring-[#fe6000]/50' : 'bg-slate-50 text-slate-700 font-semibold hover:bg-slate-100'"
                                class="p-3.5 rounded-xl text-left text-xs transition-all border border-slate-200 flex flex-col justify-between">
                            <div class="text-sm font-extrabold">10 JUTA</div>
                            <span class="text-[10px] opacity-90 block mt-1">Rp 10.000.000</span>
                        </button>
                    </div>
                </div>

                <!-- Package Specifications Breakdown -->
                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 text-xs space-y-2">
                    <div class="flex items-center justify-between font-bold text-[#07153f]">
                        <span>Fitur Paket Bawaan:</span>
                        <span x-text="tierName" class="text-[#3E5CE7]"></span>
                    </div>
                    <ul x-show="baseTier === 3000000" class="space-y-1.5 text-[11px] text-[#4a4a4a]">
                        <li>✓ Website Landing Page / Company Profile Responsive</li>
                        <li>✓ Domain .com & Server SSD Fast (1 Tahun) + SSL Enkripsi</li>
                        <li>✓ Panel Admin CMS & Free Technical Support 3 Bulan</li>
                    </ul>
                    <ul x-show="baseTier === 5000000" class="space-y-1.5 text-[11px] text-[#4a4a4a]">
                        <li>✓ Web App Dinamis Laravel 13 & Database Multi-role</li>
                        <li>✓ System PPDB Sekolah / SIM Desa / E-Commerce + Ekspor Data</li>
                        <li>✓ Garansi Maintenance & Technical Support Prioritas 6 Bulan</li>
                    </ul>
                    <ul x-show="baseTier === 10000000" class="space-y-1.5 text-[11px] text-[#4a4a4a]">
                        <li>✓ Fullsuite Enterprise Web App + Mobile Flutter (iOS & Android)</li>
                        <li>✓ Engine AI RAG Privat Pembaca Dokumen SOP Perusahaan</li>
                        <li>✓ Full Source Code, Training Tim, & Support VIP 1 Tahun</li>
                    </ul>
                </div>

                <!-- 2. Add-on Options -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-[#07153f]">
                        2. Fitur Tambahan (Add-ons):
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 text-xs">
                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200 cursor-pointer">
                            <span class="flex items-center gap-2 font-semibold text-[#07153f]">
                                <input type="checkbox" x-model="addonPayment" class="rounded text-[#fe6000]">
                                <span>Payment Gateway</span>
                            </span>
                            <span class="mono font-bold text-[#fe6000]">+1 JT</span>
                        </label>

                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200 cursor-pointer">
                            <span class="flex items-center gap-2 font-semibold text-[#07153f]">
                                <input type="checkbox" x-model="addonWhatsapp" class="rounded text-[#fe6000]">
                                <span>WA Notification</span>
                            </span>
                            <span class="mono font-bold text-[#fe6000]">+1 JT</span>
                        </label>

                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200 cursor-pointer">
                            <span class="flex items-center gap-2 font-semibold text-[#07153f]">
                                <input type="checkbox" x-model="addonMultilang" class="rounded text-[#fe6000]">
                                <span>Multi-Language</span>
                            </span>
                            <span class="mono font-bold text-[#fe6000]">+500 RB</span>
                        </label>

                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200 cursor-pointer">
                            <span class="flex items-center gap-2 font-semibold text-[#07153f]">
                                <input type="checkbox" x-model="addonAI" class="rounded text-[#fe6000]">
                                <span>Engine AI RAG</span>
                            </span>
                            <span class="mono font-bold text-purple-600">+2 JT</span>
                        </label>
                    </div>
                </div>

                <!-- Total Calculated Output & Direct WhatsApp Action -->
                <div class="p-5 rounded-2xl bg-[#07153f] text-white flex flex-col sm:flex-row items-center justify-between gap-4 shadow-xl">
                    <div>
                        <span class="text-[10px] text-slate-300 font-bold block">Total Perkiraan Biaya:</span>
                        <div class="text-2xl sm:text-3xl font-extrabold mono text-white flex items-baseline gap-1">
                            <span class="text-sm text-slate-400">Rp</span>
                            <span x-text="getTotal()" class="text-cyan-300"></span>
                        </div>
                    </div>

                    <a :href="`https://wa.me/6289695249089?text=Halo%20CV.%20Beranda%20Teknologi%20Digital,%20saya%20tertarik%20dengan%20estimasi%20paket%20${encodeURIComponent(tierName)}%20dengan%20total%20perkiraan%20Rp%20${getTotal()}`"
                       target="_blank"
                       class="w-full sm:w-auto px-7 py-4 rounded-md bg-[#fe6000] hover:bg-[#e05400] text-white font-bold text-xs text-center shadow-lg transition-all uppercase tracking-wider">
                        Send / Kunci Penawaran via WA &rarr;
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- SECTION 6: PERFORMANCE / STATS COUNTER BAND -->
<section class="py-16 bg-[#f8faff] border-t border-slate-100 transition-colors duration-300 relative overflow-hidden">
    
    <!-- Background Animated Graphic -->
    <div class="absolute -top-10 -right-10 w-48 h-48 bg-blue-100/50 rounded-full blur-2xl pointer-events-none anim-logo-object"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            
            <div class="p-6 rounded-3xl bg-white border border-slate-100 shadow-sm space-y-1 hover:shadow-xl transition-shadow">
                <div class="text-3xl sm:text-4xl font-extrabold text-[#3E5CE7] mono">150+</div>
                <div class="text-xs font-bold text-[#07153f]">Happy Clients</div>
            </div>

            <div class="p-6 rounded-3xl bg-white border border-slate-100 shadow-sm space-y-1 hover:shadow-xl transition-shadow">
                <div class="text-3xl sm:text-4xl font-extrabold text-[#3E5CE7] mono">99+</div>
                <div class="text-xs font-bold text-[#07153f]">Projects Done</div>
            </div>

            <div class="p-6 rounded-3xl bg-white border border-slate-100 shadow-sm space-y-1 hover:shadow-xl transition-shadow">
                <div class="text-3xl sm:text-4xl font-extrabold text-[#3E5CE7] mono">85+</div>
                <div class="text-xs font-bold text-[#07153f]">Top Reviews & Event</div>
            </div>

            <div class="p-6 rounded-3xl bg-white border border-slate-100 shadow-sm space-y-1 hover:shadow-xl transition-shadow">
                <div class="text-3xl sm:text-4xl font-extrabold text-[#fe6000] mono">10+</div>
                <div class="text-xs font-bold text-[#07153f]">Years Experience</div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 7: CLIENT SECTION (Pure Text Names - No Logos, No Icons) -->
<section class="py-16 bg-white overflow-hidden border-t border-slate-100 marquee-pause relative">
    
    <!-- Watermark "Client" -->
    <div class="absolute top-4 left-1/2 -translate-x-1/2 text-8xl font-black text-slate-100/60 pointer-events-none select-none tracking-wider -z-0">
        Client
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6 text-center relative z-10">
        
        <h2 class="text-3xl font-extrabold text-[#07153f]">Client & Partner Kami</h2>
        
        <p class="text-xs font-bold uppercase tracking-wider text-[#64748B] mono">
            Dipercaya Oleh Instansi Pemerintah, Perguruan Tinggi & Perusahaan Mitra
        </p>

        <!-- Marquee Text List (Pure Text Names, Clean Rounded Cards) -->
        <div class="relative w-full overflow-hidden marquee-mask pt-4">
            <div class="marquee-track marquee-medium items-center gap-6 sm:gap-8">
                <div class="h-12 px-6 py-2.5 bg-[#f8faff] border border-blue-100 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    Kementerian Komunikasi dan Digital RI (Komdigi RI)
                </div>
                <div class="h-12 px-6 py-2.5 bg-[#f8faff] border border-blue-100 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    Politeknik Akamigas Palembang
                </div>
                <div class="h-12 px-6 py-2.5 bg-[#f8faff] border border-blue-100 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    SIT Robbani Ogan Ilir
                </div>
                <div class="h-12 px-6 py-2.5 bg-[#f8faff] border border-blue-100 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    Pemerintah Desa Senuro Timur Ogan Ilir
                </div>
                <div class="h-12 px-6 py-2.5 bg-[#f8faff] border border-blue-100 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    Yayasan Pendidikan Islam Ash-Shaff
                </div>
                <div class="h-12 px-6 py-2.5 bg-[#f8faff] border border-blue-100 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    PT. Duta Solusi Rumput Palembang
                </div>
                <div class="h-12 px-6 py-2.5 bg-[#f8faff] border border-blue-100 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    Kabar32 News Media
                </div>
                <div class="h-12 px-6 py-2.5 bg-[#f8faff] border border-blue-100 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    PT. Heritage Papua Indonesia
                </div>

                <!-- Loop Duplicate for Infinite Loop -->
                <div class="h-12 px-6 py-2.5 bg-[#f8faff] border border-blue-100 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    Kementerian Komunikasi dan Digital RI (Komdigi RI)
                </div>
                <div class="h-12 px-6 py-2.5 bg-[#f8faff] border border-blue-100 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    Politeknik Akamigas Palembang
                </div>
                <div class="h-12 px-6 py-2.5 bg-[#f8faff] border border-blue-100 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    SIT Robbani Ogan Ilir
                </div>
                <div class="h-12 px-6 py-2.5 bg-[#f8faff] border border-blue-100 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    Pemerintah Desa Senuro Timur Ogan Ilir
                </div>
            </div>
        </div>

    </div>
</section>

<!-- SECTION 8: LET'S WORK TOGETHER (FlyMotion Blue Gradient Banner with Corner Effects) -->
<section class="py-16 bg-white transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-gradient-to-r from-[#3E5CE7] to-[#2A45C8] p-10 sm:p-16 text-center text-white space-y-6 shadow-2xl relative overflow-hidden">
            
            <!-- Corner Decorative Glows -->
            <div class="absolute -top-12 -left-12 w-40 h-40 bg-white/10 rounded-full blur-xl pointer-events-none"></div>
            <div class="absolute -bottom-12 -right-12 w-40 h-40 bg-white/10 rounded-full blur-xl pointer-events-none"></div>

            <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                Let's Work Together
            </h2>
            
            <p class="text-blue-100 text-xs sm:text-base leading-relaxed max-w-2xl mx-auto font-normal">
                Revolusi Teknologi mengubah aspek kehidupan kita, dan struktur masyarakat itu sendiri. itu juga mengubah cara kita belajar dan apa yang kita pelajari. Konsultasikan rencana pembuatan website, aplikasi mobile Flutter, sistem informasi, atau pelatihan IT bersama CV. Beranda Teknologi Digital.
            </p>
            
            <div class="pt-4">
                <a href="https://wa.me/6289695249089" target="_blank" class="px-8 py-4 rounded-md bg-white hover:bg-slate-100 text-[#3E5CE7] font-bold text-xs sm:text-sm shadow-xl inline-flex items-center gap-2 transition-all">
                    <span>Contact Me</span> &rarr;
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
