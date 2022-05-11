<?php

/*echo "Hi";
echo "This is PHP";
echo "Hello WOrld";
*/
echo "I am Karthick";

//heredoc
echo <<<END
	a
       b
      c
\n
END;

//nowdoc
echo <<<'EOD'
Example of nowdoc
Backslashes are always treated literally.
EOD;

//local variable

function test(){
	$var = 45;
	echo $var;
}
test();

//global variable

$name = "karthi";
function global_var(){
	global $name;
	echo $name;
}
global_var();

//$_GLOBALS
$num1 = 5;
$num2 = 20;

function sum(){
	$sum = $GLOBALS['num1'] + $GLOBALS['num2'];
	echo $sum;

}
sum();



function static_var(){
	static $num1 = 3;
	$num2 = 3;
	$num1++;
	$num2++;
	echo $num1;
	echo $num2;
}
static_var();
static_var();

//constant

define("CONSTANT","HEllo World");
echo CONSTANT;

const CONSTAN = "lol";
echo CONSTAN;














?>
