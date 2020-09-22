<?php
    include "../models/config.php";
    global $link;
    $foto = $_GET['foto'];
    $sertifikat = $_GET['sertifikat'];
    $id = $_GET['id'];
    if($sertifikat != NULL){
        if($id == "ok"){
            global $link;
            $query_sertifikat = "UPDATE sertifikat SET status = 1 WHERE sertifikat_upload = '$sertifikat'";
            $verifikasi_sertifikat = mysqli_query($link, $query_sertifikat);
            if($verifikasi_sertifikat){
                header("location: approve.php");
            }
        }elseif ($id == "batal") {
            global $link;
            $query_sertifikat = "UPDATE sertifikat SET status = 0 WHERE sertifikat_upload = '$sertifikat'";
            $verifikasi_sertifikat = mysqli_query($link, $query_sertifikat);
            if($verifikasi_sertifikat){
                header("location: approve.php");
            }
        }elseif ($id == "ditolak") {
            global $link;
            $query_sertifikat = "UPDATE sertifikat SET status = 2 WHERE sertifikat_upload = '$sertifikat'";
            $verifikasi_sertifikat = mysqli_query($link, $query_sertifikat);
            if($verifikasi_sertifikat){
                header("location: approve.php");
            }
        }
    }else if($foto !=NULL){
        if ($id == "ok") {
            global $link;
            $query_foto = "UPDATE foto SET status = 1 WHERE foto_upload = '$foto'";
            $verifikasi_foto = mysqli_query($link, $query_foto);
            if($verifikasi_foto){
                header("location: approve.php");
            }
        }elseif ($id == "batal") {
            global $link;
            $query_foto = "UPDATE foto SET status = 0 WHERE foto_upload = '$foto'";
            $verifikasi_foto = mysqli_query($link, $query_foto);
            if($verifikasi_foto){
                header("location: approve.php");
            }
        }elseif ($id == "ditolak") {
            global $link;
            $query_foto = "UPDATE foto SET status = 2 WHERE foto_upload = '$foto'";
            $verifikasi_foto = mysqli_query($link, $query_foto);
            if($verifikasi_foto){
                header("location: approve.php");
            }
        }
    }
?>