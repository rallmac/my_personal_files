<?php
	class MainClass {
		piblic function ShowTitle($parameter1) {
		echo "function";
		}
		public function ShowTitle($parameter1, $parameter2) {
		echo "function overloading"
		}
	}
	$object = new MainClass;
	$object->ShowTitle('Helo');

// Overriding
	class Base {
		function display() {
			echo "\nBase class function declared final!";
	}
	function demo() {
		echo "\nBase class function!",
	}
	}
	
	class Derived extends Base {
		function demo() {
			echo "\nDerived class function!";		
	}

	}

	$ob = new Base;
	$ob->demo();
	&ob->display();
	$ob2 = new Derived;
	$ob2->demo();
	$ob2->display();

?>