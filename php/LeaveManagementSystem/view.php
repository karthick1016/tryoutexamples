<?php
include "config/dbconn.php";
include "includes/logincode.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<div class="container"> 
        <form action="" method="POST">
            <div class="login_head">
                <h4>Login System</h4>
                <p>Leave Management System</p>
            </div>
            <div class="login_body"> 
                <div class="elements">
                    <label for="username">UserName</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="elements">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="btn">
                    <button name="login_btn">Submit</button>
                </div>
                <div class="link">
                    <a href="admin/adminlogin.php">Go to Admin Login</a>
                </div>
            </div>
        </form>
    </div>
    <?php
        
    ?>
</body>
</html>