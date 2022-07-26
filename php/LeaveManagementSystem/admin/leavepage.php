<?php
include "../config/dbconn.php";
$results = mysqli_query($conn,"SELECT * FROM leavetypes");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leave_Types</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
         include("../includes/adminnavbar.php");
         include("../includes/adminheader.php");
         if(mysqli_num_rows($results)>0){
    ?>
    <div class="leavesheet">
        <h2>Leave Types</h2>
        <button class="add_leave"><a href="../config/add_leave.php">Add Leave</a></button>
        <table class="leave_table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Types</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <?php
                    $i=0;
                    while($row = mysqli_fetch_assoc($results)){
                        $id = $row['Id'];
                        $types  = $row['Types'];
             ?>
             <tr>
                <td><?php echo "$id"; ?></td>
                <td><?php echo "$types"; ?></td>
                <td>
                    <button class="operation_btn"><a href="">Update</a></button>
                    <button class="operation_btn"><a href="">Delete</a></button>
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