
<?php  
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
 
// menginput data ke database
mysqli_query($link,"insert into umum values('','$nama','$no_hp','$email', '$pesan')");
 
// mengalihkan halaman kembali ke index.php

		echo "<script>alert('Pengiriman sukses.');window.location.href = 'kontak.php';</script>";  

?>