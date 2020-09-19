
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$hari_tanggal = $_POST['hari_tanggal'];
$waktu_agenda = $_POST['waktu_agenda'];
$kegiatan = $_POST['kegiatan'];
$keterangan_agenda = $_POST['keterangan_agenda'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into agenda_kegiatan values('','$hari_tanggal','$waktu_agenda','$kegiatan','$keterangan_agenda')");
 
// mengalihkan halaman kembali ke index.php
header("location:agenda_kegiatan_upload.php");
 
?>