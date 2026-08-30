-- Database Dump for berandad_db_btd (cPanel)
-- Generated on: 2026-08-30 13:32:40
SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
START TRANSACTION;
SET time_zone = '+00:00';

-- --------------------------------------------------------
-- Data for table `categories`
-- --------------------------------------------------------

TRUNCATE TABLE `categories`;
INSERT INTO `categories` (`id`, `name`, `slug`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Website & System Information', 'website-system-info', 'project', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(2, 'Mobile App (Android & iOS)', 'mobile-app-android-ios', 'project', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(3, 'AI & Intelligent Automation', 'ai-automation', 'project', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(4, 'School & Smart Village', 'school-smart-village', 'project', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(5, 'SaaS Platform', 'saas-platform', 'product', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(6, 'Enterprise Script', 'enterprise-script', 'product', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(7, 'AI Suite & Chatbot', 'ai-suite', 'product', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(8, 'Workshop & Keynote Event', 'workshop-keynote-event', 'post', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(9, 'Teknologi & Vibe Coding', 'teknologi-vibe-coding', 'post', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(10, 'AI & Machine Learning', 'ai-machine-learning', 'post', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(11, 'Website Enterprise', 'website-enterprise', 'project', '2026-08-30 12:10:32', '2026-08-30 12:10:32'),
(12, 'Aplikasi Mobile', 'aplikasi-mobile', 'project', '2026-08-30 12:10:32', '2026-08-30 12:10:32'),
(13, 'Sistem Informasi', 'sistem-informasi', 'project', '2026-08-30 12:10:32', '2026-08-30 12:10:32');

-- --------------------------------------------------------
-- Data for table `digital_products`
-- --------------------------------------------------------

TRUNCATE TABLE `digital_products`;
INSERT INTO `digital_products` (`id`, `category_id`, `title`, `slug`, `badge`, `tagline`, `description`, `features`, `price`, `price_type`, `demo_url`, `buy_url`, `thumbnail`, `is_featured`, `order`, `created_at`, `updated_at`) VALUES
(1, 5, 'Sistem Aplikasi Administrasi Desa Digital (Smart Village)', 'sistem-aplikasi-administrasi-desa-digital', 'Smart Village', 'Platform Digitalisasi Surat Desa, Data Kependudukan & Portal Publik', 'Aplikasi web siap pakai untuk kantor desa yang membutuhkan sistem cetak surat otomatis, verifikasi QR code, dan portal informasi publik.', '["Modul Cetak Surat Otomatis 30+ Jenis Surat Desa","Otentikasi Tanda Tangan Digital QR Code","Database Kependudukan & Statistik RT\\/RW","Support SQLite untuk Server Desa & MySQL Online"]', 1990000, 'one_time', 'https://berandadigital.net', 'https://wa.me/6289695249089?text=Halo%20Beranda%20Digital,%20saya%20tertarik%20membeli%20Aplikasi%20Desa%20Digital', '/images/products/smart-village-mockup.jpg', 1, 1, '2026-08-19 10:57:35', '2026-08-30 11:56:44'),
(2, 6, 'Enterprise Starter Kit Laravel 13 & Tailwind v4', 'enterprise-starter-kit-laravel-13', 'Boilerplate Script', 'Arsitektur Boilerplate Siap Pakai dengan Dark/Light Mode & RBAC', 'Boilerplate terlengkap untuk startup dan pengembang software. Dilengkapi sistem autentikasi, manajemen pengguna, log audit, dan tema ganda.', '["Laravel 13 & PHP 8.4 Support Out of The Box","Dukungan SQLite (Dev) & MySQL (Production)","Fitur Dual Theme: Light & Dark Mode Persisted","Role & Permission Management bawaan","Clean Architecture Standard"]', 499000, 'one_time', 'https://berandadigital.net', 'https://wa.me/6289695249089?text=Halo%20Beranda%20Digital,%20saya%20tertarik%20membeli%20Laravel%20Starter%20Kit', '/images/products/enterprise-web-mockup.jpg', 1, 2, '2026-08-19 10:57:35', '2026-08-30 11:56:44'),
(3, 7, 'Jasa Pembuatan Video Ucapan & Profil Digital', 'jasa-pembuatan-video-ucapan-profil-digital', 'Media Studio', 'Layanan Pembuatan Video Profil & Ucapan Hari Besar', 'Layanan pembuatan video profil perusahaan, instansi, dan ucapan hari raya dengan animasi modern.', '["Animasi HD 1080p \\/ 4K Modern","Custom Voiceover & Backsound Lisensi Resmi","Revisi Hingga Puas & Format Siap Sosial Media","Pengerjaan Cepat 1-3 Hari"]', 750000, 'one_time', 'https://berandadigital.net', 'https://wa.me/6289695249089?text=Halo%20Beranda%20Digital,%20saya%20tertarik%20membeli%20Jasa%20Video', '/images/products/school-portal-mockup.jpg', 1, 3, '2026-08-19 10:57:35', '2026-08-30 11:56:44');

-- --------------------------------------------------------
-- Data for table `galleries`
-- --------------------------------------------------------

TRUNCATE TABLE `galleries`;
INSERT INTO `galleries` (`id`, `title`, `event_name`, `location`, `event_date`, `category`, `image_path`, `description`, `is_featured`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Tampilan Beranda Website Resmi Beranda Teknologi Digital', 'Original Web Preview', 'berandadigital.net', '2026-08-19 00:00:00', 'preview', '/preview/screencapture-berandadigital-net-2026-08-19-17_31_05.png', 'Tampilan asli beranda utama website Beranda Teknologi Digital.', 1, 1, '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(2, 'Keynote Speaker: Insight Talks Vol. 3 Palembang (Komdigi RI & Media Indonesia)', 'Insight Talks Vol. 3 Palembang', 'Hotel Harper Palembang', '2026-04-14 00:00:00', 'keynote', '/images/Insight-Talks-Komdigi.jpeg', 'Septa Ryan Hidayat (CEO Beranda Teknologi Digital) menjadi narasumber bersama Plt. Direktur Komdigi RI dan Direktur Media Indonesia.', 1, 2, '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(3, 'Halaman Layanan Jasa & Paket Pembuatan Aplikasi', 'Original Services Preview', 'berandadigital.net/layanan', '2026-08-19 00:00:00', 'preview', '/preview/screencapture-berandadigital-net-layanan-2026-08-19-17_52_22.png', 'Tampilan halaman layanan jasa pembuatan website, mobile app, dan sistem informasi.', 1, 3, '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(4, 'Halaman Profil Perusahaan & Bio Direktur Utama Septa Ryan Hidayat', 'Original Profile Preview', 'berandadigital.net/profile', '2026-08-19 00:00:00', 'preview', '/preview/screencapture-berandadigital-net-profile-2026-08-19-17_53_14.png', 'Tampilan halaman profil resmi CV. Beranda Teknologi Digital.', 1, 4, '2026-08-19 10:57:35', '2026-08-19 10:57:35');

-- --------------------------------------------------------
-- Data for table `inquiries`
-- --------------------------------------------------------

TRUNCATE TABLE `inquiries`;
INSERT INTO `inquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'Budi Santoso', 'budi@techcorp.id', '081299887766', 'Permintaan Penawaran Aplikasi Mobile & ERP', 'Halo Pak Septa Ryan & Tim Beranda Digital, kami berencana membangun aplikasi mobile dan ERP manufaktur. Mohon informasi jadwal diskusi.', 0, '2026-08-19 10:57:35', '2026-08-19 10:57:35');

-- --------------------------------------------------------
-- Data for table `posts`
-- --------------------------------------------------------

TRUNCATE TABLE `posts`;
INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `thumbnail`, `excerpt`, `body`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 'Webinar Online : Masjid Go Digital', 'webinar-masjid-go-digital-6a858c1f6b1a7', '/images/Masjid-GO-1.png', '
Assalamualaikum Warahmatullah,



Beranda Teknologi Digital proudly present :

...', '<!-- wp:paragraph -->
<p>Assalamualaikum Warahmatullah,</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Beranda Teknologi Digital proudly present :</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>MASJID GO DIGITAL : Pelatihan Online Pembuatan Website Masjid Gratis!</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Agenda ini terbuka untuk masyarakat Umum dan bersifat <strong>GRATIS</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Catat informasi pentingnya :<br>Hari/Tanggal : Sabtu, 23 April 2022<br>Pukul : 09.00 WIB s/d selesai<br>Media : Grup Telegram dan Zoom Meeting</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Link Pendaftaran : <a href="http://s.id/MasjidGoDigital" target="_blank" aria-label="undefined (opens in a new tab)" rel="noreferrer noopener">s.id/MasjidGoDigital</a></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Kami tunggu kehadiran Anda.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Terimakasih</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>__________________<br>Informasi lebih lanjut :<br>email : bteknologi.digital@gmail.com<br>instagram :&nbsp;<a href="https://www.instagram.com/bteknologi.digital/">@bteknologi.digital</a><br>WhatsApp : 0811 7448 447</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>www.berandadigital.net</strong></p>
<!-- /wp:paragraph -->', 'published', '2022-04-13 03:33:04', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(2, 10, 1, 'Augmented Reality for Education', 'augmentedreality-6a858c1f6bfc7', '/images/WhatsApp-Image-2022-08-30-at-08.46.40.jpeg', '
Terbuka untuk Umum 🔊



Augmented Reality for Education


...', '<!-- wp:paragraph -->
<p>Terbuka untuk Umum 🔊</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Augmented Reality for Education</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Hallo Sobat Ralenta dimanapun kalian berada 📸</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Ralenta Learning Center kali ini akan mengadakan Pelatihan Pembuatan Media Pembelajaran menggunakan "Augmented Reality "</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Nah disini kita akan mempelajari cara membuat Media Pembelajaran yang dapat menggabungkan benda maya dua dimensi dan ataupun tiga dimensi ke dalam sebuah<br>lingkungan nyata lalu memproyeksikan benda-benda maya tersebut secara realitas dalam waktu nyata.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Dengan mengikuti Pelatihan ini, kamu tidak perlu mengeluarkan uang sampai Jutaan loh 😱</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Hanya dengan Rp. 100.000 (Offline) dan Rp. 75.000 (Online) saja kamu sudah bisa mendapatkan ilmu esklusif langsung dari Pemateri, Sertifikat, Snack, dan juga Bonus berupa :</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>Video Tutorial tentang AR</li><li>Template PPT untuk Media Pembelajaran</li><li>Free Konsultasi selama 3 hari bersama pembicara</li></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>🧑🏻‍🏫 Pembicara :<br>Septa Ryan Hidayat</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>Project Manager CV. Beranda Teknologi Digital</li><li>Web &amp; Android Delevoper</li><li>Trainer Nasional RLC</li></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>📆 Sabtu, 10 September 2022<br>⏰ 08.30 - 11.30<br>🏠 Aula SD IT Robbani Ogan Ilir (offline)<br>💻 Zoom (Online)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Pendaftaran :<br></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Kuota Terbatas Loh, jangan lewatkan kesempatan Emas ini 😱</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Ada pertanyaan ? Chat mimin aja yaa<br><a href="http://wa.me/628117448480" data-type="URL" data-id="wa.me/628117448480" target="_blank" rel="noreferrer noopener">wa.me/628117448480</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Presented by Ralenta Learning Center</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Suported by :</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>CV. Beranda Teknologi Digital</li><li>SIT Robbani Ogan Ilir</li></ul>
<!-- /wp:list -->', 'published', '2022-09-05 02:45:35', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(3, 8, 1, 'Perpanjangan Pendaftaran Augmented Reality for Education', 'perpanjangan-pendaftaran-augmented-reality-for-education-6a858c1f6cc0d', '/images/Flyer-AR-New-1-scaled.jpg', '
Perpanjangan Pendaftaran....



Pelatihan diubah menjadi hari Sabtu, 17 September 2022...', '<!-- wp:paragraph -->
<p>Perpanjangan Pendaftaran....</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Pelatihan diubah menjadi hari <strong>Sabtu, 17 September 2022</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Ralenta Learning Center kali ini akan mengadakan <em>Pelatihan Pembuatan Media Pembelajaran menggunakan "Augmented Reality "</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Nah disini kita akan mempelajari cara membuat Media Pembelajaran yang dapat menggabungkan benda maya dua dimensi dan ataupun tiga dimensi ke dalam sebuah<br />lingkungan nyata lalu memproyeksikan benda-benda maya tersebut secara realitas dalam waktu nyata.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Dengan mengikuti Pelatihan ini, kamu tidak perlu mengeluarkan uang sampai Jutaan loh 😱</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Hanya dengan Rp. 100.000 (Offline) dan Rp. 75.000 (Online) saja kamu sudah bisa mendapatkan ilmu esklusif langsung dari Pemateri, Sertifikat, Snack, dan juga Bonus berupa :</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul>
<li>Video Tutorial tentang AR</li>
<li>Template PPT untuk Media Pembelajaran</li>
<li>Free Konsultasi selama 3 hari bersama pembicara</li>
</ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>🧑🏻‍🏫 Pembicara :<br />Septa Ryan Hidayat</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul>
<li>Project Manager CV. Beranda Teknologi Digital</li>
<li>Web &amp; Android Delevoper</li>
<li>Trainer Nasional RLC</li>
</ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>📆 Sabtu, 17 September 2022<br />⏰ 08.30 - 11.30<br />🏠 Aula SD IT Robbani Ogan Ilir (offline)<br />💻 Zoom (Online)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Pendaftaran :<br /></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Kuota Terbatas Loh, jangan lewatkan kesempatan Emas ini 😱</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Ada pertanyaan ? Chat mimin aja yaa<br /><a href="http://wa.me/628117448480" target="_blank" rel="noreferrer noopener" data-type="URL" data-id="wa.me/628117448480">wa.me/628117448480</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Presented by Ralenta Learning Center</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Suported by :</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul>
<li>CV. Beranda Teknologi Digital</li>
<li>SIT Robbani Ogan Ilir</li>
</ul>
<!-- /wp:list -->', 'published', '2022-09-13 04:56:07', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(4, 10, 1, 'Mari Ikuti Training for Trainer "Coding for Kids" Tahun 2023', 'tft-codingforkids2023-6a858c1f6d80b', '/images/Flyer-Coding-for-Kids-3.png', '...', '<img class="aligncenter wp-image-2582 size-large" src="http://berandadigital.net/wp-content/uploads/2023/06/Flyer-Coding-for-Kids-3-1024x1024.png" alt="" width="1024" height="1024" />

Di era digital saat ini, Coding memiliki pengaruh besar di masa depan, bahkan banyak jenis pekerjaan yang baru yang membutuhkan kemampuan coding.

Mengenalkan dasar coding yang mudah dipelajari oleh anak-anak sehingga mereka mampu untuk membuat membuat karya digital berupa story, animasi, hingga game.

<strong>Beranda Teknologi Digital</strong> bekerjasama dengan <strong>SIT Robbani Ogan Ilir</strong> mengadakan :

<strong>Training for Trainer</strong>
<strong>"Coding for Kids 2023"</strong>
<em>Pelatihan Coding for Kids Gratis untuk Guru SIT Robbani Ogan Ilir</em>

<strong>Apa yang akan di pelajari pada materi ini ?</strong>
1️⃣ Apa itu Coding
2️⃣ Coding untuk Tenaga Pengajar
3️⃣ Praktik Penggunaan Program Coding for Kids

<strong>Siapa Pemateri dalam Kegiatan ini ?</strong>
🧑🏻‍🏫 Septa Ryan Hidayat
▶️ Project Manager CV Beranda Teknologi Digital
▶️ Software Engineer

<strong>Kapan Pelaksanaannya?</strong>
📆 Sabtu, 5 Agustus 2023
🕗 08.00 - 12.00 WIB
🛜 Aula SIT Robbani Ogan Ilir

<strong>🔊 Coming Soon</strong>
Kelas terbuka untuk Umum Training for Trainer Coding For Kids (Offline dan Online)

▶️ Pelaksanaan Bulan September
▶️ Investasi hanya 149k
▶️ Fasilitas Sertifikat, Modul Pembelajaran, etc

Ayo Booking Seat dari Sekarang juga
<strong>Kuota Terbatas !!!</strong>

Konsultasi Gratis, hubungi kami ⬇️
Pusat Informasi:
▶️ WhatsApp : 082373222040
▶️ Email : info@berandadigital.net', 'published', '2023-06-27 11:11:59', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(5, 8, 1, 'Pelatihan Coding for Kids, belajar Coding mudah dan menyenangkan', 'coding4kids2023-6a858c1f6e3ce', '/images/FlyerCoding-for-Kids2023-scaled.jpg', '...', '<img class="aligncenter wp-image-2612 size-full" src="http://berandadigital.net/wp-content/uploads/2023/09/FlyerCoding-for-Kids2023-scaled.jpg" alt="" width="2048" height="2048" />

Undangan Mengikuti Pelatihan Coding for Kids 2023

Hello Sobat Ralenta! Mari tingkatkan skill digital kamu dengan belajar coding yang mudah dan menyenangjan bersama Ralenta Learning Center

🗓️ Schedule :
Pendaftaran : 29 Agustus - 15 September 2023
Training : 16 September 2023

Narasumber:
🧑🏻‍🏫 Septa Ryan Hidayat
▶️ Project Manager CV Beranda Teknologi Digital
▶️ Software Engineer
▶️ Trainer RLC

Kapan Pelaksanaan?
📆 Sabtu, 16 September 2023
🕗 08.00 - 11.30 WIB
🛜 Aula SIT Robbani Ogan Ilir

📌 Syarat dan Ketentuan :
1. Mengisi form pendaftran pada link s.id/coding4kids-rlc
2. Membayar biaya pendafaran senilai Rp. 149. 000
3. Konfirmasi ke WhatsApp 082181898916

✨ Benefit:
1. Sertifikat
2. Ilmu yang bermanfaat
3. Snack
4. Belajar Coding Mudah dan Menyenangkan
5. Ruang Training ber-AC
6. Networking
7. Reward untuk peserta terbaik

Ayo Booking Seat dari Sekarang juga
KUOTA TERBATAS hanya untuk 30 orang!
-----------------------------------------------
Info lebih lanjut hubungi nomor berikut 082181898916 (Admin RLC)

#codingforkids
#pelatihancodingmudah
#semuabisacoding', 'published', '2023-09-01 14:19:51', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(6, 10, 1, 'Pelatihan Website Desa dan Aplikasi Administrasi Surat Sesa Senuro Timur', 'pelatihan-website-desa-dan-aplikasi-administrasi-surat-sesa-senuro-timur-6a858c1f6f0ec', '/images/495965916_995856726093998_1582227333173346053_n.jpg', '
Telah dilaksanakan Pelatihan Website Desa dan Aplikasi Administrasi S...', '<div class="xdj266r x14z9mp xat24cr x1lziwak x1vvkbs x126k92a">
<div dir="auto"><span style="font-size: 16px;">Telah dilaksanakan Pelatihan Website Desa dan Aplikasi Administrasi Surat Desa Senuro Timur Kab. Ogan Ilir pada hari Rabu, 07 Mei 2025. Pertemuan ini dihadiri oleh Kepala Desa, Pendamping Desa dan Operator Desa yang akan mengelola Website Desa dan Aplikasi Administrasi Surat Desa.</span></div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto">Harapannya Website dan Aplikasi yang Beranda Teknologi Digital telah buat dapat dipergunakan dengan maksimal agar terciptanya layanan dan informasi Desa berbasis Digital.</div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto"><span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/websitedesa?__eep__=6&amp;__cft__[0]=AZYXWTE31wqBSh-iX6QPLKCx0frm2MDDJK-PXfWBKn0xH5nK5mFKW0IOkZzi583N4e6TfGmJFOk3yDYn5r6lxuEsBP1fkGgmUd6iph3zW_7Ylp4kmPPgfLNUXHVWtQIuFM_DZ2eXxVw9jKhkHiz6O9b1BoTD6m8SmzybWkCPJhWMgR55_Q2aS3WdcdWiio-N9bI&amp;__tn__=*NK-R">#websitedesa</a></span></div>
<div dir="auto"><span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/berandateknologidigital?__eep__=6&amp;__cft__[0]=AZYXWTE31wqBSh-iX6QPLKCx0frm2MDDJK-PXfWBKn0xH5nK5mFKW0IOkZzi583N4e6TfGmJFOk3yDYn5r6lxuEsBP1fkGgmUd6iph3zW_7Ylp4kmPPgfLNUXHVWtQIuFM_DZ2eXxVw9jKhkHiz6O9b1BoTD6m8SmzybWkCPJhWMgR55_Q2aS3WdcdWiio-N9bI&amp;__tn__=*NK-R">#berandateknologidigital</a></span></div>
</div>', 'published', '2025-05-08 10:26:55', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(7, 8, 1, 'Menciptakan Chatbot AI Sederhana dan Personal dengan Phyton: Tanpa API OpenAI, Sesuai Kebutuhan', 'menciptakan-chatbot-ai-sederhana-dan-personal-dengan-phyton-tanpa-api-openai-sesuai-kebutuhan-6a858c1f6fd0e', '/images/486603910_961047622908242_7404185485069841584_n.jpg', 'Apakah Bapak dan ibu tertarik untuk membuat chatbot AI yang dapat menjawab pertanyaan sesuai kebutuhan spesifik Bapak dan ibu, tanpa bergantung pada API eksternal seperti OpenAI?...', 'Apakah Bapak dan ibu tertarik untuk membuat chatbot AI yang dapat menjawab pertanyaan sesuai kebutuhan spesifik Bapak dan ibu, tanpa bergantung pada API eksternal seperti OpenAI?<br class="html-br" />Ini kesempatan bagi Bapak dan ibu!<br class="html-br" /><br class="html-br" />Ikuti Workshop Online intensif dari IGI Kabupaten Ogan Ilir, bekerjasama dengan Beranda Teknologi Digital:<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t5c/1/16/1f5d3.png" alt="🗓" width="16" height="16" /></span> Tanggal: 17-19 Februari 2025<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t34/1/16/23f0.png" alt="⏰" width="16" height="16" /></span> Waktu: 19:00 WIB<br class="html-br" />Klik untuk mendaftar: <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fbit.ly%2FChatbotIGIOI%3Ffbclid%3DIwZXh0bgNhZW0CMTAAYnJpZBExUGk3TW9BS1Zwd1paNVROZ3NydGMGYXBwX2lkEDIyMjAzOTE3ODgyMDA4OTIAAR7DN3IGTtLxqmNeck2LPvjywWfXkVs32OTkzZpCGEwQ7JPQZwEp3k5JklsSJA_aem_nhkESo_24GSHSqOFNbIUlg&amp;h=AT66RBQCCqjZa0N0gKRnkexB13synld9dYTBwXRxMQOHgUWDeMTyCSTO5JtutsYqhjbBTCn9SvIWVjTmgJrW85anOsC2XWIjba_NFSrccb-4fZjBnqIVtR89Oo11D8b0tHQvJFO95SuP6VycCW-y6IStbpTipw&amp;__tn__=-UK*F&amp;c[0]=AT7W_veyLyAIA2cmnU-IbTNcsu3CYgWG8IuyvtmjdhEU2KoAKQCBUDP9LLQUZ1POSReZR_RDl4yfwyxpIC5hmxBd1oAFZcCVImoyGzvWSFripzAql2q2M9La6lKps-mhW4vo0yNJsf_zZvrM6YKG--a5o2D2Po60rPuGd4RmR_P4X9g7dEFL6BXiYIUmec2xaglePFNwIiFCo44niykvl22a" target="_blank" rel="nofollow noopener noreferrer">https://bit.ly/ChatbotIGIOI</a></span><br class="html-br" />Biaya Pendaftaran<br class="html-br" />Anggota IGI= Rp. 50.000<br class="html-br" />Umum=Rp.100.000<br class="html-br" /><br class="html-br" />Rekening:<br class="html-br" />17101000722<br class="html-br" />BSB an. Septy Liana<br class="html-br" /><br class="html-br" />Fasilitas Peserta:<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/2714.png" alt="✔" width="16" height="16" /></span>E-Sertifikat 32 JP<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/2714.png" alt="✔" width="16" height="16" /></span>Materi Lengkap<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/2714.png" alt="✔" width="16" height="16" /></span>Pendampingan Intensif<br class="html-br" /><br class="html-br" />Gabung di pelatihan eksklusif ini dan pelajari cara membangun "chatbot AI mandiri" yang dapat disesuaikan dengan topik dan bidang yang Bapak dan ibu pilih! Bapak dan ibu bisa mengontrol sepenuhnya nama, data, dan jawaban chatbot Bapak dan ibu, tanpa harus menggunakan API berbayar atau platform eksternal.<br class="html-br" /><br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/tad/1/16/1f511.png" alt="🔑" width="16" height="16" /></span> Apa yang akan Bapak dan ibu pelajari?<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/2714.png" alt="✔️" width="16" height="16" /></span> Pengenalan Chatbot AI dan penerapannya di berbagai bidang<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/2714.png" alt="✔️" width="16" height="16" /></span> Cara membangun chatbot mandiri tanpa menggunakan API eksternal<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/2714.png" alt="✔️" width="16" height="16" /></span> Kustomisasi database pertanyaan dan jawaban sesuai topik<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/2714.png" alt="✔️" width="16" height="16" /></span> Teknik dan tools pengembangan chatbot yang efisien dan bebas biaya<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/2714.png" alt="✔️" width="16" height="16" /></span> Implementasi dan pengujian untuk memastikan kualitas jawaban yang akurat dan responsif<br class="html-br" /><br class="html-br" />Pelatihan ini akan dipandu langsung oleh Bapak Septa Ryan Hidayat, Software Engineer dan Project Manager di <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://l.facebook.com/l.php?u=http%3A%2F%2Fberandadigital.net%2F%3Ffbclid%3DIwZXh0bgNhZW0CMTAAYnJpZBExUGk3TW9BS1Zwd1paNVROZ3NydGMGYXBwX2lkEDIyMjAzOTE3ODgyMDA4OTIAAR6ojz4XsnlBOo0VkruySq206j5s0LO_PMA0V3DAeyY00NgLI6h66X44CsUGXw_aem_jzvTZ2QQWP2j65w-X7D44g&amp;h=AT7BJBhIo_LG3hNo0pp-hC-1aUWZ1P9BiZ5XxGgrun7SUSOT_TdULLkWSN27sfDbof_gaoDeYe9BfQcuwCo1u-yFpRBJ-DQqGvL0BVZPBxmFnxOCSKfpS5ibGPJWfcoEiQQkxaLiZKDgmEgJQFto0AiFdc5imQ&amp;__tn__=-UK*F&amp;c[0]=AT7W_veyLyAIA2cmnU-IbTNcsu3CYgWG8IuyvtmjdhEU2KoAKQCBUDP9LLQUZ1POSReZR_RDl4yfwyxpIC5hmxBd1oAFZcCVImoyGzvWSFripzAql2q2M9La6lKps-mhW4vo0yNJsf_zZvrM6YKG--a5o2D2Po60rPuGd4RmR_P4X9g7dEFL6BXiYIUmec2xaglePFNwIiFCo44niykvl22a" target="_blank" rel="nofollow noopener noreferrer">berandadigital.net.</a></span><br class="html-br" /><br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/te0/1/16/1f31f.png" alt="🌟" width="16" height="16" /></span> Jangan lewatkan kesempatan ini untuk mengeksplorasi teknologi AI dengan cara yang baru dan inovatif!<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png" alt="👉" width="16" height="16" /></span> Daftar sekarang dan siapkan diri untuk belajar cara menciptakan chatbot AI yang sepenuhnya personal! <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://bit.ly/ChatbotIGIOI?fbclid=IwZXh0bgNhZW0CMTAAYnJpZBExUGk3TW9BS1Zwd1paNVROZ3NydGMGYXBwX2lkEDIyMjAzOTE3ODgyMDA4OTIAAR5qjt38xr6EiHmfOBWQcE3HDjVnr4fcbD4mwiHG9g3QWEl2VREOJreF9x9b3A_aem_PIcGE7uqnDmbJEYUcrej5g" target="_blank" rel="nofollow noopener noreferrer">https://bit.ly/ChatbotIGIOI</a></span><br class="html-br" /><br class="html-br" /><span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj xzsf02u x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/chatbotai?__eep__=6&amp;__cft__[0]=AZYz2oYrLeujvDNSvKYn5oKFoHgUqsTA7UsP3-ELjT2yTA0T2XmliW_GdWVbPXe-XoY8LVR_xSWA1Ce9ry6vtgq1POhLbV1yAOnjgxhT4Wx98K_IhyoGpgAyyFq_ktBjVwgF3SML9eVnxJ87QoqaD4o2BVPNKZ7RAgDC4C-yByUKDdUgxDLNqFnkLMT5P2frdaY&amp;__tn__=*NK*F">#ChatbotAI</a></span> <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj xzsf02u x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/pelatihanai?__eep__=6&amp;__cft__[0]=AZYz2oYrLeujvDNSvKYn5oKFoHgUqsTA7UsP3-ELjT2yTA0T2XmliW_GdWVbPXe-XoY8LVR_xSWA1Ce9ry6vtgq1POhLbV1yAOnjgxhT4Wx98K_IhyoGpgAyyFq_ktBjVwgF3SML9eVnxJ87QoqaD4o2BVPNKZ7RAgDC4C-yByUKDdUgxDLNqFnkLMT5P2frdaY&amp;__tn__=*NK*F">#PelatihanAI</a></span> <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj xzsf02u x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/teknologi?__eep__=6&amp;__cft__[0]=AZYz2oYrLeujvDNSvKYn5oKFoHgUqsTA7UsP3-ELjT2yTA0T2XmliW_GdWVbPXe-XoY8LVR_xSWA1Ce9ry6vtgq1POhLbV1yAOnjgxhT4Wx98K_IhyoGpgAyyFq_ktBjVwgF3SML9eVnxJ87QoqaD4o2BVPNKZ7RAgDC4C-yByUKDdUgxDLNqFnkLMT5P2frdaY&amp;__tn__=*NK*F">#Teknologi</a></span> <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj xzsf02u x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/pengembanganchatbot?__eep__=6&amp;__cft__[0]=AZYz2oYrLeujvDNSvKYn5oKFoHgUqsTA7UsP3-ELjT2yTA0T2XmliW_GdWVbPXe-XoY8LVR_xSWA1Ce9ry6vtgq1POhLbV1yAOnjgxhT4Wx98K_IhyoGpgAyyFq_ktBjVwgF3SML9eVnxJ87QoqaD4o2BVPNKZ7RAgDC4C-yByUKDdUgxDLNqFnkLMT5P2frdaY&amp;__tn__=*NK*F">#PengembanganChatbot</a></span> <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj xzsf02u x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/ai?__eep__=6&amp;__cft__[0]=AZYz2oYrLeujvDNSvKYn5oKFoHgUqsTA7UsP3-ELjT2yTA0T2XmliW_GdWVbPXe-XoY8LVR_xSWA1Ce9ry6vtgq1POhLbV1yAOnjgxhT4Wx98K_IhyoGpgAyyFq_ktBjVwgF3SML9eVnxJ87QoqaD4o2BVPNKZ7RAgDC4C-yByUKDdUgxDLNqFnkLMT5P2frdaY&amp;__tn__=*NK*F">#AI</a></span> <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj xzsf02u x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/innovation?__eep__=6&amp;__cft__[0]=AZYz2oYrLeujvDNSvKYn5oKFoHgUqsTA7UsP3-ELjT2yTA0T2XmliW_GdWVbPXe-XoY8LVR_xSWA1Ce9ry6vtgq1POhLbV1yAOnjgxhT4Wx98K_IhyoGpgAyyFq_ktBjVwgF3SML9eVnxJ87QoqaD4o2BVPNKZ7RAgDC4C-yByUKDdUgxDLNqFnkLMT5P2frdaY&amp;__tn__=*NK*F">#Innovation</a></span> <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj xzsf02u x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/belajarai?__eep__=6&amp;__cft__[0]=AZYz2oYrLeujvDNSvKYn5oKFoHgUqsTA7UsP3-ELjT2yTA0T2XmliW_GdWVbPXe-XoY8LVR_xSWA1Ce9ry6vtgq1POhLbV1yAOnjgxhT4Wx98K_IhyoGpgAyyFq_ktBjVwgF3SML9eVnxJ87QoqaD4o2BVPNKZ7RAgDC4C-yByUKDdUgxDLNqFnkLMT5P2frdaY&amp;__tn__=*NK*F">#BelajarAI</a></span>', 'published', '2025-02-05 10:31:55', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(8, 10, 1, 'Online Training of Trainer Coding for Kids', 'online-training-of-trainer-coding-for-kids-6a858c1f70938', '/images/485185738_958093913203613_4067422706425259653_n.jpg', 'Hallo Bapak Ibu Guru dan orang tua di seluruh Indonesia, ingin menjadi pelatih bagi murid-murid atau anak sendiri agar memiliki kemampuan coding?...', 'Hallo Bapak Ibu Guru dan orang tua di seluruh Indonesia, ingin menjadi pelatih bagi murid-murid atau anak sendiri agar memiliki kemampuan coding?<br class="html-br" /><br class="html-br" />Pelatihan ini mengenalkan dasar _coding_ yang mudah dipelajari oleh anak-anak sehingga mereka mampu untuk membuat karya digital berupa *_story, animasi, hingga game._*. Sangat bermanfaat bagi orang tua atau guru _Pembina Ekstrakurikuler TIK/ Digital_.<br class="html-br" /><br class="html-br" />**Ikatan Guru Indonesia Kabupaten Ogan Ilir** bekerja sama dengan **Beranda Teknologi Digital** mengadakan :<br class="html-br" /><br class="html-br" />_Training of Trainer_<br class="html-br" />*_Coding for Kids 2023_*<br class="html-br" /><br class="html-br" />*Apa yang akan di pelajari pada materi ini ?*<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t7a/1/16/31_20e3.png" alt="1️⃣" width="16" height="16" /></span> Apa itu _Coding_<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t99/1/16/32_20e3.png" alt="2️⃣" width="16" height="16" /></span> _Coding_ untuk Tenaga Pengajar<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/tb8/1/16/33_20e3.png" alt="3️⃣" width="16" height="16" /></span> Praktik Penggunaan Program _Coding for Kids_<br class="html-br" /><br class="html-br" />*Siapa Pemateri dalam Kegiatan ini ?*<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t8a/1/16/1f9d1_1f3fb_200d_1f3eb.png" alt="🧑🏻‍🏫" width="16" height="16" /></span> *Septa Ryan Hidayat*<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t40/1/16/25b6.png" alt="▶️" width="16" height="16" /></span> _Project Manager CV Beranda Teknologi Digital_<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t40/1/16/25b6.png" alt="▶️" width="16" height="16" /></span> _Software Engineer_<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t40/1/16/25b6.png" alt="▶️" width="16" height="16" /></span> _Dewan Pakar IGI Ogan Ilir_<br class="html-br" /><br class="html-br" />*Kapan Pelaksanaan?*<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/tff/1/16/1f4c6.png" alt="📆" width="16" height="16" /></span> Sabtu - Selasa, 28-31 Oktober 2023<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/tcd/1/16/1f6dc.png" alt="🛜" width="16" height="16" /></span> Grup Telegram<br class="html-br" /><br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t3e/1/16/1f50a.png" alt="🔊" width="16" height="16" /></span> _*Kelas terbuka untuk Guru dan Umum* Training for Trainer *Coding For Kids*_<br class="html-br" /><br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t40/1/16/25b6.png" alt="▶️" width="16" height="16" /></span> Investasi hanya *35k* untuk anggota IGI dan *50k* untuk non anggota IGI.<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t40/1/16/25b6.png" alt="▶️" width="16" height="16" /></span> Fasilitas _Sertifikat, Modul Pembelajaran, etc_<br class="html-br" /><br class="html-br" />Ayo *_Booking Seat_* dari Sekarang juga<br class="html-br" />*Kuota Terbatas !!!*<br class="html-br" /><br class="html-br" />_Pendaftaran_, hubungi <span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t20/1/16/2b07.png" alt="⬇️" width="16" height="16" /></span><br class="html-br" />*Pusat Informasi:*<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t40/1/16/25b6.png" alt="▶️" width="16" height="16" /></span> <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="http://s.id/Coding4KidsIGI?fbclid=IwZXh0bgNhZW0CMTAAYnJpZBExUGk3TW9BS1Zwd1paNVROZ3NydGMGYXBwX2lkEDIyMjAzOTE3ODgyMDA4OTIAAR55FaTnf5wRhVcvZ8jYSE3pe4VZHkTKmp2dS1-dKhG6YP05BBjpl-BHuN8Kdg_aem_5QJay6VpgTN7ZiA7iq985A" target="_blank" rel="nofollow noopener noreferrer">s.id/Coding4KidsIGI</a></span><br class="html-br" /><br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t40/1/16/25b6.png" alt="▶️" width="16" height="16" /></span> Email :<br class="html-br" />info@berandadigital.net<br class="html-br" /><br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t40/1/16/25b6.png" alt="▶️" width="16" height="16" /></span> Website :<br class="html-br" /><span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="http://www.berandadigital.net/?fbclid=IwZXh0bgNhZW0CMTAAYnJpZBExUGk3TW9BS1Zwd1paNVROZ3NydGMGYXBwX2lkEDIyMjAzOTE3ODgyMDA4OTIAAR7DN3IGTtLxqmNeck2LPvjywWfXkVs32OTkzZpCGEwQ7JPQZwEp3k5JklsSJA_aem_nhkESo_24GSHSqOFNbIUlg" target="_blank" rel="nofollow noopener noreferrer">www.berandadigital.net</a></span><br class="html-br" /><span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="http://www.igi-oi.com/?fbclid=IwZXh0bgNhZW0CMTAAYnJpZBExUGk3TW9BS1Zwd1paNVROZ3NydGMGYXBwX2lkEDIyMjAzOTE3ODgyMDA4OTIAAR7r63VKkcRG8LAJ6zeArvU3_Oobabe0hbQXv2WpM_iRUBpeyD_5axjZHjmnRQ_aem_jDgOSiC9rMOywP3xS2_toA" target="_blank" rel="nofollow noopener noreferrer">www.igi-oi.com</a></span>', 'published', '2023-10-26 10:33:59', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(9, 8, 1, 'Optimalisasi Peran Guru, Tenaga Kependidikan, dan Tim Kreatif, melalui pemanfaatan AI dan Coding SIT Robbani Ogan Ilir', 'optimalisasi-peran-guru-tenaga-kependidikan-dan-tim-kreatif-melalui-pemanfaatan-ai-dan-coding-sit-robbani-ogan-ilir-6a858c1f71569', '/images/561378805_1119891467023856_3474954454940095689_n.jpg', '






...', '<div>
<div>
<div class="x1yztbdb x1n2onr6 xh8yej3 x1ja2u2z">
<div class="x1n2onr6 x1ja2u2z">
<div>
<div>
<div class="x1a2a7pz" aria-posinset="8">
<div class="x78zum5 xdt5ytf" data-virtualized="false">
<div class="x9f619 x1n2onr6 x1ja2u2z">
<div class="html-div xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x78zum5 x1n2onr6 xh8yej3">
<div class="x1n2onr6 x1ja2u2z x1jx94hy xw5cjc7 x1dmpuos x1vsv7so xau1kf4 x9f619 xh8yej3 x6ikm8r x10wlt62 xquyuld">
<div>
<div class="html-div xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl">
<div class="html-div xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl">
<div class="html-div xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl">
<div class="html-div xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl">
<div class="html-div xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl" dir="auto">
<div class="html-div xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl" data-ad-rendering-role="story_message">
<div class="x1l90r2v x1iorvi4 x1g0dm76 xpdmqnj" data-ad-comet-preview="message" data-ad-preview="message">
<div class="x78zum5 xdt5ytf xz62fqu x16ldp7u">
<div class="xu06os2 x1ok221b">
<div class="html-div xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl">
<div class="xdj266r x14z9mp xat24cr x1lziwak x1vvkbs x126k92a">
<div dir="auto">Saatnya Upgrade Skill, Belajar Bareng, berkembang bareng!</div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto"><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t69/1/16/1f331.png" alt="🌱" width="16" height="16" /></span> PELATIHAN CODING DAN AI</div>
<div dir="auto">Optimalisasi Peran Guru, Tenaga Kependidikan, dan Tim Kreatif, melalui pemanfaatan AI dan Coding</div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto">SIT Robbani Ogan Ilir Bersama Beranda Teknologi Digital ngajak kamu untuk belajar cara cerdas dengan bantuan teknologi dan pastinya ini bermanfaat banget untuk mendukung profesimu</div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto">Bersama :</div>
<div dir="auto"><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/ta/1/16/1f464.png" alt="👤" width="16" height="16" /></span>Septa Ryan Hidayat (Direktur Utama CV. Beranda Teknologi Digital, Kepala Bidang IT Yayasan Generasi Robbani)</div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto">Insya Allah akan dilaksanakan pada:</div>
<div dir="auto"><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t5c/1/16/1f5d3.png" alt="🗓" width="16" height="16" /></span> Hari, tanggal : Sabtu, 18 Oktober 2025</div>
<div dir="auto"><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/tb0/1/16/1f558.png" alt="🕘" width="16" height="16" /></span> Waktu : 07.30 - 12.00 WIB</div>
<div dir="auto"><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t28/1/16/1f3eb.png" alt="🏫" width="16" height="16" /></span> Tempat : Aula SDIT Robbani</div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto">Note:</div>
<div dir="auto">- Membawa Laptop/Tablet + Charger masing-masing</div>
<div dir="auto">- membawa terminal jika diperlukan</div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto"><span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/coding?__eep__=6&amp;__cft__[0]=AZaF0c5RUSN6F1TdESPZB9h5Pe0zZ6mvbpwlJnAlTeJrROnfaVFP9R-ZUPoSYYJzjKgm_pdBUcpXmRyhL7--F0s2tlo9rIjoF4Ow1HZ-Qm0VX6H1cL6nKNg8Ktbwghebohs3FvYIBdXfAf_ta47HaYByOeGKEhdqrEs7akiI7DsAq3GRukLLqFFZ-ZlWjrHBMUc&amp;__tn__=*NK-R">#Coding</a></span>&amp;AI <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/sitrobbani?__eep__=6&amp;__cft__[0]=AZaF0c5RUSN6F1TdESPZB9h5Pe0zZ6mvbpwlJnAlTeJrROnfaVFP9R-ZUPoSYYJzjKgm_pdBUcpXmRyhL7--F0s2tlo9rIjoF4Ow1HZ-Qm0VX6H1cL6nKNg8Ktbwghebohs3FvYIBdXfAf_ta47HaYByOeGKEhdqrEs7akiI7DsAq3GRukLLqFFZ-ZlWjrHBMUc&amp;__tn__=*NK-R">#SITRobbani</a></span> <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/berandateknologidigital?__eep__=6&amp;__cft__[0]=AZaF0c5RUSN6F1TdESPZB9h5Pe0zZ6mvbpwlJnAlTeJrROnfaVFP9R-ZUPoSYYJzjKgm_pdBUcpXmRyhL7--F0s2tlo9rIjoF4Ow1HZ-Qm0VX6H1cL6nKNg8Ktbwghebohs3FvYIBdXfAf_ta47HaYByOeGKEhdqrEs7akiI7DsAq3GRukLLqFFZ-ZlWjrHBMUc&amp;__tn__=*NK-R">#berandateknologidigital</a></span> <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/sekolahdigital?__eep__=6&amp;__cft__[0]=AZaF0c5RUSN6F1TdESPZB9h5Pe0zZ6mvbpwlJnAlTeJrROnfaVFP9R-ZUPoSYYJzjKgm_pdBUcpXmRyhL7--F0s2tlo9rIjoF4Ow1HZ-Qm0VX6H1cL6nKNg8Ktbwghebohs3FvYIBdXfAf_ta47HaYByOeGKEhdqrEs7akiI7DsAq3GRukLLqFFZ-ZlWjrHBMUc&amp;__tn__=*NK-R">#SekolahDigital</a></span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>', 'published', '2025-10-10 10:20:08', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(10, 10, 1, 'Inovasi Pembelajaran berbasis Koding dan AI dalam kerangka penguatan kelembagaan sekolah untuk tenaga pendidik di satuan SD dan SMP di Kab. OKU Timur', 'inovasi-pembelajaran-berbasis-koding-dan-ai-dalam-kerangka-penguatan-kelembagaan-sekolah-untuk-tenaga-pendidik-di-satuan-sd-dan-smp-di-kab-oku-timur-6a858c1f721d7', '/images/545410148_1090108853335451_8582489098678183559_n.jpg', 'Dinas Pendidikan OKU Timur dan Beranda Teknologi Digital bekerjasama Mengadakan Pelatihan Coding &amp; AIPelatihan ini memiliki tema yai...', 'Dinas Pendidikan OKU Timur dan Beranda Teknologi Digital bekerjasama Mengadakan Pelatihan Coding &amp; AI<br class="html-br" /><br class="html-br" />Pelatihan ini memiliki tema yaitu Inovasi Pembelajaran berbasis Koding dan AI dalam kerangka penguatan kelembagaan sekolah untuk tenaga pendidik di satuan SD dan SMP di Kab. OKU Timur.<br class="html-br" /><br class="html-br" />Dengan Narasumber:<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/ta/1/16/1f464.png" alt="👤" width="16" height="16" /></span>Septa Ryan Hidayat (Direktur Utama CV. Beranda Teknologi Digital)<br class="html-br" /><br class="html-br" />Insya Allah akan dilaksanakan pada:<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t5c/1/16/1f5d3.png" alt="🗓️" width="16" height="16" /></span> Hari, tanggal : Kamis, 11 September 2025<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/tb0/1/16/1f558.png" alt="🕘" width="16" height="16" /></span> Waktu : 09.00 - 16.00 WIB<br class="html-br" /><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t28/1/16/1f3eb.png" alt="🏫" width="16" height="16" /></span> Tempat : Hotel Majestic Palembang<br class="html-br" /><br class="html-br" />Belajar Coding?<br class="html-br" />Asyik dan Menyenangkan<br class="html-br" /><br class="html-br" /><span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj xzsf02u x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/coding?__eep__=6&amp;__tn__=*NK*F">#Coding</a></span>&amp;AI<br class="html-br" /><span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj xzsf02u x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/berandateknologidigital?__eep__=6&amp;__tn__=*NK*F">#berandateknologidigital</a></span>', 'published', '2025-09-07 10:24:37', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(11, 8, 1, 'Memasuki Era Baru: The Era of Vibe Coding!', 'memasuki-era-baru-the-era-of-vibe-coding-6a858c1f72e0e', '/images/631476506_1210308331315502_7735877304621369529_n.jpg', '
Teknologi AI kini bukan lagi sekadar wacana, melainkan alat nyata unt...', '<div class="xdj266r x14z9mp xat24cr x1lziwak x1vvkbs x126k92a">
<div dir="auto"><span style="font-size: 16px;">Teknologi AI kini bukan lagi sekadar wacana, melainkan alat nyata untuk menciptakan solusi digital tanpa harus mahir menulis baris kode.</span></div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto"></div>
<div dir="auto">Kami dari CV. Beranda Teknologi Digital merasa terhormat mendapatkan kesempatan untuk berbagi ilmu di Politeknik Akamigas Palembang.</div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto"></div>
<div dir="auto">Direktur Utama kami, Septa Ryan Hidayat, akan mengupas tuntas bagaimana pemanfaatan AI dapat mengakselerasi pengembangan aplikasi pembelajaran dan manajemen informasi secara efisien.</div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto"><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t2d/1/16/1f4cd.png" alt="📍" width="16" height="16" /></span> Lokasi: Politeknik Akamigas Palembang</div>
<div dir="auto"><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t7e/1/16/1f4c5.png" alt="📅" width="16" height="16" /></span> Waktu: Rabu, 11 Februari 2026</div>
<div dir="auto"><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t2f/1/16/1f557.png" alt="🕗" width="16" height="16" /></span> Jam: 08.30 WIB - Selesai</div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto">Mari kita eksplorasi bersama bagaimana AI memudahkan pekerjaan kita di masa depan.</div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto"><span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/berandateknologidigital?__eep__=6&amp;__cft__[0]=AZY4ERumgpjI0wSZ3BWW4UT56-iZUr6cczqgke3-A1T5Lu3_qxTTs_jQxGKBSIvxeCHpIGeiI8NlL_VS_Go5pUtgYntX4QMFLgYKHRnLScwf_tnl71hGASJW3J7kTYzoo-YhD8lqC8iQ4sEq7cMMnjGJEidbrl38-lMT5Fe7MOedSorre4gwdbVv_zhPpyGkSqc&amp;__tn__=*NK-R">#BerandaTeknologiDigital</a></span> <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/digitaltransformation?__eep__=6&amp;__cft__[0]=AZY4ERumgpjI0wSZ3BWW4UT56-iZUr6cczqgke3-A1T5Lu3_qxTTs_jQxGKBSIvxeCHpIGeiI8NlL_VS_Go5pUtgYntX4QMFLgYKHRnLScwf_tnl71hGASJW3J7kTYzoo-YhD8lqC8iQ4sEq7cMMnjGJEidbrl38-lMT5Fe7MOedSorre4gwdbVv_zhPpyGkSqc&amp;__tn__=*NK-R">#DigitalTransformation</a></span> <span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/politeknikakamigaspalembang?__eep__=6&amp;__cft__[0]=AZY4ERumgpjI0wSZ3BWW4UT56-iZUr6cczqgke3-A1T5Lu3_qxTTs_jQxGKBSIvxeCHpIGeiI8NlL_VS_Go5pUtgYntX4QMFLgYKHRnLScwf_tnl71hGASJW3J7kTYzoo-YhD8lqC8iQ4sEq7cMMnjGJEidbrl38-lMT5Fe7MOedSorre4gwdbVv_zhPpyGkSqc&amp;__tn__=*NK-R">#PoliteknikAkamigasPalembang</a></span></div>
</div>', 'published', '2026-02-09 10:39:15', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(12, 10, 1, 'Lecturer Development Program 2026', 'lecturer-development-program-2026-6a858c1f73ab0', '/images/626271180_17940187239113665_1282635413631214268_n.jpg', '
Pelatihan Pemanfaatan Artificial Intelligence (AI) untuk pembuatan aplikasi yang praktis dan profesi...', '<div class="xdj266r x14z9mp xat24cr x1lziwak x1vvkbs x126k92a">
<div dir="auto">Pelatihan Pemanfaatan Artificial Intelligence (AI) untuk pembuatan aplikasi yang praktis dan profesional tanpa coding, khusus bagi Dosen Politeknik Akamigas Palembang.</div>
</div>
<div class="x14z9mp xat24cr x1lziwak x1vvkbs xtlvy1s x126k92a">
<div dir="auto">Mendorong inovasi pembelajaran, meningkatkan kompetensi digital, dan menjawab tantangan pendidikan di era transformasi teknologi.</div>
<div dir="auto">.</div>
<div dir="auto"><span class="html-span xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xm2jcoa x1mpyi22 xxymvpz xlup9mm x1kky2od"><img class="xz74otr x15mokao x1ga7v0g x16uus16 xbiv7yw" src="https://static.xx.fbcdn.net/images/emoji.php/v9/tc6/1/16/1f680.png" alt="🚀" width="16" height="16" /></span> Upgrade skill dosen, wujudkan pembelajaran masa depan</div>
<div dir="auto">.</div>
<div dir="auto"><span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/ldp?__eep__=6&amp;__cft__[0]=AZYocO_fHVbADi5fj3DjttY1dyLQXU8W0Y2mHvJ-qn-_jPT6HYJEAiIM0pevFQkpWeFfobAuJdMokJ2W019jgGZUpl0BftucAEzZgcwxRIJRgt2iiVBENy1PDfSmXRS526D37DuSRSQg_YMmPNh0eN6SE7i8qaI2c1RFZOXSFceG4lt4BvIrUxwCOSHtV_rp49k&amp;__tn__=*NK-R">#ldp</a></span></div>
<div dir="auto"><span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/akamigaspalembang?__eep__=6&amp;__cft__[0]=AZYocO_fHVbADi5fj3DjttY1dyLQXU8W0Y2mHvJ-qn-_jPT6HYJEAiIM0pevFQkpWeFfobAuJdMokJ2W019jgGZUpl0BftucAEzZgcwxRIJRgt2iiVBENy1PDfSmXRS526D37DuSRSQg_YMmPNh0eN6SE7i8qaI2c1RFZOXSFceG4lt4BvIrUxwCOSHtV_rp49k&amp;__tn__=*NK-R">#akamigaspalembang</a></span></div>
<div dir="auto"><span class="html-span xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x1hl2dhg x16tdsg8 x1vvkbs"><a class="x1i10hfl xjbqb8w x1ejq31n x18oe1m7 x1sy0etr xstzfhl x972fbf x10w94by x1qhh985 x14e42zd x9f619 x1ypdohk xt0psk2 x3ct3a4 xdj266r x14z9mp xat24cr x1lziwak xexx8yu xyri2b x18d9i69 x1c1uobl x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz xkrqix3 x1sur9pj x1fey0fg x1s688f" tabindex="0" role="link" href="https://www.facebook.com/hashtag/ai?__eep__=6&amp;__cft__[0]=AZYocO_fHVbADi5fj3DjttY1dyLQXU8W0Y2mHvJ-qn-_jPT6HYJEAiIM0pevFQkpWeFfobAuJdMokJ2W019jgGZUpl0BftucAEzZgcwxRIJRgt2iiVBENy1PDfSmXRS526D37DuSRSQg_YMmPNh0eN6SE7i8qaI2c1RFZOXSFceG4lt4BvIrUxwCOSHtV_rp49k&amp;__tn__=*NK-R">#ai</a></span></div>
</div>', 'published', '2026-02-07 10:59:23', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(13, 8, 1, 'Insight Talks Bersama Kementerian Komdigi dan Media Indonesia Vol. 3 Palembang', 'insight-talks-vol-3-palembang-6a858c1f74682', '/images/Insight-Talks-Komdigi.jpeg', 'Halo Sobat Komdigi! 👋
Setelah sukses di Aceh dan NTB, rangkaian Insight Talks kini hadir di Kota Palembang! Bersama Kementerian Komunikasi dan Digital RI (Komdigi) dan Media Indone...', 'Halo Sobat Komdigi! 👋
Setelah sukses di Aceh dan NTB, rangkaian Insight Talks kini hadir di Kota Palembang! Bersama Kementerian Komunikasi dan Digital RI (Komdigi) dan Media Indonesia, kita akan mengupas tuntas tantangan dan peluang di era teknologi saat ini.

Dengan tema "Literasi Media: Cerdas di Era Kecerdasan Artifisial", acara ini bertujuan untuk memperkuat kemampuan literasi digital masyarakat dalam mendeteksi disinformasi serta memanfaatkan AI secara bijak.

📌 Detail Acara:
🗓 Hari/Tanggal: Selasa, 14 April 2026
📍 Lokasi: Hotel Harper Palembang

🎤 Keynote Speech :
* Farida Dewi Maharani (Plt. Direktur Ekosistem Media Komdigi)

👥 Narasumber &amp; Workshop :
* Rosarita Niken Widiastuti (Ketua Komisi Kemitraan, Hubungan Antar Lembaga, &amp; Infrastruktur Dewan Pers)
* Abdul Kohar (Direktur Pemberitaan Media Indonesia)
* Septa Ryan Hidayat (CEO Beranda Teknologi Digital, Pemerhati AI)

🎁 Benefit : E-Certificate, Makan Siang, &amp; Doorprise Menarik!

Mari kita bangun ketahanan informasi nasional dengan menjadi pengguna teknologi yang cerdas dan kritis. Sampai jumpa di Palembang!

#Komdigi #MediaIndonesia #InsightTalks #LiterasiDigital #ArtificialIntelligence #PalembangEvent #CerdasBer-AI', 'published', '2026-04-13 09:00:12', '2026-08-19 10:57:35', '2026-08-19 10:57:35');

-- --------------------------------------------------------
-- Data for table `projects`
-- --------------------------------------------------------

TRUNCATE TABLE `projects`;
INSERT INTO `projects` (`id`, `category_id`, `title`, `slug`, `summary`, `challenge`, `solution`, `tech_stack`, `client_name`, `project_url`, `thumbnail`, `gallery`, `is_featured`, `order`, `created_at`, `updated_at`, `features`, `app_type`, `status_badge`) VALUES
(1, 1, 'Website Enterprise & Portal Company Profile', 'portal-layanan-pembuatan-website-enterprise', 'Solusi website korporat berkecepatan tinggi dengan desain modern bento grid, CMS fleksibel, dan optimasi SEO Google standar industri.', 'Kebutuhan website bisnis modern dengan desain cepat, optimasi kecepatan, dan keamanan data.', 'Arsitektur website Laravel 13 & PHP 8.4 terhubung dengan CMS admin instan dan integrasi WhatsApp.', '["Laravel 13","PHP 8.4","MySQL","Tailwind CSS","Alpine.js"]', 'CV. Beranda Teknologi Digital', 'https://berandadigital.net', '/images/products/enterprise-web-mockup.jpg', '["\\/preview\\/screencapture-berandadigital-net-2026-08-19-17_31_05.png"]', 1, 1, '2026-08-19 10:57:35', '2026-08-30 11:56:44', NULL, 'web', NULL),
(2, 2, 'Portal Sekolah, E-Learning & PPDB Online Terpadu', 'jasa-pembuatan-aplikasi-mobile-android-ios', 'Sistem informasi akademik all-in-one untuk registrasi siswa baru (PPDB Online), pengumuman kelulusan, dan raport digital terintegrasi WhatsApp.', 'Pengembangan aplikasi mobile dua platform (Android & iOS) sering memakan waktu dan biaya tinggi.', 'Solusi Flutter tunggal terhubung ke backend Laravel dengan fitur offline-first dan geolokalasi.', '["Flutter","RESTful API","Laravel","Firebase FCM"]', 'Lembaga Pendidikan & Sekolah Mitra', 'https://berandadigital.net', '/images/products/school-portal-mockup.jpg', '["\\/preview\\/screencapture-berandadigital-net-layanan-2026-08-19-17_52_22.png"]', 1, 2, '2026-08-19 10:57:35', '2026-08-30 11:56:44', NULL, 'web', NULL),
(3, 4, 'Sistem Informasi Desa Digital (Smart Village)', 'sistem-informasi-administrasi-surating-desa-digital', 'Platform digitalisasi desa untuk cetak mandiri 30+ surat resmi desa, otentikasi tanda tangan QR Code, dan database kependudukan terpadu.', 'Pelayanan pengurusan surat administrasi desa membutuhkan waktu lama karena pencatatan arsip fisik yang manual.', 'Beranda Teknologi Digital membangun portal web desa responsif terhubung dengan generator surat otomatis berbasis QR Code verifikasi.', '["Laravel 13","PHP 8.4","MySQL","Tailwind CSS"]', 'Pemerintah Desa Senuro Timur, Ogan Ilir', 'https://berandadigital.net', '/images/products/smart-village-mockup.jpg', '["\\/images\\/surat.png","\\/images\\/ss-asalam.png"]', 1, 3, '2026-08-19 10:57:35', '2026-08-30 11:56:44', NULL, 'web', NULL),
(4, 1, 'Jasa Pembuatan Website & Campaign Digital Publik / Leader', 'jasa-pembuatan-website-campaign-digital', 'Platform portal informasi, video profil, dan campaign digital publik dengan sistem interaktif.', 'Membangun branding publik yang transparan dan cepat diakses oleh seluruh lapisan masyarakat.', 'Portal web responsif dengan integrasi galeri video, jadwal kegiatan, dan form aspirasi.', '["Laravel","Tailwind CSS","MySQL"]', 'Public Leader & Agency Partner', 'https://berandadigital.net', '/preview/screencapture-berandadigital-net-jasa-website-caleg-2026-08-19-17_54_34.png', NULL, 0, 4, '2026-08-19 10:57:35', '2026-08-19 10:57:35', NULL, 'web', NULL),
(5, 11, 'Website SMAIT Ishlahul Ummah Prabumulih', 'website-smait-ishlahul-ummah-prabumulih', 'Website profil institusi pendidikan Islam terpadu dengan portal berita sekolah, data guru berprestasi, dan agenda kegiatan terpadu.', 'Kebutuhan media informasi resmi sekolah yang kredibel untuk publikasi prestasi dan pengumuman bagi orang tua siswa.', 'Beranda Digital merancang website responsif dan cepat dengan dashboard publikasi berita dan integrasi media sosial sekolah.', '["WordPress \\/ Laravel","PHP","Tailwind CSS","MySQL"]', 'SMAIT Ishlahul Ummah Prabumulih', 'https://berandadigital.net', '/images/products/enterprise-web-mockup.jpg', '[{"url":"\\/images\\/products\\/enterprise-web-mockup.jpg","title":"Halaman Depan & Profil SMAIT Ishlahul Ummah","type":"web","caption":"Antarmuka profil sekolah modern dan pengumuman siswa"},{"url":"\\/images\\/portofolio-web-1.webp","title":"Tata Letak Responsif & Berita","type":"web","caption":"Katalog pengumuman agenda dan artikel guru"}]', 0, 5, '2026-08-30 12:10:32', '2026-08-30 12:10:32', '["Profil sekolah lengkap & struktur tenaga pengajar","Portal publikasi berita, artikel, dan galeri kegiatan","Desain modern, mobile-friendly, dan teroptimasi SEO"]', 'web', '🟢 Terimplementasi'),
(6, 11, 'Website Dompet Sosial Robbani Peduli (DSRP)', 'website-dompet-sosial-robbani-peduli', 'Portal filantropi dan lembaga amil zakat untuk penyaluran bantuan, donasi online, dan laporan transparansi program sosial.', 'Memfasilitasi donatur untuk menyalurkan infaq, shadaqah, dan zakat secara digital dengan transparansi rekap dana.', 'Pengembangan portal donasi terintegrasi dengan penghitungan kalkulator zakat dan laporan audit bantuan.', '["Laravel","PHP","MySQL","Tailwind CSS"]', 'Dompet Sosial Robbani Peduli (DSRP)', 'https://berandadigital.net', '/images/portofolio-web-1.webp', '[{"url":"\\/images\\/portofolio-web-1.webp","title":"Portal Program Donasi DSRP","type":"web","caption":"Tampilan kampanye program peduli sosial dan zakat"}]', 0, 6, '2026-08-30 12:10:32', '2026-08-30 12:10:32', '["Kalkulator zakat & kanal donasi program kemanusiaan","Laporan real-time perolehan dana & transparansi penyaluran","Integrasi notifikasi konfirmasi donasi via WhatsApp"]', 'web', '🟢 Terimplementasi'),
(7, 11, 'Website Toko Online robbanimart.com', 'website-toko-online-robbanimart', 'Platform toko online e-commerce minimarket syariah untuk penyediaan produk halal, kebutuhan harian, dan sembako terjangkau.', 'Digitalisasi katalog penjualan toko fisik agar anggota koperasi dan masyarakat dapat berbelanja secara daring.', 'Website e-commerce katalog produk dengan sistem keranjang belanja praktis dan konfirmasi pesanan via WhatsApp.', '["Laravel","MySQL","Tailwind CSS","WhatsApp API"]', 'Koperasi Konsumen Pegawai Robbani', 'https://berandadigital.net', '/images/portofolio-web-1.webp', '[{"url":"\\/images\\/portofolio-web-1.webp","title":"Katalog Produk Robbanimart","type":"web","caption":"Etalase produk halal dan sembako online"}]', 0, 7, '2026-08-30 12:10:32', '2026-08-30 12:10:32', '["Katalog produk halal terorganisir per kategori","Sistem keranjang belanja & hitung ongkos kirim instan","Checkout cepat terhubung langsung ke kasir WhatsApp"]', 'web', '🟢 Terimplementasi'),
(8, 11, 'Website PPDB SIT As Salaam Jayapura Papua', 'website-ppdb-sit-as-salaam-jayapura-papua', 'Sistem portal pendaftaran peserta didik baru (PPDB Online) multi-jenjang dari PAUD IT, SD IT, hingga SMP IT As Salaam Boarding School di Jayapura, Papua.', 'Pendaftaran calon siswa baru dari berbagai distrik di Papua membutuhkan sistem online yang mudah diakses tanpa kendala jaringan.', 'Aplikasi web PPDB mandiri dengan alur bertahap, upload berkas persyaratan, dan cetak bukti registrasi PDF otomatis.', '["Laravel","PHP","MySQL","PDF Engine"]', 'Yayasan As-Salam Papua (Jayapura)', 'https://berandadigital.net', '/images/ppdb.png', '[{"url":"\\/images\\/ppdb.png","title":"Portal Pendaftaran PPDB SIT As-Salaam Papua","type":"web","caption":"Pilihan jenjang PAUD, SD, dan SMP Boarding School Jayapura"},{"url":"\\/images\\/ss-asalam.png","title":"Dashboard Verifikasi Berkas Calon Siswa","type":"web","caption":"Manajemen data pendaftaran panitia PPDB"}]', 0, 8, '2026-08-30 12:10:32', '2026-08-30 12:10:32', '["Multi-jenjang: PAUD IT, SD IT, dan SMP IT Boarding School","Pendaftaran gelombang online dengan verifikasi administrasi","Cetak nomor ujian dan kartu pendaftaran resmi ber-barcode"]', 'web', '🟢 Terimplementasi'),
(9, 11, 'Website Kampus Sehat Universitas Sriwijaya', 'website-kampus-sehat-universitas-sriwijaya', 'Portal program edukasi kesehatan kampus dan inisiatif Germas bagi sivitas akademika Universitas Sriwijaya.', 'Sosialisasi program kesehatan, perilaku hidup sehat, dan publikasi agenda rektorat bidang kesehatan mahasiswa.', 'Website portal resmi Kampus Sehat Unsri dengan sambutan rektorat, artikel gizi/kesehatan, dan info layanan klinik.', '["Laravel","MySQL","Tailwind CSS"]', 'Universitas Sriwijaya (Unsri)', 'https://berandadigital.net', '/images/portofolio-web-1.webp', '[{"url":"\\/images\\/portofolio-web-1.webp","title":"Portal Kampus Sehat Unsri","type":"web","caption":"Edukasi kesehatan sivitas akademika Universitas Sriwijaya"}]', 0, 9, '2026-08-30 12:10:32', '2026-08-30 12:10:32', '["Sambutan pimpinan rektorat & panduan gaya hidup sehat","Koleksi artikel kesehatan, video edukasi, dan webinar","Direktori layanan fasilitas kesehatan kampus Unsri"]', 'web', '🟢 Terimplementasi'),
(10, 11, 'Website Ikatan Guru Indonesia (IGI) Ogan Ilir', 'website-ikatan-guru-indonesia-ogan-ilir', 'Portal organisasi resmi Ikatan Guru Indonesia daerah Ogan Ilir untuk pendaftaran anggota guru dan publikasi workshop peningkatan kompetensi.', 'Pendataan anggota guru di seluruh kecamatan dan penyebaran informasi sertifikasi serta pelatihan IT pendidik.', 'Website organisasi guru dengan sistem pendaftaran keanggotaan, agenda seminar pendidikan, dan unduh sertifikat.', '["Laravel","MySQL","Tailwind CSS"]', 'IGI Ogan Ilir', 'https://berandadigital.net', '/images/portofolio-web-1.webp', '[{"url":"\\/images\\/portofolio-web-1.webp","title":"Portal Informasi IGI Ogan Ilir","type":"web","caption":"Publikasi kegiatan guru dan workshop pendidikan"}]', 0, 10, '2026-08-30 12:10:32', '2026-08-30 12:10:32', '["Pendaftaran dan validasi kartu tanda anggota (KTA) digital","Informasi agenda seminar, workshop IT & pelatihan kurikulum","Galeri dokumentasi kegiatan guru se-Kabupaten Ogan Ilir"]', 'web', '🟢 Terimplementasi'),
(11, 12, 'Aplikasi Mobile Absensi Pegawai (Siabs BTD)', 'aplikasi-mobile-absensi-pegawai-siabs', 'Aplikasi mobile Android untuk pencatatan kehadiran karyawan berbasis jam kerja nyata, deteksi waktu presisi, dan rekapan kehadiran bulanan.', 'Pencatatan absensi manual sering rentan manipulasi dan menyulitkan rekapitulasi penggajian HRD.', 'Aplikasi Android native/Flutter dengan tombol one-tap absen masuk & absen pulang serta dashboard rekap status bulanan.', '["Flutter","Android Native","REST API","MySQL"]', 'CV. Beranda Teknologi Digital & Mitra Bisnis', 'https://berandadigital.net', '/images/products/enterprise-web-mockup.jpg', '[{"url":"\\/images\\/products\\/enterprise-web-mockup.jpg","title":"Antarmuka Siabs Mobile App","type":"mobile","caption":"Tampilan tombol absen masuk, absen pulang, dan indikator kehadiran"}]', 0, 11, '2026-08-30 12:10:32', '2026-08-30 12:10:32', '["Absen masuk & absen pulang cepat dalam hitungan detik","Rekapitulasi bulanan: jumlah Hadir, Izin, Sakit, dan Terlambat","Riwayat log absensi realtime tersinkronisasi ke database"]', 'mobile', '📱 Mobile App'),
(12, 12, 'Aplikasi Mobile ARSI App (Robbani Student Info)', 'aplikasi-mobile-arsi-student-information', 'Aplikasi mobile Android untuk portal informasi siswa, jadwal kelas, tabungan siswa, dan pembayaran SPP sekolah secara digital.', 'Orang tua siswa kesulitan memantau perkembangan nilai, absensi, dan tagihan SPP anak di sekolah.', 'Aplikasi mobile terpadu dengan autentikasi akun wali murid, notifikasi tagihan SPP, dan rincian tabungan sekolah.', '["Flutter \\/ Android","PHP Backend","MySQL"]', 'SIT Robbani Ogan Ilir', 'https://berandadigital.net', '/btd/sekolah.png', '[{"url":"\\/btd\\/sekolah.png","title":"Tampilan Menu Utama ARSI App","type":"mobile","caption":"Menu pembayaran SPP, tabungan, jadwal dan presensi siswa"}]', 0, 12, '2026-08-30 12:10:32', '2026-08-30 12:10:32', '["Informasi jadwal pelajaran & kalender akademik terpadu","Cek status pembayaran SPP bulanan & riwayat transaksi","Modul pemantauan saldo tabungan siswa di sekolah"]', 'mobile', '📱 Mobile App'),
(13, 12, 'Aplikasi Mobile Pembelajaran Penjas (Bola Voli)', 'aplikasi-mobile-pembelajaran-penjas-voli', 'Aplikasi mobile Android interaktif untuk media pembelajaran dan instrumen pengukuran teknik passing atas & passing bawah olahraga bola voli.', 'Pembelajaran gerak dan tes kemampuan olahraga membutuhkan panduan visual serta instrumen hitung skor yang baku.', 'Aplikasi Android berbasis multimedia interaktif dengan modul panduan gerakan, petunjuk pengukuran, dan kalkulator skor tes.', '["Android Native \\/ Flutter","SQLite","Multimedia"]', 'Dosen & Tim Penjas Universitas Sriwijaya', 'https://berandadigital.net', '/images/volley.png', '[{"url":"\\/images\\/volley.png","title":"Menu Pengukuran Passing Olahraga Bola Voli","type":"mobile","caption":"Instrumen pengukuran passing atas dan passing bawah voli"}]', 0, 13, '2026-08-30 12:10:32', '2026-08-30 12:10:32', '["Modul instruksi teknik passing atas dan passing bawah voli","Instrumen tes digital dengan penghitungan skor terstandar","Buku pedoman guru dan instrumen penilaian siswa otomatis"]', 'mobile', '📱 Mobile App'),
(14, 13, 'Sistem Informasi E-Klinik & Rekam Medis (EMR)', 'sistem-informasi-e-klinik-rekam-medis', 'Sistem informasi manajemen klinik terintegrasi untuk pendaftaran pasien online, jadwal praktek dokter, rekam medis elektronik (EMR), dan payment gateway QRIS.', 'Manajemen antrean pasien klinik dan peralihan dari rekam medis kertas menuju standar Rekam Medis Elektronik (RME) Kementerian Kesehatan.', 'Sistem E-Klinik modular lengkap dengan portal pasien, integrasi rekam medis dokter, kasir apotek, dan laporan pendapatan.', '["Laravel 13","MySQL","Tailwind CSS","Payment Gateway"]', 'Fasilitas Kesehatan & Klinik Mitra', 'https://berandadigital.net', '/images/Portofolio-sim.webp', '[{"url":"\\/images\\/Portofolio-sim.webp","title":"Dashboard Pelayanan Poliklinik & Rawat Inap","type":"web","caption":"Pilihan poli klinik, UGD, dan monitoring pasien"}]', 0, 14, '2026-08-30 12:10:32', '2026-08-30 12:10:32', '["Booking jadwal dokter online & antrean poli terpadu","Rekam Medis Elektronik (EMR \\/ RME) terstandar Kemenkes","Integrasi kasir pembayaran digital QRIS, VA, dan e-wallet","Laporan inventori obat apotek & analitik kunjungan pasien"]', 'web', '🏥 Solusi E-Klinik'),
(15, 13, 'Pengembangan Media Virtual Reality (VR) & Augmented Reality', 'virtual-reality-augmented-reality-learning', 'Solusi media imersif berbasis Virtual Reality (VR) dan Augmented Reality (AR) untuk simulasi praktikum, edukasi visual, dan promosi 3D interaktif.', 'Pembelajaran sains dan simulasi peralatan mahal sulit dilakukan tanpa laboratorium fisik canggih.', 'Aplikasi simulasi 3D dan virtual reality yang dapat dijalankan melalui headset VR maupun smartphone.', '["Unity 3D","WebXR","Blender","C#"]', 'Lembaga Pendidikan & Mitra Riset', 'https://berandadigital.net', '/btd/VR.png', '[{"url":"\\/btd\\/VR.png","title":"Simulasi Interaktif Virtual Reality","type":"web","caption":"Pengembangan konten 3D interaktif dan simulasi imersif"}]', 0, 15, '2026-08-30 12:10:32', '2026-08-30 12:10:32', '["Simulasi objek 3D interaktif 360 derajat","Kompatibel dengan headset VR dan mobile smartphone","Meningkatkan retensi pemahaman belajar hingga 80%"]', 'web', '🥽 Immersive Tech');

-- --------------------------------------------------------
-- Data for table `settings`
-- --------------------------------------------------------

TRUNCATE TABLE `settings`;
INSERT INTO `settings` (`id`, `key`, `value`, `group`, `label`, `type`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'CV. Beranda Teknologi Digital', 'general', 'Nama Perusahaan', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(2, 'site_tagline', 'Jasa Pembuatan Website, Sistem Informasi, Aplikasi Android/iOS & AI Solution', 'general', 'Tagline Utama', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(3, 'hero_tagline', 'Akselerasi Bisnis Anda Dengan Software & AI Solution Modern', 'hero', 'Tagline Hero', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(4, 'hero_description', 'Mitra transformasi digital terdepan di Indonesia. Kami menghadirkan jasa pengembangan aplikasi web enterprise, aplikasi mobile Android/iOS, solusi AI privat, serta penyelenggaraan pelatihan & workshop IT profesional.', 'hero', 'Deskripsi Hero', 'textarea', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(5, 'trainer_name', 'Septa Ryan Hidayat, S.Kom', 'trainer', 'Nama Trainer / Speaker', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(6, 'trainer_title', 'Direktur Utama CV. Beranda Teknologi Digital, Software Architect & AI Speaker', 'trainer', 'Gelar / Jabatan', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(7, 'trainer_bio', 'Direktur Utama & Lead Software Architect di CV. Beranda Teknologi Digital. Dewan Pakar IGI Ogan Ilir, Narasumber Komdigi & Media Indonesia, serta Trainer Nasional di bidang Vibe Coding, AI RAG Document, dan Pengembangan Aplikasi Web/Mobile.', 'trainer', 'Bio Trainer', 'textarea', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(8, 'trainer_avatar', '/images/Insight-Talks-Komdigi.jpeg', 'trainer', 'Foto Profile Trainer', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(9, 'trainer_stats_years', '8+', 'trainer', 'Pengalaman Tahun', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(10, 'trainer_stats_events', '85+', 'trainer', 'Workshop & Seminar', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(11, 'trainer_stats_alumni', '5,000+', 'trainer', 'Peserta Pelatihan', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(12, 'contact_email', 'info@berandadigital.net', 'contact', 'Email Resmi', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(13, 'contact_phone', '+62 896-9524-9089', 'contact', 'WhatsApp Utama', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(14, 'contact_phone_sec', '+62 811-7448-447', 'contact', 'WhatsApp Sekunder', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(15, 'contact_address', 'Jalan Sarjana Kel. Timbangan Blok A No. 15, Indralaya Utara, Kab. Ogan Ilir, Sumatera Selatan', 'contact', 'Alamat Kantor Resmi', 'textarea', '2026-08-19 10:57:35', '2026-08-30 12:10:32'),
(16, 'social_linkedin', 'https://linkedin.com/company/berandadigital', 'social', 'LinkedIn', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(17, 'social_github', 'https://github.com/septaryanhidayat/btd', 'social', 'GitHub', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(18, 'social_instagram', 'https://www.instagram.com/bteknologi_digital', 'social', 'Instagram', 'text', '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(19, 'company_legal_name', 'CV. Beranda Teknologi Digital', 'general', 'Nama Badan Usaha', 'text', '2026-08-30 12:10:32', '2026-08-30 12:10:32'),
(20, 'company_ahu', 'AHU-0003819-AH.01.14 Tahun 2022', 'general', 'SK Kemenkumham', 'text', '2026-08-30 12:10:32', '2026-08-30 12:10:32'),
(21, 'company_npwp', '63.100.018.9-312.000', 'general', 'NPWP Perusahaan', 'text', '2026-08-30 12:10:32', '2026-08-30 12:10:32'),
(22, 'company_notaris', 'Juwairiyah Handayani, S.H., M.Kn (Salinan Akta No. 01 Tanggal 29 Desember 2021)', 'general', 'Notaris Pendirian', 'text', '2026-08-30 12:10:32', '2026-08-30 12:10:32'),
(23, 'company_lkpp_url', 'https://e-katalog.lkpp.go.id/katalog/produk/detail/48939397?type=regency', 'general', 'URL E-Katalog LKPP RI', 'text', '2026-08-30 12:10:32', '2026-08-30 12:10:32'),
(24, 'contact_phone_wa_profile', '0896 9524 9089', 'contact', 'WhatsApp Resmi Profile', 'text', '2026-08-30 12:10:32', '2026-08-30 13:16:06'),
(25, 'company_nib', '1203000102148 / KBLI 62019', 'legal', 'Nomor Induk Berusaha (NIB)', 'text', '2026-08-30 13:25:38', '2026-08-30 13:25:38'),
(26, 'company_lkpp_status', 'Terdaftar Resmi di E-Katalog LKPP RI', 'legal', 'Status LKPP RI', 'text', '2026-08-30 13:25:38', '2026-08-30 13:25:38'),
(27, 'stats_clients', '150+', 'stats', 'Statistik Klien Puas', 'text', '2026-08-30 13:25:38', '2026-08-30 13:25:38'),
(28, 'stats_projects', '85+', 'stats', 'Statistik Sistem Selesai', 'text', '2026-08-30 13:25:38', '2026-08-30 13:25:38'),
(29, 'stats_satisfaction', '99.8%', 'stats', 'Statistik Kepuasan Client', 'text', '2026-08-30 13:25:38', '2026-08-30 13:25:38'),
(30, 'stats_experience', '8+ Thn', 'stats', 'Statistik Pengalaman', 'text', '2026-08-30 13:25:38', '2026-08-30 13:25:38'),
(31, 'cta_headline', 'Let\'s Work Together', 'general', 'Headline CTA Bawah', 'text', '2026-08-30 13:25:38', '2026-08-30 13:25:38'),
(32, 'cta_description', 'Revolusi Teknologi mengubah aspek kehidupan kita, dan struktur masyarakat itu sendiri. Konsultasikan rencana pembuatan website perusahaan, aplikasi mobile Flutter, sistem informasi, atau pelatihan IT bersama CV. Beranda Teknologi Digital.', 'general', 'Deskripsi CTA Bawah', 'textarea', '2026-08-30 13:25:38', '2026-08-30 13:25:38');

-- --------------------------------------------------------
-- Data for table `trainings`
-- --------------------------------------------------------

TRUNCATE TABLE `trainings`;
INSERT INTO `trainings` (`id`, `title`, `slug`, `level`, `duration`, `target_audience`, `summary`, `syllabus`, `price`, `thumbnail`, `is_featured`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Lecturer Development Program: Artificial Intelligence & Vibe Coding', 'lecturer-development-program-ai-vibe-coding', 'Executive & Dosen', '1 Hari Workshop Intensif', 'Dosen, Akademisi & Pengajar Perguruan Tinggi', 'Pelatihan Pemanfaatan Artificial Intelligence (AI) untuk pembuatan aplikasi praktis dan profesional tanpa coding, khusus bagi Dosen Politeknik Akamigas Palembang.', '["Pengenalan Konsep Vibe Coding & Generative AI","Pembuatan Prototype Aplikasi Tanpa Baris Kode","Pemanfaatan AI dalam Inovasi Pembelajaran Perguruan Tinggi","Studi Kasus Otomasi Administrasi Akademik"]', 1500000, '/preview/screencapture-berandadigital-test-trainer-2026-08-19-17_49_10.png', 1, 1, '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(2, 'Pelatihan Augmented Reality (AR) & Koding untuk Media Edukasi Interaktif', 'pelatihan-augmented-reality-ar-dan-koding', 'Guru & Praktisi Pendidikan', '1 Hari Workshop', 'Guru SD, SMP, SMA & Pengembang Media Pembelajaran', 'Pelatihan pembuatan aplikasi 3D Augmented Reality untuk visualisasi materi pelajaran interaktif di kelas.', '["Dasar 3D Modeling & AR Marker","Pengenalan Software AR Creator","Integrasi AR dengan Buku Pelajaran","Publishing Aplikasi AR ke Smartphone"]', 1200000, '/images/Flyer-AR-New-1-scaled.jpg', 1, 2, '2026-08-19 10:57:35', '2026-08-19 10:57:35');

-- --------------------------------------------------------
-- Data for table `users`
-- --------------------------------------------------------

TRUNCATE TABLE `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Septa Ryan Hidayat, S.Kom', 'admin@berandadigital.net', NULL, '$2y$12$unVblkDB1bH3PS.nSBaL9u4JvOtzXb4fDbohI3bVrZqKkvBNqVNeu', NULL, '2026-08-19 10:57:35', '2026-08-19 10:57:35'),
(2, 'Administrator Beranda Digital', 'info@berandadigital.net', NULL, '$2y$12$NB250se90qzUykOLnG//GuRy006OXsSY0rTuU.Hb/KnJz98jNDitO', NULL, '2026-08-30 13:24:51', '2026-08-30 13:24:51');

COMMIT;
