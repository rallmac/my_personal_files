<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'api';


	$conn = mysqli_connect($host, $user, $password, $database);
	$response = array();
	if($conn) {
		$sqli = "SELECT * FROM users";
		$result = mysqli_query($conn,$sqli);
		if($result) {
			$x = 0;
			while ($row = mysqli_fetch_assoc($result)) {
				$response[$x]['id'] = $row['id'];
				$response[$x]['name'] = $row['name'];
				$response[$x]['age'] = $row['age'];
				$response[$x]['email'] = $row['email'];
				$x++;
			}
			echo json_encode($response, JSON_PRETTY_PRINT);
		}
	
	}
	else {
		echo "Database connection failed";
	}

?>
