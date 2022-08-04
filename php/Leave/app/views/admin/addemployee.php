<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add-Employee</title>
    <link rel="stylesheet" href="http://localhost/Leave/public/assets/css/addpage.css">
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
            <div class="elements">
                <label for="usertype">User-Type</label>
                <select name="usertype" id="usertype">
                    <option value="Employee">Employee</option>
                </select>
            </div>
            <div>
                <button class="btn" name="sub_btn">Submit</button>
            </div>
        </form>
    </div>
    <?php
        $insert = new Employeetable();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['phone'];

        $sql = $insert->insertData("employee",$name,$email,$password,$number);

        if($sql){
            echo "inserted";
            header("location:http://localhost/Leave/public/employee");
        }else{
            echo "not";
        }

    ?>
</body>
</html>