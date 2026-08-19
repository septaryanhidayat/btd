@extends('layouts.app')

@section('title', 'CV. Beranda Teknologi Digital - Startup Software House, Mobile App & AI')

@section('content')
<!-- Hero Section (Interactive Tech Constellation Canvas & 3D Tilt Mockup) -->
<section x-data="{ 
            mouseX: 0, 
            mouseY: 0,
            textIdx: 0,
            texts: [
                'Web Application Enterprise (Laravel 13)',
                'Aplikasi Mobile iOS & Android (Flutter)',
                'Sistem AI Privat & RAG Document SOP',
                'Digitalisasi Desa & Smart School System'
            ],
            init() {
                setInterval(() => {
                    this.textIdx = (this.textIdx + 1) % this.texts.length;
                }, 3500);
            }
         }" 
         @mousemove="mouseX = ($event.clientX - window.innerWidth/2) / 35; mouseY = ($event.clientY - window.innerHeight/2) / 35"
         class="relative pt-12 pb-24 lg:pt-20 lg:pb-36 overflow-hidden">
    
    <!-- Background Interactive Glow Orbs -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[750px] h-[750px] bg-gradient-to-tr from-blue-500/15 via-indigo-600/15 to-cyan-400/20 dark:from-blue-600/20 dark:via-indigo-600/25 dark:to-cyan-500/25 blur-[140px] rounded-full pointer-events-none -z-10"></div>
    <div class="absolute -top-10 right-10 w-72 h-72 bg-purple-500/10 blur-[100px] rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: High-Impact Typography & Interactive Badges -->
            <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                
                <!-- Status Pill with Pulsing Glow -->
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm text-xs font-extrabold text-slate-900 dark:text-slate-100 cursor-default">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>CV. Beranda Teknologi Digital</span>
                    <span class="text-slate-300 dark:text-slate-700">&bull;</span>
                    <span class="text-indigo-600 dark:text-indigo-400">Next-Gen Software & AI</span>
                </div>

                <!-- Main Futuristic Headline -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-slate-950 dark:text-white tracking-tight leading-[1.1] font-heading">
                    Membangun Masa Depan <br class="hidden sm:inline" />
                    <span class="gradient-text-electric">Solusi Digital & AI</span>
                </h1>

                <!-- Cycling Capability Badge (Smooth Text Switcher) -->
                <div class="h-10 flex items-center justify-center lg:justify-start">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-indigo-50 dark:bg-indigo-950/60 border border-indigo-200 dark:border-indigo-800 text-indigo-700 dark:text-indigo-300 font-mono text-xs sm:text-sm font-bold shadow-xs">
                        <span class="text-indigo-500 font-bold">⚡ Focus:</span>
                        <span x-text="texts[textIdx]" class="transition-all duration-500"></span>
                    </div>
                </div>

                <!-- High Contrast Subtitle -->
                <p class="text-base sm:text-lg text-slate-700 dark:text-slate-300 max-w-2xl leading-relaxed font-medium">
                    Software House & Digital Agency terpercaya di Indonesia. Kami menghadirkan <strong class="text-slate-950 dark:text-white font-bold">Website Enterprise</strong>, <strong class="text-slate-950 dark:text-white font-bold">Aplikasi Mobile Flutter</strong>, <strong class="text-slate-950 dark:text-white font-bold">Engine AI Privat (RAG)</strong>, serta <strong class="text-slate-950 dark:text-white font-bold">Pelatihan IT Profesional</strong>.
                </p>

                <!-- Dual Action CTA Buttons -->
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white font-extrabold text-sm shadow-xl shadow-indigo-500/30 hover:scale-105 transition-all flex items-center justify-center gap-2">
                        <span>Hitung Estimasi Proyek Anda</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="https://wa.me/6289695249089" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-full bg-white dark:bg-slate-900 border-2 border-slate-300 dark:border-slate-700 text-slate-950 dark:text-white font-extrabold text-sm shadow-md hover:bg-slate-50 dark:hover:bg-slate-800 transition-all flex items-center justify-center gap-2">
                        <span>💬 Chat WA (0896 9524 9089)</span>
                    </a>
                </div>

                <!-- Tech Capability Badges -->
                <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-2.5 text-xs text-slate-700 dark:text-slate-300 font-mono">
                    <span class="px-3 py-1.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xs font-bold">Laravel 13 & PHP 8.4</span>
                    <span class="px-3 py-1.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xs font-bold">Flutter iOS/Android</span>
                    <span class="px-3 py-1.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xs font-bold">SQLite / MySQL DB</span>
                    <span class="px-3 py-1.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xs font-bold">AI RAG & Vibe Coding</span>
                </div>
            </div>

            <!-- Right Column: 3D Holographic Parallax Mockup Showcase -->
            <div class="lg:col-span-5 flex justify-center perspective-1000">
                <div class="relative w-full max-w-lg preserve-3d transition-transform duration-150 ease-out"
                     :style="`transform: rotateY(${mouseX}deg) rotateX(${-mouseY}deg);`">
                    
                    <!-- Glowing Aura -->
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-400 rounded-3xl opacity-30 blur-2xl"></div>

                    <!-- Holographic Card Frame -->
                    <div class="relative bento-card p-4 shadow-2xl bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-700 overflow-hidden">
                        
                        <!-- Header Bar -->
                        <div class="flex items-center justify-between pb-3 border-b border-slate-200 dark:border-slate-800 text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-rose-500"></span>
                                <span class="w-3 h-3 rounded-full bg-amber-500"></span>
                                <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                                <span class="font-mono text-slate-800 dark:text-slate-300 text-[11px] font-bold ml-2">berandadigital.net &bull; Live Preview</span>
                            </div>
                            <span class="px-2 py-0.5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-700 dark:text-emerald-300 text-[10px] font-bold">
                                99.9% Uptime
                            </span>
                        </div>

                        <!-- Authentic Screencapture with Interactive Hover Scroll -->
                        <div class="mt-3 aspect-4/3 rounded-2xl overflow-hidden relative shadow-inner bg-slate-100 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 group">
                            <img src="/preview/screencapture-berandadigital-net-2026-08-19-17_31_05.png" alt="Beranda Digital Preview" class="w-full h-full object-cover object-top group-hover:object-bottom transition-all duration-1000 cursor-pointer" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent pointer-events-none"></div>
                            
                            <div class="absolute bottom-4 left-4 right-4 text-white space-y-1">
                                <span class="px-2.5 py-1 rounded-md bg-indigo-600 font-mono text-[10px] uppercase font-extrabold tracking-wider">
                                    Authentic Web Preview
                                </span>
                                <h4 class="text-sm font-extrabold text-white">Tampilan Asli berandadigital.net</h4>
                                <p class="text-[11px] text-slate-200 font-medium">CV. Beranda Teknologi Digital &bull; Palembang & Ogan Ilir</p>
                            </div>
                        </div>

                        <!-- Floating Micro-Badge -->
                        <div class="absolute -top-4 -right-4 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 p-3 rounded-2xl shadow-xl flex items-center gap-2 font-mono text-xs font-extrabold text-indigo-600 dark:text-indigo-400 animate-float-slow">
                            <span>⚡ High Speed Performance</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Metrics & Impact Counter Band -->
