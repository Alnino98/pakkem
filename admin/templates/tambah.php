<?php require "base/navbar.php" ?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Daftar Anggota</h1>
                    <form enctype="multipart/form-data" method="post" action="tambah_aksi.php">
                        <table class="table">

                            <tr>            
                                <td>Hari tanggal</td>
                                <td><input type="date" name="hari_tanggal"></td>
                            </tr>
                            <tr>
                                <td>waktu agenda</td>
                                <td><input type="text" name="waktu_agenda"></td>
                            </tr>
                            <tr>
                                <td>Kegiatan</td>
                                <td><input type="text" name="kegiatan"></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><input type="text" name="keterangan_agenda"></td>
                            </tr>

                            <tr>
                                <td>Upload file</td>
                                <td>
                                <input type="file" name="fupload"><br>
                                </td>

                            </tr>

                            <tr>
                                <td></td>
                                <td><button type="submit" class="btn btn-primary">Simpan</button></td>
                            </tr>       
                        </table>
                    </form>


                </div>
                <!-- /.container-fluid -->
<?php require "base/footer.php" ?>