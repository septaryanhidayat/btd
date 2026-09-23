@extends('admin.layouts.app')

@section('title', 'SOP & Panduan Order Klien - CV. Beranda Teknologi Digital')

@section('content')
<div class="space-y-6 pb-12" x-data="orderGuideManager()">

    <!-- Header & Action Button -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <div class="flex items-center gap-2 mb-1.5">
                <span class="px-2.5 py-0.5 rounded-full bg-teal-50 text-[#0d9488] border border-teal-200/80 text-[10px] font-extrabold uppercase tracking-wider">
                    Client Onboarding & Sales SOP
                </span>
                <span class="text-slate-300 text-xs">•</span>
                <span class="text-slate-500 text-xs font-semibold">Dokumen Resmi BTD</span>
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-[#071330] tracking-tight">
                SOP & Panduan Pemesanan Web/App
            </h1>
            <p class="text-xs sm:text-sm text-slate-600 font-medium mt-0.5 max-w-3xl">
                Dokumen resmi berstandar invoice CV. Beranda Teknologi Digital (Kop, Watermark, Legalitas Domain, Rekening Resmi, dan QR Code Validasi) yang siap dibagikan ke calon klien saat ingin memesan website atau aplikasi.
            </p>
        </div>

        <div class="flex items-center gap-2.5 shrink-0 flex-wrap">
            <button @click="copyLink('{{ $publicUrl }}')" 
                    class="px-4 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-700 font-bold text-xs uppercase tracking-wider shadow-xs hover:bg-slate-50 active:scale-95 transition-all flex items-center gap-2">
                <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                <span>Salin Tautan</span>
            </button>

            <a href="{{ $publicUrl }}" target="_blank" 
               class="px-4 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-700 font-bold text-xs uppercase tracking-wider shadow-xs hover:bg-slate-50 active:scale-95 transition-all flex items-center gap-2">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                <span>Buka Publik</span>
            </a>

            <a href="{{ $publicUrl }}" target="_blank" onclick="printDoc(event)"
               style="background-color: #269DB9 !important; color: #ffffff !important;"
               class="px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wider shadow-sm hover:brightness-110 active:scale-95 transition-all flex items-center gap-2">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
                <span style="color: #ffffff !important;">Cetak / PDF</span>
            </a>
        </div>
    </div>

    <!-- Quick Share Toolbar & WhatsApp Helper Card -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
        
        <!-- Kolom 1 & 2: Quick Share & Teks WhatsApp Siap Kirim -->
        <div class="lg:col-span-2 bg-white rounded-2xl border border-slate-200/80 p-5 sm:p-6 shadow-xs space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-teal-50 border border-teal-200 text-teal-600 flex items-center justify-center font-bold text-sm">
                        🔗
                    </div>
                    <div>
                        <h2 class="text-sm font-extrabold text-slate-800">Tautan Dokumen Siap Kirim ke Klien</h2>
                        <p class="text-[11px] text-slate-500">Klien dapat membuka dokumen ini langsung tanpa perlu login akun.</p>
                    </div>
                </div>
                <span class="px-2 py-0.5 rounded bg-emerald-50 text-emerald-700 text-[10px] font-extrabold border border-emerald-200">
                    Aktif & Siap Pakai
                </span>
            </div>

            <!-- Input Bar Tautan -->
            <div class="flex items-center gap-2">
                <div class="relative flex-1">
                    <input type="text" readonly value="{{ $publicUrl }}" id="publicUrlInput"
                           class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3.5 py-2.5 text-xs text-slate-700 font-mono font-bold select-all focus:outline-hidden focus:ring-2 focus:ring-teal-500/20">
                </div>
                <button @click="copyLink('{{ $publicUrl }}')" 
                        class="px-4 py-2.5 rounded-xl bg-teal-600 hover:bg-teal-700 text-white font-bold text-xs shrink-0 transition-all flex items-center gap-1.5 shadow-xs">
                    <span>📋 Salin Link</span>
                </button>
            </div>

            <!-- Helper Box WhatsApp -->
            <div class="pt-2">
                <div class="flex items-center justify-between mb-2">
                    <label class="text-xs font-bold text-slate-700 flex items-center gap-1.5">
                        <span class="text-emerald-500">💬</span> Template Pesan WhatsApp Siap Kirim
                    </label>
                    <button @click="copyWaText()" class="text-[11px] font-bold text-teal-600 hover:text-teal-800 transition-colors">
                        Salin Teks Pesan
                    </button>
                </div>
                <textarea id="waTextarea" rows="4" readonly
                          class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 text-xs text-slate-600 leading-relaxed font-sans focus:outline-hidden resize-none">{{ $waMessage }}</textarea>
                
                <div class="flex items-center justify-between pt-2">
                    <p class="text-[11px] text-slate-400 italic">
                        Tip: Salin teks di atas dan kirimkan langsung saat calon klien berkonsultasi via WhatsApp.
                    </p>
                    <a href="https://wa.me/?text={{ $encodedWaMessage }}" target="_blank" 
                       class="px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-bold hover:bg-emerald-100 transition-all inline-flex items-center gap-1">
                        Buka WhatsApp Web &rarr;
                    </a>
                </div>
            </div>
        </div>

        <!-- Kolom 3: Validasi QR Code Digital Card -->
        <div class="bg-white rounded-2xl border border-slate-200/80 p-5 sm:p-6 shadow-xs flex flex-col justify-between">
            <div>
                <div class="flex items-center gap-2 mb-3">
                    <span class="px-2 py-0.5 rounded bg-blue-50 text-blue-700 text-[10px] font-extrabold border border-blue-200">
                        QR DIGITAL VERIFICATION
                    </span>
                </div>
                <h2 class="text-sm font-extrabold text-slate-800 mb-1">QR Code Validasi Dokumen</h2>
                <p class="text-[11px] text-slate-500 mb-4">
                    QR code ini tercetak otomatis di lembar dokumen untuk membuktikan keaslian SOP langsung di server BTD.
                </p>

                <div class="flex items-center justify-center p-3 bg-slate-50 rounded-xl border border-slate-200/60 mb-4">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&margin=2&color=000000&data={{ urlencode($publicUrl) }}" 
                         alt="QR Code Panduan Pemesanan" 
                         class="w-32 h-32 object-contain rounded-lg shadow-xs bg-white p-1">
                </div>
            </div>

            <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                <span class="text-slate-500 font-medium">Resolusi: 180x180 px</span>
                <a href="{{ $publicUrl }}" target="_blank" class="font-bold text-teal-600 hover:text-teal-800">
                    Uji Scan &rarr;
                </a>
            </div>
        </div>

    </div>

    <!-- Live Preview Container of the Official Document -->
    <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-xs">
        <div class="px-6 py-4 bg-slate-50/80 border-b border-slate-200/80 flex items-center justify-between flex-wrap gap-2">
            <div class="flex items-center gap-2.5">
                <span class="w-3 h-3 rounded-full bg-emerald-500 inline-block"></span>
                <span class="text-xs font-bold text-slate-700 uppercase tracking-wider">Pratinjau Lembar Dokumen Resmi (Live Preview)</span>
            </div>
            <div class="flex items-center gap-2 text-xs text-slate-500">
                <span>Format: Kertas A4 Standar</span>
                <span>•</span>
                <a href="{{ $publicUrl }}" target="_blank" class="text-teal-600 hover:text-teal-800 font-bold flex items-center gap-1">
                    Buka Fullscreen &rarr;
                </a>
            </div>
        </div>

        <!-- Document Iframe Preview -->
        <div class="p-2 sm:p-6 bg-slate-100/70 flex justify-center">
            <iframe src="{{ $publicUrl }}" 
                    class="w-full max-w-[880px] h-[1050px] border border-slate-300 rounded-xl shadow-lg bg-white"
                    title="Pratinjau Dokumen SOP Panduan Pemesanan"></iframe>
        </div>
    </div>

</div>

<!-- Alpine.js Component Script -->
<script>
    function orderGuideManager() {
        return {
            copyLink(url) {
                if (navigator.clipboard && window.isSecureContext) {
                    navigator.clipboard.writeText(url).then(() => {
                        alert('✓ Tautan dokumen berhasil disalin ke clipboard:\n' + url);
                    }).catch(() => {
                        this.fallbackCopy(url);
                    });
                } else {
                    this.fallbackCopy(url);
                }
            },
            copyWaText() {
                const el = document.getElementById('waTextarea');
                if (el) {
                    el.select();
                    document.execCommand('copy');
                    alert('✓ Template teks pesan WhatsApp berhasil disalin! Anda tinggal paste di WhatsApp klien.');
                }
            },
            fallbackCopy(text) {
                const input = document.getElementById('publicUrlInput');
                if (input) {
                    input.select();
                    document.execCommand('copy');
                    alert('✓ Tautan berhasil disalin:\n' + text);
                } else {
                    prompt('Salin tautan dokumen ini:', text);
                }
            }
        };
    }

    function printDoc(e) {
        // Biarkan link membuka tab baru yang langsung memicu print jika diinginkan
    }
</script>
@endsection
