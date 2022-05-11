<?php

$value = "Hi Hello from somewhere";

setcookie("TestCookie",$value);
setcookie("TestCookie",$value,time()+3600);
setcookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", 1);


echo $_COOKIE["TestCookie"];
echo "<br>";
print_r($_COOKIE);
echo "<br>";

setcookie("cookie[three]","cookiethree");
setcookie("cookie[two]","cookietwo");
setcookie("cookie[one]","cookieone");

if(isset($_COOKIE['cookie'])){
	foreach($_COOKIE['cookie'] as $name=>$value){
		$name = htmlspecialchars($name);
		$value = htmlspecialchars($value);
		echo "$name : $value";
		echo "<br>";
	}
}
?>
