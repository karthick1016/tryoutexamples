<?php
$host = "localhost";
$user = "root";
$password = "";	
$conn = mysqli_connect($host,$user,$password);
if(!$conn){
	echo "Not Connected";
}
echo "Connected";
echo "<br>";

$sql = 'CREATE Database leavemanagement';

if(mysqli_query($conn,$sql)){
	echo "Databse created successfully";
}
mysqli_close($conn);
?>
