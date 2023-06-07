-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2023 pada 05.13
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dc`
--

CREATE TABLE `dc` (
  `AC-OF-SM-1B` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `id` int(11) NOT NULL,
  `teknisi` text NOT NULL,
  `mitra` text NOT NULL,
  `notiket` varchar(65) NOT NULL,
  `nointernet` varchar(65) NOT NULL,
  `pekerjaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `warehouse`
--

CREATE TABLE `warehouse` (
  `Tanggal` int(11) NOT NULL,
  `Teknisi` int(11) NOT NULL,
  `Mitra` int(11) NOT NULL,
  `No Tiket` int(11) NOT NULL,
  `No Internet` int(11) NOT NULL,
  `Jenis Pekerjaan` int(11) NOT NULL,
  `WH SO` int(11) NOT NULL,
  `AC-OF-SM-1B` int(11) NOT NULL,
  `ADAPTER` int(11) NOT NULL,
  `SOC ILS` int(11) NOT NULL,
  `SOC SUM` int(11) NOT NULL,
  `SOC FUJ` int(11) NOT NULL,
  `SLEEVE TIPE 3` int(11) NOT NULL,
  `PROTECTION SLEEVE` int(11) NOT NULL,
  `SP 1/4` int(11) NOT NULL,
  `SP 1/8` int(11) NOT NULL,
  `SP 1/16` int(11) NOT NULL,
  `PC` int(11) NOT NULL,
  `OTP` int(11) NOT NULL,
  `PREKSO` int(11) NOT NULL,
  `ONT` int(11) NOT NULL,
  `STB` int(11) NOT NULL,
  `REMOTE` int(11) NOT NULL,
  `S-CLAMP` int(11) NOT NULL,
  `STAINLES BELT` int(11) NOT NULL,
  `SUSPENSION FO` int(11) NOT NULL,
  `TIANG GALVANIS` int(11) NOT NULL,
  `TRAY CABLE TC-2` int(11) NOT NULL,
  `CLAMP COOCKER` int(11) NOT NULL,
  `CLMAP RING 5 LUBANG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
