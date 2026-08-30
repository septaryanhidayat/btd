@extends('admin.layouts.app')

@section('title', 'Dashboard Utama')

@section('content')
<div class="space-y-6">
    
    <!-- Executive Welcome Banner (Compact, Ultra-High Contrast Solid Navy & Sharp Typography) -->
    <div class="rounded-2xl bg-[#071330] p-5 sm:p-7 text-white shadow-xl border-2 border-slate-700/80 relative overflow-hidden">
        <div class="relative z-10 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 sm:gap-6">
            <div class="space-y-2.5 max-w-2xl">
                <div class="flex flex-wrap items-center gap-2">
                    <span class="px-3 py-1 rounded-full bg-slate-800 text-slate-200 text-[11px] font-bold uppercase tracking-wider border border-slate-700 flex items-center gap-1.5 shadow-xs">
                        <span>🗓️</span>
                        <span>{{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}</span>
                    </span>
                    @if($unreadInquiryCount > 0)
                        <span class="px-3 py-1 rounded-full bg-[#fe6000] text-white text-[11px] font-extrabold tracking-wide shadow-md flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-white animate-ping"></span>
                            <span>{{ $unreadInquiryCount }} Pesan Baru Menunggu Respon</span>
                        </span>
                    @else
                        <span class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 text-[11px] font-bold border border-emerald-500/30 flex items-center gap-1">
                            <span>✓</span>
                            <span>Semua Pesan Terbaca</span>
                        </span>
                    @endif
                </div>
                
                <h1 class="text-xl sm:text-2xl lg:text-3xl font-black text-white tracking-tight flex flex-wrap items-center gap-2">
                    <span>Selamat Datang, {{ Auth::user()->name ?? 'Administrator' }}!</span>
                    <span class="inline-block">👋</span>
                </h1>
                
                <p class="text-xs text-slate-300 font-normal leading-relaxed">
                    Pusat Komando <strong>CV. Beranda Teknologi Digital</strong>. Pantau metrik website, terbitkan portofolio terbaru, kelola modul pelatihan, dan cetak invoice resmi klien dalam satu dasbor terpadu.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-2.5 shrink-0">
                <a href="{{ route('admin.projects.create') }}" class="px-4 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs uppercase tracking-wider shadow-md hover:shadow-blue-600/30 transition-all flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-white font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                    <span>+ Proyek</span>
                </a>
                <a href="{{ route('admin.invoices.create') }}" class="px-4 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs uppercase tracking-wider shadow-md hover:shadow-emerald-600/30 transition-all flex items-center gap-1.5">
                    <span>🧾</span>
                    <span>+ Invoice</span>
                </a>
                <a href="{{ route('admin.settings.index') }}" class="px-4 py-2.5 rounded-xl bg-[#fe6000] hover:bg-[#e05400] text-white font-bold text-xs uppercase tracking-wider shadow-md hover:shadow-orange-600/30 transition-all flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                    <span>Atur Tema</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Stats Bento Cards: 7 Columns with Centered Icons and Text (Super Compact & Clean) -->
    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-3 sm:gap-3.5">
        
        <!-- 1. Projects -->
        <a href="{{ route('admin.projects.index') }}" class="bg-white p-3.5 sm:p-4 rounded-2xl border border-slate-200 shadow-2xs hover:border-[#3E5CE7] hover:shadow-sm transition-all flex flex-col items-center justify-center text-center group block">
            <div class="w-10 h-10 rounded-xl bg-blue-500 text-white flex items-center justify-center font-bold text-base shadow-2xs group-hover:scale-105 transition-transform mb-2">
                📁
            </div>
            <div class="text-xl sm:text-2xl font-black text-[#071330] mono leading-tight">{{ $projectCount }}</div>
            <div class="text-[11px] text-slate-500 font-bold mt-0.5 truncate w-full">Portofolio</div>
        </a>

        <!-- 2. Products -->
        <a href="{{ route('admin.products.index') }}" class="bg-white p-3.5 sm:p-4 rounded-2xl border border-slate-200 shadow-2xs hover:border-[#fe6000] hover:shadow-sm transition-all flex flex-col items-center justify-center text-center group block">
            <div class="w-10 h-10 rounded-xl bg-[#fe6000] text-white flex items-center justify-center font-bold text-base shadow-2xs group-hover:scale-105 transition-transform mb-2">
                🛒
            </div>
            <div class="text-xl sm:text-2xl font-black text-[#071330] mono leading-tight">{{ $productCount }}</div>
            <div class="text-[11px] text-slate-500 font-bold mt-0.5 truncate w-full">Produk Digital</div>
        </a>

        <!-- 3. Pelatihan IT -->
        <a href="{{ route('admin.trainings.index') }}" class="bg-white p-3.5 sm:p-4 rounded-2xl border border-slate-200 shadow-2xs hover:border-purple-600 hover:shadow-sm transition-all flex flex-col items-center justify-center text-center group block">
            <div class="w-10 h-10 rounded-xl bg-purple-600 text-white flex items-center justify-center font-bold text-base shadow-2xs group-hover:scale-105 transition-transform mb-2">
                🎓
            </div>
            <div class="text-xl sm:text-2xl font-black text-[#071330] mono leading-tight">{{ $trainingCount }}</div>
            <div class="text-[11px] text-slate-500 font-bold mt-0.5 truncate w-full">Pelatihan IT</div>
        </a>

        <!-- 4. Dokumentasi -->
        <a href="{{ route('admin.galleries.index') }}" class="bg-white p-3.5 sm:p-4 rounded-2xl border border-slate-200 shadow-2xs hover:border-indigo-600 hover:shadow-sm transition-all flex flex-col items-center justify-center text-center group block">
            <div class="w-10 h-10 rounded-xl bg-indigo-600 text-white flex items-center justify-center font-bold text-base shadow-2xs group-hover:scale-105 transition-transform mb-2">
                🖼️
            </div>
            <div class="text-xl sm:text-2xl font-black text-[#071330] mono leading-tight">{{ $galleryCount }}</div>
            <div class="text-[11px] text-slate-500 font-bold mt-0.5 truncate w-full">Dokumentasi</div>
        </a>

        <!-- 5. Artikel Blog -->
        <a href="{{ route('admin.posts.index') }}" class="bg-white p-3.5 sm:p-4 rounded-2xl border border-slate-200 shadow-2xs hover:border-cyan-600 hover:shadow-sm transition-all flex flex-col items-center justify-center text-center group block">
            <div class="w-10 h-10 rounded-xl bg-cyan-600 text-white flex items-center justify-center font-bold text-base shadow-2xs group-hover:scale-105 transition-transform mb-2">
                📰
            </div>
            <div class="text-xl sm:text-2xl font-black text-[#071330] mono leading-tight">{{ $postCount }}</div>
            <div class="text-[11px] text-slate-500 font-bold mt-0.5 truncate w-full">Artikel Terbit</div>
        </a>

        <!-- 6. Inquiries / Pesan Masuk -->
        <a href="{{ route('admin.inquiries.index') }}" class="bg-white p-3.5 sm:p-4 rounded-2xl border border-slate-200 shadow-2xs hover:border-rose-600 hover:shadow-sm transition-all flex flex-col items-center justify-center text-center group block">
            <div class="w-10 h-10 rounded-xl bg-rose-600 text-white flex items-center justify-center font-bold text-base shadow-2xs group-hover:scale-105 transition-transform mb-2 relative">
                <span>✉️</span>
                @if($unreadInquiryCount > 0)
                    <span class="absolute -top-1 -right-1 w-3 h-3 rounded-full bg-amber-400 border-2 border-white animate-pulse"></span>
                @endif
            </div>
            <div class="text-xl sm:text-2xl font-black text-[#071330] mono leading-tight">{{ $inquiryCount }}</div>
            <div class="text-[11px] text-slate-500 font-bold mt-0.5 truncate w-full">Pesan Masuk</div>
        </a>

        <!-- 7. INVOICE DICETAK -->
        <a href="{{ route('admin.invoices.index') }}" class="bg-white p-3.5 sm:p-4 rounded-2xl border border-emerald-300 shadow-2xs hover:border-emerald-600 hover:shadow-sm transition-all flex flex-col items-center justify-center text-center group block col-span-2 sm:col-span-2 lg:col-span-1">
            <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-bold text-base shadow-2xs group-hover:scale-105 transition-transform mb-2">
                🧾
            </div>
            <div class="text-xl sm:text-2xl font-black text-emerald-700 mono leading-tight">{{ $invoiceCount }}</div>
            <div class="text-[11px] text-slate-600 font-bold mt-0.5 truncate w-full">Invoice ({{ $paidInvoiceCount }} Paid)</div>
        </a>

    </div>

    <!-- PUSAT PEMANTAUAN KEAMANAN & DETEKSI ANCAMAN SIBER -->
    <div class="bg-[#071330] rounded-2xl p-4 sm:p-5 text-white border border-slate-700 shadow-md space-y-4">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 border-b border-slate-700/80 pb-3">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-lg bg-emerald-500/20 border border-emerald-500/40 text-emerald-400 flex items-center justify-center text-sm shrink-0">
                    🛡️
                </div>
                <div>
                    <h3 class="text-xs sm:text-sm font-extrabold text-white flex items-center gap-2">
                        <span>Pusat Pemantauan Keamanan & Deteksi Ancaman Siber</span>
                        <span class="px-2 py-0.5 rounded-full bg-emerald-500/20 text-emerald-300 text-[9px] font-bold border border-emerald-500/40">
                            ● SISTEM TERLINDUNGI
                        </span>
                    </h3>
                    <p class="text-[11px] text-slate-400 font-normal">Audit berlapis: WAF, kompresi WebP &le;100KB, anti brute-force, dan HSTS encryption</p>
                </div>
            </div>

            <div class="flex items-center gap-2 text-[11px] font-mono shrink-0">
                <span class="px-2.5 py-0.5 rounded-md bg-slate-800 border border-slate-700 text-slate-300">
                    PHP {{ $securityStatus['php_version'] }}
                </span>
                <span class="px-2.5 py-0.5 rounded-md bg-slate-800 border border-slate-700 text-slate-300">
                    Laravel {{ $securityStatus['laravel_version'] }}
                </span>
            </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-2.5 sm:gap-3">
            <div class="p-3 rounded-xl bg-slate-800/60 border border-slate-700/80 space-y-0.5">
                <div class="text-[9px] font-bold uppercase tracking-wider text-slate-400">Proteksi Firewall & WAF</div>
                <div class="text-xs font-bold text-emerald-400 flex items-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>{{ $securityStatus['firewall'] }}</span>
                </div>
                <div class="text-[10px] text-slate-400">Rate Limiter (60 req/menit)</div>
            </div>

            <div class="p-3 rounded-xl bg-slate-800/60 border border-slate-700/80 space-y-0.5">
                <div class="text-[9px] font-bold uppercase tracking-wider text-slate-400">Anti Brute-Force Login</div>
                <div class="text-xs font-bold text-emerald-400 flex items-center gap-1">
                    <span>✓</span>
                    <span>Proteksi Maks 5 Percobaan</span>
                </div>
                <div class="text-[10px] text-slate-400">Auto-lockout percobaan peretasan</div>
            </div>

            <div class="p-3 rounded-xl bg-slate-800/60 border border-slate-700/80 space-y-0.5">
                <div class="text-[9px] font-bold uppercase tracking-wider text-slate-400">Filter Upload Media</div>
                <div class="text-xs font-bold text-cyan-300 flex items-center gap-1">
                    <span>⚡</span>
                    <span>Auto WebP &le; 100KB</span>
                </div>
                <div class="text-[10px] text-slate-400">Sterilisasi file gambar otomatis</div>
            </div>

            <div class="p-3 rounded-xl bg-slate-800/60 border border-slate-700/80 space-y-0.5">
                <div class="text-[9px] font-bold uppercase tracking-wider text-slate-400">Ancaman Kritis / Intrusi</div>
                <div class="text-xs font-bold text-emerald-400 flex items-center gap-1">
                    <span>0 Terdeteksi</span>
                </div>
                <div class="text-[10px] text-slate-400">Database & Server Sehat</div>
            </div>
        </div>
    </div>

    <!-- Two Columns: Recent Invoices & Recent Inquiries -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-6 items-start">
        
        <!-- Left: Recent Invoices Table (7 cols) -->
        <div class="lg:col-span-7 bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-2xs space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                <div>
                    <h2 class="text-sm font-bold text-[#071330] flex items-center gap-1.5">
                        <span>🧾</span>
                        <span>Faktur & Invoice Klien Terakhir</span>
                    </h2>
                    <p class="text-[11px] text-slate-500 font-medium mt-0.5">Total tagihan terbit: <strong class="text-slate-800 mono">Rp {{ number_format($totalInvoiceAmount, 0, ',', '.') }}</strong></p>
                </div>
                <div class="flex items-center gap-1.5">
                    <a href="{{ route('admin.invoices.create') }}" class="px-2.5 py-1 rounded-lg bg-emerald-600 text-white font-bold text-xs hover:bg-emerald-700 transition-all flex items-center gap-1">
                        <span>+ Buat</span>
                    </a>
                    <a href="{{ route('admin.invoices.index') }}" class="px-2.5 py-1 rounded-lg bg-slate-100 hover:bg-[#3E5CE7] hover:text-white text-xs font-bold text-slate-700 transition-all">
                        Semua &rarr;
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-xs">
                    <thead>
                        <tr class="bg-slate-50 text-slate-500 font-extrabold uppercase text-[9px] tracking-wider border-b border-slate-200">
                            <th class="py-2 px-2.5 text-center">No. Invoice</th>
                            <th class="py-2 px-2.5">Klien</th>
                            <th class="py-2 px-2.5 text-center">Status</th>
                            <th class="py-2 px-2.5 text-right">Total (Rp)</th>
                            <th class="py-2 px-2.5 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 font-medium text-xs">
                        @forelse($recentInvoices as $inv)
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-2.5 px-2.5 text-center">
                                    <span class="font-extrabold text-[#071330] mono">#{{ $inv->invoice_number }}</span>
                                    <div class="text-[9px] text-slate-400 font-mono">{{ $inv->invoice_date ? $inv->invoice_date->format('d/m/Y') : '-' }}</div>
                                </td>
                                <td class="py-2.5 px-2.5">
                                    <div class="font-bold text-slate-800 truncate max-w-[130px]">{{ $inv->client_name }}</div>
                                    <div class="text-[10px] text-slate-500 truncate max-w-[130px]">{{ $inv->client_attn }}</div>
                                </td>
                                <td class="py-2.5 px-2.5 text-center">
                                    @if($inv->status === 'PAID')
                                        <span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-bold text-[9px] border border-emerald-200">PAID</span>
                                    @elseif($inv->status === 'PARTIAL')
                                        <span class="px-2 py-0.5 rounded-full bg-amber-50 text-amber-700 font-bold text-[9px] border border-amber-200">DP</span>
                                    @else
                                        <span class="px-2 py-0.5 rounded-full bg-rose-50 text-rose-700 font-bold text-[9px] border border-rose-200">UNPAID</span>
                                    @endif
                                </td>
                                <td class="py-2.5 px-2.5 text-right font-extrabold text-slate-900 mono">
                                    Rp {{ number_format($inv->total_amount, 0, ',', '.') }}
                                </td>
                                <td class="py-2.5 px-2.5 text-center">
                                    <a href="{{ route('admin.invoices.print', $inv->id) }}" target="_blank" class="px-2 py-1 rounded-md bg-blue-50 text-[#3E5CE7] hover:bg-blue-100 font-bold text-[10px] transition-all inline-flex items-center gap-1 border border-blue-200/60">
                                        <span>🖨️ Cetak</span>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-6 text-center text-xs text-slate-500">
                                    Belum ada invoice. <a href="{{ route('admin.invoices.create') }}" class="text-[#3E5CE7] font-bold hover:underline">Buat invoice sekarang &rarr;</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right: Recent Inquiries (5 cols) -->
        <div class="lg:col-span-5 bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-2xs space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                <div>
                    <h2 class="text-sm font-bold text-[#071330] flex items-center gap-1.5">
                        <span>✉️</span>
                        <span>Pesan Masuk Terbaru</span>
                    </h2>
                    <p class="text-[11px] text-slate-500 font-medium">Formulir penawaran dari website</p>
                </div>
                <a href="{{ route('admin.inquiries.index') }}" class="px-2.5 py-1 rounded-lg bg-slate-100 hover:bg-[#3E5CE7] hover:text-white text-xs font-bold text-slate-700 transition-all">
                    Lihat Semua &rarr;
                </a>
            </div>

            <div class="space-y-2.5">
                @forelse($recentInquiries as $inq)
                    <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="p-3 rounded-xl border {{ !$inq->is_read ? 'border-orange-300 bg-orange-50/40' : 'border-slate-200 bg-white' }} hover:border-[#3E5CE7] transition-all flex items-start justify-between gap-2.5 block group">
                        <div class="space-y-0.5 flex-1 min-w-0">
                            <div class="flex items-center gap-1.5">
                                <span class="font-bold text-xs text-[#071330] group-hover:text-[#3E5CE7] transition-colors truncate">{{ $inq->name }}</span>
                                @if(!$inq->is_read)
                                    <span class="px-1.5 py-0.2 rounded-full bg-[#fe6000] text-white font-bold text-[8px] shrink-0">BARU</span>
                                @endif
                            </div>
                            <div class="text-[10px] text-slate-500 font-medium truncate">
                                {{ $inq->email }} &bull; {{ $inq->phone ?? '-' }}
                            </div>
                        </div>
                        <span class="text-[9px] text-slate-400 font-mono font-bold shrink-0">{{ $inq->created_at->diffForHumans() }}</span>
                    </a>
                @empty
                    <div class="text-center py-6 text-xs text-slate-500 space-y-1">
                        <div class="text-xl">📬</div>
                        <p class="font-medium">Belum ada pesan penawaran masuk.</p>
                    </div>
                @endforelse
            </div>
        </div>

    </div>

    <!-- BOTTOM ROW: SYSTEM LOGS & ERROR AUDIT TRAIL -->
    <div class="bg-white rounded-2xl p-4 sm:p-5 border border-slate-200 shadow-2xs space-y-3">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 border-b border-slate-100 pb-2.5">
            <div class="flex items-center gap-2">
                <span class="text-base">📜</span>
                <div>
                    <h3 class="text-xs sm:text-sm font-bold text-[#071330]">Catatan Aktivitas & Log Sistem (Audit Trail)</h3>
                    <p class="text-[11px] text-slate-400">Pantauan error runtime, aktivitas background, dan verifikasi integritas sistem</p>
                </div>
            </div>

            <div>
                @if($errorCount === 0)
                    <span class="px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 text-[11px] font-bold border border-emerald-200 flex items-center gap-1">
                        <span>✓</span>
                        <span>Semua Sistem Normal (0 Error Kritis)</span>
                    </span>
                @else
                    <span class="px-2.5 py-0.5 rounded-full bg-amber-50 text-amber-700 text-[11px] font-bold border border-amber-200 flex items-center gap-1">
                        <span>⚠️</span>
                        <span>{{ $errorCount }} Catatan Perhatian Terdeteksi</span>
                    </span>
                @endif
            </div>
        </div>

        <div class="space-y-1.5 font-mono text-[11px]">
            @forelse($systemLogs as $log)
                <div class="p-2.5 rounded-xl border {{ $log['level'] === 'ERROR' ? 'border-rose-200 bg-rose-50/50 text-rose-900' : ($log['level'] === 'WARNING' ? 'border-amber-200 bg-amber-50/50 text-amber-900' : 'border-slate-200 bg-slate-50 text-slate-700') }} flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                    <div class="flex items-center gap-2 overflow-hidden">
                        <span class="px-1.5 py-0.5 rounded text-[8px] font-extrabold shrink-0 {{ $log['level'] === 'ERROR' ? 'bg-rose-600 text-white' : ($log['level'] === 'WARNING' ? 'bg-amber-600 text-white' : 'bg-slate-700 text-white') }}">
                            {{ $log['level'] }}
                        </span>
                        <span class="truncate font-sans font-medium text-xs">{{ $log['message'] }}</span>
                    </div>
                    <span class="text-slate-400 shrink-0 text-[10px]">{{ $log['timestamp'] }}</span>
                </div>
            @empty
                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-600 text-xs flex items-center justify-between">
                    <div class="flex items-center gap-2 font-sans font-medium">
                        <span class="text-emerald-500 font-bold">✓</span>
                        <span>Log sistem bersih dan stabil. Tidak ada uncaught exception atau insiden keamanan tercatat.</span>
                    </div>
                    <span class="text-slate-400 text-[10px] font-mono">Status: Healthy</span>
                </div>
            @endforelse
        </div>
    </div>

</div>
@endsection
