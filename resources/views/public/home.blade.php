@extends('layouts.app')

@section('title', 'CV. Beranda Teknologi Digital - Startup Software House, Mobile App & AI')

@section('content')
<!-- Hero Section (Futuristic 3D Parallax & Light/Dark Mode) -->
<section x-data="{ mouseX: 0, mouseY: 0 }" 
         @mousemove="mouseX = ($event.clientX - window.innerWidth/2) / 25; mouseY = ($event.clientY - window.innerHeight/2) / 25"
         class="relative pt-12 pb-24 lg:pt-20 lg:pb-36 overflow-hidden bg-grid-pattern">
    
    <!-- Ambient Radial Mesh Glows -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-gradient-to-tr from-blue-400/20 via-indigo-500/20 to-cyan-300/30 dark:from-blue-600/20 dark:via-indigo-600/20 dark:to-cyan-500/20 blur-[140px] rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Headline & Interactive Badges -->
            <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                
                <!-- Status Badge -->
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bento-card text-xs font-bold text-slate-800 dark:text-slate-200 shadow-xs cursor-default">
                    <span class="inline-flex items-center justify-center w-2.5 h-2.5 rounded-full bg-emerald-500 animate-ping"></span>
                    <span>CV. Beranda Teknologi Digital &bull; Startup Agency & Training Center</span>
                </div>

                <!-- 2026 Main Headline -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-[1.1] font-heading">
                    Membangun Masa Depan <br class="hidden sm:inline" />
                    <span class="gradient-text-accent">Software & AI Enterprise</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-base sm:text-xl text-slate-600 dark:text-slate-300 max-w-2xl leading-relaxed font-normal">
                    Mitra transformasi digital penyedia <strong class="text-slate-900 dark:text-white font-bold">Jasa Pembuatan Website, Aplikasi Mobile Android/iOS, Engine AI Privat</strong>, dan <strong class="text-slate-900 dark:text-white font-bold">Pelatihan/Workshop IT Profesional</strong>.
                </p>

                <!-- Action CTA Buttons -->
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-extrabold text-sm shadow-xl shadow-indigo-600/25 hover:scale-105 transition-all flex items-center justify-center gap-2">
                        <span>Mulai Proyek Digital Anda</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="https://wa.me/6289695249089" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-full bg-white dark:bg-slate-900 text-slate-900 dark:text-white border border-slate-200/90 dark:border-slate-800 font-bold text-sm shadow-xs hover:bg-slate-50 transition-all flex items-center justify-center gap-2">
                        <span>Konsultasi WA (0896 9524 9089)</span>
                    </a>
                </div>

                <!-- Internal Media Capability Pills -->
                <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-3 text-xs text-slate-600 dark:text-slate-400 font-mono">
                    <span class="px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xs font-semibold">Laravel 13 & PHP 8.4</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xs font-semibold">Flutter Mobile iOS/Android</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xs font-semibold">Dual DB SQLite / MySQL</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xs font-semibold">Python RAG & Vibe Coding</span>
                </div>
            </div>

            <!-- Right Column: Interactive 3D Parallax Canvas Card Showcase -->
            <div class="lg:col-span-5 flex justify-center parallax-container">
                <div class="relative w-full max-w-lg parallax-layer"
                     :style="`transform: rotateY(${mouseX}deg) rotateX(${-mouseY}deg);`">
                    
                    <!-- Glow Behind -->
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 rounded-3xl opacity-30 blur-2xl"></div>

                    <!-- Futuristic Window Frame featuring internal asset /images/home12-01.png -->
                    <div class="relative bento-card p-4 shadow-2xl bg-white dark:bg-slate-900 border-2 border-slate-200/90 dark:border-slate-700">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800 text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-red-500"></span>
                                <span class="w-3 h-3 rounded-full bg-amber-500"></span>
                                <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                                <span class="font-mono text-slate-500 text-[11px] ml-2">berandadigital.net &bull; Internal Assets</span>
                            </div>
                        </div>

                        <div class="mt-3 aspect-4/3 rounded-2xl overflow-hidden relative shadow-inner bg-slate-100 dark:bg-slate-950">
                            <img src="/images/home12-01.png" alt="Beranda Digital Hero Showcase" class="w-full h-full object-cover" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                            
                            <div class="absolute bottom-4 left-4 right-4 text-white space-y-1">
                                <span class="px-2.5 py-1 rounded-md bg-indigo-600 font-mono text-[10px] uppercase font-extrabold tracking-wider">
                                    Internal Image Asset
                                </span>
                                <h4 class="text-sm font-bold">Showcase Software & Mobile System</h4>
                                <p class="text-[11px] text-slate-300">CV. Beranda Teknologi Digital &bull; Palembang & Ogan Ilir</p>
                            </div>
                        </div>

                        <!-- Floating Badges Parallax Effect -->
                        <div class="absolute -top-6 -right-6 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 p-3 rounded-2xl shadow-xl flex items-center gap-2 font-mono text-xs font-bold text-indigo-600 dark:text-indigo-400 parallax-float">
                            <span>⚡ Fast 100% Performance</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Authentic Partners Trust Bar -->
