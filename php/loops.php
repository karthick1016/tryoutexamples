<?php

for($i=1;$i<=10;$i++){
echo "$i";
echo "<br/>";
}
echo "<br/>";

for($n=1; ;$n++){
	if($n>10){
	break;
	}
	echo $n;
	echo "<br/>";
}

$k = 1;
for(; ; ){
	if($k > 10){
	break;
	}
	echo $k;
	echo "<br/>";
	$k++;
}

//Nested For LooP

for($i = 1;$i < 4; $i++){
	for($j=1 ; $j<4 ; $j++){
	echo "$i $j";
	echo "<br/>";
	
	}
}

//while loop

$i =1;
while($i <= 10){
	echo $i;
	$i++;
	echo "<br/>";
}


$s = 0;
while($s <= 100){
	echo $s;
	$s+=10;
	echo "<br/>";
}
//Do while loop
$x = 0;
do{
echo $x;
echo "<br/>";
}while($x > 0);

//for each loop
$arr = array(1,2,3,4);
foreach ($arr as $value){
	$value = $value * 3;
	echo "$value";
	echo "<br/>";	
}




















?>
