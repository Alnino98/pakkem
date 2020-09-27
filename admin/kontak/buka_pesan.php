<?php  
$id_umum = $_GET['id_umum'];
 $qry = "SELECT * FROM pendaftar";
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Buka Pesan dari : <?php echo $buka_pesan['nama']; ?></title>
</head>
<body>

<p><a href="pesan.php">&laquo; Kembali ke Inbox</a></p>

<table>
	<tr>
		<td>Subyek Pesan</td>
		<td>:</td>
		<td><strong><?php echo $buka_pesan['nama']; ?></strong></td>
	</tr>
	<tr>
		<td>Pengirim</td>
		<td>:</td>
		<td><strong><?php echo $buka_pesan['pesan']; ?></strong></td>
	</tr>
</table>
?>