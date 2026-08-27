@extends('admin.layouts.app')

@section('title', 'Kelola Kategori')

@section('content')
<div class="space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-[#07153f]">📂 Kategori Konten</h1>
            <p class="text-xs text-slate-500">Kelola kategori pengelompokan untuk portofolio, produk digital, dan artikel blog.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left: Form Tambah Kategori -->
        <div class="lg:col-span-5 bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-4">
            <h2 class="text-base font-extrabold text-[#07153f]">+ Tambah Kategori Baru</h2>
            
            <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Nama Kategori *</label>
                    <input type="text" name="name" required placeholder="Contoh: Mobile App Flutter" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Tipe Kategori *</label>
                    <select name="type" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">
                        <option value="project">Portofolio Proyek</option>
                        <option value="product">Produk Digital</option>
                        <option value="post">Artikel Blog</option>
                    </select>
                </div>

                <button type="submit" class="w-full py-3 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-md transition-all">
                    Simpan Kategori &rarr;
                </button>
            </form>
        </div>

        <!-- Right: Table Daftar Kategori -->
        <div class="lg:col-span-7 bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-xs">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-100 text-slate-400 font-extrabold uppercase tracking-wider">
                            <th class="py-4 px-6">Nama Kategori</th>
                            <th class="py-4 px-6">Tipe</th>
                            <th class="py-4 px-6 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 font-medium">
                        @forelse($categories as $cat)
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="font-bold text-slate-900">{{ $cat->name }}</div>
                                    <div class="text-[10px] text-slate-400 font-mono">{{ $cat->slug }}</div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="px-2.5 py-1 rounded-full bg-blue-50 text-[#3E5CE7] font-bold text-[10px] uppercase">
                                        {{ $cat->type }}
                                    </span>
                                </td>
                                <td class="py-4 px-6 text-right">
                                    <form action="{{ route('admin.categories.destroy', $cat->id) }}" method="POST" class="inline" onsubmit="return confirm('Hapus kategori ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1 rounded-lg bg-rose-50 hover:bg-rose-100 text-rose-600 font-bold transition-all">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-8 text-center text-slate-400">
                                    Belum ada kategori.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="p-4 border-t border-slate-100">
                {{ $categories->links() }}
            </div>
        </div>

    </div>

</div>
@endsection
