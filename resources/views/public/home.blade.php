@extends('layouts.app')

@section('title', 'CV. Beranda Teknologi Digital - Startup Software House, Mobile App & AI')

@section('content')
<!-- Hero Section (2026 High-Tech Light Mode Mesh Background) -->
<section class="relative pt-12 pb-20 lg:pt-20 lg:pb-32 overflow-hidden bg-grid-pattern">
    <!-- Glowing Soft Radial Mesh (Subtle & Crisp Light Mode) -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-tr from-blue-300/30 via-indigo-400/20 to-cyan-300/30 blur-[130px] rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto space-y-8">
            
            <!-- Live Status Pill Badge -->
            <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full badge-pill text-xs font-bold text-slate-800 shadow-xs cursor-default">
                <span class="inline-flex items-center justify-center w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                <span>CV. Beranda Teknologi Digital &bull; Startup Software House 2026</span>
            </div>

            <!-- Main High-Impact Title -->
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-slate-900 tracking-tight leading-[1.1] font-heading">
                Akselerasi Bisnis Anda Dengan <br class="hidden sm:inline" />
                <span class="gradient-text-accent">Software & AI Solution Modern</span>
            </h1>

            <!-- Subtitle -->
            <p class="text-base sm:text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed font-normal">
                Mitra teknologi tepercaya penyedia <strong class="text-slate-900 font-bold">Jasa Pembuatan Website Enterprise, Aplikasi Mobile Android & iOS, Engine AI Privat</strong>, serta <strong class="text-slate-900 font-bold">Pelatihan & Keynote Speaker IT</strong>.
            </p>

            <!-- CTA Action Buttons -->
            <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-extrabold text-sm shadow-lg shadow-indigo-600/25 hover:scale-105 transition-all flex items-center justify-center gap-2">
                    <span>Mulai Proyek Digital Anda</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
                <a href="https://wa.me/6289695249089" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-full bg-white hover:bg-slate-50 text-slate-900 border border-slate-200/90 font-bold text-sm shadow-xs transition-all flex items-center justify-center gap-2">
                    <span>Konsultasi WA (0896 9524 9089)</span>
                </a>
            </div>

            <!-- Tech Stack Capability Pills -->
            <div class="pt-6 flex flex-wrap items-center justify-center gap-3 text-xs text-slate-600 font-mono">
                <span class="px-3.5 py-1.5 rounded-full bg-white border border-slate-200 shadow-xs font-semibold">Laravel 13 & PHP 8.4</span>
                <span class="px-3.5 py-1.5 rounded-full bg-white border border-slate-200 shadow-xs font-semibold">Flutter Android & iOS</span>
                <span class="px-3.5 py-1.5 rounded-full bg-white border border-slate-200 shadow-xs font-semibold">Dual DB SQLite / MySQL</span>
                <span class="px-3.5 py-1.5 rounded-full bg-white border border-slate-200 shadow-xs font-semibold">Python RAG & Vibe Coding</span>
            </div>
        </div>

        <!-- 2026 Interactive Hero Dashboard Frame Preview -->
        <div class="mt-16 max-w-5xl mx-auto">
            <div class="rounded-3xl bento-card p-3 sm:p-4 shadow-2xl relative overflow-hidden bg-slate-900 text-white">
                <!-- Browser Bar -->
                <div class="flex items-center justify-between pb-3 px-3 border-b border-slate-800 text-xs">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-red-500"></span>
                        <span class="w-3 h-3 rounded-full bg-amber-500"></span>
                        <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                        <span class="ml-2 font-mono text-slate-400 text-[11px]">https://berandadigital.net &bull; High-Tech Ecosystem</span>
                    </div>
                    <div class="flex items-center gap-2 text-emerald-400 font-mono text-[11px] font-bold">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Status System: 100% Operational
                    </div>
                </div>

                <!-- Inner Grid Graphic -->
                <div class="p-6 sm:p-10 grid grid-cols-1 md:grid-cols-3 gap-6 bg-slate-950/60 rounded-2xl mt-3">
                    <div class="bg-slate-900 border border-slate-800 p-5 rounded-xl space-y-3">
                        <div class="text-xs text-indigo-400 font-bold uppercase tracking-wider">01 / Website Enterprise</div>
                        <h4 class="text-lg font-bold text-white">Portal Desa & School Digital</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">Sistem informasi administrasi terpadu dengan otentikasi QR code & cetak surat otomatis.</p>
                    </div>
                    <div class="bg-slate-900 border border-slate-800 p-5 rounded-xl space-y-3">
                        <div class="text-xs text-cyan-400 font-bold uppercase tracking-wider">02 / Mobile App</div>
                        <h4 class="text-lg font-bold text-white">Flutter Cross-Platform</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">Aplikasi Android & iOS cepat terhubung dengan REST API backend Laravel 13.</p>
                    </div>
                    <div class="bg-slate-900 border border-slate-800 p-5 rounded-xl space-y-3">
                        <div class="text-xs text-purple-400 font-bold uppercase tracking-wider">03 / AI Privat Engine</div>
                        <h4 class="text-lg font-bold text-white">RAG Document & Chatbot</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">Analisis dokumen SOP perusahaan secara privat tanpa ketergantungan API luar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trusted Partners & Client Logo Bar -->
