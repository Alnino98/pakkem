<?php require "../models/member.php"; ?>
<?php require "base/navbar.php"; ?>
<!-- Manampilkan data dari database beserta status anggota -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Anggota</h1>
    <table class="small table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>Nomor Hp</th>
            <th>Tanggal Daftar</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?= tampilkan('nama', 'email', 'no_hp', 'tgl_daftar', 4); ?>
    </table>
</div>
<!-- /.container-fluid -->
<?php require "base/footer.php"; ?>