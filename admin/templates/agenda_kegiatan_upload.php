<?php require "base/navbar.php" ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Agenda Kegiatan <a style="font-size: 10pt" href="tambah.php" type="button" class="float-right btn btn-primary btn-lg">+ Upload Agenda</a></h1>

                    <table class="table small">
                        <tr>
                            <th>No</th>
                            <th>ID Agenda</th>
                            <th>hari/tanggal</th>
                            <th>Waktu Agenda</th>
                            <th>Kegiatan</th>
                            <th>Keterangan agenda</th>
                            <th>Waktu Upload</th>
                            <th>Upload File</th>
                            <th>Opsi</th>
                        </tr>

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
                                    <td><?php echo $d['waktu_upload']; ?></td>
                                    <td><?php echo $d['kegiatan_pdf']; ?></td>
                                    
                                    <td>
                                        <a style="font-size: 10pt" href="edit.php?id_agenda=<?php echo $d['id_agenda']; ?>" type="button" class="btn btn-success">EDIT</a>
                                        <a style="font-size: 10pt" href="hapus.php?id_agenda=<?php echo $d['id_agenda']; ?>&file='<?= $d['kegiatan_pdf'] ?>'" type="button" class="btn btn-danger">HAPUS</a>
                                    </= $d['kegiatan_pdf']
                                    </td>
                                    

                                </tr>
                                <?php 
                            }
                            ?>
                    </table>
                     

                </div>
                <!-- /.container-fluid -->

         
<?php require "base/footer.php" ?>


