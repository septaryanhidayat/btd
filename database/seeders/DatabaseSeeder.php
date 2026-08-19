<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\DigitalProduct;
use App\Models\Gallery;
use App\Models\Inquiry;
use App\Models\Post;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Training;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed database using authentic preview screenshots from public/preview directory.
     */
    public function run(): void
    {
        // 1. Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@berandadigital.net'],
            [
                'name' => 'Septa Ryan Hidayat, S.Kom',
                'password' => Hash::make('password123'),
            ]
        );

        // 2. Categories
        $catWeb = Category::create(['name' => 'Website & System Information', 'slug' => 'website-system-info', 'type' => 'project']);
        $catMobile = Category::create(['name' => 'Mobile App (Android & iOS)', 'slug' => 'mobile-app-android-ios', 'type' => 'project']);
        $catAI = Category::create(['name' => 'AI & Intelligent Automation', 'slug' => 'ai-automation', 'type' => 'project']);
        $catEdu = Category::create(['name' => 'School & Smart Village', 'slug' => 'school-smart-village', 'type' => 'project']);

        $catProdSaas = Category::create(['name' => 'SaaS Platform', 'slug' => 'saas-platform', 'type' => 'product']);
        $catProdScript = Category::create(['name' => 'Enterprise Script', 'slug' => 'enterprise-script', 'type' => 'product']);
        $catProdAI = Category::create(['name' => 'AI Suite & Chatbot', 'slug' => 'ai-suite', 'type' => 'product']);

        $blogEvent = Category::create(['name' => 'Workshop & Keynote Event', 'slug' => 'workshop-keynote-event', 'type' => 'post']);
        $blogTech = Category::create(['name' => 'Teknologi & Vibe Coding', 'slug' => 'teknologi-vibe-coding', 'type' => 'post']);
        $blogAI = Category::create(['name' => 'AI & Machine Learning', 'slug' => 'ai-machine-learning', 'type' => 'post']);

        // 3. Settings
        $settings = [
            ['key' => 'site_name', 'value' => 'CV. Beranda Teknologi Digital', 'group' => 'general', 'label' => 'Nama Perusahaan', 'type' => 'text'],
            ['key' => 'site_tagline', 'value' => 'Jasa Pembuatan Website, Sistem Informasi, Aplikasi Android/iOS & AI Solution', 'group' => 'general', 'label' => 'Tagline Utama', 'type' => 'text'],
            ['key' => 'hero_tagline', 'value' => 'Akselerasi Bisnis Anda Dengan Software & AI Solution Modern', 'group' => 'hero', 'label' => 'Tagline Hero', 'type' => 'text'],
            ['key' => 'hero_description', 'value' => 'Mitra transformasi digital terdepan di Indonesia. Kami menghadirkan jasa pengembangan aplikasi web enterprise, aplikasi mobile Android/iOS, solusi AI privat, serta penyelenggaraan pelatihan & workshop IT profesional.', 'group' => 'hero', 'label' => 'Deskripsi Hero', 'type' => 'textarea'],
            
            ['key' => 'trainer_name', 'value' => 'Septa Ryan Hidayat, S.Kom', 'group' => 'trainer', 'label' => 'Nama Trainer / Speaker', 'type' => 'text'],
            ['key' => 'trainer_title', 'value' => 'Direktur Utama CV. Beranda Teknologi Digital, Software Architect & AI Speaker', 'group' => 'trainer', 'label' => 'Gelar / Jabatan', 'type' => 'text'],
            ['key' => 'trainer_bio', 'value' => 'Direktur Utama & Lead Software Architect di CV. Beranda Teknologi Digital. Dewan Pakar IGI Ogan Ilir, Narasumber Komdigi & Media Indonesia, serta Trainer Nasional di bidang Vibe Coding, AI RAG Document, dan Pengembangan Aplikasi Web/Mobile.', 'group' => 'trainer', 'label' => 'Bio Trainer', 'type' => 'textarea'],
            ['key' => 'trainer_avatar', 'value' => '/images/Insight-Talks-Komdigi.jpeg', 'group' => 'trainer', 'label' => 'Foto Profile Trainer', 'type' => 'text'],
            ['key' => 'trainer_stats_years', 'value' => '8+', 'group' => 'trainer', 'label' => 'Pengalaman Tahun', 'type' => 'text'],
            ['key' => 'trainer_stats_events', 'value' => '85+', 'group' => 'trainer', 'label' => 'Workshop & Seminar', 'type' => 'text'],
            ['key' => 'trainer_stats_alumni', 'value' => '5,000+', 'group' => 'trainer', 'label' => 'Peserta Pelatihan', 'type' => 'text'],

            ['key' => 'contact_email', 'value' => 'info@berandadigital.net', 'group' => 'contact', 'label' => 'Email Resmi', 'type' => 'text'],
            ['key' => 'contact_phone', 'value' => '+62 896-9524-9089', 'group' => 'contact', 'label' => 'WhatsApp Utama', 'type' => 'text'],
            ['key' => 'contact_phone_sec', 'value' => '+62 811-7448-447', 'group' => 'contact', 'label' => 'WhatsApp Sekunder', 'type' => 'text'],
            ['key' => 'contact_address', 'value' => 'CV. Beranda Teknologi Digital Hub - Ogan Ilir & Palembang, Sumatra Selatan, Indonesia', 'group' => 'contact', 'label' => 'Alamat Kantor', 'type' => 'textarea'],
            ['key' => 'social_linkedin', 'value' => 'https://linkedin.com/company/berandadigital', 'group' => 'social', 'label' => 'LinkedIn', 'type' => 'text'],
            ['key' => 'social_github', 'value' => 'https://github.com/septaryanhidayat/btd', 'group' => 'social', 'label' => 'GitHub', 'type' => 'text'],
            ['key' => 'social_instagram', 'value' => 'https://www.instagram.com/bteknologi_digital', 'group' => 'social', 'label' => 'Instagram', 'type' => 'text'],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }

        // 4. Authentic Projects Mapped directly to Preview Screencaptures
        Project::create([
            'category_id' => $catWeb->id,
            'title' => 'Portal Layanan Pembuatan Website Enterprise & Company Profile',
            'slug' => 'portal-layanan-pembuatan-website-enterprise',
            'summary' => 'Jasa Pembuatan Website Perusahaan, Portal Berita, E-Commerce & Landing Page dengan SEO & Mobile Responsive 100%.',
            'challenge' => 'Kebutuhan website bisnis modern dengan desain cepat, optimasi kecepatan, dan keamanan data.',
            'solution' => 'Arsitektur website Laravel 13 & PHP 8.4 terhubung dengan CMS admin instan dan integrasi WhatsApp.',
            'tech_stack' => ['Laravel 13', 'PHP 8.4', 'MySQL', 'Tailwind CSS', 'Alpine.js'],
            'client_name' => 'CV. Beranda Teknologi Digital',
            'project_url' => 'https://berandadigital.net',
            'thumbnail' => '/preview/screencapture-berandadigital-net-portofolio-website-2026-08-19-17_54_22.png',
            'gallery' => ['/preview/screencapture-berandadigital-net-2026-08-19-17_31_05.png'],
            'is_featured' => true,
            'order' => 1,
        ]);

        Project::create([
            'category_id' => $catMobile->id,
            'title' => 'Jasa Pembuatan Aplikasi Mobile Android & iOS (Flutter)',
            'slug' => 'jasa-pembuatan-aplikasi-mobile-android-ios',
            'summary' => 'Aplikasi Mobile Cross-Platform berbasis Flutter berkecepatan tinggi dengan integrasi RESTful API & Push Notifications.',
            'challenge' => 'Pengembangan aplikasi mobile dua platform (Android & iOS) sering memakan waktu dan biaya tinggi.',
            'solution' => 'Solusi Flutter tunggal terhubung ke backend Laravel dengan fitur offline-first dan geolokalasi.',
            'tech_stack' => ['Flutter', 'RESTful API', 'Laravel', 'Firebase FCM'],
            'client_name' => 'Klien Startup & Public Agency',
            'project_url' => 'https://berandadigital.net',
            'thumbnail' => '/preview/screencapture-berandadigital-net-aplikasi-android-2026-08-19-17_55_00.png',
            'gallery' => ['/preview/screencapture-berandadigital-net-layanan-2026-08-19-17_52_22.png'],
            'is_featured' => true,
            'order' => 2,
        ]);

        Project::create([
            'category_id' => $catEdu->id,
            'title' => 'Sistem Informasi Administrasi Surating & Desa Digital',
            'slug' => 'sistem-informasi-administrasi-surating-desa-digital',
            'summary' => 'Sistem Informasi Digitalisasi Desa dan Otomasi Surat-menyurat Terpadu untuk Perangkat Desa, Pendamping Desa, dan Warga Desa Senuro Timur.',
            'challenge' => 'Pelayanan pengurusan surat administrasi desa membutuhkan waktu lama karena pencatatan arsip fisik yang manual.',
            'solution' => 'Beranda Teknologi Digital membangun portal web desa responsif terhubung dengan generator surat otomatis berbasis QR Code verifikasi.',
            'tech_stack' => ['Laravel 13', 'PHP 8.4', 'MySQL', 'Tailwind CSS'],
            'client_name' => 'Pemerintah Desa Senuro Timur, Kab. Ogan Ilir',
            'project_url' => 'https://berandadigital.net',
            'thumbnail' => '/preview/screencapture-berandadigital-net-sistem-informasi-2026-08-19-17_55_14.png',
            'gallery' => ['/images/surat.png', '/images/ss-asalam.png'],
            'is_featured' => true,
            'order' => 3,
        ]);

        Project::create([
            'category_id' => $catWeb->id,
            'title' => 'Jasa Pembuatan Website & Campaign Digital Publik / Leader',
            'slug' => 'jasa-pembuatan-website-campaign-digital',
            'summary' => 'Platform portal informasi, video profil, dan campaign digital publik dengan sistem interaktif.',
            'challenge' => 'Membangun branding publik yang transparan dan cepat diakses oleh seluruh lapisan masyarakat.',
            'solution' => 'Portal web responsif dengan integrasi galeri video, jadwal kegiatan, dan form aspirasi.',
            'tech_stack' => ['Laravel', 'Tailwind CSS', 'MySQL'],
            'client_name' => 'Public Leader & Agency Partner',
            'project_url' => 'https://berandadigital.net',
            'thumbnail' => '/preview/screencapture-berandadigital-net-jasa-website-caleg-2026-08-19-17_54_34.png',
            'is_featured' => false,
            'order' => 4,
        ]);

        // 5. Digital Products Mapped to Screencaptures
        DigitalProduct::create([
            'category_id' => $catProdSaas->id,
            'title' => 'Sistem Aplikasi Administrasi Desa Digital (Smart Village)',
            'slug' => 'sistem-aplikasi-administrasi-desa-digital',
            'badge' => 'Smart Village',
            'tagline' => 'Platform Digitalisasi Surat Desa, Data Kependudukan & Portal Publik',
            'description' => 'Aplikasi web siap pakai untuk kantor desa yang membutuhkan sistem cetak surat otomatis, verifikasi QR code, dan portal informasi publik.',
            'features' => [
                'Modul Cetak Surat Otomatis 30+ Jenis Surat Desa',
                'Otentikasi Tanda Tangan Digital QR Code',
                'Database Kependudukan & Statistik RT/RW',
                'Support SQLite untuk Server Desa & MySQL Online'
            ],
            'price' => 1990000,
            'price_type' => 'one_time',
            'demo_url' => 'https://berandadigital.net',
            'buy_url' => 'https://wa.me/6289695249089?text=Halo%20Beranda%20Digital,%20saya%20tertarik%20membeli%20Aplikasi%20Desa%20Digital',
            'thumbnail' => '/preview/screencapture-berandadigital-net-order-2026-08-19-17_52_40.png',
            'is_featured' => true,
            'order' => 1,
        ]);

        DigitalProduct::create([
            'category_id' => $catProdScript->id,
            'title' => 'Enterprise Starter Kit Laravel 13 & Tailwind v4',
            'slug' => 'enterprise-starter-kit-laravel-13',
            'badge' => 'Boilerplate Script',
            'tagline' => 'Arsitektur Boilerplate Siap Pakai dengan Dark/Light Mode & RBAC',
            'description' => 'Boilerplate terlengkap untuk startup dan pengembang software. Dilengkapi sistem autentikasi, manajemen pengguna, log audit, dan tema ganda.',
            'features' => [
                'Laravel 13 & PHP 8.4 Support Out of The Box',
                'Dukungan SQLite (Dev) & MySQL (Production)',
                'Fitur Dual Theme: Light & Dark Mode Persisted',
                'Role & Permission Management bawaan',
                'Clean Architecture Standard'
            ],
            'price' => 499000,
            'price_type' => 'one_time',
            'demo_url' => 'https://berandadigital.net',
            'buy_url' => 'https://wa.me/6289695249089?text=Halo%20Beranda%20Digital,%20saya%20tertarik%20membeli%20Laravel%20Starter%20Kit',
            'thumbnail' => '/preview/screencapture-berandadigital-net-2026-08-19-17_31_05.png',
            'is_featured' => true,
            'order' => 2,
        ]);

        DigitalProduct::create([
            'category_id' => $catProdAI->id,
            'title' => 'Jasa Pembuatan Video Ucapan & Profil Digital',
            'slug' => 'jasa-pembuatan-video-ucapan-profil-digital',
            'badge' => 'Media Studio',
            'tagline' => 'Layanan Pembuatan Video Profil & Ucapan Hari Besar',
            'description' => 'Layanan pembuatan video profil perusahaan, instansi, dan ucapan hari raya dengan animasi modern.',
            'features' => [
                'Animasi HD 1080p / 4K Modern',
                'Custom Voiceover & Backsound Lisensi Resmi',
                'Revisi Hingga Puas & Format Siap Sosial Media',
                'Pengerjaan Cepat 1-3 Hari'
            ],
            'price' => 750000,
            'price_type' => 'one_time',
            'demo_url' => 'https://berandadigital.net',
            'buy_url' => 'https://wa.me/6289695249089?text=Halo%20Beranda%20Digital,%20saya%20tertarik%20membeli%20Jasa%20Video',
            'thumbnail' => '/preview/screencapture-berandadigital-net-video-ucapan-2026-08-19-17_54_48.png',
            'is_featured' => true,
            'order' => 3,
        ]);

        // 6. Training Modules
        Training::create([
            'title' => 'Lecturer Development Program: Artificial Intelligence & Vibe Coding',
            'slug' => 'lecturer-development-program-ai-vibe-coding',
            'level' => 'Executive & Dosen',
            'duration' => '1 Hari Workshop Intensif',
            'target_audience' => 'Dosen, Akademisi & Pengajar Perguruan Tinggi',
            'summary' => 'Pelatihan Pemanfaatan Artificial Intelligence (AI) untuk pembuatan aplikasi praktis dan profesional tanpa coding, khusus bagi Dosen Politeknik Akamigas Palembang.',
            'syllabus' => [
                'Pengenalan Konsep Vibe Coding & Generative AI',
                'Pembuatan Prototype Aplikasi Tanpa Baris Kode',
                'Pemanfaatan AI dalam Inovasi Pembelajaran Perguruan Tinggi',
                'Studi Kasus Otomasi Administrasi Akademik'
            ],
            'price' => 1500000,
            'thumbnail' => '/preview/screencapture-berandadigital-test-trainer-2026-08-19-17_49_10.png',
            'is_featured' => true,
            'order' => 1,
        ]);

        Training::create([
            'title' => 'Pelatihan Augmented Reality (AR) & Koding untuk Media Edukasi Interaktif',
            'slug' => 'pelatihan-augmented-reality-ar-dan-koding',
            'level' => 'Guru & Praktisi Pendidikan',
            'duration' => '1 Hari Workshop',
            'target_audience' => 'Guru SD, SMP, SMA & Pengembang Media Pembelajaran',
            'summary' => 'Pelatihan pembuatan aplikasi 3D Augmented Reality untuk visualisasi materi pelajaran interaktif di kelas.',
            'syllabus' => [
                'Dasar 3D Modeling & AR Marker',
                'Pengenalan Software AR Creator',
                'Integrasi AR dengan Buku Pelajaran',
                'Publishing Aplikasi AR ke Smartphone'
            ],
            'price' => 1200000,
            'thumbnail' => '/images/Flyer-AR-New-1-scaled.jpg',
            'is_featured' => true,
            'order' => 2,
        ]);

        // 7. Authentic Event Galleries with REAL Photo Posters from Preview Directory
        Gallery::create([
            'title' => 'Tampilan Beranda Website Resmi Beranda Teknologi Digital',
            'event_name' => 'Original Web Preview',
            'location' => 'berandadigital.net',
            'event_date' => '2026-08-19',
            'category' => 'preview',
            'image_path' => '/preview/screencapture-berandadigital-net-2026-08-19-17_31_05.png',
            'description' => 'Tampilan asli beranda utama website Beranda Teknologi Digital.',
            'is_featured' => true,
            'order' => 1,
        ]);

        Gallery::create([
            'title' => 'Keynote Speaker: Insight Talks Vol. 3 Palembang (Komdigi RI & Media Indonesia)',
            'event_name' => 'Insight Talks Vol. 3 Palembang',
            'location' => 'Hotel Harper Palembang',
            'event_date' => '2026-04-14',
            'category' => 'keynote',
            'image_path' => '/images/Insight-Talks-Komdigi.jpeg',
            'description' => 'Septa Ryan Hidayat (CEO Beranda Teknologi Digital) menjadi narasumber bersama Plt. Direktur Komdigi RI dan Direktur Media Indonesia.',
            'is_featured' => true,
            'order' => 2,
        ]);

        Gallery::create([
            'title' => 'Halaman Layanan Jasa & Paket Pembuatan Aplikasi',
            'event_name' => 'Original Services Preview',
            'location' => 'berandadigital.net/layanan',
            'event_date' => '2026-08-19',
            'category' => 'preview',
            'image_path' => '/preview/screencapture-berandadigital-net-layanan-2026-08-19-17_52_22.png',
            'description' => 'Tampilan halaman layanan jasa pembuatan website, mobile app, dan sistem informasi.',
            'is_featured' => true,
            'order' => 3,
        ]);

        Gallery::create([
            'title' => 'Halaman Profil Perusahaan & Bio Direktur Utama Septa Ryan Hidayat',
            'event_name' => 'Original Profile Preview',
            'location' => 'berandadigital.net/profile',
            'event_date' => '2026-08-19',
            'category' => 'preview',
            'image_path' => '/preview/screencapture-berandadigital-net-profile-2026-08-19-17_53_14.png',
            'description' => 'Tampilan halaman profil resmi CV. Beranda Teknologi Digital.',
            'is_featured' => true,
            'order' => 4,
        ]);

        // 8. Authentic Real Posts from exact_posts_with_images.json
        $jsonPath = 'C:\Users\RYAN\.gemini\antigravity-ide\brain\e76328d7-060a-4578-8722-8e9279955ad0\scratch\exact_posts_with_images.json';
        if (file_exists($jsonPath)) {
            $parsedPosts = json_decode(file_get_contents($jsonPath), true);
            foreach ($parsedPosts as $index => $pData) {
                Post::create([
                    'category_id' => ($index % 2 === 0) ? $blogEvent->id : $blogAI->id,
                    'user_id' => $admin->id,
                    'title' => $pData['title'],
                    'slug' => $pData['slug'] . '-' . uniqid(),
                    'thumbnail' => $pData['image'],
                    'excerpt' => $pData['excerpt'],
                    'body' => $pData['content'],
                    'status' => 'published',
                    'published_at' => $pData['date'] ? \Carbon\Carbon::parse($pData['date']) : now()->subDays($index * 3),
                ]);
            }
        }

        // 9. Sample Inquiries
        Inquiry::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@techcorp.id',
            'phone' => '081299887766',
            'subject' => 'Permintaan Penawaran Aplikasi Mobile & ERP',
            'message' => 'Halo Pak Septa Ryan & Tim Beranda Digital, kami berencana membangun aplikasi mobile dan ERP manufaktur. Mohon informasi jadwal diskusi.',
            'is_read' => false,
        ]);
    }
}
