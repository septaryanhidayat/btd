@extends('layouts.app')

@section('title', 'Portofolio Digital - CV. Beranda Teknologi Digital')

@section('content')
<section class="py-12 lg:py-16 bg-white dark:bg-[#070A11]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-indigo-100 dark:bg-indigo-950/80 text-indigo-900 dark:text-indigo-300 font-extrabold text-xs uppercase tracking-wider border border-indigo-300 dark:border-indigo-800">
                Showcase Proyek Software & Aplikasi
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-slate-950 dark:text-white font-heading">Portofolio Digital</h1>
            <p class="text-slate-800 dark:text-slate-200 text-sm sm:text-base font-semibold">
                Kumpulan hasil pengerjaan proyek sistem enterprise, aplikasi mobile, solusi AI, dan sistem desa/sekolah buatan CV. Beranda Teknologi Digital.
            </p>
        </div>

        <!-- Category Filters -->
        <div class="flex flex-wrap items-center justify-center gap-2">
            <a href="{{ route('projects.index') }}" 
               class="px-4 py-2 rounded-full text-xs font-extrabold transition-all {{ !request('category') ? 'bg-indigo-700 text-white shadow-md' : 'bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-slate-200 hover:bg-slate-200 dark:hover:bg-slate-700 border border-slate-300 dark:border-slate-700' }}">
                Semua Proyek
            </a>
            @foreach($categories as $cat)
                <a href="{{ route('projects.index', ['category' => $cat->slug]) }}" 
                   class="px-4 py-2 rounded-full text-xs font-extrabold transition-all {{ request('category') === $cat->slug ? 'bg-indigo-700 text-white shadow-md' : 'bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-slate-200 hover:bg-slate-200 dark:hover:bg-slate-700 border border-slate-300 dark:border-slate-700' }}">
                    {{ $cat->name }}
                </a>
            @endforeach
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($projects as $project)
                <div class="bento-card overflow-hidden flex flex-col group border border-slate-200 dark:border-slate-800">
                    <div class="relative aspect-video overflow-hidden bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 rounded-full bg-slate-950 text-white text-[10px] font-extrabold shadow-md">
                                {{ $project->category?->name ?? 'Enterprise' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="text-lg font-extrabold text-slate-950 dark:text-white group-hover:text-indigo-700 dark:group-hover:text-indigo-400 transition-colors line-clamp-1">
                                {{ $project->title }}
                            </h3>
                            <p class="text-slate-700 dark:text-slate-300 text-xs sm:text-sm line-clamp-3 leading-relaxed font-semibold">
                                {{ $project->summary }}
                            </p>
                        </div>
                        
                        <div class="pt-3 flex items-center justify-between border-t border-slate-200 dark:border-slate-800 text-xs">
                            <span class="font-extrabold text-indigo-700 dark:text-indigo-400">{{ $project->client_name }}</span>
                            <a href="{{ route('projects.show', $project->slug) }}" class="font-extrabold text-slate-950 dark:text-white hover:text-indigo-700 dark:hover:text-indigo-400">
                                Detail Proyek &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 text-slate-600 dark:text-slate-400 font-bold">
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
@endsection
