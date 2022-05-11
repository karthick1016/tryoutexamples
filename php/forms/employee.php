<?php

$host = "localhost";
$user = "formdb";
$password = "karthi@10";
$databasename = "employee";

$conn = mysqli_connect($host,$user,$password,$databasename);

if(!$conn){
	echo "NOT";
}
echo "Connect";
echo "</br>";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['pass'];
$repassword = $_POST['repass'];

$ins = "INSERT INTO employee (firstname,lastname,mail,password,repassword) VALUES('".$fname."','".$lname."','".$email."','".$password."','".$repassword."');";
//echo $ins = "INSERT INTO employee (firstname,lastname,mail,password,repassword) VALUES ('karthi','prahu','karthi@gm.com','karthi','karthi')";
if(mysqli_query($conn,$ins)){
	echo "Inserted";
	
}else{
echo "no";
}
echo "<h2>Your Input</h2>";
echo "<table style='border:2px solid black'>
<tr>
<th>Title</th>
<th>Values</th>
</tr>
<tr>
<td>FirstName</td>
<td>$fname</td>
</tr>
<tr>
<td>LastName</td>
<td>$lname</td>
</tr>
<tr>
<td>Email</td>
<td>$email</td>
</tr>
<tr>
<td>Password</td>
<td>$password</td>
</tr>
<tr>
<td>Repassword</td>
<td>$repassword</td>
</tr>
</table>";
echo "<input type = 'submit' value= ' Delete'>";
echo "<input type='submit' value = ' Update'>";
mysqli_close($conn);


?>
