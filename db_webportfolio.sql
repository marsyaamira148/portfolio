-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2025 at 02:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_identities`
--

CREATE TABLE `auth_identities` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `secret` varchar(255) NOT NULL,
  `secret2` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `extra` text DEFAULT NULL,
  `force_reset` tinyint(1) NOT NULL DEFAULT 0,
  `last_used_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_identities`
--

INSERT INTO `auth_identities` (`id`, `user_id`, `type`, `name`, `secret`, `secret2`, `expires`, `extra`, `force_reset`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'email_password', NULL, 'marsyaamira444@gmail.com', '$2y$12$C3ydsTA.22HZXCMc2Kcx7.LpqkMQtsxkohptnBrdm8lKpGMrhjH/C', NULL, NULL, 0, '2025-11-20 15:22:53', '2025-11-10 04:26:30', '2025-11-20 15:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `id_type` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `user_agent`, `id_type`, `identifier`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', NULL, '2025-11-10 03:22:02', 0),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', NULL, '2025-11-10 03:37:06', 0),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira@gmail.com', NULL, '2025-11-10 03:39:11', 0),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', NULL, '2025-11-10 04:15:31', 0),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-10 04:26:49', 1),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-10 04:29:46', 1),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-11 02:37:20', 1),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-11 04:35:51', 1),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-11 08:12:03', 1),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-11 08:12:06', 1),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-11 09:26:41', 1),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-11 09:32:11', 1),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-11 09:33:26', 1),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-11 09:53:40', 1),
(15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-12 02:44:19', 1),
(16, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-12 03:11:59', 1),
(17, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-14 03:07:26', 1),
(18, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-15 08:59:58', 1),
(19, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-15 09:00:13', 1),
(20, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-17 02:51:44', 1),
(21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-17 02:52:31', 1),
(22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-18 08:10:38', 1),
(23, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-19 02:47:24', 1),
(24, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-19 08:05:03', 1),
(25, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-19 08:05:05', 1),
(26, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-20 03:03:04', 1),
(27, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-20 09:12:38', 1),
(28, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'email_password', 'marsyaamira444@gmail.com', 1, '2025-11-20 15:22:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions_users`
--

CREATE TABLE `auth_permissions_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `permission` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_remember_tokens`
--

CREATE TABLE `auth_remember_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_token_logins`
--

