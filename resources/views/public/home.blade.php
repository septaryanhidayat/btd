@extends('layouts.app')

@section('title', 'Beranda Teknologi Digital - Jasa Pembuatan Website dan Aplikasi Android')

@section('content')
<!-- Hero Section (Dominant Pure White Background) -->
<section class="relative bg-white py-12 lg:py-20 overflow-hidden border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Headline & CTA -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50 text-[#0170b9] text-xs font-extrabold uppercase tracking-wider">
                    <span>Bangun Usaha & Bisnis Anda</span> &bull; <span>Go Digital !</span>
                </div>

                <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight font-heading">
                    Beranda Teknologi Digital
                </h1>

                <p class="text-slate-600 text-base sm:text-xl leading-relaxed max-w-2xl">
                    Jasa pembuatan website, sistem informasi, aplikasi android & iOS, serta pelatihan/workshop IT profesional.
                </p>

                <!-- Quick Category Buttons (Matching WP Site) -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2 pt-2">
                    <a href="{{ route('services') }}" class="px-4 py-2 rounded-xl bg-cyan-500 text-white font-bold text-xs hover:bg-cyan-600 transition-all flex items-center gap-1.5 shadow-sm">
                        <span>🌐 Website</span>
                    </a>
                    <a href="{{ route('services') }}" class="px-4 py-2 rounded-xl bg-cyan-600 text-white font-bold text-xs hover:bg-cyan-700 transition-all flex items-center gap-1.5 shadow-sm">
                        <span>📱 Aplikasi Mobile</span>
                    </a>
                    <a href="{{ route('services') }}" class="px-4 py-2 rounded-xl bg-[#0170b9] text-white font-bold text-xs hover:bg-blue-700 transition-all flex items-center gap-1.5 shadow-sm">
                        <span>🖥️ Sistem Informasi</span>
                    </a>
                    <a href="{{ route('services') }}" class="px-4 py-2 rounded-xl bg-indigo-600 text-white font-bold text-xs hover:bg-indigo-700 transition-all flex items-center gap-1.5 shadow-sm">
                        <span>🤖 AI Solution</span>
                    </a>
                </div>

                <!-- CTA Action Buttons -->
                <div class="pt-4 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="https://wa.me/6289695249089" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-full bg-[#f53003] hover:bg-orange-600 text-white font-extrabold text-sm shadow-xl shadow-orange-500/20 hover:scale-105 transition-all text-center">
                        Dapatkan Harga Promo (0896 9524 9089)
                    </a>
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-sm shadow-sm transition-all text-center">
                        Kalkulator Biaya Proyek &rarr;
                    </a>
                </div>

            </div>

            <!-- Right Column: Hero Graphic / Image -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative max-w-md w-full">
                    <div class="absolute -inset-4 bg-gradient-to-r from-[#0170b9] to-cyan-400 rounded-3xl opacity-20 blur-2xl"></div>
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl bg-slate-100 border-4 border-white">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Beranda Teknologi Digital Hero" class="w-full h-auto object-cover" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Keunggulan Jasa Kami Section (Soft Light Cards) -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-2">
            <span class="text-xs font-extrabold uppercase tracking-widest text-[#0170b9]">Keunggulan Jasa Kami</span>
            <h2 class="text-3xl font-extrabold text-slate-900">Mengapa Harus Beranda Teknologi Digital ?</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1: Pengerjaan Cepat (Light Orange) -->
            <div class="bg-orange-50 border border-orange-200/80 rounded-3xl p-6 space-y-3 shadow-sm hover:shadow-md transition-all">
                <div class="w-12 h-12 rounded-2xl bg-orange-500 text-white font-bold text-xl flex items-center justify-center shadow-md">
                    ⚡
                </div>
                <h3 class="text-lg font-bold text-slate-900">Pengerjaan Cepat</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Project dikerjakan oleh tim yang profesional, berpengalaman dan tersedia untuk berkonsultasi secara intensif.
                </p>
            </div>

            <!-- Card 2: Harga Terjangkau (Light Blue) -->
            <div class="bg-blue-50 border border-blue-200/80 rounded-3xl p-6 space-y-3 shadow-sm hover:shadow-md transition-all">
                <div class="w-12 h-12 rounded-2xl bg-[#0170b9] text-white font-bold text-xl flex items-center justify-center shadow-md">
                    💎
                </div>
                <h3 class="text-lg font-bold text-slate-900">Harga Terjangkau</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Biaya pembuatan terjangkau dengan hasil maksimal skala enterprise dan tanpa biaya tersembunyi.
                </p>
            </div>

            <!-- Card 3: Desain Modern & Responsive (Light Cyan) -->
            <div class="bg-cyan-50 border border-cyan-200/80 rounded-3xl p-6 space-y-3 shadow-sm hover:shadow-md transition-all">
                <div class="w-12 h-12 rounded-2xl bg-cyan-600 text-white font-bold text-xl flex items-center justify-center shadow-md">
                    📱
                </div>
                <h3 class="text-lg font-bold text-slate-900">Desain Responsive</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Tampilan sangat menarik, modern, serta tampil sempurna di layar smartphone, tablet, maupun laptop.
                </p>
            </div>

            <!-- Card 4: Garansi & Support (Light Purple) -->
            <div class="bg-purple-50 border border-purple-200/80 rounded-3xl p-6 space-y-3 shadow-sm hover:shadow-md transition-all">
                <div class="w-12 h-12 rounded-2xl bg-purple-600 text-white font-bold text-xl flex items-center justify-center shadow-md">
                    🛠️
                </div>
                <h3 class="text-lg font-bold text-slate-900">Garansi & Support 24/7</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Gratis pemeliharaan sistem, garansi perbaikan bug, dan pendampingan teknis hingga siap digunakan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Feature Highlight Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6 flex justify-center">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="Efisiensi Sistem" class="rounded-3xl shadow-xl border-4 border-slate-100 max-w-md w-full" />
            </div>
            <div class="lg:col-span-6 space-y-5">
                <span class="text-xs font-extrabold uppercase tracking-widest text-[#0170b9]">Efisiensi Maksimal</span>
                <h2 class="text-3xl font-extrabold text-slate-900">
                    Memanfaatkan Produk & Layanan Kami Dengan Efisiensi Maksimal
                </h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Kami memastikan setiap baris kode dan arsitektur perangkat lunak yang kami buat siap mendorong pertumbuhan usaha Anda secara berkelanjutan.
                </p>
                <div class="space-y-3 pt-2 text-xs font-bold text-slate-800">
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200">
                        <span class="text-[#0170b9] text-base">✓</span>
                        <span>Pengerjaan Tepat Waktu dengan Standard Quality Control</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200">
                        <span class="text-[#0170b9] text-base">✓</span>
                        <span>Performa Server Cepat, Zero-Lag, & Dukungan Database Terstruktur</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200">
                        <span class="text-[#0170b9] text-base">✓</span>
                        <span>Gratis Consultations & Pendampingan Manajemen Konten</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Orange Quote Banner ("Work on it, More Than You Hope for It") -->
