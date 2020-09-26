<?php require "base/navbar.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Modul</h1>

    <table class="table small">
        <tr>
            <th>No</th>

            <th>Nama Modul</th>
            <th>Keterangan</th>
            <th>Nama File</th>

            <th>Download</th>

        </tr>

        <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from modul ORDER BY waktu_upload_modul ASC");
            while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_modul']; ?></td>
            <td><?php echo $d['keterangan_modul']; ?></td>
            <td><?php echo $d['modul_pdf']; ?></td>
            <?php if ($d['modul_pdf']==NULL): ?>

            <td><a style="font-size: 10pt" class="btn btn-primary">Download</a></td>

            <?php else: ?>

            <td><a style="font-size: 10pt" class="btn btn-primary"
                    href="download_modul_pdf.php?filename=<?=$d['modul_pdf']?>&email=<?= $_SESSION['username']?>">Download</a></td>

            <?php endif ?>




        </tr>
        <?php }?>
    </table>


</div>
<!-- /.container-fluid -->


<?php require "base/footer.php" ?>