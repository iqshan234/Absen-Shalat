-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2023 pada 05.53
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload_file`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ashar`
--

CREATE TABLE `ashar` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `time_scan` varchar(255) NOT NULL,
  `TIMEOUT` varchar(255) NOT NULL,
  `LOGDATE` varchar(255) NOT NULL,
  `shalat` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ashar`
--

INSERT INTO `ashar` (`id`, `nama`, `time_scan`, `TIMEOUT`, `LOGDATE`, `shalat`, `STATUS`) VALUES
(4, 'Mochammad Iqshan Augustino', '10:49:34', '10:49:39', '2023-09-06', 'Ashar', 'Sudah Shalat'),
(5, 'alldy', '10:49:45', '', '2023-09-06', 'Ashar', 'Sedang Shalat'),
(6, 'anang', '10:49:50', '10:52:04', '2023-09-06', 'Ashar', 'Sudah Shalat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dzuhur`
--

CREATE TABLE `dzuhur` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `time_scan` varchar(255) NOT NULL,
  `TIMEOUT` varchar(255) NOT NULL,
  `LOGDATE` varchar(255) NOT NULL,
  `shalat` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dzuhur`
--

INSERT INTO `dzuhur` (`id`, `nama`, `time_scan`, `TIMEOUT`, `LOGDATE`, `shalat`, `STATUS`) VALUES
(4, 'Mochammad Iqshan Augustino', '10:49:58', '10:50:00', '2023-09-06', 'Dzuhur', 'Sudah Selesai Shalat'),
(5, 'anang', '10:50:06', '', '2023-09-06', 'Dzuhur', 'Sedang Shalat'),
(6, 'alldy', '10:50:11', '10:51:45', '2023-09-06', 'Dzuhur', 'Sudah Selesai Shalat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ashar`
--
ALTER TABLE `ashar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dzuhur`
--
ALTER TABLE `dzuhur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ashar`
--
ALTER TABLE `ashar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dzuhur`
--
ALTER TABLE `dzuhur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
