<?php
	try {
		print "Try block";

		throw new Exception();
} catch (Exception @e) {
	print "something went wrong, caught it!";
} finally {
	print "this part is always executed";
}
?>