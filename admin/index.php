<?php
	include "models/config_admin.php";
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);
		$query = "SELECT * FROM admin WHERE username = '$username' and password = '$password' and level = 1";
		$sql = mysqli_query($link_admin, $query);
		$cek = mysqli_num_rows($sql);
		while ($row = mysqli_fetch_array($sql)) {
			$foto = $row['foto'];
		}

		if($cek > 0){
	        
	        date_default_timezone_set("Asia/Bangkok");
	        $date = date("Y-m-d h:i:sa");
	        $log = 'Login '.$username.' '.$ip.' '.$date."\r\n";
	        file_put_contents('log.txt', $log, FILE_APPEND);

			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			$_SESSION['level'] = 1;
			$_SESSION['foto'] = $foto;
			header("location: home.php");
		}else{
			echo "<script>window.location.href='index.php?pesan=gagal'</script>";
		}
	}
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin | Pakkem.org</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/icon-pakkem.png" alt="IMG">
				</div>

				<form action="" class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Admin Login
					</span>
					<?php 
						if(isset($_GET['pesan'])){
							echo "<p class='mt-3 text-danger text-center'>Username atau password tidak cocok<br>atau akun anda belum diaktivasi<br>super admin</p>";
						}
					?>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/login/main.js"></script>

</body>
</html>