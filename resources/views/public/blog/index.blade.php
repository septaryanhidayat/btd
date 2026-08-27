@extends('layouts.app')

@section('title', 'Insights & Blog Teknologi - CV. Beranda Teknologi Digital')

@section('content')
<!-- SECTION: BLOG & NEWS (FlyMotion Style with Watermark & Search) -->
<section class="py-20 bg-white transition-colors duration-300 relative overflow-hidden">
    
    <!-- Watermark "Blog" -->
    <div class="absolute top-6 left-1/2 -translate-x-1/2 text-8xl sm:text-9xl font-black text-slate-100/70 pointer-events-none select-none tracking-wider -z-0">
        Blog
    </div>

    <!-- Floating Shapes -->
    <div class="absolute top-20 left-12 text-[#fe6000]/40 text-4xl font-black pointer-events-none select-none anim-logo-top">✦</div>
    <div class="absolute bottom-20 right-12 text-[#3E5CE7]/30 text-5xl font-black pointer-events-none select-none anim-logo-bottom">~ ~ ~</div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 relative z-10">
        
        <!-- Header -->
        <div class="text-center space-y-3 max-w-2xl mx-auto">
            <span class="px-4 py-1.5 rounded-full bg-blue-50 text-[#3E5CE7] font-bold text-xs uppercase tracking-wider">
                Blog / News
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-[#07153f]">Insights & Tech Blog</h1>
            <p class="text-base text-[#4a4a4a] leading-relaxed">
                Wawasan seputar pengembangan software Laravel 13, kecerdasan buatan AI, optimasi sistem informasi, dan strategi bisnis digital.
            </p>
        </div>

        <!-- Search Bar -->
        <div class="max-w-md mx-auto">
            <form action="{{ route('blog.index') }}" method="GET" class="flex gap-2">
                <input type="text" 
                       name="q" 
                       value="{{ request('q') }}" 
                       placeholder="Cari artikel teknologi..." 
                       class="flex-1 px-4 py-3 rounded-md border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                <button type="submit" class="px-6 py-3 rounded-md bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-md transition-all">
                    Cari
                </button>
            </form>
        </div>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <article class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="relative aspect-video overflow-hidden bg-slate-100 border-b border-slate-100">
                            <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                            <div class="absolute top-3 left-3">
                                <span class="px-2.5 py-1 rounded-full bg-white/90 backdrop-blur-md text-[#3E5CE7] font-bold text-[10px] shadow-xs">
                                    {{ $post->category?->name ?? 'Teknologi' }}
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-3">
                            <span class="text-[11px] text-[#fe6000] font-bold block">
                                📅 {{ $post->published_at ? $post->published_at->format('d M Y') : $post->created_at->format('d M Y') }}
                            </span>
                            <h2 class="text-base font-bold text-[#07153f] group-hover:text-[#3E5CE7] transition-colors line-clamp-2">
                                {{ $post->title }}
                            </h2>
                            <p class="text-xs text-[#64748b] line-clamp-3 leading-relaxed">
                                {{ $post->excerpt }}
                            </p>
                        </div>
                    </div>

                    <div class="p-6 pt-0 border-t border-slate-100 flex items-center justify-between text-xs mt-4">
                        <span class="font-bold text-[#64748b]">Oleh {{ $post->author?->name ?? 'Septa Ryan Hidayat' }}</span>
                        <a href="{{ route('blog.show', $post->slug) }}" class="font-bold text-[#3E5CE7] hover:underline">
                            Baca Artikel &rarr;
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-3 text-center py-12 text-slate-500 font-medium">
                    Tidak ditemukan artikel yang sesuai.
                </div>
            @endforelse
        </div>

        <div class="pt-6">
            {{ $posts->links() }}
        </div>
    </div>
</section>

<!-- SECTION: LET'S WORK TOGETHER BANNER -->
<section class="py-16 bg-[#f8faff] transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-gradient-to-r from-[#3E5CE7] to-[#2A45C8] p-10 sm:p-16 text-center text-white space-y-6 shadow-2xl relative overflow-hidden">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                Let's Work Together
            </h2>
            <p class="text-blue-100 text-xs sm:text-base leading-relaxed max-w-2xl mx-auto font-normal">
                Konsultasikan rencana pembuatan website, aplikasi mobile Flutter, sistem informasi, atau pelatihan IT bersama CV. Beranda Teknologi Digital.
            </p>
            <div class="pt-4">
                <a href="https://wa.me/6289695249089" target="_blank" class="px-8 py-4 rounded-md bg-white hover:bg-slate-100 text-[#3E5CE7] font-bold text-sm shadow-xl inline-flex items-center gap-2 transition-all">
                    <span>Contact Me</span> &rarr;
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
