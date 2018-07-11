-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2018 at 05:46 AM
-- Server version: 10.1.29-MariaDB-6+b1
-- PHP Version: 7.0.29-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_warga`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(11) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(191) NOT NULL,
  `id_user` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `judul`, `isi`, `tanggal`, `id_user`) VALUES
(2, 'IMUNISASI', 'okeokoeok', '2018-07-11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `nik` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tempat_ttl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status_nikah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warga_negara` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid_till` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ktp`
--

INSERT INTO `ktp` (`nik`, `Nama`, `Tempat_ttl`, `jenis_kelamin`, `Alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `agama`, `Status_nikah`, `pekerjaan`, `warga_negara`, `valid_till`) VALUES
('1234567891213141', 'Muhammad Arsalan Diponegoro', 'Bekasi,12-06-1999', 'Laki - Laki', 'bekasi', '05', '014', 'teluk pucung', 'bekasi utara', 'islam', 'belum menikah', 'pelajar', 'indonesia', 'seumur hidup');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran`
--

CREATE TABLE `lampiran` (
  `id_lampiran` int(10) UNSIGNED NOT NULL,
  `nama_lampiran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_surket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lampiran`
--

INSERT INTO `lampiran` (`id_lampiran`, `nama_lampiran`, `source`, `nik`, `id_surket`) VALUES
(12, 'Kartu Keluarga', 'storage/materialize-logo.png', '1234567891213141', 17);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_08_173801_tb_ktp', 1),
(4, '2018_07_08_174911_surket', 1),
(5, '2018_07_08_174918_lampiran', 1);

-- --------------------------------------------------------

--
-- Table structure for table `non_ktp`
--

CREATE TABLE `non_ktp` (
  `id_non_ktp` int(11) NOT NULL,
  `Nama` varchar(191) NOT NULL,
  `id_surket` int(11) NOT NULL,
  `Tempat_ttl` varchar(191) NOT NULL,
  `jenis_kelamin` varchar(191) NOT NULL,
  `alamat` varchar(191) DEFAULT NULL,
  `rt` varchar(191) NOT NULL,
  `rw` varchar(191) NOT NULL,
  `kelurahan` varchar(191) NOT NULL,
  `kecamatan` varchar(191) NOT NULL,
  `agama` varchar(191) NOT NULL,
  `Status_nikah` varchar(191) NOT NULL,
  `pekerjaan` varchar(191) NOT NULL,
  `warga_negara` varchar(191) NOT NULL,
  `valid_till` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `non_ktp`
--

INSERT INTO `non_ktp` (`id_non_ktp`, `Nama`, `id_surket`, `Tempat_ttl`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `agama`, `Status_nikah`, `pekerjaan`, `warga_negara`, `valid_till`) VALUES
(1, 'Febrina diponegoro', 17, 'bekasi,12-06-1999', 'Wanita', NULL, '05', '014', 'teluk pucung', 'bekasi utara', 'islam', 'Belum menikah', 'pelajar', 'INDONESIA', 'Seumur hidup');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surket`
--

CREATE TABLE `surket` (
  `id_surket` int(10) UNSIGNED NOT NULL,
  `jenis_surket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_surket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibuat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diambil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surket`
--

INSERT INTO `surket` (`id_surket`, `jenis_surket`, `nama_surket`, `nik`, `status`, `dibuat`, `diambil`) VALUES
(17, 'peng_KTP', 'Surat Keterangan Pengantar Ktp', '1234567891213141', 'setuju', '2018-07-11', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'arsalan', 'arsalan.dp@gmail.com', NULL, '$2y$10$ENztHFTEBYxfxx3VMxfeAuuffegBBTmrdNRJAzbJod7dT.xxLohnK', 'Yr3DxG5iWpWvrD1Iq82UWB4pqB61QSYekATqyBycftaQlal0AB6s7WaUum6w', '2018-07-08 14:09:18', '2018-07-08 14:09:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`id_lampiran`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `non_ktp`
--
ALTER TABLE `non_ktp`
  ADD PRIMARY KEY (`id_non_ktp`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `surket`
--
ALTER TABLE `surket`
  ADD PRIMARY KEY (`id_surket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lampiran`
--
ALTER TABLE `lampiran`
  MODIFY `id_lampiran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `non_ktp`
--
ALTER TABLE `non_ktp`
  MODIFY `id_non_ktp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surket`
--
ALTER TABLE `surket`
  MODIFY `id_surket` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
