<?php
//Conditionals functions

$msg = true;
bar();

if($msg){
	function greet(){
		echo "Greetings";
		echo "<br>";
	}
}
greet();
function bar()
{
	echo "Hello World";
	echo "<br>";
}


?>

<?php
//function within function

function animal()
{
	function dog()
	{
		echo "Dog says Bow Bow";
	}
}
animal();
dog();
?>

<?php
//recursive function

function recur($a){
	if($a<20){
		echo "$a\n";
		recur($a+1);
	}
}
recur(7);
?>
