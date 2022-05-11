<!DOCTYPE html>
<html>
<head>
<title>Update Form</title>
</head>
<body>
	<div>
	<h2>Update Form</h2>
	<form method="POST">
	<div class="element">
		<label for = "ide">ID</label>
		<input type="text" id="ide" name="ide">
	</div>
	<div class="element">
		<label for="uname">UserName</label>
		<input type = "text" id="uname" name="uname">
	</div>
	<div class="element">
		<label for="email">Email</label>
		<input type = "text" id="email" name="email">
	</div>
	<div class="element">
		<label for="password">Password</label>
		<input type = "text" id="password" name="password">
	</div>
	<div class="element">
		<label for="repassword">ConfirmPassword</label>
		<input type = "text" id="repassword" name="repassword">
	</div>
	<input type="submit" class="btn" name="submit" value="Update">
	</form>
	
	</div>
</body>
</html>


<?php
$host = "localhost";
$user = "formdb";
$password = "karthi@10";
$database = "employee_db";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
	echo "Not Connected";
	//header('location:read.php');
}
echo "Connected";

$id = $_GET['updatedata'];
$username = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
echo $update = "UPDATE employee set name = '$username',email='$email',password='$password',repassword='$repassword' where id =$id";
//echo $update = "UPDATE employee set id=188,name='prabhu',email='prabhueu@gmail.com',password='win',repassword='win' where id=12";
$result = mysqli_query($conn,$update);
if($result){
	echo "Updated Successfully";
}
echo "No";
?>


