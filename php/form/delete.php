<?php
$host = "localhost";
$user = "formdb";
$password = "karthi@10";
$database = "employee_db";

$conn = mysqli_connect($host,$user,$password,$database);
if(!$conn){
	echo "Not connected";
}
echo "Connect";

$id = $_GET['deletedata'];
echo $sql = "DELETE from employee where id=$id";
$result = mysqli_query($conn,$sql);
if($result){
	echo "Delete Sucessfull";
}else{
	echo "Nope";
}
mysqli_close($conn);
?>
