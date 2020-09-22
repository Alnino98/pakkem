<?php require "../models/member.php"; ?>
<?php require "base/navbar.php"; ?>

<!-- Manampilkan data dari database beserta status angota -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Anggota Ditolak</h1>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Hp</th>
            <th>Tanggal Daftar</th>
            <th>Status</th>
        </tr>
        <?= tampilkan('nama', 'email', 'no_hp', 'tgl_daftar', 2); ?>
    </table>

</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php require "base/footer.php"; ?>