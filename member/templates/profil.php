<?php include "base/navbar.php"; ?>
<?php require "../models/member.php"; ?>
<?php
    $email = $_SESSION['username'];
    $qry1 = "SELECT * FROM pendaftar WHERE email = '$email'";
    $sql1 = mysqli_query($link, $qry1);

    $qry2 = "SELECT * FROM foto WHERE email_pemilik = '$email'";
    $sql2 = mysqli_query($link, $qry2);
    if(!$sql1 AND !$sql2){
        echo mysqli_error($link);
    }
?>
<div class="container mx-auto">
    <table class="table">
        <?php while ($row_foto = mysqli_fetch_array($sql2)) {?>
        <tr>
            <th>
                <img src="../../registrasi/foto/<?=$row_foto['foto_upload'];?>" alt="foto" class="image">
                <div class="container">
                    <input type="file" name="foto">
                    <button class="btn btn-success">Perbaharui</button>
                </div>
            </th>
            <th>
                <div>
                    <td>
                        <h5><?=$row_foto['nama_pemilik'];?></h5>
                    </td>
                </div>
            </th>
        </tr>
        <?php } ?>
        <?php while ($row = mysqli_fetch_array($sql1)) {?>
        <tr>
            <th>Email</th>
            <td><?=$row['email'];?></td>
        </tr>
        <tr>
            <th>Tanggal lahir</th>
            <td><?=$row['tanggal_lahir'];?></td>
        </tr>
        <tr>
            <th>Tempat lahir</th>
            <td><?=$row['tempat_lahir'];?></td>
        </tr>
        <tr>
            <th>Jenis kelamin</th>
            <td><?=$row['gender'];?></td>
        </tr>
        <tr>
            <th>Tanggal Daftar</th>
            <td><?=$row['tgl_daftar'];?></td>
        </tr>
        <?php }?>
    </table>
</div>
<?php include "base/footer.php"; ?>