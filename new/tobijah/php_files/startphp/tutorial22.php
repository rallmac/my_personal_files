<?php
	if(isset($_REQUEST["name"]) || isset($_POST["age"])) //this is a request method
		{
			echo "Hi ". $_REQUEST['name']. "<br/>";
			echo "Your age is ". $_REQUEST['age']. " years";
			exit();
		}
?>


<html>
	<body>

		<form action = "<?php $_PHP_SELF ?>" method = "POST">
			Name: <input type = "text" name = "name" />
			Age: <input type = "text" name = "age" />
			<input type = "submit" />
		</form>
	</body>
</html>