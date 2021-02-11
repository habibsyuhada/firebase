-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 11 Feb 2021 pada 20.16
-- Versi server: 10.3.27-MariaDB
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
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
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
  `status` varchar(20) NOT NULL,
  `assign_driver` int(11) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mst_car`
--

INSERT INTO `mst_car` (`id`, `car_name`, `police_number`, `avg_fuel`, `status`, `assign_driver`, `latitude`, `longitude`, `updated_at`, `created_at`) VALUES
(1, 'Avanza', 'BP 2020 EA', 10.4, 'Idle', 0, '0', '0', '2021-02-07 10:19:32', '2021-02-07 10:19:32'),
(2, 'Mobilio', 'BP 2021 AB', 9.6, 'Idle', 0, '0', '0', '2021-02-07 10:19:49', '2021-02-07 10:19:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_department`
--

CREATE TABLE `mst_department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mst_department`
--

INSERT INTO `mst_department` (`id`, `department_name`, `updated_at`, `created_at`) VALUES
(1, 'Dukungan Bisnis (Dukbis)', '2021-02-07 10:43:23', '2021-02-07 10:43:07');

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
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mst_users`
--

INSERT INTO `mst_users` (`id`, `name`, `email`, `password`, `department`, `role`, `updated_at`, `created_at`) VALUES
(2, 'Nur Harisman Cakep', 'nur.harisman@gmail.com', '123456', 'Dukbis', 'Member', '2021-02-07 04:36:15', '2021-02-07 04:35:43'),
(4, 'Putra Halims', 'putrahalim.data@gmail.com', '123456', 'Dukbis', 'Kepala Bidang', '2021-02-07 09:59:45', '2021-02-07 09:59:45'),
(5, 'test', 'test@gmail.com', '123456', 'Dukbis', 'member', '2021-02-09 12:31:51', '2021-02-09 12:31:51'),
(6, 'Habib Syuhada', 'habibsyuhada.1109@gmail.com', '123456', 'Dukungan Bisnis (Dukbis)', 'Cost Manager', '2021-02-11 20:02:03', '2021-02-11 20:01:57');

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
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_additional_cost`
--

INSERT INTO `tbl_additional_cost` (`id`, `remark`, `cost`, `status`, `id_request`, `updated_at`, `created_at`) VALUES
(1, 'Bensin', 15000, 'OK', 1, '2021-02-07 11:02:50', '2021-02-07 11:02:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_history_map`
--

CREATE TABLE `tbl_history_map` (
  `id` int(11) NOT NULL,
  `id_request` int(11) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
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
  `from_address` text NOT NULL,
  `to_address` text NOT NULL,
  `project` varchar(100) NOT NULL,
  `departure_datetime` datetime NOT NULL,
  `no_surat_tugas` varchar(50) NOT NULL,
  `start_km` float NOT NULL,
  `end_km` float NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_car` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_request`
--

INSERT INTO `tbl_request` (`id`, `id_user`, `from_address`, `to_address`, `project`, `departure_datetime`, `no_surat_tugas`, `start_km`, `end_km`, `status`, `id_car`, `updated_at`, `created_at`) VALUES
(1, 1, 'Batu Ampar', 'Batam Center', 'Project audit', '2021-02-07 00:00:00', '001/ED/2021', 10, 0, 'Request', 1, '2021-02-07 10:52:34', '2021-02-07 10:52:34');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mst_department`
--
ALTER TABLE `mst_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mst_users`
--
ALTER TABLE `mst_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_additional_cost`
--
ALTER TABLE `tbl_additional_cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_history_map`
--
ALTER TABLE `tbl_history_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
