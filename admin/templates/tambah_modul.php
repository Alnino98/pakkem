<?php require "base/navbar.php" ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Anggota</h1>
    <form enctype="multipart/form-data" method="post" action="tambah_aksi_modul.php">
        <table class="table">

            <tr>
                <td>Nama Modul</td>
                <td><input type="text" name="nama_modul"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan_modul"></td>
            </tr>
            <tr>
                <td>Upload file</td>
                <td>
                    <input type="file" name="fupload1"><br>
                </td>

            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="SIMPAN"></td>
            </tr>
        </table>
    </form>


</div>
<!-- /.container-fluid -->
<?php require "base/footer.php" ?>