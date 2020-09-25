<?php require "base/navbar.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit</h1>
    <?php
					include 'koneksi.php';
					$id_agenda = $_GET['id_agenda'];
					$data = mysqli_query($koneksi,"select * from agenda_kegiatan where id_agenda='$id_agenda'");
					while($d = mysqli_fetch_array($data)){
						?>
    <form enctype="multipart/form-data" method="post" action="update.php">
        <table class="table">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id_agenda" value="<?php echo $d['id_agenda']; ?>">
                    <input type="date" name="hari_tanggal" value="<?php echo $d['hari_tanggal']; ?>">
                </td>
            </tr>
            <tr>
                <td>waktu</td>
                <td><input type="text" name="waktu_agenda" value="<?php echo $d['waktu_agenda']; ?>"></td>
            </tr>
            <tr>
                <td>kegiatan</td>
                <td><input type="text" name="kegiatan" value="<?php echo $d['kegiatan']; ?>"></td>
            </tr>
            <tr>
                <td>keterangan agenda</td>
                <td><input type="text" name="keterangan_agenda" value="<?php echo $d['keterangan_agenda']; ?>"></td>
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