<?php

$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];
$number = $_GET['number'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update_Manager</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/addpage.css">
</head>
<body>
<div class="container">
        <h2>Update Manager</h2>
        <form action="" method="POST">
            <div class="elements">
                <label for="name">Name</label>
                <input type="text" value="<?php echo "$name"; ?>" name="name" id="name" onchange="nameValid()">
            </div>
            <div class="errormessage" id="nameerr"></div>
            <div class="elements">
                <label for="email">Email</label>
                <input type="email" value="<?php echo "$email"; ?>" name="email" id="email" onchange="emailValid()">
            </div>
            <div class="errormessage" id="emailerr"></div>
            <div class="elements">
                <label for="password">Password</label>
                <input type="password" value="<?php echo "password"; ?>" name="password" id="password" onchange="passValid()">
            </div>
            <div class="errormessage" id="passworderr"></div>
            <div class="elements">
                <label for="phone">Phone_Number</label>
                <input type="tel" value="<?php echo "$number"; ?>" name="phone" id="phone" onchange="numberValid()">
            </div>
            <div class="errormessage" id="numbererr"></div>
            <div class="elements">
                <label for="">Assign Employee</label>
                <select name="assign_emp" id="assign_emp">
                    <option value="">Select Employee</option>
                        <?php
                             $displayObj = new ManagerData();
                             $sql = $displayObj->dropDown();
                             $count = 0;
                             while($row = mysqli_fetch_array($sql)){

                        ?>
                       <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?>,<?php echo $row['id']; ?></option>
                        <?php
                        $count++;
                            }
                     ?>
                    </option>
                </select>
            </div>
            <div>
                <button class="btn">Submit</button>
            </div>
        </form>
    </div>
    <script src="<?php "echo BASEURL";?>assets/javascript/validate.js"></script>
    <?php
        
        $update = new UpdateManager();
        $update->update();
        
    ?>
</body>
</html>