-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk presensi
CREATE DATABASE IF NOT EXISTS `presensi` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `presensi`;

-- Membuang data untuk tabel presensi.absensi: ~0 rows (lebih kurang)

-- Membuang data untuk tabel presensi.dosen: ~0 rows (lebih kurang)
REPLACE INTO `dosen` (`id`, `namadosen`, `nip`, `nidn`, `created_at`, `updated_at`) VALUES
	(1, 'Nahdi Saubari., M.Kom', 108101991207005018, 1108109102, NULL, NULL);

-- Membuang data untuk tabel presensi.failed_jobs: ~0 rows (lebih kurang)

-- Membuang data untuk tabel presensi.matkul: ~2 rows (lebih kurang)
REPLACE INTO `matkul` (`id`, `matkul`, `dosen_id`, `sks`, `tahun_id`, `created_at`, `updated_at`) VALUES
	(1, 'Microcontroller', 1, '3', 2, '2022-09-09 02:48:14', '2022-09-09 02:48:14'),
	(3, 'Aljabar', 1, '3', 2, '2022-09-09 02:48:14', '2022-09-09 02:48:14');

-- Membuang data untuk tabel presensi.migrations: ~8 rows (lebih kurang)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_01_21_122220_create_absensis_table', 1),
	(6, '2022_02_04_021610_create_mata_kuliahs_table', 1),
	(7, '2022_02_04_021649_create_dosens_table', 1),
	(8, '2022_02_04_023124_create_pertemuans_table', 1);

-- Membuang data untuk tabel presensi.mulai: ~0 rows (lebih kurang)
REPLACE INTO `mulai` (`id`, `matkul_id`, `pertemuan_id`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
	(3, 1, 1, '16:00:00', '16:05:00', '2022-09-28 07:43:50', '2022-09-28 08:11:32');

-- Membuang data untuk tabel presensi.password_resets: ~0 rows (lebih kurang)

-- Membuang data untuk tabel presensi.personal_access_tokens: ~0 rows (lebih kurang)

-- Membuang data untuk tabel presensi.pertemuan: ~14 rows (lebih kurang)
REPLACE INTO `pertemuan` (`id`, `pertemuan`, `created_at`, `updated_at`) VALUES
	(1, '1', NULL, NULL),
	(2, '2', NULL, NULL),
	(3, '3', NULL, NULL),
	(4, '4', NULL, NULL),
	(5, '5', NULL, NULL),
	(6, '6', NULL, NULL),
	(7, '7', NULL, NULL),
	(8, '8', NULL, NULL),
	(9, '9', NULL, NULL),
	(10, '10', NULL, NULL),
	(11, '11', NULL, NULL),
	(12, '12', NULL, NULL),
	(13, '13', NULL, NULL),
	(14, '14', NULL, NULL);

-- Membuang data untuk tabel presensi.tahun: ~2 rows (lebih kurang)
REPLACE INTO `tahun` (`id`, `tahun`, `keterangan`) VALUES
	(1, '2021/2022', 'Ganjil'),
	(2, '2021/2022', 'Genap');

-- Membuang data untuk tabel presensi.users: ~0 rows (lebih kurang)
REPLACE INTO `users` (`id`, `nim`, `nama`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, '001', 'Admin', 'admin', 'admin@admin.com', NULL, '$2y$10$US/gHDIALL1hEn2otrPvBeuEA0fhhZnPwpLh.6ry1K5ZB89YFuuba', 'ZbTzdZmvVBJsWThOerolTGHT1ckuSZ1R8rR3d3eAAJADtWHmCEBlbTGSl21J', '2022-06-27 19:35:54', '2022-06-27 19:35:54'),
	(2, '002', 'mhs', 'mahasiswa', 'mhs@mhs.com', NULL, '$2y$10$US/gHDIALL1hEn2otrPvBeuEA0fhhZnPwpLh.6ry1K5ZB89YFuuba', NULL, '2022-09-27 21:38:09', '2022-09-27 21:38:09');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
