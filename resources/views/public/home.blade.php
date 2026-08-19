@extends('layouts.app')

@section('title', 'CV. Beranda Teknologi Digital - Startup Software House, Mobile App & AI')

@section('content')
<!-- Hero Section (3D Interactive Parallax with Authentic Website Screencapture Preview) -->
<section x-data="{ mouseX: 0, mouseY: 0 }" 
         @mousemove="mouseX = ($event.clientX - window.innerWidth/2) / 30; mouseY = ($event.clientY - window.innerHeight/2) / 30"
         class="relative pt-12 pb-24 lg:pt-20 lg:pb-36 overflow-hidden bg-grid-pattern">
    
    <!-- Ambient Radial Mesh Glow -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-gradient-to-tr from-blue-400/20 via-indigo-500/20 to-cyan-300/30 dark:from-blue-600/20 dark:via-indigo-600/20 dark:to-cyan-500/20 blur-[140px] rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: High Contrast Headline & Action Buttons -->
            <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                
                <!-- Status Badge with Official Brand Logo -->
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bento-card text-xs font-extrabold text-slate-900 dark:text-slate-100 shadow-xs cursor-default">
                    <img src="/images/Logo-BTD.png" alt="BTD Logo" class="h-5 w-auto object-contain" />
                    <span>CV. Beranda Teknologi Digital &bull; Startup Agency & Training Center</span>
                </div>

                <!-- 2026 Main Headline -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-slate-950 dark:text-white tracking-tight leading-[1.1] font-heading">
                    Membangun Masa Depan <br class="hidden sm:inline" />
                    <span class="gradient-text-accent">Software & AI Enterprise</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-base sm:text-xl text-slate-900 dark:text-slate-200 max-w-2xl leading-relaxed font-bold">
                    Mitra transformasi digital terpercaya penyedia <strong class="text-indigo-700 dark:text-indigo-400 underline decoration-indigo-400">Jasa Pembuatan Website, Aplikasi Mobile Android/iOS, Engine AI Privat</strong>, dan <strong class="text-indigo-700 dark:text-indigo-400 underline decoration-indigo-400">Pelatihan IT Profesional</strong>.
                </p>

                <!-- Action CTA Buttons -->
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-indigo-700 hover:bg-indigo-800 text-white font-extrabold text-sm shadow-xl shadow-indigo-700/25 hover:scale-105 transition-all flex items-center justify-center gap-2">
                        <span>Mulai Proyek Digital Anda</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="https://wa.me/6289695249089" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-full bg-slate-900 text-white dark:bg-slate-800 border-2 border-slate-900 dark:border-slate-700 font-extrabold text-sm shadow-md hover:bg-slate-800 transition-all flex items-center justify-center gap-2">
                        <span>Konsultasi WA (0896 9524 9089)</span>
                    </a>
                </div>

                <!-- Internal Capability Pills -->
                <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-3 text-xs text-slate-900 dark:text-slate-300 font-mono">
                    <span class="px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border-2 border-slate-300 dark:border-slate-800 shadow-xs font-extrabold">Laravel 13 & PHP 8.4</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border-2 border-slate-300 dark:border-slate-800 shadow-xs font-extrabold">Flutter Mobile iOS/Android</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border-2 border-slate-300 dark:border-slate-800 shadow-xs font-extrabold">Dual DB SQLite / MySQL</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border-2 border-slate-300 dark:border-slate-800 shadow-xs font-extrabold">Python RAG & Vibe Coding</span>
                </div>
            </div>

            <!-- Right Column: Interactive 3D Parallax Canvas Showcase with Authentic Screencapture Preview -->
            <div class="lg:col-span-5 flex justify-center parallax-container">
                <div class="relative w-full max-w-lg parallax-layer"
                     :style="`transform: rotateY(${mouseX}deg) rotateX(${-mouseY}deg);`">
                    
                    <!-- Glow Behind -->
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 rounded-3xl opacity-35 blur-2xl"></div>

                    <!-- Futuristic Window Frame featuring internal preview screencapture -->
                    <div class="relative bento-card p-4 shadow-2xl bg-white dark:bg-slate-900 border-2 border-slate-300 dark:border-slate-700">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-200 dark:border-slate-800 text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-red-500"></span>
                                <span class="w-3 h-3 rounded-full bg-amber-500"></span>
                                <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                                <span class="font-mono text-slate-800 dark:text-slate-300 text-[11px] font-bold ml-2">berandadigital.net &bull; Authentic Preview</span>
                            </div>
                        </div>

                        <div class="mt-3 aspect-4/3 rounded-2xl overflow-hidden relative shadow-inner bg-slate-100 dark:bg-slate-950 border border-slate-200 dark:border-slate-800">
                            <img src="/preview/screencapture-berandadigital-net-2026-08-19-17_31_05.png" alt="Original Website Preview" class="w-full h-full object-cover object-top hover:object-bottom transition-all duration-1000" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-transparent to-transparent pointer-events-none"></div>
                            
                            <div class="absolute bottom-4 left-4 right-4 text-white space-y-1">
                                <span class="px-2.5 py-1 rounded-md bg-indigo-700 font-mono text-[10px] uppercase font-extrabold tracking-wider">
                                    Authentic Web Screencapture
                                </span>
                                <h4 class="text-sm font-extrabold">Tampilan Asli berandadigital.net</h4>
                                <p class="text-[11px] text-slate-200 font-medium">CV. Beranda Teknologi Digital &bull; Palembang & Ogan Ilir</p>
                            </div>
                        </div>

                        <!-- Floating Badge Parallax -->
                        <div class="absolute -top-5 -right-5 bg-white dark:bg-slate-800 border-2 border-slate-300 dark:border-slate-700 p-3 rounded-2xl shadow-xl flex items-center gap-2 font-mono text-xs font-extrabold text-indigo-700 dark:text-indigo-400 parallax-float">
                            <span>⚡ High Speed & Zero-Lag System</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Authentic Partners & Client Logos Section -->
