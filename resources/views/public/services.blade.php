@extends('layouts.app')

@section('title', 'Layanan Jasa Pembuatan Website & Aplikasi - CV. Beranda Teknologi Digital')

@section('content')
<!-- SECTION 1: HERO HEADER (FlyMotion Service Hero with Illustration) -->
<section class="relative pt-6 sm:pt-10 md:pt-14 pb-14 sm:pb-18 md:pb-24 lg:pt-16 lg:pb-24 overflow-hidden bg-flymotion-hero transition-colors duration-300">
    
    <!-- Organic Background Accents -->
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-200/40 rounded-full blur-3xl pointer-events-none anim-logo-object"></div>
    <div class="absolute top-1/2 -left-20 w-80 h-80 bg-orange-100/40 rounded-full blur-3xl pointer-events-none anim-logo-bottom"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            
            <!-- Left: Typography & CTAs -->
            <div class="lg:col-span-7 space-y-4 sm:space-y-6 text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start gap-3">
                    <span class="w-8 h-1 bg-[#3E5CE7] rounded-full"></span>
                    <span class="text-xs sm:text-sm font-bold tracking-wider uppercase text-[#3E5CE7]">Service</span>
                </div>

                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-[#07153f] leading-[1.2]">
                    Jasa Pembuatan <br class="hidden sm:inline" />
                    <span class="text-[#3E5CE7]">Website & Aplikasi</span>
                </h1>

                <p class="text-xs sm:text-sm md:text-base text-[#4a4a4a] max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    Anda ingin membuat website & aplikasi? Kami menyediakan solusi digital lengkap dengan tampilan desain yang menarik, user-friendly, responsive mobile, didukung dengan teknologi framework modern Laravel 13, Flutter, dan integrasi Artificial Intelligence.
                </p>

                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3">
                    <a href="{{ route('contact') }}" 
                       class="w-full sm:w-auto px-7 py-3.5 sm:px-8 sm:py-4 rounded-xl font-bold text-xs sm:text-sm uppercase tracking-wider shadow-lg shadow-orange-500/25 active:scale-98 transition-all text-center border border-orange-400/50"
                       style="background: linear-gradient(135deg, #fe6000 0%, #ff7a29 100%) !important; color: #ffffff !important;">
                        <span class="font-bold" style="color: #ffffff !important;">Konsultasi Proyek &rarr;</span>
                    </a>
                    <a href="{{ route('projects.index') }}" 
                       class="w-full sm:w-auto px-6 py-3.5 sm:px-7 sm:py-4 rounded-xl font-bold text-xs uppercase tracking-wider shadow-md active:scale-98 transition-all text-center border border-blue-400/40"
                       style="background: #3E5CE7 !important; color: #ffffff !important;">
                        <span class="font-bold" style="color: #ffffff !important;">Lihat Portofolio</span>
                    </a>
                </div>
            </div>

            <!-- Right: Hero Vector Illustration Showcase -->
            <div class="lg:col-span-5 flex justify-center relative">
                <div class="relative w-full max-w-md">
                    <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-xl relative anim-logo-top">
                        <div class="aspect-video rounded-2xl overflow-hidden bg-gradient-to-tr from-blue-50 to-indigo-50 p-2 flex items-center justify-center">
                            <img src="/images/Ilustrasi-Homepage-1-1.png" alt="Service Showcase" class="w-full h-full object-contain" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 2: WHAT WE DO (FlyMotion 4-Card Specialty Grid with Watermark) -->
<section class="py-20 bg-white border-t border-slate-100 transition-colors duration-300 relative overflow-hidden">
    
    <!-- Watermark "Service" -->
    <div class="absolute top-6 left-1/2 -translate-x-1/2 text-8xl sm:text-9xl font-black text-slate-100/60 pointer-events-none select-none tracking-wider -z-0">
        Service
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16 relative z-10">
        
        <!-- Header -->
        <div class="text-center space-y-3">
            <span class="px-4 py-1.5 rounded-full bg-orange-50 text-[#fe6000] font-bold text-xs uppercase tracking-wider">
                Our Service
            </span>
            <h2 class="text-4xl font-extrabold text-[#07153f]">What We Do</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Info -->
            <div class="lg:col-span-5 space-y-5">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-1 bg-[#fe6000] rounded-full"></span>
                    <span class="text-xs font-bold uppercase tracking-wider text-[#fe6000]">WHAT WE DO</span>
                </div>
                <h3 class="text-3xl font-extrabold text-[#07153f]">
                    Apa yang Kami Kerjakan ?
                </h3>
                <p class="text-base text-[#4a4a4a] leading-relaxed">
                    Setiap tim designer & developer kami memiliki pengalaman dan sertifikasi resmi yang berkaitan dengan keahlian mereka untuk memberikan hasil yang maksimal. Tim Designer memiliki keahlian dalam pembuatan User-Interface & User-Experience (UI/UX) modern.
                </p>
                <div class="pt-2 text-2xl font-black text-[#fe6000] anim-logo-bottom">~ ~ ~</div>
            </div>

            <!-- Right 10 Pastel Cards Grid -->
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-5">
                
                <!-- 1. Pembuatan Website -->
                <div class="bg-[#f8faff] dark:bg-slate-800/80 p-6 rounded-2xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 space-y-2.5 text-center sm:text-left">
                    <div class="w-12 h-12 rounded-2xl bg-orange-100 text-[#fe6000] flex items-center justify-center text-2xl font-bold mx-auto sm:mx-0">
                        🏢
                    </div>
                    <h4 class="text-base font-bold text-[#07153f] dark:text-white">Pembuatan Website Enterprise</h4>
                    <p class="text-xs text-[#64748b] dark:text-slate-300 leading-relaxed">
                        Website profil perusahaan, portal berita, dan company profile yang elegan, cepat, dan teroptimasi SEO Google.
                    </p>
                </div>

                <!-- 2. Aplikasi Android & iOS -->
                <div class="bg-[#f8faff] dark:bg-slate-800/80 p-6 rounded-2xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 space-y-2.5 text-center sm:text-left">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100 text-[#3E5CE7] flex items-center justify-center text-2xl font-bold mx-auto sm:mx-0">
                        📱
                    </div>
                    <h4 class="text-base font-bold text-[#07153f] dark:text-white">Aplikasi Android & iOS (Flutter)</h4>
                    <p class="text-xs text-[#64748b] dark:text-slate-300 leading-relaxed">
                        Pengembangan aplikasi mobile native & multiplatform untuk absensi, layanan warga, e-commerce, dan sistem sekolah.
                    </p>
                </div>

                <!-- 3. Sistem Informasi Instansi -->
                <div class="bg-[#f8faff] dark:bg-slate-800/80 p-6 rounded-2xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 space-y-2.5 text-center sm:text-left">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-2xl font-bold mx-auto sm:mx-0">
                        ⚙️
                    </div>
                    <h4 class="text-base font-bold text-[#07153f] dark:text-white">Sistem Informasi Manajemen</h4>
                    <p class="text-xs text-[#64748b] dark:text-slate-300 leading-relaxed">
                        Digitalisasi alur administrasi instansi, database kependudukan desa, SIM sekolah, dan ERP terpadu.
                    </p>
                </div>

                <!-- 4. Virtual Reality & Augmented Reality -->
                <div class="bg-[#f8faff] dark:bg-slate-800/80 p-6 rounded-2xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 space-y-2.5 text-center sm:text-left">
                    <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center text-2xl font-bold mx-auto sm:mx-0">
                        🥽
                    </div>
                    <h4 class="text-base font-bold text-[#07153f] dark:text-white">Virtual & Augmented Reality (VR/AR)</h4>
                    <p class="text-xs text-[#64748b] dark:text-slate-300 leading-relaxed">
                        Media imersif 3D untuk simulasi praktikum laboratorium, visualisasi arsitektur, dan pameran virtual.
                    </p>
                </div>

                <!-- 5. Desain Grafis & Branding -->
                <div class="bg-[#f8faff] dark:bg-slate-800/80 p-6 rounded-2xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 space-y-2.5 text-center sm:text-left">
                    <div class="w-12 h-12 rounded-2xl bg-pink-100 text-pink-600 flex items-center justify-center text-2xl font-bold mx-auto sm:mx-0">
                        🎨
                    </div>
                    <h4 class="text-base font-bold text-[#07153f] dark:text-white">Desain Grafis & Brand Identity</h4>
                    <p class="text-xs text-[#64748b] dark:text-slate-300 leading-relaxed">
                        Pembuatan logo vektor profesional, brand guideline, banner promosi, brosur, dan perlengkapan stationery.
                    </p>
                </div>

                <!-- 6. Video Editing & Multimedia -->
                <div class="bg-[#f8faff] dark:bg-slate-800/80 p-6 rounded-2xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 space-y-2.5 text-center sm:text-left">
                    <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center text-2xl font-bold mx-auto sm:mx-0">
                        🎬
                    </div>
                    <h4 class="text-base font-bold text-[#07153f] dark:text-white">Video Editing & Motion Graphic</h4>
                    <p class="text-xs text-[#64748b] dark:text-slate-300 leading-relaxed">
                        Editing video profil perusahaan, video animasi edukasi, teaser produk, serta konten reels/TikTok berkualitas tinggi.
                    </p>
                </div>

                <!-- 7. Jasa Kelola Sosial Media -->
                <div class="bg-[#f8faff] dark:bg-slate-800/80 p-6 rounded-2xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 space-y-2.5 text-center sm:text-left">
                    <div class="w-12 h-12 rounded-2xl bg-cyan-100 text-cyan-600 flex items-center justify-center text-2xl font-bold mx-auto sm:mx-0">
                        💬
                    </div>
                    <h4 class="text-base font-bold text-[#07153f] dark:text-white">Jasa Kelola Media Sosial</h4>
                    <p class="text-xs text-[#64748b] dark:text-slate-300 leading-relaxed">
                        Pengelolaan Instagram, Facebook, dan TikTok: riset konten, copywriting persuasif, dan posting terjadwal.
                    </p>
                </div>

                <!-- 8. Media Pembelajaran Interaktif -->
                <div class="bg-[#f8faff] dark:bg-slate-800/80 p-6 rounded-2xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 space-y-2.5 text-center sm:text-left">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-600 flex items-center justify-center text-2xl font-bold mx-auto sm:mx-0">
                        📚
                    </div>
                    <h4 class="text-base font-bold text-[#07153f] dark:text-white">Media Pembelajaran Interaktif</h4>
                    <p class="text-xs text-[#64748b] dark:text-slate-300 leading-relaxed">
                        Software multimedia edukasi untuk dosen, guru, dan sekolah guna meningkatkan daya serap peserta didik.
                    </p>
                </div>

                <!-- 9. Digital Invitation -->
                <div class="bg-[#f8faff] dark:bg-slate-800/80 p-6 rounded-2xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 space-y-2.5 text-center sm:text-left">
                    <div class="w-12 h-12 rounded-2xl bg-rose-100 text-rose-600 flex items-center justify-center text-2xl font-bold mx-auto sm:mx-0">
                        💌
                    </div>
                    <h4 class="text-base font-bold text-[#07153f] dark:text-white">Undangan Digital (Digital Invitation)</h4>
                    <p class="text-xs text-[#64748b] dark:text-slate-300 leading-relaxed">
                        Website undangan pernikahan, seminar, dan wisuda eksklusif dengan buku tamu, RSVP online, dan navigasi peta.
                    </p>
                </div>

                <!-- 10. Jasa Narasumber & Trainer IT -->
                <div class="bg-[#f8faff] dark:bg-slate-800/80 p-6 rounded-2xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 space-y-2.5 text-center sm:text-left">
                    <div class="w-12 h-12 rounded-2xl bg-teal-100 text-teal-600 flex items-center justify-center text-2xl font-bold mx-auto sm:mx-0">
                        🎙️
                    </div>
                    <h4 class="text-base font-bold text-[#07153f] dark:text-white">Jasa Narasumber & Trainer IT</h4>
                    <p class="text-xs text-[#64748b] dark:text-slate-300 leading-relaxed">
                        Instruktur workshop, narasumber seminar nasional AI & Coding, serta pendampingan sertifikasi kompetensi digital.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- SECTION 3: PRICING / PERKIRAAN HARGA (FlyMotion Exact 3-Tier Card Grid) -->
<section class="py-20 bg-flymotion-soft dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800 transition-colors duration-300 relative overflow-hidden">
    
    <!-- Watermark "Pricing" -->
    <div class="absolute top-6 left-1/2 -translate-x-1/2 text-8xl sm:text-9xl font-black text-slate-200/40 dark:text-slate-800/30 pointer-events-none select-none tracking-wider -z-0">
        Pricing
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center space-y-3">
            <span class="px-4 py-1.5 rounded-full bg-blue-50 dark:bg-blue-950 text-[#3E5CE7] dark:text-blue-400 font-bold text-xs uppercase tracking-wider">
                Investasi Layanan
            </span>
            <h2 class="text-4xl font-extrabold text-[#07153f] dark:text-white">Paket Penawaran Resmi</h2>
            <p class="text-base text-[#4a4a4a] dark:text-slate-300">Pilihan paket pembuatan website dan aplikasi bergaransi resmi dari CV. Beranda Teknologi Digital.</p>
        </div>

        <!-- 3 Pricing Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Tier 1: Company Profile (Rp 5 Juta) -->
            <div class="bg-white dark:bg-slate-800/90 p-8 rounded-3xl border-2 border-[#3E5CE7] shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-6 text-center flex flex-col justify-between relative">
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-[#fe6000] text-white text-[10px] font-bold uppercase tracking-widest px-4 py-1 rounded-full shadow-md">
                    POPULER & REKOMENDASI
                </div>

                <div class="space-y-4 pt-2">
                    <div class="w-16 h-16 mx-auto rounded-full bg-blue-50 dark:bg-blue-950 text-[#3E5CE7] flex items-center justify-center text-3xl font-bold">
                        🏢
                    </div>
                    <h3 class="text-xl font-extrabold text-[#07153f] dark:text-white uppercase tracking-wider">Company Profile</h3>
                    <div class="text-2xl font-black text-[#fe6000] mono">Rp. 5.000.000</div>
                    <span class="text-[11px] text-slate-400 block -mt-2">Perpanjangan Rp 1.500.000 / thn</span>
                    
                    <ul class="space-y-2 text-xs text-slate-700 dark:text-slate-300 text-left pt-4 border-t border-slate-100 dark:border-slate-700">
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Free Domain & Hosting (1 Tahun)</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Premium Themes & SSL Security</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Mobile Friendly & Multi-Platform</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Sambutan Pimpinan & Visi Misi</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Struktur Organisasi & Agenda Kegiatan</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Layanan Pengaduan / Survey Kepuasan</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Galeri Foto, Video & Medsos</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Garansi Revisi 5x & Buku Panduan</span></li>
                    </ul>
                </div>

                <div class="pt-4">
                    <a href="https://wa.me/6285267774878?text=Halo%20CV.%20Beranda%20Teknologi%20Digital,%20saya%20tertarik%20pesan%20Paket%20Company%20Profile%20Rp%205.000.000" 
                       target="_blank" 
                       style="background-color: #fe6000 !important; color: #ffffff !important;"
                       class="block w-full py-3.5 rounded-xl font-bold text-xs uppercase shadow-md hover:brightness-110 transition-all text-center">
                        <span style="color: #ffffff !important;">Pesan Sekarang &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Tier 2: E-Klinik & Rekam Medis (Rp 15 Juta) -->
            <div class="bg-gradient-to-b from-[#07153f] to-slate-900 text-white p-8 rounded-3xl border border-blue-900 shadow-2xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-6 text-center flex flex-col justify-between relative">
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-emerald-500 text-white text-[10px] font-bold uppercase tracking-widest px-4 py-1 rounded-full shadow-md">
                    SOLUSI SPESIALIS KESEHATAN
                </div>

                <div class="space-y-4 pt-2">
                    <div class="w-16 h-16 mx-auto rounded-full bg-white/10 text-white flex items-center justify-center text-3xl font-bold">
                        🏥
                    </div>
                    <h3 class="text-xl font-extrabold text-white uppercase tracking-wider">E-Klinik (EMR)</h3>
                    <div class="text-2xl font-black text-emerald-400 mono">Rp. 15.000.000</div>
                    <span class="text-[11px] text-slate-300 block -mt-2">Perpanjangan Rp 2.500.000 / thn</span>
                    
                    <ul class="space-y-2 text-xs text-slate-200 text-left pt-4 border-t border-white/10">
                        <li class="flex items-center gap-2 text-emerald-400">✓ <span>Free Domain & Cloud Hosting Medis</span></li>
                        <li class="flex items-center gap-2 text-emerald-400">✓ <span>Booking Jadwal Dokter & Antrean</span></li>
                        <li class="flex items-center gap-2 text-emerald-400">✓ <span>Portal Pasien (Riwayat & Resep)</span></li>
                        <li class="flex items-center gap-2 text-emerald-400">✓ <span>Rekam Medis Elektronik (RME Kemenkes)</span></li>
                        <li class="flex items-center gap-2 text-emerald-400">✓ <span>Konsultasi Online & Telemedis</span></li>
                        <li class="flex items-center gap-2 text-emerald-400">✓ <span>Payment Gateway (QRIS, VA Bank)</span></li>
                        <li class="flex items-center gap-2 text-emerald-400">✓ <span>Analitik Obat, Kunjungan & Laporan</span></li>
                        <li class="flex items-center gap-2 text-emerald-400">✓ <span>Pelatihan Staf & Garansi Revisi 5x</span></li>
                    </ul>
                </div>

                <div class="pt-4">
                    <a href="https://wa.me/6285267774878?text=Halo%20CV.%20Beranda%20Teknologi%20Digital,%20saya%20tertarik%20pesan%20Paket%20E-Klinik%20Rp%2015.000.000" 
                       target="_blank" 
                       style="background-color: #3E5CE7 !important; color: #ffffff !important;"
                       class="block w-full py-3.5 rounded-xl font-bold text-xs uppercase shadow-md hover:brightness-110 transition-all text-center">
                        <span style="color: #ffffff !important;">Pesan Sekarang &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Tier 3: Custom Enterprise -->
            <div class="bg-white dark:bg-slate-800/90 p-8 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 space-y-6 text-center flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-16 h-16 mx-auto rounded-full bg-purple-50 dark:bg-purple-950 text-purple-600 flex items-center justify-center text-3xl font-bold">
                        ⚡
                    </div>
                    <h3 class="text-xl font-extrabold text-[#07153f] dark:text-white uppercase tracking-wider">Enterprise Kustom</h3>
                    <div class="text-2xl font-black text-[#07153f] dark:text-white mono">Sesuai Kebutuhan</div>
                    <span class="text-[11px] text-slate-400 block -mt-2">Instansi, Sekolah & Korporat</span>
                    
                    <ul class="space-y-2 text-xs text-slate-700 dark:text-slate-300 text-left pt-4 border-t border-slate-100 dark:border-slate-700">
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Arsitektur Kustom Sesuai SOP Instansi</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Mobile App Flutter (Android & iOS)</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Sistem Desa Digital / Smart Village</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Portal Akademik SIAKAD & PPDB</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Integrasi AI Chatbot & RAG Engine</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Integrasi API WhatsApp & Payment Gateway</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Server Dedicated Cloud & SLA 99.9%</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span>Maintenance Prioritas 24/7</span></li>
                    </ul>
                </div>

                <div class="pt-4">
                    <a href="https://wa.me/6285267774878?text=Halo%20CV.%20Beranda%20Teknologi%20Digital,%20saya%20ingin%20konsultasi%20pengembangan%20sistem%20Custom%20Enterprise" 
                       target="_blank" 
                       style="background-color: #07153f !important; color: #ffffff !important;"
                       class="block w-full py-3.5 rounded-xl font-bold text-xs uppercase shadow-md hover:brightness-125 transition-all text-center">
                        <span style="color: #ffffff !important;">Konsultasi Khusus &rarr;</span>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- SECTION 4: CONTACT / INQUIRY ("Punya Proyek di pikiran Anda ?") -->
<section class="py-20 bg-white border-t border-slate-100 transition-colors duration-300 relative overflow-hidden">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
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

                <div class="p-5 rounded-2xl bg-[#f8faff] border border-slate-100 space-y-2 text-xs font-semibold">
                    <div class="text-emerald-700 font-bold">✓ Garansi 100% Proyek Tepat Waktu</div>
                    <div class="text-[#3E5CE7] font-bold">✓ Layanan Konsultasi & Blueprint Arsitektur Gratis</div>
                </div>
            </div>

            <div class="lg:col-span-7 bg-white p-8 rounded-3xl border border-slate-100 shadow-2xl space-y-6">
                <div>
                    <h3 class="text-xl font-extrabold text-[#07153f]">Dapatkan Penawaran</h3>
                    <p class="text-xs text-[#64748b]">Isi form di bawah ini untuk konsultasi dan penawaran harga resmi.</p>
                </div>

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <input type="text" name="name" required placeholder="Nama" class="w-full px-4 py-3 rounded-md border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                    </div>
                    <div>
                        <input type="email" name="email" required placeholder="Email" class="w-full px-4 py-3 rounded-md border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                    </div>
                    <div>
                        <input type="text" name="subject" placeholder="Ide Proyek" class="w-full px-4 py-3 rounded-md border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                    </div>
                    <div>
                        <textarea name="message" rows="4" required placeholder="Pesan" class="w-full px-4 py-3 rounded-md border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none"></textarea>
                    </div>
                    <button type="submit" class="w-full py-4 rounded-md bg-[#fe6000] hover:bg-[#e05400] text-white font-bold text-xs uppercase tracking-wider shadow-md transition-all">
                        Send &rarr;
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 5: CLIENT SECTION (Marquee) -->
<section class="py-16 bg-[#f8faff] overflow-hidden border-t border-slate-100 marquee-pause relative">
    
    <div class="absolute top-4 left-1/2 -translate-x-1/2 text-8xl font-black text-slate-200/30 pointer-events-none select-none tracking-wider -z-0">
        Client
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6 text-center relative z-10">
        <h2 class="text-3xl font-extrabold text-[#07153f]">Client & Partner Kami</h2>
        
        <div class="relative w-full overflow-hidden marquee-mask pt-2">
            <div class="marquee-track marquee-medium items-center gap-6">
                <div class="h-11 px-6 bg-white border border-slate-200 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    Kementerian Komunikasi dan Digital RI (Komdigi RI)
                </div>
                <div class="h-11 px-6 bg-white border border-slate-200 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    Politeknik Akamigas Palembang
                </div>
                <div class="h-11 px-6 bg-white border border-slate-200 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    SIT Robbani Ogan Ilir
                </div>
                <div class="h-11 px-6 bg-white border border-slate-200 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    Pemerintah Desa Senuro Timur
                </div>
                <div class="h-11 px-6 bg-white border border-slate-200 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    Yayasan Pendidikan Islam Ash-Shaff
                </div>
                <div class="h-11 px-6 bg-white border border-slate-200 rounded-xl flex items-center justify-center shrink-0 font-bold text-xs text-[#07153f] shadow-xs">
                    PT. Duta Solusi Rumput Palembang
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
