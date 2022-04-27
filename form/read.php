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

$results = mysqli_query($conn,"SELECT * FROM employee");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Page</title>
	</head>
	<body>
		<div>
			<h2>Users</h2>
			<table class="table">
			<thead>
				<tr>
				<th>ID</th>
				<th>UserName</th>
				<th>Email</th>
				<th>Password</th>
				<th>Repassword</th>
				</tr>
			</thead>
			<?php while($row = mysqli_fetch_array($results)) { ?>
			<tr>
				<td><?php echo $row['ide']?></td>
				<td><?php echo $row['uname']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['password']?></td>
				<td><?php echo $row['repassword']?></td>
				<td><a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a></td>
				<td><a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
			</tr>
			<?php } ?>
			</table>
		</div>
	</body>
</html>
