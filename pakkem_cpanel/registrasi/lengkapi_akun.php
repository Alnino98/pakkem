<?php
	include "config.php";
	require "gmail.php";
	if(isset($_GET['code'])){
		$code =  $_GET['code'];
		$qry = "SELECT * FROM pendaftar";
		$sql = mysqli_query($link, $qry);
	}
	if(isset($_POST['submit'])){
		$password =  md5($_POST['password']);
        $email =  $_POST['email'];
        $nama =  $_POST['nama'];
        
		$qry = "INSERT INTO users VALUES (NULL, '$nama', '$password', '$email', '$nama', 1, 0, CURRENT_TIMESTAMP)";
		$sql = mysqli_query($link, $qry);
		if($sql == true){
			echo "<script>
			window.alert('Password berhasil diperbaharui silakan tunggu 24 jam untuk aktivasi akun anda.');
			window.location.href='index.php?pesan=berhasil';
			</script>";
		}else{
			echo mysqli_error($link);
		}
	}
?>

<?php while($row = mysqli_fetch_array($sql)){?>
	<?php $email = md5($row['email']);?>
	<?php if($code == $email){?>
		<?php include "base/navbar_lpassword.php" ?>
				<div class="limiter">
					<div class="container-login100">
						<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
							<form class="login100-form validate-form" action="" method="post">
								<span class="login100-form-title p-b-33">
									Lengkapi Password
								</span>
								
								<div class="wrap-input100 validate-input">
									<input class="input100" type="password" min="8" name="password" placeholder="Password baru">
									<input type="hidden" value="<?= $row['email']; ?>" name="email">
                                    <input type="hidden" value="<?= $row['nama']; ?>" name="nama">
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
	<?php }?>
<?php }?>