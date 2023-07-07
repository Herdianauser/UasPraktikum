-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2023 pada 12.14
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
-- Database: `jadwalsatpam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `umur` int(10) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `waktumasuk` time NOT NULL,
  `waktupulang` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id`, `nama`, `umur`, `shift`, `waktumasuk`, `waktupulang`) VALUES
(11138, 'topik', 100, 'pagi', '07:00:00', '15:00:00'),
(11142, 'Herdiana1', 20, 'malam', '19:00:00', '04:00:00'),
(11144, 'nanang', 30, 'pagi', '06:00:00', '15:00:00'),
(11145, 'muti', 21, 'sore', '12:00:00', '19:00:00'),
(11146, 'sura', 21, 'pagi', '12:00:00', '23:00:00'),
(11148, 'agus', 20, 'sore', '17:00:00', '04:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
