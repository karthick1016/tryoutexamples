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

$sql = 'CREATE Table admin(id INT AUTO_INCREMENT PRIMARY KEY,name varchar(20)NOT NULL,password VARCHAR(25)NOT NULL)';

if(mysqli_query($conn,$sql)){
echo "Table Created";
}
mysqli_close($conn);
?>
