<?php require "../models/member.php"; ?>
<?php require "base/navbar.php"; ?>
<?php global $link;
    $query = "SELECT * FROM foto";
    $sql = mysqli_query($link, $query);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Manampilkan data dari database beserta status dan aksi -->
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Foto Calon Anggota Baru</h1>
    <?php while($row = mysqli_fetch_array($sql)){ ?>
    <table class="table">
        <tr>
            <td>
                <a href="detail_vcard.php?id=1&foto=<?= $row['foto_upload']; ?>">
                    <img src="../../registrasi/foto/<?= $row['foto_upload']; ?>" alt="Foto" class="image p-3">
                </a>
            </td>
            <td><?= $row['nama_pemilik']; ?></td>
        </tr>
    </table>
    <?php }?>
</div>
<!-- /.container-fluid -->
<?php require "base/footer.php"; ?>