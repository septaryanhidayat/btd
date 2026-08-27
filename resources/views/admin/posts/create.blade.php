@extends('admin.layouts.app')

@section('title', 'Tulis Artikel Baru')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-[#07153f]">Tulis Artikel Baru</h1>
            <p class="text-xs text-slate-500">Publikasikan wawasan teknologi, tutorial, dan update terbaru.</p>
        </div>
        <a href="{{ route('admin.posts.index') }}" class="text-xs font-bold text-slate-500 hover:text-[#3E5CE7]">
            &larr; Kembali ke Daftar
        </a>
    </div>

    <form action="{{ route('admin.posts.store') }}" method="POST" class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Judul Artikel *</label>
                <input type="text" name="title" required value="{{ old('title') }}" placeholder="Contoh: Mengembangkan Sistem AI RAG Privat Tanpa Kebocoran Data" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Kategori</label>
                <select name="category_id" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Status Publikasi *</label>
                <select name="status" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">
                    <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published (Langsung Tayang)</option>
                    <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft (Simpan Sementara)</option>
                </select>
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Kutipan Singkat (Excerpt)</label>
                <textarea name="excerpt" rows="2" placeholder="Ringkasan isi artikel..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('excerpt') }}</textarea>
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Isi Konten Lengkap Artikel *</label>
                <textarea name="body" required rows="8" placeholder="Tulis konten artikel di sini..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('body') }}</textarea>
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Path Gambar Thumbnail</label>
                <input type="text" name="thumbnail" value="{{ old('thumbnail', '/btd/sekolah.png') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

        </div>

        <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">
            <a href="{{ route('admin.posts.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs">
                Batal
            </a>
            <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-md transition-all">
                Publikasikan Artikel &rarr;
            </button>
        </div>

    </form>
</div>
@endsection
