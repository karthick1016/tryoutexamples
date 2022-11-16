<?php
$admin = new AllLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/login.css">
     <!-- <style>.error { color: red;}</style> -->
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
                    <input type="text" id="name" name="username" value="<?php echo $_POST['username']; ?>" onchange="userName()" autocomplete="off">
                </div>
                <span><?php $admin->nameValid();?></span>
                <div class="errormessage" id="nameerr"></div>
                <div class="elements">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="<?php echo $_POST['password']; ?>" onchange="password()">
                </div>
                <span><?php $admin->passwordValid();?></span>
                <div class="errormessage" id="passworderr"></div>
                <div class="btn">
                    <button name="sub_btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="<?php "echo BASEURL";?>assets/javascript/validate.js"></script>
</body>
</html>
<?php

$admin->adminLogin();
?>