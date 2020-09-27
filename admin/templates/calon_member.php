<?php require "base/navbar.php"; ?>
<?php require "../models/member.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Manampilkan data dari database beserta status dan aksi -->
    <!-- Page Heading -->
    <div class="row">
        <div class="col-sm">
            <table id="dtBasicExample" class="table small " cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <h4 class="mb-4 text-gray-800">Pendaftar Masuk</h4>

  
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status Foto</th>
                        <th>Status Sertifikat</th>
                        <th>Opsi 1</th>
                        <th>Opsi 2</th>
                        <th>Opsi 3</th>


                    </tr>
                </thead>
                <?= tampilkan('nama', 'email', '', '', 3); ?>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php require "base/footer.php"; ?>