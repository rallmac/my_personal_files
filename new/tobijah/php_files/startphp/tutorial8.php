<?php
	$var = 6;
	
	if($var % 2 == 0 && $var % 3 == 0)
		{
			echo "Divisible by 2 and 3";	
		}

	elseif($var % 2 == 0)
		{
			echo "Divisible by 2";
		}

	elseif($var % 3 == 0)
		{
			echo "Divisible by 3";
		}

	else
		{
			echo "Not Divisible by 2 and 3";
		}
?>