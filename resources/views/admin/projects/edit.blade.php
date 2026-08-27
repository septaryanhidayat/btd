@extends('admin.layouts.app')

@section('title', 'Edit Proyek: ' . $project->title)

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-[#07153f]">Edit Proyek</h1>
            <p class="text-xs text-slate-500">Perbarui informasi portofolio {{ $project->title }}</p>
        </div>
        <a href="{{ route('admin.projects.index') }}" class="text-xs font-bold text-slate-500 hover:text-[#3E5CE7]">
            &larr; Kembali ke Daftar
        </a>
    </div>

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Judul Proyek *</label>
                <input type="text" name="title" required value="{{ old('title', $project->title) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Kategori Proyek</label>
                <select name="category_id" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ old('category_id', $project->category_id) == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Nama Klien / Instansi</label>
                <input type="text" name="client_name" value="{{ old('client_name', $project->client_name) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Ringkasan Singkat Proyek</label>
                <textarea name="summary" rows="2" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('summary', $project->summary) }}</textarea>
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Tantangan (Challenge)</label>
                <textarea name="challenge" rows="2" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('challenge', $project->challenge) }}</textarea>
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Solusi (Solution)</label>
                <textarea name="solution" rows="2" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('solution', $project->solution) }}</textarea>
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Tech Stack (Pisahkan dengan Koma)</label>
                <input type="text" name="tech_stack_raw" value="{{ old('tech_stack_raw', is_array($project->tech_stack) ? implode(', ', $project->tech_stack) : '') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Path Gambar Thumbnail</label>
                <input type="text" name="thumbnail" value="{{ old('thumbnail', $project->thumbnail) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">URL / Link Proyek (Opsional)</label>
                <input type="url" name="project_url" value="{{ old('project_url', $project->project_url) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="flex items-center gap-6 md:col-span-2 pt-2">
                <label class="flex items-center gap-2 cursor-pointer text-xs font-bold text-[#07153f]">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $project->is_featured) ? 'checked' : '' }} class="rounded text-[#3E5CE7]" />
                    <span>Tampilkan sebagai Proyek Unggulan (Featured)</span>
                </label>
            </div>

        </div>

        <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">
            <a href="{{ route('admin.projects.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs">
                Batal
            </a>
            <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-md transition-all">
                Perbarui Proyek &rarr;
            </button>
        </div>

    </form>
</div>
@endsection
