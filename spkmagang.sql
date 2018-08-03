-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 06:12 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spkmagang`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_anggotas`
--

CREATE TABLE IF NOT EXISTS `calon_anggotas` (
`id` int(10) unsigned NOT NULL,
  `nama_calon_anggota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_yogyakarta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sumber_belajar_islam` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengalaman_organisasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengalaman_kepanitiaan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hardskill` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `softskill` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `riwayat_penyakit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departemen_akhir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_periode` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calon_anggotas`
--

INSERT INTO `calon_anggotas` (`id`, `nama_calon_anggota`, `jenis_kelamin`, `asal`, `alamat_yogyakarta`, `sumber_belajar_islam`, `pengalaman_organisasi`, `pengalaman_kepanitiaan`, `minat`, `hardskill`, `softskill`, `riwayat_penyakit`, `departemen_akhir`, `id_periode`, `created_at`, `updated_at`) VALUES
(2, 'Tania', 'perempuan', NULL, NULL, NULL, NULL, NULL, NULL, 'Editing Video', 'Bertanggung Jawab', NULL, NULL, 1, NULL, NULL),
(5, 'Amirudin', 'laki-laki', NULL, NULL, NULL, NULL, NULL, NULL, '-', 'Komunikasi', NULL, NULL, 1, NULL, NULL),
(6, 'Ikhsan firdaussalam', 'laki-laki', 'Kebumen', 'Terban', 'Kajian', 'Rohis', '-', 'desain', 'editing video', 'public speaking', '-', NULL, 1, '2018-07-13 19:47:18', '2018-07-13 19:47:18'),
(7, 'Ilham Kurniawan', 'laki-laki', 'Karanganyar', 'Pogung', 'Buku', 'OSIS', '-', '-', 'desain kaos', 'public speaking', 'magh', NULL, 1, '2018-07-13 19:47:18', '2018-07-13 19:47:18'),
(8, 'Ilham Rahmada Putra', 'laki-laki', 'Bojonegoro', 'Sagan', '-', 'OSIS', '-', '-', 'developing web', 'aktif', '-', NULL, 1, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(9, 'Ilyas', 'laki-laki', 'Solo', 'Terban', NULL, 'Pramuka', NULL, NULL, NULL, NULL, 'tifus', NULL, 1, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(10, 'Imam latif yuswindar', 'laki-laki', 'Bekasi', 'Pogung', 'Buku', '-', '-', 'agama', 'Editing Video', 'Jujur', 'Tidak Ada', NULL, 1, '2018-07-13 19:47:19', '2018-07-16 19:34:31'),
(11, 'Imam Satriawan', 'laki-laki', 'Jakarta', 'Sagan', NULL, 'OSIS', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(12, 'Iman Budi Prasetyo', 'laki-laki', 'Sleman', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(13, 'Insan Wicaksana', 'laki-laki', 'Sidoarjo', 'Pogung', NULL, 'OSIS', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(14, 'Irham Tri Putra', 'laki-laki', 'Bekasi', 'Sagan', NULL, 'Pramuka', NULL, NULL, 'editing video', NULL, NULL, NULL, 1, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(15, 'irman putranda', 'laki-laki', 'Surabaya', 'Jl. Monjali', NULL, NULL, NULL, NULL, 'desain kaos', NULL, NULL, NULL, 1, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(16, 'Isa Abdullah', 'laki-laki', 'Kebumen', '-', NULL, 'PKS', NULL, NULL, 'developing web', NULL, NULL, NULL, 1, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(17, 'Ivan Panji Setiawan', 'laki-laki', 'Nganjuk', 'Jl. Magelang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(18, 'JANUAR WIRAWAN', 'laki-laki', 'Bekasi', 'Jetis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(19, 'Johan Bhakti Sanjaya', 'laki-laki', 'Jakarta', 'Sagan', NULL, 'Rohis', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(20, 'Johansa Prasetyo Hadi', 'laki-laki', 'Sleman', 'Blimbingsari', NULL, 'OSIS', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(21, 'Kaffatufiddin', 'laki-laki', 'Sidoarjo', 'Sendowo', NULL, 'OSIS', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(22, 'Khairuddin Anshari', 'laki-laki', 'Surabaya', 'Karangbendo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(23, 'Khalid Bagus Pratama Darmadi', 'laki-laki', 'Kebumen', 'Sleman', NULL, 'PMR', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(24, 'Ossa Mentari Wijanarko', 'perempuan', 'Jakarta', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(25, 'Pintasari Nugraheni (Pinta)', 'perempuan', 'Sleman', 'Pogung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(26, 'Pipin Rina Riski', 'perempuan', 'Sidoarjo', 'Sagan', NULL, 'OSIS', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(27, 'Pramesti Nurul Huda', 'perempuan', 'Bekasi', 'Jl. Monjali', NULL, 'OSIS', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(28, 'Puput Widya Eka Putri', 'perempuan', 'Surabaya', '-', NULL, 'Pramuka', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(29, 'Putri Yunitasari', 'perempuan', 'Kebumen', 'Jl. Magelang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(30, 'Rahajeng Maghfira', 'perempuan', 'Nganjuk', '-', NULL, 'OSIS', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(31, 'Rahmawati Indah Cahyani', 'perempuan', 'Bekasi', 'Pogung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(32, 'Rania Naura Sarisihat', 'perempuan', 'Jakarta', 'Sagan', NULL, 'OSIS', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(33, 'Rania Nawra Thifali Izdihar', 'perempuan', 'Sleman', 'Blimbingsari', NULL, 'Pramuka', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(34, 'Ranisa Amalia Sholikhah', 'perempuan', 'Sidoarjo', 'Sendowo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(35, 'Rasya Swarnasta', 'perempuan', 'Surabaya', 'Karangbendo', NULL, 'PKS', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(36, 'Rejeki Utami', 'perempuan', 'Kebumen', 'Sleman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(37, 'Reskie Yuli Trinarsiwi Mawar', 'perempuan', NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(38, 'Riana Setiyowati', 'perempuan', NULL, 'Pogung', NULL, 'Rohis', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(39, 'Rifda Hanin V H', 'perempuan', NULL, 'Sagan', NULL, 'OSIS', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(40, 'Rigita Mahdafilia', 'perempuan', NULL, 'Jl. Monjali', NULL, 'OSIS', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(41, 'Rina Listiyowati', 'perempuan', NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:23', '2018-07-13 19:47:23'),
(42, 'Rini Jayanti', 'perempuan', NULL, 'Jl. Magelang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-07-13 19:47:23', '2018-07-13 19:47:23'),
(43, 'Titi Hanifah', 'perempuan', 'Kebumen', 'Terban', 'Kajian', 'Banyak', 'Banyak', 'Banyak Ey', 'Memasak', 'Ngoding', 'Tidak Ada', NULL, 1, '2018-07-13 19:47:39', '2018-07-13 19:47:39'),
(44, 'Faldy Ikhwan Fadila', 'laki-laki', 'Kebumen', 'Pogung', 'Kajian', 'Sedikit', 'Sedikit', 'Banyak Ey', 'Memasak', 'Ngoding', 'Tidak Ada', NULL, 1, '2018-07-13 19:47:39', '2018-07-13 19:47:39'),
(45, 'Muhammad Farhan Najib', 'laki-laki', 'Nganjuk', 'Sardjito', 'Pondok Pesantren', 'Banyak', 'Sedikit', 'Banyak Ey', 'Memasak', 'Ngoding', 'Tidak Ada', NULL, 1, '2018-07-13 19:47:39', '2018-07-13 19:47:39'),
(46, 'Diana', 'perempuan', 'Kebumen', 'Terban', 'Kajian', 'Rohis', '-', 'desain', 'editing video', 'public speaking', '-', NULL, 1, '2018-07-16 19:24:33', '2018-07-16 19:24:33'),
(47, 'Shafira', 'perempuan', 'Karanganyar', 'Pogung', 'Buku', 'OSO', '-', '-', 'desain kaos', 'public speaking', 'magh', NULL, 1, '2018-07-16 19:24:33', '2018-07-16 19:24:33'),
(48, 'Doni', 'laki-laki', 'Bojonegoro', 'Sagan', '-', 'OSIS', '-', '-', 'developing web', 'aktif', '-', NULL, 1, '2018-07-16 19:24:33', '2018-07-16 19:24:33'),
(49, 'hdfhdsv', 'perempuan', 'hsdfvdsh', NULL, 'ndbfndfbn', NULL, NULL, 'nbnczdbcsn', 'Developing Web', 'Bertanggung Jawab', '-', NULL, 1, '2018-07-16 22:44:15', '2018-07-16 22:44:15'),
(50, 'Risa Pramita', 'perempuan', 'Kebumen', 'Terban', 'Kajian', 'Rohis', '-', 'desain', 'editing video', 'public speaking', '-', NULL, 1, '2018-07-17 00:12:54', '2018-07-17 00:12:54'),
(51, 'Fitria Insani', 'perempuan', 'Karanganyar', 'Pogung', 'Buku', 'OSO', '-', '-', 'desain kaos', 'public speaking', 'magh', NULL, 1, '2018-07-17 00:12:55', '2018-07-17 00:12:55'),
(52, 'Yoga Pratama', 'laki-laki', 'Bojonegoro', 'Sagan', '-', 'OSIS', '-', '-', 'developing web', 'aktif', '-', NULL, 1, '2018-07-17 00:12:55', '2018-07-17 00:12:55'),
(53, 'Nanda', 'perempuan', 'Bojonegoro', 'Godean', 'Mentoring', NULL, NULL, 'agama', 'Editing Video', 'Komunikasi', '-', NULL, 1, '2018-07-17 00:38:08', '2018-07-17 00:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `departemens`
--

CREATE TABLE IF NOT EXISTS `departemens` (
`id` int(10) unsigned NOT NULL,
  `nama_departemen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departemens`
--

INSERT INTO `departemens` (`id`, `nama_departemen`, `created_at`, `updated_at`) VALUES
(1, 'Kastrat', NULL, NULL),
(2, 'Kemuslimahan', NULL, NULL),
(3, 'BSO DOSHA', NULL, NULL),
(4, 'BSO GMMQ', NULL, NULL),
(5, 'Shar''E', NULL, NULL),
(7, 'Jaringan', NULL, NULL),
(8, 'DPS', NULL, NULL),
(9, 'MC', NULL, NULL),
(10, 'Sosmas', NULL, NULL),
(11, 'Infokes', '2018-07-18 08:37:42', '2018-07-18 08:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `detail_calon_anggotas`
--

CREATE TABLE IF NOT EXISTS `detail_calon_anggotas` (
`id` int(10) unsigned NOT NULL,
  `id_departemen` int(10) unsigned DEFAULT NULL,
  `id_calon_anggota` int(10) unsigned NOT NULL,
  `prioritas` int(11) NOT NULL,
  `rekomendasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favorit` tinyint(1) DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_calon_anggotas`
--

INSERT INTO `detail_calon_anggotas` (`id`, `id_departemen`, `id_calon_anggota`, `prioritas`, `rekomendasi`, `favorit`, `keterangan`, `created_at`, `updated_at`) VALUES
(3, 3, 2, 1, NULL, NULL, NULL, NULL, NULL),
(4, 4, 2, 2, NULL, NULL, NULL, NULL, NULL),
(10, 3, 5, 1, NULL, NULL, NULL, NULL, NULL),
(11, 5, 6, 1, NULL, NULL, NULL, '2018-07-13 19:47:18', '2018-07-13 19:47:18'),
(13, 7, 7, 1, NULL, NULL, NULL, '2018-07-13 19:47:18', '2018-07-13 19:47:18'),
(14, 4, 7, 2, NULL, NULL, NULL, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(15, 3, 8, 1, NULL, NULL, NULL, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(16, 7, 8, 2, NULL, NULL, NULL, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(17, 5, 9, 1, NULL, NULL, NULL, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(19, 9, 10, 1, NULL, NULL, NULL, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(20, 3, 10, 2, NULL, NULL, NULL, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(21, 9, 11, 1, NULL, NULL, NULL, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(22, 7, 11, 2, NULL, NULL, NULL, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(23, 7, 12, 1, NULL, NULL, NULL, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(24, 9, 12, 2, NULL, NULL, NULL, '2018-07-13 19:47:19', '2018-07-13 19:47:19'),
(25, 9, 13, 1, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(26, 8, 13, 2, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(27, 8, 14, 1, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(28, 9, 14, 2, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(29, 8, 15, 1, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(30, 10, 15, 2, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(32, 9, 16, 2, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(33, 9, 17, 1, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(34, 5, 17, 2, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(35, 5, 18, 1, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(36, 4, 18, 2, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(37, 4, 19, 1, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(40, 5, 20, 2, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(41, 4, 21, 1, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(43, 8, 22, 1, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(44, 4, 22, 2, NULL, NULL, NULL, '2018-07-13 19:47:20', '2018-07-13 19:47:20'),
(45, 4, 23, 1, NULL, NULL, NULL, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(47, 1, 24, 1, NULL, NULL, NULL, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(48, 10, 24, 2, NULL, NULL, NULL, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(49, 2, 25, 1, NULL, 1, NULL, '2018-07-13 19:47:21', '2018-07-17 00:17:41'),
(50, 5, 25, 2, NULL, NULL, NULL, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(51, 3, 26, 1, NULL, NULL, NULL, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(53, 4, 27, 1, NULL, NULL, NULL, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(54, 7, 27, 2, NULL, NULL, NULL, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(55, 5, 28, 1, NULL, NULL, NULL, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(58, 7, 29, 2, NULL, NULL, NULL, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(59, 7, 30, 1, NULL, NULL, NULL, '2018-07-13 19:47:21', '2018-07-13 19:47:21'),
(60, 2, 30, 2, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(61, 8, 31, 1, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(62, 3, 31, 2, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(63, 9, 32, 1, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(64, 4, 32, 2, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(65, 10, 33, 1, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(67, 7, 34, 1, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(68, 4, 34, 2, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(69, 9, 35, 1, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(70, 8, 35, 2, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(71, 8, 36, 1, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(72, 4, 36, 2, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(73, 8, 37, 1, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(74, 1, 37, 2, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(75, 9, 38, 1, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(76, 2, 38, 2, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(77, 10, 39, 1, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(78, 3, 39, 2, NULL, NULL, NULL, '2018-07-13 19:47:22', '2018-07-13 19:47:22'),
(79, 7, 40, 1, NULL, NULL, NULL, '2018-07-13 19:47:23', '2018-07-13 19:47:23'),
(81, 9, 41, 1, NULL, NULL, NULL, '2018-07-13 19:47:23', '2018-07-13 19:47:23'),
(82, 7, 41, 2, NULL, NULL, NULL, '2018-07-13 19:47:23', '2018-07-13 19:47:23'),
(83, 8, 42, 1, NULL, NULL, NULL, '2018-07-13 19:47:23', '2018-07-13 19:47:23'),
(84, 2, 42, 2, 'BSO DOSHA', NULL, 'kemampuan perhitungan yang bagu', '2018-07-13 19:47:23', '2018-07-15 18:27:32'),
(85, 4, 43, 1, NULL, NULL, NULL, '2018-07-13 19:47:39', '2018-07-13 19:47:39'),
(86, 3, 43, 2, NULL, NULL, NULL, '2018-07-13 19:47:39', '2018-07-13 19:47:39'),
(87, 9, 44, 1, NULL, NULL, NULL, '2018-07-13 19:47:39', '2018-07-13 19:47:39'),
(88, 4, 44, 2, NULL, NULL, NULL, '2018-07-13 19:47:39', '2018-07-13 19:47:39'),
(89, 4, 45, 1, NULL, NULL, NULL, '2018-07-13 19:47:39', '2018-07-13 19:47:39'),
(90, 1, 45, 2, NULL, NULL, NULL, '2018-07-13 19:47:39', '2018-07-13 19:47:39'),
(91, 2, 46, 1, NULL, NULL, NULL, '2018-07-16 19:24:33', '2018-07-16 19:24:33'),
(92, 4, 46, 2, NULL, NULL, NULL, '2018-07-16 19:24:33', '2018-07-16 19:24:33'),
(93, 7, 47, 1, NULL, NULL, NULL, '2018-07-16 19:24:33', '2018-07-16 19:24:33'),
(94, 4, 47, 2, NULL, NULL, NULL, '2018-07-16 19:24:33', '2018-07-16 19:24:33'),
(95, 3, 48, 1, NULL, NULL, NULL, '2018-07-16 19:24:33', '2018-07-16 19:24:33'),
(96, 7, 48, 2, NULL, NULL, NULL, '2018-07-16 19:24:33', '2018-07-16 19:24:33'),
(98, 2, 49, 2, NULL, NULL, NULL, '2018-07-16 22:44:15', '2018-07-16 22:44:15'),
(99, 2, 50, 1, NULL, NULL, NULL, '2018-07-17 00:12:54', '2018-07-17 00:12:54'),
(100, 4, 50, 2, NULL, NULL, NULL, '2018-07-17 00:12:54', '2018-07-17 00:12:54'),
(101, 7, 51, 1, NULL, NULL, NULL, '2018-07-17 00:12:55', '2018-07-17 00:12:55'),
(102, 4, 51, 2, NULL, NULL, NULL, '2018-07-17 00:12:55', '2018-07-17 00:12:55'),
(103, 3, 52, 1, NULL, NULL, NULL, '2018-07-17 00:12:55', '2018-07-17 00:12:55'),
(104, 7, 52, 2, NULL, NULL, NULL, '2018-07-17 00:12:55', '2018-07-17 00:12:55'),
(105, 4, 53, 1, NULL, NULL, NULL, '2018-07-17 00:38:09', '2018-07-17 00:38:09'),
(106, 7, 53, 2, NULL, NULL, NULL, '2018-07-17 00:38:09', '2018-07-17 00:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `detail_tugas`
--

CREATE TABLE IF NOT EXISTS `detail_tugas` (
`id` int(10) unsigned NOT NULL,
  `nilai_tugas` int(11) DEFAULT NULL,
  `id_tugas` int(10) unsigned NOT NULL,
  `id_detail_calon_anggota` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_tugas`
--

INSERT INTO `detail_tugas` (`id`, `nilai_tugas`, `id_tugas`, `id_detail_calon_anggota`, `created_at`, `updated_at`) VALUES
(4, 60, 2, 49, '2018-07-15 18:25:51', '2018-07-15 18:26:03'),
(5, 77, 3, 49, '2018-07-15 18:25:51', '2018-07-16 19:46:55'),
(6, 77, 2, 60, '2018-07-15 18:25:51', '2018-07-15 18:26:09'),
(7, 65, 3, 60, '2018-07-15 18:25:51', '2018-07-16 19:46:58'),
(8, 66, 2, 76, '2018-07-15 18:25:51', '2018-07-17 00:15:49'),
(9, 90, 3, 76, '2018-07-15 18:25:51', '2018-07-16 19:47:01'),
(10, 88, 2, 84, '2018-07-15 18:25:52', '2018-07-15 18:26:17'),
(11, 88, 3, 84, '2018-07-15 18:25:52', '2018-07-16 19:47:05'),
(25, 77, 2, 91, '2018-07-16 19:46:48', '2018-07-16 19:47:08'),
(26, 78, 3, 91, '2018-07-16 19:46:48', '2018-07-16 19:47:10'),
(27, 80, 2, 98, '2018-07-17 00:15:19', '2018-07-17 00:15:47'),
(28, 77, 3, 98, '2018-07-17 00:15:19', '2018-07-17 00:15:55'),
(29, 90, 2, 99, '2018-07-17 00:15:19', '2018-07-17 00:15:52'),
(30, 90, 3, 99, '2018-07-17 00:15:19', '2018-07-17 00:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatans`
--

CREATE TABLE IF NOT EXISTS `kegiatans` (
`id` int(10) unsigned NOT NULL,
  `nama_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `waktu` time NOT NULL,
  `id_departemen` int(10) unsigned NOT NULL,
  `id_periode` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `nama_kegiatan`, `tanggal_kegiatan`, `waktu`, `id_departemen`, `id_periode`, `created_at`, `updated_at`) VALUES
(1, 'First Gathering', '2018-07-12', '09:24:35', 1, 1, NULL, NULL),
(2, 'Pelatihan Desain', '2018-07-12', '09:24:35', 2, 1, NULL, NULL),
(3, 'LK', '2018-07-12', '09:24:35', 3, 1, NULL, NULL),
(4, 'Tahsin', '2018-07-12', '09:24:36', 4, 1, NULL, NULL),
(7, 'Kegiatan Cek', '2018-07-17', '00:00:00', 5, 1, '2018-07-16 23:03:39', '2018-07-16 23:03:39'),
(8, 'Pelatihan kepemimpinan 3', '2018-07-19', '09:30:00', 2, 1, '2018-07-17 00:14:48', '2018-07-17 00:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
`id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(51, '2014_05_11_000000_create_departemens_table', 1),
(52, '2014_10_12_000000_create_users_table', 1),
(53, '2014_10_12_100000_create_password_resets_table', 1),
(54, '2018_05_21_142539_create_periodes_table', 1),
(55, '2018_05_21_142646_create_calon_anggotas_table', 1),
(56, '2018_05_21_143652_create_detail_calon_anggotas_table', 1),
(57, '2018_05_21_144823_create_kegiatans_table', 1),
(58, '2018_05_21_144935_create_presensis_table', 1),
(59, '2018_05_21_145523_create_tugas_table', 1),
(60, '2018_05_21_145618_create_detail_tugas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `periodes`
--

CREATE TABLE IF NOT EXISTS `periodes` (
`id` int(10) unsigned NOT NULL,
  `tahun` year(4) NOT NULL,
  `periode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periodes`
--

INSERT INTO `periodes` (`id`, `tahun`, `periode`, `status`, `created_at`, `updated_at`) VALUES
(1, 2018, '1439H', 1, NULL, '2018-07-13 11:52:16'),
(2, 2017, '1438H', 0, NULL, '2018-07-13 11:52:16'),
(3, 2011, '1421H', 0, '2018-07-13 19:04:17', '2018-07-13 19:37:11'),
(4, 2020, '1438H', 0, '2018-07-17 00:11:08', '2018-07-17 00:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `presensis`
--

CREATE TABLE IF NOT EXISTS `presensis` (
`id` int(10) unsigned NOT NULL,
  `id_detail_calon_anggota` int(10) unsigned NOT NULL,
  `id_kegiatan` int(10) unsigned NOT NULL,
  `kehadiran` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presensis`
--

INSERT INTO `presensis` (`id`, `id_detail_calon_anggota`, `id_kegiatan`, `kehadiran`, `created_at`, `updated_at`) VALUES
(3, 49, 2, 0, '2018-07-13 19:51:19', '2018-07-15 18:38:23'),
(4, 60, 2, 0, '2018-07-13 19:51:19', '2018-07-13 19:51:28'),
(5, 76, 2, 1, '2018-07-13 19:51:19', '2018-07-13 19:51:19'),
(6, 84, 2, 1, '2018-07-13 19:51:19', '2018-07-13 19:51:19'),
(33, 91, 2, 1, '2018-07-16 19:46:35', '2018-07-16 19:46:35'),
(34, 11, 7, 0, '2018-07-16 23:03:44', '2018-07-16 23:03:54'),
(35, 17, 7, 1, '2018-07-16 23:03:44', '2018-07-16 23:08:09'),
(36, 34, 7, 1, '2018-07-16 23:03:44', '2018-07-16 23:03:44'),
(37, 35, 7, 0, '2018-07-16 23:03:44', '2018-07-16 23:03:55'),
(38, 40, 7, 1, '2018-07-16 23:03:46', '2018-07-16 23:03:46'),
(39, 50, 7, 0, '2018-07-16 23:03:47', '2018-07-16 23:03:57'),
(40, 55, 7, 1, '2018-07-16 23:03:47', '2018-07-16 23:03:47'),
(42, 49, 8, 1, '2018-07-17 00:14:53', '2018-07-17 00:14:53'),
(43, 60, 8, 1, '2018-07-17 00:14:53', '2018-07-17 00:14:53'),
(44, 76, 8, 1, '2018-07-17 00:14:53', '2018-07-17 00:14:53'),
(45, 84, 8, 0, '2018-07-17 00:14:53', '2018-07-17 00:15:10'),
(46, 91, 8, 0, '2018-07-17 00:14:53', '2018-07-17 00:15:11'),
(47, 98, 2, 1, '2018-07-17 00:14:54', '2018-07-17 00:14:54'),
(48, 98, 8, 1, '2018-07-17 00:14:54', '2018-07-17 00:14:54'),
(49, 99, 2, 1, '2018-07-17 00:14:54', '2018-07-17 00:14:54'),
(50, 99, 8, 1, '2018-07-17 00:14:54', '2018-07-17 00:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
`id` int(10) unsigned NOT NULL,
  `nama_tugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` date NOT NULL,
  `id_departemen` int(10) unsigned NOT NULL,
  `id_periode` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `nama_tugas`, `deskripsi`, `deadline`, `id_departemen`, `id_periode`, `created_at`, `updated_at`) VALUES
(1, 'Essay', 'membuat essay dengan tema pentingnya agama dalam kehidupan', '2018-07-12', 1, 1, NULL, NULL),
(2, 'Digitalisasi Buku', 'membuat digitalisasi buku minimal 6 halaman A4 (softfile)', '2018-07-12', 2, 1, NULL, NULL),
(3, 'essay', 'membuat essay dengan tema "Kepemimpinan"', '2018-07-18', 2, 1, '2018-07-15 18:25:45', '2018-07-15 18:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_departemen` int(10) unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `id_departemen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'titihanifah', 'titihanifah25@gmail.com', 0, '$2y$10$HH.knfVH9OdjPtRV5eeyp.L0wttwGD/uGOnTwChMdZ9izLfFQaPV6', 1, 'EOonxOoVxs2zNkczRRPPydYsNiBly8DWSTarOj1CuWlZOwtalpzKOXpWuHpV', NULL, '2018-07-12 07:29:10'),
(2, 'admin', 'admin@gmail.com', 1, '$2y$10$sXzInrVCJh/97fRLbT2TXOtwjJ3Vy9FdLI8iarEbMAu3HC2hHJxSO', 4, 'LPQZbzh4Mc55Nfhny5xM8NZrNgghCNijbgicU5QvCCDYkxf5bNVY0xYV4Gwk', NULL, '2018-07-17 00:13:42'),
(3, 'BKK', 'bkk@js.ugm.ac.id', 1, '$2y$10$lZJevG9gHhEUxCoF9HtJSOdm4MJVbWMM/wCvNowTWDpyvvRgi8pfe', NULL, NULL, NULL, '2018-07-12 03:00:09'),
(4, 'Kadept Kastrat', 'kastrat@js.ugm.ac.id', 0, '$2y$10$Wvkh2e2GFROTDrzCoijg2eMtHykEhL.aiNQJRFBBKmvKfjsGtiGeS', 1, NULL, NULL, '2018-07-13 13:21:21'),
(5, 'Kadept Kemuslimahan', 'kemuslimahan@js.ugm.ac.id', 0, '$2y$10$0SJVe6kVQJQmSzWAuUry8ul/tSl8pox20RnS/UsPvMU7KbjAJ7cgq', 2, 'RuSbJzNb7O89amaaNX80TIL8rUYec8PTlVLSWFT1PS8RaVPnbnc9tJyGB31L', NULL, '2018-07-13 13:34:56'),
(6, 'Kadept BSO DOSHA', 'bsodosha@js.ugm.ac.id', 0, '$2y$10$2p1hnsODKzI8lNCwFksG9ejmkv3u6JFu4g8KfWz4cK9T3YzBznPfy', 3, NULL, NULL, '2018-07-12 03:00:28'),
(7, 'Kadept BSO GMMQ', 'bsogmmq@js.ugm.ac.id', 0, '$2y$10$.M.KJMq5z19xbdMcNyQ86ODA3c.NJ8iTcT6jt..cZdvKKYfNVbWnW', 4, NULL, NULL, '2018-07-12 03:00:36'),
(8, 'Kadept Shar''E', 'share@js.ugm.ac.id', 0, '$2y$10$c1FQ5FyZb5k1l9IyCN3rA.ObruFkerZmLje0t5Sd/132V3zDfg/tm', 5, 'oUTEQuIgvEIYtSayGi6vYJ2S0LaeY6I8trbeEXJr5aRGaNEUI8qju8fGlNcO', NULL, '2018-07-12 03:00:41'),
(10, 'Kadept Jaringan', 'jaringan@js.ugm.ac.id', 0, '$2y$10$3Rwf2IGRJgd5oxuvv2mOOun4GEMs7WZB11ERAr.cvxLRGbfT0dZ7e', 7, NULL, NULL, '2018-07-12 03:00:50'),
(11, 'Kadept DPS', 'dps@js.ugm.ac.id', 0, '$2y$10$TbCevppmru.IHtakdpDNMeh1ZmrJ4yndIJx6n.GgTlsp99j9ZKR96', 8, NULL, NULL, '2018-07-12 03:00:58'),
(12, 'Kadept MC', 'mc@js.ugm.ac.id', 0, '$2y$10$bQ/oRpYStWeg94HhAaxrZeMLrAS7wjF.lRZBS66zigSJBj8hVDigO', 9, NULL, NULL, '2018-07-12 03:01:07'),
(13, 'Kadept Sosmas', 'sosmas@js.ugm.ac.id', 0, '$2y$10$Y0XIy92Zixw.xiKTifEfbOxp68dKL0lyqKMqeDnvYEdsIB/k0JPf2', 10, NULL, NULL, '2018-07-12 03:01:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_anggotas`
--
ALTER TABLE `calon_anggotas`
 ADD PRIMARY KEY (`id`), ADD KEY `calon_anggotas_id_periode_foreign` (`id_periode`);

--
-- Indexes for table `departemens`
--
ALTER TABLE `departemens`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_calon_anggotas`
--
ALTER TABLE `detail_calon_anggotas`
 ADD PRIMARY KEY (`id`), ADD KEY `detail_calon_anggotas_id_departemen_foreign` (`id_departemen`), ADD KEY `detail_calon_anggotas_id_calon_anggota_foreign` (`id_calon_anggota`);

--
-- Indexes for table `detail_tugas`
--
ALTER TABLE `detail_tugas`
 ADD PRIMARY KEY (`id`), ADD KEY `detail_tugas_id_tugas_foreign` (`id_tugas`), ADD KEY `detail_tugas_id_detail_calon_anggota_foreign` (`id_detail_calon_anggota`);

--
-- Indexes for table `kegiatans`
--
ALTER TABLE `kegiatans`
 ADD PRIMARY KEY (`id`), ADD KEY `kegiatans_id_departemen_foreign` (`id_departemen`), ADD KEY `kegiatans_id_periode_foreign` (`id_periode`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `periodes`
--
ALTER TABLE `periodes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensis`
--
ALTER TABLE `presensis`
 ADD PRIMARY KEY (`id`), ADD KEY `presensis_id_detail_calon_anggota_foreign` (`id_detail_calon_anggota`), ADD KEY `presensis_id_kegiatan_foreign` (`id_kegiatan`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
 ADD PRIMARY KEY (`id`), ADD KEY `tugas_id_departemen_foreign` (`id_departemen`), ADD KEY `tugas_id_periode_foreign` (`id_periode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD KEY `users_id_departemen_foreign` (`id_departemen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_anggotas`
--
ALTER TABLE `calon_anggotas`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `departemens`
--
ALTER TABLE `departemens`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `detail_calon_anggotas`
--
ALTER TABLE `detail_calon_anggotas`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `detail_tugas`
--
ALTER TABLE `detail_tugas`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `kegiatans`
--
ALTER TABLE `kegiatans`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `periodes`
--
ALTER TABLE `periodes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `presensis`
--
ALTER TABLE `presensis`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `calon_anggotas`
--
ALTER TABLE `calon_anggotas`
ADD CONSTRAINT `calon_anggotas_id_periode_foreign` FOREIGN KEY (`id_periode`) REFERENCES `periodes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `detail_calon_anggotas`
--
ALTER TABLE `detail_calon_anggotas`
ADD CONSTRAINT `detail_calon_anggotas_id_calon_anggota_foreign` FOREIGN KEY (`id_calon_anggota`) REFERENCES `calon_anggotas` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `detail_calon_anggotas_id_departemen_foreign` FOREIGN KEY (`id_departemen`) REFERENCES `departemens` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `detail_tugas`
--
ALTER TABLE `detail_tugas`
ADD CONSTRAINT `detail_tugas_id_detail_calon_anggota_foreign` FOREIGN KEY (`id_detail_calon_anggota`) REFERENCES `detail_calon_anggotas` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `detail_tugas_id_tugas_foreign` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kegiatans`
--
ALTER TABLE `kegiatans`
ADD CONSTRAINT `kegiatans_id_departemen_foreign` FOREIGN KEY (`id_departemen`) REFERENCES `departemens` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `kegiatans_id_periode_foreign` FOREIGN KEY (`id_periode`) REFERENCES `periodes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `presensis`
--
ALTER TABLE `presensis`
ADD CONSTRAINT `presensis_id_detail_calon_anggota_foreign` FOREIGN KEY (`id_detail_calon_anggota`) REFERENCES `detail_calon_anggotas` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `presensis_id_kegiatan_foreign` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
ADD CONSTRAINT `tugas_id_departemen_foreign` FOREIGN KEY (`id_departemen`) REFERENCES `departemens` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `tugas_id_periode_foreign` FOREIGN KEY (`id_periode`) REFERENCES `periodes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_id_departemen_foreign` FOREIGN KEY (`id_departemen`) REFERENCES `departemens` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
