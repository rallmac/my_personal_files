<html>
<head title = "www.mynewfile.com">
</head>

<body>
<h2>you are welcome!</h2>

	<?php
		class fruit {
			public  $name;
			public  $color;

		function __construct($name, $color){
				$this-> name = $name;
				$this-> color = $color;
		}

		function get_name(){
			return $this-> name;
		}
		
		function get_color(){
			return $this-> color;
		}
		
		}

		$strawberry = new fruit ("Strawberry", "Pink");
		echo $strawberry->get_name();
		echo "<br>";
		echo $strawberry->get_color();
		echo "<br>";
		echo "My first php script!";
	?>

</body>
</html>
