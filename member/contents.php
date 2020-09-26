<?php 
require "models/gmail.php";
$email = $_GET['email'];
$encrypt = md5($_GET['email']);

$msg = "<body>
    <h3>Lupa password</h3>
    <p>Silakan klik link berikut <a href='localhost/pakkem/member/new_pass.php?code=".$encrypt."'>ini</a> untuk mengubah password anda.</p>
</body>";
$send = send_email($email, $msg);
header("location: lupa_password.php?pesan=berhasil");
?>