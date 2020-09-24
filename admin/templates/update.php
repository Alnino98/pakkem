<?php 
// koneksi database
include 'koneksi.php';

	if ($nama_file!=NULL) {
		$id_agenda = $_POST['id_agenda'];
		$hari_tanggal = $_POST['hari_tanggal'];
		$waktu_agenda = $_POST['waktu_agenda'];
		$kegiatan = $_POST['kegiatan'];
		$keterangan_agenda = $_POST['keterangan_agenda'];
		$lokasi_file = $_FILES['fupload']['tmp_name'];
		$nama_file   = $_FILES['fupload']['name'];
		$folder = "files/";
		$ext = pathinfo($nama_file, PATHINFO_EXTENSION);
		$filename = $kegiatan.".".$ext;
		move_uploaded_file($lokasi_file,$folder.$filename);
		// menginput data ke database
		$query = mysqli_query($koneksi,"update agenda_kegiatan set hari_tanggal='$hari_tanggal', waktu_agenda='$waktu_agenda', kegiatan='$kegiatan', keterangan_agenda='$keterangan_agenda',kegiatan_pdf='$filename' where id_agenda='$id_agenda'");
	} else if($nama_file==NULL){
		$id_agenda = $_POST['id_agenda'];
		$hari_tanggal = $_POST['hari_tanggal'];
		$waktu_agenda = $_POST['waktu_agenda'];
		$kegiatan = $_POST['kegiatan'];
		$keterangan_agenda = $_POST['keterangan_agenda'];
		// menginput data ke database
		$query = mysqli_query($koneksi,"update agenda_kegiatan set hari_tanggal='$hari_tanggal', waktu_agenda='$waktu_agenda', kegiatan='$kegiatan', keterangan_agenda='$keterangan_agenda'where id_agenda='$id_agenda'");
	}

		header("location:agenda_kegiatan_upload.php");

 
?>