<?php 
// koneksi database
include 'koneksi.php';

	if ($nama_file!=NULL) {
		$id_modul = $_POST['id_modul'];
		$nama_modul = $_POST['nama_modul'];
		$keterangan_modul = $_POST['keterangan_modul'];
		$lokasi_file = $_FILES['fupload']['tmp_name'];
		$nama_file   = $_FILES['fupload']['name'];
		$folder = "files modul/";
		$ext = pathinfo($nama_file, PATHINFO_EXTENSION);
		$filename = $kegiatan.".".$ext;
		move_uploaded_file($lokasi_file,$folder.$filename);
		// menginput data ke database
		$query = mysqli_query($koneksi,"update modul set nama_modul='$nama_modul', keterangan_modul='$keterangan_modul',kegiatan_pdf='$filename' where id_modul='$id_modul'");

	} else if($nama_file==NULL){
		$id_modul = $_POST['id_modul'];
		$nama_modul = $_POST['nama_modul'];
		$keterangan_modul = $_POST['keterangan_modul'];
		// menginput data ke database
		$query = mysqli_query($koneksi,"update modul set nama_modul='$nama_modul', keterangan_modul='$keterangan_modul' where id_modul='$id_modul'");
	}

		header("location:modul_upload.php");

 
?>