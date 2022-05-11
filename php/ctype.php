<?php
//ctype_alnum()
$strings = array('abc1zyZ9','foo##@$123');
foreach($strings as $testcase){
	if(ctype_alnum($testcase)){
		echo "$testcase number or letters";
		echo "<br>";
	}else{
		echo "$testcase not an alphanumeric";	
		echo "<br>";
	}
}

//ctype_alpha()
$strings = array('abcdefghi','arf12');
foreach($strings as $test){
	if(ctype_alpha($test)){
		echo "$test has only Alphabets";
		echo "<br>";
	}else{
		echo "$test not ctype_alpha"; 
		echo "<br>";
	}
}

//ctype_digit()
$strings = array('1820.23','1002');
foreach($strings as $testcase){
	if(ctype_digit($testcase)){
		echo "The string $testcase consists of all digits";
		echo "<br>";
	}else{
		echo "The string $testcase does not consist of all digit ";
		echo "<br>";
	}
}

?>
