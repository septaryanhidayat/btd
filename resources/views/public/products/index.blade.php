@extends('layouts.app')

@section('title', 'Katalog Produk Digital & Template - CV. Beranda Teknologi Digital')

@section('content')
<!-- SECTION 1: STORE HERO BANNER (FlyMotion Digital Store Banner) -->
<section class="py-12 bg-white transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="rounded-3xl bg-gradient-to-r from-[#0F2B66] via-[#1A4499] to-[#2563EB] p-8 sm:p-12 text-white shadow-2xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="space-y-4 max-w-xl text-center md:text-left relative z-10">
                <span class="px-3.5 py-1 rounded-full bg-white/20 backdrop-blur-md text-xs font-bold uppercase tracking-wider text-blue-100">
                    Official Digital Store
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight">
                    Bangun Skill & Solusi Digital yang Diminati
                </h1>
                <p class="text-sm sm:text-base text-blue-100 leading-relaxed font-normal">
                    Mudah membangun bisnis digital dan sistem enterprise Anda dengan koleksi templatekit, source code Laravel, dan aplikasi siap pakai.
                </p>
                <div class="pt-2">
                    <a href="#katalog" class="px-7 py-3.5 rounded-md bg-[#fe6000] hover:bg-[#e05400] text-white font-bold text-xs uppercase tracking-wider shadow-lg inline-flex items-center gap-2 transition-all">
                        <span>Jelajahi Sekarang</span> &rarr;
                    </a>
                </div>
            </div>

            <div class="w-72 h-auto shrink-0 relative z-10 hidden md:block anim-logo-top">
                <img src="/images/hero-person-old.png" alt="FlyMotion Store" class="w-full h-auto object-contain drop-shadow-2xl" />
            </div>

            <!-- Ambient Glow -->
            <div class="absolute -bottom-16 -right-16 w-80 h-80 bg-blue-400/20 rounded-full blur-3xl pointer-events-none"></div>
        </div>

    </div>
</section>

<!-- SECTION 2: KATEGORI PILIHAN (Category Chips) -->
<section class="py-8 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#fe6000]">
            <span>✨ Kategori Pilihan</span>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4">
            <div class="bg-[#f8faff] p-4 rounded-2xl border border-slate-100 text-center hover:shadow-md hover:-translate-y-1 transition-all cursor-pointer space-y-2">
                <div class="w-10 h-10 mx-auto rounded-xl bg-blue-100 text-[#3E5CE7] flex items-center justify-center font-bold text-lg">🎨</div>
                <div class="text-xs font-bold text-[#07153f]">Design UI/UX</div>
            </div>
            <div class="bg-[#f8faff] p-4 rounded-2xl border border-slate-100 text-center hover:shadow-md hover:-translate-y-1 transition-all cursor-pointer space-y-2">
                <div class="w-10 h-10 mx-auto rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center font-bold text-lg">🧩</div>
                <div class="text-xs font-bold text-[#07153f]">Plugin & Modul</div>
            </div>
            <div class="bg-[#f8faff] p-4 rounded-2xl border border-slate-100 text-center hover:shadow-md hover:-translate-y-1 transition-all cursor-pointer space-y-2">
                <div class="w-10 h-10 mx-auto rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-lg">&lt;/&gt;</div>
                <div class="text-xs font-bold text-[#07153f]">Source Code</div>
            </div>
            <div class="bg-[#f8faff] p-4 rounded-2xl border border-slate-100 text-center hover:shadow-md hover:-translate-y-1 transition-all cursor-pointer space-y-2">
                <div class="w-10 h-10 mx-auto rounded-xl bg-orange-100 text-[#fe6000] flex items-center justify-center font-bold text-lg">📦</div>
                <div class="text-xs font-bold text-[#07153f]">Template Kit</div>
            </div>
            <div class="bg-[#f8faff] p-4 rounded-2xl border border-slate-100 text-center hover:shadow-md hover:-translate-y-1 transition-all cursor-pointer space-y-2">
                <div class="w-10 h-10 mx-auto rounded-xl bg-pink-100 text-pink-600 flex items-center justify-center font-bold text-lg">🎓</div>
                <div class="text-xs font-bold text-[#07153f]">Kursus & E-Book</div>
            </div>
            <div class="bg-[#f8faff] p-4 rounded-2xl border border-slate-100 text-center hover:shadow-md hover:-translate-y-1 transition-all cursor-pointer space-y-2">
                <div class="w-10 h-10 mx-auto rounded-xl bg-cyan-100 text-cyan-600 flex items-center justify-center font-bold text-lg">🤖</div>
                <div class="text-xs font-bold text-[#07153f]">AI Workflow</div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: KATALOG PRODUK (FlyMotion Store Card Grid) -->
<section id="katalog" class="py-16 bg-flymotion-soft border-t border-slate-100 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Header -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div class="space-y-1">
                <h2 class="text-3xl font-extrabold text-[#07153f]">Katalog Produk Digital</h2>
                <p class="text-xs text-[#64748b]">Daftar template dan software siap pakai berlisensi resmi.</p>
            </div>
            <span class="text-xs font-bold text-[#3E5CE7] hover:underline cursor-pointer">Lihat Semua &rarr;</span>
        </div>

        <!-- Products Grid (16:9 Landscape Thumbnails with Ratings & Tags) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                    <div class="space-y-3">
                        <div class="aspect-video overflow-hidden bg-slate-100 relative border-b border-slate-100">
                            <img src="/btd/{{ ($loop->index % 12) }}.png" alt="{{ $product->title }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" />
                            <div class="absolute top-2 left-2">
                                <span class="px-2.5 py-0.5 rounded-full bg-[#3E5CE7] text-white font-bold text-[9px] shadow-xs">
                                    {{ $product->badge }}
                                </span>
                            </div>
                        </div>

                        <div class="p-4 space-y-2">
                            <div class="flex items-center gap-1 text-amber-400 text-xs">
                                <span>★★★★★</span>
                                <span class="text-[10px] text-slate-500 font-bold ml-1">5.0 (48 review)</span>
                            </div>

                            <h3 class="text-sm font-bold text-[#07153f] group-hover:text-[#3E5CE7] transition-colors line-clamp-2">
                                {{ $product->title }}
                            </h3>

                            <p class="text-[11px] text-[#64748b] line-clamp-2 leading-relaxed">
                                {{ $product->description }}
                            </p>

                            <div class="pt-2 flex items-baseline gap-2">
                                <span class="text-base font-extrabold text-[#fe6000] mono">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </span>
                                <span class="text-[11px] text-slate-400 line-through mono">
                                    Rp {{ number_format($product->price * 1.5, 0, ',', '.') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 pt-0">
                        <a href="{{ route('products.show', $product->slug) }}" class="block w-full py-2.5 text-center rounded-md bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-xs transition-all">
                            Beli / Detail &rarr;
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

<!-- SECTION 4: UNLIMITED ACCESS BANNER -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-gradient-to-r from-[#111827] via-[#1E293B] to-[#0F172A] p-8 sm:p-12 text-white shadow-2xl flex flex-col md:flex-row items-center justify-between gap-6 relative overflow-hidden">
            <div class="space-y-2 relative z-10">
                <span class="text-[10px] font-extrabold uppercase tracking-widest text-amber-400">MEMBERSHIP PASS</span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-white">Akses Semua Produk & Template Tanpa Batas!</h3>
                <p class="text-xs text-slate-300 max-w-xl">Dapatkan lisensi komersial dan pembaruan seumur hidup untuk seluruh produk software CV. Beranda Teknologi Digital.</p>
            </div>
            <a href="https://wa.me/6289695249089?text=Halo%20saya%20tertarik%20membership%20akses%20semua%20produk" target="_blank" class="px-7 py-3.5 rounded-md bg-[#fe6000] hover:bg-[#e05400] text-white font-bold text-xs uppercase tracking-wider shrink-0 shadow-lg transition-all relative z-10">
                Gabung Sekarang &rarr;
            </a>
        </div>
    </div>
</section>

<!-- SECTION 5: FAQ ACCORDION (Frequently Asked Questions) -->
<section class="py-16 bg-[#f8faff] border-t border-slate-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        <div class="text-center space-y-2">
            <span class="text-xs font-bold uppercase tracking-wider text-[#3E5CE7]">BANTUAN & PANDUAN</span>
            <h2 class="text-3xl font-extrabold text-[#07153f]">Frequently Asked Questions ❓</h2>
        </div>

        <div class="space-y-4" x-data="{ active: null }">
            <div class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs">
                <button @click="active = (active === 1 ? null : 1)" class="w-full p-4 text-left flex items-center justify-between text-xs font-bold text-[#07153f]">
                    <span>Bagaimana cara membeli produk digital di sini?</span>
                    <span x-text="active === 1 ? '−' : '+'" class="text-base text-[#3E5CE7]"></span>
                </button>
                <div x-show="active === 1" class="p-4 pt-0 text-xs text-[#64748b] leading-relaxed border-t border-slate-100">
                    Anda dapat mengklik tombol Beli / Detail pada produk pilihan, kemudian checkout melalui WhatsApp Support kami untuk menerima link unduhan instan dan lisensi resmi.
                </div>
            </div>

            <div class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs">
                <button @click="active = (active === 2 ? null : 2)" class="w-full p-4 text-left flex items-center justify-between text-xs font-bold text-[#07153f]">
                    <span>Apakah saya mendapatkan panduan instalasi dan source code?</span>
                    <span x-text="active === 2 ? '−' : '+'" class="text-base text-[#3E5CE7]"></span>
                </button>
                <div x-show="active === 2" class="p-4 pt-0 text-xs text-[#64748b] leading-relaxed border-t border-slate-100">
                    Ya, setiap pembelian produk sudah termasuk file source code lengkap, dokumentasi instalasi PDF/Video, dan bantuan support teknis.
                </div>
            </div>

            <div class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs">
                <button @click="active = (active === 3 ? null : 3)" class="w-full p-4 text-left flex items-center justify-between text-xs font-bold text-[#07153f]">
                    <span>Apakah produk digital bisa dikustomisasi sesuai kebutuhan saya?</span>
                    <span x-text="active === 3 ? '−' : '+'" class="text-base text-[#3E5CE7]"></span>
                </button>
                <div x-show="active === 3" class="p-4 pt-0 text-xs text-[#64748b] leading-relaxed border-t border-slate-100">
                    Tentu saja! Seluruh template dan source code kami clean-code dan modular sehingga sangat mudah disesuaikan atau dikembangkan lebih lanjut.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
