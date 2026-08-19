@extends('layouts.app')

@section('title', 'Portofolio Digital - CV. Beranda Teknologi Digital')

@section('content')
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold text-xs uppercase tracking-wider">
                Showcase Proyek Software
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-slate-900 dark:text-white">Portofolio Digital</h1>
            <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base">
                Kumpulan hasil pengerjaan proyek sistem enterprise, aplikasi mobile, solusi AI, dan desain UI/UX buatan tim Beranda Digital.
            </p>
        </div>

        <!-- Category Filters -->
        <div class="flex flex-wrap items-center justify-center gap-2">
            <a href="{{ route('projects.index') }}" 
               class="px-4 py-2 rounded-full text-xs font-semibold transition-colors {{ !request('category') ? 'bg-indigo-600 text-white shadow-sm' : 'glass-card text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800' }}">
                Semua Proyek
            </a>
            @foreach($categories as $cat)
                <a href="{{ route('projects.index', ['category' => $cat->slug]) }}" 
                   class="px-4 py-2 rounded-full text-xs font-semibold transition-colors {{ request('category') === $cat->slug ? 'bg-indigo-600 text-white shadow-sm' : 'glass-card text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800' }}">
                    {{ $cat->name }}
                </a>
            @endforeach
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($projects as $project)
                <div class="glass-card rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all flex flex-col group">
                    <div class="relative aspect-video overflow-hidden bg-slate-200 dark:bg-slate-800">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full bg-slate-900/80 backdrop-blur-md text-white text-xs font-medium">
                                {{ $project->category?->name ?? 'Enterprise' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                {{ $project->title }}
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400 text-xs sm:text-sm line-clamp-3 leading-relaxed">
                                {{ $project->summary }}
                            </p>
                        </div>
                        
                        <div class="pt-2 flex items-center justify-between border-t border-slate-200/80 dark:border-slate-800/80 text-xs">
                            <span class="font-medium text-indigo-600 dark:text-indigo-400">{{ $project->client_name }}</span>
                            <a href="{{ route('projects.show', $project->slug) }}" class="font-semibold text-slate-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-400">
                                Case Study &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 text-slate-500">
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
