<?php 
// koneksi database
include 'koneksi.php';
 
$all = mysqli_query($koneksi, "SELECT * FROM pembaca_agenda");
// menangkap data id yang di kirim dari url
$id_agenda = $_GET['id_agenda'];
$file = $_GET['file'];
exec("rm -rf files/".$file);

// menghapus data dari database
$sql = mysqli_query($koneksi,"delete from agenda_kegiatan where id_agenda='$id_agenda'");
if($sql){
    while ($row = mysqli_fetch_array($all)) {
        $email = $row['pembaca'];
        if($row['notifikasi'] <= 0){
            $update = "UPDATE `pembaca_agenda` SET notifikasi = 0 WHERE pembaca = '$email'";
            $ok = mysqli_query($koneksi, $update);
            if(!$ok){
                echo mysqli_error();
            }else{
                header("location:agenda_kegiatan_upload.php");
            }    
        }else{
            $update = "UPDATE `pembaca_agenda` SET notifikasi = notifikasi-1 WHERE pembaca = '$email'";
            $ok = mysqli_query($koneksi, $update);
            if(!$ok){
                echo mysqli_error();
            }else{
                header("location:agenda_kegiatan_upload.php");
            }
        }
    }
}
else{
    echo mysqli_error();
}
 
?>