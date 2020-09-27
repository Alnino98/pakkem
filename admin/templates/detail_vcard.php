<?php include 'base/navbar.php' ?>
<?php
    require "../models/config.php";
    $code = $_GET['id'];
?>
<!-- Manampilkan detail pendaftar -->

<div class="row">
    <div class="ml-7 container-fluid col-lg-7 py-2">
        <!-- Area Chart -->
        <div class="card shadow mb-3 py-5">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">
                    Detail Pendaftar
                </h6>
            </div>
            <div class="card-body m-1">
                <div class="chart-area">
                    <table class=" p-3">
                        <tr>
                            <?php if($code == 1){ ?>
                                <?php $foto = $_GET['foto'];?>
                                <?php $query_foto = "SELECT * FROM foto WHERE foto_upload = '$foto'";?>
                                <?php $sql_foto = mysqli_query($link, $query_foto); ?>
                                <?php while($row = mysqli_fetch_array($sql_foto)){ ?>
                                    <?php $nama = $row['nama_pemilik']; ?>
                                    <?php $email = $row['email_pemilik']; ?>

                                    <th>
                                        <img src="../../registrasi/foto/<?= $row['foto_upload']; ?>" alt="" class="cardname">
                                    </th>
                                    <th>
                                        <?php if($row['status'] == 0){ ?>
                                        <a href="verifikasi.php?foto=<?= $row['foto_upload']; ?>&id=ok" class="btn btn-success">Terpilih</a>
                                        <a href="verifikasi.php?foto=<?= $row['foto_upload']; ?>&id=ditolak" class="btn btn-danger">Tolak</a>
                                        <?php }?>
                                        <?php if($row['status'] == 1){ ?>
                                        <a href="verifikasi.php?foto=<?= $row['foto_upload']; ?>&id=batal" class="btn btn-danger">Batalkan</a>
                                        <?php }?>
                                        <?php if($row['status'] == 2){ ?>
                                        <span class="btn btn-primary">Tertolak</span>
                                        <a href="verifikasi.php?foto=<?= $row['foto_upload']; ?>&id=batal" class="btn btn-danger">Batalkan</a>
                                        <?php }?>
                                    </th>
                                    <tr>
                                        <th>Nama&#9;:</th>
                                        <td>
                                            <p class="mr-10"><?= $nama; ?> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email&#9;:</th>
                                        <td>
                                            <p class="mr-10"><?= $email; ?> </p>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                <?php $query_detail = "SELECT * FROM pendaftar WHERE email = '$email'";?>
                                <?php $sql_detail = mysqli_query($link, $query_detail);?>
                                <?php while($row = mysqli_fetch_array($sql_detail)){ ?>
                                    <tr>
                                        <th>Jenis Kelamin&#9;:</th>
                                        <td>
                                            <p class="mr-10"><?= $row['gender']; ?> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal daftar&#9;:</th>
                                        <td>
                                            <p class="mr-10"><?= $row['tgl_daftar']; ?> </p>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                            
                            <?php if($code == 2){ ?>
                                <?php $sertifikat = $_GET['sertifikat'];?>
                                <?php $query_sertifikat = "SELECT * FROM sertifikat WHERE sertifikat_upload = '$sertifikat'";?>
                                <?php $sql_sertifikat = mysqli_query($link, $query_sertifikat); ?>
                                <?php while($row = mysqli_fetch_array($sql_sertifikat)){ ?>
                                    <?php $nama = $row['nama_pemilik']; ?>
                                    <?php $email = $row['email_pemilik']; ?>

                                    <th>
                                        <img src="../../registrasi/sertifikat/<?= $row['sertifikat_upload']; ?>" alt="" class="cardname">
                                    </th>
                                    <th>
                                        <?php if($row['status'] == 0){ ?>
                                        <a href="verifikasi.php?sertifikat=<?= $row['sertifikat_upload']; ?>&id=ok" class="btn btn-success">Terpilih</a>
                                        <a href="verifikasi.php?sertifikat=ditolak<?= $row['sertifikat_upload']; ?>&id=tolak" class="btn btn-danger">Tolak</a>
                                        <?php }?>
                                        <?php if($row['status'] == 1){ ?>
                                        <a href="verifikasi.php?sertifikat=<?= $row['sertifikat_upload']; ?>&id=batal" class="btn btn-danger">Batalkan</a>
                                        <?php }?>
                                        <?php if($row['status'] == 2){ ?>
                                        <span class="btn btn-danger">Tertolak</span>
                                        <a href="verifikasi.php?sertifikat=<?= $row['sertifikat_upload']; ?>&id=batal" class="btn btn-danger">Batalkan</a>
                                        <?php }?>
                                    </th>
                                    <tr>
                                        <th>Nama&#9;:</th>
                                        <td>
                                            <p class="mr-10"><?= $nama; ?> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email&#9;:</th>
                                        <td>
                                            <p class="mr-10"><?= $email; ?> </p>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                <?php $query_detail = "SELECT * FROM pendaftar WHERE email = '$email'";?>
                                <?php $sql_detail = mysqli_query($link, $query_detail);?>
                                <?php while($row = mysqli_fetch_array($sql_detail)){ ?>
                                    <tr>
                                        <th>Jenis Kelamin&#9;:</th>
                                        <td>
                                            <p class="mr-10"><?= $row['gender']; ?> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal daftar&#9;:</th>
                                        <td>
                                            <p class="mr-10"><?= $row['tgl_daftar']; ?> </p>
                                        </td>
                                    </tr>
                                <?php } ?>                             
                            <?php } ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- Bar Chart delete-->
    </div>
</div>
<?php include 'base/footer.php' ?>