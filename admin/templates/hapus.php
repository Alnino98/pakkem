<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_agenda = $_GET['id_agenda'];
$file = $_GET['file'];
exec("rm -rf files/".$file);

// menghapus data dari database
mysqli_query($koneksi,"delete from agenda_kegiatan where id_agenda='$id_agenda'");
 
// mengalihkan halaman kembali ke index.php
header("location:agenda_kegiatan_upload.php");
 
?>