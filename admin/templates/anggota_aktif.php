<?php require "../models/member.php"; ?>
<?php require "base/navbar.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Daftar Anggota Aktif</h1>
    <?php
        $month = date('m');
        $year = date('Y');
        $aktif = "SELECT * FROM `log` WHERE MONTH(timestamp) = '$month' AND YEAR(timestamp) = '$year'";
        $anggota_aktif = mysqli_query($link, $aktif);
        $total_aktif = mysqli_num_rows($anggota_aktif);
     ?>
      <table id="dtBasicExample" class="table small">
        <thead>
     	<tr>
     		<th>Nomor</th>
     		<th>Email</th>
     		<th>Nama</th>
     		<th>Nomor Hp</th>
     		<th>Terakhir Login</th>
     	</tr>
 		<?php $i=1; ?>
	     <?php while ($row = mysqli_fetch_array($anggota_aktif)) {?>
	     	<?php $email = $row['email']; ?>
	     	
	     	<?php $anggota = "SELECT * FROM anggota WHERE email = '$email'"; ?>
	     	<?php $detail = mysqli_query($link, $anggota); ?>
	     	
	     	<?php if (!$detail) {
				 echo mysqli_error($link);
				} ?>

		<tr>
	     	<td><?= $i++; ?></td>
	     	<td><?= $row['email']; ?></td>

	     	<?php while ($row_detail = mysqli_fetch_array($detail)) {?>
		     	<td><?= $row_detail['nama']; ?></td>
		     	<td><?= $row_detail['no_hp']; ?></td>
	     	<?php } ?>

	     	<td><?= $row['timestamp']; ?></td>

 		</tr>
	     <?php } ?>
     </table>

    
    

</div>
<!-- /.container-fluid -->
<?php require "base/footer.php"; ?>