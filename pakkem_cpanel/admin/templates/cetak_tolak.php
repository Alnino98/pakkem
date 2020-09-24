<?php require "../models/member.php"; ?>	
<!DOCTYPE html>
<html>
<head>
	  <link href="../css/style.css" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
	<title>CETAK PRINT DATA ANGGOTA</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN ANGGOTA</h2>
 
	</center>
 
	<?php 
	include 'config.php';
	?>
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Pendaftar Ditolak</h1>
    <table class="small table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Hp</th>
            <th>Tanggal Daftar</th>
            <th>Status</th>
        </tr>
        <?= tampilkan('nama', 'email', 'no_hp', 'tgl_daftar', 2); ?>
    </table>
	</div>
	<script>
		window.print();
		printTest();
	</script>
 
<script src="../js/print.js"></script>
</body>
</html>

