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

$id = $_POST['ide'];
$username = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

$ins = "INSERT INTO employee (id,name,email,password,repassword) VALUES($id,'".$username."','".$email."','".$password."','".$repassword."');";
//echo $ins = "INSERT INTO employee (id,name,email,password,repassword) VALUES (14,'prahu','arth@gm.com','karthi','karthi')";

if(mysqli_query($conn,$ins)){
	echo "Inserted";
}
echo "No";

mysqli_close(conn);
?>
