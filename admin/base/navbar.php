<?php 
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: index.php");
    }
    session_start();
    if($_SESSION['status'] != "login" or $_SESSION['level'] !=1){
        session_destroy();
        header('location: index.php');
    }
    require 'models/config_admin.php';
    $admin = $_SESSION['username'];

    $query = "SELECT * FROM admin WHERE username = '$admin' and level = 1";
    $sql = mysqli_query($link_admin, $query);
    $cek = mysqli_num_rows($sql);
    while ($row = mysqli_fetch_array($sql)) {
        $foto = $row['foto'];
    }
    $foto;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administrator Dashboard - pakkem.org</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Favicon-->
    <link rel="icon" href="assets/favicon.ico" type="image/ico">
    <link rel="android-chrome" sizes="512x512" href="assets/android-chrome-512x512.png">
    <link rel="android-chrome" sizes="192x192" href="assets/android-chrome-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="favicon" sizes="48x48" href="assets/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="assets/site.webmanifest">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-0">
                    <i class=""><img src="https://i.ibb.co/vhKhRrc/icon-pakkem.png" alt="icon-pakkem" width="55"
                            height="55"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Fitur Kelola</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Baru Daftar
            </div>

            <!-- Nav Item - Pages Collapse Menu / AJUAN BARU / ANGGOTA BARU -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-database"></i>
                    <span>Ajuan Baru</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Calon Anggota Baru:</h6>
                        <a class="collapse-item" href="templates/calon_member.php"><i
                                class="fas fa-user-plus"></i>&nbsp;&nbsp;Pendaftar Masuk</a>
                        <a class="collapse-item" href="templates/foto_calon_member.php"><i class="far fa-image"></i>&nbsp;&nbsp;Foto Masuk</a>
                        <a class="collapse-item" href="templates/sertifikat_calon_member.php"><i class="far fa-file-alt"></i>&nbsp;&nbsp;Sertifikat
                            Masuk</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu / PERSETUJUAN / KIRIM EMAIL -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="far fa-address-card"></i>
                    <span>Persetujuan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Seleksi Anggota Disetujui:</h6>
                        <a class="collapse-item" href="templates/approve.php"><i
                                class="far fa-thumbs-up"></i>&nbsp;&nbsp;Email Approval</a>
                        <a class="collapse-item" href="templates/anggota_ditolak.php"><i
                                class="far fa-thumbs-down"></i>&nbsp;&nbsp;Anggota Ditolak</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu / ANGGOTA /  -->

            <!-- Heading -->
            <div class="sidebar-heading">
                Anggota
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="far fa-folder-open"></i>
                    <span>Tabel Anggota</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Anggota Terdaftar:</h6>
                        <a class="collapse-item" href="templates/daftar_anggota.php"><i
                                class="far fa-clipboard"></i>&nbsp;&nbsp;Lists Anggota</a>
                        <a class="collapse-item" href="templates/grafik_anggota.php"><i class="fas fa-chart-line"></i>&nbsp;&nbsp;Grafik
                            Anggota</a>
                        <a class="collapse-item" href="templates/anggota_aktif.php"><i class="fas fa-user-check"></i>&nbsp;&nbsp;Anggota
                            Aktif</a>
                        <a class="collapse-item" href="templates/generate_report.php"><i class="far fa-file-pdf"></i>&nbsp;&nbsp;Generate
                            Report</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu / KOMUNIKASI/  -->

            <!-- Heading -->
            <div class="sidebar-heading">
                Koordinasi Anggota
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-bullhorn"></i>
                    <span>Komunikasi</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Inbox:</h6>
                        <a class="collapse-item" href="404.html"><i class="fas fa-share"></i>&nbsp;&nbsp;Balas Email</a>
                        <h6 class="collapse-header">Sebar Email:</h6>
                        <a class="collapse-item" href="404.html"><i class="far fa-paper-plane"></i>&nbsp;&nbsp;Kirim
                            Email</a>
                        <h6 class="collapse-header">Whatsapp:</h6>
                        <a class="collapse-item" target="_blank"
                            href="https://api.whatsapp.com/send?phone=6289619000501&text=Hallo!!, Saya mengetahui no ini dari website pakkem.org 😊. "><i
                                class="fab fa-whatsapp"></i>&nbsp;&nbsp;Chat WA</a>
                        <h6 class="collapse-header">Diskusi:</h6>
                        <a class="collapse-item" href="../forum/" target="_blank"><i class="far fa-comments"></i>&nbsp;&nbsp;Forum</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu / KOMUNIKASI/  -->
            <!-- Heading -->
            <div class="sidebar-heading">
                Benefits Anggota
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-archive"></i>
                    <span>Modul</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Informations:</h6>
                        <a class="collapse-item" href="templates/modul_upload.php"><i class="fas fa-upload"></i>&nbsp;&nbsp;Admin
                            Upload</a>
                        <h6 class="collapse-header">Kegiatan:</h6>
                        <a class="collapse-item" href="templates/agenda_kegiatan_upload.php"><i class="fas fa-tasks"></i>&nbsp;&nbsp;Agenda Kegiatan</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="templates/email.php">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $admin; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="templates/profil/<?= $foto;?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="templates/profil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <form action="" method="post">
                                    <button type="submit" name="logout" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout
                                    </button>
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->