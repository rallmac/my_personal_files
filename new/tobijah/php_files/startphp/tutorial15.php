<html>
<head>
</head>


<body>
	<h1> The Fruit Program </h1>
	<?php
		class fruit   //php object is what i am testing in this program
		{
			public $name;
			public $color;

			function set_name($name)
				{
					$this->name = $name;
				}

			function get_name()
				{
					return $this->name;
				}


		}

		$apple = new fruit();
		$banana = new fruit();
		$apple->set_name('Apple');
		$banana->set_name('Banana');

		echo $apple->get_name();
		echo "<br>";
		echo $banana->get_name();
	?>

</body>
</html>