CREATE TABLE `auth_token_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `id_type` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `reply_message` text DEFAULT NULL,
  `replied_at` datetime DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `reply_message`, `replied_at`, `is_read`) VALUES
(7, 'Clara Nathania', 'clara.nathania@gmail.com', 'Konsultasi Desain Branding', 'Halo! Saya tertarik untuk membuat konsep brand identity baru untuk bisnis fashion saya. Bisa kirimkan paket harga dan contoh hasil sebelumnya?', 0, '2025-10-08 03:03:05', NULL, NULL, 0),
(9, 'Marsya Amira', 'marsyaamira562@gmail.com', 'Pembuatan Landing Page', 'Halo, saya butuh bantuan membuat landing page event dalam waktu singkat. Apakah bisa selesai dalam 1 minggu?', 0, '2025-10-08 03:36:43', NULL, NULL, 0),
(10, 'caca', 'marsyaamira24@gmail.com', 'codeigniter', 'bisa kah anda menolong saya ', 0, '2025-11-10 04:38:17', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `address`, `phone`, `email`, `website`) VALUES
(1, 'Lembah Permai Hanjuang Grande No.2 Blok H, Cibabat, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40513', '085922426982', 'marsyaamira562@gmail.com', 'https://marsyaamira.com');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(10, '2020-12-28-223112', 'CodeIgniter\\Shield\\Database\\Migrations\\CreateAuthTables', 'default', 'CodeIgniter\\Shield', 1762744899, 1),
(11, '2021-07-04-041948', 'CodeIgniter\\Settings\\Database\\Migrations\\CreateSettingsTable', 'default', 'CodeIgniter\\Settings', 1762744900, 1),
(12, '2021-11-14-143905', 'CodeIgniter\\Settings\\Database\\Migrations\\AddContextColumn', 'default', 'CodeIgniter\\Settings', 1762744900, 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `project_file` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `client` varchar(255) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `tools` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `slug`, `description`, `date`, `thumbnail`, `project_file`, `is_featured`, `created_at`, `updated_at`, `client`, `category`, `tools`, `start_date`, `end_date`) VALUES
(19, 'Aplikasi Booking Hotel - StayEasy', 'aplikasi-booking-hotel-stayeasy', '<p>Aplikasi mobile untuk reservasi hotel dengan fitur pencarian lokasi, filter harga, serta pembayaran online.</p>\r\n', '2025-10-01', 'portfolio/1762767209_f6ec7816abbe34f459d8.png', NULL, 1, '2025-10-02 21:20:58', '2025-11-11 20:57:29', 'StayEasy Travel', 'Mobile App Development', 'Flutter, Firebase, REST API', '2025-03-01', '2025-04-15'),
(20, 'UI/UX Dashboard Analytics', 'uiux-dashboard-analytics', '<p>Mendesain antarmuka dashboard analytics untuk mempermudah pengguna dalam memantau data penjualan secara real-time.</p>\r\n', '2025-10-12', 'portfolio/1762767058_763ece10e020cfda6999.png', NULL, 1, '2025-10-02 21:25:52', '2025-11-10 02:30:58', 'DataTrack Corp', 'UI/UX Design', 'Figma, Adobe Illustrator', '2024-05-20', '2024-06-10'),
(21, 'Brand Identity Coffee Shop KopiKita', 'brand-identity-coffee-shop-kopikita', '<p>Membuat brand identity mulai dari logo, packaging, hingga template sosial media untuk Coffee Shop KopiKita.</p>\r\n', '2025-10-21', 'portfolio/1762767021_16f726386b40d0809b1c.png', NULL, 1, '2025-10-06 20:09:43', '2025-11-10 02:30:21', 'KopiKita', 'Branding & Graphic Design', 'Adobe Illustrator, Photoshop, Canva', '2024-07-10', '2024-08-02'),
(22, 'Portfolio Dashboard Personal', 'portfolio-dashboard-personal', '<p>Membangun dashboard personal untuk menampilkan data portofolio, project, testimoni, serta integrasi CMS sederhana.</p>\r\n', '2025-10-22', 'portfolio/1762767137_5e55b08feda97404ee71.png', NULL, 1, '2025-10-06 20:17:42', '2025-11-10 02:32:17', 'Internal Project', 'Web Application', 'CodeIgniter 4, MySQL, Argon/Horizon Dashboard Template', '2024-09-10', '2024-09-28'),
(23, 'StayEasy — Aplikasi Booking Hotel', 'stayeasy-aplikasi-booking-hotel', '<p>StayEasy adalah aplikasi berbasis web yang memudahkan pengguna dalam mencari, memesan, dan mengelola kamar hotel secara real-time. Fitur utama mencakup filter lokasi, rating, dan integrasi pembayaran online.</p>\r\n', '2025-06-21', 'portfolio/1762767103_55e8aec7147f6bbe068d.png', NULL, 1, '2025-10-06 20:23:00', '2025-11-10 02:31:43', 'PT Digital Travelindo', 'Web App / UI/UX Design', 'Figma, HTML, CSS, JavaScript, PHP (CodeIgniter 4)', '2025-02-07', '2025-03-25'),
(24, 'BloomSkin — Brand Identity & Website Skincare Lokal', 'bloomskin-brand-identity-website-skincare-lokal', '<p>BloomSkin adalah proyek branding dan pembuatan website untuk merek skincare lokal yang fokus pada bahan alami. Pekerjaan mencakup desain logo, guideline warna, serta desain landing page yang feminin dan elegan.</p>\r\n', '2025-10-07', 'portfolio/1762767080_44e630720cd937373f39.png', NULL, 1, '2025-10-06 20:28:38', '2025-11-10 02:35:37', 'BloomSkin Indonesia', 'Branding / Web Design', 'Adobe Illustrator, Photoshop, Figma', '2025-01-01', '2025-02-28'),
(25, 'Learnify — Dashboard Pembelajaran Online', 'learnify-dashboard-pembelajaran-online', '<p><strong>Learnify adalah desain dashboard untuk platform e-learning interaktif. Didesain dengan fokus pada kemudahan navigasi, tampilan progress belajar, serta statistik aktivitas siswa.<br />\r\n<em>Client: EduTech Nu</em></strong><strong><em>santar</em></strong><img src=\"data:image/png;base64,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\" /></p>\r\n', '2025-10-16', 'portfolio/1762767257_b7ae5f2ed1a2eca31fba.png', NULL, 0, '2025-10-06 20:34:36', '2025-11-20 01:59:49', 'EduTech Nusantara', 'UI/UX Design', 'Figma, Framer', '2024-04-16', '2024-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `author` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_featured` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `slug`, `image`, `description`, `created_at`, `author`, `updated_at`, `is_featured`) VALUES
(11, NULL, 'Tren UI/UX 2025: Desain yang Lebih Personal dan Human-Centered', 'tren-uiux-2025-desain-yang-lebih-personal-dan-human-centered', '1762765661_f458e148c439573d5cd5.png', '<p>Tahun 2025 menjadi era di mana pengalaman pengguna (UX) semakin berfokus pada personalisasi dan empati. Desain bukan lagi sekadar tampilan cantik, melainkan bagaimana sebuah produk memahami emosi dan kebutuhan penggunanya. Artikel ini membahas tren UI/UX terbaru seperti adaptive design, integrasi AI dalam personalisasi, hingga micro-interaction yang meningkatkan engagement pengguna.</p>\r\n', '2025-10-07 04:21:14', 'Admin', '2025-11-10 09:07:41', 0),
(12, NULL, 'Tips Mendesain Website Portfolio yang Menarik Klien', 'tips-mendesain-website-portfolio-yang-menarik-klien', '1762765618_3cf19db52d406fb9fd7d.png', '<p>Website portfolio bukan hanya tempat untuk memamerkan karya, tapi juga alat utama untuk menarik calon klien. Banyak desainer lupa memperhatikan storytelling, struktur navigasi, dan visual hierarchy. Dalam artikel ini, kami berbagi strategi desain yang membuat portfolio lebih engaging &mdash; mulai dari cara menampilkan proyek terbaik hingga menulis deskripsi yang kuat dan berkarakter.</p>\r\n', '2025-10-07 09:13:58', 'Admin', '2025-11-12 10:35:00', 1),
(14, NULL, 'Membangun Website Portofolio Pertama Saya', 'membangun-website-portofolio-pertama-saya', '1762765597_abc9e560aad166cd3645.png', '<p>Pada postingan ini, saya berbagi pengalaman membangun website portofolio pribadi pertama menggunakan HTML, CSS, dan CodeIgniter 4. Proses ini penuh pembelajaran, mulai dari desain UI/UX hingga tahap deploy ke hosting.</p>\r\n', '2025-10-21 03:54:58', 'Admin', '2025-11-10 09:06:37', 1),
(15, NULL, 'Mengintegrasikan Smarty Template dengan CodeIgniter 4', 'mengintegrasikan-smarty-template-dengan-codeigniter-4', '1762765561_6890c2d88a8a1bc42ad3.png', '<p>Tutorial ini menjelaskan langkah-langkah mengintegrasikan Smarty Template Engine dengan CodeIgniter 4 agar tampilan lebih rapi dan mudah dikelola.</p>\r\n', '2025-10-21 03:56:48', 'Admin', '2025-11-10 09:06:01', 1),
(16, NULL, 'Cara Membuat Halaman Galeri Responsif', 'cara-membuat-halaman-galeri-responsif', '1762765527_b5b4db46dbc20e2e71c6.png', '<p>Panduan langkah demi langkah untuk membuat halaman galeri yang responsif dan elegan menggunakan CSS Grid dan Bootstrap, cocok untuk website portofolio.</p>\r\n\r\n<p><strong>GGGGGG</strong></p>\r\n', '2025-10-21 04:06:14', 'Admin', '2025-11-14 07:53:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(9) NOT NULL,
  `class` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `type` varchar(31) NOT NULL DEFAULT 'string',
  `context` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) DEFAULT NULL,
  `message` text NOT NULL,
  `rating` tinyint(1) DEFAULT 5,
  `photo` varchar(255) DEFAULT NULL,
  `status` enum('pending','approved','rejected') DEFAULT 'approved',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `message`, `rating`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Clara Nathania', 'Senior UI/UX Designer', '<p>Kolaborasi yang menyenangkan! Pendekatan desainnya sangat detail dan user-oriented. Hasil akhirnya clean dan profesional.</p>\r\n', 5, '1759891306_2667ac13ce795526e802.jpg', 'approved', '2025-10-08 02:41:46', '2025-10-08 02:41:46'),
