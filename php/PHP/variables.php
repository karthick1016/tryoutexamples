<?php

$name = 'Karthi';
$names = 'Prabhu';
echo "$name $names\n<br>";

//variable scope

$a = 1;
$b = 2;

function test(){
	global $a,$b;

	$b = $a+$b;	
}
test();
echo $b;

//$GLOBALS

$a = 1;
$b=7;

function sum(){
	$GLOBALS['a'] = $GLOBALS['a']+$GLOBALS['b'];
}
sum();
echo $a;

//static variables

// function count(){
// 	$sum = 0;
// 	echo $sum;
// 	$sum++;
// }

function sums(){
	static $a = 1;
	echo"  $a <br>";
	$a++;
}
sums();		

//recursive fxn static variables

function recur(){
	static $count = 0;
	
	$count++;
	echo $count;
	echo "<br>";
	if($count < 10){
		recur();
	}
	$count--;
}
recur();

//variable variable

$a = "hello";
$$a = "world";

echo "$a ${$a}";
echo "<br>";
echo "$a $hello";
?>