<section class="py-10 bg-white border-y border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-xs font-bold uppercase tracking-widest text-slate-600 mb-6">
            Mitra & Instansi Yang Bekerja Sama Dengan Beranda Teknologi Digital
        </p>
        <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12 opacity-85">
            <span class="text-slate-700 font-bold text-xs sm:text-sm">Kementerian Komdigi RI</span>
            <span class="text-slate-700 font-bold text-xs sm:text-sm">Media Indonesia</span>
            <span class="text-slate-700 font-bold text-xs sm:text-sm">Politeknik Akamigas Palembang</span>
            <span class="text-slate-700 font-bold text-xs sm:text-sm">Dinas Pendidikan OKU Timur</span>
            <span class="text-slate-700 font-bold text-xs sm:text-sm">IGI Ogan Ilir</span>
            <span class="text-slate-700 font-bold text-xs sm:text-sm">SIT Robbani</span>
            <span class="text-slate-700 font-bold text-xs sm:text-sm">Pemerintah Desa Senuro Timur</span>
        </div>
    </div>
</section>

<!-- 2026 Bento Grid Services & Capabilities -->
<section class="py-24 bg-[#FAFAFC]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="px-4 py-1.5 rounded-full bg-indigo-50 text-indigo-700 font-extrabold text-xs uppercase tracking-wider">
                Layanan & Kapabilitas Digital
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 font-heading">
                Ekosistem Solusi Software & Training
            </h2>
            <p class="text-slate-600 text-sm sm:text-base">Arsitektur sistem berkinerja tinggi yang dirancang untuk skala bisnis Anda.</p>
        </div>

        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Bento 1: Large Span Web App -->
            <div class="md:col-span-2 bento-card p-8 sm:p-10 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-bold">
                        <span>Web Development Enterprise</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-slate-900">Website, System Information & Portal Digital</h3>
                    <p class="text-slate-600 text-sm leading-relaxed max-w-xl">
                        Pengembangan Website Perusahaan, Portal Desa Digital Senuro Timur, Sistem Sekolah PPDB Online, dan Web Application dengan performa tinggi berbasis Laravel 13 & Tailwind v4.
                    </p>
                </div>
                <div class="pt-8 flex items-center justify-between border-t border-slate-100">
                    <span class="text-xs font-bold text-slate-500">Tech: Laravel 13, PHP 8.4, SQLite/MySQL</span>
                    <a href="{{ route('services') }}" class="text-xs font-bold text-indigo-600 hover:underline flex items-center gap-1">
                        <span>Pelajari Detail</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Bento 2: Mobile App -->
            <div class="bento-card p-8 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-50 text-cyan-700 text-xs font-bold">
                        <span>Mobile Cross-Platform</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Aplikasi Android & iOS (Flutter)</h3>
                    <p class="text-slate-600 text-xs leading-relaxed">
                        Aplikasi mobile native & Flutter cepat terintegrasi REST API backend, push notification, dan peta lokasi.
                    </p>
                </div>
                <div class="pt-6">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-cyan-600 hover:underline">Lihat Layanan Mobile &rarr;</a>
                </div>
            </div>

            <!-- Bento 3: AI Solutions -->
            <div class="bento-card p-8 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-50 text-purple-700 text-xs font-bold">
                        <span>Artificial Intelligence</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Chatbot AI RAG Privat & Vibe Coding</h3>
                    <p class="text-slate-600 text-xs leading-relaxed">
                        Engine AI privat untuk membaca dokumen SOP internal perusahaan tanpa ketergantungan API pihak ketiga.
                    </p>
                </div>
                <div class="pt-6">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-purple-600 hover:underline">Pelajari Engine AI &rarr;</a>
                </div>
            </div>

            <!-- Bento 4: Large Span Corporate Training -->
            <div class="md:col-span-2 bento-card p-8 sm:p-10 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-50 text-amber-700 text-xs font-bold">
                        <span>Corporate Workshop & Keynote Speaker</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-slate-900">Pelatihan IT, Training for Trainer & Speaker Event</h3>
                    <p class="text-slate-600 text-sm leading-relaxed max-w-xl">
                        Diselenggarakan oleh Direktur Utama <strong class="text-slate-900 font-bold">Septa Ryan Hidayat, S.Kom</strong> (Narasumber Komdigi, Akamigas Palembang, & Dinas Pendidikan). Pelatihan Vibe Coding, AI RAG, & Pembelajaran Koding.
                    </p>
                </div>
                <div class="pt-8 flex items-center justify-between border-t border-slate-100">
                    <span class="text-xs font-bold text-slate-500">Narasumber: Septa Ryan Hidayat, S.Kom</span>
                    <a href="{{ route('trainer.index') }}" class="text-xs font-bold text-amber-600 hover:underline flex items-center gap-1">
                        <span>Profil Speaker & Galeri Event</span> &rarr;
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Real Featured Portfolio Projects -->
<section class="py-24 bg-white border-y border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div class="space-y-2">
                <span class="text-xs font-extrabold uppercase tracking-widest text-indigo-600">Portofolio Software</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 font-heading">Proyek Yang Telah Selesai Dikembangkan</h2>
            </div>
            <a href="{{ route('projects.index') }}" class="text-sm font-bold text-indigo-600 hover:underline">
                Lihat Semua Portofolio Klien &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
                <div class="bento-card overflow-hidden flex flex-col group">
                    <div class="aspect-video overflow-hidden bg-slate-100 relative">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 rounded-full bg-slate-900 text-white text-[11px] font-bold shadow-md">
                                {{ $project->category?->name ?? 'Proyek Klien' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-indigo-600 transition-colors line-clamp-1">
                                {{ $project->title }}
                            </h3>
                            <p class="text-slate-600 text-xs line-clamp-2 leading-relaxed">
                                {{ $project->summary }}
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="font-bold text-indigo-600">{{ $project->client_name }}</span>
                            <a href="{{ route('projects.show', $project->slug) }}" class="font-bold text-slate-900 hover:text-indigo-600">
                                Case Study &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Founder Profile & Authentic Event Gallery (Septa Ryan Hidayat) -->
<section class="py-24 bg-[#FAFAFC]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Direktur Utama Profile Showcase Card -->
        <div class="bento-card p-8 sm:p-14 relative overflow-hidden bg-white shadow-xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-4 flex justify-center">
                    <div class="relative">
                        <div class="w-56 h-56 sm:w-64 sm:h-64 rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
                            <img src="{{ $trainerAvatar }}" alt="{{ $trainerName }}" class="w-full h-full object-cover" />
                        </div>
                        <div class="absolute -bottom-3 -right-3 bg-amber-500 text-slate-950 font-extrabold text-xs px-4 py-2 rounded-2xl shadow-xl">
                            ★ Founder & Direktur Utama
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 space-y-5 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-50 text-amber-800 text-xs font-bold">
                        <span>Pimpinan Perusahaan & Trainer Nasional</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 font-heading">
                        {{ $trainerName }}
                    </h2>

                    <p class="text-indigo-600 font-bold text-sm sm:text-base">
                        {{ $trainerTitle }}
                    </p>

                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed max-w-2xl">
                        {{ $trainerBio }}
                    </p>

                    <div class="pt-2 flex flex-wrap justify-center lg:justify-start gap-3">
                        <a href="{{ route('trainer.index') }}" class="px-6 py-3 rounded-full bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold text-xs shadow-md transition-all">
                            Undang Trainer / Seminar &rarr;
                        </a>
                        <a href="https://wa.me/6289695249089" target="_blank" class="px-6 py-3 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-900 font-bold text-xs transition-all">
                            Hubungi via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Real Event Photo Gallery -->
        <div class="space-y-8">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-indigo-600">Dokumentasi Acara</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-heading">Galeri Foto Seminar & Workshop</h3>
                </div>
                <a href="{{ route('trainer.index') }}" class="text-xs font-bold text-indigo-600 hover:underline">Lihat Galeri Lengkap &rarr;</a>
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

<!-- Call to Action Banner (Clean Modern 2026 Light Gradient) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-slate-900 p-8 sm:p-14 text-white text-center shadow-2xl relative overflow-hidden">
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
