<?php 
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'test3';

	$conn = mysqli_connect($host, $user, $password, $database);

	if(!$conn) {
		echo "Connection Falied";
	}

?>
