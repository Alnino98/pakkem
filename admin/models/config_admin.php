<?php
/* Attempt to connect to MySQL database */

$link_admin = mysqli_connect("localhost", "pakkem", "Covid*20", "pakkem_pakkem");

/* Check connection */

if($link === false){
	die("ERROR: Could not connect." . mysqli_connect_error());
}
?>