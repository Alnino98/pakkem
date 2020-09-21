<?php
/* Database credentials, which using currently */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'japan999');
define('DB_NAME', 'pakkem_pakkem');

/* Attempt to connect to MySQL database */

/* $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); */
$link = mysqli_connect('localhost', 'admin', 'japan999', 'pakkem_pakkem');

/* Check connection */

if($link === false){
	die("ERROR: Could not connect." . mysqli_connect_error());
}
?>