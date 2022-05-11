<?php

function test(){
	$msg = "local";
	echo 'Global Message '.$GLOBALS['msg'];
	echo "<br>";
	echo 'Local Message '.$msg;
}
$msg = "Global";
test();

?>


