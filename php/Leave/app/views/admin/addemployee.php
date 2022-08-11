<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add-Employee</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/addpage.css">
</head>
<body>
    <div class="container">
        <h2>Add Employee</h2>
        <form method="POST">
            <div class="elements">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" onchange="nameValid()">
            </div>
            <div class="errormessage" id="nameerr"></div>
            <div class="elements">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" onchange="emailValid()">
            </div>
            <div class="errormessage" id="emailerr"></div>
            <div class="elements">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" onchange="passValid()">
            </div>
            <div class="errormessage" id="passworderr"></div>
            <div class="elements">
                <label for="phone">Phone_Number</label>
                <input type="tel" name="phone" id="phone" onchange="numberValid()">
            </div>
            <div class="errormessage" id="numbererr"></div>
            <div class="elements">
                <label for="usertype">User-Type</label>
                <select name="usertype" id="usertype">
                    <option value="Employee">Employee</option>
                </select>
            </div>
            <div>
                <button class="btn" name="sub_btn" id="btn" onclick="button()">Submit</button>
            </div>
        </form>
    </div>
    <script src="<?php "echo BASEURL";?>assets/javascript/validate.js"></script>
    <?php
        $insert = new Addemployee();
        $insert->insert();
    ?>
    
</body>
</html>