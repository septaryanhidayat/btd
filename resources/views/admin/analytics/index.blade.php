@extends('admin.layouts.app')

@section('title', 'Analitik Pengunjung & Tren Pembaca')

@section('content')
<div class="space-y-6">

    <!-- Header & Period Filter Controls -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 bg-gradient-to-br from-slate-900 via-slate-800 to-indigo-950 p-6 rounded-3xl border border-white/10 shadow-2xl relative overflow-hidden">
        <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-orange-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -left-10 -top-10 w-48 h-48 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="relative z-10 space-y-1">
            <div class="flex items-center gap-2.5">
                <span class="px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-widest bg-orange-500/20 text-orange-400 border border-orange-500/30 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-orange-400 animate-ping"></span> Live Tracking
                </span>
                <span class="text-xs text-slate-400">Pembaruan Real-Time</span>
            </div>
            <h1 class="text-2xl lg:text-3xl font-black text-white tracking-tight flex items-center gap-3">
                Analitik Pengunjung & Tren Pembaca
            </h1>
            <p class="text-xs lg:text-sm text-slate-300 font-medium">
                Statistik terperinci lalu lintas pengunjung website & interaksi pembaca artikel CV. Beranda Teknologi Digital
            </p>
        </div>

        <!-- Period Filter Tabs -->
        <div class="relative z-10 flex items-center bg-white/[0.06] p-1.5 rounded-2xl border border-white/10 backdrop-blur-md self-start md:self-auto">
            <a href="{{ route('admin.analytics.index', ['period' => 'today']) }}" 
               class="px-3.5 py-2 rounded-xl text-xs font-bold transition-all {{ $period === 'today' ? 'bg-[#fe6000] text-white shadow-lg shadow-orange-950/40' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]' }}">
                Hari Ini
            </a>
            <a href="{{ route('admin.analytics.index', ['period' => '7_days']) }}" 
               class="px-3.5 py-2 rounded-xl text-xs font-bold transition-all {{ $period === '7_days' ? 'bg-[#fe6000] text-white shadow-lg shadow-orange-950/40' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]' }}">
                7 Hari
            </a>
            <a href="{{ route('admin.analytics.index', ['period' => '30_days']) }}" 
               class="px-3.5 py-2 rounded-xl text-xs font-bold transition-all {{ $period === '30_days' ? 'bg-[#fe6000] text-white shadow-lg shadow-orange-950/40' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]' }}">
                30 Hari
            </a>
            <a href="{{ route('admin.analytics.index', ['period' => 'all']) }}" 
               class="px-3.5 py-2 rounded-xl text-xs font-bold transition-all {{ $period === 'all' ? 'bg-[#fe6000] text-white shadow-lg shadow-orange-950/40' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]' }}">
                Semua
            </a>
        </div>
    </div>

    <!-- Alert Success Notification -->
    @if(session('success'))
    <div class="p-4 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-semibold flex items-center gap-3">
        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
        <span>{{ session('success') }}</span>
    </div>
    @endif

    <!-- 4 High-Impact KPI Metric Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        
        <!-- Card 1: Total Kunjungan Halaman (Branding Counter) -->
        <div class="p-5 rounded-3xl bg-gradient-to-br from-[#fe6000] to-[#d44f00] text-white shadow-xl shadow-orange-950/20 relative overflow-hidden">
            <div class="absolute right-3 top-3 opacity-15">
                <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
            </div>
            <div class="relative z-10 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="text-[10px] font-extrabold uppercase tracking-widest text-orange-100">Total Kunjungan Halaman</span>
                    <span class="p-2 rounded-xl bg-white/20 backdrop-blur-md">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </span>
                </div>
                <div class="text-3xl font-black tracking-tight font-mono">
                    {{ number_format($totalDisplayCount, 0, ',', '.') }}
                </div>
                <div class="flex items-center gap-1.5 text-[11px] text-orange-100/90 font-medium">
                    <span class="bg-black/20 px-2 py-0.5 rounded-lg font-bold">{{ number_format($periodHits, 0, ',', '.') }}</span>
                    <span>hits tercatat pada periode ini</span>
                </div>
            </div>
        </div>

        <!-- Card 2: Pengunjung Unik -->
        <div class="p-5 rounded-3xl bg-gradient-to-br from-[#3E5CE7] to-[#223cb0] text-white shadow-xl shadow-blue-950/20 relative overflow-hidden">
            <div class="absolute right-3 top-3 opacity-15">
                <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
            </div>
            <div class="relative z-10 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="text-[10px] font-extrabold uppercase tracking-widest text-blue-100">Pengunjung Unik</span>
                    <span class="p-2 rounded-xl bg-white/20 backdrop-blur-md">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </span>
                </div>
                <div class="text-3xl font-black tracking-tight font-mono">
                    {{ number_format($uniqueVisitors, 0, ',', '.') }}
                </div>
                <div class="text-[11px] text-blue-100/90 font-medium">
                    Berdasarkan alamat IP & perangkat unik
                </div>
            </div>
        </div>

        <!-- Card 3: Pengunjung Aktif (Live Online Real) -->
        <div class="p-5 rounded-3xl bg-gradient-to-br from-purple-600 to-indigo-800 text-white shadow-xl shadow-purple-950/20 relative overflow-hidden">
            <div class="absolute right-3 top-3 opacity-15">
                <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </div>
            <div class="relative z-10 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="text-[10px] font-extrabold uppercase tracking-widest text-purple-100">Pengunjung Aktif (Live)</span>
                    <span class="p-2 rounded-xl bg-white/20 backdrop-blur-md flex items-center justify-center">
                        <span class="w-2 h-2 rounded-full bg-emerald-300 animate-ping"></span>
                    </span>
                </div>
                <div class="text-3xl font-black tracking-tight font-mono flex items-center gap-2">
                    <span>{{ $activeOnline }}</span>
                    <span class="text-xs px-2 py-0.5 rounded-full bg-emerald-500/30 text-emerald-200 font-sans font-bold border border-emerald-400/30">Online</span>
                </div>
                <div class="text-[11px] text-purple-100/90 font-medium">
                    Sedang membuka web saat ini (Real 5 Menit)
                </div>
            </div>
        </div>

        <!-- Card 4: Pembaca Mobile (Top Device) -->
        <div class="p-5 rounded-3xl bg-gradient-to-br from-emerald-600 to-teal-800 text-white shadow-xl shadow-emerald-950/20 relative overflow-hidden">
            <div class="absolute right-3 top-3 opacity-15">
                <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
            </div>
            <div class="relative z-10 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="text-[10px] font-extrabold uppercase tracking-widest text-emerald-100">Pembaca Mobile (Top)</span>
                    <span class="p-2 rounded-xl bg-white/20 backdrop-blur-md">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </span>
                </div>
                <div class="text-3xl font-black tracking-tight font-mono">
                    {{ $mobilePercentage }}%
                </div>
                <div class="text-[11px] text-emerald-100/90 font-medium">
                    {{ number_format($mobileCount, 0, ',', '.') }} smartphone dari total {{ number_format($totalDevices, 0, ',', '.') }} kunjungan
                </div>
            </div>
        </div>

    </div>

    <!-- Dual-Line Trend Chart (Grafik Tren Kunjungan & Pembaca) -->
    <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl space-y-4">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-b border-slate-100 dark:border-slate-800 pb-4">
            <div>
                <h3 class="text-base lg:text-lg font-bold text-slate-800 dark:text-white flex items-center gap-2">
                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/></svg>
                    Grafik Tren Kunjungan & Pembaca
                </h3>
                <p class="text-xs text-slate-400 mt-0.5">
                    Perbandingan jumlah kunjungan tayangan halaman (pageviews) vs pengunjung unik
                </p>
            </div>
            <!-- Custom Legend Indicator -->
            <div class="flex items-center gap-4 text-xs font-semibold">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-[#fe6000]"></span>
                    <span class="text-slate-600 dark:text-slate-300">Kunjungan Halaman</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-[#3E5CE7]"></span>
                    <span class="text-slate-600 dark:text-slate-300">Pengunjung Unik</span>
                </div>
            </div>
        </div>

        <div class="relative w-full h-[320px]">
            <canvas id="visitorTrendChart"></canvas>
        </div>
    </div>

    <!-- Row 2: Top 10 Halaman & Sumber Trafik (Traffic Sources) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- Top 10 Halaman & Artikel Populer -->
        <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl flex flex-col justify-between space-y-4">
            <div>
                <div class="flex items-center justify-between border-b border-slate-100 dark:border-slate-800 pb-3">
                    <div>
                        <h3 class="text-sm lg:text-base font-bold text-slate-800 dark:text-white flex items-center gap-2">
                            <span class="text-amber-500 font-extrabold text-lg">★</span>
                            Top 10 Halaman & Artikel Terpopuler
                        </h3>
                        <p class="text-xs text-slate-400">Konten dengan tayangan tertinggi pada periode ini</p>
                    </div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Tayangan</span>
                </div>

                <div class="divide-y divide-slate-100 dark:divide-slate-800/60 mt-2">
                    @forelse($topPages as $index => $page)
                    <div class="py-3 flex items-center justify-between gap-3 group">
                        <div class="flex items-center gap-3 min-w-0">
                            <!-- Rank Badge -->
                            <span class="w-6 h-6 rounded-lg text-xs font-black flex items-center justify-center shrink-0 
                                {{ $index === 0 ? 'bg-amber-400 text-amber-950 shadow-md shadow-amber-500/20' : ($index === 1 ? 'bg-slate-300 text-slate-800' : ($index === 2 ? 'bg-amber-700 text-amber-100' : 'bg-slate-100 dark:bg-slate-800 text-slate-500')) }}">
                                {{ $index + 1 }}
                            </span>
                            <div class="min-w-0">
                                <div class="text-xs font-bold text-slate-800 dark:text-slate-200 truncate group-hover:text-[#fe6000] transition-colors">
                                    {{ $page->page_title }}
                                </div>
                                <div class="text-[10px] text-slate-400 font-mono truncate">
                                    {{ $page->url }}
                                </div>
                            </div>
                        </div>
                        <span class="px-2.5 py-1 rounded-xl bg-orange-50 dark:bg-orange-950/40 text-[#fe6000] dark:text-orange-400 text-xs font-extrabold font-mono shrink-0 border border-orange-200/60 dark:border-orange-900/40">
                            {{ number_format($page->views, 0, ',', '.') }} <span class="text-[9px] font-sans font-medium text-slate-400">views</span>
                        </span>
                    </div>
                    @empty
                    <div class="py-8 text-center text-xs text-slate-400">
                        Belum ada data kunjungan pada periode ini.
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Sumber Asal Kunjungan (Traffic Sources) -->
        <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl space-y-4">
            <div class="border-b border-slate-100 dark:border-slate-800 pb-3">
                <h3 class="text-sm lg:text-base font-bold text-slate-800 dark:text-white flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                    Sumber Asal Kunjungan (Traffic Sources)
                </h3>
                <p class="text-xs text-slate-400">Dari mana pengunjung menemukan dan mengakses website Anda</p>
            </div>

            <div class="space-y-4 mt-2">
                @forelse($trafficSources as $source)
                <div class="space-y-1.5">
                    <div class="flex items-center justify-between text-xs">
                        <div class="flex items-center gap-2 font-bold text-slate-700 dark:text-slate-200">
                            @if(str_contains(strtolower($source->traffic_source), 'langsung') || str_contains(strtolower($source->traffic_source), 'direct'))
                                <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                            @elseif(str_contains(strtolower($source->traffic_source), 'google'))
                                <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                            @elseif(str_contains(strtolower($source->traffic_source), 'whatsapp'))
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            @elseif(str_contains(strtolower($source->traffic_source), 'facebook') || str_contains(strtolower($source->traffic_source), 'instagram'))
                                <span class="w-2 h-2 rounded-full bg-pink-500"></span>
                            @else
                                <span class="w-2 h-2 rounded-full bg-indigo-500"></span>
                            @endif
                            <span>{{ $source->traffic_source }}</span>
                        </div>
                        <div class="flex items-center gap-2 font-mono text-xs">
                            <span class="font-bold text-slate-800 dark:text-slate-100">{{ number_format($source->count, 0, ',', '.') }}</span>
                            <span class="text-slate-400 text-[11px]">({{ $source->percentage }}%)</span>
                        </div>
                    </div>
                    <div class="w-full bg-slate-100 dark:bg-slate-800 h-2 rounded-full overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-500 to-amber-400 h-2 rounded-full transition-all duration-500" 
                             style="width: {{ $source->percentage }}%"></div>
                    </div>
                </div>
                @empty
                <div class="py-8 text-center text-xs text-slate-400">
                    Belum ada data sumber lalu lintas pada periode ini.
                </div>
                @endforelse
            </div>
        </div>

    </div>

    <!-- Row 3: Wilayah Geografis & Perangkat/Browser -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- Asal Wilayah Geografis Pengunjung -->
        <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl space-y-4">
            <div class="border-b border-slate-100 dark:border-slate-800 pb-3">
                <h3 class="text-sm lg:text-base font-bold text-slate-800 dark:text-white flex items-center gap-2">
                    <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Asal Wilayah Geografis Pengunjung
                </h3>
                <p class="text-xs text-slate-400">Kota dan provinsi asal pengunjung yang mengakses web</p>
            </div>

            <div class="space-y-3.5 mt-2">
                @forelse($locations as $loc)
                <div class="flex items-center justify-between gap-3 text-xs">
                    <div class="flex items-center gap-2.5 min-w-0">
                        <span class="w-6 h-6 rounded-lg bg-emerald-50 dark:bg-emerald-950/40 text-emerald-600 dark:text-emerald-400 flex items-center justify-center shrink-0 text-xs">
                            📍
                        </span>
                        <div class="min-w-0">
                            <span class="font-bold text-slate-800 dark:text-slate-200 block truncate">{{ $loc->city }}</span>
                            <span class="text-[10px] text-slate-400 block truncate">{{ $loc->country }}</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 font-mono shrink-0">
                        <span class="px-2 py-0.5 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-bold text-xs">
                            {{ number_format($loc->count, 0, ',', '.') }}
                        </span>
                        <span class="text-[11px] text-slate-400 w-10 text-right">{{ $loc->percentage }}%</span>
                    </div>
                </div>
                @empty
                <div class="py-8 text-center text-xs text-slate-400">
                    Belum ada data wilayah geografis pada periode ini.
                </div>
                @endforelse
            </div>
        </div>

        <!-- Perangkat & Browser Pengunjung -->
        <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl space-y-5">
            <div class="border-b border-slate-100 dark:border-slate-800 pb-3">
                <h3 class="text-sm lg:text-base font-bold text-slate-800 dark:text-white flex items-center gap-2">
                    <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Perangkat & Browser Pengunjung
                </h3>
                <p class="text-xs text-slate-400">Karakteristik perangkat keras dan aplikasi penjelajah web</p>
            </div>

            <!-- 3 Device Cards -->
            <div class="grid grid-cols-3 gap-3">
                <!-- Mobile Card -->
                <div class="p-3 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/60 dark:border-slate-700/60 text-center space-y-1">
                    <span class="text-lg">📱</span>
                    <div class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400">Mobile</div>
                    <div class="text-base font-black text-slate-800 dark:text-white font-mono">{{ $mobilePercentage }}%</div>
                    <div class="text-[10px] text-slate-400 font-mono">{{ number_format($mobileCount, 0, ',', '.') }}</div>
                </div>

                <!-- Desktop Card -->
                <div class="p-3 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/60 dark:border-slate-700/60 text-center space-y-1">
                    <span class="text-lg">💻</span>
                    <div class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400">Desktop</div>
                    <div class="text-base font-black text-slate-800 dark:text-white font-mono">{{ $desktopPercentage }}%</div>
                    <div class="text-[10px] text-slate-400 font-mono">{{ number_format($desktopCount, 0, ',', '.') }}</div>
                </div>

                <!-- Tablet Card -->
                <div class="p-3 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/60 dark:border-slate-700/60 text-center space-y-1">
                    <span class="text-lg">📟</span>
                    <div class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400">Tablet</div>
                    <div class="text-base font-black text-slate-800 dark:text-white font-mono">{{ $tabletPercentage }}%</div>
                    <div class="text-[10px] text-slate-400 font-mono">{{ number_format($tabletCount, 0, ',', '.') }}</div>
                </div>
            </div>

            <!-- Top Browsers Breakdown -->
            <div class="space-y-2.5 pt-2">
                <div class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400">Distribusi Browser</div>
                @forelse($browsers as $browser)
                <div class="flex items-center justify-between text-xs py-1 border-b border-slate-100 dark:border-slate-800/60">
                    <span class="font-bold text-slate-700 dark:text-slate-300">{{ $browser->browser }}</span>
                    <div class="flex items-center gap-2 font-mono">
                        <span class="text-slate-800 dark:text-slate-200 font-bold">{{ number_format($browser->count, 0, ',', '.') }}</span>
                        <span class="text-slate-400 text-[10px]">({{ $browser->percentage }}%)</span>
                    </div>
                </div>
                @empty
                <div class="text-xs text-slate-400 py-2">Belum ada data browser.</div>
                @endforelse
            </div>
        </div>

    </div>

    <!-- Row 4: Log Kunjungan Pengunjung Terbaru (Live Real-time Table) -->
    <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl space-y-4">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-b border-slate-100 dark:border-slate-800 pb-4">
            <div>
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    <h3 class="text-base lg:text-lg font-bold text-slate-800 dark:text-white">
                        Log Kunjungan Pengunjung Terbaru
                    </h3>
                </div>
                <p class="text-xs text-slate-400 mt-0.5">
                    Rekaman aktivitas real-time pengunjung yang mengakses website secara langsung (50 sesi terbaru)
                </p>
            </div>

            <!-- Clean Old Logs Action Button -->
            <form action="{{ route('admin.analytics.clean-logs') }}" method="POST" 
                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus log kunjungan yang berusia lebih dari 30 hari? Tindakan ini akan mengoptimalkan ruang penyimpanan database.');">
                @csrf
                <button type="submit" 
                        class="px-3.5 py-2 rounded-xl text-xs font-bold bg-rose-50 dark:bg-rose-950/40 text-rose-600 dark:text-rose-400 border border-rose-200 dark:border-rose-900/50 hover:bg-rose-100 dark:hover:bg-rose-900/60 transition-all flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    <span>Bersihkan Log 30 Hari</span>
                </button>
            </form>
        </div>

        <!-- Table Responsive -->
        <div class="overflow-x-auto rounded-2xl border border-slate-200/70 dark:border-slate-800">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-slate-50 dark:bg-slate-800/80 text-[10px] font-extrabold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800">
                        <th class="py-3 px-4">Waktu</th>
                        <th class="py-3 px-4">Halaman & Konten</th>
                        <th class="py-3 px-4">Asal & Alamat IP</th>
                        <th class="py-3 px-4">Sumber Asal</th>
                        <th class="py-3 px-4">Perangkat & Browser</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800/60">
                    @forelse($recentLogs as $log)
                    <tr class="hover:bg-slate-50/80 dark:hover:bg-slate-800/40 transition-colors">
                        <!-- Waktu -->
                        <td class="py-3 px-4 whitespace-nowrap">
                            <div class="font-bold text-slate-800 dark:text-slate-200">
                                {{ $log->created_at->diffForHumans() }}
                            </div>
                            <div class="text-[10px] text-slate-400 font-mono">
                                {{ $log->created_at->isoFormat('D MMM Y, HH:mm:ss') }}
                            </div>
                        </td>

                        <!-- Halaman & Konten -->
                        <td class="py-3 px-4 max-w-xs">
                            <div class="font-bold text-slate-800 dark:text-slate-200 truncate" title="{{ $log->page_title }}">
                                {{ $log->page_title }}
                            </div>
                            <a href="{{ $log->url }}" target="_blank" class="text-[10px] text-blue-500 dark:text-blue-400 font-mono hover:underline truncate block">
                                {{ $log->url }}
                            </a>
                        </td>

                        <!-- Asal & IP -->
                        <td class="py-3 px-4 whitespace-nowrap">
                            <div class="flex items-center gap-1.5 font-bold text-slate-700 dark:text-slate-300">
                                <span>📍</span>
                                <span>{{ $log->city }}, {{ $log->country }}</span>
                            </div>
                            <div class="text-[10px] text-slate-400 font-mono mt-0.5">
                                IP: {{ $log->ip_address }}
                            </div>
                        </td>

                        <!-- Sumber Asal -->
                        <td class="py-3 px-4 whitespace-nowrap">
                            <span class="px-2 py-1 rounded-lg text-[10px] font-bold bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                                {{ $log->traffic_source }}
                            </span>
                        </td>

                        <!-- Perangkat & Browser -->
                        <td class="py-3 px-4 whitespace-nowrap">
                            <div class="flex items-center gap-1.5 font-bold text-slate-800 dark:text-slate-200">
                                <span>{{ $log->device_type === 'Mobile' ? '📱' : ($log->device_type === 'Tablet' ? '📟' : '💻') }}</span>
                                <span>{{ $log->device_type }} &bull; {{ $log->os }}</span>
                            </div>
                            <div class="text-[10px] text-slate-400 font-mono mt-0.5">
                                {{ $log->browser }}
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-8 text-center text-xs text-slate-400">
                            Belum ada riwayat rekaman kunjungan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Chart.js CDN for interactive trend visualization -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('visitorTrendChart');
    if (!ctx) return;

    const labels = @json($chartData['labels']);
    const pageviews = @json($chartData['pageviews']);
    const uniques = @json($chartData['uniques']);

    // Create gradient fill
    const canvas = ctx.getContext('2d');
    const orangeGradient = canvas.createLinearGradient(0, 0, 0, 300);
    orangeGradient.addColorStop(0, 'rgba(254, 96, 0, 0.25)');
    orangeGradient.addColorStop(1, 'rgba(254, 96, 0, 0.0)');

    const blueGradient = canvas.createLinearGradient(0, 0, 0, 300);
    blueGradient.addColorStop(0, 'rgba(62, 92, 231, 0.2)');
    blueGradient.addColorStop(1, 'rgba(62, 92, 231, 0.0)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Kunjungan Halaman',
                    data: pageviews,
                    borderColor: '#fe6000',
                    backgroundColor: orangeGradient,
                    fill: true,
                    tension: 0.4,
                    borderWidth: 3,
                    pointBackgroundColor: '#fe6000',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                },
                {
                    label: 'Pengunjung Unik',
                    data: uniques,
                    borderColor: '#3E5CE7',
                    backgroundColor: blueGradient,
                    fill: true,
                    tension: 0.4,
                    borderWidth: 2.5,
                    borderDash: [4, 4],
                    pointBackgroundColor: '#3E5CE7',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: {
                mode: 'index',
                intersect: false,
            },
            plugins: {
                legend: {
                    display: false // Using custom legend above chart
                },
                tooltip: {
                    backgroundColor: 'rgba(10, 19, 48, 0.95)',
                    titleColor: '#ffffff',
                    bodyColor: '#e2e8f0',
                    padding: 12,
                    borderRadius: 12,
                    borderColor: 'rgba(255, 255, 255, 0.1)',
                    borderWidth: 1,
                    boxPadding: 6,
                    usePointStyle: true,
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false,
                    },
                    ticks: {
                        color: '#94a3b8',
                        font: {
                            size: 11,
                            weight: '600',
                        }
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(148, 163, 184, 0.1)',
                    },
                    ticks: {
                        color: '#94a3b8',
                        font: {
                            size: 11,
                        },
                        precision: 0,
                    }
                }
            }
        }
    });
});
</script>
@endsection
