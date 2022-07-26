<?php
include("../config/dbconn.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add-Employee</title>
    <link rel="stylesheet" href="../assets/css/addemployee.css">
</head>
<body>
    <div class="container">
        <h2>Add Employee</h2>
        <form method="POST">
            <div class="elements">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="elements">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="elements">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="elements">
                <label for="phone">Phone_Number</label>
                <input type="tel" name="phone" id="phone">
            </div>
            <div>
                <button class="btn">Submit</button>
            </div>
        </form>
    </div>
    <?php
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        
       $sql = "INSERT INTO employee(Name,Email,Password,Phone_Number) VALUES ('".$name."','".$email."','".$password."','".$phone."');";
        // echo "hi";
        if(mysqli_query($conn,$sql)){
            echo "insert"; 
        }    
        mysqli_close($conn);

    ?>
</body>
</html>