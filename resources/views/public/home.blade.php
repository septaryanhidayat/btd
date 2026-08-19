@extends('layouts.app')

@section('title', 'CV. Beranda Teknologi Digital - Jasa Pembuatan Website, Mobile App & AI Solution')

@section('content')
<!-- Hero Section (Light Theme Default with Vibrant Glassmorphism Glow) -->
<section class="relative overflow-hidden pt-12 pb-24 lg:pt-20 lg:pb-36">
    <!-- Glowing Backdrop Circles -->
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-gradient-to-tr from-blue-400/20 via-indigo-500/20 to-cyan-300/30 blur-[140px] rounded-full pointer-events-none -z-10"></div>
    <div class="absolute top-12 right-10 w-96 h-96 bg-cyan-400/15 blur-[100px] rounded-full pointer-events-none -z-10"></div>
    <div class="absolute bottom-10 left-10 w-96 h-96 bg-purple-500/15 blur-[100px] rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto space-y-8">
            
            <!-- Floating Badge -->
            <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full glass-card-light text-xs sm:text-sm font-bold text-indigo-700 dark:text-indigo-300 shadow-md hover:scale-105 transition-transform cursor-default">
                <span class="flex h-2.5 w-2.5 rounded-full bg-indigo-600 animate-pulse"></span>
                <span>CV. Beranda Teknologi Digital &bull; Tech Agency & Training Center</span>
            </div>

            <!-- Main Headline -->
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-[1.12]">
                Bangun Usaha & Bisnis Anda <br class="hidden sm:inline" />
                <span class="gradient-text-primary">Go Digital Sekarang</span>
            </h1>

            <!-- Description -->
            <p class="text-base sm:text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto leading-relaxed font-normal">
                Mitra transformasi digital terdepan penyedia <strong class="text-slate-900 dark:text-white font-bold">Jasa Pembuatan Website, Aplikasi Mobile Android/iOS, Solusi AI Privat</strong>, serta <strong class="text-slate-900 dark:text-white font-bold">Pelatihan & Speaker Workshop IT Enterprise</strong>.
            </p>

            <!-- Action Buttons -->
            <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 text-white font-extrabold text-sm sm:text-base shadow-xl shadow-indigo-500/25 hover:shadow-indigo-500/40 hover:-translate-y-1 transition-all flex items-center justify-center gap-2">
                    <span>Mulai Proyek Anda</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
                <a href="{{ route('projects.index') }}" class="w-full sm:w-auto px-8 py-4 rounded-2xl glass-card-light text-slate-900 dark:text-white font-bold text-sm sm:text-base shadow-md hover:bg-white dark:hover:bg-slate-800 transition-all flex items-center justify-center gap-2">
                    <span>Lihat Portofolio Digital</span>
                    <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </a>
            </div>

            <!-- Tech Capabilities Badges -->
            <div class="pt-6 flex flex-wrap items-center justify-center gap-3 text-xs text-slate-600 dark:text-slate-400 font-mono">
                <span class="px-3.5 py-2 rounded-xl bg-white/90 dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 shadow-sm font-semibold">Laravel 13 & PHP 8.4</span>
                <span class="px-3.5 py-2 rounded-xl bg-white/90 dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 shadow-sm font-semibold">Flutter Mobile iOS & Android</span>
                <span class="px-3.5 py-2 rounded-xl bg-white/90 dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 shadow-sm font-semibold">SQLite WAL (Dev) / MySQL (Online)</span>
                <span class="px-3.5 py-2 rounded-xl bg-white/90 dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 shadow-sm font-semibold">AI RAG & Vibe Coding</span>
            </div>
        </div>
    </div>
</section>

