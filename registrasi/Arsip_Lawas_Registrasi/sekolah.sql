-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 03:36 AM
-- Server version: 10.3.15-MariaDB
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
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `password`) VALUES
(1, 'frans', '31cf2b3561b2aed60bf8c02414cc955a'),
(2, 'raden defi', '81c296c01cabc0a11f2fa3e80a9f2326'),
(3, 'dedep', '202cb962ac59075b964b07152d234b70'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_transfer`
--

CREATE TABLE `bukti_transfer` (
  `id` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_transfer`
--

INSERT INTO `bukti_transfer` (`id`, `id_pendaftar`, `nama_pendaftar`, `nama_bank`, `bukti_transfer`, `status`) VALUES
(1, 4, 'raden defi', 'BCA Raden defi megantari', 'img/bukti_transfer/cara transfer uang melalui internet banking bca sesama bca4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_orangtua`
--

CREATE TABLE `data_orangtua` (
  `id` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kodepos` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email_ortu` varchar(100) NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ortu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_orangtua`
--

INSERT INTO `data_orangtua` (`id`, `nama_pendaftar`, `id_pendaftar`, `nama_ayah`, `nama_ibu`, `nama_wali`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `nohp`, `email_ortu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ortu`) VALUES
(6, 'frans chaniago', 2, 'asd', 'dada', '', 'sda', 'sulawesiutara', 'da', 'da', '242', '4242342', '', 's2', 'd3', 'pns', 'pns', '3-5jt');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `akte` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `id_pendaftar`, `nama_pendaftar`, `foto`, `ktp`, `akte`, `ijazah`) VALUES
(2, 4, 'raden defi', 'img/dokumen/foto/2x3.jpg', 'img/dokumen/ktp/60-75.jpg', 'img/dokumen/akte/80.jpg', 'img/dokumen/ijazah/60.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `formulir_mhs`
--

CREATE TABLE `formulir_mhs` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `no_jaket` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tgl_daftar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir_mhs`
--

INSERT INTO `formulir_mhs` (`id`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_hp`, `alamat`, `provinsi`, `no_jaket`, `email`, `tgl_daftar`) VALUES
(2, 'frans chaniago', 'lebak', '1995-11-04', 'laki-laki', 'islam', '08982002243', 'pasarkemis', 'banten', 'm', 'franschaniago5@gmail.com', '2016-06-11'),
(4, 'raden defi', 'tangerang', '2011-06-16', 'Perempuan', 'islam', '08982002243', 'binong permai', 'banten', 's', 'radendefi@gmail.com', '11-06-16'),
(5, 'Permana', 'Sukabumi', '2031-12-19', 'laki-laki', 'islam', '086966669999', 'Jl. Samsi', 'jawabarat', 'l', 'user@siswa.id', '311219'),
(6, 's', 'sd', '2013-05-20', 'perempuan', 'islam', '45454', 'sda', 'jawatengah', 's', 'learn.anp@gmail.com', '130520'),
(7, '', '', '2013-05-20', '', '', '', '', '', '', '', '130520'),
(8, 's', 'laki-laki', '0000-00-00', '2020-05-12', '333', '3333', 'Tidak', 'DIII', 'S1', '', 's'),
(9, 'sa', 'laki-laki', '0000-00-00', '2020-05-14', '33', '33', 'YA', 'DIII', 'S2', '', 'sa'),
(10, 'sa', 'laki-laki', '0000-00-00', '2020-05-14', '33', '33', 'YA', 'DIII', 'S2', '', 'sa'),
(11, 'SAS', 'SAS', '2013-05-20', '', 'islam', '3', '3', 'kalimantanselatan', 'm', 'learn.anp@gmail.com', '130520');

-- --------------------------------------------------------

--
-- Table structure for table `mst_anggota`
--

CREATE TABLE `mst_anggota` (
  `mst_no_pendaftaran` int(8) NOT NULL,
  `mst_nama` varchar(128) NOT NULL,
  `mst_jenis_kelamin` enum('l','p') DEFAULT 'l',
  `mst_tempat_lahir` varchar(64) NOT NULL,
  `mst_tanggal_lahir` date NOT NULL,
  `mst_nik` int(11) DEFAULT NULL,
  `mst_hp` char(16) DEFAULT NULL,
  `mst_wa` enum('y','n') DEFAULT 'y',
  `mst_pendidikan` varchar(128) DEFAULT NULL,
  `mst_sertifikat` varchar(128) DEFAULT NULL,
  `namafoto` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_anggota`
--

INSERT INTO `mst_anggota` (`mst_no_pendaftaran`, `mst_nama`, `mst_jenis_kelamin`, `mst_tempat_lahir`, `mst_tanggal_lahir`, `mst_nik`, `mst_hp`, `mst_wa`, `mst_pendidikan`, `mst_sertifikat`, `namafoto`) VALUES
(1, 'sas', '', 'dsadadad', '2020-05-06', 33, '33', '', 'S1', 'DIII', NULL),
(2, 'ali masduki', '', 'ngawi', '2020-05-12', 35677, '33434', '', 'DIII', 'S2', NULL),
(3, 'ali masduki', '', 'ngawi', '2020-05-21', 2234333, '3323223', '', 'DIII', 'DIII', NULL),
(4, 'sas', 'p', 's', '2020-05-16', 33, '33', 'n', 'DIII', 'DIII', NULL),
(5, 'ss', '', 'ss', '2020-05-09', 333, '333', '', '0', '0', NULL),
(6, 'ss', '', 'ss', '2020-05-09', 333, '333', '', '0', '0', NULL),
(7, 'sasa', 'p', 'ngawi', '2020-05-01', 33, '333', '', 'S1', 'DIII', NULL),
(8, 'sasa', 'p', 'ngawi', '2020-05-01', 33, '333', '', 'S1', 'DIII', NULL),
(9, 'asa', 'l', 'sdadas', '2020-05-01', 1, '33', 'y', 'DIII', 'DIII', NULL),
(10, 'SA', 'p', 'SA', '2020-05-04', 232, '22', '', 'DIII', 'DIII', ''),
(11, 'SA', 'p', 'SA', '2020-05-04', 232, '22', '', 'DIII', 'DIII', ''),
(12, 'sa', 'l', 'sas', '2020-05-12', 3, '3', '', 'DIII', 'DIII', ''),
(13, 'sas', 'l', 'sas', '2020-05-23', 33, '33', 'y', 'S2', 'DIII', 'cara transfer uang melalui internet banking bca sesama bca4.jpg'),
(14, 'sada', 'p', 'asd', '2020-05-06', 33, '33', '', 'S1', 'DIII', 'bg1.jpeg'),
(15, 'as', 'p', 'sa', '2020-05-03', 3, '3', '', 'DIII', 'DIII', 'bg1.jpeg'),
(16, 'as', 'p', 'sa', '2020-05-03', 3, '3', '', 'DIII', 'DIII', 'bg1.jpeg'),
(17, 'as', 'p', 'sa', '2020-05-03', 3, '3', '', 'DIII', 'DIII', 'bg1.jpeg'),
(18, 'as', 'p', 'sa', '2020-05-03', 3, '3', '', 'DIII', 'DIII', '');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `status_slta` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `nama_slta` varchar(100) NOT NULL,
  `no_ijazah` varchar(100) NOT NULL,
  `tahun lulus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama_pendaftar`, `id_pendaftar`, `status_slta`, `kota`, `kecamatan`, `kode_pos`, `nama_slta`, `no_ijazah`, `tahun lulus`) VALUES
(3, 'frans chaniago', 2, 'negeri', 'jakarta', 'cengkareng', '15589', 'SMP 2 Cengkareng', '687678578579', '2013');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_transfer`
--
ALTER TABLE `bukti_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_orangtua`
--
ALTER TABLE `data_orangtua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir_mhs`
--
ALTER TABLE `formulir_mhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_lengkap` (`nama_lengkap`);

--
-- Indexes for table `mst_anggota`
--
ALTER TABLE `mst_anggota`
  ADD PRIMARY KEY (`mst_no_pendaftaran`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bukti_transfer`
--
ALTER TABLE `bukti_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_orangtua`
--
ALTER TABLE `data_orangtua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `formulir_mhs`
--
ALTER TABLE `formulir_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mst_anggota`
--
ALTER TABLE `mst_anggota`
  MODIFY `mst_no_pendaftaran` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
