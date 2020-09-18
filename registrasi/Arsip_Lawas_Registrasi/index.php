<?php 

include 'head.php';


if(isset($_POST['submit'])){
		$mst_nama=$_POST['mst_nama'];
		$kantor=$_POST['kantor'];
		$mst_jenis_kelamin=$_POST['mst_jenis_kelamin'];
		$mst_tempat_lahir=$_POST['mst_tempat_lahir'];
		$mst_tanggal_lahir=$_POST['mst_tanggal_lahir'];
		$mst_nik=$_POST['mst_nik'];
		$email=$_POST['email'];
		$mst_hp=$_POST['mst_hp'];
		$mst_wa=$_POST['mst_wa'];
		$mst_pendidikan=$_POST['mst_pendidikan'];
		$mst_sertifikat=$_POST['mst_sertifikat']; 
		$keterangan=$_POST['keterangan'];
		$namafoto=(isset($_FILES['foto']['name'])?$_FILES['foto']['name']:'');   
		$valid_ext = array('png','jpeg','jpg');
		
		$date=date('dmy'); 

		if(anggota($mst_nama,$kantor,$mst_jenis_kelamin,$mst_tempat_lahir,$mst_tanggal_lahir,$mst_nik,$email,$mst_hp,$mst_wa,$mst_pendidikan,$mst_sertifikat,$keterangan,$namafoto)){
			if (move_uploaded_file($_FILES["foto"]["tmp_name"],"img/agt/".$namafoto)) {
				echo "<script>alert('Pendaftaran Berhasil')</script>";
				//window.location = "https://pakkem.org/registrasi/";
			  } else {
				echo "<script>alert('Pendaftaran Gagal')</script>";
			  }
			// move_uploaded_file ($_FILES['foto']['name'], "img/agt/".$namafoto);
          // echo "<script>alert('Pendaftaran Berhasil,')</script>";
        }else{
          echo "<script>alert('Pendaftaran Gagal')</script>";
        }
		 if (strlen($namafoto)>0) {
		//upload Photo
		// if (is_uploaded_file($_FILES['foto']['name'])) {
			// move_uploaded_file ($_FILES['foto']['name'], "img/agt/".$namafoto);
		// }
	}
}

?>

<style>
    .block-web.primary-box {
        background: #4eb2d8;
        padding: 5px;
        color: white;
    }
    
    .jumbotron{
	background-color: gray;
}

.navbar-default{
  margin-bottom: 0;
}
    .navbar {
        margin-bottom: 0;
    }
	
  .login{
    background: #2e6da4;
  }

  .daftar{
        background-color: #e4e4e4;
  }

  .petunjuk{
    border-radius: 0px;
  }
</style>

<script src='https://www.google.com/recaptcha/api.js'></script>


<div class="container-fluid"> 
        <div class="jumbotron daftar">
            <div class="header">
                <h3><center>Registrasi Keanggotaan PAKKEM  </center></h3>
            </div>
            <hr style="border:1px solid black">
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" name="mst_nama" class="form-control" placeholder="Nama Lengkap" maxlength="50" required >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Instansi</label>
                    <input type="text" name="kantor" class="form-control" placeholder="Nama Instansi" maxlength="50" required >
                </div>
				<div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <label class="radio-inline">
						<input type="radio" name="mst_jenis_kelamin" value="Laki-laki  "><span class="custom-radio"></span> Laki-laki  
					</label>
                    <label class="radio-inline">
						<input type="radio" name="mst_jenis_kelamin" value="Perempuan  "><span class="custom-radio"></span> Perempuan  
					</label>
                </div>
				
                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" name="mst_tempat_lahir" class="form-control" placeholder="Tempat Lahir" maxlength="35"  required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" name="mst_tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                </div>
				<div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="number" name="mst_nik" class="form-control" placeholder="NIK" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No HP</label>
                    <input type="number" name="mst_hp" class="form-control" placeholder="No Handphone" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;"  required>
                </div>
				<div class="form-group">
                    <label for="exampleInputEmail1">Bisa WA</label>
                    <label class="radio-inline">
						<input type="radio" name="mst_wa" value="y"><span class="custom-radio"></span> Ya  
					</label>
                    <label class="radio-inline">
						<input type="radio" name="mst_wa" value="n"><span class="custom-radio"></span> Tidak  
					</label>
                </div>
				
                <div class="form-group">
                    <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                    <select name="mst_pendidikan" class="form-control" required>
					<option value="0"> -- Pilih Pendidikan -- </option>
					<option value="DIII">D III</option>
					<option value="D IV">D IV </option>
					<option value="S1">S1 </option>
					<option value="S2">S2</option>  
					<option value="S3">S3</option>  
				  </select>
                </div>
				<div class="form-group">
                    <label for="exampleInputEmail1">Sertifikat</label>
                    <input type="text" name="mst_sertifikat" class="form-control" placeholder="Sertifikat" maxlength="50"  required>
                </div>
				<div class="form-group">
				  <label for="exampleInputEmail1">Photo Formal</label>
				  <input type="file" name="foto" class="form-control">
				</div>
				<div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label><br>
                    <textarea name="keterangan" class="form-control"></textarea>
                    
                </div>
				
				<!--<div class="g-recaptcha" data-sitekey="6LdOAfgUAAAAAOdWimUrW4473iz-Cp4wnDYg65gW"></div>-->
				
            </div>
                <div class="form-group">
                    <input type="submit" name="submit" href="#" class="btn btn-block btn-primary btn-lg" value="Registrasi">
                </div>
            </form> 
        </div>
</div>


<?php include 'foot.php'; ?>