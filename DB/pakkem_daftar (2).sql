-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2020 pada 21.17
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
-- Database: `pakkem_daftar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda_diikuti`
--

CREATE TABLE `agenda_diikuti` (
  `id` int(11) NOT NULL,
  `id_agenda` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `waktu_agenda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_pendaftar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nik` char(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` char(16) NOT NULL,
  `bisa_wa` varchar(50) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `info_tambahan` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_pendaftar`, `nama`, `instansi`, `tempat_lahir`, `tanggal_lahir`, `gender`, `nik`, `email`, `no_hp`, `bisa_wa`, `pendidikan`, `sertifikat`, `info_tambahan`, `status`, `tgl_daftar`) VALUES
(10, 'yogga', 'yogga', 'Bandung', '2020-12-31', 'Laki-laki', '3964273687', 'yoggaajipratama99@gmail.com', '2323523', 'Ya', 'S2', 'Ya, ada', 'no', 0, '2020-09-27 16:19:50'),
(11, 'Tampan sekali', 'UIN', 'Banten', '2020-09-16', 'Laki-laki', '3212212201980001', 'moh.ramdani22@gmail.com', '08961900055', 'Ya', 'S3', 'Ya, ada', 'Sudah kubillang aku tampan', 0, '2020-09-27 16:24:09'),
(12, 'Tampan sekali', 'Kantor Hokage', 'Banten', '2020-09-17', 'Laki-laki', '3212212201980001', 'infokeun@gmail.com', '08961900055', 'Ya', 'S3', 'Ya, ada', 'Sudah kubillang aku tampan', 0, '2020-09-27 16:25:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `foto_upload` varchar(200) DEFAULT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `email_pemilik` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id`, `foto_upload`, `nama_pemilik`, `email_pemilik`, `status`, `waktu`) VALUES
(6, '2022737743_yoggaajipratama99@gmail.com.jpg', 'yogga', 'yoggaajipratama99@gmail.com', 1, '2020-09-27 16:19:51'),
(7, '1150555032_moh.ramdani22@gmail.com.jpg', 'Tampan sekali', 'moh.ramdani22@gmail.com', 1, '2020-09-27 16:24:20'),
(8, '1105236982_infokeun@gmail.com.jpg', 'Tampan sekali', 'infokeun@gmail.com', 1, '2020-09-27 16:25:55'),
(9, '2067782905_batara@gmail.com.jpg', 'coba3', 'batara@gmail.com', 0, '2020-09-27 17:18:44'),
(10, '1531236906_elokapanter@gmail.com.jpg', 'kkkka', 'elokapanter@gmail.com', 0, '2020-09-27 17:29:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kegiatan` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `email`, `kegiatan`, `timestamp`) VALUES
(9, 'yoggaajipratama99@gmail.com', 1, '2020-09-27 23:31:46'),
(10, 'moh.ramdani22@gmail.com', 0, '2020-09-27 23:24:09'),
(11, 'infokeun@gmail.com', 0, '2020-09-27 23:25:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nik` char(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` char(16) NOT NULL,
  `bisa_wa` varchar(50) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `info_tambahan` varchar(255) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `nama`, `instansi`, `tempat_lahir`, `tanggal_lahir`, `gender`, `nik`, `email`, `no_hp`, `bisa_wa`, `pendidikan`, `sertifikat`, `info_tambahan`, `tgl_daftar`, `status`) VALUES
(6, 'yogga', 'yogga', 'Bandung', '2020-12-31', 'Laki-laki', '3964273687', 'yoggaajipratama99@gmail.com', '2323523', 'Ya', 'S2', 'Ya, ada', 'no', '2020-09-27 16:19:51', 1),
(7, 'Tampan sekali', 'UIN', 'Banten', '2020-09-16', 'Laki-laki', '3212212201980001', 'moh.ramdani22@gmail.com', '08961900055', 'Ya', 'S3', 'Ya, ada', 'Sudah kubillang aku tampan', '2020-09-27 16:24:09', 1),
(8, 'Tampan sekali', 'Kantor Hokage', 'Banten', '2020-09-17', 'Laki-laki', '3212212201980001', 'infokeun@gmail.com', '08961900055', 'Ya', 'S3', 'Ya, ada', 'Sudah kubillang aku tampan', '2020-09-27 16:25:47', 1),
(9, 'coba3', 'Kantor Hokage', 'Banten', '2020-09-08', 'Laki-laki', '3212212201980001', 'batara@gmail.com', '08961900055', 'Ya', 'S1', '', 'Sudah kubillang aku tampan', '2020-09-27 17:18:44', 0),
(10, 'kkkka', 'Kantor Hokage', 'Banten', '2020-10-01', 'Laki-laki', '3212212201980001', 'elokapanter@gmail.com', '08961900055', 'Ya', 'D III', 'Ya, ada', 'Sudah kubillang aku tampan', '2020-09-27 17:29:58', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id` int(11) NOT NULL,
  `sertifikat_upload` varchar(200) DEFAULT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `email_pemilik` varchar(200) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sertifikat`
--

INSERT INTO `sertifikat` (`id`, `sertifikat_upload`, `nama_pemilik`, `email_pemilik`, `keterangan`, `status`, `waktu`) VALUES
(6, '2022737743_yoggaajipratama99@gmail.com.png', 'yogga', 'yoggaajipratama99@gmail.com', 'ok', 1, '2020-09-27 16:19:51'),
(7, '1150555032_moh.ramdani22@gmail.com.jpg', 'Aku Tampan', 'moh.ramdani22@gmail.com', 'Memang Tampan', 1, '2020-09-27 16:24:26'),
(8, '1105236982_infokeun@gmail.com.jpg', 'Aku Tampan', 'infokeun@gmail.com', 'Memang Tampan', 1, '2020-09-27 16:26:04'),
(9, '2067782905_batara@gmail.com.jpg', 'Coba', 'batara@gmail.com', 'Coba1', 0, '2020-09-27 17:18:44'),
(10, '1531236906_elokapanter@gmail.com.jpg', 'aseeew', 'elokapanter@gmail.com', 'adfasdf', 0, '2020-09-27 17:29:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `nama`, `level`, `status`, `log`) VALUES
(5, 'yogga', '8f4f4aa2c27b7c39a33895142e164354', 'yoggaajipratama99@gmail.com', 'yogga', '2', 1, '2020-09-27 16:19:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda_diikuti`
--
ALTER TABLE `agenda_diikuti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indeks untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda_diikuti`
--
ALTER TABLE `agenda_diikuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
