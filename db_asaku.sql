-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 12:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_asaku`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_10_083520_create_products_table', 1),
(6, '2023_08_10_114014_create_skkbs_table', 1),
(7, '2023_08_12_020409_create_srkips_table', 1),
(8, '2023_08_12_020647_create_skaws_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaproduk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `namaumkm` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skaws`
--

CREATE TABLE `skaws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noreg` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `kelamin` varchar(255) DEFAULT NULL,
  `kewarganegaraan` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `pernikahan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `namaaw` varchar(255) DEFAULT NULL,
  `nomoraw` varchar(255) DEFAULT NULL,
  `tempataw` varchar(255) DEFAULT NULL,
  `tanggalaw` varchar(255) DEFAULT NULL,
  `kelaminaw` varchar(255) DEFAULT NULL,
  `kewarganegaraanaw` varchar(255) DEFAULT NULL,
  `agamaaw` varchar(255) DEFAULT NULL,
  `pernikahanaw` varchar(255) DEFAULT NULL,
  `alamataw` varchar(255) DEFAULT NULL,
  `nomorsurat` varchar(255) DEFAULT NULL,
  `tanggalsurat` varchar(255) DEFAULT NULL,
  `pukul` varchar(255) DEFAULT NULL,
  `tempatmeninggal` varchar(255) DEFAULT NULL,
  `tanggalmeninggal` varchar(255) DEFAULT NULL,
  `kebumikan` varchar(255) DEFAULT NULL,
  `rt` varchar(255) DEFAULT NULL,
  `pernyataan` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `ktpaw` varchar(255) DEFAULT NULL,
  `kematian` varchar(255) DEFAULT NULL,
  `saksi` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `hasil` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skaws`
--

INSERT INTO `skaws` (`id`, `noreg`, `nama`, `nomor`, `tempat`, `tanggal`, `kelamin`, `kewarganegaraan`, `agama`, `pernikahan`, `alamat`, `namaaw`, `nomoraw`, `tempataw`, `tanggalaw`, `kelaminaw`, `kewarganegaraanaw`, `agamaaw`, `pernikahanaw`, `alamataw`, `nomorsurat`, `tanggalsurat`, `pukul`, `tempatmeninggal`, `tanggalmeninggal`, `kebumikan`, `rt`, `pernyataan`, `ktp`, `kk`, `ktpaw`, `kematian`, `saksi`, `catatan`, `status`, `hasil`, `created_at`, `updated_at`) VALUES
(1, 'REGSKAW202308171', 'asd', '1234', 'qwe', '2023-08-18', 'Laki-Laki', 'asd', 'Islam', 'Belum Kawin', 'asd', 'qwerqwr', '124125', 'asd', '2023-08-18', 'Perempuan', 'qwqw', 'Islam', 'Belum Kawin', 'gsdqawr', '1245', '2023-08-18', '12412', 'asgads', '2023-08-18', 'qweqwrqt', 'berkas-persyaratan/OWorc26a0SJnk0O4M4UF9Rr5OIFr3iBtpslHWNxJ.jpg', 'berkas-persyaratan/JrYTu2SPCrA6rSIFSzSvsyjuVQfGmJOvldCQJxMh.jpg', 'berkas-persyaratan/semWP3gGRGN8LqepnWUDHMMUkfCsafqR1XSGbAVl.jpg', 'berkas-persyaratan/yVj9CnUNEIdrF8D2jrll7A2PvPTv5m0JMt55Am84.jpg', 'berkas-persyaratan/CNKqT7f5L1rDM3bFjYNCJiMDW1zg1J955BjI8th6.jpg', 'berkas-persyaratan/a5iJWdQoO9s83M8LMHCZRRz1gw1HzmPMgNEAP4E3.jpg', 'berkas-persyaratan/8jlTMeTot9Zz33ExkzvmTkszXyJPQ2EtDWB4gpq0.jpg', NULL, 'Menunggu', '', '2023-08-17 15:24:39', '2023-08-17 15:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `skkbs`
--

CREATE TABLE `skkbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noreg` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kelamin` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `pernikahan` varchar(255) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `rt` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `hasil` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `srkips`
--

CREATE TABLE `srkips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noreg` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kelamin` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `pernikahan` varchar(255) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `namaanak` varchar(255) DEFAULT NULL,
  `nomoranak` varchar(255) DEFAULT NULL,
  `kelaminanak` varchar(255) DEFAULT NULL,
  `tempatanak` varchar(255) DEFAULT NULL,
  `tanggalanak` varchar(255) DEFAULT NULL,
  `alamatanak` varchar(255) DEFAULT NULL,
  `rt` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `sekolah` varchar(255) DEFAULT NULL,
  `akte` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `hasil` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$yQkde5EOX/4vjw3WjPU4PeYVhiN7QUNbF6RRvBCy/fRFC7w9IMqru', NULL, '2023-08-17 15:22:57', '2023-08-17 15:22:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skaws`
--
ALTER TABLE `skaws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skkbs`
--
ALTER TABLE `skkbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `srkips`
--
ALTER TABLE `srkips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skaws`
--
ALTER TABLE `skaws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skkbs`
--
ALTER TABLE `skkbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `srkips`
--
ALTER TABLE `srkips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
