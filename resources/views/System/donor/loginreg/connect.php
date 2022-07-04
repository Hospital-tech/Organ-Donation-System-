<?php 

	$host = "localhost";
	$username = "id19088433_organs";
	$password = "~LvH=\OkvQc!8LBE";
	$db_name = "id19088433_organ";

	$con = mysqli_connect($host, $username, $password, $db_name);

	if(!$con) {
		die("Cannot connect to the database");
	}

?>