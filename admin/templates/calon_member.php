<?php require "base/navbar.php"; ?>
<?php require "../models/member.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Manampilkan data dari database beserta status dan aksi -->
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pendaftar Masuk</h1>
    <div class="row">
        <div class="col-sm">
            <table class="small table">
                <tr>
                <h4>Calon anggota</h4>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th>Sertifikat</th>
                    <th>Admin</th>
                </tr>
                <?= tampilkan('nama', 'email', '', '', 3); ?>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php require "base/footer.php"; ?>