<!DOCTYPE html>
<html>
<head>
	  <link href="../css/style.css" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
	<title>CETAK PRINT DATA PENDAFTAR</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PENDAFTAR</h2>
 
	</center>
 
	<?php 
	include 'config.php';
	?>
 
	<table border="1" style="width: 100% ; border: 1; border-color: black" class="table " >
<tr>
 <th>No</th>
 <th>Nama</th>
 <th>Instansi</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>Jenis Kelamin</th>
 <th>NIK</th>
 <th>Email</th>
 <th>NO Handphone</th>
 <th>Pendidikan</th>
 <th>Sertifikat</th>
 <th>Info Tambahan</th>
 <th>Tanggal Daftar</th>
</tr>


		<?php 
		$no = 1;
		global $link;
		$sql = mysqli_query($link,"select * from pendaftar");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['instansi']; ?></td>
			<td><?php echo $data['tempat_lahir']; ?></td>
			<td><?php echo $data['tanggal_lahir']; ?></td>
			<td><?php echo $data['gender']; ?></td>
			<td><?php echo $data['nik']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['no_hp']; ?></td>
			<td><?php echo $data['pendidikan']; ?></td>
			<td><?php echo $data['sertifikat']; ?></td>
			<td><?php echo $data['info_tambahan']; ?></td>
			<td><?php echo $data['tgl_daftar']; ?></td>
		</tr>
		<?php 
		}
		?>

	</table>
			<td class = "table1">Jumlah Pendaftar: <?= mysqli_num_rows($sql) ?></td>
	<script>
		window.print();
		printTest();
	</script>
 
<script src="../js/print.js"></script>
</body>
</html>

