<?php include "base/navbar.php"; ?>
<?php require "../models/member.php"; ?>
<?php
    $email = $_SESSION['username'];
    $qry = "SELECT * FROM pendaftar WHERE email = '$email'";
    $sql = mysqli_query($link, $qry);
    if(!$sql){
        mysqli_error($link);
    }
?>
<div class="container mx-auto">
    <table class="table">
        <?php while ($row = mysqli_fetch_array($sql)) {?>
        <tr>
            <th>
                <img src="https://i.pinimg.com/originals/64/9b/9d/649b9daffd009363d36618230f71e357.jpg" class="image">
                <a href="update.php">Update Foto</a>
            </th>
            <th>
                <div>
                    <td>
                        <h5><?=$row['nama'];?></h5>
                    </td>
                </div>
            </th>
        </tr>
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