<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
		$conn= mysqli_connect('localhost', 'root', '', 'test1') or die("Connection Failed:" .mysqli_connect_error());
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup']) && isset ($_POST['password'])) {
			$name= $_POST['name'];
			$email= $_POST['email'];
			$phone= $_POST['phone'];
			$bgroup= $_POST['bgroup'];
			$password= $_POST['password'];

			$sql= "INSERT INTO users (name, email, phone, bgroup, password) VALUES ('$name', '$email', '$phone', '$bgroup', '$password')";
			$query = mysqli_query($conn, $sql);
			if($query) {
				echo 'Entry Successfull';
			}

			else {
				echo 'Error Occured' . mysqli_error($conn);
			}
		}
	
	}

//Close connection to the database
mysqli_close($conn);

?>
