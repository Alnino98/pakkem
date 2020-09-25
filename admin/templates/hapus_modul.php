<?php 
// koneksi database
include 'koneksi.php';
 

// menangkap data id yang di kirim dari url
$id_modul = $_GET['id_modul'];
$file = $_GET['file'];
exec("rm -rf files/".$file);

// menghapus data dari database
$sql = mysqli_query($koneksi,"delete from modul where id_modul='$id_modul'");

header("location:modul_upload.php");
 
?>