<?php require "../models/member.php"; ?>
<?php require "base/navbar.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Manampilkan data dari database beserta status dan aksi -->
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Calon Anggota Baru</h1>
    <table class="table small">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal daftar</th>
            <th>Status foto</th>
            <th>Status sertifikat</th>
            <th>Status member</th>
        </tr>
        <?= tampilkan('nama', 'email', 'no_hp', 'tgl_daftar', 0); ?>
    </table>

</div>
<!-- /.container-fluid -->
<?php require "base/footer.php"; ?>