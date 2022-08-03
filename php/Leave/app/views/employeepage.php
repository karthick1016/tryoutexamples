<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee_Page</title>
</head>
<body>
    <div class="sheet">
        <h2>Employees List</h2>
        <button class="add_emp"><a href="addemployee">Add Employee</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th>S.No</th>
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
                    $sql = $displayObj->displayData("employee");  
                    $count = 1;
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['Id'];?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <td><?php echo $row['Password'];?></td>
                    <td><?php echo $row['Phone_Number'];?></td>
                    <td>
                        <button class="operation_btn"><a href="update?updatedata=<?php echo $row['Id']; ?>">Update</a></button>
                        <button class="operation_btn"><a href="">Delete</a></button>
                    </td>
                </tr>
                <?php
                    $count++;
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php
    
    
    ?>
</body>
</html>