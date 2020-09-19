<!-- Koneksi DB Agenda Kegiatan -->
<?php 
$koneksi = mysqli_connect("localhost","root","","pakkem_agenda");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>