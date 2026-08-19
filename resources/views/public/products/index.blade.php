@extends('layouts.app')

@section('title', 'Etalase Produk Digital & SaaS - CV. Beranda Teknologi Digital')

@section('content')
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 font-semibold text-xs uppercase tracking-wider">
                Produk Ready-to-Use
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-slate-900 dark:text-white">Etalase Produk Digital</h1>
            <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base">
                Platform SaaS, boilerplate skrip enterprise, dan solusi AI yang siap di-deploy untuk mempercepat akselerasi digital usaha Anda.
            </p>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($products as $product)
                <div class="glass-card rounded-3xl p-6 sm:p-8 flex flex-col justify-between space-y-6 hover:shadow-2xl hover:border-cyan-500/50 transition-all relative overflow-hidden">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 text-xs font-bold">
                                {{ $product->badge }}
                            </span>
                            <span class="text-xs font-mono font-bold text-slate-900 dark:text-white">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                            {{ $product->title }}
                        </h3>

                        <p class="text-slate-600 dark:text-slate-400 text-xs sm:text-sm leading-relaxed">
                            {{ $product->description }}
                        </p>

                        @if($product->features)
                            <ul class="space-y-2 pt-2 text-xs text-slate-600 dark:text-slate-300">
                                @foreach(array_slice($product->features, 0, 4) as $feat)
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-500 font-bold">✓</span>
                                        <span>{{ $feat }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="pt-4 flex items-center gap-3">
                        <a href="{{ route('products.show', $product->slug) }}" class="flex-1 py-3 text-center rounded-xl bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-semibold text-xs hover:bg-indigo-600 dark:hover:bg-indigo-400 dark:hover:text-white transition-colors">
                            Lihat Detail Produk
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
