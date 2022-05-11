<?php

$host = "localhost";
$user = "formdb";
$password = "karthi@10";
$database = "employee_db";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
	echo "Not Connected";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Page</title>
		<style>
			.add_user{
				margin:10px;
				padding:5px;
				background-color:#04AA6D;
			}
			.users{
				color:white;
				
			}
			.table{
				font-family: Arial, Helvetica, sans-serif;
				border-collapse : collapse;
				width:100%;
			}
			.table td, .table th{
				border: 1px solid #ddd;
  				padding: 8px;
			}
			.table td:hover{
				background-color:#ddd;
			}
			.table th{
				padding-top: 12px;
  				padding-bottom: 12px;
  				text-align: left;
  				background-color: #04AA6D;
  				color: white;
			}
			.operation_btn{
				margin:10px;
				padding:5px;
				background-color:#04AA6D;
				color: white;
			}
		</style>
	</head>
	<body>
		
		<div>
			<h2>Users</h2>
			<button class = "add_user"><a href="form.html" class="users">Add User</a></button>
			<table class="table">
			<thead>
				<tr>
				<th>ID</th>
				<th>UserName</th>
				<th>Email</th>
				<th>Password</th>
				<th>Repassword</th>
				<th>Operation</th>
				</tr>
			</thead>
			<?php
				$results = mysqli_query($conn,"SELECT * FROM employee");
				if($results){
					while($row = mysqli_fetch_assoc($results)){
						$id = $row['id'];
						$uname = $row['name'];
						$email = $row['email'];
						$password = $row['password'];
						$repassword = $row['repassword'];
						echo '
						<tr>
						<td>'.$id.'</td>
						<td>'.$uname.'</td>
						<td>'.$email.'</td>
						<td>'.$password.'</td>
						<td>'.$repassword.'</td>
						<td>
						<button class= "operation_btn"><a href="update.php?updatedata='.$id.'" class="users">Update</a></button>
						<button class = "operation_btn"><a href="delete.php?deletedata='.$id.'" class="users">Delete</a></button>
						</td>
						</tr>';
					}
				}
			?>
			</table>
		</div>
	</body>
</html>
