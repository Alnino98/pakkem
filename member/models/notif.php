<?php 
	$kategori = $_GET['kategori'];
	require 'config.php';
	if($kategori == 1){
		$qry_agenda = "SELECT * FROM agenda_kegiatan ORDER BY waktu_upload ASC";
		$sql_agenda = mysqli_query($link_agenda, $qry_agenda);

		while($row_agenda = mysqli_fetch_array($sql_agenda)){
			echo $wk = "<div class='small text-gray-500'>".$row_agenda['waktu_upload']."</div>
						<span class='font-weight-bold'>".$row_agenda['kegiatan']."</span><br>
						<span class='small text-gray-1000'>".$row_agenda['keterangan_agenda']."</span>";
		}
	}else if ($kategori == 2) {
		$qry_agenda = "SELECT notifikasi FROM pembaca_agenda ";
		$sql_agenda = mysqli_query($link_agenda, $qry_agenda);
		while($row = mysqli_fetch_array($sql_agenda)){
			$jumlah = $row['notifikasi'];
		}
    	echo $jumlah;
	}else if ($kategori == 3) {
		$email = $_GET['email'];
		$update = "UPDATE `pembaca_agenda` SET notifikasi = 0 WHERE pembaca = '$email'";
		$ok = mysqli_query($link_agenda, $update);
		if(!$ok){
			echo mysqli_error();
		}else{
			header("location:agenda_kegiatan_upload.php");
		}
	}
?>
