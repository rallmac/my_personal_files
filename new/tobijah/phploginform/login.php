<?php
session_start();
include 'db_conn.php';

if(isset($_POST['username']) && isset($_POST['password'])) {
	function validate($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		
		return data;
	}

}

$username = validate($_POST['username']);
$password = validate($_POST['password']);


if(empty($username)) {
	header("Location: index.php?erro=User Name is required");
	exit();
}
else if(empty($password)) {
	header("Location: index.php?error=Password is required");
	exit();
}


$sqli = "SELECT FROM users (username, password) VALUES ('$username', '$password')";

$result = mysqli_query($conn, $sqli);

if(mysqli_num_rows($result) === 1) {
	$rows = mysqli_fetch_assoc($result);
	if($row['username'] === $username $$ $row['password'] === $password) {
		echo "Logged in!";
		$_SESSION['username'] = $row['username'];
		$_SESSION['id'] = $row['id'];
		header("Location: home.php");
		exit();

	}
	else{
		header("Location: index.php?error=Incorrect User Name or Password");
		exit();
	}
}
else {
	header("Location: index.php");
	exit();
}
?>
