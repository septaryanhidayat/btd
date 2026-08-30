@extends('admin.layouts.app')

@section('title', 'Tema & Pengaturan Website')

@section('content')
<div class="space-y-8" x-data="{
    primaryColor: '{{ $settings['theme_primary_color']->value ?? '#3E5CE7' }}',
    accentColor: '{{ $settings['theme_accent_color']->value ?? '#fe6000' }}',
    bgSoft: '{{ $settings['theme_bg_soft']->value ?? '#f4f7fe' }}'
}">
    
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-extrabold text-[#07153f]">🎨 Tema & Pengaturan Website</h1>
            <p class="text-xs text-slate-500">Sesuaikan skema warna tema, informasi kontak WhatsApp, bio trainer, dan teks hero website.</p>
        </div>
        <button type="submit" form="settingForm" class="px-6 py-3 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-bold text-xs uppercase shadow-md transition-all">
            💾 Simpan Semua Perubahan
        </button>
    </div>

    <form id="settingForm" action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf

        <!-- SECTION 1: THEME COLOR CUSTOMIZER (Live Preview Color Pickers) -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
            <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                <div>
                    <h2 class="text-base font-extrabold text-[#07153f]">🌈 Kustomisasi Skema Warna Tema Website</h2>
                    <p class="text-xs text-slate-400">Pilih palet warna identitas website yang akan diterapkan secara global</p>
                </div>
                <span class="px-3 py-1 rounded-full bg-blue-50 text-[#3E5CE7] font-bold text-[10px]">Real-time Color Picker</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Primary Color -->
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                    <label class="block text-xs font-bold text-[#07153f] uppercase tracking-wider">
                        Warna Utama (Primary Color)
                    </label>
                    <div class="flex items-center gap-3">
                        <input type="color" 
                               name="theme_primary_color" 
                               x-model="primaryColor" 
                               class="w-12 h-12 rounded-xl cursor-pointer border-0 p-0 bg-transparent" />
                        <div class="flex-1">
                            <input type="text" 
                                   name="theme_primary_color_text" 
                                   x-model="primaryColor" 
                                   class="w-full px-3 py-2 rounded-lg border border-slate-200 text-xs font-mono font-bold focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-400">Digunakan untuk tombol utama, watermark, dan aksen navigasi.</p>
                </div>

                <!-- Accent Color -->
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                    <label class="block text-xs font-bold text-[#07153f] uppercase tracking-wider">
                        Warna Aksen (Accent Color)
                    </label>
                    <div class="flex items-center gap-3">
                        <input type="color" 
                               name="theme_accent_color" 
                               x-model="accentColor" 
                               class="w-12 h-12 rounded-xl cursor-pointer border-0 p-0 bg-transparent" />
                        <div class="flex-1">
                            <input type="text" 
                                   name="theme_accent_color_text" 
                                   x-model="accentColor" 
                                   class="w-full px-3 py-2 rounded-lg border border-slate-200 text-xs font-mono font-bold focus:ring-2 focus:ring-[#fe6000] focus:outline-none" />
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-400">Digunakan untuk badge oranye, tombol penawaran, dan highlight harga.</p>
                </div>

                <!-- Soft Background Tint -->
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                    <label class="block text-xs font-bold text-[#07153f] uppercase tracking-wider">
                        Warna Background Lembut (Soft BG)
                    </label>
                    <div class="flex items-center gap-3">
                        <input type="color" 
                               name="theme_bg_soft" 
                               x-model="bgSoft" 
                               class="w-12 h-12 rounded-xl cursor-pointer border-0 p-0 bg-transparent" />
                        <div class="flex-1">
                            <input type="text" 
                                   name="theme_bg_soft_text" 
                                   x-model="bgSoft" 
                                   class="w-full px-3 py-2 rounded-lg border border-slate-200 text-xs font-mono font-bold focus:ring-2 focus:ring-slate-400 focus:outline-none" />
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-400">Digunakan untuk latar belakang section kartu dan perkiraan harga.</p>
                </div>

            </div>

            <!-- Live Preview Palette Box -->
            <div class="p-6 rounded-2xl border border-slate-200 flex flex-wrap items-center justify-between gap-4"
                 :style="'background: ' + bgSoft">
                <div class="space-y-1">
                    <span class="text-xs font-extrabold uppercase tracking-wider text-slate-700">Preview Tampilan Tombol:</span>
                    <p class="text-xs text-slate-500">Kombinasi warna akan langsung terlihat seperti tombol di bawah ini:</p>
                </div>
                <div class="flex items-center gap-3">
                    <button type="button" :style="'background-color: ' + primaryColor" class="px-5 py-2.5 rounded-md text-white font-bold text-xs shadow-md">
                        Tombol Utama &rarr;
                    </button>
                    <button type="button" :style="'background-color: ' + accentColor" class="px-5 py-2.5 rounded-md text-white font-bold text-xs shadow-md">
                        Tombol Aksen ⭐
                    </button>
                </div>
            </div>
        </div>

        <!-- SECTION 2: SITE GENERAL & HERO SECTION -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
            <div class="border-b border-slate-100 pb-3">
                <h2 class="text-base font-extrabold text-[#07153f]">🌐 Identitas & Teks Header Beranda (Hero)</h2>
                <p class="text-xs text-slate-400">Informasi nama instansi dan teks headline banner utama</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Nama Perusahaan</label>
                    <input type="text" name="site_name" value="{{ $settings['site_name']->value ?? 'CV. Beranda Teknologi Digital' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Tagline Utama Perusahaan</label>
                    <input type="text" name="site_tagline" value="{{ $settings['site_tagline']->value ?? 'Software House, Mobile App Flutter & AI Solution' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5 md:col-span-2">
                    <label class="block text-xs font-bold text-[#07153f]">Headline Teks Hero</label>
                    <input type="text" name="hero_tagline" value="{{ $settings['hero_tagline']->value ?? 'Akselerasi Bisnis Anda Dengan Software & AI Solution Modern' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5 md:col-span-2">
                    <label class="block text-xs font-bold text-[#07153f]">Deskripsi Panjang Hero</label>
                    <textarea name="hero_description" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ $settings['hero_description']->value ?? 'Mitra transformasi digital terdepan di Indonesia. Kami menghadirkan jasa pengembangan aplikasi web enterprise, aplikasi mobile Android/iOS, solusi AI privat, serta penyelenggaraan pelatihan & workshop IT profesional.' }}</textarea>
                </div>
            </div>
        </div>

        <!-- SECTION 3: KONTAK & WHATSAPP -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
            <div class="border-b border-slate-100 pb-3">
                <h2 class="text-base font-extrabold text-[#07153f]">📞 Kontak & WhatsApp Support</h2>
                <p class="text-xs text-slate-400">Nomor WhatsApp yang digunakan untuk tombol konsultasi dan pemesanan</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Nomor WhatsApp Utama (Format: 628xxx)</label>
                    <input type="text" name="contact_phone" value="{{ $settings['contact_phone']->value ?? '6289695249089' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs mono focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Nomor WhatsApp Sekunder</label>
                    <input type="text" name="contact_phone_sec" value="{{ $settings['contact_phone_sec']->value ?? '628117448447' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs mono focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Email Resmi Instansi</label>
                    <input type="email" name="contact_email" value="{{ $settings['contact_email']->value ?? 'info@berandadigital.net' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5 md:col-span-3">
                    <label class="block text-xs font-bold text-[#07153f]">Alamat Kantor</label>
                    <textarea name="contact_address" rows="2" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ $settings['contact_address']->value ?? 'CV. Beranda Teknologi Digital Hub - Ogan Ilir & Palembang, Sumatra Selatan, Indonesia' }}</textarea>
                </div>
            </div>
        </div>

        <!-- SECTION 4: TRAINER & WORKSHOP PROFILE -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
            <div class="border-b border-slate-100 pb-3">
                <h2 class="text-base font-extrabold text-[#07153f]">👨‍🏫 Profil Trainer / Narasumber Utama</h2>
                <p class="text-xs text-slate-400">Data narasumber yang tampil pada halaman Tentang Kami & Trainer</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Nama Lengkap Trainer & Gelar</label>
                    <input type="text" name="trainer_name" value="{{ $settings['trainer_name']->value ?? 'Septa Ryan Hidayat, S.Kom' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Jabatan / Sertifikasi</label>
                    <input type="text" name="trainer_title" value="{{ $settings['trainer_title']->value ?? 'Direktur Utama CV. Beranda Teknologi Digital, Software Architect & AI Speaker' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5 md:col-span-2">
                    <label class="block text-xs font-bold text-[#07153f]">Bio Lengkap Trainer</label>
                    <textarea name="trainer_bio" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ $settings['trainer_bio']->value ?? 'Direktur Utama & Lead Software Architect di CV. Beranda Teknologi Digital. Dewan Pakar IGI Ogan Ilir, Narasumber Komdigi & Media Indonesia, serta Trainer Nasional di bidang Vibe Coding, AI RAG Document, dan Pengembangan Aplikasi Web/Mobile.' }}</textarea>
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Statistik Tahun Pengalaman</label>
                    <input type="text" name="trainer_stats_years" value="{{ $settings['trainer_stats_years']->value ?? '8+' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Statistik Event & Workshop</label>
                    <input type="text" name="trainer_stats_events" value="{{ $settings['trainer_stats_events']->value ?? '85+' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Statistik Total Alumni</label>
                    <input type="text" name="trainer_stats_alumni" value="{{ $settings['trainer_stats_alumni']->value ?? '5,000+' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5 md:col-span-2">
                    <label class="block text-xs font-bold text-[#07153f]">Foto Profil Trainer / Narasumber</label>
                    <div class="flex flex-col sm:flex-row sm:items-center gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <img id="trainer_avatar_preview" src="{{ optional($settings['trainer_avatar'] ?? null)->value ?? '/images/Insight-Talks-Komdigi.jpeg' }}" alt="Preview" class="w-20 h-20 rounded-2xl object-cover border-2 border-white shadow-sm shrink-0" />
                        <div class="space-y-2 flex-1">
                            <input type="file" name="trainer_avatar_file" accept="image/*" onchange="previewImage(this, 'trainer_avatar_preview')" class="block w-full text-xs text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-extrabold file:bg-[#3E5CE7] file:text-white hover:file:bg-blue-700 cursor-pointer" />
                            <input type="text" name="trainer_avatar" value="{{ optional($settings['trainer_avatar'] ?? null)->value ?? '/images/Insight-Talks-Komdigi.jpeg' }}" placeholder="Atau ketik path / URL gambar langsung" class="w-full px-3 py-2 rounded-lg border border-slate-200 text-[11px] mono text-slate-600 focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 5: LEGALITAS PERUSAHAAN & LKPP RI -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
            <div class="border-b border-slate-100 pb-3">
                <h2 class="text-base font-extrabold text-[#07153f]">⚖️ Legalitas Perusahaan & Pengadaan LKPP RI</h2>
                <p class="text-xs text-slate-400">Data legalitas badan hukum yang ditampilkan pada section legalitas dan footer</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Nama Badan Usaha Resmi</label>
                    <input type="text" name="company_legal_name" value="{{ $settings['company_legal_name']->value ?? 'CV. Beranda Teknologi Digital' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Nomor SK Kemenkumham RI (AHU)</label>
                    <input type="text" name="company_ahu" value="{{ $settings['company_ahu']->value ?? 'AHU-0003819-AH.01.14 Tahun 2022' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-mono focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Nomor Pokok Wajib Pajak (NPWP)</label>
                    <input type="text" name="company_npwp" value="{{ $settings['company_npwp']->value ?? '63.100.018.9-312.000' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-mono focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Akta Notaris Pendirian</label>
                    <input type="text" name="company_notaris" value="{{ $settings['company_notaris']->value ?? 'Juwairiyah Handayani, S.H., M.Kn (Salinan Akta No. 01 Tanggal 29 Desember 2021)' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5 md:col-span-2">
                    <label class="block text-xs font-bold text-[#07153f]">Status E-Katalog LKPP RI</label>
                    <input type="text" name="company_lkpp_status" value="{{ $settings['company_lkpp_status']->value ?? 'Terdaftar Resmi di E-Katalog LKPP RI' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>
            </div>
        </div>

        <!-- SECTION 6: STATISTIK COUNTER BERANDA -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
            <div class="border-b border-slate-100 pb-3">
                <h2 class="text-base font-extrabold text-[#07153f]">📊 Statistik Angka & Pencapaian (Counter Band)</h2>
                <p class="text-xs text-slate-400">Angka pencapaian yang tampil pada pita statistik di halaman Beranda</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Happy Clients</label>
                    <input type="text" name="stats_clients" value="{{ $settings['stats_clients']->value ?? '150+' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-mono font-bold focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Projects Done</label>
                    <input type="text" name="stats_projects" value="{{ $settings['stats_projects']->value ?? '99+' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-mono font-bold focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Top Reviews & Events</label>
                    <input type="text" name="stats_reviews" value="{{ $settings['stats_reviews']->value ?? '85+' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-mono font-bold focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Years Experience</label>
                    <input type="text" name="stats_experience" value="{{ $settings['stats_experience']->value ?? '10+' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-mono font-bold focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>
            </div>
        </div>

        <!-- SECTION 7: CALL TO ACTION (CTA) BANNER BAWAH -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
            <div class="border-b border-slate-100 pb-3">
                <h2 class="text-base font-extrabold text-[#07153f]">📢 Call to Action (CTA Banner Bawah)</h2>
                <p class="text-xs text-slate-400">Teks ajakan bertindak di bagian paling bawah halaman website</p>
            </div>

            <div class="grid grid-cols-1 gap-6">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Headline CTA</label>
                    <input type="text" name="cta_headline" value="{{ optional($settings['cta_headline'] ?? null)->value ?? 'Let\'s Work Together' }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none" />
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-[#07153f]">Deskripsi CTA</label>
                    <textarea name="cta_description" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:outline-none">{{ optional($settings['cta_description'] ?? null)->value ?? 'Revolusi Teknologi mengubah aspek kehidupan kita, dan struktur masyarakat itu sendiri. Konsultasikan rencana pembuatan website perusahaan, aplikasi mobile Flutter, sistem informasi, atau pelatihan IT bersama CV. Beranda Teknologi Digital.' }}</textarea>
                </div>
            </div>
        </div>

        <!-- Submit Button Bottom -->
        <div class="flex justify-end">
            <button type="submit" class="px-8 py-4 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-extrabold text-xs uppercase tracking-wider shadow-xl hover:shadow-blue-600/30 transition-all">
                💾 Simpan Semua Pengaturan & Warna Tema
            </button>
        </div>

    </form>
</div>

<script>
function previewImage(input, previewId) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById(previewId).src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
