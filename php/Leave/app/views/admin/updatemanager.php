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
        $updateManager = new Employeetable();
        
        $managerId = $_GET['updateManager'];
        $managerName = $_POST['name'];
        $managerEmail = $_POST['email'];
        $managerPassword = $_POST['password'];
        $managerNumber = $_POST['phone'];
        $managerSql = $updateManager->updateData("manager",$managerId,$managerName,$managerEmail,$managerPassword,$managerNumber,"ManagerId");
        if($managerSql)
        {
            echo "Update";
        }echo "Not";

    ?>
</body>
</html>