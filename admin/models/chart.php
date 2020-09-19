<?php
    function jumlah(){
        $link = mysqli_connect('localhost', 'admin', 'japan999', 'pakkem_daftar');
        for($i=1; $i<=12; $i++){
            $query = "SELECT * FROM pendaftar WHERE month(tgl_daftar) = '$i'";
            $sql = mysqli_query($link, $query);
            $total = mysqli_num_rows($sql);
            echo json_encode($total);
        }
    }
    jumlah();
?>