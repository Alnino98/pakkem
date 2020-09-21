<?php
/* Database credentials, which using currently */

/* Attempt to connect to MySQL database */

/* $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); */
$link = mysqli_connect("localhost", "pakkem", "Covid*20", "pakkem_daftar");

/* Check connection */

if($link === false){
	die("ERROR: Could not connect." . mysqli_connect_error());
}
?>