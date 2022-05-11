<?php
$x = "abc";
$$x = 200;
echo $x;
echo $$x;
echo $abc;

$city = "U.P";
$$city = "Lucknow";
echo $city;
echo $$city;
echo "Capital of $city is ".$$city;

$name = "karthi";
${$name} = "prabhu";
${${$name}} = "kavi";
echo $name;
echo ${$name};
echo $karthi;
echo $prabhu;
echo ${${$name}};


?>

