@extends('layouts.app')

@section('title', 'Hubungi Kami & Kalkulator Estimasi Proyek - CV. Beranda Teknologi Digital')

@section('content')
<section class="py-12" x-data="{
    platformPrice: 3000000,
    platformName: 'Website / Web Application',
    authFeature: 1000000,
    paymentFeature: 0,
    waFeature: 0,
    aiFeature: 0,
    timelineMultiplier: 1.0,

    get totalPrice() {
        let base = this.platformPrice + (this.authFeature ? 1000000 : 0) + (this.paymentFeature ? 1500000 : 0) + (this.waFeature ? 1000000 : 0) + (this.aiFeature ? 2500000 : 0);
        return Math.round(base * this.timelineMultiplier);
    },

    formatCurrency(val) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(val);
    }
}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="px-4 py-1.5 rounded-full bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold text-xs uppercase tracking-wider">
                Hubungi Tim Beranda Digital
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-slate-900 dark:text-white">Konsultasi Proyek & Estimator</h1>
            <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base">
                Hitung estimasi awal biaya pengerjaan software Anda secara otomatis, atau kirimkan pesan langsung kepada tim teknis kami.
            </p>
        </div>

        <!-- Contact Info Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="https://wa.me/6289695249089" target="_blank" class="glass-card rounded-3xl p-6 flex items-center gap-4 hover:border-emerald-500/50 hover:-translate-y-1 transition-all group">
                <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 text-emerald-500 flex items-center justify-center font-bold text-xl group-hover:scale-110 transition-transform">
                    💬
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">WhatsApp Customer Support</h3>
                    <p class="text-xs text-slate-500 font-mono">+62 896-9524-9089</p>
                    <span class="text-[11px] text-emerald-600 dark:text-emerald-400 font-medium">Respon Cepat 24/7 &rarr;</span>
                </div>
            </a>

            <a href="mailto:contact@berandadigital.net" class="glass-card rounded-3xl p-6 flex items-center gap-4 hover:border-indigo-500/50 hover:-translate-y-1 transition-all group">
                <div class="w-12 h-12 rounded-2xl bg-indigo-500/10 text-indigo-500 flex items-center justify-center font-bold text-xl group-hover:scale-110 transition-transform">
                    ✉️
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">Email Resmi</h3>
                    <p class="text-xs text-slate-500 font-mono">contact@berandadigital.net</p>
                    <span class="text-[11px] text-indigo-600 dark:text-indigo-400 font-medium">Untuk Proposal Formal &rarr;</span>
                </div>
            </a>

            <div class="glass-card rounded-3xl p-6 flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center font-bold text-xl">
                    🏢
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">CV. Beranda Teknologi Digital</h3>
                    <p class="text-xs text-slate-500 leading-tight">Cyber Hub Tower, Lt 12, Jakarta</p>
                    <span class="text-[11px] text-amber-600 dark:text-amber-400 font-medium">Jam Kerja: Sen - Sab (08.00 - 17.00)</span>
                </div>
            </div>
        </div>

        <!-- Two Columns: Project Cost Estimator (Left) & Form Inquiry (Right) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Left: Interactive Estimator -->
            <div class="lg:col-span-7 glass-card rounded-3xl p-8 sm:p-10 space-y-8 relative overflow-hidden">
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold text-slate-900 dark:text-white">⚡ Kalkulator Estimasi Proyek</h2>
                        <span class="text-xs px-3 py-1 rounded-full bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-bold">Interaktif</span>
                    </div>
                    <p class="text-xs text-slate-500">Pilih opsi platform dan fitur yang Anda inginkan untuk menghitung estimasi otomatis.</p>
                </div>

                <!-- Step 1: Platform -->
                <div class="space-y-3">
                    <label class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider block">1. Pilih Jenis Platform / Perangkat Lunak</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <button type="button" 
                                @click="platformPrice = 3000000; platformName = 'Website / Web App'"
                                :class="platformPrice === 3000000 ? 'border-indigo-600 bg-indigo-500/10 text-indigo-600 dark:text-indigo-300 font-bold' : 'border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300'"
                                class="p-4 rounded-2xl border text-left text-xs transition-all flex flex-col justify-between">
                            <span class="font-bold">Website / Web App</span>
                            <span class="text-[11px] opacity-75">Mulai Rp 3.000.000</span>
                        </button>

                        <button type="button" 
                                @click="platformPrice = 5000000; platformName = 'Mobile App Android/iOS'"
                                :class="platformPrice === 5000000 ? 'border-indigo-600 bg-indigo-500/10 text-indigo-600 dark:text-indigo-300 font-bold' : 'border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300'"
                                class="p-4 rounded-2xl border text-left text-xs transition-all flex flex-col justify-between">
                            <span class="font-bold">Mobile App (Flutter)</span>
                            <span class="text-[11px] opacity-75">Mulai Rp 5.000.000</span>
                        </button>

                        <button type="button" 
                                @click="platformPrice = 10000000; platformName = 'Enterprise ERP System'"
                                :class="platformPrice === 10000000 ? 'border-indigo-600 bg-indigo-500/10 text-indigo-600 dark:text-indigo-300 font-bold' : 'border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300'"
                                class="p-4 rounded-2xl border text-left text-xs transition-all flex flex-col justify-between">
                            <span class="font-bold">Custom Enterprise ERP</span>
                            <span class="text-[11px] opacity-75">Mulai Rp 10.000.000</span>
                        </button>

                        <button type="button" 
                                @click="platformPrice = 7000000; platformName = 'AI RAG Document Solution'"
                                :class="platformPrice === 7000000 ? 'border-indigo-600 bg-indigo-500/10 text-indigo-600 dark:text-indigo-300 font-bold' : 'border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300'"
                                class="p-4 rounded-2xl border text-left text-xs transition-all flex flex-col justify-between">
                            <span class="font-bold">AI RAG Document System</span>
                            <span class="text-[11px] opacity-75">Mulai Rp 7.000.000</span>
                        </button>
                    </div>
                </div>

                <!-- Step 2: Fitur Tambahan -->
                <div class="space-y-3">
                    <label class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider block">2. Fitur Tambahan</label>
                    <div class="space-y-2">
                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-100 dark:bg-slate-900/60 text-xs cursor-pointer">
                            <span class="flex items-center gap-2">
                                <input type="checkbox" x-model="authFeature" class="rounded text-indigo-600" />
                                <span>Multi-user Authentication & Role Permission</span>
                            </span>
                            <span class="font-mono text-slate-500">+Rp 1.000.000</span>
                        </label>

                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-100 dark:bg-slate-900/60 text-xs cursor-pointer">
                            <span class="flex items-center gap-2">
                                <input type="checkbox" x-model="paymentFeature" class="rounded text-indigo-600" />
                                <span>Integrasi Payment Gateway (Midtrans/Xendit)</span>
                            </span>
                            <span class="font-mono text-slate-500">+Rp 1.500.000</span>
                        </label>

                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-100 dark:bg-slate-900/60 text-xs cursor-pointer">
                            <span class="flex items-center gap-2">
                                <input type="checkbox" x-model="waFeature" class="rounded text-indigo-600" />
                                <span>WhatsApp Gateway Notifikasi Real-time</span>
                            </span>
                            <span class="font-mono text-slate-500">+Rp 1.000.000</span>
                        </label>

                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-100 dark:bg-slate-900/60 text-xs cursor-pointer">
                            <span class="flex items-center gap-2">
                                <input type="checkbox" x-model="aiFeature" class="rounded text-indigo-600" />
                                <span>Integrasi AI Chatbot / OpenAI Model</span>
                            </span>
                            <span class="font-mono text-slate-500">+Rp 2.500.000</span>
                        </label>
                    </div>
                </div>

                <!-- Step 3: Timeline Speed -->
                <div class="space-y-3">
                    <label class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider block">3. Kecepatan Timeline Pengerjaan</label>
                    <div class="grid grid-cols-2 gap-3">
                        <button type="button" 
                                @click="timelineMultiplier = 1.0"
                                :class="timelineMultiplier === 1.0 ? 'border-indigo-600 bg-indigo-500/10 text-indigo-600 font-bold' : 'border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300'"
                                class="p-3 rounded-xl border text-center text-xs">
                            Standard Timeline (Normal)
                        </button>
                        <button type="button" 
                                @click="timelineMultiplier = 1.25"
                                :class="timelineMultiplier === 1.25 ? 'border-indigo-600 bg-indigo-500/10 text-indigo-600 font-bold' : 'border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300'"
                                class="p-3 rounded-xl border text-center text-xs">
                            Express / Urgent Timeline (+25%)
                        </button>
                    </div>
                </div>

                <!-- Total Estimasi Display Box -->
                <div class="p-6 rounded-2xl bg-gradient-to-tr from-indigo-900 to-slate-900 text-white space-y-2 shadow-xl">
                    <div class="flex items-center justify-between text-xs text-indigo-200">
                        <span>Estimasi Total Investasi Proyek</span>
                        <span x-text="platformName"></span>
                    </div>
                    <div class="text-3xl font-extrabold font-mono text-cyan-400" x-text="formatCurrency(totalPrice)"></div>
                    <p class="text-[11px] text-slate-300 leading-tight pt-1">
                        *Estimasi bersifat perkiraan awal. Biaya akhir disesuaikan dengan scope spesifikasi detail (TOR).
                    </p>
                </div>
            </div>

            <!-- Right: Inquiry Form -->
            <div class="lg:col-span-5 glass-card rounded-3xl p-8 space-y-6">
                <div>
                    <h2 class="text-xl font-bold text-slate-900 dark:text-white">Formulir Kirim Pesan</h2>
                    <p class="text-xs text-slate-500">Isi data diri dan kebutuhan proyek Anda untuk mendapatkan penawaran resmi.</p>
                </div>

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                    @csrf
                    
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-700 dark:text-slate-300">Nama Lengkap *</label>
                        <input type="text" name="name" required placeholder="Contoh: Hendra Setiawan" class="w-full px-4 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-xs text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-700 dark:text-slate-300">Email Utama *</label>
                        <input type="email" name="email" required placeholder="email@perusahaan.com" class="w-full px-4 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-xs text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-700 dark:text-slate-300">Nomor WhatsApp / HP</label>
                        <input type="text" name="phone" placeholder="08123456789" class="w-full px-4 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-xs text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-700 dark:text-slate-300">Subjek Proyek</label>
                        <input type="text" name="subject" x-bind:value="'Permintaan Penawaran ' + platformName" class="w-full px-4 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-xs text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-700 dark:text-slate-300">Detail Pesan / Kebutuhan *</label>
                        <textarea name="message" rows="4" required placeholder="Jelaskan gambaran aplikasi atau sistem yang ingin dibangun..." class="w-full px-4 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-xs text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                    </div>

                    <button type="submit" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-500 hover:to-indigo-600 text-white font-bold text-xs shadow-lg shadow-indigo-500/25 transition-all">
                        Kirim Pesan & Request Penawaran
                    </button>
                </form>
            </div>

        </div>

    </div>
</section>
@endsection
