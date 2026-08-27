@extends('admin.layouts.app')

@section('title', 'Dashboard Overview')

@section('content')
<div class="space-y-8">
    
    <!-- Welcome Header Banner -->
    <div class="rounded-3xl bg-gradient-to-r from-[#07153f] via-[#1A3078] to-[#3E5CE7] p-8 sm:p-10 text-white shadow-xl flex flex-col md:flex-row items-center justify-between gap-6 relative overflow-hidden">
        <div class="space-y-2 relative z-10">
            <span class="px-3.5 py-1 rounded-full bg-white/20 backdrop-blur-md text-[11px] font-bold uppercase tracking-wider text-blue-100">
                Selamat Datang Kembali
            </span>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-white">
                Halo, {{ Auth::user()->name ?? 'Administrator' }} 👋
            </h1>
            <p class="text-xs sm:text-sm text-blue-100 max-w-xl font-normal leading-relaxed">
                Kelola seluruh data portofolio, produk digital, modul pelatihan, galeri dokumentasi, artikel blog, skema warna tema, dan pesan masuk website dari sini.
            </p>
        </div>

        <div class="flex items-center gap-3 relative z-10">
            <a href="{{ route('admin.settings.index') }}" class="px-5 py-3 rounded-xl bg-[#fe6000] hover:bg-[#e05400] text-white font-bold text-xs uppercase tracking-wider shadow-lg transition-all flex items-center gap-2">
                <span>🎨 Kustomisasi Tema</span>
            </a>
            <a href="{{ route('home') }}" target="_blank" class="px-5 py-3 rounded-xl bg-white hover:bg-slate-100 text-[#07153f] font-bold text-xs uppercase tracking-wider shadow-lg transition-all flex items-center gap-2">
                <span>Lihat Web ↗</span>
            </a>
        </div>
    </div>

    <!-- Stats Grid Counters -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6">
        
        <!-- 1. Projects -->
        <a href="{{ route('admin.projects.index') }}" class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all space-y-2 block">
            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#3E5CE7] flex items-center justify-center font-bold text-lg">📁</div>
            <div class="text-2xl font-black text-[#07153f] mono">{{ $projectCount }}</div>
            <div class="text-[11px] text-slate-500 font-bold">Portofolio Proyek</div>
        </a>

        <!-- 2. Products -->
        <a href="{{ route('admin.products.index') }}" class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all space-y-2 block">
            <div class="w-10 h-10 rounded-xl bg-orange-50 text-[#fe6000] flex items-center justify-center font-bold text-lg">🛒</div>
            <div class="text-2xl font-black text-[#07153f] mono">{{ $productCount }}</div>
            <div class="text-[11px] text-slate-500 font-bold">Produk Digital</div>
        </a>

        <!-- 3. Trainings -->
        <a href="{{ route('admin.trainings.index') }}" class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all space-y-2 block">
            <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center font-bold text-lg">🎓</div>
            <div class="text-2xl font-black text-[#07153f] mono">{{ $trainingCount }}</div>
            <div class="text-[11px] text-slate-500 font-bold">Modul Pelatihan</div>
        </a>

        <!-- 4. Galleries -->
        <a href="{{ route('admin.galleries.index') }}" class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all space-y-2 block">
            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-lg">🖼️</div>
            <div class="text-2xl font-black text-[#07153f] mono">{{ $galleryCount }}</div>
            <div class="text-[11px] text-slate-500 font-bold">Dokumentasi Event</div>
        </a>

        <!-- 5. Posts -->
        <a href="{{ route('admin.posts.index') }}" class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all space-y-2 block">
            <div class="w-10 h-10 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center font-bold text-lg">📰</div>
            <div class="text-2xl font-black text-[#07153f] mono">{{ $postCount }}</div>
            <div class="text-[11px] text-slate-500 font-bold">Artikel Blog</div>
        </a>

        <!-- 6. Inquiries -->
        <a href="{{ route('admin.inquiries.index') }}" class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all space-y-2 block">
            <div class="w-10 h-10 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center font-bold text-lg">✉️</div>
            <div class="text-2xl font-black text-[#07153f] mono">{{ $inquiryCount }}</div>
            <div class="text-[11px] text-slate-500 font-bold">Pesan Masuk</div>
        </a>

    </div>

    <!-- Two Columns: Recent Inquiries (Left) & Quick Content Previews (Right) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left: Recent Inquiries -->
        <div class="lg:col-span-7 bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-bold text-[#07153f]">✉️ Pesan & Penawaran Masuk Terakhir</h2>
                    <p class="text-xs text-slate-400">Pesan dari calon klien via form Dapatkan Penawaran</p>
                </div>
                <a href="{{ route('admin.inquiries.index') }}" class="text-xs font-bold text-[#3E5CE7] hover:underline">
                    Lihat Semua &rarr;
                </a>
            </div>

            <div class="space-y-3">
                @forelse($recentInquiries as $inq)
                    <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="p-4 rounded-2xl border border-slate-100 hover:border-slate-300 hover:bg-slate-50 transition-all flex items-start justify-between gap-4 block">
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <span class="font-bold text-xs text-[#07153f]">{{ $inq->name }}</span>
                                @if(!$inq->is_read)
                                    <span class="px-2 py-0.5 rounded-full bg-orange-100 text-[#fe6000] font-extrabold text-[9px]">BARU</span>
                                @endif
                            </div>
                            <p class="text-xs text-slate-500 font-medium">{{ $inq->email }} &bull; {{ $inq->phone ?? '-' }}</p>
                            <p class="text-xs text-slate-700 line-clamp-1 font-semibold">{{ $inq->subject ?? $inq->message }}</p>
                        </div>
                        <span class="text-[10px] text-slate-400 font-mono shrink-0">{{ $inq->created_at->diffForHumans() }}</span>
                    </a>
                @empty
                    <div class="text-center py-8 text-xs text-slate-400">
                        Belum ada pesan masuk.
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Right: Recent Projects & Products Quick Glance -->
        <div class="lg:col-span-5 space-y-6">
            
            <!-- Quick Projects -->
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-sm font-bold text-[#07153f]">📁 Portofolio Terbaru</h3>
                    <a href="{{ route('admin.projects.create') }}" class="px-3 py-1 rounded-lg bg-blue-50 text-[#3E5CE7] text-xs font-bold hover:bg-blue-100 transition-all">
                        + Tambah Proyek
                    </a>
                </div>

                <div class="space-y-3">
                    @foreach($recentProjects as $p)
                        <div class="flex items-center justify-between text-xs p-2 rounded-xl hover:bg-slate-50">
                            <div class="flex items-center gap-2 overflow-hidden">
                                <span class="w-2 h-2 rounded-full bg-[#3E5CE7] shrink-0"></span>
                                <span class="font-bold text-slate-800 truncate">{{ $p->title }}</span>
                            </div>
                            <a href="{{ route('admin.projects.edit', $p->id) }}" class="text-[#3E5CE7] font-bold hover:underline shrink-0 ml-2">Edit</a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Quick Products -->
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-sm font-bold text-[#07153f]">🛒 Produk Digital Terbaru</h3>
                    <a href="{{ route('admin.products.create') }}" class="px-3 py-1 rounded-lg bg-orange-50 text-[#fe6000] text-xs font-bold hover:bg-orange-100 transition-all">
                        + Tambah Produk
                    </a>
                </div>

                <div class="space-y-3">
                    @foreach($recentProducts as $pr)
                        <div class="flex items-center justify-between text-xs p-2 rounded-xl hover:bg-slate-50">
                            <div class="flex items-center gap-2 overflow-hidden">
                                <span class="w-2 h-2 rounded-full bg-[#fe6000] shrink-0"></span>
                                <span class="font-bold text-slate-800 truncate">{{ $pr->title }}</span>
                            </div>
                            <span class="mono font-bold text-[#fe6000] shrink-0 ml-2">Rp {{ number_format($pr->price, 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
