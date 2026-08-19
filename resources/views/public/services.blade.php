@extends('layouts.app')

@section('title', 'Layanan Jasa - CV. Beranda Teknologi Digital')

@section('content')
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="px-4 py-1.5 rounded-full bg-blue-50 text-[#0170b9] font-extrabold text-xs uppercase tracking-wider">
                Solusi IT & Digital Agency
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-slate-900">Layanan Jasa Beranda Teknologi Digital</h1>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                Kami menyediakan ekosistem pembuatan aplikasi web, mobile Android/iOS, sistem informasi enterprise, solusi AI, serta pelatihan & workshop IT profesional.
            </p>
        </div>

        <!-- Detailed Services List -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- 1. Web Application & Website -->
            <div class="bg-white border border-slate-200 rounded-3xl p-8 space-y-6 shadow-sm hover:shadow-xl transition-all">
                <div class="w-14 h-14 rounded-2xl bg-blue-50 text-[#0170b9] flex items-center justify-center font-bold text-xl">
                    01
                </div>
                <h2 class="text-2xl font-bold text-slate-900">Jasa Pembuatan Website & Custom Web App</h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Pengembangan website perusahaan (Company Profile), E-Commerce, Sistem Informasi Sekolah, Portal Desa Digital, hingga Web Custom menggunakan Laravel 13, PHP 8.4, dan Tailwind CSS v4.
                </p>
                <ul class="space-y-2 text-xs font-bold text-slate-700">
                    <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-700">SEO & Mobile Responsive 100%</span></li>
                    <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-700">Panel Admin Manajemen Konten Instan</span></li>
                    <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-700">Gratis Domain & Hosting Tahun Pertama</span></li>
                </ul>
            </div>

            <!-- 2. Mobile App -->
            <div class="bg-white border border-slate-200 rounded-3xl p-8 space-y-6 shadow-sm hover:shadow-xl transition-all">
                <div class="w-14 h-14 rounded-2xl bg-cyan-50 text-cyan-600 flex items-center justify-center font-bold text-xl">
                    02
                </div>
                <h2 class="text-2xl font-bold text-slate-900">Aplikasi Mobile Android & iOS (Flutter)</h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Aplikasi mobile cross-platform berbasis Flutter berkecepatan tinggi, terhubung langsung dengan backend RESTful API dan Push Notification.
                </p>
                <ul class="space-y-2 text-xs font-bold text-slate-700">
                    <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-700">Bantuan Upload ke Google Play Store & App Store</span></li>
                    <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-700">Integrasi Geolocation GPS & Firebase Push Notification</span></li>
                    <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-700">Fitur Offline-first & Fast Caching</span></li>
                </ul>
            </div>

            <!-- 3. AI & Intelligent Automation -->
            <div class="bg-white border border-slate-200 rounded-3xl p-8 space-y-6 shadow-sm hover:shadow-xl transition-all">
                <div class="w-14 h-14 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center font-bold text-xl">
                    03
                </div>
                <h2 class="text-2xl font-bold text-slate-900">Solusi Kecerdasan Buatan (AI) & RAG Privat</h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Pengembangan Chatbot AI privat berbasis Retrieval-Augmented Generation (RAG) untuk membaca dan menganalisis dokumen privat perusahaan tanpa risiko kebocoran data.
                </p>
                <ul class="space-y-2 text-xs font-bold text-slate-700">
                    <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-700">Chatbot AI Privat Dokumen SOP & Laporan</span></li>
                    <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-700">Pemanfaatan Vibe Coding & Otomasi Workflow</span></li>
                    <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-700">Tanpa Ketergantungan API Berbayar Eksternal</span></li>
                </ul>
            </div>

            <!-- 4. Technical Training & Speaker -->
            <div class="bg-white border border-slate-200 rounded-3xl p-8 space-y-6 shadow-sm hover:shadow-xl transition-all">
                <div class="w-14 h-14 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-xl">
                    04
                </div>
                <h2 class="text-2xl font-bold text-slate-900">Corporate IT Training & Keynote Speaker</h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Penyelenggaraan workshop IT corporate, training bootcamp software engineering, dan narasumber keynote speaker seminar Komdigi & akademisi.
                </p>
                <ul class="space-y-2 text-xs font-bold text-slate-700">
                    <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-700">Pemateri Langsung: Septa Ryan Hidayat, S.Kom</span></li>
                    <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-700">Sertifikat Resmi & Modul Silabus Lengkap</span></li>
                    <li class="flex items-center gap-2 text-emerald-600">✓ <span class="text-slate-700">Materi Hands-on Practical Kodingan Terkini</span></li>
                </ul>
            </div>
        </div>

        <!-- CTA -->
        <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 text-center space-y-4 shadow-sm">
            <h3 class="text-2xl font-bold text-slate-900">Ingin Menanyakan Penawaran Harga?</h3>
            <p class="text-slate-600 text-sm">Gunakan kalkulator estimasi biaya proyek kami atau hubungi tim sales kami langsung.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
                <a href="https://wa.me/6289695249089" target="_blank" class="px-8 py-3.5 rounded-full bg-[#f53003] hover:bg-orange-600 text-white font-bold text-xs shadow-md">
                    Chat WhatsApp (0896 9524 9089)
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-3.5 rounded-full bg-[#0170b9] hover:bg-blue-700 text-white font-bold text-xs shadow-md">
                    Kalkulator Biaya Proyek &rarr;
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
