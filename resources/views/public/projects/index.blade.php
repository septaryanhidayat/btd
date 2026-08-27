@extends('layouts.app')

@section('title', 'Portofolio Proyek Digital - CV. Beranda Teknologi Digital')

@section('content')
<!-- SECTION 1: PORTOFOLIO HERO & LIST (FlyMotion Exact Layout with Watermark & Floating Accents) -->
<section class="py-20 bg-white transition-colors duration-300 relative overflow-hidden">
    
    <!-- Watermark "Portofolio" Background -->
    <div class="absolute top-6 left-1/2 -translate-x-1/2 text-8xl sm:text-9xl font-black text-slate-100/70 pointer-events-none select-none tracking-wider -z-0">
        Portofolio
    </div>

    <!-- Floating Decorative Shapes -->
    <div class="absolute top-28 right-16 text-[#fe6000]/40 text-5xl font-black pointer-events-none select-none anim-logo-top">~ ~ ~</div>
    <div class="absolute top-1/2 right-8 opacity-25 pointer-events-none anim-shape-rotate">
        <svg width="140" height="140" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="45" stroke="#E83E8C" stroke-width="2" stroke-dasharray="4 4"/>
        </svg>
    </div>
    <div class="absolute top-20 left-12 w-10 h-10 border-4 border-purple-200 rotate-12 rounded-lg pointer-events-none anim-logo-bottom"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 relative z-10">
        
        <!-- Header -->
        <div class="text-center space-y-3">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-[#07153f]">Portofolio</h1>
            <p class="text-base text-[#4a4a4a] max-w-2xl mx-auto">
                Koleksi karya terbaik kami dalam pengembangan Website Enterprise, Mobile App Flutter, dan Solusi AI untuk berbagai instansi dan perusahaan.
            </p>
        </div>

        <!-- Category Filters -->
        <div class="flex flex-wrap items-center justify-center gap-2">
            <a href="{{ route('projects.index') }}" 
               class="px-5 py-2.5 rounded-md text-xs font-bold transition-all {{ !request('category') ? 'bg-[#3E5CE7] text-white shadow-md' : 'bg-slate-100 text-[#07153f] hover:bg-slate-200 border border-slate-200' }}">
                Semua Proyek
            </a>
            @foreach($categories as $cat)
                <a href="{{ route('projects.index', ['category' => $cat->slug]) }}" 
                   class="px-5 py-2.5 rounded-md text-xs font-bold transition-all {{ request('category') === $cat->slug ? 'bg-[#3E5CE7] text-white shadow-md' : 'bg-slate-100 text-[#07153f] hover:bg-slate-200 border border-slate-200' }}">
                    {{ $cat->name }}
                </a>
            @endforeach
        </div>

        <!-- Projects Grid (FlyMotion Clean Mockup Card Style) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col group">
                    <div class="relative aspect-video overflow-hidden bg-slate-100 border-b border-slate-100">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-[#3E5CE7] font-bold text-[10px] shadow-xs">
                                {{ $project->category?->name ?? 'Enterprise' }}
                            </span>
                        </div>
                    </div>

                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <div class="flex items-center gap-1.5 text-[11px] text-[#64748b] font-medium">
                                <span>📅</span>
                                <span>{{ $project->published_at ? $project->published_at->format('d F Y') : $project->created_at->format('d F Y') }}</span>
                            </div>
                            <h3 class="text-lg font-extrabold text-[#07153f] group-hover:text-[#3E5CE7] transition-colors line-clamp-1">
                                {{ $project->title }}
                            </h3>
                            <p class="text-xs text-[#64748b] line-clamp-2 leading-relaxed">
                                {{ $project->summary }}
                            </p>
                        </div>
                        
                        <div class="pt-3 border-t border-slate-100">
                            <a href="{{ route('projects.show', $project->slug) }}" class="w-full py-3 rounded-md bg-[#2A334B] hover:bg-[#3E5CE7] text-white font-bold text-xs uppercase text-center block shadow-xs transition-all">
                                <span>Selengkapnya</span> &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 text-slate-500 font-medium">
                    Belum ada proyek dalam kategori ini.
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="pt-6">
            {{ $projects->links() }}
        </div>
    </div>
</section>

<!-- SECTION 2: CLIENT SECTION (Watermark & Text Marquee) -->
<section class="py-16 bg-[#f8faff] overflow-hidden border-t border-slate-100 marquee-pause relative">
    
    <div class="absolute top-4 left-1/2 -translate-x-1/2 text-8xl font-black text-slate-200/40 pointer-events-none select-none tracking-wider -z-0">
        Client
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6 text-center relative z-10">
        <h2 class="text-3xl font-extrabold text-[#07153f]">Client</h2>
        
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
                    Pemerintah Desa Senuro Timur Ogan Ilir
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
