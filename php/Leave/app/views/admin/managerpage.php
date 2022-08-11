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
        <button class="add_emp"><a href="addmanager">Add Manager</a></button>
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
                    $displayObj = new ManagerData();
                    $sql = $displayObj->displayManager();
                    $count = 1;
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['managerid'];  ?></td>
                    <td><?php echo $row['managername'];  ?></td>
                    <td><?php echo $row['email'];  ?></td>
                    <td><?php echo md5($row['password']);  ?></td>
                    <td><?php echo $row['phonenumber'];  ?></td>
                    <td>
                        <button class="operation_btn" name="update_btn"><a href="updatemanager?updateManager=<?php echo $row['managerid']; ?>
                        &name=<?php echo $row['managername']; ?>&email=<?php echo $row['email']; ?>&password=<?php echo $row['password']; ?>
                        &number=<?php echo $row['phonenumber']; ?>">Update</a></button>
                        <button class="operation_btn" name="delete_btn"><a href="deletemanager?deleteManager=<?php echo $row['managerid']; ?>">Delete</a></button>

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