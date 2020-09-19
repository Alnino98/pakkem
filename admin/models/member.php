<?php
    $link = mysqli_connect('localhost', 'root', '', 'pakkem_daftar');
    $qry = "SELECT * FROM pendaftar";
    $qry0 = "SELECT * FROM pendaftar WHERE status = 0";
    $qry1 = "SELECT * FROM pendaftar WHERE status = 1";
    $qry2 = "SELECT * FROM pendaftar WHERE status = 2";
    $tahun = date("Y");
    $show = mysqli_query($link,$qry);
    $show0 = mysqli_query($link,$qry0);
    $show1 = mysqli_query($link,$qry1);
    $show2 = mysqli_query($link,$qry2);

    if(!$_GET){

    }else{
        // Mengirim email akun teraktivasi atau ditolak
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
        // Mengubah nilai status aktivasi di tabel database
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
    // Menampilkan data dari database
    function tampilkan($params1,$params2, $params3, $params4, $code){
        global $link, $show, $show0, $show1, $show2;
        // Menampilkan jumlah pendaftar baru, anggota aktif, pendaftar ditolak
        if($code == 0){
            $total = mysqli_num_rows($show0);
            echo "Jumlah anggota : ".$total;
        }elseif ($code == 1) {
            $total = mysqli_num_rows($show1);
            echo "Jumlah anggota : ".$total;
        }elseif ($code == 2) {
            $total = mysqli_num_rows($show2);
            echo "Jumlah anggota : ".$total;
        }


    // echo "<form action='".persetujuan()."' method='post'>";
        $i=1;
        while($row = mysqli_fetch_array($show)){
            if($code == 0 && $row['status'] == 0){
                echo "<tr>";
                echo "<td>".$i++."</td>";
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
                echo $i++;
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

    // Menampilkan jumlah
    function jumlah($kategori){
        global $show0, $show1, $show2;
        switch ($kategori) {
            case '0':
                $total = mysqli_num_rows($show0);
                return $total;
                break;
            case '1':
                $total = mysqli_num_rows($show1);
                return $total;
                break;
            case '2':
                $total = mysqli_num_rows($show2);
                return $total;
                break;
            
            default:
                echo "Error";
                break;
        }
    }
?>