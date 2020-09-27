<?php require "base/navbar.php" ?>
<?php
    $email = $_SESSION['username'];
    $agenda_diikuti = "SELECT * FROM agenda_diikuti WHERE email = '$email'";
    $sql = mysqli_query($link, $agenda_diikuti);

    if (isset($_POST['submit'])) {
        $id_agenda = $_POST['id_agenda'];
        $kegiatan = $_POST['kegiatan'];
        $hari_tanggal = $_POST['hari_tanggal'];
        $agenda = "INSERT INTO agenda_diikuti VALUES(NULL, '$id_agenda', '$email', '$kegiatan', '$hari_tanggal')";
        $simpan = mysqli_query($link, $agenda);
        if($simpan){
            echo "<script>window.location.href='agenda_kegiatan.php'</script>";
        }
    }
?>

    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Favicon-->
    <link rel="icon" href="../../assets/favicon.ico" type="image/ico">
    <link rel="android-chrome" sizes="512x512" href="../../assets/android-chrome-512x512.png">
    <link rel="android-chrome" sizes="192x192" href="../../assets/android-chrome-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/apple-touch-icon.png">
    <link rel="favicon" sizes="48x48" href="../../assets/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/favicon-16x16.png">
    <link rel="manifest" href="../../assets/site.webmanifest">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Daftar Anggota</h1>
                    <table id="dtBasicExample" class="table small " cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Agenda</th>
                            <th>hari/tanggal</th>
                            <th>Waktu Agenda</th>
                            <th>Kegiatan</th>
                            <th>Keterangan agenda</th>
                            <th>Download File</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                    <?php 
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from agenda_kegiatan ORDER BY waktu_upload ASC");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['id_agenda']; ?></td>
                        <td><?php echo $d['hari_tanggal']; ?></td>
                        <td><?php echo $d['waktu_agenda']; ?></td>
                        <td><?php echo $d['kegiatan']; ?></td>
                        <td><?php echo $d['keterangan_agenda']; ?></td>
                        <?php if ($d['kegiatan_pdf']==NULL): ?>
                           <td><a style="font-size: 10pt" class="btn btn-primary">Download</a></td>   
                        <?php else: ?>
                            <td>
                                <a style="font-size: 10pt" class="btn btn-primary" href="download_pdf.php?filename=<?=$d['kegiatan_pdf']?>">Download</a>
                            </td>
                        <?php endif ?>
                        <?php while ($row_diikuti = mysqli_fetch_array($sql)) {?>
                            <?php if ($row_diikuti['id_agenda'] == $d['id_agenda']){ ?>
                               <!--  <td><button style="font-size: 10pt" class="btn btn-secondary">Diikuti</button></td>
                                <td><i class="fas fa-times"></i></td> -->
                            <?php } ?>
                        <?php } ?>
                        <form action="" method="post">
                            <td>
                                <input type="hidden" name="id_agenda" value="<?= $d['id_agenda']; ?>">
                                <input type="hidden" name="kegiatan" value="<?= $d['kegiatan']; ?>">
                                <input type="hidden" name="hari_tanggal" value="<?= $d['hari_tanggal']; ?>">
                                <button style="font-size: 10pt" type="submit" name="submit" class="btn btn-success">Join</button>
                            </td>
                        </form>
                    </tr>
                    <?php }?>
                    </table>
                    <!--  <a href="tambah.php" type="button" class="btn btn-primary btn-lg">+ Upload Agenda</a> -->

                </div>
                <!-- /.container-fluid -->

<?php require "base/footer.php" ?>
