<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "leavemanagement";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
	echo "Not Connected";
}
echo "Connected";
echo "<br>";

$name = $_POST['uname'];
$password = $_POST['password'];

$ins = 
?>
