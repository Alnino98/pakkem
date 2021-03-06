<?php require "base/navbar.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="text-gray-800">Modul </h1> -->
   <!--  <h1 class="h3 mb-4 text-gray-800">Modul </h1> -->

        <table id="dtBasicExample" class="table small " cellspacing="0" width="100%">
        <a style="font-size: 10pt" href="tambah_modul.php" type="button"
            class="float-right btn btn-primary btn-lg">+ Upload Modul</a>
        <thead>
        <tr>
            <th>No</th>
            <th>ID Modul</th>
            <th>Nama Modul</th>
            <th>Keterangan</th>
            <th>Upload File</th>
            <th>Waktu Upload</th>
            <th>Opsi</th>
        </tr>
        </thead>

        <?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi, "select * from modul ORDER BY waktu_upload_modul ASC");
while ($d = mysqli_fetch_array($data))
{
?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['id_modul']; ?></td>
            <td><?php echo $d['nama_modul']; ?></td>
            <td><?php echo $d['keterangan_modul']; ?></td>
            <td><?php echo $d['modul_pdf']; ?></td>
            <td><?php echo $d['waktu_upload_modul']; ?></td>

            <td>
                <a style="font-size: 10pt" href="edit_modul.php?id_modul=<?php echo $d['id_modul']; ?>" type="button"
                    class="btn btn-success">EDIT</a>
                <a style="font-size: 10pt"
                    href="hapus_modul.php?id_modul=<?php echo $d['id_modul']; ?>&file='<?=$d['modul_pdf'] ?>'"
                    type="button" class="btn btn-danger">HAPUS</a>
                </= $d['kegiatan_pdf'] </td>


        </tr>
        <?php
}
?>
    </table>


</div>
<!-- /.container-fluid -->


<?php require "base/footer.php" ?>