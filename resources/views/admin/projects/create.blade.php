@extends('admin.layouts.app')

@section('title', 'Tambah Proyek Baru')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-[#07153f]">Tambah Proyek Baru</h1>
            <p class="text-xs text-slate-500">Masukkan rincian proyek untuk ditampilkan di portofolio website.</p>
        </div>
        <a href="{{ route('admin.projects.index') }}" class="text-xs font-bold text-slate-500 hover:text-[#3E5CE7]">
            &larr; Kembali ke Daftar
        </a>
    </div>

    <form action="{{ route('admin.projects.store') }}" method="POST" class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Judul Proyek *</label>
                <input type="text" name="title" required value="{{ old('title') }}" placeholder="Contoh: Sistem Informasi Manajemen Sekolah SIT" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Kategori Proyek</label>
                <select name="category_id" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Nama Klien / Instansi</label>
                <input type="text" name="client_name" value="{{ old('client_name') }}" placeholder="Contoh: SIT Robbani Ogan Ilir" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Ringkasan Singkat Proyek</label>
                <textarea name="summary" rows="2" placeholder="Jelaskan ringkasan fitur dan manfaat proyek..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('summary') }}</textarea>
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Tantangan (Challenge)</label>
                <textarea name="challenge" rows="2" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('challenge') }}</textarea>
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Solusi (Solution)</label>
                <textarea name="solution" rows="2" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('solution') }}</textarea>
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Tech Stack (Pisahkan dengan Koma)</label>
                <input type="text" name="tech_stack_raw" value="{{ old('tech_stack_raw', 'Laravel 13, Flutter, PHP 8.4, Tailwind CSS') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Path Gambar Thumbnail</label>
                <input type="text" name="thumbnail" value="{{ old('thumbnail', '/btd/sekolah.png') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">URL / Link Proyek (Opsional)</label>
                <input type="url" name="project_url" value="{{ old('project_url') }}" placeholder="https://..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Tipe Tampilan Aplikasi (Aspect Ratio Slider)</label>
                <select name="app_type" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">
                    <option value="web" {{ old('app_type') == 'web' ? 'selected' : '' }}>🖥️ Web Desktop / SaaS (Ukuran Landscape 16:9)</option>
                    <option value="mobile" {{ old('app_type') == 'mobile' ? 'selected' : '' }}>📱 Mobile App (Ukuran Smartphone Portrait 9:16)</option>
                    <option value="both" {{ old('app_type') == 'both' ? 'selected' : '' }}>💻📱 Hybrid / Keduanya (Responsive)</option>
                </select>
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Badge Status / Keunggulan</label>
                <input type="text" name="status_badge" placeholder="Contoh: 🟢 Siap Diimplementasi" value="{{ old('status_badge') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Poin Fitur Utama (Satu baris satu poin fitur)</label>
                <textarea name="features_raw" rows="3" placeholder="Contoh:&#10;Otomasi cetak 30+ surat desa ber-QR code&#10;Database kependudukan & sensus RT/RW&#10;Notifikasi otomatis via WhatsApp" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('features_raw') }}</textarea>
                <span class="text-[11px] text-slate-400">Poin-poin ini akan ditampilkan dengan ikon centang hijau (✓) pada kartu depan produk.</span>
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Galeri Screenshot Tambahan (Slider Foto saat Thumbnail Diklik)</label>
                <textarea name="gallery_raw" rows="4" placeholder="Format per baris: Path Gambar | Judul Layar | Tipe (web/mobile) | Keterangan&#10;Contoh:&#10;/images/products/smart-village-mockup.jpg | Dashboard Pelayanan | web | Antarmuka desktop staf desa&#10;/images/surat.png | Format Surat Resmi | web | Otomasi cetak dokumen ber-QR code" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs mono focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('gallery_raw') }}</textarea>
                <span class="text-[11px] text-slate-400">Masukkan path foto screenshot antarmuka lain (satu baris satu foto). Format: <code>Path | Judul | web/mobile | Keterangan</code>.</span>
            </div>

            <div class="flex items-center gap-6 md:col-span-2 pt-2">
                <label class="flex items-center gap-2 cursor-pointer text-xs font-bold text-[#07153f]">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', true) ? 'checked' : '' }} class="rounded text-[#3E5CE7]" />
                    <span>Tampilkan sebagai Proyek Unggulan (Featured)</span>
                </label>
            </div>

        </div>

        <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">
            <a href="{{ route('admin.projects.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs">
                Batal
            </a>
            <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-md transition-all">
                Simpan Proyek &rarr;
            </button>
        </div>

    </form>
</div>
@endsection
