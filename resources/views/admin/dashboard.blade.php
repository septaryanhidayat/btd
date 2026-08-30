@extends('admin.layouts.app')

@section('title', 'Dashboard Overview')

@section('content')
<div class="space-y-8">
    
    <!-- Executive Welcome Banner -->
    <div class="rounded-3xl bg-gradient-to-br from-[#071330] via-[#0d2159] to-[#1e3fae] p-8 sm:p-10 text-white shadow-xl shadow-blue-950/20 relative overflow-hidden border border-blue-500/20">
        <!-- Abstract Background Glows -->
        <div class="absolute -right-12 -top-12 w-80 h-80 bg-blue-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute right-1/3 -bottom-16 w-60 h-60 bg-orange-500/15 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="relative z-10 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
            <div class="space-y-2.5 max-w-2xl">
                <div class="flex items-center gap-2.5">
                    <span class="px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-[10px] font-extrabold uppercase tracking-widest text-blue-200 border border-white/15">
                        {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}
                    </span>
                    @if($unreadInquiryCount > 0)
                        <span class="px-3 py-1 rounded-full bg-[#fe6000]/30 backdrop-blur-md text-[10px] font-extrabold text-orange-200 border border-[#fe6000]/40 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#fe6000] animate-pulse"></span>
                            {{ $unreadInquiryCount }} Pesan Menunggu Respon
                        </span>
                    @endif
                </div>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                    Selamat Datang, {{ Auth::user()->name ?? 'Administrator' }}! 👋
                </h1>
                <p class="text-xs sm:text-sm text-blue-100/80 font-normal leading-relaxed">
                    Sistem Kontrol Terpadu <strong>CV. Beranda Teknologi Digital</strong>. Kelola seluruh portofolio proyek, produk digital, silabus pelatihan, artikel berita, dan pengaturan tema website secara mudah dan cepat.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-3">
                <a href="{{ route('admin.projects.create') }}" class="px-4 py-2.5 rounded-xl bg-white hover:bg-slate-100 text-[#071330] font-bold text-xs shadow-md transition-all flex items-center gap-2 hover:-translate-y-0.5">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <span>Tambah Proyek</span>
                </a>
                <a href="{{ route('admin.settings.index') }}" class="px-4 py-2.5 rounded-xl bg-white/15 hover:bg-white/25 text-white font-bold text-xs backdrop-blur-md border border-white/20 shadow-md transition-all flex items-center gap-2 hover:-translate-y-0.5">
                    <svg class="w-4 h-4 text-orange-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                    <span>Atur Tema Web</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Stats Bento Counters (6 KPI Cards) -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
        
        <!-- 1. Projects -->
        <a href="{{ route('admin.projects.index') }}" class="bg-white p-5 rounded-2xl border border-slate-200/70 shadow-xs hover:shadow-md hover:-translate-y-1 hover:border-blue-300 transition-all space-y-3 group block">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#3E5CE7] flex items-center justify-center font-bold text-base group-hover:scale-110 transition-transform">
                    📁
                </div>
                <span class="text-[10px] font-bold text-slate-400">Total</span>
            </div>
            <div>
                <div class="text-2xl font-black text-[#071330] mono">{{ $projectCount }}</div>
                <div class="text-xs text-slate-500 font-semibold mt-0.5">Portofolio Proyek</div>
            </div>
        </a>

        <!-- 2. Products -->
        <a href="{{ route('admin.products.index') }}" class="bg-white p-5 rounded-2xl border border-slate-200/70 shadow-xs hover:shadow-md hover:-translate-y-1 hover:border-orange-300 transition-all space-y-3 group block">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-xl bg-orange-50 text-[#fe6000] flex items-center justify-center font-bold text-base group-hover:scale-110 transition-transform">
                    🛒
                </div>
                <span class="text-[10px] font-bold text-slate-400">Store</span>
            </div>
            <div>
                <div class="text-2xl font-black text-[#071330] mono">{{ $productCount }}</div>
                <div class="text-xs text-slate-500 font-semibold mt-0.5">Produk Digital</div>
            </div>
        </a>

        <!-- 3. Trainings -->
        <a href="{{ route('admin.trainings.index') }}" class="bg-white p-5 rounded-2xl border border-slate-200/70 shadow-xs hover:shadow-md hover:-translate-y-1 hover:border-purple-300 transition-all space-y-3 group block">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center font-bold text-base group-hover:scale-110 transition-transform">
                    🎓
                </div>
                <span class="text-[10px] font-bold text-slate-400">Modul</span>
            </div>
            <div>
                <div class="text-2xl font-black text-[#071330] mono">{{ $trainingCount }}</div>
                <div class="text-xs text-slate-500 font-semibold mt-0.5">Pelatihan IT</div>
            </div>
        </a>

        <!-- 4. Galleries -->
        <a href="{{ route('admin.galleries.index') }}" class="bg-white p-5 rounded-2xl border border-slate-200/70 shadow-xs hover:shadow-md hover:-translate-y-1 hover:border-emerald-300 transition-all space-y-3 group block">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-base group-hover:scale-110 transition-transform">
                    🖼️
                </div>
                <span class="text-[10px] font-bold text-slate-400">Event</span>
            </div>
            <div>
                <div class="text-2xl font-black text-[#071330] mono">{{ $galleryCount }}</div>
                <div class="text-xs text-slate-500 font-semibold mt-0.5">Dokumentasi</div>
            </div>
        </a>

        <!-- 5. Posts -->
        <a href="{{ route('admin.posts.index') }}" class="bg-white p-5 rounded-2xl border border-slate-200/70 shadow-xs hover:shadow-md hover:-translate-y-1 hover:border-cyan-300 transition-all space-y-3 group block">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center font-bold text-base group-hover:scale-110 transition-transform">
                    📰
                </div>
                <span class="text-[10px] font-bold text-slate-400">Blog</span>
            </div>
            <div>
                <div class="text-2xl font-black text-[#071330] mono">{{ $postCount }}</div>
                <div class="text-xs text-slate-500 font-semibold mt-0.5">Artikel Terbit</div>
            </div>
        </a>

        <!-- 6. Inquiries -->
        <a href="{{ route('admin.inquiries.index') }}" class="bg-white p-5 rounded-2xl border border-slate-200/70 shadow-xs hover:shadow-md hover:-translate-y-1 hover:border-rose-300 transition-all space-y-3 group block relative">
            <div class="flex items-center justify-between">
                <div class="w-10 h-10 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center font-bold text-base group-hover:scale-110 transition-transform">
                    ✉️
                </div>
                @if($unreadInquiryCount > 0)
                    <span class="px-2 py-0.5 rounded-full bg-[#fe6000] text-white text-[9px] font-black animate-bounce">
                        {{ $unreadInquiryCount }} BARU
                    </span>
                @else
                    <span class="text-[10px] font-bold text-slate-400">Inbox</span>
                @endif
            </div>
            <div>
                <div class="text-2xl font-black text-[#071330] mono">{{ $inquiryCount }}</div>
                <div class="text-xs text-slate-500 font-semibold mt-0.5">Pesan Masuk</div>
            </div>
        </a>

    </div>

    <!-- Quick Action Hub -->
    <div class="bg-gradient-to-r from-slate-900 to-[#0c183a] p-6 rounded-3xl text-white shadow-sm border border-slate-800">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-4">
            <div>
                <h3 class="text-sm font-bold text-white flex items-center gap-2">
                    <span>⚡ Aksi Cepat Pengelolaan</span>
                </h3>
                <p class="text-xs text-slate-400">Pintasan cepat untuk menambahkan konten dan menyesuaikan informasi perusahaan</p>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
            <a href="{{ route('admin.projects.create') }}" class="p-3.5 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 transition-all flex items-center gap-3 group">
                <span class="w-9 h-9 rounded-xl bg-blue-500/20 text-blue-300 flex items-center justify-center font-bold text-base group-hover:scale-110 transition-transform shrink-0">+</span>
                <div>
                    <div class="text-xs font-bold text-white">Tambah Portofolio</div>
                    <div class="text-[10px] text-slate-400">Unggah foto & studi kasus</div>
                </div>
            </a>
            <a href="{{ route('admin.products.create') }}" class="p-3.5 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 transition-all flex items-center gap-3 group">
                <span class="w-9 h-9 rounded-xl bg-orange-500/20 text-orange-300 flex items-center justify-center font-bold text-base group-hover:scale-110 transition-transform shrink-0">+</span>
                <div>
                    <div class="text-xs font-bold text-white">Tambah Produk</div>
                    <div class="text-[10px] text-slate-400">Etalase store & template</div>
                </div>
            </a>
            <a href="{{ route('admin.posts.create') }}" class="p-3.5 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 transition-all flex items-center gap-3 group">
                <span class="w-9 h-9 rounded-xl bg-cyan-500/20 text-cyan-300 flex items-center justify-center font-bold text-base group-hover:scale-110 transition-transform shrink-0">+</span>
                <div>
                    <div class="text-xs font-bold text-white">Tulis Artikel</div>
                    <div class="text-[10px] text-slate-400">Wawasan & berita IT</div>
                </div>
            </a>
            <a href="{{ route('admin.settings.index') }}" class="p-3.5 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 transition-all flex items-center gap-3 group">
                <span class="w-9 h-9 rounded-xl bg-emerald-500/20 text-emerald-300 flex items-center justify-center font-bold text-base group-hover:scale-110 transition-transform shrink-0">🎨</span>
                <div>
                    <div class="text-xs font-bold text-white">Ubah Tema & Teks</div>
                    <div class="text-[10px] text-slate-400">Warna, logo, nomor WA</div>
                </div>
            </a>
        </div>
    </div>

    <!-- Two Columns: Recent Inquiries (Left 7 cols) & Recent Content (Right 5 cols) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
        
        <!-- Left: Recent Inquiries -->
        <div class="lg:col-span-7 bg-white p-6 sm:p-7 rounded-3xl border border-slate-200/80 shadow-xs space-y-5">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div>
                    <h2 class="text-base font-extrabold text-[#071330] flex items-center gap-2">
                        <span>✉️ Pesan & Penawaran Masuk Terakhir</span>
                    </h2>
                    <p class="text-xs text-slate-400">Pesan dari calon klien via formulir Dapatkan Penawaran & Kalkulator</p>
                </div>
                <a href="{{ route('admin.inquiries.index') }}" class="px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-xs font-bold text-slate-700 transition-all">
                    Lihat Semua &rarr;
                </a>
            </div>

            <div class="space-y-3">
                @forelse($recentInquiries as $inq)
                    <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="p-4 rounded-2xl border {{ !$inq->is_read ? 'border-orange-200 bg-orange-50/40' : 'border-slate-100 bg-slate-50/50' }} hover:border-blue-300 hover:bg-white transition-all flex items-start justify-between gap-4 block group shadow-2xs">
                        <div class="space-y-1.5 flex-1 min-w-0">
                            <div class="flex items-center gap-2">
                                <div class="w-7 h-7 rounded-lg bg-gradient-to-br from-[#071330] to-[#3E5CE7] text-white flex items-center justify-center font-black text-xs shrink-0">
                                    {{ strtoupper(substr($inq->name, 0, 1)) }}
                                </div>
                                <span class="font-extrabold text-xs text-[#071330] group-hover:text-[#3E5CE7] transition-colors truncate">{{ $inq->name }}</span>
                                @if(!$inq->is_read)
                                    <span class="px-2 py-0.5 rounded-full bg-[#fe6000] text-white font-extrabold text-[9px] shrink-0">BARU</span>
                                @endif
                            </div>
                            <div class="text-[11px] text-slate-500 font-medium truncate">
                                ✉️ {{ $inq->email }} &bull; 📞 {{ $inq->phone ?? '-' }}
                            </div>
                            <p class="text-xs text-slate-700 line-clamp-1 font-semibold">
                                {{ $inq->subject ?? $inq->message }}
                            </p>
                        </div>
                        <div class="text-right shrink-0">
                            <span class="text-[10px] text-slate-400 font-mono block">{{ $inq->created_at->diffForHumans() }}</span>
                            <span class="text-[11px] text-[#3E5CE7] font-bold opacity-0 group-hover:opacity-100 transition-opacity mt-2 block">Buka &rarr;</span>
                        </div>
                    </a>
                @empty
                    <div class="text-center py-10 text-xs text-slate-400 space-y-2">
                        <div class="text-2xl">📬</div>
                        <p>Belum ada pesan penawaran masuk dari calon klien.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Right: Recent Projects & Products Quick List -->
        <div class="lg:col-span-5 space-y-6">
            
            <!-- Quick Projects -->
            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-xs space-y-4">
                <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                    <h3 class="text-xs font-extrabold uppercase tracking-wider text-slate-500">📁 Portofolio Terbaru</h3>
                    <a href="{{ route('admin.projects.create') }}" class="px-2.5 py-1 rounded-lg bg-blue-50 text-[#3E5CE7] text-xs font-bold hover:bg-blue-100 transition-all">
                        + Tambah
                    </a>
                </div>

                <div class="space-y-2.5">
                    @foreach($recentProjects as $p)
                        <div class="flex items-center justify-between p-2.5 rounded-xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100">
                            <div class="flex items-center gap-3 overflow-hidden">
                                <img src="{{ $p->thumbnail ?? '/btd/sekolah.png' }}" alt="{{ $p->title }}" class="w-10 h-10 rounded-lg object-cover border border-slate-200 shrink-0 bg-slate-100" />
                                <div class="overflow-hidden">
                                    <div class="font-bold text-xs text-slate-800 truncate">{{ $p->title }}</div>
                                    <div class="text-[10px] text-slate-400">{{ $p->category->name ?? 'Software' }} &bull; {{ $p->client_name ?? 'Klien' }}</div>
                                </div>
                            </div>
                            <a href="{{ route('admin.projects.edit', $p->id) }}" class="text-xs font-bold text-[#3E5CE7] hover:underline shrink-0 ml-2 px-2.5 py-1 rounded-lg bg-slate-100 hover:bg-blue-50">
                                Edit
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Quick Products -->
            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-xs space-y-4">
                <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                    <h3 class="text-xs font-extrabold uppercase tracking-wider text-slate-500">🛒 Produk Digital Store</h3>
                    <a href="{{ route('admin.products.create') }}" class="px-2.5 py-1 rounded-lg bg-orange-50 text-[#fe6000] text-xs font-bold hover:bg-orange-100 transition-all">
                        + Tambah
                    </a>
                </div>

                <div class="space-y-2.5">
                    @foreach($recentProducts as $pr)
                        <div class="flex items-center justify-between p-2.5 rounded-xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100">
                            <div class="flex items-center gap-3 overflow-hidden">
                                <img src="{{ $pr->thumbnail ?? '/btd/0.png' }}" alt="{{ $pr->title }}" class="w-10 h-10 rounded-lg object-cover border border-slate-200 shrink-0 bg-slate-100" />
                                <div class="overflow-hidden">
                                    <div class="font-bold text-xs text-slate-800 truncate">{{ $pr->title }}</div>
                                    <span class="px-1.5 py-0.5 rounded-md bg-orange-50 text-[#fe6000] text-[9px] font-bold">{{ $pr->badge ?? 'Template' }}</span>
                                </div>
                            </div>
                            <div class="text-right shrink-0 ml-2">
                                <div class="mono font-bold text-xs text-[#071330]">Rp {{ number_format($pr->price, 0, ',', '.') }}</div>
                                <a href="{{ route('admin.products.edit', $pr->id) }}" class="text-[10px] text-[#fe6000] font-bold hover:underline">Edit</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
