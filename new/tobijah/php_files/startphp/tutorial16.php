<html>
<head>
</head>

<body>
<?php
	class Fruit
		{
			public $name;
			public $color;

			function __construct($name, $color) //this is a constructor program
				{
					$this->name = $name;
					$this->color = $color;
				}

			function get_name()
				{
					return $this->name;
				}

			function get_color()
				{
					return $this->color;
				}
		}
$strawberry = new Fruit ("Strawberry", "Pink");
echo $strawberry->get_name();
echo "<br>";
echo $strawberry->get_color();
?>

</body>
</html>