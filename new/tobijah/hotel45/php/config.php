<?php
// Database connection details
$host = "localhost";
$user = "root";
$password = "";
$database = "api";


// Connect to the databse
$conn = mysqli_connect($host, $user, $password, $database);


// Check for connection errors
if (mysqli_connect_errno()){
	die('Failed to connect to MySQL' . mysqli_connect_error());
}


?>
