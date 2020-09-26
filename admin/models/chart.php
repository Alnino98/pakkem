<?php
    $kategori = $_GET['kategori'];
    $link = mysqli_connect("localhost", "pakkem", "Covid*20", "pakkem_daftar");

    if($kategori == 1){
        function jumlah(){
            global $link;
            $year = date("Y");
            for($i=1; $i<=12; $i++){
                $query = "SELECT * FROM pendaftar WHERE month(tgl_daftar) = '$i' AND year(tgl_daftar) = '$year'";
                $sql = mysqli_query($link, $query);
                $total = mysqli_num_rows($sql);
                echo json_encode($total);
            }
        }
        echo jumlah();
    }else if($kategori == 2){
        global $link;
        $query = "SELECT * FROM pendaftar WHERE status = 0";
        $sql = mysqli_query($link, $query);
        $total = mysqli_num_rows($sql);
        echo $total;
    }else if($kategori == 3){
        global $link;
            $year = date("Y");
            for($i=1; $i<=12; $i++){
                $query = "SELECT * FROM anggota WHERE month(tgl_daftar) = '$i' AND year(tgl_daftar) = '$year'";
                $sql = mysqli_query($link, $query);
                $total = mysqli_num_rows($sql);
                echo json_encode($total);
            }
    }else if($kategori == 4){
        global $link;
        $anggota = "SELECT * FROM anggota";
        $month = date('m');
        $year = date('Y');
        $aktif = "SELECT * FROM `log` WHERE MONTH(timestamp) = '$month' AND YEAR(timestamp) = '$year'";
        $pasif = "SELECT * FROM `log` WHERE MONTH(timestamp) < '$month' OR YEAR(timestamp) < '$year'";

        $anggota_total = mysqli_query($link, $anggota);
        $anggota_aktif = mysqli_query($link, $aktif);
        $anggota_pasif = mysqli_query($link, $pasif);

        $total_anggota = mysqli_num_rows($anggota_total);
        $total_aktif = mysqli_num_rows($anggota_aktif);
        $total_pasif = mysqli_num_rows($anggota_pasif);

        echo $total_pasif,$total_aktif,$total_anggota;
    }
?>