<!-- Company Metrics Section -->
<section class="py-12 bg-white/90 dark:bg-slate-900/90 border-y border-slate-200/90 dark:border-slate-800 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="space-y-1">
                <div class="text-4xl sm:text-5xl font-extrabold text-blue-600 dark:text-blue-400 font-heading">150+</div>
                <div class="text-xs sm:text-sm font-bold text-slate-700 dark:text-slate-300">Proyek Software Selesai</div>
            </div>
            <div class="space-y-1">
                <div class="text-4xl sm:text-5xl font-extrabold text-cyan-600 dark:text-cyan-400 font-heading">99.8%</div>
                <div class="text-xs sm:text-sm font-bold text-slate-700 dark:text-slate-300">Kepuasan Klien Enterprise</div>
            </div>
            <div class="space-y-1">
                <div class="text-4xl sm:text-5xl font-extrabold text-indigo-600 dark:text-indigo-400 font-heading">85+</div>
                <div class="text-xs sm:text-sm font-bold text-slate-700 dark:text-slate-300">Event Workshop & Seminar</div>
            </div>
            <div class="space-y-1">
                <div class="text-4xl sm:text-5xl font-extrabold text-emerald-600 dark:text-emerald-400 font-heading">5,000+</div>
                <div class="text-xs sm:text-sm font-bold text-slate-700 dark:text-slate-300">Alumni Pelatihan IT</div>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Showcase Grid -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-blue-500/10 text-blue-600 dark:text-blue-400 font-bold text-xs uppercase tracking-wider">
                Solusi Digital Terpadu
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 dark:text-white">Ekosistem Layanan IT Kami</h2>
            <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base">Setiap layanan dirancang dengan arsitektur modern berkinerja tinggi untuk mempercepat akselerasi bisnis Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- 1. Web App -->
            <div class="glass-card-light rounded-3xl p-8 hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-blue-600/10 text-blue-600 dark:text-blue-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Website & Web App Custom</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs sm:text-sm leading-relaxed">
                        Website Perusahaan, E-Commerce, Sistem Informasi Sekolah & Portal Desa Digital dengan Laravel 13, PHP 8.4 & Tailwind v4.
                    </p>
                </div>
                <div class="pt-6">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-blue-600 dark:text-blue-400 flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        <span>Pelajari Selengkapnya</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- 2. Mobile App -->
            <div class="glass-card-light rounded-3xl p-8 hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-600/10 text-cyan-600 dark:text-cyan-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Aplikasi Mobile Android/iOS</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs sm:text-sm leading-relaxed">
                        Aplikasi mobile cross-platform berbasis Flutter berkecepatan tinggi terhubung dengan RESTful API & Push Notifications.
                    </p>
                </div>
                <div class="pt-6">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-cyan-600 dark:text-cyan-400 flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        <span>Pelajari Selengkapnya</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- 3. AI & Automation -->
            <div class="glass-card-light rounded-3xl p-8 hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-purple-600/10 text-purple-600 dark:text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">AI Solution & Chatbot RAG</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs sm:text-sm leading-relaxed">
                        Pembangunan Chatbot AI Privat Dokumen SOP Perusahaan, Vibe Coding, dan Otomasi Workflow tanpa koding.
                    </p>
                </div>
                <div class="pt-6">
                    <a href="{{ route('services') }}" class="text-xs font-bold text-purple-600 dark:text-purple-400 flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        <span>Pelajari Selengkapnya</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- 4. Speaker & Training -->
            <div class="glass-card-light rounded-3xl p-8 hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Training & Keynote Speaker</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs sm:text-sm leading-relaxed">
                        Workshop IT corporate, training for trainer, seminar Komdigi RI, dan pembicara Vibe Coding & AI.
                    </p>
                </div>
                <div class="pt-6">
                    <a href="{{ route('trainer.index') }}" class="text-xs font-bold text-amber-600 dark:text-amber-400 flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        <span>Lihat Profil Speaker</span> &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Digital Portfolio Projects -->
