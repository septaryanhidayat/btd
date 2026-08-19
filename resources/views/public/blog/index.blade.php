@extends('layouts.app')

@section('title', 'Insights & Blog Teknologi - CV. Beranda Teknologi Digital')

@section('content')
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold text-xs uppercase tracking-wider">
                Artikel & Berita Teknologi
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-slate-900 dark:text-white">Insights & Tech Blog</h1>
            <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base">
                Wawasan seputar pengembangan software Laravel 13, kecerdasan buatan AI, optimasi database SQLite/MySQL, dan strategi bisnis digital.
            </p>
        </div>

        <!-- Search Bar -->
        <div class="max-w-md mx-auto">
            <form action="{{ route('blog.index') }}" method="GET" class="flex gap-2">
                <input type="text" 
                       name="q" 
                       value="{{ request('q') }}" 
                       placeholder="Cari artikel teknologi..." 
                       class="flex-1 px-4 py-3 rounded-2xl glass-card text-sm text-slate-900 dark:text-white border border-slate-200 dark:border-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                <button type="submit" class="px-6 py-3 rounded-2xl bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-sm shadow-md">
                    Cari
                </button>
            </form>
        </div>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <article class="glass-card rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all flex flex-col group">
                    <div class="relative aspect-video overflow-hidden bg-slate-200 dark:bg-slate-800">
                        <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full bg-slate-900/80 backdrop-blur-md text-white text-xs font-medium">
                                {{ $post->category?->name ?? 'Teknologi' }}
                            </span>
                        </div>
                    </div>

                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">
                                {{ $post->published_at ? $post->published_at->format('d M Y') : $post->created_at->format('d M Y') }}
                            </span>
                            <h2 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors line-clamp-2">
                                {{ $post->title }}
                            </h2>
                            <p class="text-slate-600 dark:text-slate-400 text-xs sm:text-sm line-clamp-3 leading-relaxed">
                                {{ $post->excerpt }}
                            </p>
                        </div>

                        <div class="pt-3 border-t border-slate-200/80 dark:border-slate-800/80 flex items-center justify-between text-xs">
                            <span class="font-medium text-slate-500">By {{ $post->author?->name ?? 'Admin BTD' }}</span>
                            <a href="{{ route('blog.show', $post->slug) }}" class="font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">
                                Baca Artikel &rarr;
                            </a>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-3 text-center py-12 text-slate-500">
                    Tidak ditemukan artikel yang sesuai.
                </div>
            @endforelse
        </div>

        <div class="pt-6">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection
