@extends('layouts.app')

@section('title', 'Layanan Jasa - CV. Beranda Teknologi Digital')

@section('content')
<section class="py-16 bg-white dark:bg-[#070A11]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-950/80 text-blue-900 dark:text-blue-300 font-extrabold text-xs uppercase tracking-wider border border-blue-300 dark:border-blue-800">
                Solusi IT & Digital Agency
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-slate-950 dark:text-white font-heading">
                Layanan Jasa Beranda Teknologi Digital
            </h1>
            <p class="text-slate-800 dark:text-slate-200 text-sm sm:text-base leading-relaxed font-semibold">
                Kami menyediakan ekosistem pembuatan aplikasi web, mobile Android/iOS, sistem informasi enterprise, solusi AI, serta pelatihan & workshop IT profesional.
            </p>
        </div>

        <!-- Detailed Services List (3D Animated Bento Cards) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- 1. Web Application & Website -->
            <div class="bento-card p-8 space-y-6 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-blue-100 dark:bg-blue-950 text-blue-800 dark:text-blue-300 flex items-center justify-center font-extrabold text-xl shadow-xs">
                        01
                    </div>
                    <h2 class="text-2xl font-extrabold text-slate-950 dark:text-white">Jasa Pembuatan Website & Custom Web App</h2>
                    <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed font-medium">
                        Pengembangan website perusahaan (Company Profile), E-Commerce, Sistem Informasi Sekolah, Portal Desa Digital, hingga Web Custom menggunakan Laravel 13, PHP 8.4, dan Tailwind CSS.
                    </p>
                    <ul class="space-y-2.5 text-xs font-bold text-slate-900 dark:text-slate-200">
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-900 dark:text-slate-100 font-bold">SEO & Mobile Responsive 100%</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-900 dark:text-slate-100 font-bold">Panel Admin Manajemen Konten Instan</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-900 dark:text-slate-100 font-bold">Gratis Domain & Hosting SSD NVMe Cepat</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200 dark:border-slate-800">
                    <a href="{{ route('contact') }}" class="text-xs font-extrabold text-blue-700 dark:text-blue-400 hover:underline">Konsultasi Website &rarr;</a>
                </div>
            </div>

            <!-- 2. Mobile App -->
            <div class="bento-card p-8 space-y-6 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-100 dark:bg-cyan-950 text-cyan-800 dark:text-cyan-300 flex items-center justify-center font-extrabold text-xl shadow-xs">
                        02
                    </div>
                    <h2 class="text-2xl font-extrabold text-slate-950 dark:text-white">Aplikasi Mobile Android & iOS (Flutter)</h2>
                    <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed font-medium">
                        Aplikasi mobile cross-platform berbasis Flutter berkecepatan tinggi, terhubung langsung dengan backend RESTful API dan Push Notification.
                    </p>
                    <ul class="space-y-2.5 text-xs font-bold text-slate-900 dark:text-slate-200">
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-900 dark:text-slate-100 font-bold">Bantuan Upload ke Google Play Store & App Store</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-900 dark:text-slate-100 font-bold">Integrasi Geolocation GPS & Firebase Push Notification</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-900 dark:text-slate-100 font-bold">Fitur Offline-first & Fast Caching</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200 dark:border-slate-800">
                    <a href="{{ route('contact') }}" class="text-xs font-extrabold text-cyan-700 dark:text-cyan-400 hover:underline">Konsultasi Mobile App &rarr;</a>
                </div>
            </div>

            <!-- 3. AI & Intelligent Automation -->
            <div class="bento-card p-8 space-y-6 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-purple-100 dark:bg-purple-950 text-purple-800 dark:text-purple-300 flex items-center justify-center font-extrabold text-xl shadow-xs">
                        03
                    </div>
                    <h2 class="text-2xl font-extrabold text-slate-950 dark:text-white">Solusi Kecerdasan Buatan (AI) & RAG Privat</h2>
                    <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed font-medium">
                        Pengembangan Chatbot AI privat berbasis Retrieval-Augmented Generation (RAG) untuk membaca dan menganalisis dokumen privat perusahaan tanpa risiko kebocoran data.
                    </p>
                    <ul class="space-y-2.5 text-xs font-bold text-slate-900 dark:text-slate-200">
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-900 dark:text-slate-100 font-bold">Chatbot AI Privat Dokumen SOP & Laporan</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-900 dark:text-slate-100 font-bold">Pemanfaatan Vibe Coding & Otomasi Workflow</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-900 dark:text-slate-100 font-bold">Tanpa Ketergantungan API Berbayar Eksternal</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200 dark:border-slate-800">
                    <a href="{{ route('contact') }}" class="text-xs font-extrabold text-purple-700 dark:text-purple-400 hover:underline">Konsultasi Engine AI &rarr;</a>
                </div>
            </div>

            <!-- 4. Technical Training & Speaker -->
            <div class="bento-card p-8 space-y-6 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-amber-100 dark:bg-amber-950 text-amber-800 dark:text-amber-300 flex items-center justify-center font-extrabold text-xl shadow-xs">
                        04
                    </div>
                    <h2 class="text-2xl font-extrabold text-slate-950 dark:text-white">Corporate IT Training & Keynote Speaker</h2>
                    <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed font-medium">
                        Penyelenggaraan workshop IT corporate, training bootcamp software engineering, dan narasumber keynote speaker seminar Komdigi & akademisi.
                    </p>
                    <ul class="space-y-2.5 text-xs font-bold text-slate-900 dark:text-slate-200">
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-900 dark:text-slate-100 font-bold">Pemateri Langsung: Septa Ryan Hidayat, S.Kom</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-900 dark:text-slate-100 font-bold">Sertifikat Resmi & Modul Silabus Lengkap</span></li>
                        <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-900 dark:text-slate-100 font-bold">Materi Hands-on Practical Kodingan Terkini</span></li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200 dark:border-slate-800">
                    <a href="{{ route('trainer.index') }}" class="text-xs font-extrabold text-amber-700 dark:text-amber-400 hover:underline">Lihat Silabus & Profil &rarr;</a>
                </div>
            </div>
        </div>

        <!-- CTA Box -->
        <div class="bento-card p-8 text-center space-y-4 bg-slate-50 dark:bg-slate-900">
            <h3 class="text-2xl font-extrabold text-slate-950 dark:text-white">Ingin Menanyakan Penawaran Harga?</h3>
            <p class="text-slate-700 dark:text-slate-300 text-sm font-semibold">Gunakan kalkulator estimasi biaya proyek kami atau hubungi tim kami langsung via WhatsApp.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
                <a href="https://wa.me/6289695249089" target="_blank" class="px-8 py-3.5 rounded-full bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-extrabold text-xs shadow-md">
                    Chat WhatsApp (0896 9524 9089)
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-3.5 rounded-full bg-indigo-700 hover:bg-indigo-800 text-white font-extrabold text-xs shadow-md">
                    Kalkulator Biaya Proyek &rarr;
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
