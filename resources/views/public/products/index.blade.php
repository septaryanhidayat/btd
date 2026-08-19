@extends('layouts.app')

@section('title', 'Etalase Produk Digital & SaaS - CV. Beranda Teknologi Digital')

@section('content')
<section class="py-12 lg:py-16 bg-white dark:bg-[#070A11]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-cyan-100 dark:bg-cyan-950/80 text-cyan-900 dark:text-cyan-300 font-extrabold text-xs uppercase tracking-wider border border-cyan-300 dark:border-cyan-800">
                Produk Ready-to-Use
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-slate-950 dark:text-white font-heading">Etalase Produk Digital</h1>
            <p class="text-slate-800 dark:text-slate-200 text-sm sm:text-base font-semibold">
                Platform SaaS, boilerplate skrip enterprise, dan solusi AI yang siap di-deploy untuk mempercepat akselerasi digital usaha Anda.
            </p>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($products as $product)
                <div class="bento-card p-6 sm:p-8 flex flex-col justify-between space-y-6 relative overflow-hidden border border-slate-200 dark:border-slate-800">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="px-3 py-1 rounded-full bg-cyan-100 dark:bg-cyan-950 text-cyan-900 dark:text-cyan-300 text-xs font-extrabold border border-cyan-300 dark:border-cyan-800">
                                {{ $product->badge }}
                            </span>
                            <span class="text-xs font-mono font-extrabold text-slate-950 dark:text-white">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>

                        <h3 class="text-xl font-extrabold text-slate-950 dark:text-white">
                            {{ $product->title }}
                        </h3>

                        <p class="text-slate-700 dark:text-slate-300 text-xs sm:text-sm leading-relaxed font-medium">
                            {{ $product->description }}
                        </p>

                        @if($product->features)
                            <ul class="space-y-2 pt-2 text-xs text-slate-800 dark:text-slate-200 font-semibold">
                                @foreach(array_slice($product->features, 0, 4) as $feat)
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-600 font-extrabold">✓</span>
                                        <span>{{ $feat }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex items-center gap-3">
                        <a href="{{ route('products.show', $product->slug) }}" class="flex-1 py-3 text-center rounded-xl bg-slate-950 text-white font-extrabold text-xs hover:bg-indigo-700 transition-colors shadow-md">
                            Lihat Detail Produk &rarr;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pt-6">
            {{ $products->links() }}
        </div>
    </div>
</section>
@endsection
