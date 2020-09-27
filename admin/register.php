<?php
    include 'models/config_admin.php';
    global $link;
    if(isset($_POST['submit'])){
        $username = htmlspecialchars($_POST['username']);
        $nama = htmlspecialchars($_POST['nama']);
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        if(empty($email) or empty($nama) or empty($email) or empty($password) or empty($username)){
            echo "<script>alert('Silakan isi semua kolom');</script>";
        }else{
            $query = "INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`, `nama`, `level`) VALUES (NULL, '$username', '$email', '$password', '$nama', 0)";
            $sql = mysqli_query($link_admin, $query);
            // require 'models/gmail.php';
            // $real_email = $email;
            // $email = md5($email);
            // $msg_for = "
            //     <h4>Lengkapi akun anda</h4>
            //     <p>Untuk dapat mengakses akun admin silakan untuk mengisi password di link berikut <a href='http://pakkem.org/admin/lengkapi_akun.php?code=".$email."'>ini</a>.</p>
            //     <p>Terima kasih</p>
            //     </body>;
            // ";
            // send_email($real_email, $msg_for);
            if($sql == true){
                echo "<script>alert('Berhasil');window.location.href='register.php?pesan=berhasil'</script>";
            }
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Admin</title>
    <!-- Icons font CSS-->
    <link href="css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="css/select2.min.css" rel="stylesheet" media="all">
    <link href="css/daterangepicker.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="css/main2.css" rel="stylesheet" media="all">
</head>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Registrasi admin</h2>
                </div>
                <?php 
                    if(isset($_GET['pesan'])){
                        echo "<h4 class='mt-3 text-success text-center'>Data tersimpan harap menunggu persetujuan dari super admin</h4>";
                    }
                ?>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-row m-b-55">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="username">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Nama</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->