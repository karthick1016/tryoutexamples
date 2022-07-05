<?php
echo "Operators";
echo "<br>";

echo "Arithmetic Operators";
echo "<br>";
$a = 6;
$b = 3;
echo $a+$b;
echo "<br>";
echo $a-$b;
echo "<br>";
echo $a*$b;
echo "<br>";
echo $a/$b;
echo "<br>";
echo $a%$b;
echo "<br>";
echo $a**$b;
echo "<br>";
echo "String Operators";
echo "<br>";
$first = "Hello";
$second = $first." World";
echo "$second";
echo "<br>";
$first = "Karthick";
$first.=" Prabhu";
echo "$first";
echo "<br>";
echo "Array Operators";
echo "<br>";
$fruit = array("a" => "strawberry","b"=>"mango","c"=>"Pineapple");
$fruits = array("a"=>"apple","b"=>"watermelon");
var_dump($fruit + $fruits);
echo "<br>";
var_dump($fruits + $fruit);
echo "<br>";
?>