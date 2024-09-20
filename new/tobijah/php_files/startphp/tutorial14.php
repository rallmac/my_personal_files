<html>
<head>
</head>


<body>
	<h1> The Fruit Program </h1>
	<?php
		class fruit   //php class is what i am testing in this program
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


	?>

</body>
</html>