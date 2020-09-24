<?php require "../models/member.php"; ?>
<?php require "base/navbar.php"; ?>

<!-- Manampilkan data dari database beserta status angota -->
<!-- Begin Page Content -->
<div class="container-fluid">
<?php $qry5 = "SELECT * FROM pendaftar WHERE status = 3"; ?>
<?php $show5 = mysqli_query($link,$qry5); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Anggota Ditolak</h1>
    <div class="row">
        <div class="col-sm">
            <table class="table small">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
                <?= tampilkan('nama', 'email', '', '', 2); ?>
            </table>
        </div>
        <div class="col-sm">
            <table class="table small">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
                <?= "Jumlah anggota di tunda: ".mysqli_num_rows($show5); ?>
                <?php 
                    $i=1;
                    while($row = mysqli_fetch_array($show5)){
                        echo "<tr>";
                        echo "<td>".$i++."</td>";
                        echo "<td>".$row['nama']."</td>";
                        echo "<td>".$row['email']."</td>";
                        if($row['status'] == 3){
                            echo "<td>Ditunda</td>";
                            echo "<td><a href='../models/member.php?id=".$row['id_pendaftar']."&email=".$row[$params2]."&v=4'>Tinjau ulang</a></td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php require "base/footer.php"; ?>