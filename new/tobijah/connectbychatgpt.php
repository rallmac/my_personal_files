<?php

// Database connection details
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test2';

// Connect to the database
$conn = mysqli_connect($host, $user, $password, $database);

// Check for connection errors
if (mysqli_connect_errno()) {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Collect user information from the form
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  // Insert user information into the database
  $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
  if (mysqli_query($conn, $sql)) {
    echo 'User created successfully';
  } else {
    echo 'Error creating user: ' . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);

?>


<!-- HTML form to collect user information -->
<form method="post" action="">
  <label for="name">Name:</label>
  <input type="text" name="name" required> <br> <br>
  
  <label for="email">Email:</label>
  <input type="email" name="email" required> <br> <br>
  
  <label for="password">Password:</label>
  <input type="password" name="password" required> <br> <br>

  <input type="submit" name="submit" value="Create account">
</form>
