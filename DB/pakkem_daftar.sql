-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2020 at 10:09 AM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

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
-- Table structure for table `agenda_diikuti`
--

CREATE TABLE `agenda_diikuti` (
  `id` int NOT NULL,
  `id_agenda` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `waktu_agenda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_pendaftar` int NOT NULL,
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
  `status` int NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_pendaftar`, `nama`, `instansi`, `tempat_lahir`, `tanggal_lahir`, `gender`, `nik`, `email`, `no_hp`, `bisa_wa`, `pendidikan`, `sertifikat`, `info_tambahan`, `status`) VALUES
(10, 'yogga', 'yogga', 'Bandung', '2020-12-31', 'Laki-laki', '3964273687', 'yoggaajipratama99@gmail.com', '2323523', 'Ya', 'S2', 'Ya, ada', 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int NOT NULL,
  `foto_upload` varchar(200) DEFAULT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `email_pemilik` varchar(200) NOT NULL,
  `status` int NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `foto_upload`, `nama_pemilik`, `email_pemilik`, `status`) VALUES
(6, '2022737743_yoggaajipratama99@gmail.com.jpg', 'yogga', 'yoggaajipratama99@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `kegiatan` int NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `email`, `kegiatan`, `timestamp`) VALUES
(9, 'yoggaajipratama99@gmail.com', 1, '2020-09-26 10:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int NOT NULL,
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
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `nama`, `instansi`, `tempat_lahir`, `tanggal_lahir`, `gender`, `nik`, `email`, `no_hp`, `bisa_wa`, `pendidikan`, `sertifikat`, `info_tambahan`, `status`) VALUES
(6, 'yogga', 'yogga', 'Bandung', '2020-12-31', 'Laki-laki', '3964273687', 'yoggaajipratama99@gmail.com', '2323523', 'Ya', 'S2', 'Ya, ada', 'no', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id` int NOT NULL,
  `sertifikat_upload` varchar(200) DEFAULT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `email_pemilik` varchar(200) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` int NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id`, `sertifikat_upload`, `nama_pemilik`, `email_pemilik`, `keterangan`, `status`) VALUES
(6, '2022737743_yoggaajipratama99@gmail.com.png', 'yogga', 'yoggaajipratama99@gmail.com', 'ok', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status` int NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `nama`, `level`, `status`) VALUES
(5, 'yogga', '8f4f4aa2c27b7c39a33895142e164354', 'yoggaajipratama99@gmail.com', 'yogga', '2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda_diikuti`
--
ALTER TABLE `agenda_diikuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda_diikuti`
--
ALTER TABLE `agenda_diikuti`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_pendaftar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
