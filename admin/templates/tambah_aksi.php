
<?php 
// koneksi database
include 'koneksi.php';
global $koneksi;

$all = mysqli_query($koneksi, "SELECT * FROM pembaca_agenda");


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
				while ($row = mysqli_fetch_array($all)) {
					$email = $row['pembaca'];
					$update = "UPDATE `pembaca_agenda` SET notifikasi = notifikasi+1 WHERE pembaca = '$email'";
					$ok = mysqli_query($koneksi, $update);
					header("location:agenda_kegiatan_upload.php");
				}
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
				while ($row = mysqli_fetch_array($all)) {
					$email = $row['pembaca'];
					$update = "UPDATE `pembaca_agenda` SET notifikasi = notifikasi+1 WHERE pembaca = '$email'";
					$ok = mysqli_query($koneksi, $update);
					if(!$ok){
						echo mysqli_error();
					}else{
						header("location:agenda_kegiatan_upload.php");
					}
				}
			}
			else{
				echo mysqli_error();
			}
	}


?>