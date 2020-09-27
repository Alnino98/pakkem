<?php require "../models/member.php"; ?>
<?php require "base/navbar.php"; ?>
<?php global $link;
    $query = "SELECT * FROM sertifikat";
    $sql = mysqli_query($link, $query);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Manampilkan data dari database beserta status dan aksi -->
    <!-- Page Heading -->
<!--     <h1 class="h3 mb-4 text-gray-800">Sertifikat Calon Anggota Baru</h1> -->
    <table id="dtBasicExample" class="table small " cellspacing="0" width="100%">
        <thead>
            <tr>
                <h4 class="mb-4 text-gray-800">Pendaftar Masuk</h4>
                <th>Foto</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <?php while($row = mysqli_fetch_array($sql)){ ?>
        <?php if($row['status'] == 0){ ?>
        <tr>
            <td>
                <a href="detail_vcard.php?id=2&sertifikat=<?= $row['sertifikat_upload']; ?>">
                    <img src="../../registrasi/sertifikat/<?= $row['sertifikat_upload']; ?>" alt="Foto" class="image p-3">
                </a>
            </td>
            <td>
                <p><?= $row['nama_pemilik']; ?></p>
            </td>
            <td>
                <p><?= $row['email_pemilik']; ?></p>
            </td>
        </tr>
        <?php }?>
        <?php }?>
    </table>

</div>
<!-- /.container-fluid -->
<?php require "base/footer.php"; ?>