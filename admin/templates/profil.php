<?php include "base/navbar.php"; ?>
<?php require "../models/config_admin.php"; ?>
<?php
    $username = $_SESSION['username'];
    $qry1 = "SELECT * FROM admin WHERE username = '$username' AND level = 1";
    $sql1 = mysqli_query($link_admin, $qry1);
    if(!$sql1){
        echo mysqli_error($link_admin);
    }

    if(isset($_POST['submit'])){
        $temp =  $_FILES['foto']['tmp_name'];
        $name =  $_FILES['foto']['name'];
        $name = rand().$name;
        $qry1 = "UPDATE admin SET foto = '$name' WHERE username = '$username' AND level = 1";
        $sql1 = mysqli_query($link_admin, $qry1);
        if(!$sql1){
            echo mysqli_error($link_admin);
        }else{
           
            move_uploaded_file($temp, "profil/".$name);
            echo "<script>window.location.href='profil.php';</script>";
        }
    }
?>
<div class="container mx-auto">
    <table class="table">
        <?php while ($row = mysqli_fetch_array($sql1)) {?>
        <tr>
            <th>
                <?php if($row['foto']==NULL){?>
                    <h5>Foto tidak ditemukan</h5>
                    <form class="float-right" action="" method="post" enctype="multipart/form-data">
                        <div class="container">
                            <p class="text-primary">Upload foto untuk menambahkan</p>
                            <input type="file" name="foto">
                            <button type="submit" name="submit" class="btn btn-success">Perbaharui</button>
                        </div>
                    </form>
                <?php }?>
                <?php if($row['foto']!=NULL) {?>
                   <img src="profil/<?=$row['foto'];?>" alt="foto" class="image">
                   <form class="float-right" action="" method="post" enctype="multipart/form-data">
                       <div class="container">
                           <input type="file" name="foto">
                           <button type="submit" name="submit" class="btn btn-success">Perbaharui</button>
                       </div>
                   </form>
                <?php }?>
            </th>
            <th>
                <div class="container">
                    <td>
                        <h5><?=$row['username'];?></h5>
                    </td>
                </div>
            </th>
        </tr>
        <?php } ?>
    </table>
</div>
<?php include "base/footer.php"; ?>