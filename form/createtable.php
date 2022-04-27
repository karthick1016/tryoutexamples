<?php
$host = "localhost";
$user = "formdb";
$password = "karthi@10";
$database = "employee_db";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
	echo "Not Connected";
}
echo "Connect";
echo "<br>";

$sql = 'CREATE Table employee (id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(20)NOT NULL,email VARCHAR(25)NOT NULL,password VARCHAR(25)NOT NULL,repassword VARCHAR(20)NOT NULL,UNIQUE KEY unique_email(email))';

if(mysqli_query($conn,$sql)){
echo "Table Created";
}
echo "Not Created";

mysqli_close($conn);
?>
