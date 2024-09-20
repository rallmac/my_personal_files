<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'mydb';


	$conn = mysqli_connect($host, $user, $password, $database);
	if(mysqli_connect_errno()) {
		die('Connection Failed' . mysqli_connect_errno());
	}

?>
