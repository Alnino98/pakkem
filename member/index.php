<?php
	include "models/config.php";
	$pesan = $_GET['pesan'];
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$query = "SELECT * FROM users WHERE email = '$email' and password = '$password' and status = 1";
		$sql = mysqli_query($link, $query);
		$cek = mysqli_num_rows($sql);
		$ip = $_SERVER['REMOTE_ADDR'];
		if($cek > 0){
			date_default_timezone_set("Asia/Bangkok");
			$date = date("Y-m-d h:i:sa");
			$log = 'Login '.$email.' '.$ip.' '.$date."\r\n";
			file_put_contents('log.txt', $log, FILE_APPEND);
			session_start();
			$_SESSION['username'] = $email;
			$_SESSION['email'] = $email;
			$_SESSION['status'] = "login";
			header("location: home.php");
		}else{
			echo mysqli_error($link);
			header("location: index.php?pesan=gagal");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Member Admin | Pakkem.org</title>
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
						Member Login
					</span>
					<p class="text-danger text-center"><?php if(isset($_GET['pesan'])){echo 'Username/Password salah<br>atau akun belum diaktivasi.';}?></p>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="email" name="email" placeholder="Email">
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
						<a class="txt2" href="lupa_password.php">
							Lupa password ?
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
		});
	</script>
<!--===============================================================================================-->
	<script src="js/login/main.js"></script>

</body>
</html>