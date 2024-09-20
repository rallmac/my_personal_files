<?php
	include 'php/config.php';
	include 'php/signup.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

<div>
		<header>
		<h2>This is rebranded again</h2>
		</header>
</div>

</head>

<body>
	<form action="" method="POST">
	<h2>Sign up</h2> <br><br>
	<fieldset>
		<strong>Full Name:</strong> <br>
		<input type="text" name="name" >
		<br><br>

		<strong>Email:</strong> <br>
		<input type="email" name="email">
		<br><br>

		<strong>Password:</strong> <br>
		<input type="password" name="password">
		<br><br>

		<input type="submit" name="submit" value="submit">
		<a href="login.php">Login</a>
	</fieldset>
	</form>	
</body>
</html>
