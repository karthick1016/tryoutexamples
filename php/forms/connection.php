<?php

$host = "localhost";
$user = "formdb";
$password = "karthi@10";
$dbname = "register";

$conn=mysqli_connect($host,$user,$password,$dbname);

if(!$conn){
echo "No";
}echo "Yes";


$sql = "INSERT INTO names(fname,lname) VALUES ('Venkatesh','Prabhu')";

if(mysqli_query($conn,$sql)){
	echo "Yesssssss";	
	}
	echo "NO";
mysqli_close($conn);
?>



