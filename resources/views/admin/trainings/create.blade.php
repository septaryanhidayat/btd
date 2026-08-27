@extends('admin.layouts.app')

@section('title', 'Tambah Modul Pelatihan Baru')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-[#07153f]">Tambah Modul Pelatihan IT</h1>
            <p class="text-xs text-slate-500">Masukkan rincian silabus untuk program pelatihan / workshop.</p>
        </div>
        <a href="{{ route('admin.trainings.index') }}" class="text-xs font-bold text-slate-500 hover:text-[#3E5CE7]">
            &larr; Kembali ke Daftar
        </a>
    </div>

    <form action="{{ route('admin.trainings.store') }}" method="POST" class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Judul Pelatihan / Workshop *</label>
                <input type="text" name="title" required value="{{ old('title') }}" placeholder="Contoh: Workshop Vibe Coding & Arsitektur AI RAG Enterprise" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Tingkat Kemahiran (Level) *</label>
                <input type="text" name="level" required value="{{ old('level', 'Intermediate to Advanced') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold text-[#07153f]">Estimasi Durasi Pelatihan</label>
                <input type="text" name="duration" value="{{ old('duration', '2 Hari (16 Jam Total)') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Target Peserta</label>
                <input type="text" name="target_audience" value="{{ old('target_audience', 'Software Engineers, IT Executives, Mahasiswa IT') }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Ringkasan Materi *</label>
                <textarea name="summary" required rows="3" placeholder="Jelaskan ringkasan materi dan tujuan akhir pelatihan..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('summary') }}</textarea>
            </div>

            <div class="space-y-1.5 md:col-span-2">
                <label class="block text-xs font-bold text-[#07153f]">Silabus Pokok (1 Baris = 1 Topik Bahasan)</label>
                <textarea name="syllabus_raw" rows="4" placeholder="Konsep Arsitektur RAG & Vector Database&#10;Implementasi Prompt Engineering & Agentic Workflow&#10;Deployment Model AI Privat ke Server On-Premise" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ old('syllabus_raw') }}</textarea>
            </div>

        </div>

        <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">
            <a href="{{ route('admin.trainings.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs">
                Batal
            </a>
            <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-md transition-all">
                Simpan Modul &rarr;
            </button>
        </div>

    </form>
</div>
@endsection
