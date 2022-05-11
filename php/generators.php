<?php
function nums(){
	for($i=0;$i<=4;$i++){
		yield $i;
	}
}
$numbers = nums();
foreach($numbers as $values){
	echo $values;
	echo "<br>";
}

//yielding null

function gen_three(){
	foreach(range(1,3) as $i){
		yield;
	}
}
var_dump(iterator_to_array(gen_three()));

//Yielding by reference

function &gen_ref(){
	$value=3;
	
	while($value>0){
		yield $value;
	}
}
foreach(gen_ref() as &$num){
	echo (--$num);
}
echo "<br>";
//Basic use of yield from

function count_to_ten(){
	yield 1;
	yield 2;
	yield 3;
	yield from [4,5];
	yield from seven();
}
function seven(){
	yield 7;
	yield from eight();
}
function eight(){
	yield 8;
	yield from nine_ten();
}
function nine_ten(){
	yield 9;
	yield 10;
}
foreach(count_to_ten() as $value){
	echo "$value";
	echo "<br>";
}













?>

