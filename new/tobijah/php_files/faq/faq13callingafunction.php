<?php
	function sample(&$str2) {
		$str2 .= 'Call By Reference';
}
$str = 'This is';
sample($str);

echo $str;
?>