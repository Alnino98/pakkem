<?php
    $link = mysqli_connect("localhost", "pakkem", "Covid*20", "pakkem_daftar");
    $qry = "SELECT * FROM pendaftar";
    $qry0 = "SELECT * FROM pendaftar WHERE status = 0 ORDER BY id_pendaftar ASC";
    $qry1 = "SELECT * FROM pendaftar WHERE status = 1";
    $qry2 = "SELECT * FROM pendaftar WHERE status = 2";
    $qry3 = "SELECT * FROM anggota";
    $tahun = date("Y");
    $show = mysqli_query($link,$qry);
    $show0 = mysqli_query($link,$qry0);
    $show1 = mysqli_query($link,$qry1);
    $show2 = mysqli_query($link,$qry2);
    $showAnggota = mysqli_query($link,$qry3);

    if(!$_GET){

    }else{
        // Mengirim email akun teraktivasi atau ditolak
        global $link;
        require 'gmail.php';
        $email = $_GET['email'];
        $id = $_GET['id'];
        $v = $_GET['v'];

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
            // $qry = "UPDATE `pendaftar` SET `status` = '1' WHERE `id_pendaftar` = $id";
            $qry = "SELECT * FROM pendaftar WHERE `id_pendaftar` = $id";
            $show = mysqli_query($link,$qry);
            while($row = mysqli_fetch_object($show)){
                $nama = $row->nama;
                $instansi = $row->instansi;
                $tempat_lahir = $row->tempat_lahir;
                $tanggal_lahir = $row->tanggal_lahir;
                $gender = $row->gender;
                $nik = $row->nik;
                $email = $row->email;
                $no_hp = $row->no_hp;
                $bisa_wa = $row->bisa_wa;
                $pendidikan = $row->pendidikan;
                $sertifikat = $row->sertifikat;
                $info_tambahan = $row->info_tambahan;   
            }
            $sql = "INSERT INTO `anggota`(`id_pendaftar`, `nama`, `instansi`, `tempat_lahir`, 
            `tanggal_lahir`, `gender`, `nik`, `email`, `no_hp`, `bisa_wa`, `pendidikan`, 
            `sertifikat`, `info_tambahan`, `status`) VALUES (NULL, '$nama', '$instansi', '$tempat_lahir', '$tanggal_lahir',
            '$gender', '$nik', '$email', '$no_hp', '$bisa_wa', '$pendidikan', '$sertifikat', '$info_tambahan', 0)";

            $show = mysqli_query($link, $sql);

            if($show){
                $qry2 = "UPDATE `pendaftar` SET `status` = '1' WHERE `id_pendaftar` = $id";
                $sql2 = mysqli_query($link,$qry2);
                $qry_user = "INSERT INTO `users` VALUES(NULL, '$nama', '725b637db3aa178a338f5f99321163cf', '$email', '$nama', 1, 1, CURRENT_TIMESTAMP)";
                $sql_user = mysqli_query($link,$qry_user);
                if($sql_user){
                    echo mysqli_error();
                }
                //send_email($email, $msg_for);
                header("location: ../templates/daftar_anggota.php");
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
                // send_email($email, $msg_for);
                header("location: ../templates/anggota_ditolak.php");
            }
        }

    }
    // Menampilkan data dari database
    function tampilkan($params1,$params2, $params3, $params4, $code){
        global $link, $show, $show0, $show1, $show2, $showAnggota;

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
        }elseif ($code == 3) {
            
        }elseif ($code == 4) {
            $total = mysqli_num_rows($showAnggota);
            echo "Jumlah anggota : ".$total;
        }


    // Menampilkan data
    // echo "<form action='".persetujuan()."' method='post'>";
    $i=1;
    if($code == 0){
        while($row = mysqli_fetch_array($show0)){
            echo "<tr>";
            echo "<td>".$i++."</td>";

            $foto = "SELECT * FROM foto WHERE email_pemilik = '$row[$params2]'";
            $cek_foto = mysqli_query($link, $foto);

            $sertifikat = "SELECT * FROM sertifikat WHERE email_pemilik = '$row[$params2]'";
            $cek_sertifikat = mysqli_query($link, $sertifikat);
            
            echo "<td>".$row[$params1]."</td>";
            echo "<td>".$row[$params2]."</td>";
            echo "<td>".$row[$params4]."</td>";

            while($row_foto = mysqli_fetch_array($cek_foto)){
                if($row_foto['status'] == 0){
                    echo "<td>Pending</td>";
                }else if($row_foto['status'] == 1){
                    echo "<td>OK</td>";
                }else if($row_foto['status'] == 2){
                    echo "<td>Ditolak</td>";
                }
            }

            while($row_sertifikat = mysqli_fetch_array($cek_sertifikat)){
                if($row_sertifikat['status'] == 0){
                    echo "<td>Pending</td>";
                }else if($row_sertifikat['status'] == 1){
                    echo "<td>OK</td>";
                }else if($row_sertifikat['status'] == 2){
                    echo "<td>Ditolak</td>";
                }
            }

            if($row['status'] == 0){
                echo "<td>Belum diaktivasi</td>";
                echo "<td><a href='../models/member.php?id=".$row['id_pendaftar']."&email=".$row[$params2]."&v=1'>Aktivasi</a></td>";
                echo "<td><a href='../models/member.php?id=".$row['id_pendaftar']."&email=".$row[$params2]."&v=0'>Tunda</a></td>";
            }
            echo "</tr>";
        }
    }else if($code == 1){
        while($row = mysqli_fetch_array($show1)){
            echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<td>".$row[$params1]."</td>";
            echo "<td>".$row[$params2]."</td>";
            echo "<td>".$row[$params3]."</td>";
            echo "<td>".$row[$params4]."</td>";
            if($row['status'] == 1){
                echo "<td>Anggota</td>";
            }
            echo "</tr>";
        }
    }else if($code == 2){
        while($row = mysqli_fetch_array($show2)){
            echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<td>".$row[$params1]."</td>";
            echo "<td>".$row[$params2]."</td>";
            echo "<td>".$row[$params3]."</td>";
            echo "<td>".$row[$params4]."</td>";
            if($row['status'] == 2){
                echo "<td>Ditolak</td>";
            }
            echo "</tr>";
        }
    }else if($code == 3){
        while($row = mysqli_fetch_array($show0)){
            echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<td>".$row[$params1]."</td>";
            echo "<td>".$row[$params2]."</td>";
            if($row['status'] == 0){
                echo "<td><a href='../models/member.php?id=".$row['id_pendaftar']."&email=".$row[$params2]."&v=1'>Terpilih</a></td>";
            }
            echo "<td><a href='../models/member.php?id=".$row['id_pendaftar']."&email=".$row[$params2]."&v=0'>Tolak</a></td>";
            echo "</tr>";
        }
    }else if($code == 4){
        while($row = mysqli_fetch_array($showAnggota)){
            $foto = "SELECT * FROM foto WHERE email_pemilik = '$row[$params2]'";
            $cek_foto = mysqli_query($link, $foto);

            $sertifikat = "SELECT * FROM sertifikat WHERE email_pemilik = '$row[$params2]'";
            $cek_sertifikat = mysqli_query($link, $sertifikat);
            echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<td>".$row[$params1]."</td>";
            echo "<td>".$row[$params2]."</td>";
            echo "<td>".$row[$params3]."</td>";
            while($row_foto = mysqli_fetch_array($cek_foto)){
                if($row_foto['status'] == 0){
                    echo "<td>Pending</td>";
                }else if($row_foto['status'] == 1){
                    echo "<td>OK</td>";
                }else if($row_foto['status'] == 2){
                    echo "<td>Ditolak</td>";
                }
            }

            while($row_sertifikat = mysqli_fetch_array($cek_sertifikat)){
                if($row_sertifikat['status'] == 0){
                    echo "<td>Pending</td>";
                }else if($row_sertifikat['status'] == 1){
                    echo "<td>OK</td>";
                }else if($row_sertifikat['status'] == 2){
                    echo "<td>Ditolak</td>";
                }
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