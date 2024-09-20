<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'form';

	$conn = mysqli_connect($host, $user, $password, $database);

	if(mysqli_connect_error()) {
		exit('Error connecting to the database');
	}
	
	if(!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
		exit('Empty Field(s)');
	}

	if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
		exit('Values Empty');
	}

	if($stmt = $conn->prepare('SELECT * id, password FROM users WHERE username = ?')) {
		$stmt->bind_param('s', $_POST['username']);
		$stmt->execute();
		$stmt->store_result();

		if($stmt->num_rows>0) {
			echo 'Username Already Exists. Try Again';
		}
		else {
			if($stmt = $conn->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)')) {
				$password = password_hash($_POST['password'], $PASSWORD_DEFAULT);
				$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
				$stmt->execute();
				echo 'Succesfully Registered';
			}
			else {
				echo 'Error Occured';
			}
		}
		$stmt->close();
	}
	else{
		echo 'Error Occured';
	}
	$conn->close();
?>
