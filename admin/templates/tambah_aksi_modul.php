
<?php 
// koneksi database
include 'koneksi.php';
global $koneksi;

$nama_modul = $_POST['nama_modul'];
$keterangan_modul = $_POST['keterangan_modul'];
$lokasi_file = $_FILES['fupload1']['tmp_name'];
$nama_file   = $_FILES['fupload1']['name'];
$folder = "files modul/";
$ext = pathinfo($nama_file, PATHINFO_EXTENSION);
$filename = $nama_modul.".".$ext;
move_uploaded_file($lokasi_file,$folder.$filename);
$random = rand();

if ($nama_file==NULL) {
	$query = "INSERT INTO `modul` (`id_modul`, `nama_modul`, `keterangan_modul`, `waktu_upload_modul`) VALUES ('$random', '$nama_modul', '$keterangan_modul',CURRENT_TIMESTAMP)";

	// mengalihkan halaman kembali ke index.php
			$sql = mysqli_query($koneksi, $query);
			if($sql){
				header("location:modul_upload.php");
			}
			else{
				echo mysqli_error();
			}


	} else if ($nama_file!=NULL) {
		$query = "INSERT INTO `modul` (`id_modul`, `nama_modul`, `keterangan_modul`,`modul_pdf`, `waktu_upload_modul`) VALUES ('$random', '$nama_modul', '$keterangan_modul','$filename',CURRENT_TIMESTAMP)";


				// mengalihkan halaman kembali ke index.php
			$sql = mysqli_query($koneksi, $query);
				if($sql){
					header("location:modul_upload.php");
				}
				else{
					echo mysqli_error();
				}
	}


?>