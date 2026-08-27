@extends('layouts.app')

@section('title', 'Hubungi Kami & Dapatkan Penawaran - CV. Beranda Teknologi Digital')

@section('content')
<!-- SECTION: CONTACT & ESTIMATOR (FlyMotion Contact Layout with Watermark) -->
<section class="py-20 bg-white transition-colors duration-300 relative overflow-hidden" x-data="{
    platformPrice: 3000000,
    platformName: 'Standard Website (Rp 3 Juta)',
    authFeature: 1000000,
    paymentFeature: 0,
    waFeature: 0,
    aiFeature: 0,

    get totalPrice() {
        let base = this.platformPrice + (this.authFeature ? 1000000 : 0) + (this.paymentFeature ? 1500000 : 0) + (this.waFeature ? 1000000 : 0) + (this.aiFeature ? 2500000 : 0);
        return base;
    },

    formatCurrency(val) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(val);
    }
}">
    
    <!-- Watermark "Client" -->
    <div class="absolute top-6 left-1/2 -translate-x-1/2 text-8xl sm:text-9xl font-black text-slate-100/70 pointer-events-none select-none tracking-wider -z-0">
        Client
    </div>

    <!-- Floating Decorative Shapes -->
    <div class="absolute top-20 right-10 text-[#fe6000]/40 text-4xl font-black pointer-events-none select-none anim-logo-top">~ ~ ~</div>
    <div class="absolute bottom-20 left-10 text-[#3E5CE7]/30 text-5xl font-black pointer-events-none select-none anim-logo-bottom">✦</div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16 relative z-10">
        
        <!-- Header -->
        <div class="text-left space-y-3">
            <div class="flex items-center gap-3">
                <span class="w-8 h-1 bg-[#fe6000] rounded-full"></span>
                <span class="text-sm font-bold tracking-wider uppercase text-[#fe6000]">Client / Contact</span>
            </div>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-[#07153f]">Hubungi Tim Beranda Digital</h1>
            <p class="text-base text-[#4a4a4a] leading-relaxed max-w-2xl">
                Mari kita bicarakan. Tim kami terdiri dari web designer dan web developer professional yang sudah berpengalaman memberikan hasil terbaik. Dengan konsep engaging design untuk hasil website yang optimal untuk bisnis Anda.
            </p>
        </div>

        <!-- Contact Info Cards (FlyMotion Pastel Cards) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="https://wa.me/6289695249089" target="_blank" class="bg-[#f8faff] p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all group flex items-center gap-4">
                <div class="w-14 h-14 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-2xl shrink-0">
                    💬
                </div>
                <div>
                    <h3 class="text-sm font-bold text-[#07153f]">WhatsApp Support</h3>
                    <p class="text-xs font-mono font-bold text-[#3E5CE7]">0896 9524 9089</p>
                    <span class="text-[11px] text-emerald-600 font-bold">Respon Cepat 24/7 &rarr;</span>
                </div>
            </a>

            <a href="mailto:info@berandadigital.net" class="bg-[#f8faff] p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all group flex items-center gap-4">
                <div class="w-14 h-14 rounded-full bg-blue-100 text-[#3E5CE7] flex items-center justify-center font-bold text-2xl shrink-0">
                    ✉️
                </div>
                <div>
                    <h3 class="text-sm font-bold text-[#07153f]">Email Resmi</h3>
                    <p class="text-xs font-mono font-bold text-[#3E5CE7]">info@berandadigital.net</p>
                    <span class="text-[11px] text-[#3E5CE7] font-bold">Proposal & Penawaran &rarr;</span>
                </div>
            </a>

            <div class="bg-[#f8faff] p-6 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
                <div class="w-14 h-14 rounded-full bg-amber-100 text-[#fe6000] flex items-center justify-center font-bold text-2xl shrink-0">
                    🏢
                </div>
                <div>
                    <h3 class="text-sm font-bold text-[#07153f]">CV. Beranda Teknologi Digital</h3>
                    <p class="text-xs text-[#64748b] leading-tight font-medium">Ogan Ilir & Palembang, Sumsel</p>
                    <span class="text-[11px] text-[#fe6000] font-bold">Sen - Sab (08.00 - 17.00)</span>
                </div>
            </div>
        </div>

        <!-- Two Columns: Project Cost Estimator (Left) & Form Inquiry (Right) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Left: Interactive Estimator -->
            <div class="lg:col-span-7 bg-white p-8 sm:p-10 rounded-3xl border border-slate-100 shadow-2xl space-y-8">
                <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                    <h2 class="text-xl font-bold text-[#07153f]">⚡ Kalkulator Estimasi Anggaran</h2>
                    <span class="px-3 py-1 rounded-full bg-orange-50 text-[#fe6000] font-bold text-[10px]">Interaktif</span>
                </div>

                <!-- Step 1: Platform -->
                <div class="space-y-3">
                    <label class="text-xs font-bold uppercase tracking-wider block text-[#07153f]">1. Pilih Nominal Skala Proyek Utama</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <button type="button" 
                                @click="platformPrice = 3000000; platformName = 'Standard Website (Rp 3 Juta)'"
                                :class="platformPrice === 3000000 ? 'bg-[#fe6000] text-white font-bold shadow-md ring-2 ring-[#fe6000]/50' : 'bg-slate-50 text-slate-700 font-semibold hover:bg-slate-100'"
                                class="p-4 rounded-xl text-left text-xs transition-all border border-slate-200 flex flex-col justify-between">
                            <span class="font-extrabold text-sm">3 JUTA</span>
                            <span class="text-[11px] opacity-90">Rp 3.000.000</span>
                        </button>

                        <button type="button" 
                                @click="platformPrice = 5000000; platformName = 'Advanced Web & System (Rp 5 Juta)'"
                                :class="platformPrice === 5000000 ? 'bg-[#fe6000] text-white font-bold shadow-md ring-2 ring-[#fe6000]/50' : 'bg-slate-50 text-slate-700 font-semibold hover:bg-slate-100'"
                                class="p-4 rounded-xl text-left text-xs transition-all border border-slate-200 flex flex-col justify-between">
                            <span class="font-extrabold text-sm">5 JUTA</span>
                            <span class="text-[11px] opacity-90">Rp 5.000.000</span>
                        </button>

                        <button type="button" 
                                @click="platformPrice = 10000000; platformName = 'Enterprise Web, Mobile & AI (Rp 10 Juta)'"
                                :class="platformPrice === 10000000 ? 'bg-[#fe6000] text-white font-bold shadow-md ring-2 ring-[#fe6000]/50' : 'bg-slate-50 text-slate-700 font-semibold hover:bg-slate-100'"
                                class="p-4 rounded-xl text-left text-xs transition-all border border-slate-200 flex flex-col justify-between">
                            <span class="font-extrabold text-sm">10 JUTA</span>
                            <span class="text-[11px] opacity-90">Rp 10.000.000</span>
                        </button>

                        <button type="button" 
                                @click="platformPrice = 7000000; platformName = 'AI RAG Document Solution'"
                                :class="platformPrice === 7000000 ? 'bg-[#fe6000] text-white font-bold shadow-md ring-2 ring-[#fe6000]/50' : 'bg-slate-50 text-slate-700 font-semibold hover:bg-slate-100'"
                                class="p-4 rounded-xl text-left text-xs transition-all border border-slate-200 flex flex-col justify-between">
                            <span class="font-extrabold text-sm">7 JUTA</span>
                            <span class="text-[11px] opacity-90">AI RAG Solution</span>
                        </button>
                    </div>
                </div>

                <!-- Step 2: Fitur Tambahan -->
                <div class="space-y-3">
                    <label class="text-xs font-bold uppercase tracking-wider block text-[#07153f]">2. Fitur Tambahan (Add-ons)</label>
                    <div class="space-y-2">
                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200 text-xs cursor-pointer">
                            <span class="flex items-center gap-2 font-semibold text-[#07153f]">
                                <input type="checkbox" x-model="authFeature" class="rounded text-[#fe6000]" />
                                <span>Multi-user Authentication & Role Permission</span>
                            </span>
                            <span class="mono font-bold text-[#fe6000]">+Rp 1.000.000</span>
                        </label>

                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200 text-xs cursor-pointer">
                            <span class="flex items-center gap-2 font-semibold text-[#07153f]">
                                <input type="checkbox" x-model="paymentFeature" class="rounded text-[#fe6000]" />
                                <span>Integrasi Payment Gateway (Midtrans/Xendit)</span>
                            </span>
                            <span class="mono font-bold text-[#fe6000]">+Rp 1.500.000</span>
                        </label>

                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200 text-xs cursor-pointer">
                            <span class="flex items-center gap-2 font-semibold text-[#07153f]">
                                <input type="checkbox" x-model="waFeature" class="rounded text-[#fe6000]" />
                                <span>WhatsApp Gateway Notifikasi Real-time</span>
                            </span>
                            <span class="mono font-bold text-[#fe6000]">+Rp 1.000.000</span>
                        </label>

                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200 text-xs cursor-pointer">
                            <span class="flex items-center gap-2 font-semibold text-[#07153f]">
                                <input type="checkbox" x-model="aiFeature" class="rounded text-[#fe6000]" />
                                <span>Integrasi Engine AI RAG Privat</span>
                            </span>
                            <span class="mono font-bold text-purple-600">+Rp 2.500.000</span>
                        </label>
                    </div>
                </div>

                <!-- Total Estimasi Display Box -->
                <div class="p-6 rounded-2xl bg-[#07153f] text-white space-y-2 shadow-xl">
                    <div class="flex items-center justify-between text-xs text-slate-300">
                        <span>Estimasi Total Investasi Proyek</span>
                        <span x-text="platformName" class="font-bold text-amber-300"></span>
                    </div>
                    <div class="text-3xl font-extrabold mono text-cyan-300" x-text="formatCurrency(totalPrice)"></div>
                    <p class="text-[11px] text-slate-300 leading-tight pt-1">
                        *Estimasi bersifat perkiraan awal. Biaya akhir disesuaikan dengan TOR / RAB instansi Anda.
                    </p>
                </div>
            </div>

            <!-- Right: FlyMotion Inquiry Form ("Dapatkan Penawaran") -->
            <div class="lg:col-span-5 bg-white p-8 rounded-3xl border border-slate-100 shadow-2xl space-y-6">
                <div>
                    <h2 class="text-xl font-extrabold text-[#07153f]">Dapatkan Penawaran</h2>
                    <p class="text-xs text-[#64748b]">Isi data diri dan kebutuhan proyek Anda untuk mendapatkan penawaran resmi.</p>
                </div>

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                    @csrf
                    
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-[#07153f]">Nama Lengkap *</label>
                        <input type="text" name="name" required placeholder="Nama" class="w-full px-4 py-3 rounded-md border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-[#07153f]">Email Utama *</label>
                        <input type="email" name="email" required placeholder="Email" class="w-full px-4 py-3 rounded-md border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-[#07153f]">Nomor WhatsApp / HP</label>
                        <input type="text" name="phone" placeholder="No. WhatsApp / No. HP" class="w-full px-4 py-3 rounded-md border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-[#07153f]">Ide Proyek</label>
                        <input type="text" name="subject" x-bind:value="'Permintaan Penawaran ' + platformName" class="w-full px-4 py-3 rounded-md border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-[#07153f]">Pesan / Kebutuhan *</label>
                        <textarea name="message" rows="4" required placeholder="Pesan" class="w-full px-4 py-3 rounded-md border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-md bg-[#fe6000] hover:bg-[#e05400] text-white font-bold text-xs uppercase tracking-wider shadow-md transition-all">
                        Send / Kirim Penawaran &rarr;
                    </button>
                </form>
            </div>

        </div>

    </div>
</section>
@endsection
