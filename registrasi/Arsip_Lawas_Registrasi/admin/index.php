<?php 
session_start();
	  // echo 'tes'.$_SESSION['id'];exit();
if(empty($_SESSION['id'])){ ?>
  <script>window.location.href='login.php'</script>
<?php }else{
// include 'config/config.php';

?>
<?php include 'head.php'; 
$result = tampilpendaftar();
$_SESSION['nama'];
?>

<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<table class="table table-striped table-bordered">

  <thead>
    <tr>
      <th>No</th>
      <th>Nama </th>
      <th>Instansi </th>
      <th>Jenis Kelamin </th>
      <th>Tempat Lahir</th>
      <th>Tgl Lahir</th> 
      <th>NIK</th>
      <th>No Hp</th>
      <th>Bisa WA</th>
      <th>Email</th>
      <th>Pendidikan</th>
      <th>Sertifikat</th>
      <th>Foto</th> 
      <th>Action</th> 
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['mst_nama'] ?></td>
        <td><?= $row['kantor'] ?></td>
        <td><?= $row['mst_jenis_kelamin'] ?></td>
        <td><?= $row['mst_tempat_lahir'] ?></td>
        <td><?= $row['mst_tanggal_lahir'] ?></td>
        <td><?= $row['mst_nik'] ?></td>
        <td><?= $row['mst_hp'] ?></td>
        <td><?= $row['mst_wa'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['mst_pendidikan'] ?></td>
        <td><?= $row['mst_sertifikat'] ?></td>
		<td><img src="../img/agt/<?= $row['namafoto'] ?>" height="40" weight="50"></td> 
		<td><a href="hapus.php?mst_no_pendaftaran=<?php echo $row['mst_no_pendaftaran']; ?>" class="btn btn-danger" >Hapus</a></td>
        </tr>
        <?php $no++; }?>

      </tbody> 
</table>


<script src="dt/js/jquery.dataTables.min.js"></script>
<script src="dt/js/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready( function () {
          $('#pendaftar').DataTable({
            responsive:true
          });
      } );
        </script>
</head>

<?php } include 'foot.php'; ?>
  