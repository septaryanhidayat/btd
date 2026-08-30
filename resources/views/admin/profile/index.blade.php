@extends('admin.layouts.app')

@section('title', 'Pengaturan Akun & Profil Administrator')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-[#071330] flex items-center gap-2.5">
                <span>👤</span>
                <span>Pengaturan Akun Administrator</span>
            </h1>
            <p class="text-xs text-slate-500 font-medium mt-1">
                Kelola nama pengguna, alamat email login, dan kata sandi akses sistem website.
            </p>
        </div>
    </div>

    <!-- Profile Form Card -->
    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-8">
        
        <div class="flex items-center gap-4 border-b border-slate-100 pb-6">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#071330] to-[#3E5CE7] text-white flex items-center justify-center font-black text-2xl shadow-md">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
            <div>
                <h2 class="text-lg font-extrabold text-[#071330]">{{ $user->name }}</h2>
                <p class="text-xs text-slate-500 font-mono">{{ $user->email }}</p>
                <span class="inline-block mt-1 px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 text-[10px] font-extrabold border border-emerald-200">
                    Administrator Aktif
                </span>
            </div>
        </div>

        <form action="{{ route('admin.profile.update') }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <!-- Nama -->
                <div class="space-y-1.5 md:col-span-2">
                    <label class="block text-xs font-bold text-[#071330]">Nama Lengkap *</label>
                    <input type="text" name="name" required value="{{ old('name', $user->name) }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <!-- Email -->
                <div class="space-y-1.5 md:col-span-2">
                    <label class="block text-xs font-bold text-[#071330]">Alamat Email Login *</label>
                    <input type="email" name="email" required value="{{ old('email', $user->email) }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                    <span class="text-[11px] text-slate-400">Email ini digunakan untuk masuk ke portal admin CMS.</span>
                </div>

            </div>

            <!-- Ganti Password Section -->
            <div class="pt-6 border-t border-slate-100 space-y-4">
                <div>
                    <h3 class="text-sm font-extrabold text-[#071330]">Ganti Kata Sandi (Opsional)</h3>
                    <p class="text-xs text-slate-400">Biarkan kosong jika tidak ingin mengubah kata sandi.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-1.5 md:col-span-2">
                        <label class="block text-xs font-bold text-[#071330]">Kata Sandi Saat Ini</label>
                        <input type="password" name="current_password" placeholder="Masukkan sandi lama jika ingin mengganti" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                        @error('current_password')
                            <span class="text-[11px] text-rose-500 font-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="space-y-1.5">
                        <label class="block text-xs font-bold text-[#071330]">Kata Sandi Baru</label>
                        <input type="password" name="new_password" placeholder="Minimal 8 karakter" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                        @error('new_password')
                            <span class="text-[11px] text-rose-500 font-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="space-y-1.5">
                        <label class="block text-xs font-bold text-[#071330]">Konfirmasi Kata Sandi Baru</label>
                        <input type="password" name="new_password_confirmation" placeholder="Ulangi kata sandi baru" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                    </div>
                </div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex justify-end">
                <button type="submit" class="px-8 py-3.5 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-extrabold text-xs uppercase tracking-wider shadow-lg hover:shadow-blue-600/30 transition-all">
                    Simpan Perubahan Akun &rarr;
                </button>
            </div>

        </form>

    </div>

</div>
@endsection
