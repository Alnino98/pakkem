<?php require "../models/member.php"; ?>	
<!DOCTYPE html>
<html>
<head>
	  <link href="../css/style.css" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
	<title>CETAK PRINT DATA PENDAFTAR TIDAK KOMPLIT</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PENDAFTAR TIDAK KOMPLIT</h2>
 
	</center>
 <div class="container-fluid">
    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Daftar pendaftar tidak komplit</h1> -->
<table class="table small">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>NO Tlp</th>
                    <th>Sertifikat</th>
                    <th>Status</th>
                </tr>
                <?= "Jumlah anggota di tunda: ".mysqli_num_rows($show5); ?>
                <?php 
                    $i=1;
                    while($row = mysqli_fetch_array($show5)){
                        echo "<tr>";
                        echo "<td>".$i++."</td>";
                        echo "<td>".$row['nama']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['no_hp']."</td>";
                        echo "<td>".$row['sertifikat']."</td>";
                        if($row['status'] == 3){
                            echo "<td>Ditunda</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
	</div>
	<script>
		window.print();
		printTest();
	</script>
 
<script src="../js/print.js"></script>
</body>
</html>

