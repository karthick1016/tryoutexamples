<?php

$y = 5;
$fn1 = fn($x)=>$x + $y;

$fn2 = function ($x) use ($y){
	return $x + $y;
};
var_export($fn1(7));
?>

<?php

$z = 3;
$fn =fn($x) => fn($y) => $x*$y*$z;
var_export($fn(10)(6));

?>
