<?php
	class BasketBall{
	private $baskets;

		public function __construct(){
			$this->baskets=0;
		}


	public function score(){
	
		$this->baskets++;
	}
}
?>