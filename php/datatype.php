<?php
$a_bool = true;
$a_str = "karthick";
$a_strs = 'prabhu';
$a_int = 50;

echo gettype($a_bool);
echo "</br>"; 
echo gettype($a_str);


if(is_int($a_int)){
	$a_int += 4;
} 
echo $a_int;	

#boolean


var_dump((bool) "");
var_dump((bool) "0");
var_dump((bool)1);
var_dump((bool)-2);
echo "</br>"; 
#integer Literals

$a = 1234;
echo $a;
echo "</br>";  
$a = 0123;
echo $a;
echo "</br>"; 
var_dump(25/7);
echo "</br>"; 
var_dump((int)(25/7));
echo "</br>"; 
var_dump(round(25/7));
echo "</br>"; 
?>
