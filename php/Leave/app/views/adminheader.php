<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="http://localhost/Leave/public/assets/css/adminpage.css">
</head>
<body>
<div class="page-title">
	
	<div>
		<h4 class="page-heading">DashBoard</h4>
		<ul class="small-title">
			<li><a href="adminpage.php">Home</a></li>
			<li><span>Admin's DashBoard</span></li>
		</ul>
		<!-- <div class="login_img">
			<img src="../assets/images/login_image.jpg" alt="Login">
		</div> -->
		<!-- <div class="login_name">
		<!-- <?php
				// echo $_SESSION['auth_user']['username'];
			?> -->
		</div> 
	</div>
</div>
<div class="boxes">
	<div class="box">
		<div class="right_side">
			<div class="box_topic">
				Available Leave Types
				<!-- <?php
					// $query = "SELECT * FROM leaves";
					// $query_run = mysqli_query($conn,$query);
					// if($total = mysqli_num_rows($query_run))
					// {
					// 	echo '<h2>'.$total.'</h2>';
					// }
					// else{
					// 	echo '<h2>No Data</h2>';
					// }
   				?> -->
			</div>
			<div class="indicator"><span class="text">Leave Types</span></div>
		</div>
	</div>
	<div class="box">
		<div class="right_side">
			<div class="box_topic">
				Available Managers
				<!-- <?php
					// $manager_query = "SELECT * FROM manager";
					// $manager_query_run = mysqli_query($conn,$manager_query);
					// if($manager_total = mysqli_num_rows($manager_query_run))
					// {
					// 	echo '<h2>'.$manager_total.'</h2>';
					// }
					// else{
					// 	echo '<h2>No Data</h2>';
					// }
   				?> -->
			</div>
			<div class="indicator"><span class="text">Managers</span></div>
		</div>
	</div>
	<div class="box">
		<div class="right_side">
			<div class="box_topic">
				Registered Employees
				<!-- <?php
					// $employee_query = "SELECT * FROM employee";
					// $employee_query_run = mysqli_query($conn,$employee_query);
					// if($employee_total = mysqli_num_rows($employee_query_run)){
					// 	echo '<h2>'.$employee_total.'</h2>';
					// }
					// else{
					// 	echo '<h2>No Data</h2>';
					// }
				?> -->
			
					
			</div>
			<div class="indicator"><span class="text">Active Employees</span></div>
		</div>
	</div>
</div>

</body>
</html>