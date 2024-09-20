<?php
	class DataBaseConnector {
	private static $obj;
	private final function __construct() {
		echo __CLASS__ . " initialize ony once";
	}

	public static function getConnect() {
		if (!isset(self::$obj)) {
			self::$obj = new DatabaseConnector();
		}
		return self::$obj;
	}

}

$obj1 = DataBaseConnector::getConnect();
$obj2 = DataBaseConnector::getConnect();
var_dump($ob == $obj2);
?>