
<?php 
// koneksi database
include 'koneksi.php';
global $koneksi;
 
// menangkap data yang di kirim dari form
$hari_tanggal = $_POST['hari_tanggal'];
$waktu_agenda = $_POST['waktu_agenda'];
$kegiatan = $_POST['kegiatan'];
$keterangan_agenda = $_POST['keterangan_agenda'];
 


$query = "INSERT INTO `agenda_kegiatan` (`id_agenda`, `hari_tanggal`, `waktu_agenda`, `kegiatan`, `keterangan_agenda`, `waktu_upload`) VALUES (NULL, '$hari_tanggal', '$waktu_agenda', '$kegiatan', '$keterangan_agenda', CURRENT_TIMESTAMP)";

// menginput data ke database
// mengalihkan halaman kembali ke index.php
$sql = mysqli_query($koneksi, $query);
	if($sql){
		header("location:agenda_kegiatan_upload.php");
	}

 

 
?>