<section class="py-24 bg-white/70 dark:bg-slate-900/50 border-y border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 gap-4">
            <div class="space-y-2">
                <span class="px-4 py-1.5 rounded-full bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-bold text-xs uppercase tracking-wider">
                    Hasil Pengerjaan Proyek
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">Portofolio Software Utama</h2>
            </div>
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-indigo-600 dark:text-indigo-400 hover:underline">
                <span>Lihat Semua Portofolio</span> &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
                <div class="glass-card-light rounded-3xl overflow-hidden shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all flex flex-col group border border-slate-200/80 dark:border-slate-800">
                    <div class="relative aspect-video overflow-hidden bg-slate-200 dark:bg-slate-800">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full bg-slate-900/90 text-white text-xs font-bold shadow-md">
                                {{ $project->category?->name ?? 'Enterprise' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors line-clamp-1">
                                {{ $project->title }}
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400 text-xs sm:text-sm line-clamp-2 leading-relaxed">
                                {{ $project->summary }}
                            </p>
                        </div>
                        
                        <div class="pt-3 flex items-center justify-between border-t border-slate-200/90 dark:border-slate-800 text-xs">
                            <span class="font-bold text-indigo-600 dark:text-indigo-400">{{ $project->client_name }}</span>
                            <a href="{{ route('projects.show', $project->slug) }}" class="font-bold text-slate-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-400">
                                Case Study &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Real Director Profile (Septa Ryan Hidayat) & Event Photo Gallery -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Direktur Utama Profile Showcase Card -->
        <div class="glass-card-light rounded-3xl p-8 sm:p-14 shadow-2xl relative overflow-hidden border border-slate-200 dark:border-slate-800">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-4 flex justify-center">
                    <div class="relative">
                        <div class="w-56 h-56 sm:w-64 sm:h-64 rounded-3xl overflow-hidden shadow-2xl border-4 border-white dark:border-slate-800 rotate-2 hover:rotate-0 transition-transform duration-300">
                            <img src="{{ $trainerAvatar }}" alt="{{ $trainerName }}" class="w-full h-full object-cover" />
                        </div>
                        <div class="absolute -bottom-3 -right-3 bg-amber-500 text-slate-950 font-extrabold text-xs px-4 py-2 rounded-2xl shadow-xl">
                            ★ Founder & CEO
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-400 text-xs font-bold">
                        <span>Pimpinan Perusahaan & Lead Speaker</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">
                        {{ $trainerName }}
                    </h2>

                    <p class="text-indigo-600 dark:text-indigo-400 font-bold text-sm sm:text-base">
                        {{ $trainerTitle }}
                    </p>

                    <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed max-w-2xl">
                        {{ $trainerBio }}
                    </p>

                    <div class="pt-2 flex flex-wrap justify-center lg:justify-start gap-4">
                        <a href="{{ route('trainer.index') }}" class="px-7 py-3.5 rounded-2xl bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold text-xs shadow-lg transition-all">
                            Undang Trainer / Seminar &rarr;
                        </a>
                        <a href="https://wa.me/6289695249089" target="_blank" class="px-7 py-3.5 rounded-2xl glass-card-light text-slate-900 dark:text-white font-bold text-xs hover:bg-slate-200 dark:hover:bg-slate-800 transition-all">
                            Kontak Langsung via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Photo Gallery of Real Events -->
        <div class="space-y-8">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Dokumentasi Acara</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white">Galeri Foto Event & Keynote Speaker</h3>
                </div>
                <a href="{{ route('trainer.index') }}" class="text-xs font-bold text-indigo-600 dark:text-indigo-400 hover:underline">Lihat Galeri Lengkap &rarr;</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($galleries as $gallery)
                    <div class="glass-card-light rounded-2xl overflow-hidden group hover:shadow-xl transition-all">
                        <div class="aspect-4/3 overflow-hidden relative">
                            <img src="{{ $gallery->image_path }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/20 to-transparent opacity-85 group-hover:opacity-95 transition-opacity"></div>
                            
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

<!-- Call to Action Banner (Vibrant Light Mode Gradient) -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 p-8 sm:p-14 text-white text-center shadow-2xl relative overflow-hidden">
            <div class="max-w-3xl mx-auto space-y-6 relative z-10">
                <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight">
                    Siap Mewujudkan Proyek Digital Anda?
                </h2>
                <p class="text-indigo-100 text-xs sm:text-base leading-relaxed font-normal">
                    Konsultasikan kebutuhan pembuatan website, aplikasi Android/iOS, sistem informasi, atau pelatihan IT bersama tim profesional <strong class="text-white font-bold">CV. Beranda Teknologi Digital</strong>.
                </p>
                <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-white text-indigo-700 font-extrabold text-xs sm:text-sm shadow-xl hover:bg-slate-100 hover:scale-105 transition-all">
                        Kalkulator Estimasi Biaya (Hitung Otomatis)
                    </a>
                    <a href="https://wa.me/6289695249089" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold text-xs sm:text-sm shadow-xl flex items-center justify-center gap-2 transition-all">
                        <span>Chat WhatsApp (0896 9524 9089)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
