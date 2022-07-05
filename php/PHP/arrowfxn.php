<?php

$a = 10;
$fxn = fn($b)=>$a * $b;

$fxns = function ($b) use ($a){
	return $b - $a;
};
var_export($fxn(10));
?>
