
<?= $this->session->flashdata('pesan') ?>
 <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Instansi</th>
      <th>Email</th>
      <th>Jenis Kelamin</th>
      <th>Tempat Lahir</th>
      <th>Tgl Lahir</th>
      <th>NIK</th>
      <th>No Hp	</th>
      <th>Bisa WA</th> 
      <th>Pendidikan</th>
      <th>Sertifikat</th>
      <th>Foto</th>
      <th>Aksi</th>
    </tr>
    </thead>
     <tbody>
     <?php $no=1; foreach($data->result_array() as $admin): ?>
     <tr>
     <td><?= $no ?></td>  
         <td><?= $admin['mst_nama'] ?></td> 
         <td><?= $admin['kantor'] ?></td> 
    	 <td><?= $admin['email'] ?></td> 
         <td><?= $admin['mst_jenis_kelamin'] ?></td> 
         <td><?= $admin['mst_tempat_lahir'] ?></td> 
         <td><?= $admin['mst_tanggal_lahir'] ?></td> 
         <td><?= $admin['mst_nik'] ?></td> 
         <td><?= $admin['mst_hp'] ?></td> 
         <td><?= $admin['mst_wa'] ?></td> 
         <td><?= $admin['mst_pendidikan'] ?></td> 
         <td><?= $admin['mst_sertifikat'] ?></td>  
     <td>
		<img src="<?= base_url('../img/agt/'.$admin['namafoto']) ?>" class="img-responsive" style="width: 100px;height: 100xp">
	 </td> 
      
		<td>
			<a href="<?= base_url('admin/pegawai_edit/'.$admin['mst_no_pendaftaran']) ?>" class="btn btn-info">View</a>  
			<a href="<?= base_url('admin/anggota_hapus/'.$admin['mst_no_pendaftaran']) ?>" class="btn btn-danger">Hapus</a>
		</td>  
     
     </tr>
     <?php $no++; endforeach; ?>
     </tbody>
   </table>

 
 