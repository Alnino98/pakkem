<?php
	include "models/config.php";
	require "models/gmail.php";
	if(isset($_GET['code'])){
		$code =  $_GET['code'];
		$qry = "SELECT email FROM users";
		$sql = mysqli_query($link, $qry);
		while($row = mysqli_fetch_array($sql)){
			$email = md5($row['email']);
			if($code == $email){
				echo "Sama <br>";
				echo $email."<br>".$code;
			}else if($code != $email){
				echo "Beda";
			}
		}
	}
?>