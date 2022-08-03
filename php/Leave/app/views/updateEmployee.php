<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update_Employee</title>
    <link rel="stylesheet" href="http://localhost/Leave/public/assets/css/addpage.css">
</head>
<body>
<div class="container">
        <h2>Update Employee</h2>
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
    $update = new Employeetable();

        $id = $_GET['updatedata'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['phone'];
        $sql=$update->updateData("employee",$id,$name,$email,$password,$number);
        if($sql)
        {
            echo "Updated";
        }
        echo "Not";
    ?>
</body>
</html>