<?php 
include 'config.php';
require 'gmail.php';

function input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$nama=input($_POST["nama"]);
	$instansi=input($_POST["instansi"]);
	$tempat_lahir=input($_POST["tempat_lahir"]);
	$tanggal_lahir=input($_POST["tanggal_lahir"]);
	$gender=input($_POST["gender"]);
	$nik=input($_POST["nik"]);
	$email=input($_POST["email"]);
	$no_hp=input($_POST["no_hp"]);
	$bisa_wa=input($_POST["bisa_wa"]);
	$pendidikan=input($_POST["pendidikan"]);
	$sertifikat=input($_POST["sertifikat"]);
	$info_tambahan=input($_POST["info_tambahan"]);

        //Query input menginput data kedalam tabel pendaftaraan
       
        //Mengeksekusi/menjalankan query diatas
        

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas

    $nama = $_POST['nama_pemilik'];
    $nama2 = $_POST['nama_pemilik2'];
	$foto_upload = $_FILES['foto_upload'];
	//ket
	$keterangan = $_POST['keterangan2'];
	// $sertifikat_upload = $_FILES['sertifikat'];

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg');

	$filesertifikat = $_FILES['sertifikat_upload']['name'];
	$filename = $_FILES['foto_upload']['name'];
	$ukuran2 = $_FILES['sertifikat_upload']['size'];
	$ukuran = $_FILES['foto_upload']['size'];//ukuran foto
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	$ext2 = pathinfo($filesertifikat, PATHINFO_EXTENSION);
	$name_foto = $rand.'_'.$email.'.'.$ext;
	$name_sertifikat = $rand.'_'.$email.'.'.$ext2;
	$exsertifikat = $name_sertifikat;
	$n_foto = $name_foto;
	$n_sertif = $exsertifikat;
	$email_foto = $email;
	$email_sertifikat = $email_foto;
	
	
	$qry_foto = "INSERT INTO `foto` (`id`, `foto_upload`, `nama_pemilik`, `email_pemilik`, `status`) VALUES (NULL, '$n_foto', '$nama', '$email_foto', 0)";
	$qry_sertif = "INSERT INTO `sertifikat` (`id`, `sertifikat_upload`, `nama_pemilik`, `email_pemilik`,  `keterangan`, `status`) VALUES (NULL, '$n_sertif', '$nama2', '$email_sertifikat', '$keterangan', 0)";

	if(!in_array($ext,$ekstensi) ) {
		header("location:index.php?alert=gagal_ekstensi");
	}else{
		if($ukuran < 1044070 && $ukuran2< 1044070){
			$sql="INSERT INTO pendaftar (nama,instansi,tempat_lahir,tanggal_lahir,gender,nik,email,no_hp,bisa_wa,pendidikan,sertifikat,info_tambahan,status) values ('$nama','$instansi','$tempat_lahir','$tanggal_lahir','$gender','$nik','$email','$no_hp','$bisa_wa','$pendidikan','$sertifikat','$info_tambahan',0)";

			$cek_email = "SELECT email FROM pendaftar WHERE email = '$email'";
			$cek=mysqli_query($link,$cek_email);

			$jumlah_email = mysqli_num_rows($cek);
			
			if($jumlah_email > 1){
				echo "<script>alert('Mohon maaf email anda telah terdaftar .');window.location.href = 'index.php';</script>";
			}else if($jumlah_email < 1){
			    global $link;
			    
				$mv_foto = move_uploaded_file($_FILES['foto_upload']['tmp_name'], 'foto/'.$n_foto);
				$mv_sertif = move_uploaded_file($_FILES['sertifikat_upload']['tmp_name'], 'sertifikat/'.$n_sertif);
				if($mv_foto == true && $mv_foto == true){
					$foto_sql = mysqli_query($link, $qry_foto);
					$sertif_sql = mysqli_query($link, $qry_sertif);
					if(!$foto_sql){
						echo mysqli_error($link);
					}
					$hasil=mysqli_query($link,$sql);
					send_email($email);
					if ($hasil) {
						echo "<script>alert('Selamat $email, data anda telah kami terima. Cek email Anda, untuk konfirmasi pendaftaran ini.');window.location.href = 'index.php';</script>";
					}
		
					else {
						echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
					}
				}else {
					echo "Error";
				}

				
			}
			

		}else{
			echo "<script>alert('Ukuran max 200kb.');window.location.href = 'index.php';</script>";
		}
    }
}
?>
