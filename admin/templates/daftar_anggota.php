<?php require "../models/member.php"; ?>
<?php require "base/navbar.php"; ?>
<!-- Manampilkan data dari database beserta status anggota -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
   <!--  <h1 class="h3 mb-4 text-gray-800">Daftar Anggota</h1> -->
      <table id="dtBasicExample" class="table small">
        <thead >
        <tr>
            <h4 class="mb-4 text-gray-800">Daftar Anggota</h4>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Hp</th>
            <th>Foto</th>
            <th>Sertifikat</th>
        </tr>
        </thead>
        <?= tampilkan('nama', 'email', 'no_hp', '', 4); ?>
    </table>
</div>
<!-- /.container-fluid -->
<?php require "base/footer.php"; ?>