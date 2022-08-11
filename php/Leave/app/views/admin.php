<?php
session_start();
$loginAdmin = new Logincode();
$loginAdmin->login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/login.css">
</head>
<body>
<div class="container"> 
        <form action="" method="POST">
            <div class="login_head">
                <h4>Admin Panel</h4>
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
                    <a href="home">Go to Login Page</a>
                </div>
            </div>
        </form>
    </div>
    <?php
    ?>
</body>
</html>
