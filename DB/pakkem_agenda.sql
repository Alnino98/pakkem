-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2020 pada 13.57
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakkem_agenda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda_kegiatan`
--

CREATE TABLE `agenda_kegiatan` (
  `id_agenda` int(11) NOT NULL,
  `hari_tanggal` date NOT NULL,
  `waktu_agenda` varchar(100) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `keterangan_agenda` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda_kegiatan`
--

INSERT INTO `agenda_kegiatan` (`id_agenda`, `hari_tanggal`, `waktu_agenda`, `kegiatan`, `keterangan_agenda`) VALUES
(1, '2020-09-05', '17:00WIB', 'ngajiiii yuk', 'masjid'),
(6, '2020-08-30', '22:90WIB', 'aku', 'adalah'),
(8, '2020-09-03', '17:00WIB', 'Tawuran', 'asawww');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda_kegiatan`
--
ALTER TABLE `agenda_kegiatan`
  ADD PRIMARY KEY (`id_agenda`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda_kegiatan`
--
ALTER TABLE `agenda_kegiatan`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