<section class="py-12 bg-white dark:bg-slate-900 border-y-2 border-slate-300 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <p class="text-center text-xs font-extrabold uppercase tracking-widest text-slate-900 dark:text-slate-300">
            Mitra & Klien Yang Bekerja Sama Dengan Beranda Teknologi Digital
        </p>

        <!-- Grid of Real Partner & Client Logo Images -->
        <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12">
            <div class="h-12 px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-xl border border-slate-300 dark:border-slate-700 flex items-center justify-center">
                <img src="/images/LOGO-CLIENT-WEB.png" alt="Mitra Client Web" class="h-8 w-auto object-contain" />
            </div>
            <div class="h-12 px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-xl border border-slate-300 dark:border-slate-700 flex items-center justify-center">
                <img src="/images/Partner_img-2-1.png" alt="Mitra Partner 2" class="h-7 w-auto object-contain" />
            </div>
            <div class="h-12 px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-xl border border-slate-300 dark:border-slate-700 flex items-center justify-center">
                <img src="/images/Partner_img-3-1.png" alt="Mitra Partner 3" class="h-7 w-auto object-contain" />
            </div>
            <div class="h-12 px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-xl border border-slate-300 dark:border-slate-700 flex items-center justify-center">
                <img src="/images/Partner_img-4-1.png" alt="Mitra Partner 4" class="h-7 w-auto object-contain" />
            </div>
            <div class="h-12 px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-xl border border-slate-300 dark:border-slate-700 flex items-center justify-center">
                <img src="/images/Partner_img-5-1.png" alt="Mitra Partner 5" class="h-7 w-auto object-contain" />
            </div>
            <div class="h-12 px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-xl border border-slate-300 dark:border-slate-700 flex items-center justify-center font-extrabold text-xs text-slate-900 dark:text-slate-100">
                🏛️ Kementerian Komdigi RI
            </div>
            <div class="h-12 px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-xl border border-slate-300 dark:border-slate-700 flex items-center justify-center font-extrabold text-xs text-slate-900 dark:text-slate-100">
                🎓 Politeknik Akamigas Palembang
            </div>
        </div>
    </div>
