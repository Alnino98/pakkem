<?php require "base/navbar.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit</h1>
    <?php
		include 'koneksi.php';
		$id_modul = $_GET['id_modul'];
		$data = mysqli_query($koneksi,"select * from modul where id_modul='$id_modul'");
		while($d = mysqli_fetch_array($data)){
	?>
    <form enctype="multipart/form-data" method="post" action="update_modul.php">
        <table class="table">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id_modul" value="<?php echo $d['id_modul']; ?>">
                    <input type="text" name="nama_modul" value="<?php echo $d['nama_modul']; ?>">
                </td>
            </tr>
            <tr>
                <td>waktu</td>
                <td><input type="text" name="keterangan_modul" value="<?php echo $d['keterangan_modul']; ?>"></td>
            </tr>
            <tr>
                <td>Upload file</td>
                <td>
                    <input type="file" name="fupload">><br>
                </td>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <?php 
					}
					?>


</div>
<!-- /.container-fluid -->

<?php require "base/footer.php" ?>