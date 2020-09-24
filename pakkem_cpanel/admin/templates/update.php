<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'");


// menangkap data yang di kirim dari form
$id_agenda = $_POST['id_agenda'];
$hari_tanggal = $_POST['hari_tanggal'];
$waktu_agenda = $_POST['waktu_agenda'];
$kegiatan = $_POST['kegiatan'];
$keterangan_agenda = $_POST['keterangan_agenda'];
 
// menginput data ke database
mysqli_query($koneksi,"update agenda_kegiatan set hari_tanggal='$hari_tanggal', waktu_agenda='$waktu_agenda', kegiatan='$kegiatan', keterangan_agenda='$keterangan_agenda' where id_agenda='$id_agenda'");
 
// mengalihkan halaman kembali ke index.php
header("location:agenda_kegiatan_upload.php");
 
?>