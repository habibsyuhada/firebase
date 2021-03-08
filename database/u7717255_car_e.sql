-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Mar 2021 pada 06.22
-- Versi server: 10.3.28-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u7717255_car_e`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_budget`
--

CREATE TABLE `mst_budget` (
  `id` int(11) NOT NULL,
  `year_budget` year(4) NOT NULL,
  `month_budget` varchar(50) NOT NULL,
  `cost_budget` float NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mst_budget`
--

INSERT INTO `mst_budget` (`id`, `year_budget`, `month_budget`, `cost_budget`, `updated_at`, `created_at`) VALUES
(1, 2021, 'Januari', 12500000, '2021-02-07 10:11:46', '2021-02-07 10:11:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_car`
--

CREATE TABLE `mst_car` (
  `id` int(11) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `police_number` varchar(15) NOT NULL,
  `avg_fuel` float NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Available' COMMENT 'Available or Not Available',
  `assign_driver` int(11) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mst_car`
--

INSERT INTO `mst_car` (`id`, `car_name`, `police_number`, `avg_fuel`, `status`, `assign_driver`, `latitude`, `longitude`, `updated_at`, `created_at`) VALUES
(5, 'Grandmax', 'BP 1686 HE', 0, 'Available', 0, '1.0580241639491563', '104.02431294733775', '2021-03-05 23:18:58', '2021-02-23 08:31:21'),
(6, 'Grandmax', 'BP 1824 HG', 0, 'Available', 24, '', '', '2021-03-05 23:18:58', '2021-02-23 08:32:20'),
(7, 'LUXIO', 'BP 1865 EC', 0, 'Available', 0, '', '', '2021-03-05 09:38:27', '2021-02-23 08:33:14'),
(9, 'AVANZA VELOZ (BLACK)', 'BP 1016 FF', 0, 'Available', 0, '', '', '2021-03-05 09:40:50', '2021-02-23 08:34:15'),
(10, 'PICKUP (SPS)', 'BP 8049 DI', 0, 'Available', 0, '', '', '2021-02-23 08:36:25', '2021-02-23 08:36:25'),
(11, 'GRANDMAX', 'BP 1867 EC', 0, 'Available', 0, '', '', '2021-02-23 08:36:43', '2021-02-23 08:36:43'),
(12, 'LUXIO NEW', 'BP 1814 AD', 0, 'Available', 0, '', '', '2021-02-23 08:38:14', '2021-02-23 08:38:14'),
(13, 'AVANZA VELOZ (SILVER)', 'BP 1294 E', 0, 'Available', 27, '', '', '2021-03-08 02:17:24', '2021-02-23 08:38:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_department`
--

CREATE TABLE `mst_department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mst_department`
--

INSERT INTO `mst_department` (`id`, `department_name`, `updated_at`, `created_at`) VALUES
(1, 'Dukungan Bisnis (Dukbis)', '2021-02-07 10:43:23', '2021-02-07 10:43:07'),
(3, 'INSPEKSI TEKNIK', '2021-02-23 08:40:21', '2021-02-23 08:40:21'),
(4, 'INSPEKSI UMUM', '2021-02-23 08:40:31', '2021-02-23 08:40:31'),
(5, 'LAB PENGUJIAN & KONSULTASI', '2021-02-23 08:41:00', '2021-02-23 08:41:00'),
(6, 'DUKUNGAN OPERASI (PDO)', '2021-02-23 08:41:18', '2021-02-23 08:41:18'),
(7, 'Driver', '2021-03-03 20:49:05', '2021-03-03 20:49:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_users`
--

CREATE TABLE `mst_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mst_users`
--

INSERT INTO `mst_users` (`id`, `name`, `email`, `password`, `department`, `role`, `token`, `updated_at`, `created_at`) VALUES
(8, 'test', 'test@gmail.com', '$2y$10$t0iN9xf44Wy5IanHVw.wueUJnMmS9B3ChVhkIJM959Tls50GpN.OW', 'Dukbis', 'user', NULL, '2021-02-17 07:28:13', '2021-02-17 07:28:13'),
(11, 'Habib', 'habibsyuhada.1109@gmail.com', '123456', 'IT', 'Cost Manager', NULL, '2021-02-21 21:44:14', '2021-02-21 21:44:14'),
(13, 'Fariz', 'fariz@gmail.com', '$2y$10$JYi4NO7kfNemx08SUFTLR.RYPzzdoq8U9OLpoc3ukdxezvx4m7.4y', 'Inspeksi Teknik (IT)', 'Cost Manager', NULL, '2021-02-22 14:24:07', '2021-02-22 14:24:07'),
(16, 'Peter', 'peter@gmail.com', '123456', 'Inspeksi Teknik (IT)', 'User', NULL, '2021-02-23 08:50:19', '2021-02-23 08:50:19'),
(17, 'fariz', 'mhmmd.fariz27@gmail.com', '$2y$10$3sdlLJtxRUHTvUN.WZjpqu/DVKj9IIdn7VKUIA7AB2ZShsgUOzJDC', 'INSPEKSI TEKNIK', 'user', NULL, '2021-03-03 04:41:46', '2021-03-03 04:41:46'),
(20, 'nazli', 'nazli@car-e.com', '$2y$10$jpWfHmHXRmJnS6pOtgMFZunflnEbAz.d.d1e732OFxBIgx.j8aoO.', 'INSPEKSI TEKNIK', 'hod', NULL, '2021-03-03 07:50:23', '2021-03-03 07:50:23'),
(21, 'awal', 'awal@car-e.com', '$2y$10$Sc0zisVYlx/7SIHMz5hDSuNkQKMWzv4bEa1PSjrDah6BHxPkmATMq', 'Dukungan Bisnis (Dukbis)', 'Verificator', NULL, '2021-03-03 07:52:28', '2021-03-03 07:52:28'),
(24, 'toni', 'toni@car-e.com', '$2y$10$odNiRO.Ftj4gML/oSqQ0jOHFxXp4uakHfUlYMYwmPqMTpZVcYFOge', 'Driver', 'Driver', NULL, '2021-03-03 08:33:57', '2021-03-03 08:33:57'),
(26, 'Putra', 'putrahalim.data@gmail.com', '$2y$10$sCPV6Cj6eTLbSFwUkl/kweGBwRi94hslgk4updtMyFnCYGhk5sLG2', 'Inspeksi Teknik (IT)', 'Cost Manager', NULL, '2021-03-03 16:21:35', '2021-03-03 16:21:35'),
(27, 'afnel', 'afnel@car-e.com', '$2y$10$fYzov9DeLe7M7bwIIj7VFeAkvDXr7BhKwcaFcqMVQWLylXh//p.4C', 'Driver', 'Driver', NULL, '2021-03-04 10:03:26', '2021-03-04 10:03:26'),
(28, 'verifikatorTest', 'verifikator@gmail.com', '$2y$10$td4MaD7vb68WZS56Sk02Y.2BUFECN96kK9Kz.ybKJjGJOcPJu8BJ6', 'Dukungan Bisnis (Dukbis)', 'Verificator', NULL, '2021-03-04 07:49:08', '2021-03-04 07:49:08'),
(29, 'Rico', 'rico@car-e.com', '$2y$10$LcZhTQkJfVOOmmM6/gcjx.1TdZuKNppewRwqQg/Q9X76NvQhN5nVe', 'Driver', 'Driver', NULL, '2021-03-08 09:12:42', '2021-03-08 09:12:42'),
(30, 'Esni', 'esni@care.com', '$2y$10$4CT1t0aj.dMo1M1Rte5mne4aIWR9kkIcTKmTzcmUVIw/qjlst1YPG', 'Dukungan Bisnis (Dukbis)', 'HoD', NULL, '2021-03-08 09:13:25', '2021-03-08 09:13:25'),
(31, 'maibud', 'maibud@care.com', '$2y$10$YBi2.gvHL.asEOuyjQYN8OGZNkccItsG9gEwZ1Piz.Pf8wI.lMqxy', 'Dukungan Bisnis (Dukbis)', 'User', NULL, '2021-03-08 09:13:51', '2021-03-08 09:13:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_additional_cost`
--

CREATE TABLE `tbl_additional_cost` (
  `id` int(11) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_request` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_additional_cost`
--

INSERT INTO `tbl_additional_cost` (`id`, `remark`, `cost`, `status`, `id_request`, `updated_at`, `created_at`) VALUES
(1, 'Bensin', 15000, 'OK', 1, '2021-02-07 11:02:50', '2021-02-07 11:02:50'),
(3, 'htff', 2222, 'OK', 17, '2021-02-27 15:54:38', '2021-02-27 15:54:38'),
(4, 'ygfff', 1000000, 'OK', 17, '2021-02-27 15:54:38', '2021-02-27 15:54:38'),
(5, 'edff', 5545, 'OK', 18, '2021-03-01 15:45:13', '2021-03-01 15:45:13'),
(6, 'agsgs', 10000, 'OK', 18, '2021-03-02 13:10:13', '2021-03-02 13:10:13'),
(7, 'fggff', 1000, 'OK', 18, '2021-03-02 13:12:18', '2021-03-02 13:12:18'),
(8, 'hygff', 200000, 'OK', 18, '2021-03-02 13:13:27', '2021-03-02 13:13:27'),
(9, 'hygff', 200000, 'OK', 18, '2021-03-02 13:13:56', '2021-03-02 13:13:56'),
(10, 'hygff', 200000, 'OK', 18, '2021-03-02 13:13:57', '2021-03-02 13:13:57'),
(11, 'hygff', 200000, 'OK', 18, '2021-03-02 13:13:57', '2021-03-02 13:13:57'),
(12, 'hygff', 200000, 'OK', 18, '2021-03-02 13:13:57', '2021-03-02 13:13:57'),
(13, 'hygff', 200000, 'OK', 18, '2021-03-02 13:13:57', '2021-03-02 13:13:57'),
(14, 'hygff', 200000, 'OK', 18, '2021-03-02 13:13:57', '2021-03-02 13:13:57'),
(15, 'hygff', 200000, 'OK', 18, '2021-03-02 13:13:58', '2021-03-02 13:13:58'),
(16, 'hygff', 200000, 'OK', 18, '2021-03-02 13:13:58', '2021-03-02 13:13:58'),
(17, 'hygff', 200000, 'OK', 18, '2021-03-02 13:13:58', '2021-03-02 13:13:58'),
(18, 'hygff', 200000, 'OK', 18, '2021-03-02 13:13:58', '2021-03-02 13:13:58'),
(19, 'hygff', 200000, 'OK', 18, '2021-03-02 13:15:07', '2021-03-02 13:15:07'),
(20, 'hygff', 200000, 'OK', 18, '2021-03-02 13:15:07', '2021-03-02 13:15:07'),
(21, 'hygff', 200000, 'OK', 18, '2021-03-02 13:15:08', '2021-03-02 13:15:08'),
(22, 'hygff', 200000, 'OK', 18, '2021-03-02 13:15:09', '2021-03-02 13:15:09'),
(23, 'hygff', 200000, 'OK', 18, '2021-03-02 13:15:09', '2021-03-02 13:15:09'),
(24, 'hygff', 200000, 'OK', 18, '2021-03-02 13:15:10', '2021-03-02 13:15:10'),
(25, 'hygff', 200000, 'OK', 18, '2021-03-02 13:15:10', '2021-03-02 13:15:10'),
(26, 'hygff', 200000, 'OK', 18, '2021-03-02 13:15:11', '2021-03-02 13:15:11'),
(27, 'hygff', 200000, 'OK', 18, '2021-03-02 13:15:11', '2021-03-02 13:15:11'),
(28, 'hygff', 200000, 'OK', 18, '2021-03-02 13:15:11', '2021-03-02 13:15:11'),
(29, 'test', 10000, 'OK', 18, '2021-03-02 13:16:18', '2021-03-02 13:16:18'),
(30, 'test11', 10000, 'OK', 18, '2021-03-02 13:17:55', '2021-03-02 13:17:55'),
(31, 'test22', 1000, 'OK', 18, '2021-03-02 13:17:55', '2021-03-02 13:17:55'),
(32, 'test33', 10000, 'OK', 18, '2021-03-02 13:17:56', '2021-03-02 13:17:56'),
(33, 'ban bocor', 15000, 'OK', 20, '2021-03-04 03:16:58', '2021-03-04 03:16:58'),
(34, 'parkir', 2000, 'OK', 21, '2021-03-05 23:20:42', '2021-03-05 23:20:42'),
(35, 'parkir', 6000, 'OK', 22, '2021-03-08 02:18:25', '2021-03-08 02:18:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_history_map`
--

CREATE TABLE `tbl_history_map` (
  `id` int(11) NOT NULL,
  `id_request` int(11) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_history_map`
--

INSERT INTO `tbl_history_map` (`id`, `id_request`, `latitude`, `longitude`, `updated_at`, `created_at`) VALUES
(1, 1, '0', '0', '2021-02-07 11:06:50', '2021-02-07 11:06:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_request`
--

CREATE TABLE `tbl_request` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `type_request` varchar(100) NOT NULL,
  `from_address` text NOT NULL,
  `to_address` text NOT NULL,
  `project` varchar(100) NOT NULL,
  `departure_datetime` datetime NOT NULL,
  `no_surat_tugas` varchar(50) NOT NULL,
  `start_km` float NOT NULL,
  `end_km` float NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_car` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `remark` text DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_request`
--

INSERT INTO `tbl_request` (`id`, `id_user`, `type_request`, `from_address`, `to_address`, `project`, `departure_datetime`, `no_surat_tugas`, `start_km`, `end_km`, `status`, `id_car`, `department`, `remark`, `updated_at`, `created_at`) VALUES
(1, 1, '', 'Batu Ampar', 'Batam Center', 'Project audit', '2021-02-07 00:00:00', '001/ED/2021', 10, 0, 'Request', 1, '', NULL, '2021-02-07 10:52:34', '2021-02-07 10:52:34'),
(3, 8, '', 'test', 'test', 'test', '2021-01-18 14:58:00', '1', 0, 0, 'Pending', 0, 'Dukbis', NULL, '2021-02-18 07:55:44', '2021-02-18 07:55:44'),
(4, 8, '', 'test', 'test', 'test', '2021-01-18 14:58:00', '1', 0, 0, 'Pending', 0, 'Dukbis', NULL, '2021-02-18 07:57:15', '2021-02-18 07:57:15'),
(5, 8, '', 'test', 'test', 'test', '2021-01-18 14:58:00', '1', 0, 0, 'Pending', 0, 'Dukbis', NULL, '2021-02-18 07:57:22', '2021-02-18 07:57:22'),
(6, 8, '', 't', 't', 't', '2021-01-18 15:05:00', '1', 0, 0, 'Pending', 0, 'Dukbis', NULL, '2021-02-18 08:00:30', '2021-02-18 08:00:30'),
(7, 8, '', 'test', 'test', 'test', '2021-02-18 12:55:00', '01test2021', 0, 0, 'pending', 0, 'dukbis', NULL, '2021-02-18 08:40:15', '2021-02-18 08:40:15'),
(8, 8, '', 'test', 'yest', 'test', '2021-01-18 15:50:00', 'test', 0, 0, 'Pending', 0, 'Dukbis', NULL, '2021-02-18 08:43:44', '2021-02-18 08:43:44'),
(9, 8, '', 'test2', 'test2', 'test2', '2021-01-19 09:40:00', 'test2', 0, 0, 'cancel', 0, 'Dukbis', 'rgggg', '2021-02-21 05:16:35', '2021-02-19 02:39:59'),
(10, 8, '', 'test3', 'test3', 'test3', '2021-01-19 10:50:00', '11', 0, 0, 'user request', 0, 'Dukbis', NULL, '2021-02-19 02:42:43', '2021-02-19 02:42:43'),
(11, 8, '', 'test4', 'test4', 'test4', '2021-01-19 10:43:00', '12', 0, 0, 'user request', 0, 'Dukbis', NULL, '2021-02-19 02:45:50', '2021-02-19 02:45:50'),
(12, 8, 'By Request', 'test', 'test', 'test', '2021-01-21 13:33:00', 'test', 0, 0, 'user request', 0, 'Dukbis', NULL, '2021-02-21 05:33:55', '2021-02-21 05:33:55'),
(13, 8, 'By Request', 'test', 'test', 'test', '2021-02-21 13:51:00', '123', 0, 0, 'accept', 1, 'Dukbis', NULL, '2021-02-21 14:14:30', '2021-02-21 05:52:10'),
(14, 8, 'By Request', 'rest', 'test', 'test', '2021-02-23 22:00:00', '123', 0, 0, 'accept', 5, 'Dukbis', NULL, '2021-03-04 03:46:03', '2021-02-23 13:49:12'),
(15, 8, 'By Request', 'test', 'test', 'test', '2021-02-23 22:55:00', '123', 0, 0, 'accept', 5, 'Dukbis', NULL, '2021-02-23 14:31:06', '2021-02-23 13:53:43'),
(16, 8, 'By Request', 'tsst', 'test', 'test6', '2021-02-26 18:53:00', '123', 0, 0, 'accept', 5, 'Dukbis', NULL, '2021-02-26 02:54:43', '2021-02-26 02:53:59'),
(17, 8, 'By Request', 'test', 'test', 'test', '2021-02-27 12:22:00', '1', 0, 0, 'accept', 5, 'Dukbis', NULL, '2021-02-27 02:23:36', '2021-02-27 02:22:55'),
(18, 8, 'By Request', '1111', '1111', '1111', '2021-03-01 23:55:00', '1111', 0, 0, 'accept', 5, 'Dukbis', NULL, '2021-03-01 14:51:53', '2021-03-01 14:40:28'),
(19, 17, 'By Request', 'sucofindo', 'pt bredero batu ampar', 'inspeksi', '2021-03-03 11:42:00', 'BTMST12700009', 0, 0, 'accept', 5, 'INSPEKSI TEKNIK', NULL, '2021-03-03 08:32:41', '2021-03-03 04:42:42'),
(20, 17, 'By Request', 'sucofindo', 'pt bredero', 'inspeksi', '2021-03-04 09:58:00', 'BTMST1200000', 0, 0, 'accept', 5, 'INSPEKSI TEKNIK', NULL, '2021-03-04 02:59:54', '2021-03-04 02:58:43'),
(21, 17, 'By Request', 'PT Sucofindo', 'PT Epson', 'sampling', '2021-03-06 09:00:00', 'BTMST12300000', 0, 0, 'accept', 6, 'INSPEKSI TEKNIK', NULL, '2021-03-05 23:19:03', '2021-03-05 23:17:46'),
(22, 31, 'By Day', 'sucofindo', 'keliling batam', 'antar dokumen', '2021-03-08 10:00:00', 'BTMST20000', 0, 0, 'accept', 13, 'Dukungan Bisnis (Dukbis)', NULL, '2021-03-08 02:17:29', '2021-03-08 02:15:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mst_budget`
--
ALTER TABLE `mst_budget`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mst_car`
--
ALTER TABLE `mst_car`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mst_department`
--
ALTER TABLE `mst_department`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mst_users`
--
ALTER TABLE `mst_users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_additional_cost`
--
ALTER TABLE `tbl_additional_cost`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_history_map`
--
ALTER TABLE `tbl_history_map`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mst_budget`
--
ALTER TABLE `mst_budget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mst_car`
--
ALTER TABLE `mst_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `mst_department`
--
ALTER TABLE `mst_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mst_users`
--
ALTER TABLE `mst_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tbl_additional_cost`
--
ALTER TABLE `tbl_additional_cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tbl_history_map`
--
ALTER TABLE `tbl_history_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
