@extends('admin.layouts.app')

@section('title', 'Edit Invoice #' . $invoice->invoice_number)

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-[#071330] flex items-center gap-2.5">
                <span>🧾</span>
                <span>Edit Faktur #{{ $invoice->invoice_number }}</span>
            </h1>
            <p class="text-xs text-slate-500 font-medium mt-1">
                Perbarui rincian penagihan atau riwayat transaksi invoice.
            </p>
        </div>
        <div class="flex items-center gap-2">
            <a href="{{ route('admin.invoices.print', $invoice->id) }}" target="_blank" class="px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-sm transition-all flex items-center gap-1.5">
                <span>🖨️ Cetak Faktur</span>
            </a>
            <a href="{{ route('admin.invoices.index') }}" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs transition-all">
                &larr; Kembali
            </a>
        </div>
    </div>

    @php
        $itemsText = '';
        if (is_array($invoice->items)) {
            $lines = [];
            foreach ($invoice->items as $it) {
                $lines[] = ($it['description'] ?? '') . ' | ' . ($it['amount'] ?? 0);
            }
            $itemsText = implode("\n", $lines);
        }

        $transactionsText = '';
        if (is_array($invoice->transactions)) {
            $tLines = [];
            foreach ($invoice->transactions as $tr) {
                $tLines[] = ($tr['date'] ?? '') . ' | ' . ($tr['payment_method'] ?? '') . ' | ' . ($tr['transaction_id'] ?? '') . ' | ' . ($tr['amount'] ?? 0);
            }
            $transactionsText = implode("\n", $tLines);
        }
    @endphp

    <form action="{{ route('admin.invoices.update', $invoice->id) }}" method="POST" class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-8">
        @csrf
        @method('PUT')

        <!-- Section 1: Data Identitas Invoice -->
        <div class="space-y-4">
            <h2 class="text-sm font-extrabold text-[#071330] uppercase tracking-wider pb-2 border-b border-slate-100">
                1. Informasi Dasar Invoice
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#071330]">Nomor Invoice *</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400 font-mono text-xs">#</span>
                        <input type="text" name="invoice_number" required value="{{ old('invoice_number', $invoice->invoice_number) }}" class="w-full pl-8 pr-4 py-2.5 rounded-xl border border-slate-200 text-xs font-mono font-bold focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#071330]">Tanggal Terbit (Invoice Date) *</label>
                    <input type="date" name="invoice_date" required value="{{ old('invoice_date', optional($invoice->invoice_date)->format('Y-m-d')) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#071330]">Jatuh Tempo (Due Date)</label>
                    <input type="date" name="due_date" value="{{ old('due_date', optional($invoice->due_date)->format('Y-m-d')) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#071330]">Status Pembayaran *</label>
                    <select name="status" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">
                        <option value="paid" {{ old('status', $invoice->status) === 'paid' ? 'selected' : '' }}>🟢 Lunas (PAID)</option>
                        <option value="unpaid" {{ old('status', $invoice->status) === 'unpaid' ? 'selected' : '' }}>🔴 Belum Dibayar (UNPAID)</option>
                        <option value="partial" {{ old('status', $invoice->status) === 'partial' ? 'selected' : '' }}>🟡 Sebagian / DP (PARTIAL)</option>
                        <option value="cancelled" {{ old('status', $invoice->status) === 'cancelled' ? 'selected' : '' }}>⚪ Dibatalkan (CANCELLED)</option>
                    </select>
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#071330]">Tipe Klien *</label>
                    <select name="client_type" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">
                        <option value="Personal" {{ old('client_type', $invoice->client_type) === 'Personal' ? 'selected' : '' }}>Personal / Perorangan</option>
                        <option value="Perusahaan / PT / CV" {{ old('client_type', $invoice->client_type) === 'Perusahaan / PT / CV' ? 'selected' : '' }}>Perusahaan / Korporasi</option>
                        <option value="Instansi Pemerintah / BUMN" {{ old('client_type', $invoice->client_type) === 'Instansi Pemerintah / BUMN' ? 'selected' : '' }}>Instansi Pemerintah / BUMN</option>
                        <option value="Institusi Pendidikan" {{ old('client_type', $invoice->client_type) === 'Institusi Pendidikan' ? 'selected' : '' }}>Institusi Pendidikan / Sekolah / Kampus</option>
                    </select>
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#071330]">Nama Klien / Instansi *</label>
                    <input type="text" name="client_name" required value="{{ old('client_name', $invoice->client_name) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5 md:col-span-2">
                    <label class="block text-xs font-bold text-[#071330]">ATTN / Ditujukan Kepada</label>
                    <input type="text" name="client_attn" value="{{ old('client_attn', $invoice->client_attn) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5 md:col-span-3">
                    <label class="block text-xs font-bold text-[#071330]">Alamat Klien</label>
                    <input type="text" name="client_address" value="{{ old('client_address', $invoice->client_address) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>
            </div>
        </div>

        <!-- Section 2: Rincian Item Tagihan -->
        <div class="space-y-4 pt-4 border-t border-slate-100">
            <h2 class="text-sm font-extrabold text-[#071330] uppercase tracking-wider pb-2 border-b border-slate-100">
                2. Rincian Deskripsi Item / Jasa & Nominal
            </h2>

            <div class="space-y-2">
                <label class="block text-xs font-bold text-[#071330]">Daftar Item (Format: <code>Deskripsi Item | Nominal Angka</code>) *</label>
                <textarea name="items_raw" rows="3" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-mono focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('items_raw', $itemsText) }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#071330]">Jumlah Terbayar (Paid Amount) Rp *</label>
                    <input type="number" name="paid_amount" required value="{{ old('paid_amount', (int)$invoice->paid_amount) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-mono font-bold focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>
            </div>
        </div>

        <!-- Section 3: Riwayat Pembayaran / Transaksi -->
        <div class="space-y-4 pt-4 border-t border-slate-100">
            <h2 class="text-sm font-extrabold text-[#071330] uppercase tracking-wider pb-2 border-b border-slate-100">
                3. Riwayat Transaksi Pembayaran (Tabel Bawah Invoice)
            </h2>

            <div class="space-y-2">
                <label class="block text-xs font-bold text-[#071330]">Rincian Transaksi (Format: <code>Tanggal | Metode Bayar | ID Transaksi / Referensi | Nominal</code>)</label>
                <textarea name="transactions_raw" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-mono focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('transactions_raw', $transactionsText) }}</textarea>
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#071330]">Catatan Tambahan / Ucapan Terima Kasih</label>
                <textarea name="notes" rows="2" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('notes', $invoice->notes) }}</textarea>
            </div>
        </div>

        <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">
            <a href="{{ route('admin.invoices.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs">
                Batal
            </a>
            <button type="submit" class="px-7 py-3 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-extrabold text-xs uppercase tracking-wider shadow-lg hover:shadow-blue-600/30 transition-all">
                Perbarui Invoice &rarr;
            </button>
        </div>

    </form>
</div>
@endsection