(14, 'Adelina Rahmadani', 'Product Manager – NovaTech', '<p>Sangat responsif dan cepat tanggap terhadap feedback. Desain finalnya sukses meningkatkan pengalaman pengguna produk kami</p>\r\n', 5, '1759891362_2c9001b1f6cebe5ab18c.jpg', 'approved', '2025-10-08 02:42:42', '2025-10-08 02:42:42'),
(15, 'Gabriella Putri', 'Brand Strategist', '<p>Tim ini benar-benar memahami esensi brand kami. Setiap elemen visual punya makna dan konsistensi yang kuat</p>\r\n', 5, '1759891418_281484edec2e436c1a70.jpg', 'approved', '2025-10-08 02:43:38', '2025-10-08 02:43:38'),
(16, 'Michelle Santoso', 'Marketing Director – Luna Agency', '<p>Dari konsep sampai eksekusi, semuanya mulus. Branding kami sekarang terlihat jauh lebih premium dan modern.</p>\r\n', 5, '1759891457_4e2edc27d25a9d7e47b7.jpg', 'approved', '2025-10-08 02:44:17', '2025-10-08 02:44:17'),
(17, 'Rafael Aditya', 'CEO & Founder – BrightLabs', '<p>Profesional, komunikatif, dan punya sense desain yang tajam. Sangat puas dengan hasil kerja dan insight yang diberikan.</p>\r\n', 5, '1759891723_5be52c787d4c22d9e9a4.jpg', 'approved', '2025-10-08 02:45:08', '2025-10-08 02:48:43'),
(18, 'Jonathan Prasetyo', 'Lead Frontend Engineer', '<p>Struktur file dan guideline-nya luar biasa rapi. Sangat membantu tim dev untuk implementasi desain dengan cepat.</p>\r\n', 5, '1759891551_f9b36cbc1c6c9cc7b898.jpg', 'approved', '2025-10-08 02:45:51', '2025-10-08 02:45:51'),
(19, 'William Tanuwijaya', 'General Manager – Grand Haven Hotel', '<p>Visual yang dihasilkan tidak hanya menarik tapi juga strategis. Memberi nilai tambah nyata untuk citra perusahaan kami.</p>\r\n', 5, '1759891589_4207d4845b07b43366d9.jpg', 'approved', '2025-10-08 02:46:29', '2025-10-08 02:46:29'),
(20, 'Kevin Alvaro', 'Creative Director – MotionHaus', '<p>Desain yang dihasilkan benar-benar kuat secara visual dan konsep. Detail kecil diperhatikan dengan sangat baik &mdash; hasil akhirnya elegan dan impactful.</p>\r\n', 5, '1759891825_2855af6f0a16b3ec791f.jpg', 'approved', '2025-10-08 02:50:25', '2025-10-08 02:50:25'),
(21, 'Adrian Wijaya', 'Product Lead – NexaLabs', '<p>Suka banget sama pendekatan kolaboratifnya. Tim ini terbuka untuk ide-ide baru dan selalu memberikan solusi desain yang relevan dengan visi produk.</p>\r\n', 5, '1759891962_c1cf3cc7fee466550ec2.jpg', 'approved', '2025-10-08 02:52:42', '2025-10-08 02:52:42'),
(22, 'Leonard Hartono', 'Senior Developer – CloudSync', '<p>Kerja samanya lancar, file desainnya terstruktur dengan baik, dan dokumentasinya lengkap. Sangat membantu saat proses integrasi frontend</p>\r\n\r\n<table>\r\n</table>\r\n', 4, '1759892099_4f4a590c42700dab8374.jpg', 'approved', '2025-10-08 02:54:59', '2025-11-19 03:24:23'),
(23, 'sya', 'sad', 'c c c c', 5, '1763521519_e9ef706f93e561219a5f.png', 'approved', '2025-11-19 03:05:19', '2025-11-19 03:29:18'),
(25, 'HAI', 'CEO', 'HALDUNXCVBXVN\r\nBCGHGCH\r\nBXCVBXVBCXP\r\nBXNBNXBC\r\nXBVXCD', 3, '1763524013_dfcdee99404dfdbf8000.png', 'rejected', '2025-11-19 03:46:53', '2025-11-19 04:33:39'),
(26, 'qila', 'pengusaha', 'gdhgdh', 5, '1763524886_c1079e7fea85227dc9c9.png', 'approved', '2025-11-19 04:01:26', '2025-11-19 04:02:22'),
(28, 'hai', 'aaa', 'aaaa', 5, NULL, 'rejected', '2025-11-19 04:39:51', '2025-11-20 08:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `last_active` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `phone`, `address`, `bio`, `date_of_birth`, `avatar`, `status`, `status_message`, `active`, `last_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'marsyaamira444@gmail.com', 'MARSYA AMIRA', 'marsyaamira444@gmail.com', '085922426982', 'CImahi Utara Jawa Barat', '<p><em>Seorang developer muda yang berfokus pada pengembangan web dan desain antarmuka pengguna.</em></p>\r\n', '2008-01-14', '1762749409_afcb88c5e5a0d955ff3f.jpg', NULL, NULL, 1, '2025-11-20 15:22:54', '2025-11-10 04:26:29', '2025-11-10 04:36:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `visited_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip_address`, `user_agent`, `visited_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-06 09:08:38'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-06 09:09:02'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-06 09:14:57'),
(4, '127.0.0.1', 'manual-test', '2025-11-05 10:00:00'),
(5, '127.0.0.1', 'manual-test', '2025-11-06 10:00:00'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-06 09:22:15'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-06 09:22:26'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-06 09:22:39'),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 02:44:30'),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 02:51:35'),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 02:54:06'),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 04:14:59'),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 04:36:57'),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 04:37:33'),
(15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 04:38:18'),
(16, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 05:21:39'),
(17, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 06:07:29'),
(18, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 06:31:57'),
(19, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 06:31:59'),
(20, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 06:32:04'),
(21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 06:36:42'),
(22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 07:45:43'),
(23, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 08:47:52'),
(24, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 09:08:21'),
(25, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 09:10:46'),
(26, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 09:12:07'),
(27, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 09:28:55'),
(28, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 09:29:29'),
(29, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 09:35:03'),
(30, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 09:35:26'),
(31, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 09:35:40'),
(32, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 09:37:31'),
(33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-10 09:37:57'),
(34, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-11 02:28:12'),
(35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-11 02:28:24'),
(36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-11 02:37:52'),
(37, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-11 08:11:14'),
(38, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-11 08:12:21'),
(39, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-11 08:33:19'),
(40, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-11 09:22:34'),
(41, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 02:43:03'),
(42, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 02:44:22'),
(43, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 03:10:54'),
(44, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 03:17:34'),
(45, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 03:21:57'),
(46, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 03:25:38'),
(47, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 03:27:06'),
(48, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 03:28:09'),
(49, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 03:29:45'),
(50, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 03:32:40'),
(51, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 03:33:37'),
(52, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 03:35:09'),
(53, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 03:35:43'),
(54, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-12 03:39:55'),
(55, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:06:32'),
(56, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:30:09'),
(57, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:33:34'),
(58, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:40:00'),
(59, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:40:12'),
(60, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:42:14'),
(61, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:43:22'),
(62, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:47:10'),
(63, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:48:46'),
(64, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:50:42'),
(65, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:52:16'),
(66, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:53:23'),
(67, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:54:42'),
(68, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:57:12'),
(69, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 03:58:08'),
(70, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 04:01:01'),
(71, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 04:04:49'),
(72, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 04:06:17'),
(73, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 04:07:55'),
(74, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 04:09:38'),
(75, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 04:10:07'),
(76, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 04:10:34'),
(77, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 04:12:06'),
(78, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 05:30:26'),
(79, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 05:31:53'),
(80, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 05:38:14'),
(81, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 05:50:34'),
(82, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 05:56:16'),
(83, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:00:33'),
(84, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:01:53'),
(85, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:04:03'),
(86, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:05:21'),
(87, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:05:51'),
(88, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:07:29'),
(89, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:08:47'),
(90, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:09:31'),
(91, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:09:51'),
(92, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:11:05'),
(93, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:11:35'),
(94, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:11:51'),
(95, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 06:37:43'),
(96, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 07:01:00'),
(97, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 07:01:37'),
(98, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 07:05:00'),
(99, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 07:09:09'),
(100, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 07:09:55'),
(101, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 07:19:09'),
(102, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 07:20:36'),
(103, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 07:23:50'),
(104, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 07:32:37'),
(105, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-14 07:38:00'),
(106, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-15 08:59:31'),
(107, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-15 09:05:19'),
(108, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-15 09:33:33'),
(109, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-15 09:48:16'),
(110, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-15 09:57:03'),
(111, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-15 09:59:08'),
(112, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-15 10:07:55'),
(113, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-15 10:08:36'),
(114, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-15 10:22:57'),
(115, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-15 10:35:20'),
(116, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-15 10:39:47'),
(117, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-15 10:50:08'),
(118, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-17 02:52:13'),
(119, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-17 02:55:14'),
(120, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-17 02:55:24'),
(121, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-18 08:09:56'),
(122, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-18 08:10:29'),
(123, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 02:45:50'),
(124, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 03:03:02'),
(125, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 03:05:20'),
(126, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 03:24:49'),
(127, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 03:25:32'),
(128, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 03:30:12'),
(129, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 03:44:29'),
(130, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 03:46:55'),
(131, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 03:50:17'),
(132, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 03:55:30'),
(133, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 04:01:27'),
(134, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 04:01:59'),
(135, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 04:03:07'),
(136, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 04:04:02'),
(137, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 04:08:19'),
(138, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 04:39:36'),
(139, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 04:39:52'),
(140, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 05:28:48'),
(141, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 05:31:33'),
(142, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 05:32:08'),
(143, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 05:50:03'),
(144, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36', '2025-11-19 06:29:30'),
(145, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 07:15:08'),
(146, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 07:15:10'),
(147, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 07:15:53'),
(148, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 07:26:26'),
(149, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 07:39:44'),
(150, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 07:40:09'),
(151, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 07:41:13'),
(152, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 07:42:38'),
(153, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 07:45:12'),
(154, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 08:15:28'),
(155, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-19 10:53:30'),
(156, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-20 03:01:05'),
(157, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-20 03:02:13'),
(158, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-20 04:23:35'),
(159, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-20 06:14:28'),
(160, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-20 09:02:44'),
(161, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-20 15:22:45'),
(162, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-20 15:22:59'),
(163, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-20 18:56:04'),
(164, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36', '2025-11-20 18:57:05'),
(165, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36', '2025-11-20 18:57:43'),
(166, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36', '2025-11-20 18:58:38'),
(167, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36', '2025-11-20 18:59:08'),
(168, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-20 18:59:49'),
(169, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-20 19:00:12'),
(170, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', '2025-11-20 19:00:31'),
(171, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36', '2025-11-20 19:01:50'),
(172, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36', '2025-11-20 19:02:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `auth_identities`
--
ALTER TABLE `auth_identities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_secret` (`type`,`secret`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type_identifier` (`id_type`,`identifier`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions_users`
--
ALTER TABLE `auth_permissions_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_permissions_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `auth_remember_tokens`
--
ALTER TABLE `auth_remember_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `auth_remember_tokens_user_id_foreign` (`user_id`);

--
-- Indexes for table `auth_token_logins`
--
ALTER TABLE `auth_token_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type_identifier` (`id_type`,`identifier`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_identities`
--
ALTER TABLE `auth_identities`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `auth_permissions_users`
--
ALTER TABLE `auth_permissions_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_remember_tokens`
--
ALTER TABLE `auth_remember_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_token_logins`
--
ALTER TABLE `auth_token_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_identities`
--
ALTER TABLE `auth_identities`
  ADD CONSTRAINT `auth_identities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_permissions_users`
--
ALTER TABLE `auth_permissions_users`
  ADD CONSTRAINT `auth_permissions_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_remember_tokens`
--
ALTER TABLE `auth_remember_tokens`
  ADD CONSTRAINT `auth_remember_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