</section>

<!-- Bento Grid Services Section -->
<section class="py-24 bg-[#F8FAFC] dark:bg-[#080C14]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="px-4 py-1.5 rounded-full bg-indigo-100 dark:bg-indigo-950/80 text-indigo-900 dark:text-indigo-300 font-extrabold text-xs uppercase tracking-wider border border-indigo-300">
                Layanan & Kapabilitas Digital
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-950 dark:text-white font-heading">
                Ekosistem Solusi Software & Training
            </h2>
            <p class="text-slate-900 dark:text-slate-200 text-sm sm:text-base font-bold">Arsitektur sistem berkinerja tinggi yang dirancang untuk skala bisnis Anda.</p>
        </div>

        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Bento 1: Web App Enterprise (With Preview Screenshot) -->
            <div class="md:col-span-2 bento-card p-8 sm:p-10 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100 dark:bg-blue-950/80 text-blue-900 dark:text-blue-300 text-xs font-extrabold border border-blue-300">
                        <span>Web Development Enterprise</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-950 dark:text-white">Website, System Information & Portal Digital</h3>
                    <p class="text-slate-900 dark:text-slate-200 text-sm leading-relaxed max-w-xl font-semibold">
                        Pengembangan Website Perusahaan, Portal Desa Digital Senuro Timur, Sistem Sekolah PPDB Online, dan Web Application dengan performa tinggi berbasis Laravel 13 & Tailwind v4.
                    </p>
                </div>
                <div class="pt-8 flex items-center justify-between border-t border-slate-300 dark:border-slate-800">
                    <span class="text-xs font-extrabold text-slate-900 dark:text-slate-300">Tech: Laravel 13, PHP 8.4, SQLite/MySQL</span>
                    <a href="{{ route('services') }}" class="text-xs font-extrabold text-indigo-700 dark:text-indigo-400 hover:underline flex items-center gap-1">
                        <span>Pelajari Detail</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Bento 2: Mobile App (With Preview Screenshot) -->
            <div class="bento-card p-8 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-100 dark:bg-cyan-950/80 text-cyan-950 dark:text-cyan-300 text-xs font-extrabold border border-cyan-300">
                        <span>Mobile Cross-Platform</span>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-950 dark:text-white">Aplikasi Android & iOS (Flutter)</h3>
                    <p class="text-slate-900 dark:text-slate-200 text-xs leading-relaxed font-semibold">
                        Aplikasi mobile native & Flutter cepat terintegrasi REST API backend, push notification, dan peta lokasi.
                    </p>
                </div>
                <div class="pt-6 border-t border-slate-300 dark:border-slate-800">
                    <a href="{{ route('services') }}" class="text-xs font-extrabold text-cyan-700 dark:text-cyan-400 hover:underline">Lihat Layanan Mobile &rarr;</a>
                </div>
            </div>

            <!-- Bento 3: AI Solutions -->
            <div class="bento-card p-8 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-100 dark:bg-purple-950/80 text-purple-950 dark:text-purple-300 text-xs font-extrabold border border-purple-300">
                        <span>Artificial Intelligence</span>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-950 dark:text-white">Chatbot AI RAG Privat & Vibe Coding</h3>
                    <p class="text-slate-900 dark:text-slate-200 text-xs leading-relaxed font-semibold">
                        Engine AI privat untuk membaca dokumen SOP internal perusahaan tanpa ketergantungan API pihak ketiga.
                    </p>
                </div>
                <div class="pt-6 border-t border-slate-300 dark:border-slate-800">
                    <a href="{{ route('services') }}" class="text-xs font-extrabold text-purple-700 dark:text-purple-400 hover:underline">Pelajari Engine AI &rarr;</a>
                </div>
            </div>

            <!-- Bento 4: Corporate Training -->
            <div class="md:col-span-2 bento-card p-8 sm:p-10 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-100 dark:bg-amber-950/80 text-amber-950 dark:text-amber-300 text-xs font-extrabold border border-amber-300">
                        <span>Corporate Workshop & Keynote Speaker</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-950 dark:text-white">Pelatihan IT, Training for Trainer & Speaker Event</h3>
                    <p class="text-slate-900 dark:text-slate-200 text-sm leading-relaxed max-w-xl font-semibold">
                        Diselenggarakan oleh Direktur Utama <strong class="text-indigo-700 dark:text-indigo-400 font-extrabold">Septa Ryan Hidayat, S.Kom</strong> (Narasumber Komdigi, Akamigas Palembang, & Dinas Pendidikan). Pelatihan Vibe Coding, AI RAG, & Pembelajaran Koding.
                    </p>
                </div>
                <div class="pt-8 flex items-center justify-between border-t border-slate-300 dark:border-slate-800">
                    <span class="text-xs font-extrabold text-slate-900 dark:text-slate-300">Narasumber: Septa Ryan Hidayat, S.Kom</span>
                    <a href="{{ route('trainer.index') }}" class="text-xs font-extrabold text-amber-700 dark:text-amber-400 hover:underline flex items-center gap-1">
                        <span>Profil Speaker & Galeri Event</span> &rarr;
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Authentic Preview Showcase Grid (Portofolio) -->
<section class="py-24 bg-white dark:bg-slate-900 border-y-2 border-slate-300 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div class="space-y-2">
                <span class="text-xs font-extrabold uppercase tracking-widest text-indigo-700 dark:text-indigo-400">Portofolio & Tampilan Asli Website</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-950 dark:text-white font-heading">Proyek Yang Telah Selesai Dikembangkan</h2>
            </div>
            <a href="{{ route('projects.index') }}" class="text-sm font-extrabold text-indigo-700 dark:text-indigo-400 hover:underline">
                Lihat Semua Portofolio Klien &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
                <div class="bento-card overflow-hidden flex flex-col group">
                    <div class="aspect-video overflow-hidden bg-slate-100 dark:bg-slate-950 relative border-b border-slate-200 dark:border-slate-800">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 rounded-full bg-slate-950 text-white text-[11px] font-extrabold shadow-md">
                                {{ $project->category?->name ?? 'Proyek Klien' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="text-lg font-extrabold text-slate-950 dark:text-white group-hover:text-indigo-700 dark:group-hover:text-indigo-400 transition-colors line-clamp-1">
                                {{ $project->title }}
                            </h3>
                            <p class="text-slate-900 dark:text-slate-300 text-xs line-clamp-2 leading-relaxed font-semibold">
                                {{ $project->summary }}
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between text-xs">
                            <span class="font-extrabold text-indigo-700 dark:text-indigo-400">{{ $project->client_name }}</span>
                            <a href="{{ route('projects.show', $project->slug) }}" class="font-extrabold text-slate-950 dark:text-white hover:text-indigo-700 dark:hover:text-indigo-400">
                                Detail &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Dedicated Testimonials Showcase -->
<section class="py-24 bg-[#F8FAFC] dark:bg-[#080C14]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="px-4 py-1.5 rounded-full bg-amber-100 dark:bg-amber-950/80 text-amber-950 dark:text-amber-300 font-extrabold text-xs uppercase tracking-wider border border-amber-300">
                Testimoni Klien & Peserta
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-950 dark:text-white font-heading">
                Apa Kata Klien & Mitra Kami ?
            </h2>
            <p class="text-slate-900 dark:text-slate-200 text-sm font-bold">Ulasan langsung dari instansi pemerintah, sekolah, dan perusahaan mitra.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bento-card p-8 space-y-6 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center gap-1 text-amber-500 font-bold text-sm">
                        ★★★★★ <span>5.0</span>
                    </div>
                    <p class="text-slate-900 dark:text-slate-200 text-xs sm:text-sm leading-relaxed font-semibold italic">
                        "Pelayanan pembuatan website dan aplikasi administrasi desa di Senuro Timur sangat cepat dan responsif. Pengurusan surat warga jadi jauh lebih efisien!"
                    </p>
                </div>
                <div class="flex items-center gap-4 pt-4 border-t border-slate-300 dark:border-slate-800">
                    <img src="/images/img_testimonial_Home-E87QWM2.jpg" alt="Perangkat Desa" class="w-12 h-12 rounded-full object-cover border-2 border-indigo-600" />
                    <div>
                        <h4 class="text-xs font-extrabold text-slate-950 dark:text-white">Perangkat Desa Senuro Timur</h4>
                        <span class="text-[11px] font-bold text-indigo-700 dark:text-indigo-400">Pemerintah Desa Ogan Ilir</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bento-card p-8 space-y-6 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center gap-1 text-amber-500 font-bold text-sm">
                        ★★★★★ <span>5.0</span>
                    </div>
                    <p class="text-slate-900 dark:text-slate-200 text-xs sm:text-sm leading-relaxed font-semibold italic">
                        "Materi Vibe Coding & AI RAG yang dibawakan Pak Septa Ryan Hidayat sangat menginspirasi dosen Politeknik Akamigas Palembang. Praktis & langsung bisa diimplementasikan."
                    </p>
                </div>
                <div class="flex items-center gap-4 pt-4 border-t border-slate-300 dark:border-slate-800">
                    <img src="/images/Wulan.jpg" alt="Dosen Akamigas" class="w-12 h-12 rounded-full object-cover border-2 border-indigo-600" />
                    <div>
                        <h4 class="text-xs font-extrabold text-slate-950 dark:text-white">Tim Dosen & Akademisi</h4>
                        <span class="text-[11px] font-bold text-indigo-700 dark:text-indigo-400">Politeknik Akamigas Palembang</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bento-card p-8 space-y-6 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center gap-1 text-amber-500 font-bold text-sm">
                        ★★★★★ <span>5.0</span>
                    </div>
                    <p class="text-slate-900 dark:text-slate-200 text-xs sm:text-sm leading-relaxed font-semibold italic">
                        "Sistem PPDB online dan website sekolah SIT Robbani sangat membantu proses penerimaan siswa baru. Dukungan purna jual Beranda Digital luar biasa!"
                    </p>
                </div>
                <div class="flex items-center gap-4 pt-4 border-t border-slate-300 dark:border-slate-800">
                    <img src="/images/testimonial_img-11.jpeg" alt="Kepala Sekolah" class="w-12 h-12 rounded-full object-cover border-2 border-indigo-600" />
                    <div>
                        <h4 class="text-xs font-extrabold text-slate-950 dark:text-white">Pengelola Yayasan Pendidikan</h4>
                        <span class="text-[11px] font-bold text-indigo-700 dark:text-indigo-400">SIT Robbani Ogan Ilir</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Authentic Preview Showcase Gallery -->
<section class="py-24 bg-white dark:bg-slate-900 border-t-2 border-slate-300 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Direktur Utama Profile Card -->
        <div class="bento-card p-8 sm:p-14 relative overflow-hidden bg-white dark:bg-slate-900 shadow-xl border-2 border-slate-300 dark:border-slate-800">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-4 flex justify-center">
                    <div class="relative">
                        <div class="w-56 h-56 sm:w-64 sm:h-64 rounded-3xl overflow-hidden shadow-2xl border-4 border-slate-200 dark:border-slate-800">
                            <img src="{{ $trainerAvatar }}" alt="{{ $trainerName }}" class="w-full h-full object-cover" />
                        </div>
                        <div class="absolute -bottom-3 -right-3 bg-amber-500 text-slate-950 font-extrabold text-xs px-4 py-2 rounded-2xl shadow-xl">
                            ★ Founder & Direktur Utama
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 space-y-5 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-100 dark:bg-amber-950/80 text-amber-950 dark:text-amber-300 text-xs font-extrabold border border-amber-300">
                        <span>Pimpinan Perusahaan & Trainer Nasional</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-950 dark:text-white font-heading">
                        {{ $trainerName }}
                    </h2>

                    <p class="text-indigo-700 dark:text-indigo-400 font-extrabold text-sm sm:text-base">
                        {{ $trainerTitle }}
                    </p>

                    <p class="text-slate-900 dark:text-slate-200 text-xs sm:text-sm leading-relaxed max-w-2xl font-semibold">
                        {{ $trainerBio }}
                    </p>

                    <div class="pt-2 flex flex-wrap justify-center lg:justify-start gap-3">
                        <a href="{{ route('trainer.index') }}" class="px-6 py-3 rounded-full bg-amber-500 hover:bg-amber-600 text-slate-950 font-extrabold text-xs shadow-md transition-all">
                            Undang Trainer / Seminar &rarr;
                        </a>
                        <a href="https://wa.me/6289695249089" target="_blank" class="px-6 py-3 rounded-full bg-slate-900 text-white dark:bg-slate-800 font-extrabold text-xs transition-all">
                            Hubungi via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Authentic Relevant Posters & Event Gallery -->
        <div class="space-y-8">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-xs font-extrabold uppercase tracking-widest text-indigo-700 dark:text-indigo-400">Dokumentasi & Preview Screencapture Asli</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-950 dark:text-white font-heading">Galeri Tampilan Website & Event Real</h3>
                </div>
                <a href="{{ route('trainer.index') }}" class="text-xs font-extrabold text-indigo-700 dark:text-indigo-400 hover:underline">Lihat Galeri Lengkap &rarr;</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($galleries as $gallery)
                    <div class="bento-card overflow-hidden group border-2 border-slate-300 dark:border-slate-800">
                        <div class="aspect-4/3 overflow-hidden relative">
                            <img src="{{ $gallery->image_path }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/20 to-transparent"></div>
                            
                            <div class="absolute bottom-3 left-3 right-3 text-white space-y-1">
                                <span class="text-[10px] uppercase font-extrabold tracking-wider px-2 py-0.5 rounded bg-indigo-700">
                                    {{ $gallery->category }}
                                </span>
                                <h4 class="text-xs font-extrabold line-clamp-1">{{ $gallery->title }}</h4>
                                <p class="text-[10px] text-slate-200 line-clamp-1 font-semibold">📍 {{ $gallery->location }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-20 bg-slate-950 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight font-heading">
            Siap Memulai Proyek Digital Anda?
        </h2>
        <p class="text-slate-200 text-xs sm:text-base leading-relaxed font-semibold max-w-2xl mx-auto">
            Konsultasikan pembuatan website, aplikasi Android/iOS, sistem informasi, atau pelatihan IT bersama tim profesional <strong class="text-white font-extrabold">CV. Beranda Teknologi Digital</strong>.
        </p>
        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-indigo-700 hover:bg-indigo-800 text-white font-extrabold text-xs sm:text-sm shadow-xl hover:scale-105 transition-all">
                Kalkulator Estimasi Biaya (Hitung Otomatis)
            </a>
            <a href="https://wa.me/6289695249089" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-full bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-xs sm:text-sm shadow-xl flex items-center justify-center gap-2 transition-all">
                <span>Chat WhatsApp (0896 9524 9089)</span>
            </a>
        </div>
    </div>
</section>
@endsection
