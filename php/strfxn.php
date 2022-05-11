<?php
//addcslashes

echo addcslashes('karthi[]','A..z');	
echo "<br>";
//addslashes

$str = "I'm Karthick Prabhu";
echo addslashes($str);
echo "<br>";

//bin2hex - convert binary to hexadecimal
$hex = bin2hex("Hello World");
echo $hex;
echo "<br>";
//hex2bin - convert hexa to binary
echo hex2bin($hex);
echo "<br>";

//chr - Generate a single byte string from a number

$str = chr(240).chr(159).chr(144).chr(152);
echo $str;
echo "<br>";
//convert_uuencode

$some_string = "test\ntext text\r\n";

echo convert_uuencode($some_string);
echo "<br>";
//count_chars
$data = "Two Ts and one F.";

foreach (count_chars($data, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
   echo "<br>";
}
//explode

$pizza = "piece1 piece2 piece3 piece4";
$pieces = explode(" ", $pizza);
echo $pieces[1];echo "<br>";
echo $pieces[0];
echo "<br>";

//HTML entity 
$orig = "I'll \"walk\" the <b>dog</b> now";
$a = htmlentities($orig);
$b = html_entity_decode($a);
echo $a;echo "<br>";
echo $b;echo "<br>";

//htmlspecialchars_decode

$str = "<p>this -&gt; &quot;</p>\n";
echo htmlspecialchars_decode($str);


//implode
$array = ['firstname','lastname','email'];
var_dump(implode(",",$array));
echo "<br>";
//lcfirst

$name = 'karthick';
echo lcfirst($name);
echo "<br>";

//metaphone
var_dump(metaphone('programmig'));
?>


