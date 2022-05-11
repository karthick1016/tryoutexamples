<?php

$host = "localhost";
$user = "formdb";
$password = "karthi@10";
$databasename = "employee";

$conn = mysqli_connect($host,$user,$password,$databasename);

if(!$conn){
	echo "NOT";
}
echo "Connect";
echo "</br>";

if(isset($_POST['update']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$repassword = $_POST['repass'];
}

?>
