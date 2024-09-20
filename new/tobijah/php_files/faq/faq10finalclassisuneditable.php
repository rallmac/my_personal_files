<?php
	final class BaseClass{
		final function printData($val1,$val2){
			$add=$val1+$val2;
			echo "Sum of given no=".$s;
			}
		}
	class Child extends BaseClass{
		function printData($val1,$val2){
			$m=$val1+$val2;
			echo "Multiplication of given no=" .$m;
			}
		}
	$obj= new Child();
	$obj->printData(20,20);
?>