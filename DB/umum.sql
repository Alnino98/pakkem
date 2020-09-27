-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2020 pada 18.40
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakkem_pakkem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `umum`
--

CREATE TABLE `umum` (
  `id_umum` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `umum`
--

INSERT INTO `umum` (`id_umum`, `nama`, `no_hp`, `email`, `pesan`) VALUES
(1, 'abhy', 98766, 'alnino@gmail.com', 'coba'),
(2, '', 897979, 'abhyelnino13@gmail.com', 'pesan'),
(3, '', 9776676, 'andai@gmail.com', 'pesan'),
(4, '', 2367626, 'sad', 'pesan'),
(5, 'dede', 8768768, 'abhye@gmail.com', 'pesan'),
(6, 'habibi lagi', 875788, 'abuj@gmail.com', 'jgan lupa tidur');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `umum`
--
ALTER TABLE `umum`
  ADD PRIMARY KEY (`id_umum`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `umum`
--
ALTER TABLE `umum`
  MODIFY `id_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
