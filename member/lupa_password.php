<?php
	include "models/config.php";
	require "models/gmail.php";
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$code =  $_GET['code'];
		$qry = "SELECT * FROM users WHERE email = '$email'";
		$sql = mysqli_query($link, $qry);
		if(mysqli_num_rows($sql) > 0){
			header("location: contents.php?email=".$email);
		}else{
			header("location: lupa_password.php?pesan=gagal");
		}
	}
?>
<?php include "base/navbar_lpassword.php" ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-33">
						Lupa Password
					</span>
					<?php if(isset($_GET['pesan']) && $_GET['pesan'] == "gagal"){?>
						<p class="text-danger text-center">Email tidak ditemukan</p>
					<?php }?>
					<?php if(isset($_GET['pesan']) && $_GET['pesan'] == "berhasil"){?>
						<p class="text-success text-center">Silakan cek email anda untuk perbaharui password.</p>
					<?php }?>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button type="submit" name="submit" class="login100-form-btn">
							Kirim
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php include "base/footer_lpassword.php" ?>