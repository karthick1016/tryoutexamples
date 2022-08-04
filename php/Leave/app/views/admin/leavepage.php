<?php
$this->view("adminnavbar");
$this->model("counters");
$this->view("adminheader");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="sheet">
        <h2>Leave Page</h2>
        <button class="add_emp"><a href="addleave">Add Leave</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Types</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $displayObj = new Employeetable();
                    $sql = $displayObj->displayData("leaves");
                    $count = 1;
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['SNo']; ?></td>
                    <td><?php echo $row['Types']; ?></td>
                    <td>
                        <button class="operation_btn" name="update_btn"><a href="updateleave?updatedata=<?php echo $row['SNo']; ?>">Update</a></button>
                        <button class="operation_btn" name="delete_btn"><a href="deleteleave?deletedata=<?php echo $row['SNo']; ?>">Delete</a></button>
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