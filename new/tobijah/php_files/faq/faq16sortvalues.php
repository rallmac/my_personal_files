<?php
	//ascending order sorting - sort()
	$cars = array("Volvo", "BMW", "Toyota");
	sort($cars);

	//descending order sorting - rsort()
	$cars = array("Volvo", "BMW", "Toyota");
	rsort($cars);

	//Ascending order in terms of value - asort()
	$age = array("Mac"=>"22", "Rob"=>"27", "Duke"=>"37");
	asort($age);

	//Acsending order accordiing to key - ksort()
	$age = array("Mac"=>"22", "Rob"=>"27", "Duke"=>"37");
	ksort($age);

	//Descending value - arsort()
	$age = array("Mac"=>"22", "Rob"=>"27", "Duke"=>"37");
	arsort($age);

	//Descending key  - krsort()
	$age = array("Mac"=>"22", "Rob"=>"27", "Duke"=>"37");
	krsort($age);
?>