<section class="py-10 bg-white dark:bg-slate-900 border-y border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="space-y-1">
                <div class="text-3xl sm:text-4xl font-extrabold text-indigo-600 dark:text-indigo-400 font-heading">150+</div>
                <div class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 font-bold">Proyek Sukses Selesai</div>
            </div>
            <div class="space-y-1">
                <div class="text-3xl sm:text-4xl font-extrabold text-cyan-600 dark:text-cyan-400 font-heading">99.8%</div>
                <div class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 font-bold">Kepuasan Klien & Mitra</div>
            </div>
            <div class="space-y-1">
                <div class="text-3xl sm:text-4xl font-extrabold text-purple-600 dark:text-purple-400 font-heading">85+</div>
                <div class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 font-bold">Event & Workshop IT</div>
            </div>
            <div class="space-y-1">
                <div class="text-3xl sm:text-4xl font-extrabold text-amber-500 font-heading">5,000+</div>
                <div class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 font-bold">Alumni & Peserta Pelatihan</div>
            </div>
        </div>
    </div>
</section>

<!-- Authentic Partners & Client Logos Marquee Section -->
<section class="py-14 bg-[#FAFAFC] dark:bg-[#070A11] overflow-hidden border-b border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <p class="text-center text-xs font-extrabold uppercase tracking-widest text-slate-600 dark:text-slate-400">
            Dipercaya Oleh Instansi Pemerintah, Perguruan Tinggi & Perusahaan
        </p>

        <!-- Infinite Logo Marquee Track -->
        <div class="relative w-full overflow-hidden">
            <div class="animate-marquee items-center gap-8 sm:gap-12">
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0">
                    <img src="/images/LOGO-CLIENT-WEB.png" alt="Mitra Client Web" class="h-8 w-auto object-contain" />
                </div>
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0">
                    <img src="/images/Partner_img-2-1.png" alt="Mitra Partner 2" class="h-7 w-auto object-contain" />
                </div>
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0">
                    <img src="/images/Partner_img-3-1.png" alt="Mitra Partner 3" class="h-7 w-auto object-contain" />
                </div>
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0">
                    <img src="/images/Partner_img-4-1.png" alt="Mitra Partner 4" class="h-7 w-auto object-contain" />
                </div>
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0">
                    <img src="/images/Partner_img-5-1.png" alt="Mitra Partner 5" class="h-7 w-auto object-contain" />
                </div>
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0 font-extrabold text-xs text-slate-900 dark:text-slate-100">
                    🏛️ Kementerian Komdigi RI
                </div>
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0 font-extrabold text-xs text-slate-900 dark:text-slate-100">
                    🎓 Politeknik Akamigas Palembang
                </div>
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0 font-extrabold text-xs text-slate-900 dark:text-slate-100">
                    🏫 SIT Robbani Ogan Ilir
                </div>
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0 font-extrabold text-xs text-slate-900 dark:text-slate-100">
                    📍 Desa Senuro Timur Ogan Ilir
                </div>

                <!-- Duplicate for Seamless Infinite Loop -->
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0">
                    <img src="/images/LOGO-CLIENT-WEB.png" alt="Mitra Client Web" class="h-8 w-auto object-contain" />
                </div>
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0">
                    <img src="/images/Partner_img-2-1.png" alt="Mitra Partner 2" class="h-7 w-auto object-contain" />
                </div>
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0 font-extrabold text-xs text-slate-900 dark:text-slate-100">
                    🏛️ Kementerian Komdigi RI
                </div>
                <div class="h-12 px-5 py-2 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center justify-center shadow-xs shrink-0 font-extrabold text-xs text-slate-900 dark:text-slate-100">
                    🎓 Politeknik Akamigas Palembang
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Futuristic Bento Grid Ecosystem (2026 Innovation Grid) -->
<section class="py-24 bg-white dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="px-4 py-1.5 rounded-full bg-indigo-50 dark:bg-indigo-950/80 text-indigo-700 dark:text-indigo-300 font-extrabold text-xs uppercase tracking-wider border border-indigo-200 dark:border-indigo-800">
                Ekosistem Solusi Digital 2026
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-950 dark:text-white font-heading">
                Kapabilitas & Arsitektur Sistem Modern
            </h2>
            <p class="text-slate-600 dark:text-slate-400 text-sm sm:text-base font-medium">Dirancang dengan standar performa tertinggi, keamanan terjamin, dan skalabilitas tak terbatas.</p>
        </div>

        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Bento 1: Enterprise Web Apps -->
            <div class="md:col-span-2 bento-card p-8 sm:p-10 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 dark:bg-blue-950/80 text-blue-700 dark:text-blue-300 text-xs font-bold border border-blue-200 dark:border-blue-800">
                        <span>Web Development Enterprise</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-950 dark:text-white">Website, Sistem Informasi & Portal Digital</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed max-w-xl font-medium">
                        Pengembangan Website Perusahaan, Portal Desa Digital Senuro Timur, Sistem Sekolah PPDB Online, dan Web Application dengan performa tinggi berbasis Laravel 13 & Tailwind v4.
                    </p>

                    <!-- Interactive Code Snippet Preview -->
                    <div class="p-4 rounded-2xl bg-slate-950 text-slate-200 font-mono text-xs space-y-1.5 border border-slate-800 shadow-inner">
                        <div class="flex items-center justify-between text-slate-400 text-[10px] pb-1 border-b border-slate-800">
                            <span>App\Http\Controllers\EnterpriseController.php</span>
                            <span class="text-emerald-400">PHP 8.4 &bull; Laravel 13</span>
                        </div>
                        <p><span class="text-purple-400">public function</span> <span class="text-blue-400">deployEnterpriseApp</span>(<span class="text-amber-300">Request</span> $request) {</p>
                        <p class="pl-4"><span class="text-indigo-400">$system</span> = <span class="text-emerald-400">BerandaDigital</span>::build(<span class="text-emerald-300">'High-Performance'</span>);</p>
                        <p class="pl-4"><span class="text-purple-400">return</span> response()->json([<span class="text-emerald-300">'status'</span> => <span class="text-emerald-300">'Ready for Scale'</span>]);</p>
                        <p>}</p>
                    </div>
                </div>

                <div class="pt-6 flex items-center justify-between border-t border-slate-200 dark:border-slate-800">
                    <span class="text-xs font-bold text-slate-600 dark:text-slate-400 font-mono">Tech: Laravel 13, SQLite / MySQL, Alpine.js</span>
                    <a href="{{ route('services') }}" class="text-xs font-extrabold text-indigo-600 dark:text-indigo-400 hover:underline flex items-center gap-1">
                        <span>Pelajari Detail</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Bento 2: Mobile App (Flutter) -->
            <div class="bento-card p-8 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-50 dark:bg-cyan-950/80 text-cyan-700 dark:text-cyan-300 text-xs font-bold border border-cyan-200 dark:border-cyan-800">
                        <span>Mobile Cross-Platform</span>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-950 dark:text-white">Aplikasi Mobile iOS & Android</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed font-medium">
                        Aplikasi Flutter cepat terintegrasi REST API backend, push notification, geolocation, dan offline cache capability.
                    </p>
                    
                    <div class="p-3 rounded-2xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-xs space-y-2">
                        <div class="flex items-center justify-between text-[11px] font-bold">
                            <span>📱 Multi-Platform</span>
                            <span class="text-cyan-600 dark:text-cyan-400">Single Codebase</span>
                        </div>
                        <div class="w-full bg-slate-200 dark:bg-slate-800 rounded-full h-2">
                            <div class="bg-cyan-500 h-2 rounded-full w-full"></div>
                        </div>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-200 dark:border-slate-800">
                    <a href="{{ route('services') }}" class="text-xs font-extrabold text-cyan-600 dark:text-cyan-400 hover:underline">Lihat Layanan Mobile &rarr;</a>
                </div>
            </div>

            <!-- Bento 3: AI Solutions & Private RAG -->
            <div class="bento-card p-8 flex flex-col justify-between group" x-data="{ simulatedAnswer: 'Halo! Engine AI RAG CV. Beranda Teknologi Digital siap membantu otomasi dokumen SOP dan sistem interaktif tanpa biaya langganan API pihak ketiga.' }">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-50 dark:bg-purple-950/80 text-purple-700 dark:text-purple-300 text-xs font-bold border border-purple-200 dark:border-purple-800">
                        <span>Artificial Intelligence</span>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-950 dark:text-white">Chatbot AI RAG Privat & Vibe Coding</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed font-medium">
                        Engine AI privat untuk membaca dokumen SOP internal perusahaan secara mandiri dan aman.
                    </p>

                    <!-- Interactive Live Chatbot Simulator Preview -->
                    <div class="p-3.5 rounded-2xl bg-purple-50/50 dark:bg-purple-950/40 border border-purple-200 dark:border-purple-800 text-xs space-y-2">
                        <div class="flex items-center gap-2 text-purple-700 dark:text-purple-300 font-bold text-[11px]">
                            <span class="w-2 h-2 rounded-full bg-purple-500 animate-ping"></span>
                            <span>Simulasi AI RAG Chatbot:</span>
                        </div>
                        <p class="text-[11px] text-slate-700 dark:text-slate-300 italic leading-relaxed" x-text="simulatedAnswer"></p>
                        
                        <div class="flex flex-wrap gap-1.5 pt-1">
                            <button @click="simulatedAnswer = 'Sistem RAG (Retrieval-Augmented Generation) membaca PDF/Word SOP perusahaan Anda secara privat & akurat 100%.'" 
                                    class="px-2 py-0.5 rounded-lg bg-white dark:bg-slate-900 border border-purple-200 dark:border-purple-800 text-[10px] font-bold text-purple-600 dark:text-purple-400 hover:bg-purple-100">
                                Apa itu RAG?
                            </button>
                            <button @click="simulatedAnswer = 'Proses pembuatan website desa/perusahaan rata-rata memakan waktu 7-14 hari kerja siap online.'" 
                                    class="px-2 py-0.5 rounded-lg bg-white dark:bg-slate-900 border border-purple-200 dark:border-purple-800 text-[10px] font-bold text-purple-600 dark:text-purple-400 hover:bg-purple-100">
                                Berapa lama pengerjaan?
                            </button>
                        </div>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-200 dark:border-slate-800">
                    <a href="{{ route('services') }}" class="text-xs font-extrabold text-purple-600 dark:text-purple-400 hover:underline">Pelajari Engine AI &rarr;</a>
                </div>
            </div>

            <!-- Bento 4: Corporate Training & Speaker Profile -->
            <div class="md:col-span-2 bento-card p-8 sm:p-10 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-50 dark:bg-amber-950/80 text-amber-800 dark:text-amber-300 text-xs font-bold border border-amber-200 dark:border-amber-800">
                        <span>Corporate Training & Keynote Speaker</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-950 dark:text-white">Pelatihan IT, Training for Trainer & Keynote Speaker</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed max-w-xl font-medium">
                        Dipimpin langsung oleh Direktur Utama <strong class="text-slate-950 dark:text-white font-bold">Septa Ryan Hidayat, S.Kom</strong> (Narasumber Komdigi RI, Dosen Tamu Akamigas Palembang, & Dewan Pakar IGI). Pelatihan Vibe Coding, AI RAG, & Pembelajaran Koding Interaktif.
                    </p>
                </div>

                <div class="pt-6 flex flex-col sm:flex-row sm:items-center justify-between border-t border-slate-200 dark:border-slate-800 gap-3">
                    <span class="text-xs font-bold text-slate-600 dark:text-slate-400">Narasumber: Septa Ryan Hidayat, S.Kom</span>
                    <a href="{{ route('trainer.index') }}" class="text-xs font-extrabold text-amber-600 dark:text-amber-400 hover:underline flex items-center gap-1">
                        <span>Lihat Profil Speaker & Jadwal Seminar</span> &rarr;
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Interactive Live Project Cost Estimator Calculator -->
<section class="py-20 bg-[#FAFAFC] dark:bg-[#070A11] border-t border-slate-200 dark:border-slate-800"
         x-data="{
            serviceType: 'web',
            scale: 'medium',
            needAI: true,
            needMobile: false,
            calcPrice() {
                let base = 2500000;
                if (this.serviceType === 'web') base = 3500000;
                if (this.serviceType === 'mobile') base = 6500000;
                if (this.serviceType === 'village') base = 4000000;
                
                if (this.scale === 'large') base *= 1.8;
                if (this.scale === 'enterprise') base *= 2.8;

                if (this.needAI) base += 2000000;
                if (this.needMobile) base += 3500000;

                return new Intl.NumberFormat('id-ID').format(base);
            }
         }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="text-center max-w-2xl mx-auto space-y-3">
            <span class="px-4 py-1 rounded-full bg-cyan-50 dark:bg-cyan-950/80 text-cyan-700 dark:text-cyan-300 font-extrabold text-xs uppercase tracking-wider border border-cyan-200 dark:border-cyan-800">
                Kalkulator Interaktif
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-950 dark:text-white font-heading">
                Hitung Estimasi Anggaran Proyek Digital Anda
            </h2>
            <p class="text-slate-600 dark:text-slate-400 text-sm">Pilih spesifikasi kebutuhan Anda dan dapatkan perkiraan biaya instan.</p>
        </div>

        <div class="bento-card p-8 sm:p-12 max-w-4xl mx-auto bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 shadow-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Left: Controls -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 dark:text-slate-400 mb-2">1. Jenis Kebutuhan Utama</label>
                        <div class="grid grid-cols-3 gap-2">
                            <button @click="serviceType = 'web'" :class="serviceType === 'web' ? 'bg-indigo-600 text-white font-extrabold' : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-medium'" class="p-2.5 rounded-xl text-xs transition-all">Website</button>
                            <button @click="serviceType = 'mobile'" :class="serviceType === 'mobile' ? 'bg-indigo-600 text-white font-extrabold' : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-medium'" class="p-2.5 rounded-xl text-xs transition-all">Mobile App</button>
                            <button @click="serviceType = 'village'" :class="serviceType === 'village' ? 'bg-indigo-600 text-white font-extrabold' : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-medium'" class="p-2.5 rounded-xl text-xs transition-all">Desa/Sekolah</button>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 dark:text-slate-400 mb-2">2. Skala Fitur & Database</label>
                        <div class="grid grid-cols-3 gap-2">
                            <button @click="scale = 'medium'" :class="scale === 'medium' ? 'bg-cyan-600 text-white font-extrabold' : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-medium'" class="p-2.5 rounded-xl text-xs transition-all">Standar</button>
                            <button @click="scale = 'large'" :class="scale === 'large' ? 'bg-cyan-600 text-white font-extrabold' : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-medium'" class="p-2.5 rounded-xl text-xs transition-all">Advanced</button>
                            <button @click="scale = 'enterprise'" :class="scale === 'enterprise' ? 'bg-cyan-600 text-white font-extrabold' : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-medium'" class="p-2.5 rounded-xl text-xs transition-all">Enterprise</button>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 dark:text-slate-400 mb-2">3. Fitur Tambahan (Add-ons)</label>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-800 cursor-pointer">
                                <input type="checkbox" x-model="needAI" class="rounded text-indigo-600 focus:ring-indigo-500 w-4 h-4">
                                <span class="text-xs font-bold text-slate-800 dark:text-slate-200">Integrasi Engine AI Chatbot / RAG (+Rp 2 Juta)</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-800 cursor-pointer">
                                <input type="checkbox" x-model="needMobile" class="rounded text-indigo-600 focus:ring-indigo-500 w-4 h-4">
                                <span class="text-xs font-bold text-slate-800 dark:text-slate-200">Aplikasi Mobile Flutter Pendamping (+Rp 3.5 Juta)</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Right: Estimated Result Box -->
                <div class="p-6 sm:p-8 rounded-2xl bg-gradient-to-br from-slate-900 to-indigo-950 text-white flex flex-col justify-between space-y-6 shadow-xl">
                    <div class="space-y-2">
                        <span class="text-[11px] font-mono text-cyan-400 uppercase tracking-widest block font-bold">Hasil Kalkulasi Estimasi</span>
                        <div class="text-3xl sm:text-4xl font-extrabold font-mono text-white flex items-baseline gap-1">
                            <span class="text-lg text-slate-400">Rp</span>
                            <span x-text="calcPrice()"></span>
                        </div>
                        <p class="text-xs text-slate-300 leading-relaxed font-medium">
                            Termasuk domain, hosting SSD NVMe kecepatan tinggi, SSL enkripsi, pelatihan penggunaan, dan pemeliharaan teknis gratis 3 bulan.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <a :href="`https://wa.me/6289695249089?text=Halo%20Beranda%20Digital,%20saya%20tertarik%20dengan%20estimasi%20paket%20${serviceType}%20skala%20${scale}%20dengan%20perkiraan%20Rp%20${calcPrice()}`"
                           target="_blank"
                           class="block w-full text-center px-6 py-3.5 rounded-full bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-extrabold text-xs shadow-lg transition-all">
                            💬 Kunci Penawaran via WhatsApp &rarr;
                        </a>
                        <span class="text-[10px] text-center text-slate-400 block font-medium">Bisa disesuaikan dengan TOR / RAB instansi Anda.</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Authentic Featured Portofolio Visualizer Section -->
