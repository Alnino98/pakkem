
<?php 
// koneksi database
include 'koneksi.php';
global $koneksi;

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
$random = rand();

if ($nama_file==NULL) {
	$query = "INSERT INTO `agenda_kegiatan` (`id_agenda`, `hari_tanggal`, `waktu_agenda`, `kegiatan`, `keterangan_agenda`, `waktu_upload`) VALUES ('$random', '$hari_tanggal', '$waktu_agenda', '$kegiatan', '$keterangan_agenda', CURRENT_TIMESTAMP)";

	// mengalihkan halaman kembali ke index.php
			$sql = mysqli_query($koneksi, $query);
			if($sql){
				header("location:agenda_kegiatan_upload.php");
			}
			else{
				echo mysqli_error();
			}


	} else if ($nama_file!=NULL) {
		$query = "INSERT INTO `agenda_kegiatan` (`id_agenda`, `hari_tanggal`, `waktu_agenda`, `kegiatan`, `keterangan_agenda`,`kegiatan_pdf`, `waktu_upload`) VALUES ('$random', '$hari_tanggal', '$waktu_agenda', '$kegiatan', '$keterangan_agenda', '$filename', CURRENT_TIMESTAMP)";


				// mengalihkan halaman kembali ke index.php
			$sql = mysqli_query($koneksi, $query);
				if($sql){
					header("location:agenda_kegiatan_upload.php");
				}
				else{
					echo mysqli_error();
				}
	}


?>