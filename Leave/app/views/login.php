<?php
$login = new AllLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/login.css">
    <style></style>
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
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="<?php echo $_POST['email']; ?>" onchange="emailValid()">
                </div>
                    <span><?php $login->emailValid();?></span>
                <div class="errormessage" id="emailerr"></div>
                <div class="elements">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="<?php echo $_POST['password']; ?>" onchange="passValid()">
                </div>
                <span><?php $login->passwordValid();?></span>
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

$login->employeeLogin();
$login->managerlogin();
?>