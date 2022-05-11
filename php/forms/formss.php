<?php
$host = "localhost";
$user = "formdb";
$password = "karthi@10";
$dbname = "form_db";
$conn=mysqli_connect($host,$user,$password,$dbname);

if(!$conn){
	echo "Could not connect";
}
echo "Connected Successfully";



$sql =  "INSERT INTO form (firstname,lastname,mail,password,repassword) values('Karthick','Prabhu','kpasp','ad','as')";
if(mysqli_query($conn, $sql)){
	echo "Record Inserted Successful";
	//echo ("$firstname,$lastname,$email,$password,$repassword");
}else{
	echo "Could not successful";
}
mysqli_close($conn);

?>

