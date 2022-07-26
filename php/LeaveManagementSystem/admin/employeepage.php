<?php
include("../config/dbconn.php");
$results = mysqli_query($conn,"SELECT * FROM employee");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee_Page</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
        include("../includes/adminnavbar.php");
        include("../includes/adminheader.php");
        if(mysqli_num_rows($results)>0){
    ?>
    <div class="sheet">
        <h2>Employees List</h2>
        <button class="add_emp"><a href="../config/add_employee.php">Add Employee</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone-Number</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <?php
                        $i=0;
                        while($row = mysqli_fetch_assoc($results)){
                            $id = $row['Id'];
                            $name = $row['Name'];
                            $email = $row['Email'];
                            $password = $row['Password'];
                            $phone = $row['Phone_Number'];
            ?>
                            <tr>
                                <td><?php echo "$id" ;?></td>
                                <td><?php echo "$name" ;?></td>
                                <td><?php echo "$email" ;?></td>
                                <td><?php echo "$password" ;?></td>
                                <td><?php echo "$phone" ;?></td>
                                <td>
                                <button class = "operation_btn"><a href="../config/update_employee.php?updatedata=<?php echo "$id";?>">Update</a></button>
                                <button class = 'operation_btn'><a href="../config/delete_employee.php?deletedata=<?php echo "$id";?>">Delete</a></button>
                                </td>
                   </tr>
                   <?php
                        $i++;
                }
                   ?>
        </table>
    </div>
    <?php
        }
        else{
            echo "No result Found";
        }
    ?>
</body>
</html>
