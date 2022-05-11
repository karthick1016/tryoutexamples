<?php
$a = 1.234;
$b = 2.345;
$c = 3.456;
echo $a;
echo "\r\n";
echo $b;


$a = 1.2345678;
$b = 1.2345677;
$c = 0.00001;

if(abs($a-$b)> $c){
	echo "true";
}else{
	echo "false";
}
//NaN
$nan = acos(8);
var_dump($nan,is_nan($nan));

//example:

$x = 8-6.4;
$y = 1.6

?>
