<table class="table table-reposive">
	<form action="" method="POST">
		<tr>
			<th>Nama</th>
			<td><?= $mst_nama ?></td>  			 
		</tr>
		<tr>
			<th>Instansi</th>
			<td><?= $kantor?></td>
		</tr> 
		<tr>
			<th>Email</th>
			<td><?= $email ?></td>
		</tr> 
		<tr>
			<th>Foto</th>
			<td><img src="<?= base_url('../img/agt/'.$namafoto) ?>" class="img-responsive" style="width: 300px;height: 300xp"></td>
		</tr> 
		
			<td></td>
			<th>
			<button type="button" onclick="javascript:history.back()" class="btn btn-primary"><span ></span> Back</button></th>
		</tr>
		</form>	 
</table>
 
 