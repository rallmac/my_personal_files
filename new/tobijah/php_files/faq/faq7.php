<?php
	function sample()
	{
		$numargs = func_num_args();
		echo "Number of arguments: $numargs\n";
	}
	sample(6, 8, 2);
?>