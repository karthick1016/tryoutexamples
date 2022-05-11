<?php
//checkdate
var_dump(checkdate(07,10,2001));
echo "<br>";
var_dump(checkdate(02,30,2001));
echo "<br>";
//date-time::add
$date = new DateTime('2001-07-01');
$date->add(new DateInterval('P9D'));
echo $date->format('Y-m-d');
echo "<br>";
$date = new DateTime('2000-01-01');
$date->add(new DateInterval('PT10H30S'));
echo $date->format('Y-m-d H:i:s');
echo "<br>";

$date = new DateTime('2000-12-31');
$interval = new DateInterval('P1M');

$date->add($interval);
echo $date->format('Y-m-d') . "\n";
echo "<br>";
$date->add($interval);
echo $date->format('Y-m-d') . "\n";
echo "<br>";

$date = date_create_from_format('j-M-Y', '15-Feb-2009');
echo date_format($date, 'Y-m-d');
echo "<br>";


?>
