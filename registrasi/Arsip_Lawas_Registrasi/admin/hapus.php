<?php

include 'config/config.php';

$id = $_GET['mst_no_pendaftaran'];
$query = "DELETE FROM mst_anggota WHERE mst_no_pendaftaran = $id"; // query hapus data
 
if(mysqli_query($konek, $query)){
    header("Location: index.php"); // redirect ke index.php
}else{
    echo "Hapus data gagal";
}
?>