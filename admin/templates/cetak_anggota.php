<?php require "../models/member.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <title>CETAK PRINT DATA ANGGOTA TERPILIH</title>
</head>

<body>

    <center>

        <h2>DATA LAPORAN ANGGOTA TERPILIH</h2>

    </center>

    <?php 
	include 'config.php';
	?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <table class="small table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Hp</th>
                <th>Tanggal Daftar</th>
                <th>Status</th>
            </tr>
            <?= tampilkan('nama', 'email', 'no_hp', 'tgl_daftar', 1); ?>
        </table>
    </div>
    <script>
    window.print();
    printTest();
    </script>

    <script src="../js/print.js"></script>
</body>

</html>