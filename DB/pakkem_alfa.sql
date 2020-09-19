-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2020 at 12:17 PM
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
-- Database: `pakkem_alfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int NOT NULL,
  `id_pegawai` int NOT NULL,
  `hadir` int NOT NULL,
  `izin` int NOT NULL,
  `tidak_hadir` int NOT NULL,
  `bulan` int NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `id_pegawai`, `hadir`, `izin`, `tidak_hadir`, `bulan`, `tanggal`) VALUES
(13, 10, 20, 0, 0, 1, '2020-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `level`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
(3, 'user', 'f4063aaaac7ee09398df878716a1b9d1', 'User', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `tunjangan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `golongan`, `tunjangan`) VALUES
(5, 'Frontend Developer', 'Junior', 2500000),
(6, 'Backend Developer', 'Junior', 2800000),
(7, 'Database Admin', 'Senior', 5700000),
(8, 'Frontend Developer', 'Middle', 5200000),
(9, 'Backend Developer', 'Middle', 5500000),
(10, 'Frontend Developer', 'Senior', 8550000),
(11, 'Backend Developer', 'Senior', 9325700),
(12, 'Staff IT', 'Senior', 3500000),
(13, 'General Manager', '-', 12750000),
(14, 'Network Engineer', 'Senior', 8500000),
(15, 'Admin Server', 'Senior', 8750000),
(16, 'Graphic Designer', 'Senior', 7500000),
(17, 'Graphic Designer', 'Junior', 2200000);

-- --------------------------------------------------------

--
-- Table structure for table `mst_anggota`
--

CREATE TABLE `mst_anggota` (
  `mst_no_pendaftaran` int NOT NULL,
  `mst_nama` varchar(128) NOT NULL,
  `mst_jenis_kelamin` varchar(100) DEFAULT NULL,
  `mst_tempat_lahir` varchar(64) NOT NULL,
  `mst_tanggal_lahir` date NOT NULL,
  `mst_nik` varchar(20) DEFAULT NULL,
  `mst_hp` char(16) DEFAULT NULL,
  `mst_wa` enum('y','n') DEFAULT 'y',
  `mst_pendidikan` varchar(128) DEFAULT NULL,
  `mst_sertifikat` varchar(128) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `kantor` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `namafoto` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_anggota`
--

INSERT INTO `mst_anggota` (`mst_no_pendaftaran`, `mst_nama`, `mst_jenis_kelamin`, `mst_tempat_lahir`, `mst_tanggal_lahir`, `mst_nik`, `mst_hp`, `mst_wa`, `mst_pendidikan`, `mst_sertifikat`, `email`, `kantor`, `keterangan`, `namafoto`) VALUES
(2, 'Ali masduki', 'Laki-Laki ', 'Ngawi', '2020-05-12', '2147483647', '089688240841', 'n', 'DIII', 'TEKNIK III', 'learn.anp@gmail.com', 'PERTAMINA', 'KETERANGAN', '29-04-03 (1).jpg'),
(5, 'Ali masduki', 'Laki-Laki ', 'Ngawi', '2020-05-12', '2147483647', '089688240841', 'n', 'DIII', 'TEKNIK III', 'learn.anp@gmail.com', 'PERTAMINA', 'KETERANGAN', '29-04-03 (1).jpg'),
(6, 'Ali masduki', 'Laki-Laki ', 'Ngawi', '2020-05-12', '2147483647', '089688240841', 'n', 'DIII', 'TEKNIK III', 'learn.anp@gmail.com', 'PERTAMINA', 'KETERANGAN', '29-04-03 (1).jpg'),
(8, 'Ali masduki', 'Laki-Laki ', 'Ngawi', '2020-05-12', '2147483647', '089688240841', 'n', 'DIII', 'TEKNIK III', 'learn.anp@gmail.com', 'PERTAMINA', 'KETERANGAN', '29-04-03 (1).jpg'),
(10, 'Ali masduki', 'Laki-Laki ', 'Ngawi', '2020-05-12', '2147483647', '089688240841', 'n', 'DIII', 'TEKNIK III', 'learn.anp@gmail.com', 'PERTAMINA', 'KETERANGAN', '29-04-03 (1).jpg'),
(17, 'Ali masduki', 'Laki-Laki ', 'Ngawi', '2020-05-12', '2147483647', '089688240841', 'n', 'DIII', 'TEKNIK III', 'learn.anp@gmail.com', 'PERTAMINA', 'KETERANGAN', '29-04-03 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int NOT NULL,
  `id_jabatan` int NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `status_kep` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_jabatan`, `nip`, `nama`, `jk`, `foto`, `agama`, `pendidikan`, `status_kep`, `alamat`, `username`, `password`) VALUES
(10, 15, '200012052018110801001', 'Hatsune Miku', 'P', 'foto_1589668962.jpg', 'lainnya', 'SMK RPL', 'Tetap', 'Tokyo, Japan', 'miku2255', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 17, '200007152018110801003', 'Kizuna Ai', 'P', 'foto_1589669245.jpg', 'lainnya', 'SMK Multimedia', 'Magang', 'Sapporo, Japan', 'kizunaai_', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tpp`
--

CREATE TABLE `tpp` (
  `id_tpp` int NOT NULL,
  `id_pegawai` int NOT NULL,
  `jumlah_tpp` varchar(100) NOT NULL,
  `jumlah_potongan` varchar(100) NOT NULL,
  `bulan_t` int NOT NULL,
  `tahun` int NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpp`
--

INSERT INTO `tpp` (`id_tpp`, `id_pegawai`, `jumlah_tpp`, `jumlah_potongan`, `bulan_t`, `tahun`, `tgl`) VALUES
(7, 8, '300000', '0%', 1, 2018, '2018-04-02'),
(9, 9, '12750000', '0%', 5, 2020, '2020-05-01'),
(10, 10, '8749970', '30%', 1, 2020, '2020-05-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `mst_anggota`
--
ALTER TABLE `mst_anggota`
  ADD PRIMARY KEY (`mst_no_pendaftaran`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tpp`
--
ALTER TABLE `tpp`
  ADD PRIMARY KEY (`id_tpp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mst_anggota`
--
ALTER TABLE `mst_anggota`
  MODIFY `mst_no_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tpp`
--
ALTER TABLE `tpp`
  MODIFY `id_tpp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
