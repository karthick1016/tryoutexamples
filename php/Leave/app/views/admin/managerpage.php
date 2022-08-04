<?php
$this->view("adminnavbar");
$this->model("counters");
$this->view("adminheader");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager</title>
</head>
<body>
    <div class="sheet">
        <h2>Manager List</h2>
        <button class="add_emp"><a href="">Add Manager</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone_Number</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $displayObj = new Employeetable();
                    $sql = $displayObj->displayData("manager");
                    $count = 1;
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['ManagerId'];  ?></td>
                    <td><?php echo $row['Name'];  ?></td>
                    <td><?php echo $row['Email'];  ?></td>
                    <td><?php echo $row['Password'];  ?></td>
                    <td><?php echo $row['Phone_Number'];  ?></td>
                    <td>
                        <button class="operation_btn" name="update_btn"><a href="updatemanager?updateManager=<?php echo $row['ManagerId']; ?>">Update</a></button>
                        <button class="operation_btn" name="delete_btn"><a href="deleteManager?deletemanager=<?php echo $row['ManagerId']; ?>">Delete</a></button>
                    </td>
                </tr>
                <?php
                    $count++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>