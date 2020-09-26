<!DOCTYPE html>
<html>
<head>
	  <link href="../css/style.css" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
	<title>CETAK PRINT DATA Modul</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN MODUL</h2>
 
	</center>
 
 <div class="container-fluid">

    <!-- Page Heading -->
    <table class="table small">
            <tr>
                <th>No</th>
                <th>ID Modul</th>
                <th>Nama Modul</th>
                <th>Keterangan</th>
                <th>Upload File</th>
                <th>Waktu Upload</th>
            </tr>
        <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from modul ORDER BY waktu_upload_modul ASC");
            while($d = mysqli_fetch_array($data)){
         ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_modul']; ?></td>
                <td><?php echo $d['nama_modul']; ?></td>
                <td><?php echo $d['keterangan_modul']; ?></td>
                <td><?php echo $d['modul_pdf']; ?></td>
                <td><?php echo $d['waktu_upload_modul']; ?></td>
            </tr>
        <?php 
            }
        ?>                    
    </table>

    <td>Jumlah Modul: <?= mysqli_num_rows($data) ?></td>
	</div>
	<script>
		window.print();
		printTest();
	</script>
 
<script src="../js/print.js"></script>
</body>
</html>

