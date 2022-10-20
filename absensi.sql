-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2022 pada 17.02
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matkul_id` bigint(20) NOT NULL,
  `pertemuan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `tgl` date NOT NULL,
  `jammasuk` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `matkul_id`, `pertemuan`, `user_id`, `tgl`, `jammasuk`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 2, '2022-02-27', '07:36:56', '2022-02-26 15:36:56', '2022-02-26 15:36:56'),
(4, 5, '1', 6, '2022-02-28', '14:36:52', '2022-02-27 22:36:52', '2022-02-27 22:36:52'),
(5, 4, '1', 6, '2022-02-28', '14:37:02', '2022-02-27 22:37:02', '2022-02-27 22:37:02'),
(6, 3, '1', 6, '2022-02-28', '14:37:09', '2022-02-27 22:37:09', '2022-02-27 22:37:09'),
(7, 2, '1', 4, '2022-02-28', '14:37:36', '2022-02-27 22:37:36', '2022-02-27 22:37:36'),
(8, 3, '1', 4, '2022-02-28', '14:37:47', '2022-02-27 22:37:47', '2022-02-27 22:37:47'),
(9, 4, '1', 4, '2022-02-28', '14:38:36', '2022-02-27 22:38:36', '2022-02-27 22:38:36'),
(10, 5, '1', 2, '2022-03-01', '02:06:20', '2022-02-28 10:06:20', '2022-02-28 10:06:20'),
(11, 5, '1', 5, '2022-03-01', '02:06:54', '2022-02-28 10:06:54', '2022-02-28 10:06:54'),
(12, 5, '1', 6, '2022-03-01', '02:07:20', '2022-02-28 10:07:20', '2022-02-28 10:07:20'),
(13, 5, '1', 4, '2022-03-01', '02:07:56', '2022-02-28 10:07:56', '2022-02-28 10:07:56'),
(14, 1, '1', 4, '2022-03-02', '10:08:24', '2022-03-01 18:08:24', '2022-03-01 18:08:24'),
(15, 1, '1', 2, '2022-03-02', '10:08:52', '2022-03-01 18:08:52', '2022-03-01 18:08:52'),
(16, 1, '1', 6, '2022-03-02', '10:09:21', '2022-03-01 18:09:21', '2022-03-01 18:09:21'),
(17, 1, '1', 5, '2022-03-02', '10:10:18', '2022-03-01 18:10:18', '2022-03-01 18:10:18'),
(18, 1, '1', 7, '2022-03-02', '10:10:50', '2022-03-01 18:10:50', '2022-03-01 18:10:50'),
(19, 1, '1', 8, '2022-03-02', '11:19:01', '2022-03-01 19:19:01', '2022-03-01 19:19:01'),
(20, 2, '1', 10, '2022-03-03', '14:15:58', '2022-03-02 22:15:58', '2022-03-02 22:15:58'),
(21, 3, '2', 2, '2022-03-08', '21:03:35', '2022-03-08 05:03:35', '2022-03-08 05:03:35'),
(22, 5, '2', 2, '2022-03-08', '21:04:00', '2022-03-08 05:04:00', '2022-03-08 05:04:00'),
(23, 4, '1', 2, '2022-03-08', '21:10:08', '2022-03-08 05:10:08', '2022-03-08 05:10:08'),
(24, 5, '3', 2, '2022-03-08', '21:10:28', '2022-03-08 05:10:28', '2022-03-08 05:10:28'),
(25, 1, '1', 10, '2022-03-10', '12:19:09', '2022-03-09 20:19:09', '2022-03-09 20:19:09'),
(26, 1, '2', 10, '2022-03-15', '10:21:41', '2022-03-14 18:21:41', '2022-03-14 18:21:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
