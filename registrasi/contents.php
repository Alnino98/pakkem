<?php
  require "gmail.php";
  echo $email = md5($_GET['email']);
  $link = "<body>
    <h4>Lengkapi akun anda</h4>
    <p>Untuk dapat mengakses akun member silakan untuk mengisi password di link berikut <a href='pakem.org/member/lengkapi_akun.php?code='.$email.''>ini</a>.</p>
    <p>Terima kasih</p>
  </body>";
  send_email($email, $link);
  header("location: lengkapi_akun.php?pesan=berhasil");
?>