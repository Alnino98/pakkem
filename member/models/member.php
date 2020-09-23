<?php
    $link = mysqli_connect("localhost", "pakkem", "Covid*20", "pakkem_daftar");
    function pendaftar(){
        global $link;
        $qry = "SELECT * FROM pendaftar";
        return $sql = mysqli_query($link, $qry);
    }
?>