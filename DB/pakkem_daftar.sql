-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2020 at 11:02 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.6

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
-- Table structure for table `anggota`
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
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `foto_upload` tinyblob,
  `nama_pemilik` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
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
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `nama`, `instansi`, `tempat_lahir`, `tanggal_lahir`, `gender`, `nik`, `email`, `no_hp`, `bisa_wa`, `pendidikan`, `sertifikat`, `info_tambahan`, `tgl_daftar`) VALUES
(11, 'IRAWATI', 'PT. ERA SEJAHTERA', 'SAMARINDA', '1980-06-10', 'Perempuan', '087906570013', 'irawati.email@gmail.com', '087987656554', 'Ya', 'S2', 'Ya, ada', 'Mengajukan menjadi anggota', '2020-08-23 22:13:47'),
(12, 'Ir. Jumanto', 'PT. Kabel Bawah Laut', 'Manokwari', '1975-07-21', 'Laki-laki', '192837465', 'jumanto.kbl@gmail.com', '087815213427', 'Tidak', 'S3', 'Ya, ada', 'Ingin jadi bagian dari komunitas ini', '2020-08-23 22:25:59'),
(13, 'Dra. Astuti Brojonegoro', 'PT. Maju Jaya Perkasa', 'Lubuk Linggau', '1985-04-23', 'Perempuan', '913243546575', 'astuti.brojo@gmail.com', '087812344321', 'Ya', 'S1', 'Ya, ada', 'Bergabung dengan komunitas PAKKEM', '2020-08-23 22:30:27'),
(14, 'Mus Mujiono, ST', 'PT. Kelola Alam Indonesia', 'Wonosobo', '1977-10-05', 'Laki-laki', '12467321', 'mus.mujiono@gmail.com', '987891239452', 'Ya', 'S1', 'Ya, ada', 'Ingin bergabung', '2020-08-24 05:32:46'),
(15, 'Syaifullah, ST', 'PT. Farrald Teknindo', 'Lhoksukon', '1975-05-15', 'Laki-laki', '3275091505750027', 'syaifullah.ft@gmail.com', '08129470606', 'Ya', 'S1', 'Ya, ada', 'Inspektor Bejana Tekan, Inspektor Storge Tank, Welding Inspector, Inspector Pipeline, NDT Level II', '2020-08-26 03:55:22'),
(16, 'Syaifullah, ST', 'PT. Farrald Teknindo', 'Lhoksukon', '1975-05-15', 'Laki-laki', '3275091505750027', 'syaifullah.ft@gmail.com', '08129470606', 'Ya', 'S1', 'Ya, ada', 'Inspektor Bejana Tekan, Inspektor Storge Tank, Welding Inspector, Inspector Pipeline, NDT Level II', '2020-08-26 04:05:13'),
(17, 'Agus Setiono, Dipl ing.', 'PT. ERA SEJAHTERA', 'Bandung', '1970-07-15', 'Laki-laki', '098653214578', 'sony.santoso@gmail.com', '08563214523', 'Ya', '', 'Ya, ada', 'Coba mau komunitas..', '2020-08-26 04:35:07'),
(18, 'Joko Hadi Wibowo', 'Direktorat Jenderal Minyak dan Gas Bumi', 'Sleman', '1977-05-26', 'Laki-laki', '', 'jokohadi@gmail.com', '081319743000', '', 'S2', 'Ya, ada', '', '2020-08-26 05:22:21'),
(19, 'Agus Setiono, Dipl ing.', 'PT. ERA SEJAHTERA', 'Bandung', '1970-07-15', 'Laki-laki', '098653214578', 'sony.santoso@gmail.com', '08563214523', 'Ya', '', 'Ya, ada', 'Coba mau komunitas..', '2020-09-05 05:18:27'),
(20, 'Agus Setiono, Dipl ing.', 'PT. ERA SEJAHTERA', 'Bandung', '1970-07-15', 'Laki-laki', '098653214578', 'sony.santoso@gmail.com', '08563214523', 'Ya', '', 'Ya, ada', 'Coba mau komunitas..', '2020-09-05 05:19:09'),
(21, 'Muhammad Hatta Adam', 'PT Albrasa Internasional Sertifikasi', 'Jakarta', '1986-06-03', 'Laki-laki', '3174090306861001', 'muhammad.hatta.adam@gmail.com', '08159178221', 'Ya', 'S1', 'Ya, ada', 'Saya sebagai konsultan untuk Standar API Spec Q1 &amp; 6A,  ISO 45001 dan SMK3 PP50/2012', '2020-09-12 07:03:13'),
(22, 'Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedj', 'Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedj', 'Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedj', '0000-00-00', '1', 'Nmvjefbjedddskhf', 'igorzakharov1985522reu+qacik@list.ru', '', 'Tidak', 'S3', 'Tidak ada', 'Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedjfoejdgiehdfocjfdenghirho https://mail.ru/?bvncdbjdfjdfh=rhfidbvgjf', '2020-09-13 21:41:09'),
(23, 'Asep Saepudin', 'UIN', 'bante', '0000-00-00', '', '', '', '', '', '', '', '', '2020-09-16 13:47:23'),
(24, 'Asep Saepudin', 'UIN', 'Banten', '2020-09-17', 'Perempuan', '3212212201980222', 'batara@gmail.com', '089619000501', 'Ya', 'S1', '', 'AKU AKU', '2020-09-16 13:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id` int(11) NOT NULL,
  `sertifikat_upload` tinyblob,
  `nama_pemilik` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `nama`, `level`, `log`) VALUES
(1, '', '', '', '', '', '2020-08-23 19:22:46'),
(2, '', '', '', '', '', '2020-08-23 20:37:27');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