<section class="py-24 bg-white dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div class="space-y-2">
                <span class="text-xs font-extrabold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Portofolio & Screencapture Asli</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-950 dark:text-white font-heading">Proyek Nyata Yang Telah Berhasil Dibangun</h2>
            </div>
            <a href="{{ route('projects.index') }}" class="text-sm font-extrabold text-indigo-600 dark:text-indigo-400 hover:underline">
                Lihat Semua Portofolio Klien &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
                <div class="bento-card overflow-hidden flex flex-col group border border-slate-200 dark:border-slate-800">
                    <div class="aspect-video overflow-hidden bg-slate-100 dark:bg-slate-950 relative border-b border-slate-200 dark:border-slate-800">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 rounded-full bg-slate-950 text-white text-[10px] font-bold shadow-md">
                                {{ $project->category?->name ?? 'Proyek Klien' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="text-lg font-extrabold text-slate-950 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors line-clamp-1">
                                {{ $project->title }}
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400 text-xs line-clamp-2 leading-relaxed font-medium">
                                {{ $project->summary }}
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between text-xs">
                            <span class="font-bold text-indigo-600 dark:text-indigo-400">{{ $project->client_name }}</span>
                            <a href="{{ route('projects.show', $project->slug) }}" class="font-bold text-slate-950 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-400">
                                Detail &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Dedicated Testimonials Section -->
<section class="py-24 bg-[#FAFAFC] dark:bg-[#070A11] border-t border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="px-4 py-1.5 rounded-full bg-amber-50 dark:bg-amber-950/80 text-amber-800 dark:text-amber-300 font-extrabold text-xs uppercase tracking-wider border border-amber-200 dark:border-amber-800">
                Testimoni Klien & Mitra
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-950 dark:text-white font-heading">
                Apa Kata Klien & Rekan Mitra Kami?
            </h2>
            <p class="text-slate-600 dark:text-slate-400 text-sm font-medium">Ulasan autentik dari institusi pemerintah, akademisi, dan yayasan pendidikan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bento-card p-8 space-y-6 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center gap-1 text-amber-500 font-bold text-sm">
                        ★★★★★ <span>5.0</span>
                    </div>
                    <p class="text-slate-700 dark:text-slate-300 text-xs sm:text-sm leading-relaxed font-medium italic">
                        "Pelayanan pembuatan website dan aplikasi administrasi desa di Senuro Timur sangat cepat dan responsif. Pengurusan surat warga jadi jauh lebih efisien!"
                    </p>
                </div>
                <div class="flex items-center gap-4 pt-4 border-t border-slate-200 dark:border-slate-800">
                    <img src="/images/img_testimonial_Home-E87QWM2.jpg" alt="Perangkat Desa" class="w-12 h-12 rounded-full object-cover border-2 border-indigo-600" />
                    <div>
                        <h4 class="text-xs font-extrabold text-slate-950 dark:text-white">Perangkat Desa Senuro Timur</h4>
                        <span class="text-[11px] font-bold text-indigo-600 dark:text-indigo-400">Pemerintah Desa Ogan Ilir</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bento-card p-8 space-y-6 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center gap-1 text-amber-500 font-bold text-sm">
                        ★★★★★ <span>5.0</span>
                    </div>
                    <p class="text-slate-700 dark:text-slate-300 text-xs sm:text-sm leading-relaxed font-medium italic">
                        "Materi Vibe Coding & AI RAG yang dibawakan Pak Septa Ryan Hidayat sangat menginspirasi dosen Politeknik Akamigas Palembang. Praktis & langsung bisa diimplementasikan."
                    </p>
                </div>
                <div class="flex items-center gap-4 pt-4 border-t border-slate-200 dark:border-slate-800">
                    <img src="/images/Wulan.jpg" alt="Dosen Akamigas" class="w-12 h-12 rounded-full object-cover border-2 border-indigo-600" />
                    <div>
                        <h4 class="text-xs font-extrabold text-slate-950 dark:text-white">Tim Dosen & Akademisi</h4>
                        <span class="text-[11px] font-bold text-indigo-600 dark:text-indigo-400">Politeknik Akamigas Palembang</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bento-card p-8 space-y-6 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center gap-1 text-amber-500 font-bold text-sm">
                        ★★★★★ <span>5.0</span>
                    </div>
                    <p class="text-slate-700 dark:text-slate-300 text-xs sm:text-sm leading-relaxed font-medium italic">
                        "Sistem PPDB online dan website sekolah SIT Robbani sangat membantu proses penerimaan siswa baru. Dukungan teknis Beranda Digital sangat terpercaya!"
                    </p>
                </div>
                <div class="flex items-center gap-4 pt-4 border-t border-slate-200 dark:border-slate-800">
                    <img src="/images/testimonial_img-11.jpeg" alt="Kepala Sekolah" class="w-12 h-12 rounded-full object-cover border-2 border-indigo-600" />
                    <div>
                        <h4 class="text-xs font-extrabold text-slate-950 dark:text-white">Pengelola Yayasan Pendidikan</h4>
                        <span class="text-[11px] font-bold text-indigo-600 dark:text-indigo-400">SIT Robbani Ogan Ilir</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Founder Profile & Authentic Event Gallery Section -->
<section class="py-24 bg-white dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Direktur Utama Profile Card -->
        <div class="bento-card p-8 sm:p-14 relative overflow-hidden bg-white dark:bg-slate-900 shadow-xl border-2 border-slate-200 dark:border-slate-800">
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
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-50 dark:bg-amber-950/80 text-amber-800 dark:text-amber-300 text-xs font-bold border border-amber-200 dark:border-amber-800">
                        <span>Pimpinan Perusahaan & Trainer Nasional</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-950 dark:text-white font-heading">
                        {{ $trainerName }}
                    </h2>

                    <p class="text-indigo-600 dark:text-indigo-400 font-extrabold text-sm sm:text-base">
                        {{ $trainerTitle }}
                    </p>

                    <p class="text-slate-700 dark:text-slate-300 text-xs sm:text-sm leading-relaxed max-w-2xl font-medium">
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
                    <span class="text-xs font-extrabold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Dokumentasi Acara & Workshop</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-950 dark:text-white font-heading">Galeri Tampilan Website & Event Real</h3>
                </div>
                <a href="{{ route('trainer.index') }}" class="text-xs font-extrabold text-indigo-600 dark:text-indigo-400 hover:underline">Lihat Galeri Lengkap &rarr;</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($galleries as $gallery)
                    <div class="bento-card overflow-hidden group border border-slate-200 dark:border-slate-800">
                        <div class="aspect-4/3 overflow-hidden relative">
                            <img src="{{ $gallery->image_path }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/20 to-transparent"></div>
                            
                            <div class="absolute bottom-3 left-3 right-3 text-white space-y-1">
                                <span class="text-[10px] uppercase font-extrabold tracking-wider px-2 py-0.5 rounded bg-indigo-600">
                                    {{ $gallery->category }}
                                </span>
                                <h4 class="text-xs font-extrabold line-clamp-1">{{ $gallery->title }}</h4>
                                <p class="text-[10px] text-slate-200 line-clamp-1 font-medium">📍 {{ $gallery->location }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<!-- Glowing Futuristic CTA Banner -->
<section class="py-20 bg-slate-950 text-white relative overflow-hidden">
    <!-- Ambient Glow behind CTA -->
    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 via-indigo-600/30 to-cyan-500/20 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6 relative z-10">
        <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight font-heading">
            Siap Merealisasikan Ide Digital Anda?
        </h2>
        <p class="text-slate-300 text-xs sm:text-base leading-relaxed font-medium max-w-2xl mx-auto">
            Konsultasikan rencana pembuatan website, aplikasi mobile Flutter, sistem informasi, atau pelatihan IT bersama tim profesional <strong class="text-white font-bold">CV. Beranda Teknologi Digital</strong>.
        </p>
        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white font-extrabold text-xs sm:text-sm shadow-2xl hover:scale-105 transition-all">
                Kalkulator Estimasi Biaya (Hitung Otomatis)
            </a>
            <a href="https://wa.me/6289695249089" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-full bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-xs sm:text-sm shadow-xl flex items-center justify-center gap-2 transition-all">
                <span>Chat WhatsApp (0896 9524 9089)</span>
            </a>
        </div>
    </div>
</section>
@endsection
