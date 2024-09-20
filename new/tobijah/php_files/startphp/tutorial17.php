<html>
<head>
</head>

<body>
<?php
	class Fruit
		{
			public $name;
			public $color;

			function __construct($name, $color) //this is a destructor program
				{
					$this->name = $name;
					$this->color = $color;
				}

			function __destruct()
				{
					echo "The fruit is {$this->name} and the color is {$this->color}.";
				}
		}
$strawberry = new Fruit ("Strawberry", "Pink");

?>

</body>
</html>