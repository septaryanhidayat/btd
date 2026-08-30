@extends('admin.layouts.app')

@section('title', 'Dashboard Overview')

@section('content')
<div class="space-y-8">
    
    <!-- Executive Welcome Banner (Ultra-High Contrast Solid Navy & Sharp Typography) -->
    <div class="rounded-3xl bg-[#071330] p-7 sm:p-9 text-white shadow-xl border-2 border-slate-700/80 relative overflow-hidden">
        <div class="relative z-10 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
            <div class="space-y-3.5 max-w-2xl">
                <div class="flex flex-wrap items-center gap-2.5">
                    <span class="px-3.5 py-1.5 rounded-full bg-slate-800/90 text-slate-200 text-[11px] font-extrabold uppercase tracking-wider border border-slate-700/90 flex items-center gap-1.5 shadow-xs">
                        <span>🗓️</span>
                        <span>{{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}</span>
                    </span>
                    @if($unreadInquiryCount > 0)
                        <span class="px-3.5 py-1.5 rounded-full bg-[#fe6000] text-white text-[11px] font-black tracking-wide shadow-md flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-white animate-ping"></span>
                            <span>{{ $unreadInquiryCount }} Pesan Baru Menunggu Respon</span>
                        </span>
                    @else
                        <span class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 text-[11px] font-bold border border-emerald-500/30">
                            ✓ Semua Pesan Terbaca
                        </span>
                    @endif
                </div>
                
                <h1 class="text-2xl sm:text-3xl font-black text-white tracking-tight flex flex-wrap items-center gap-2">
                    <span>Selamat Datang, {{ Auth::user()->name ?? 'Administrator' }}!</span>
                    <span class="inline-block">👋</span>
                </h1>
                
                <p class="text-xs sm:text-sm text-slate-300 font-normal leading-relaxed">
                    Pusat Komando <strong>CV. Beranda Teknologi Digital</strong>. Pantau metrik website, terbitkan portofolio terbaru, kelola modul pelatihan, dan cetak invoice resmi klien dalam satu dasbor terpadu.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-3 shrink-0">
                <a href="{{ route('admin.projects.create') }}" class="px-5 py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-extrabold text-xs uppercase tracking-wider shadow-lg hover:shadow-blue-600/30 transition-all flex items-center gap-2 hover:-translate-y-0.5">
                    <svg class="w-4 h-4 text-white font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                    <span>+ Proyek Baru</span>
                </a>
                <a href="{{ route('admin.settings.index') }}" class="px-5 py-3 rounded-xl bg-[#fe6000] hover:bg-[#e05400] text-white font-extrabold text-xs uppercase tracking-wider shadow-lg hover:shadow-orange-600/30 transition-all flex items-center gap-2 hover:-translate-y-0.5">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                    <span>Atur Tema Web</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Stats Bento Cards (High Contrast & Clear Typography) -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
        
        <!-- 1. Projects -->
        <a href="{{ route('admin.projects.index') }}" class="bg-white p-5 rounded-2xl border-2 border-slate-200 shadow-sm hover:border-[#3E5CE7] hover:shadow-md transition-all space-y-3 group block">
            <div class="flex items-center justify-between">
                <div class="w-11 h-11 rounded-xl bg-blue-500 text-white flex items-center justify-center font-bold text-lg shadow-sm group-hover:scale-105 transition-transform">
                    📁
                </div>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider">Total</span>
            </div>
            <div>
                <div class="text-3xl font-black text-[#071330] mono">{{ $projectCount }}</div>
                <div class="text-xs text-slate-600 font-bold mt-1">Portofolio Proyek</div>
            </div>
        </a>

        <!-- 2. Products -->
        <a href="{{ route('admin.products.index') }}" class="bg-white p-5 rounded-2xl border-2 border-slate-200 shadow-sm hover:border-[#fe6000] hover:shadow-md transition-all space-y-3 group block">
            <div class="flex items-center justify-between">
                <div class="w-11 h-11 rounded-xl bg-[#fe6000] text-white flex items-center justify-center font-bold text-lg shadow-sm group-hover:scale-105 transition-transform">
                    🛒
                </div>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider">Store</span>
            </div>
            <div>
                <div class="text-3xl font-black text-[#071330] mono">{{ $productCount }}</div>
                <div class="text-xs text-slate-600 font-bold mt-1">Produk Digital</div>
            </div>
        </a>

        <!-- 3. Trainings -->
        <a href="{{ route('admin.trainings.index') }}" class="bg-white p-5 rounded-2xl border-2 border-slate-200 shadow-sm hover:border-purple-600 hover:shadow-md transition-all space-y-3 group block">
            <div class="flex items-center justify-between">
                <div class="w-11 h-11 rounded-xl bg-purple-600 text-white flex items-center justify-center font-bold text-lg shadow-sm group-hover:scale-105 transition-transform">
                    🎓
                </div>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider">Modul</span>
            </div>
            <div>
                <div class="text-3xl font-black text-[#071330] mono">{{ $trainingCount }}</div>
                <div class="text-xs text-slate-600 font-bold mt-1">Pelatihan IT</div>
            </div>
        </a>

        <!-- 4. Galleries -->
        <a href="{{ route('admin.galleries.index') }}" class="bg-white p-5 rounded-2xl border-2 border-slate-200 shadow-sm hover:border-emerald-600 hover:shadow-md transition-all space-y-3 group block">
            <div class="flex items-center justify-between">
                <div class="w-11 h-11 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-bold text-lg shadow-sm group-hover:scale-105 transition-transform">
                    🖼️
                </div>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider">Event</span>
            </div>
            <div>
                <div class="text-3xl font-black text-[#071330] mono">{{ $galleryCount }}</div>
                <div class="text-xs text-slate-600 font-bold mt-1">Dokumentasi</div>
            </div>
        </a>

        <!-- 5. Posts -->
        <a href="{{ route('admin.posts.index') }}" class="bg-white p-5 rounded-2xl border-2 border-slate-200 shadow-sm hover:border-cyan-600 hover:shadow-md transition-all space-y-3 group block">
            <div class="flex items-center justify-between">
                <div class="w-11 h-11 rounded-xl bg-cyan-600 text-white flex items-center justify-center font-bold text-lg shadow-sm group-hover:scale-105 transition-transform">
                    📰
                </div>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider">Blog</span>
            </div>
            <div>
                <div class="text-3xl font-black text-[#071330] mono">{{ $postCount }}</div>
                <div class="text-xs text-slate-600 font-bold mt-1">Artikel Terbit</div>
            </div>
        </a>

        <!-- 6. Inquiries -->
        <a href="{{ route('admin.inquiries.index') }}" class="bg-white p-5 rounded-2xl border-2 border-slate-200 shadow-sm hover:border-rose-600 hover:shadow-md transition-all space-y-3 group block">
            <div class="flex items-center justify-between">
                <div class="w-11 h-11 rounded-xl bg-rose-600 text-white flex items-center justify-center font-bold text-lg shadow-sm group-hover:scale-105 transition-transform">
                    ✉️
                </div>
                @if($unreadInquiryCount > 0)
                    <span class="px-2 py-0.5 rounded-full bg-rose-600 text-white text-[9px] font-black">
                        {{ $unreadInquiryCount }} BARU
                    </span>
                @else
                    <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider">Inbox</span>
                @endif
            </div>
            <div>
                <div class="text-3xl font-black text-[#071330] mono">{{ $inquiryCount }}</div>
                <div class="text-xs text-slate-600 font-bold mt-1">Pesan Masuk</div>
            </div>
        </a>

    </div>

    <!-- Quick Action Hub (High-Contrast Rich Navy Box) -->
    <div class="bg-[#071330] p-6 sm:p-7 rounded-3xl text-white shadow-xl border border-slate-800 space-y-4">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 border-b border-white/10 pb-3">
            <div>
                <h3 class="text-sm font-extrabold text-white flex items-center gap-2">
                    <span class="text-[#fe6000]">⚡</span>
                    <span>Aksi Cepat Pengelolaan</span>
                </h3>
                <p class="text-xs text-slate-300 font-medium">Pintasan cepat untuk memperbarui data website dan mencetak invoice</p>
            </div>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3.5">
            <!-- Action 1 -->
            <a href="{{ route('admin.projects.create') }}" class="p-4 rounded-2xl bg-white/10 hover:bg-blue-600 border border-white/15 hover:border-blue-400 transition-all flex items-center gap-3.5 group">
                <div class="w-10 h-10 rounded-xl bg-blue-500 text-white flex items-center justify-center font-black text-lg shadow-md group-hover:scale-110 transition-transform shrink-0">
                    +
                </div>
                <div class="min-w-0">
                    <div class="text-xs font-extrabold text-white group-hover:text-white truncate">Tambah Portofolio</div>
                    <div class="text-[11px] text-slate-300 font-medium truncate">Unggah proyek baru</div>
                </div>
            </a>

            <!-- Action 2 -->
            <a href="{{ route('admin.products.create') }}" class="p-4 rounded-2xl bg-white/10 hover:bg-[#fe6000] border border-white/15 hover:border-orange-400 transition-all flex items-center gap-3.5 group">
                <div class="w-10 h-10 rounded-xl bg-[#fe6000] text-white flex items-center justify-center font-black text-lg shadow-md group-hover:scale-110 transition-transform shrink-0">
                    +
                </div>
                <div class="min-w-0">
                    <div class="text-xs font-extrabold text-white group-hover:text-white truncate">Tambah Produk</div>
                    <div class="text-[11px] text-slate-300 font-medium truncate">Etalase store kit</div>
                </div>
            </a>

            <!-- Action 3 -->
            <a href="{{ route('admin.invoices.index') }}" class="p-4 rounded-2xl bg-white/10 hover:bg-emerald-600 border border-white/15 hover:border-emerald-400 transition-all flex items-center gap-3.5 group">
                <div class="w-10 h-10 rounded-xl bg-emerald-500 text-white flex items-center justify-center font-black text-base shadow-md group-hover:scale-110 transition-transform shrink-0">
                    🧾
                </div>
                <div class="min-w-0">
                    <div class="text-xs font-extrabold text-white group-hover:text-white truncate">Cetak Invoice</div>
                    <div class="text-[11px] text-slate-300 font-medium truncate">Faktur resmi klien</div>
                </div>
            </a>

            <!-- Action 4 -->
            <a href="{{ route('admin.settings.index') }}" class="p-4 rounded-2xl bg-white/10 hover:bg-indigo-600 border border-white/15 hover:border-indigo-400 transition-all flex items-center gap-3.5 group">
                <div class="w-10 h-10 rounded-xl bg-indigo-500 text-white flex items-center justify-center font-black text-base shadow-md group-hover:scale-110 transition-transform shrink-0">
                    🎨
                </div>
                <div class="min-w-0">
                    <div class="text-xs font-extrabold text-white group-hover:text-white truncate">Ubah Tema Web</div>
                    <div class="text-[11px] text-slate-300 font-medium truncate">Warna & nomor WA</div>
                </div>
            </a>
        </div>
    </div>

    <!-- Two Columns: Recent Inquiries (Left 7 cols) & Recent Content (Right 5 cols) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
        
        <!-- Left: Recent Inquiries -->
        <div class="lg:col-span-7 bg-white p-6 sm:p-7 rounded-3xl border-2 border-slate-200 shadow-sm space-y-5">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div>
                    <h2 class="text-base font-extrabold text-[#071330] flex items-center gap-2">
                        <span>✉️ Pesan & Penawaran Masuk Terakhir</span>
                    </h2>
                    <p class="text-xs text-slate-500 font-medium mt-0.5">Calon klien yang mengirim formulir penawaran & kalkulator</p>
                </div>
                <a href="{{ route('admin.inquiries.index') }}" class="px-3.5 py-1.5 rounded-xl bg-slate-100 hover:bg-[#3E5CE7] hover:text-white text-xs font-extrabold text-slate-700 transition-all">
                    Lihat Semua &rarr;
                </a>
            </div>

            <div class="space-y-3">
                @forelse($recentInquiries as $inq)
                    <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="p-4 rounded-2xl border-2 {{ !$inq->is_read ? 'border-orange-300 bg-orange-50/50' : 'border-slate-200 bg-white' }} hover:border-[#3E5CE7] transition-all flex items-start justify-between gap-4 block group">
                        <div class="space-y-1.5 flex-1 min-w-0">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-xl bg-[#071330] text-white flex items-center justify-center font-black text-xs shrink-0">
                                    {{ strtoupper(substr($inq->name, 0, 1)) }}
                                </div>
                                <span class="font-extrabold text-xs text-[#071330] group-hover:text-[#3E5CE7] transition-colors truncate">{{ $inq->name }}</span>
                                @if(!$inq->is_read)
                                    <span class="px-2 py-0.5 rounded-full bg-[#fe6000] text-white font-extrabold text-[9px] shrink-0">BARU</span>
                                @endif
                            </div>
                            <div class="text-[11px] text-slate-600 font-bold truncate">
                                ✉️ {{ $inq->email }} &bull; 📞 {{ $inq->phone ?? '-' }}
                            </div>
                            <p class="text-xs text-slate-800 line-clamp-1 font-medium">
                                {{ $inq->subject ?? $inq->message }}
                            </p>
                        </div>
                        <div class="text-right shrink-0">
                            <span class="text-[11px] text-slate-500 font-mono font-bold block">{{ $inq->created_at->diffForHumans() }}</span>
                            <span class="text-xs text-[#3E5CE7] font-black opacity-0 group-hover:opacity-100 transition-opacity mt-2 block">Buka &rarr;</span>
                        </div>
                    </a>
                @empty
                    <div class="text-center py-10 text-xs text-slate-500 space-y-2">
                        <div class="text-3xl">📬</div>
                        <p class="font-semibold">Belum ada pesan penawaran masuk.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Right: Recent Projects & Products Quick List -->
        <div class="lg:col-span-5 space-y-6">
            
            <!-- Quick Projects -->
            <div class="bg-white p-6 rounded-3xl border-2 border-slate-200 shadow-sm space-y-4">
                <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                    <h3 class="text-xs font-black uppercase tracking-wider text-[#071330]">📁 Portofolio Terbaru</h3>
                    <a href="{{ route('admin.projects.create') }}" class="px-2.5 py-1 rounded-lg bg-blue-50 text-[#3E5CE7] text-xs font-bold hover:bg-blue-100 transition-all">
                        + Tambah
                    </a>
                </div>

                <div class="space-y-2.5">
                    @foreach($recentProjects as $p)
                        <div class="flex items-center justify-between p-2.5 rounded-xl hover:bg-slate-50 transition-all border border-slate-100">
                            <div class="flex items-center gap-3 overflow-hidden">
                                <img src="{{ $p->thumbnail ?? '/btd/sekolah.png' }}" alt="{{ $p->title }}" class="w-11 h-11 rounded-xl object-cover border border-slate-300 shrink-0 bg-slate-100" />
                                <div class="overflow-hidden">
                                    <div class="font-bold text-xs text-slate-900 truncate">{{ $p->title }}</div>
                                    <div class="text-[11px] text-slate-500 font-medium">{{ $p->category->name ?? 'Software' }} &bull; {{ $p->client_name ?? 'Klien' }}</div>
                                </div>
                            </div>
                            <a href="{{ route('admin.projects.edit', $p->id) }}" class="text-xs font-bold text-[#3E5CE7] hover:underline shrink-0 ml-2 px-3 py-1 rounded-lg bg-blue-50">
                                Edit
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Quick Products -->
            <div class="bg-white p-6 rounded-3xl border-2 border-slate-200 shadow-sm space-y-4">
                <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                    <h3 class="text-xs font-black uppercase tracking-wider text-[#071330]">🛒 Produk Digital Store</h3>
                    <a href="{{ route('admin.products.create') }}" class="px-2.5 py-1 rounded-lg bg-orange-50 text-[#fe6000] text-xs font-bold hover:bg-orange-100 transition-all">
                        + Tambah
                    </a>
                </div>

                <div class="space-y-2.5">
                    @foreach($recentProducts as $pr)
                        <div class="flex items-center justify-between p-2.5 rounded-xl hover:bg-slate-50 transition-all border border-slate-100">
                            <div class="flex items-center gap-3 overflow-hidden">
                                <img src="{{ $pr->thumbnail ?? '/btd/0.png' }}" alt="{{ $pr->title }}" class="w-11 h-11 rounded-xl object-cover border border-slate-300 shrink-0 bg-slate-100" />
                                <div class="overflow-hidden">
                                    <div class="font-bold text-xs text-slate-900 truncate">{{ $pr->title }}</div>
                                    <span class="px-2 py-0.5 rounded-md bg-orange-100 text-[#fe6000] text-[9px] font-black">{{ $pr->badge ?? 'Template' }}</span>
                                </div>
                            </div>
                            <div class="text-right shrink-0 ml-2">
                                <div class="mono font-bold text-xs text-[#071330]">Rp {{ number_format($pr->price, 0, ',', '.') }}</div>
                                <a href="{{ route('admin.products.edit', $pr->id) }}" class="text-[11px] text-[#fe6000] font-bold hover:underline">Edit</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
