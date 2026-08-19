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
     * Seed database with authentic XML parsed images mapped strictly to relevant content.
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
            ['key' => 'trainer_avatar', 'value' => '/images/img_team_Home-6TECTXE.jpg', 'group' => 'trainer', 'label' => 'Foto Profile Trainer', 'type' => 'text'],
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

        // 4. Authentic Projects with RELEVANT XML Images
        Project::create([
            'category_id' => $catEdu->id,
            'title' => 'Website Desa & Aplikasi Administrasi Surat Digital Desa Senuro Timur',
            'slug' => 'website-desa-dan-aplikasi-administrasi-surat-desa-senuro-timur',
            'summary' => 'Sistem Informasi Digitalisasi Desa dan Otomasi Surat-menyurat Terpadu untuk Perangkat Desa, Pendamping Desa, dan Warga Desa Senuro Timur, Kab. Ogan Ilir.',
            'challenge' => 'Pelayanan pengurusan surat administrasi desa membutuhkan waktu lama karena pencatatan arsip fisik yang manual.',
            'solution' => 'Beranda Teknologi Digital membangun portal web desa responsif terhubung dengan generator surat otomatis berbasis QR Code verifikasi.',
            'tech_stack' => ['Laravel 13', 'PHP 8.4', 'MySQL', 'Tailwind CSS', 'Alpine.js'],
            'client_name' => 'Pemerintah Desa Senuro Timur, Kab. Ogan Ilir',
            'project_url' => 'https://berandadigital.net',
            'thumbnail' => '/images/ss-dsrp.png',
            'gallery' => ['/images/surat.png', '/images/ss-asalam.png'],
            'is_featured' => true,
            'order' => 1,
        ]);

        Project::create([
            'category_id' => $catEdu->id,
            'title' => 'Sistem Informasi Sekolah & Portal PPDB Online Integrated',
            'slug' => 'sistem-informasi-sekolah-portal-ppdb-online',
            'summary' => 'Platform manajemen sekolah terlengkap mencakup Pendaftaran Peserta Didik Baru (PPDB), SPP online, E-Learning, dan Portal Alumni.',
            'challenge' => 'Proses penerimaan siswa baru sering memicu antrean fisik dan kesulitan rekapitulasi pembayaran.',
            'solution' => 'Sistem PPDB online otomatis dengan verifikasi dokumen instan dan integrasi WhatsApp Gateway.',
            'tech_stack' => ['Laravel', 'Livewire', 'MySQL', 'WhatsApp API'],
            'client_name' => 'SIT Robbani Ogan Ilir & Sekolah Mitra',
            'project_url' => 'https://berandadigital.net',
            'thumbnail' => '/images/portofolio-web-1.webp',
            'gallery' => ['/images/ppdb.png', '/images/ELEARNING.png'],
            'is_featured' => true,
            'order' => 2,
        ]);

        Project::create([
            'category_id' => $catAI->id,
            'title' => 'Chatbot AI Privat Dokumen SOP Enterprise (Python & RAG)',
            'slug' => 'chatbot-ai-privat-dokumen-sop-enterprise',
            'summary' => 'Engine AI Chatbot mandiri tanpa API eksternal berbayar untuk menjawab pertanyaan seputar SOP internal perusahaan dan materi pendidikan.',
            'challenge' => 'Perusahaan dan lembaga pendidikan khawatir data privat bocor jika menggunakan API OpenAI publik.',
            'solution' => 'Pembangunan arsitektur RAG lokal dengan Python, Vector Database, dan frontend dashboard Laravel yang aman.',
            'tech_stack' => ['Python PyTorch', 'Laravel 13', 'PgVector', 'Tailwind CSS'],
            'client_name' => 'SIT Robbani & IGI Ogan Ilir',
            'project_url' => 'https://berandadigital.net',
            'thumbnail' => '/images/img_feature_Home-GND7RS3.jpg',
            'gallery' => ['/images/illus-services.png'],
            'is_featured' => true,
            'order' => 3,
        ]);

        Project::create([
            'category_id' => $catMobile->id,
            'title' => 'GovConnect Mobile App & Public Service System',
            'slug' => 'govconnect-mobile-app-public-service',
            'summary' => 'Aplikasi mobile Android & iOS layanan publik pengaduan masyarakat cepat tanggap berbasis lokasi presisi.',
            'challenge' => 'Penanganan fasilitas umum rusak lambat karena ketiadaan koordinat foto lokasi pengaduan.',
            'solution' => 'Aplikasi mobile Flutter terhubung dengan backend REST API Laravel dan peta interaktif.',
            'tech_stack' => ['Flutter', 'RESTful API', 'Laravel', 'Firebase FCM'],
            'client_name' => 'Dinas Komunikasi & Informatika',
            'project_url' => 'https://berandadigital.net',
            'thumbnail' => '/images/smartmockups_kzp157hz-e1644985141609.jpg',
            'is_featured' => false,
            'order' => 4,
        ]);

        // 5. Digital Products with RELEVANT XML Images
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
            'thumbnail' => '/images/surat.png',
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
            'thumbnail' => '/images/home12-01.png',
            'is_featured' => true,
            'order' => 2,
        ]);

        DigitalProduct::create([
            'category_id' => $catProdAI->id,
            'title' => 'Smart E-Learning & Portal Tabungan Online',
            'slug' => 'smart-e-learning-portal-tabungan-online',
            'badge' => 'EdTech Platform',
            'tagline' => 'Sistem Informasi Manajemen Sekolah & Keuangan Terpadu',
            'description' => 'Aplikasi E-Learning dan tabungan/SPP online siap pakai untuk sekolah dan yayasan pendidikan.',
            'features' => [
                'Modul Quiz & Ujian Online Terintegrasi',
                'Rekap Tabungan & SPP Siswa Realtime',
                'WhatsApp Notification Gateway Terintegrasi',
                'Export Laporan PDF & Excel Instan'
            ],
            'price' => 1500000,
            'price_type' => 'one_time',
            'demo_url' => 'https://berandadigital.net',
            'buy_url' => 'https://wa.me/6289695249089?text=Halo%20Beranda%20Digital,%20saya%20tertarik%20membeli%20E-Learning',
            'thumbnail' => '/images/ELEARNING.png',
            'is_featured' => true,
            'order' => 3,
        ]);

        // 6. Training Modules with Authentic Flyers
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
            'thumbnail' => '/images/img_team_Home-GJ96G46.jpg',
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

        // 7. Authentic Event Galleries with RELEVANT Flyers & Event Photos
        Gallery::create([
            'title' => 'Keynote Speaker: Insight Talks Vol. 3 Palembang (Komdigi RI & Media Indonesia)',
            'event_name' => 'Insight Talks Vol. 3 Palembang',
            'location' => 'Hotel Harper Palembang',
            'event_date' => '2026-04-14',
            'category' => 'keynote',
            'image_path' => '/images/img_team_Home-6TECTXE.jpg',
            'description' => 'Septa Ryan Hidayat (CEO Beranda Teknologi Digital) menjadi narasumber bersama Plt. Direktur Komdigi RI dan Direktur Media Indonesia membahas Literasi Media & AI.',
            'is_featured' => true,
            'order' => 1,
        ]);

        Gallery::create([
            'title' => 'The Era of Vibe Coding Workshop di Politeknik Akamigas Palembang',
            'event_name' => 'Politeknik Akamigas Tech Workshop',
            'location' => 'Politeknik Akamigas Palembang',
            'event_date' => '2026-02-11',
            'category' => 'workshop',
            'image_path' => '/images/img_team_Home-GJ96G46.jpg',
            'description' => 'Sesi berbagi ilmu pemanfaatan AI Vibe Coding untuk akselerasi pembuatan aplikasi pembelajaran bersama dosen dan mahasiswa.',
            'is_featured' => true,
            'order' => 2,
        ]);

        Gallery::create([
            'title' => 'Pelatihan Coding & AI Dinas Pendidikan OKU Timur',
            'event_name' => 'Pelatihan Koding & AI OKU Timur',
            'location' => 'Hotel Majestic Palembang',
            'event_date' => '2025-09-11',
            'category' => 'training',
            'image_path' => '/images/photo1660899398.jpeg',
            'description' => 'Narasumber Septa Ryan Hidayat memandu pelatihan inovasi pembelajaran koding dan AI bagi tenaga pendidik SD dan SMP se-Kabupaten OKU Timur.',
            'is_featured' => true,
            'order' => 3,
        ]);

        Gallery::create([
            'title' => 'Pelatihan Online Masjid Go Digital: Pembuatan Website Masjid Gratis',
            'event_name' => 'Masjid Go Digital Campaign',
            'location' => 'Online Training Zoom',
            'event_date' => '2025-07-20',
            'category' => 'training',
            'image_path' => '/images/Masjid-GO-1.png',
            'description' => 'Pelatihan online pembuatan website pengelola infaq dan laporan keuangan masjid gratis secara transparan.',
            'is_featured' => true,
            'order' => 4,
        ]);

        // 8. Authentic Real Posts with Exact Relevant Images
        $xmlParsedPath = 'C:\Users\RYAN\.gemini\antigravity-ide\brain\e76328d7-060a-4578-8722-8e9279955ad0\scratch\posts_parsed.json';
        if (file_exists($xmlParsedPath)) {
            $parsedPosts = json_decode(file_get_contents($xmlParsedPath), true);
            $relImages = [
                '/images/img_team_Home-6TECTXE.jpg',
                '/images/img_team_Home-GJ96G46.jpg',
                '/images/photo1660899398.jpeg',
                '/images/photo1660899400.jpeg',
                '/images/Masjid-GO-1.png',
                '/images/Flyer-AR-New-1-scaled.jpg',
                '/images/kabar32.png',
                '/images/igi.png',
            ];

            foreach ($parsedPosts as $index => $pData) {
                $thumb = $relImages[$index % count($relImages)];
                Post::create([
                    'category_id' => ($index % 2 === 0) ? $blogEvent->id : $blogAI->id,
                    'user_id' => $admin->id,
                    'title' => $pData['title'],
                    'slug' => $pData['slug'] . '-' . uniqid(),
                    'thumbnail' => $thumb,
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
