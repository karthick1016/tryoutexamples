<?php
$this->view("employee/employeenavbar");
$this->view("employee/employeeheader");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="sheet">
        <table class="table">
            <thead>
                <tr>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Number of Days</th>
                    <th>Leave Typee</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Approved By</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $displayObj = new LeaveApply();
                    $sql = $displayObj->leaveDetails($_SESSION['auth_user']['name']);
                    $count = 0;
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['fromdate'];  ?></td>
                    <td><?php echo $row['todate'];  ?></td>
                    <td><?php echo $row['days'];  ?></td>
                    <td><?php echo $row['leavetypes'];  ?></td>
                    <td><?php echo $row['description'];  ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['managername']; ?></td>
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