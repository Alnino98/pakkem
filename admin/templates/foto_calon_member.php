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
    <table class="table">
        <?php while($row = mysqli_fetch_array($sql)){ ?>
            <tr>
                <td>
                    <a href="detail_vcard.php?foto=<?= $row['foto_upload']; ?>">
                        <img src="../../registrasi/foto/<?= $row['foto_upload']; ?>" alt="" class="image p-3">
                    </a>    
                </td>
                <td>
                    <?= $row['nama_pemilik']; ?>
                </td>
            </tr>
        <?php }?>
        
    </table>

</div>
<!-- /.container-fluid -->
<?php require "base/footer.php"; ?>