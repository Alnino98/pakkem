<?php
/* Database credentials, which using currently */

/* Attempt to connect to MySQL database */

$link = mysqli_connect('localhost', 'admin', 'japan999', 'pakkem_daftar');

/* Check connection */

if($link === false){
	die("ERROR: Could not connect." . mysqli_connect_error());
}
?>