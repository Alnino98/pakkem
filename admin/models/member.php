<?php
if(!$_GET){

}else{
    require 'config.php';
    require 'gmail.php';
    $email = $_GET['email'];
    $id = $_GET['id'];
    echo $v = $_GET['v'];

    if($v == 1){
        $msg_for = "
            <body>
            <div style='width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;'>
            <h1>Aktivasi akun telah disetujui</h1>
            <p>Selamat datang di PAKKEM akun anda disetujui, anda dapat menggunakan telah dapat menggunakannya.</p>
            <p>Terima Kasih.</p>
            </div>
            </body>
            </html>
        ";
    
        $qry = "UPDATE `pendaftar` SET `status` = '1' WHERE `id_pendaftar` = $id";
        $show = mysqli_query($link,$qry);
        if($show){
            send_email($email, $msg_for);
            header("location: calon_member.php");
        }
    }else if($v == 0){
        $msg_for = "
            <body>
            <div style='width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;'>
            <h1>Aktivasi akun ditolak</h1>
            <p>Mohon maaf permohonan anda untuk mendaftar telah ditolak oleh admin.</p>
            <p>Terima Kasih.</p>
            </div>
            </body>
            </html>
        ";
    
        $qry = "UPDATE `pendaftar` SET `status` = '2' WHERE `id_pendaftar` = $id";
        $show = mysqli_query($link,$qry);
        if($show){
            send_email($email, $msg_for);
            header("location: calon_member.php");
        }
    }

}

function tampilkan($params1,$params2, $params3, $params4, $code){
    include 'config.php';
    $qry = "SELECT * FROM pendaftar";
    $show = mysqli_query($link,$qry);
    // echo "<form action='".persetujuan()."' method='post'>";
    while($row = mysqli_fetch_array($show)){
        if($code == 0 && $row['status'] == 0){
            echo "<tr>";
            echo "<td>".$row[$params1]."</td>";
            echo "<td>".$row[$params2]."</td>";
            echo "<td>".$row[$params3]."</td>";
            echo "<td>".$row[$params4]."</td>";
            if($row['status'] == 0){
                echo "<td>Belum diaktivasi</td>";
                echo "<td><a href='calon_member.php?id=".$row['id_pendaftar']."&email=".$row[$params2]."&v=1'>Aktivasi</a></td>";
                echo "<td><a href='calon_member.php?id=".$row['id_pendaftar']."&email=".$row[$params2]."&v=0'>Tolak</a></td>";
            }
            echo "</tr>";
        }else if($code == 1 && $row['status'] == 1){
            echo "<tr>";
            echo "<td>".$row[$params1]."</td>";
            echo "<td>".$row[$params2]."</td>";
            echo "<td>".$row[$params3]."</td>";
            echo "<td>".$row[$params4]."</td>";
            if($row['status'] == 1){
                echo "<td>Terpilih</td>";
            }
            echo "</tr>";
        }else if($code == 2 && $row['status'] == 2){
            echo "<tr>";
            echo "<td>".$row[$params1]."</td>";
            echo "<td>".$row[$params2]."</td>";
            echo "<td>".$row[$params3]."</td>";
            echo "<td>".$row[$params4]."</td>";
            if($row['status'] == 2){
                echo "<td>Ditolak</td>";
            }
            echo "</tr>";
        }

    }
    // echo "</form>";
}

?>