<section class="bg-[#f53003] text-white py-12 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 text-center space-y-2">
        <span class="text-xs uppercase font-extrabold tracking-widest text-amber-200">Our Slogan</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold font-heading italic">
            " Work on it, More Than You Hope for It "
        </h2>
        <p class="text-xs text-orange-100 font-medium">CV. Beranda Teknologi Digital - Komitmen Hasil Terbaik Untuk Setiap Klien</p>
    </div>
</section>

<!-- Portofolio Showcase Grid (Clean Crisp White Cards) -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
            <span class="text-xs font-extrabold uppercase tracking-widest text-[#0170b9]">Hasil Karya Kami</span>
            <h2 class="text-3xl font-extrabold text-slate-900">Beberapa Proyek Yang Telah Kami Kerjakan</h2>
            <p class="text-slate-600 text-sm">Dokumentasi hasil pengerjaan proyek sistem informasi, website, dan aplikasi mobile klien kami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all border border-slate-200/80 flex flex-col group">
                    <div class="relative aspect-video overflow-hidden bg-slate-100">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full bg-[#0170b9] text-white text-xs font-bold shadow-md">
                                {{ $project->category?->name ?? 'Proyek Klien' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#0170b9] transition-colors line-clamp-1">
                                {{ $project->title }}
                            </h3>
                            <p class="text-slate-600 text-xs line-clamp-2 leading-relaxed">
                                {{ $project->summary }}
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="font-bold text-[#0170b9]">{{ $project->client_name }}</span>
                            <a href="{{ route('projects.show', $project->slug) }}" class="font-bold text-slate-900 hover:text-[#0170b9]">
                                Detail Proyek &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center pt-10">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-[#0170b9] hover:bg-blue-700 text-white font-bold text-xs shadow-md">
                <span>Lihat Seluruh Portofolio Klien</span> &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Layanan Kami Grid (4 Columns) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 space-y-2">
            <span class="text-xs font-extrabold uppercase tracking-widest text-[#0170b9]">Layanan Kami</span>
            <h2 class="text-3xl font-extrabold text-slate-900">Solusi Digital Terbaik Untuk Bisnis Anda</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white border border-slate-200 rounded-3xl p-6 space-y-4 hover:shadow-lg transition-all text-center">
                <div class="w-14 h-14 rounded-2xl bg-blue-50 text-[#0170b9] font-bold text-2xl flex items-center justify-center mx-auto">
                    🌐
                </div>
                <h3 class="text-lg font-bold text-slate-900">Website & Web App</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Company Profile, E-Commerce, Portal Sekolah & Desa Digital dengan desain modern & responsif.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-3xl p-6 space-y-4 hover:shadow-lg transition-all text-center">
                <div class="w-14 h-14 rounded-2xl bg-cyan-50 text-cyan-600 font-bold text-2xl flex items-center justify-center mx-auto">
                    📱
                </div>
                <h3 class="text-lg font-bold text-slate-900">Aplikasi Android & iOS</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Aplikasi mobile berbasis Flutter dengan integrasi RESTful API & Push Notifications.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-3xl p-6 space-y-4 hover:shadow-lg transition-all text-center">
                <div class="w-14 h-14 rounded-2xl bg-amber-50 text-amber-600 font-bold text-2xl flex items-center justify-center mx-auto">
                    💻
                </div>
                <h3 class="text-lg font-bold text-slate-900">Sistem Informasi</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Pengembangan Sistem Informasi Manajemen Administrasi, Keuangan & ERP Custom Perusahaan.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-3xl p-6 space-y-4 hover:shadow-lg transition-all text-center">
                <div class="w-14 h-14 rounded-2xl bg-purple-50 text-purple-600 font-bold text-2xl flex items-center justify-center mx-auto">
                    🎨
                </div>
                <h3 class="text-lg font-bold text-slate-900">Desain Grafis & AI</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Desain Grafis, Branding, UI/UX Architecture, serta Solusi AI Privat & Vibe Coding.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Workshop & Seminar Poster Grid (Featuring Real Flyers from WP Backup) -->
<section class="py-20 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 space-y-2">
            <span class="text-xs font-extrabold uppercase tracking-widest text-[#0170b9]">Workshop & Event Showcase</span>
            <h2 class="text-3xl font-extrabold text-slate-900">Dokumentasi Seminar, Workshop & Training</h2>
            <p class="text-slate-600 text-sm">Kegiatan pelatihan dan narasumber teknologi yang telah kami laksanakan bersama berbagai mitra.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($latestPosts as $post)
                <article class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-slate-200 flex flex-col">
                    <div class="aspect-video overflow-hidden bg-slate-100 relative">
                        <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6 space-y-3 flex-grow flex flex-col justify-between">
                        <div class="space-y-2">
                            <span class="text-[11px] font-bold text-[#0170b9]">
                                {{ $post->published_at ? $post->published_at->format('d M Y') : 'Event BTD' }}
                            </span>
                            <h3 class="text-base font-bold text-slate-900 line-clamp-2 hover:text-[#0170b9] transition-colors">
                                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                            </h3>
                            <p class="text-slate-600 text-xs line-clamp-3 leading-relaxed">
                                {{ $post->excerpt }}
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="text-slate-500">Pemateri: Septa Ryan Hidayat</span>
                            <a href="{{ route('blog.show', $post->slug) }}" class="font-bold text-[#0170b9] hover:underline">
                                Baca Detail &rarr;
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="text-center pt-10">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-slate-900 text-white font-bold text-xs shadow-md hover:bg-slate-800 transition-all">
                <span>Lihat Seluruh Informasi & Artikel</span> &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-[#0170b9] p-8 sm:p-14 text-white text-center shadow-xl space-y-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                Konsultasikan Kebutuhan Website & Aplikasi Anda
            </h2>
            <p class="text-blue-100 text-sm max-w-2xl mx-auto">
                Tim profesional <strong class="text-white">CV. Beranda Teknologi Digital</strong> siap membantu mewujudkan aplikasi pengerjaan cepat dengan garansi purna jual.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
                <a href="https://wa.me/6289695249089" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-full bg-[#f53003] hover:bg-orange-600 text-white font-extrabold text-sm shadow-lg text-center">
                    Chat WhatsApp (0896 9524 9089)
                </a>
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-white text-[#0170b9] font-bold text-sm shadow-md text-center hover:bg-blue-50">
                    Kalkulator Estimasi Biaya
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
