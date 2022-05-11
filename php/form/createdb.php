<?php

$host = "localhost";
$user = "formdb";
$password = "karthi@10";

$conn = mysqli_connect($host,$user,$password);

if(!$conn){
	echo "Not Connected";
}
echo "Connected";
echo "<br>";

$sql = 'CREATE Database employee_db';

if(mysqli_query($conn,$sql)){
	echo "DateBase Created Successfully";
}
echo "Not created";

mysqli_close($conn);
?>
