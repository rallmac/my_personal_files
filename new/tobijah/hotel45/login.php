<?php
	include "php/config.php";
	//check if the form has been submitted
if (isset($_POST['submit'])) {
        // Collect user information from the form
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Querry to check user credentials
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        // Check if the query was successful
        if ($result) {
                // Check if the user exists
                if (mysqli_num_rows($result) == 1) {
                        header("location: ./loggedin.php");
                        // You can redirect the user to another page or perform additional actions here
        
                } else {
                        header("location: ./recover.php");
                }
        } else {
                echo 'Error: ' . mysqli_error($conn);
        }
}

// Close the database connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

	<form action="" method="POST">
	<h2>Login form</h2>
	<fieldset>
		<strong>Email:</strong> <br>
                <input type="email" name="email">
                <br><br>

                <strong>Password:</strong> <br>
                <input type="password" name="password">
                <br><br>

		<input type="submit" name="submit" value="submit">
		<br><br>
		don't have an account?<br>
		<a href="index.php">signup</>
        </fieldset>
        </form>

</body>
</html>