<section class="py-10 bg-white dark:bg-slate-900 border-y border-slate-200/80 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-xs font-bold uppercase tracking-widest text-slate-600 dark:text-slate-400 mb-6">
            Mitra & Instansi Kerja Sama Beranda Teknologi Digital
        </p>
        <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12 font-bold text-xs sm:text-sm text-slate-700 dark:text-slate-300">
            <span class="flex items-center gap-2">🏛️ Kementerian Komdigi RI</span>
            <span class="flex items-center gap-2">📰 Media Indonesia</span>
            <span class="flex items-center gap-2">🎓 Politeknik Akamigas Palembang</span>
            <span class="flex items-center gap-2">🏫 Dinas Pendidikan OKU Timur</span>
            <span class="flex items-center gap-2">👨‍🏫 IGI Ogan Ilir</span>
            <span class="flex items-center gap-2">🏛️ Desa Senuro Timur</span>
        </div>
    </div>
</section>

<!-- Bento Grid Services Section (Light / Dark Mode) -->
<section class="py-24 bg-[#FAFAFC] dark:bg-[#080C14]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="px-4 py-1.5 rounded-full bg-indigo-50 dark:bg-indigo-950/60 text-indigo-700 dark:text-indigo-400 font-extrabold text-xs uppercase tracking-wider">
                Layanan & Kapabilitas Digital
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 dark:text-white font-heading">
                Ekosistem Solusi Software & Training
            </h2>
            <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base">Arsitektur sistem berkinerja tinggi yang dirancang untuk kebutuhan bisnis Anda.</p>
        </div>

        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Bento 1: Web App Enterprise (With Internal Image /images/img_feature_Home-D7A5C7J.jpg) -->
            <div class="md:col-span-2 bento-card p-8 sm:p-10 flex flex-col justify-between group overflow-hidden relative">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-400 text-xs font-bold">
                        <span>Web Development Enterprise</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">Website, System Information & Portal Digital</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed max-w-xl">
                        Pengembangan Website Perusahaan, Portal Desa Digital Senuro Timur, Sistem Sekolah PPDB Online, dan Web Application dengan performa tinggi berbasis Laravel 13 & Tailwind v4.
                    </p>
                </div>
                <div class="pt-8 flex items-center justify-between border-t border-slate-100 dark:border-slate-800">
                    <span class="text-xs font-bold text-slate-500 dark:text-slate-400">Tech: Laravel 13, PHP 8.4, SQLite/MySQL</span>
                    <a href="{{ route('services') }}" class="text-xs font-bold text-indigo-600 dark:text-indigo-400 hover:underline flex items-center gap-1">
                        <span>Pelajari Detail</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Bento 2: Mobile App (With Internal Image /images/img_feature_Home-R9HYAS8.jpg) -->
            <div class="bento-card p-8 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-50 dark:bg-cyan-950/60 text-cyan-700 dark:text-cyan-400 text-xs font-bold">
                        <span>Mobile Cross-Platform</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Aplikasi Android & iOS (Flutter)</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                        Aplikasi mobile native & Flutter cepat terintegrasi REST API backend, push notification, dan peta lokasi.
                    </p>
                </div>
                <div class="pt-6">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-cyan-600 dark:text-cyan-400 hover:underline">Lihat Layanan Mobile &rarr;</a>
                </div>
            </div>

            <!-- Bento 3: AI Solutions (With Internal Image /images/img_feature_Home-GND7RS3.jpg) -->
            <div class="bento-card p-8 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-50 dark:bg-purple-950/60 text-purple-700 dark:text-purple-400 text-xs font-bold">
                        <span>Artificial Intelligence</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Chatbot AI RAG Privat & Vibe Coding</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                        Engine AI privat untuk membaca dokumen SOP internal perusahaan tanpa ketergantungan API pihak ketiga.
                    </p>
                </div>
                <div class="pt-6">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-purple-600 dark:text-purple-400 hover:underline">Pelajari Engine AI &rarr;</a>
                </div>
            </div>

            <!-- Bento 4: Corporate Training (With Internal Image /images/img_team_Home-6TECTXE.jpg) -->
            <div class="md:col-span-2 bento-card p-8 sm:p-10 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-50 dark:bg-amber-950/60 text-amber-800 dark:text-amber-300 text-xs font-bold">
                        <span>Corporate Workshop & Keynote Speaker</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">Pelatihan IT, Training for Trainer & Speaker Event</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed max-w-xl">
                        Diselenggarakan oleh Direktur Utama <strong class="text-slate-900 dark:text-white font-bold">Septa Ryan Hidayat, S.Kom</strong> (Narasumber Komdigi, Akamigas Palembang, & Dinas Pendidikan). Pelatihan Vibe Coding, AI RAG, & Pembelajaran Koding.
                    </p>
                </div>
                <div class="pt-8 flex items-center justify-between border-t border-slate-100 dark:border-slate-800">
                    <span class="text-xs font-bold text-slate-500 dark:text-slate-400">Narasumber: Septa Ryan Hidayat, S.Kom</span>
                    <a href="{{ route('trainer.index') }}" class="text-xs font-bold text-amber-600 dark:text-amber-400 hover:underline flex items-center gap-1">
                        <span>Profil Speaker & Galeri Event</span> &rarr;
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Internal Media Asset Portfolio Showcase -->
<section class="py-24 bg-white dark:bg-slate-900 border-y border-slate-200/80 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div class="space-y-2">
                <span class="text-xs font-extrabold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Portofolio Software</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white font-heading">Proyek Yang Telah Selesai Dikembangkan</h2>
            </div>
            <a href="{{ route('projects.index') }}" class="text-sm font-bold text-indigo-600 dark:text-indigo-400 hover:underline">
                Lihat Semua Portofolio Klien &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
                <div class="bento-card overflow-hidden flex flex-col group">
                    <div class="aspect-video overflow-hidden bg-slate-100 dark:bg-slate-950 relative">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 rounded-full bg-slate-900/90 text-white text-[11px] font-bold shadow-md">
                                {{ $project->category?->name ?? 'Proyek Klien' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors line-clamp-1">
                                {{ $project->title }}
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400 text-xs line-clamp-2 leading-relaxed">
                                {{ $project->summary }}
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between text-xs">
                            <span class="font-bold text-indigo-600 dark:text-indigo-400">{{ $project->client_name }}</span>
                            <a href="{{ route('projects.show', $project->slug) }}" class="font-bold text-slate-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-400">
                                Detail &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Founder Profile & Internal Event Photo Gallery -->
<section class="py-24 bg-[#FAFAFC] dark:bg-[#080C14]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Direktur Utama Profile Card -->
        <div class="bento-card p-8 sm:p-14 relative overflow-hidden bg-white dark:bg-slate-900 shadow-xl border border-slate-200/90 dark:border-slate-800">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-4 flex justify-center">
                    <div class="relative">
                        <div class="w-56 h-56 sm:w-64 sm:h-64 rounded-3xl overflow-hidden shadow-2xl border-4 border-white dark:border-slate-800">
                            <img src="{{ $trainerAvatar }}" alt="{{ $trainerName }}" class="w-full h-full object-cover" />
                        </div>
                        <div class="absolute -bottom-3 -right-3 bg-amber-500 text-slate-950 font-extrabold text-xs px-4 py-2 rounded-2xl shadow-xl">
                            ★ Founder & Direktur Utama
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 space-y-5 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-50 dark:bg-amber-950/60 text-amber-800 dark:text-amber-300 text-xs font-bold">
                        <span>Pimpinan Perusahaan & Trainer Nasional</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white font-heading">
                        {{ $trainerName }}
                    </h2>

                    <p class="text-indigo-600 dark:text-indigo-400 font-bold text-sm sm:text-base">
                        {{ $trainerTitle }}
                    </p>

                    <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed max-w-2xl">
                        {{ $trainerBio }}
                    </p>

                    <div class="pt-2 flex flex-wrap justify-center lg:justify-start gap-3">
                        <a href="{{ route('trainer.index') }}" class="px-6 py-3 rounded-full bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold text-xs shadow-md transition-all">
                            Undang Trainer / Seminar &rarr;
                        </a>
                        <a href="https://wa.me/6289695249089" target="_blank" class="px-6 py-3 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white font-bold text-xs transition-all">
                            Hubungi via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Real Event Photo Gallery (Internal Image Assets) -->
        <div class="space-y-8">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Dokumentasi Acara</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white font-heading">Galeri Foto Seminar & Workshop</h3>
                </div>
                <a href="{{ route('trainer.index') }}" class="text-xs font-bold text-indigo-600 dark:text-indigo-400 hover:underline">Lihat Galeri Lengkap &rarr;</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($galleries as $gallery)
                    <div class="bento-card overflow-hidden group">
                        <div class="aspect-4/3 overflow-hidden relative">
                            <img src="{{ $gallery->image_path }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                            
                            <div class="absolute bottom-3 left-3 right-3 text-white space-y-1">
                                <span class="text-[10px] uppercase font-extrabold tracking-wider px-2 py-0.5 rounded bg-indigo-600">
                                    {{ $gallery->category }}
                                </span>
                                <h4 class="text-xs font-bold line-clamp-1">{{ $gallery->title }}</h4>
                                <p class="text-[10px] text-slate-300 line-clamp-1">📍 {{ $gallery->location }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-20 bg-white dark:bg-slate-900 border-t border-slate-200/80 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-slate-900 dark:bg-slate-950 p-8 sm:p-14 text-white text-center shadow-2xl relative overflow-hidden">
            <div class="max-w-3xl mx-auto space-y-6 relative z-10">
                <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight font-heading">
                    Siap Memulai Proyek Digital Anda?
                </h2>
                <p class="text-slate-300 text-xs sm:text-base leading-relaxed font-normal">
                    Konsultasikan pembuatan website, aplikasi Android/iOS, sistem informasi, atau pelatihan IT bersama tim profesional <strong class="text-white font-bold">CV. Beranda Teknologi Digital</strong>.
                </p>
                <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-extrabold text-xs sm:text-sm shadow-xl hover:scale-105 transition-all">
                        Kalkulator Estimasi Biaya (Hitung Otomatis)
                    </a>
                    <a href="https://wa.me/6289695249089" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-full bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold text-xs sm:text-sm shadow-xl flex items-center justify-center gap-2 transition-all">
                        <span>Chat WhatsApp (0896 9524 9089)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
