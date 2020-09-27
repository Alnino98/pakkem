-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2020 pada 21.16
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
-- Database: `pakkem_pakkem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`, `nama`, `level`, `log`, `foto`) VALUES
(17, 'admin', 'admin@admin.com', '8f4f4aa2c27b7c39a33895142e164354', 'admin', '1', '2020-09-27 16:20:16', '17911097432.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda_kegiatan`
--

CREATE TABLE `agenda_kegiatan` (
  `id_agenda` varchar(100) NOT NULL,
  `hari_tanggal` date NOT NULL,
  `waktu_agenda` varchar(100) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `keterangan_agenda` varchar(200) NOT NULL,
  `kegiatan_pdf` varchar(200) DEFAULT NULL,
  `waktu_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda_kegiatan`
--

INSERT INTO `agenda_kegiatan` (`id_agenda`, `hari_tanggal`, `waktu_agenda`, `kegiatan`, `keterangan_agenda`, `kegiatan_pdf`, `waktu_upload`) VALUES
('250805755', '2020-10-08', '09:00 WIB', 'Rapat', 'Rapat', 'Rapat.pdf', '2020-09-27 16:20:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE `modul` (
  `id_modul` varchar(100) NOT NULL,
  `nama_modul` varchar(200) NOT NULL,
  `keterangan_modul` varchar(200) NOT NULL,
  `modul_pdf` varchar(200) NOT NULL,
  `waktu_upload_modul` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `keterangan_modul`, `modul_pdf`, `waktu_upload_modul`) VALUES
('1576295450', 'Peraturan', 'peraturan masuk', 'Peraturan.pdf', '2020-09-27 16:20:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_anggota`
--

CREATE TABLE `mst_anggota` (
  `mst_no_pendaftaran` int(11) NOT NULL,
  `mst_nama` varchar(128) NOT NULL,
  `mst_jenis_kelamin` varchar(50) DEFAULT NULL,
  `kantor` varchar(100) NOT NULL,
  `mst_tempat_lahir` varchar(64) NOT NULL,
  `mst_tanggal_lahir` date NOT NULL,
  `mst_nik` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `mst_hp` char(16) DEFAULT NULL,
  `mst_wa` enum('y','n') DEFAULT 'y',
  `mst_pendidikan` varchar(128) DEFAULT NULL,
  `mst_sertifikat` varchar(128) DEFAULT NULL,
  `namafoto` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mst_anggota`
--

INSERT INTO `mst_anggota` (`mst_no_pendaftaran`, `mst_nama`, `mst_jenis_kelamin`, `kantor`, `mst_tempat_lahir`, `mst_tanggal_lahir`, `mst_nik`, `email`, `keterangan`, `mst_hp`, `mst_wa`, `mst_pendidikan`, `mst_sertifikat`, `namafoto`) VALUES
(27, 'Joko Hadi', 'Laki-laki  ', 'Ditjen Migas', 'YOGYES', '1985-03-04', 2147483647, 'jokohadi@migas.go.id', 'Coba', '087888887777', 'y', 'S2', 'Ahli semunya', 'WALogo.png'),
(29, 'Soehatman Ramli', 'Laki-laki  ', 'TIPKM', 'Padang Sidempuan', '2020-05-02', 2147483647, 'hatman@tipk-migas.org', 'Test', '0812888888888', 'y', 'S2', 'Ahli Safety', 'WALogo.png'),
(30, 'Komar Adiwijaya', 'Laki-laki  ', 'TIPKM', 'Medan', '2020-05-05', 2147483647, 'komar@tipk-migas.org', 'cobacoba', '0812999999999', 'y', 'S2', 'Ahlinya Ahli', 'WALogo.png'),
(32, 'ABDUL HALIM HAMID', 'Laki-laki  ', 'TIPKM MIGAS', 'Meda', '1956-09-23', 2147483647, 'halim.hamid.a@gmail.com', '', '0811903218', 'y', 'S2', 'ISO 14001-Auditor', 'Pasfoto A Halim Hamid the latest Dec 2019.jpg'),
(35, 'Agung Nur Wachid', 'Laki-laki  ', 'Direktorat Jenderal Migas', 'Surabaya', '1991-08-11', 2147483647, 'agungnw507@gmail.com', '', '085648443310', 'y', 'S1', 'Inspektur Migas, Pengawas K3 Migas, Auditor SMKM,', '2291.jpg'),
(36, 'Andhika Maulana Malik', 'Laki-laki  ', 'PT Permata Karya Jasa', 'Bandung', '1996-01-08', 2147483647, 'andhikamaulana0896@gmail.com', '', '0895412958872', 'y', 'S1', 'Ahli K3 Umum dan Pengawas K3 Industri Migas', 'Andhika Maulana Malik.jpeg'),
(37, 'Andri Abdillah Syahnur', 'Laki-laki  ', 'PSC', 'Jakarta', '1985-06-17', 2147483647, 'andri.syahnur@gmail.com', '', '087788006831', 'y', 'S1', 'Ahli K3 Umum, K3 Migas, IRCA Lead Auditor, TOT', 'Andri Syahnur (1).jpg'),
(38, 'Ibnu Zaenal Arifin', 'Laki-laki  ', 'PT Pertamina (Persero)', 'Rembang', '0000-00-00', 2147483647, 'ibnu.zaenal@gmail.com', '', '081329226322', 'y', 'S1', 'NEBOSH, DNV PHAST Training, Fire & Safety Training', 'ibnu.zaenal.jpg'),
(39, 'Doni Oktarizon', 'Laki-laki  ', 'Ditjen Migas', 'Manna', '1989-11-10', 2147483647, 'doni.oktarizon@gmail.com', 'Sebagai Inspektur Migas (Aparatur Sipil Negera) Ditjen Migas Kementerian ESDM RI. Saat ini ditempatkan pada Direktorat Perencanaan dan Pembangunan Infrastruktur Migas', '085267572239', 'y', 'S1', 'Diklat Aparatur Sipil Negara JFT Inspektur Migas ', 'Doni Oktarizon (4x6).png'),
(40, 'Henky Viedian Santoso', 'Laki-laki  ', 'PT Biro Klasifikasi Indonesia (Persero)', 'Probolinggo', '1989-04-01', 2147483647, 'henky_cow@yahoo.com', '', '082299579322', 'y', 'D IV', 'Sertifikat Inspeksi Pipa Penyalur Migas', 'DSC_5067.JPG'),
(41, 'RISMAN BAGO', 'Laki-laki  ', 'STIKIM IMA', 'HILIFALAGO', '1991-12-12', 2147483647, 'rbago80@gmail.com', 'Semoga dapat bergabung dengan group ini, dan bisa belajar lagi tentang k3 Kepada senior. trimakasih', '085361597972', 'y', 'DIII', 'Ak3 muda kontruksi, Damkar kelas D, AK3 Umum', '3 x 4.jpg'),
(42, 'Husairi', 'Laki-laki  ', 'PT. Biro Klasifikasi Indonesia (Persero) ', 'Mataram ', '1996-08-08', 2147483647, 'husairi68@yahoo.com', 'HSE Officer di PT. Biro Klasifikasi Indonesia (Persero) ', '087864357862', 'y', 'S1', 'Ahli K3 Umum, Accident Investigation. ', 'Pas Foto Husairi.jpg'),
(43, 'Lilah kurniasari', 'Perempuan  ', 'PT. BIRO KLASIFIKASI INDONESIA (PERSERO)', 'Blitar', '1984-09-27', 2147483647, 'lilah@bki.co.id', '', '082112789403', 'y', 'S1', 'AK3U, K3 Kimia', 'IMG-20200609-WA0018.jpg'),
(44, 'Faris', 'Laki-laki  ', 'Pertamina (Persero)', 'Jeddah', '1990-12-13', 2147483647, 'faris@pertamina.com', 'Mohon approval', '81230636007', 'y', 'S1', 'cukup banyak ya.... saya ada di Bidang HSSE', 'Foto.jpg'),
(45, 'Tengku Ferdy Hendrawan', 'Laki-laki  ', 'PT. Pertamina EP', 'Dumai', '1980-12-26', 2147483647, 'tengkuferdy@gmail.com', '', '081278815045', 'y', 'D IV', 'HSE', 'Foto (merah).jpg'),
(46, 'Febrian, ST', 'Laki-laki  ', 'PT. Sucofindo Cab. Jakarta', 'Kurai Taji', '1991-02-19', 2147483647, 'febrian.boestami@gmail.com', '', '085274000504', 'y', 'S1', 'Pengawas K3 Migas, AK3Umum, POP Pertambangan', 'sERAGAM mERAH-1.jpg'),
(47, 'Andhika Maulana Malik', 'Laki-laki  ', 'PT Permata Karya Jasa', 'Bandung', '1996-01-08', 2147483647, 'andhikamaulana0896@gmail.com', '', '0895412958872', 'y', 'S1', 'Ahli K3 Umum dan Pengawas K3 Industri Migas', 'Andhika Maulana Malik.jpeg'),
(48, 'Mohammad Arif Harfianto', 'Laki-laki  ', 'PT Polytama Propindo', 'Bontang', '1990-02-13', 2147483647, 'arif.harfianto@gmail.com', '-', '082119025566', 'y', 'S1', 'Ahli K3 Umum', 'Arif-pasfoto.png'),
(49, 'Krisnugroho Priyo Prakoso, ST.', 'Laki-laki  ', 'PT. Perfecta Sarana Engineering', 'Surabaya', '1978-07-05', 2147483647, 'krisnu_hits98@yahoo.co.id', 'QA/QC Engineer', '081230019712', 'y', 'S1', 'WI ITS, NDT 4 Method, K-3 Industri Migas', 'IMG_20200616_121039_392.jpg'),
(50, 'Rudi Adolf Hotman Sihombing', 'Laki-laki  ', 'PT. PGAS Solution', 'Medan', '1970-01-07', 2147483647, 'rudiadolf@pgn-solution.co.id', 'PT. GAS Solution adalah anak perusahaan PT. PGN yang bergerak dalam bisnis operasi dan pemeliharaa Gas.', '0811634259', 'y', 'S2', 'Ahli K 3 Umum Kemnaker', 'Foto Rudi1.jpg'),
(51, 'Sonny Citra Permadi', 'Laki-laki  ', 'PT PERTAMINA EP', 'Bogor', '1986-07-25', 19013306, 'sonnycitra@gmail.com', '', '08121111884', 'y', 'S1', 'Ahli K3 Migas level Pengawas', '1F90AB3F-5C56-4525-9238-F76B092DCD4E.jpeg'),
(52, 'Rizky Arya Kosasih', 'Laki-laki  ', 'PT SUCOFINDO', 'Samarinda', '1993-10-09', 2147483647, 'rizky.arya@sucofindo.co.id', '', '082226624993', 'y', 'S1', 'Inspektur Pesawat Angkat (IPA) Migas', 'IMG-20191025-WA0002.jpg'),
(53, 'mulyono hadi ', 'Laki-laki  ', 'PT Pertamina EP', 'Murung Pudak', '1980-02-20', 2147483647, 'mulyono.hadi@pertamina.com', '', '08125139761', 'y', 'S1', 'ada', 'WhatsApp Image 2020-06-26 at 18.44.12.jpeg'),
(54, 'Indra Susanto', 'Laki-laki  ', 'Pt. Chevron Pacific Indonesia', 'Jakarta', '1980-12-07', 23865, 'indra.susanto07@gmail.com', '', '082287088977', '', 'S1', 'Lead Auditor EMS', ''),
(55, 'Muhammad Agus Kariem', 'Laki-laki  ', 'Institut Teknologi Bandung', 'Kendal', '1981-08-13', 2147483647, 'kariem@itb.ac.id', '', '081910161318', 'y', 'S3', 'IPM', 'Kariem.jpg'),
(56, 'Joko Hadisubroto ', 'Laki-laki  ', 'PT Pertamina Hulu Mahakam ', 'Kendal', '1968-09-14', 19251297, 'jokohadisubroto@live.com', '', '081250482707', 'y', 'S1', 'Menyusul', '1BAF90DC-0516-4128-B281-8F7EBB992CB2.jpeg'),
(57, 'Fadil Wimala', 'Laki-laki  ', 'PHE OSES', 'Balikpapan', '1989-05-24', 2147483647, 'fadil.wimala@gmail.com', '', '081381754885', 'y', 'S1', 'Basic Well Control Course - Elnusa', 'Foto Fadil Wimala.jpg'),
(60, 'Visky katerina putri', 'Perempuan  ', 'Pertamina hulu mahakam', 'Jambi', '1991-12-18', 2147483647, 'viskykaterinaputri@yahoo.com', '', '08115901812', 'y', 'S1', 'Universitas Indonesia', 'visky merah2.jpg'),
(61, 'Syamsul Arifin', 'Laki-laki  ', 'Pertamina Hulu Indonesia', 'Jakarta', '1983-06-02', 2147483647, 'syamsul.arifin@yahoo.com', '', '08569889007', 'y', 'S2', 'ISRS, Confined Space, OHSAS 18001, H2S, Lifting', 'Peci 011b.jpg'),
(65, 'M. Rifqi Nashoruddin ', 'Laki-laki  ', 'PT. AMP Technology at PT. Semen Indonesia', 'Tuban', '1981-07-02', 2147483647, 'rifqi_nashoruddin@yahoo.com', 'Praktisi di dunia K3', '085335210739', 'y', '0', 'K3 Konstruksi, IIHA, CSMS,  Log Out Tag Out, K3 Pe', 'CYMERA_20200320_114658.jpg'),
(67, 'Muchammad Ali Lukman', 'Laki-laki  ', 'Pertamina Hulu Energi', 'Jakarta', '1897-01-07', 2147483647, 'muchammad_ali@yahoo.com', 'Kepada Sekretariat PAKKEM Yth.,\r\n\r\nPerkenankan saya mendaftar sebagai anggota. \r\n\r\nTerima kasih atas perhatiannya.\r\n\r\nSalam,\r\nAli', '081317402896', 'y', 'S1', 'Certified Functional Safety Professional', 'Pas Foto - Duduk - Square.jpg'),
(68, 'Syaifullah, ST', 'Laki-laki  ', 'PT Farrald Teknindo', 'Lhoksukon', '1975-05-15', 2147483647, 'syaifullah.ft@gmail.com', '', '08129470606', 'y', 'S1', 'Pipeline Inspector, Pressure Vessel Inspector,', 'foto 15 kb.jpg'),
(69, 'Rudi Adolf Hotman Sihombing', 'Laki-laki  ', 'PT PGAS Solution', 'Medan', '1970-01-07', 2147483647, 'rudiadolfsihombing@yahoo.com', '', '0811634259', 'y', 'S2', 'Ahli K3 Umum Kemenaker', 'Foto Rudi1.jpg'),
(70, 'Wahyu Hidayah', 'Laki-laki  ', 'PT Sertco Quality', 'Cirebon', '1989-04-06', 2147483647, 'sso.ag.wahyu.hidayah@gmail.com', '', '085695730934', 'y', 'S1', 'ahli K3 Umum Kemenaker, K3 Migas ESDM Cepu', 'poto wahyu.PNG'),
(71, 'Wahyu Hidayah', 'Laki-laki  ', 'PT Sertco Quality', 'Cirebon', '1989-04-06', 2147483647, 'sso.ag.wahyu.hidayah@gmail.com', 'mohon untuk di daftarkan anggota Pakkem', '085695730934', 'y', 'S1', 'ahli K3 Umum Kemenaker, K3 Migas ESDM Cepu', 'poto wahyu.PNG'),
(72, 'Ir. Eddy Bachri MK3', 'Laki-laki  ', 'Konsultant HSE', 'Amuntai', '1956-05-11', 2147483647, 'eddy.bachri@gmail.com', 'Salam Kenal', '0811878902', 'y', 'S2', 'NEBOSH, OHSAS 18001 Lead Auditor, BNSP Trainer', 'Foto Eddy Bachri 7275101.jpg'),
(73, 'Muhamad Mustofa, S.T.', 'Laki-laki  ', 'PT. JGC Indonesia', 'Tuban', '1986-12-07', 2147483647, 'thofa27@gmail.com', '', '082250622766', 'y', 'S1', 'Pengawas K3 Migas - PPSDM Migas Cepu', 'Muhamad Mustofa, S.T..jpeg'),
(74, 'Rahardhy Permana', 'Laki-laki  ', 'PT Transportasi Gas Indonesia', 'Dumai', '1977-09-27', 2147483647, 'rahardy.permana@tgi.co.id', '', '081366107337', 'y', 'S1', 'Ahli Madya K3 Konstruksi ', 'IMG_0659 TUSIR.jpg'),
(75, 'Erwin Jonathan', 'Laki-laki  ', 'PT Nusantara Regas', 'Pendopo', '1977-01-08', 69020046, 'erwinjonathan77@gmail.com', '- Anggota WSO\r\n- Anggota IIHA\r\nPengalaman di HSSE +/- 19 Tahun', '81291600050', 'y', 'S2', 'AK3 Umum, Pengawas K3 Migas, Nebosh IGC & ITC dll', 'IMG_2133 GA.jpg'),
(76, 'Triyono Rakhmadi', 'Laki-laki  ', 'PT Duta Mas Abadi Investama', 'Cilacap', '1972-05-08', 2147483647, 'triyono@damaiinvestama.com', '', '08111889925', 'y', 'S2', 'Pengawas K3 Migas, Asesor Kompetensi', ''),
(77, 'Triyono Rakhmadi', 'Laki-laki  ', 'PT Duta Mas Abadi Investama', 'Cilacap', '1972-05-08', 2147483647, 'triyono@damaiinvestama.com', 'Pls registered as member', '08111889925', 'y', 'S2', 'Pengawas K3 Migas, Asesor Kompetensi', ''),
(78, 'MUHAMMAD YONNI', 'Laki-laki  ', 'Perusahaan Migas', 'Bukittinggi', '1975-06-05', 2147483647, 'y.yonni@yahoo.co.id', '', '081365441610', 'y', 'DIII', 'AK3 Umum, AK3 konstruksi', 'IMG_20200707_200317.jpg'),
(79, 'MUHAMMAD YONNI', 'Laki-laki  ', 'Perusahaan Migas', 'Bukittinggi', '1975-06-05', 2147483647, 'y.yonni@yahoo.co.id', '', '081365441610', 'y', 'DIII', 'AK3 Umum, AK3 konstruksi', 'IMG_20200707_200317.jpg'),
(80, 'MUHAMMAD YONNI', 'Laki-laki  ', 'Perusahaan Migas', 'Bukittinggi', '1975-06-05', 2147483647, 'y.yonni@yahoo.co.id', '', '081365441610', 'y', 'DIII', 'AK3 Umum, AK3 konstruksi', 'IMG_20200707_200317.jpg'),
(81, 'Surya Eka Saputra', 'Laki-laki  ', 'PetroChina International Jabung Ltd', 'Pandan Makmur', '1985-02-04', 2147483647, 'suryaekasaputramasdua@gmail.com', '', '081373981967', 'y', 'S1', 'Ahli K3 Umum', ''),
(82, 'Surya Eka Saputra', 'Laki-laki  ', 'PetroChina International Jabung Ltd', 'Pandan Makmur', '1985-02-04', 2147483647, 'suryaekasaputramasdua@gmail.com', 'Ingin bergabung sebagai anggota PAKKEM agar dapat menambah ilmu pegetahuan,pengalaman,dan wawasan mengenai K3 Migas secara mendalam.', '081373981967', 'y', 'S1', 'Operator K3', 'IMG_1304.JPG'),
(83, 'Sigit Widiyantoro', 'Laki-laki  ', 'PT Indospec Asia', 'Bondowoso', '1981-08-30', 2147483647, 'swidiyantoro@indospec.co.id', '', '081113680005', 'y', 'S1', 'N/A', 'Sigit.jpg'),
(84, 'Abdul Aziz', 'Laki-laki  ', 'KSO Pertamina EP - Gasindo Makmur Energy Ltd.', 'Jakarta', '1988-06-12', 2147483647, 'abd.aziz354@gmail.com', 'Saya telah menjadi praktisi HSE di industri migas selama kurang lebih 9 tahun sebagai HSE Coordinator. Mohon berkenan join dalam komunikas PAKKEM. Terima kasih salam sejawat.', '081288274685', 'y', 'S1', 'K3 Migas ', 'Abdul Aziz.jpg'),
(85, 'Alfian Wira B', 'Laki-laki  ', 'PT. HOATYK', 'Ujung Pandang', '1995-08-24', 2147483647, 'alfianwirab@gmail.com', '', '082290016075', 'y', 'S1', 'Ahli K3 Umum', 'IMG-20200729-WA0035.jpg'),
(86, 'Alfian Wira B', 'Laki-laki  ', 'PT. HOATYK', 'Ujung Pandang', '1995-08-24', 2147483647, 'alfianwirab@gmail.com', '', '082290016075', 'y', 'S1', 'Ahli K3 Umum', 'IMG-20200729-WA0035.jpg'),
(87, 'Novella Musya', 'Laki-laki  ', 'PT. Biro Klasifikasi Indonesia (Persero)', 'Surabaya', '1990-11-02', 2147483647, 'novellamusya@gmail.com', '', '081212789977', 'y', 'S1', 'Inspektur Pipa Penyalur & Inspektur Platform MIGAS', 'Foto Novel.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembaca_agenda`
--

CREATE TABLE `pembaca_agenda` (
  `id` int(11) NOT NULL,
  `pembaca` varchar(100) NOT NULL,
  `notifikasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembaca_agenda`
--

INSERT INTO `pembaca_agenda` (`id`, `pembaca`, `notifikasi`) VALUES
(10, 'yoggaajipratama99@gmail.com', 0),
(11, 'moh.ramdani22@gmail.com', 0),
(12, 'infokeun@gmail.com', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `agenda_kegiatan`
--
ALTER TABLE `agenda_kegiatan`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indeks untuk tabel `mst_anggota`
--
ALTER TABLE `mst_anggota`
  ADD PRIMARY KEY (`mst_no_pendaftaran`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pembaca_agenda`
--
ALTER TABLE `pembaca_agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `umum`
--
ALTER TABLE `umum`
  ADD PRIMARY KEY (`id_umum`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `mst_anggota`
--
ALTER TABLE `mst_anggota`
  MODIFY `mst_no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembaca_agenda`
--
ALTER TABLE `pembaca_agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `umum`
--
ALTER TABLE `umum`
  MODIFY `id_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
