@extends('admin.layouts.app')

@section('title', 'Tambah Dokumentasi Event Baru')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-[#07153f]">Tambah Dokumentasi Event</h1>
            <p class="text-xs text-slate-500">Masukkan foto dokumentasi kegiatan seminar / workshop IT.</p>
        </div>
        <a href="{{ route('admin.galleries.index') }}" class="text-xs font-bold text-slate-500 hover:text-[#3E5CE7]">
            &larr; Kembali ke Daftar
        </a>
    </div>

    <form action="{{ route('admin.galleries.store') }}" method="POST" class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Judul Kegiatan / Sesi *</label>
                <input type="text" name="title" required value="{{ old('title') }}" placeholder="Contoh: Workshop Komdigi RI - Vibe Coding AI Architecture" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Kategori Acara *</label>
                <select name="category" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">
                    <option value="Workshop IT">Workshop IT</option>
                    <option value="Keynote Speaker">Keynote Speaker</option>
                    <option value="Corporate Training">Corporate Training</option>
                    <option value="Seminar Kampus">Seminar Kampus</option>
                </select>
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Lokasi Acara</label>
                <input type="text" name="location" value="{{ old('location', 'Palembang / Komdigi RI') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Path File Gambar *</label>
                <input type="text" name="image_path" required value="{{ old('image_path', '/images/Insight-Talks-Komdigi.jpeg') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

        </div>

        <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">
            <a href="{{ route('admin.galleries.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs">
                Batal
            </a>
            <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-md transition-all">
                Simpan Dokumentasi &rarr;
            </button>
        </div>

    </form>
</div>
@endsection
