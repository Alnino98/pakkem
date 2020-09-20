<?php
/* Database credentials, which using currently */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pakkem_daftar');

/* Attempt to connect to MySQL database */

/* $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); */
$link = mysqli_connect('localhost', 'root', '', 'pakkem_daftar');

/* Check connection */

if($link === false){
	die("ERROR: Could not connect." . mysqli_connect_error());
}
?>