<html>
<head>
</head>

<body>
<?php
	class Fruit
		{
			public $name;
			public $color;

			function __construct($name, $color) //this is an inheritance program
				{
					$this->name = $name;
					$this->color = $color;
				}

			public function intro()
				{
					echo "A {$this->name} is a fruit and the color of the fruit is {$this->color}.";
				}
		}
	
	class Cherry extends Fruit 
	{
		public function message()
			{
				echo "Is cherry a fruit or a berry? ";
			}
			
	}

	$cherry = new Cherry ("Cherry", "red");
	$cherry->message();
	$cherry->intro();

?>

</body>
</html>