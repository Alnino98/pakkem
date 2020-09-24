<?php
  require "gmail.php";
  $real_email = $_GET['email'];
  $email = md5($_GET['email']);
  $msg = "<body>
  <h4>Lengkapi akun anda</h4>
  <p>Untuk dapat mengakses akun member silakan untuk mengisi password di link berikut <a href='http://pakkem.org/registrasi/lengkapi_akun.php?code=".$email."'>ini</a>.</p>
  <p>Terima kasih</p>
  </body>";
  
  $send = send_email($real_email, $msg);
  if($send = true){
      header("location: index.php?pesan=berhasil");
  }
?>