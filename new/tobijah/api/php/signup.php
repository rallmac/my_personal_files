<?php 
// Check if the form has been submitted
if (isset($_POST['submit'])) {
	//collect user information from the form
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//insert user information into the database
	$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
	if (mysqli_query($conn, $sql)){
		header("location: ./login.php");
	} else { 
		header("location: ./recover.php");
		}

}

// Close the database connection
mysqli_close($conn);

?>
