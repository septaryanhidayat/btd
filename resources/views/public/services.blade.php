@extends('layouts.app')

@section('title', 'Layanan Agency - CV. Beranda Teknologi Digital')

@section('content')
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold text-xs uppercase tracking-wider">
                Solusi IT & Digital Agency
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-slate-900 dark:text-white">Layanan Profesional Kami</h1>
            <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base">
                Kami menyediakan ekosistem pembuatan aplikasi web, mobile, sistem enterprise, kecerdasan buatan, serta pelatihan teknologi yang komprehensif.
            </p>
        </div>

        <!-- Detailed Services List -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- 1. Web Application & Website -->
            <div class="glass-card rounded-3xl p-8 sm:p-10 space-y-6 hover:border-indigo-500/50 transition-all">
                <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center font-bold text-xl">
                    01
                </div>
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Jasa Pembuatan Website & Custom Web App</h2>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                    Pengembangan website perusahaan (Company Profile), E-Commerce, Sistem Informasi Manajemen, hingga Portal Custom menggunakan Laravel 13, PHP 8.4, dan Tailwind CSS v4.
                </p>
                <ul class="space-y-2 text-xs sm:text-sm text-slate-600 dark:text-slate-300">
                    <li class="flex items-center gap-2">✓ <span>SEO & Mobile Responsive 100%</span></li>
                    <li class="flex items-center gap-2">✓ <span>Panel Admin Manajemen Konten Instan</span></li>
                    <li class="flex items-center gap-2">✓ <span>Arsitektur SQLite / MySQL Skala Tinggi</span></li>
                </ul>
            </div>

            <!-- 2. Mobile App -->
            <div class="glass-card rounded-3xl p-8 sm:p-10 space-y-6 hover:border-cyan-500/50 transition-all">
                <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 flex items-center justify-center font-bold text-xl">
                    02
                </div>
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Aplikasi Mobile Android & iOS</h2>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                    Aplikasi mobile cross-platform berbasis Flutter dengan performa mendekati native, terhubung dengan backend RESTful API yang cepat dan aman.
                </p>
                <ul class="space-y-2 text-xs sm:text-sm text-slate-600 dark:text-slate-300">
                    <li class="flex items-center gap-2">✓ <span>Upload ke Google Play Store & Apple App Store</span></li>
                    <li class="flex items-center gap-2">✓ <span>Integrasi Geolocation GPS & Firebase Push Notification</span></li>
                    <li class="flex items-center gap-2">✓ <span>Fitur Offline-first & Local Caching</span></li>
                </ul>
            </div>

            <!-- 3. AI & Intelligent Automation -->
            <div class="glass-card rounded-3xl p-8 sm:p-10 space-y-6 hover:border-emerald-500/50 transition-all">
                <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center font-bold text-xl">
                    03
                </div>
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Solusi Kecerdasan Buatan (AI) & RAG</h2>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                    Pengembangan sistem AI privat berbasis Retrieval-Augmented Generation (RAG) untuk membaca dan menganalisis dokumen privat perusahaan tanpa risiko kebohohan data.
                </p>
                <ul class="space-y-2 text-xs sm:text-sm text-slate-600 dark:text-slate-300">
                    <li class="flex items-center gap-2">✓ <span>Chatbot AI Privat Dokumen SOP & Laporan</span></li>
                    <li class="flex items-center gap-2">✓ <span>Otomasi Workflow Webhook & Process Automation</span></li>
                    <li class="flex items-center gap-2">✓ <span>Dukungan LLM Lokal & Cloud Model (OpenAI/Claude)</span></li>
                </ul>
            </div>

            <!-- 4. Technical Training & Keynote Speaker -->
            <div class="glass-card rounded-3xl p-8 sm:p-10 space-y-6 hover:border-amber-500/50 transition-all">
                <div class="w-14 h-14 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center font-bold text-xl">
                    04
                </div>
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Corporate IT Training & Speaker</h2>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                    Penyelenggaraan workshop IT corporate, training bootcamp software engineering, dan narasumber keynote speaker seminar transformasi digital.
                </p>
                <ul class="space-y-2 text-xs sm:text-sm text-slate-600 dark:text-slate-300">
                    <li class="flex items-center gap-2">✓ <span>Materi Hands-on Practical Kodingan Terkini</span></li>
                    <li class="flex items-center gap-2">✓ <span>Sertifikat Resmi & Modul Silabus Lengkap</span></li>
                    <li class="flex items-center gap-2">✓ <span>Pengajar Berpengalaman 8+ Tahun di Enterprise</span></li>
                </ul>
            </div>
        </div>

        <!-- CTA -->
        <div class="glass-card rounded-3xl p-8 text-center space-y-4">
            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Ingin Menanyakan Penawaran Harga?</h3>
            <p class="text-slate-600 dark:text-slate-400 text-sm">Gunakan kalkulator estimasi biaya proyek kami atau hubungi tim sales kami langsung.</p>
            <a href="{{ route('contact') }}" class="inline-block px-8 py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-sm shadow-md">
                Konsultasi & Kalkulator Biaya &rarr;
            </a>
        </div>
    </div>
</section>
@endsection
