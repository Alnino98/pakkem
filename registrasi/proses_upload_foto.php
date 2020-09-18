<?php 
include 'config.php';

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
	$name_foto = $email.'.'.$ext;
	$name_sertifikat = $email.'.'.$ext2;
	$exsertifikat = $name_sertifikat;

	if(!in_array($ext,$ekstensi) ) {
		header("location:index.php?alert=gagal_ekstensi");
	}else{
		if($ukuran < 1044070 && $ukuran2< 1044070)
		{		

			move_uploaded_file($_FILES['foto_upload']['tmp_name'], 'foto/'.$rand.'_'.$name_foto);
			mysqli_query($link, "INSERT INTO foto VALUES(NULL,'$name_foto','$nama',NULL)");
			//		
			move_uploaded_file($_FILES['sertifikat_upload']['tmp_name'], 'sertifikat/'.$rand.'_'.$name_sertifikat);
			mysqli_query($link, "INSERT INTO sertifikat VALUES(NULL,'$exsertifikat','$nama2','$keterangan',NULL)");
			//
			 $sql="INSERT INTO pendaftar (nama,instansi,tempat_lahir,tanggal_lahir,gender,nik,email,no_hp,bisa_wa,pendidikan,sertifikat,info_tambahan) values ('$nama','$instansi','$tempat_lahir','$tanggal_lahir','$gender','$nik','$email','$no_hp','$bisa_wa','$pendidikan','$sertifikat','$info_tambahan')";
				 $hasil=mysqli_query($link,$sql);
	 		
	 		if ($hasil) {
	 			echo "<script>alert('Selamat $nama, data anda telah kami terima. Cek email Anda, untuk konfirmasi pendaftaran ini.');window.location.href = 'index.php';</script>";
	 			
	           
	        }

	        else {
	            echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
	        }

			}else{
			header("location:index.php?alert=gagal_ukuran");
			}
	}


}else{
	echo "gagal";
}
?>
