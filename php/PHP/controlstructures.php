<?php
echo "If,else-if,else";
echo "<br>";

$a = 17;
$b = 15;

if($a>$b):
	echo $a." is greater than ".$b;
	echo "<br>";
elseif ($b>$a):
	echo $b." is greater than ".$a;
	echo "<br>";
else:
	echo $a." is equal to ".$b;
	echo "<br>";
endif;

echo "<h3>While</h3>";

$i = 1;
while ($i <= 10) {
	echo $i;
	$i++;
	echo "<br>";
}
echo "<h3>Do While</h3>";
$i = 0;
do{
	echo $i;
	$i++;
echo "<br>";
}while($i<5);

echo "<h3>For Loop</h3>";
for ($i=0; $i <= 2 ; $i++) { 
	echo $i;
	echo "<br>";
}

echo "<h3>For each</h3>";
$arr = array(1,2,3,4);
foreach ($arr as &$value) {
	$value = $value*2;
	echo $value;
}

echo "<h3>Break</h3>";
$arr = array("one","two","three","four","five");
foreach($arr as $values)
{
	if($values == "four"){
		break;
	}
	echo "$values";
	echo "<br>";
}
echo "<h3>Continue</h3>";
$arra = array("one","two","three","four","five");
foreach($arra as $val){
	if($val == "two"){
		continue;
	}
	echo "$val";
	echo "<br>";
}

echo "<h3>Switch</h3>";
$i = 0;
switch ($i) {
	case 0:
		echo "i equals zero";
		break;
	case 1:
		echo "i equals one";
		break;
	case 2:
		echo "i equals two";
		break;
	default:
		echo "i";
		break;
}
?>
