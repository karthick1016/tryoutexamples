<?php
include("dbconn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update_Employee</title>
    <link rel="stylesheet" href="../assets/css/addemployee.css">
</head>
<body>
<div class="container">
        <h2>Add Employee</h2>
        <form action="" method="POST">
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
      $id = $_GET['updatedata'];
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $phone = $_POST["phone"];

        echo $update = "UPDATE employee SET Name = '$name',Email = '$email',Password = '$password',Phone_Number = '$phone' where Id=$id";
        // echo"<br>";
        // // echo $update = "UPDATE employee set Name = 'karthi',Email = 'prahg@gmail.com',Password = 'prabhu',Phone_number = '8765432110' where S.No = 11";
        // echo "<br>";
        // echo "hi";
        // echo "<br>";
       $result = mysqli_query($conn,$update);
        if(!$result){
            echo "No";
        }
        echo "Inserted";

    ?>
</body>
</html>