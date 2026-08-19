@extends('layouts.app')

@section('title', $product->title . ' - Detail Produk Digital Beranda Digital')

@section('content')
<section class="py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-cyan-600 dark:text-cyan-400 hover:underline">
            &larr; Kembali ke Etalase Produk
        </a>

        <div class="glass-card rounded-3xl p-8 sm:p-12 space-y-8 relative overflow-hidden">
            <div class="space-y-4 border-b border-slate-200 dark:border-slate-800 pb-6">
                <div class="flex items-center gap-3">
                    <span class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 text-xs font-bold">
                        {{ $product->badge }}
                    </span>
                    <span class="text-xs text-slate-500 font-mono">Lisensi: Permanent Ownership</span>
                </div>
                <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">
                    {{ $product->title }}
                </h1>
                <p class="text-indigo-600 dark:text-indigo-400 font-medium text-sm sm:text-base">
                    {{ $product->tagline }}
                </p>
            </div>

            <div class="space-y-4">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">Deskripsi Produk</h3>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                    {{ $product->description }}
                </p>
            </div>

            @if($product->features)
                <div class="space-y-4">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Fitur Unggulan Included</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @foreach($product->features as $feat)
                            <div class="flex items-start gap-2.5 p-3 rounded-xl bg-slate-100 dark:bg-slate-900/60 text-xs text-slate-700 dark:text-slate-200">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>{{ $feat }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="pt-6 border-t border-slate-200 dark:border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-6">
                <div>
                    <span class="text-xs text-slate-500 uppercase tracking-wider block">Harga Lisensi</span>
                    <span class="text-3xl font-extrabold text-slate-900 dark:text-white font-mono">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </span>
                </div>

                <div class="flex items-center gap-3 w-full sm:w-auto">
                    @if($product->demo_url)
                        <a href="{{ $product->demo_url }}" target="_blank" class="flex-1 sm:flex-none px-6 py-3.5 rounded-xl glass-card text-slate-900 dark:text-white font-bold text-xs hover:bg-slate-200 dark:hover:bg-slate-800 text-center">
                            Live Demo &rarr;
                        </a>
                    @endif
                    <a href="https://wa.me/6289695249089?text=Halo%20Beranda%20Digital,%20saya%20tertarik%20membeli%20produk:%20{{ urlencode($product->title) }}" 
                       target="_blank" 
                       class="flex-1 sm:flex-none px-8 py-3.5 rounded-xl bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-600 hover:to-emerald-700 text-white font-bold text-xs shadow-lg shadow-emerald-500/20 text-center">
                        Beli & Order via WhatsApp
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
