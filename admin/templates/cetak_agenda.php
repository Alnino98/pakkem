<!DOCTYPE html>
<html>
<head>
	  <link href="../css/style.css" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
	<title>CETAK PRINT DATA AGENDA</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN AGENDA</h2>
 
	</center>
 
	<?php 
	
$koneksi = mysqli_connect("localhost","root","","pakkem_agenda");
    ?>
 <div class="container-fluid">

    <!-- Page Heading -->
    <table class="small table">
        <tr>
            <th>No</th>
            <th>Hari/Tanggal</th>
            <th>Waktu Agenda</th>
            <th>Kegiatan</th>
            <th>Keterangan</th>
        </tr>
        <?php
         $no = 1;
        $data = mysqli_query($koneksi,"select * from agenda_kegiatan");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['hari_tanggal']; ?></td>
                <td><?php echo $d['waktu_agenda']; ?></td>
                <td><?php echo $d['kegiatan']; ?></td>
                <td><?php echo $d['keterangan_agenda']; ?></td>
             </tr>
              <?php 
        }
        ?>
    </table>
    <td>Jumlah Agenda: <?= mysqli_num_rows($data) ?></td>
	</div>
	<script>
		window.print();
		printTest();
	</script>
 
<script src="../js/print.js"></script>
</body>
</html>

