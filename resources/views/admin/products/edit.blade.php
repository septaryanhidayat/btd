@extends('admin.layouts.app')

@section('title', 'Edit Produk: ' . $product->title)

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-[#07153f]">Edit Produk Digital</h1>
            <p class="text-xs text-slate-500">Perbarui informasi {{ $product->title }}</p>
        </div>
        <a href="{{ route('admin.products.index') }}" class="text-xs font-bold text-slate-500 hover:text-[#3E5CE7]">
            &larr; Kembali ke Daftar
        </a>
    </div>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Nama Produk Digital *</label>
                <input type="text" name="title" required value="{{ old('title', $product->title) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#fe6000] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Badge Label</label>
                <input type="text" name="badge" value="{{ old('badge', $product->badge) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#fe6000] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Harga (Rupiah) *</label>
                <input type="number" name="price" required value="{{ old('price', $product->price) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs mono font-bold focus:ring-2 focus:ring-[#fe6000] focus:outline-none" />
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Deskripsi Produk *</label>
                <textarea name="description" required rows="3" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#fe6000] focus:outline-none">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Daftar Fitur Unggulan (1 Baris = 1 Fitur)</label>
                <textarea name="features_raw" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#fe6000] focus:outline-none">{{ old('features_raw', is_array($product->features) ? implode("\n", $product->features) : '') }}</textarea>
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Path Gambar Thumbnail</label>
                <input type="text" name="thumbnail" value="{{ old('thumbnail', $product->thumbnail) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#fe6000] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">URL Live Demo (Opsional)</label>
                <input type="url" name="demo_url" value="{{ old('demo_url', $product->demo_url) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#fe6000] focus:outline-none" />
            </div>

            <div class="flex items-center gap-6 md:col-span-2 pt-2">
                <label class="flex items-center gap-2 cursor-pointer text-xs font-bold text-[#07153f]">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $product->is_featured) ? 'checked' : '' }} class="rounded text-[#fe6000]" />
                    <span>Tampilkan sebagai Produk Rekomendasi (Featured)</span>
                </label>
            </div>

        </div>

        <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">
            <a href="{{ route('admin.products.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs">
                Batal
            </a>
            <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#fe6000] hover:bg-[#e05400] text-white font-bold text-xs uppercase shadow-md transition-all">
                Perbarui Produk &rarr;
            </button>
        </div>

    </form>
</div>
@endsection
