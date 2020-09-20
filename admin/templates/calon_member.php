<?php require "../models/member.php"; ?>
<?php require "base/navbar.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Manampilkan data dari database beserta status dan aksi -->
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Pendaftar Masuk    </h1>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Hp</th>
            <th>Tanggal Daftar</th>
        </tr>
        <?= tampilkan('nama', 'email', 'no_hp', 'tgl_daftar', 3); ?>
    </table>

</div>
<!-- /.container-fluid -->
<?php require "base/footer.php"; ?>