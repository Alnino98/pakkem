<?php require "base/navbar.php" ?>

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
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>hari/tanggal</th>
                            <th>Waktu Agenda</th>
                            <th>Kegiatan</th>
                            <th>Keterangan agenda</th>
                        </tr>

            <?php 
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"select * from agenda_kegiatan");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['hari_tanggal']; ?></td>
                        <td><?php echo $d['waktu_agenda']; ?></td>
                        <td><?php echo $d['kegiatan']; ?></td>
                        <td><?php echo $d['keterangan_agenda']; ?></td>
                
<!--                         <td>
                            <a href="edit.php?id_agenda=<?php echo $d['id_agenda']; ?>">EDIT</a>
                            <a href="hapus.php?id_agenda=<?php echo $d['id_agenda']; ?>">HAPUS</a>
                        </td> -->
                    </tr>
                    <?php 
                }
                ?>
                    </table>
                    <!--  <a href="tambah.php" type="button" class="btn btn-primary btn-lg">+ Upload Agenda</a> -->

                </div>
                <!-- /.container-fluid -->

<?php require "base/footer.php" ?>
