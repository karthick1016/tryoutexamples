<?php

$message =  false;
msg();
if($message){
	function welcome(){
		echo "Welcome to world";
		echo "<br>";
	}
}
welcome();
function msg(){
	echo "I am Groot";
	echo "<br>";
}
?>


<?php
function bike()
{
	function bullet()
	{
		echo "ThunderBird,RoyalENfield";
	}
}
bike();
bullet();
?>