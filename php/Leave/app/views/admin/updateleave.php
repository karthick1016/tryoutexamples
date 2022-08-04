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
                <label for="types">Types</label>
                <input type="text" name="types" id="types">
            </div>
            <div>
                <button class="btn" name="sub_btn">Submit</button>
            </div>
        </form>
    </div>
    <?php
        $updateLeave = new Employeetable();

        $id = $_GET['updatedata'];
        $types = $_POST['types'];

        $sql=$updateLeave->updateLeave("leaves",$id,$types,"SNo");
        if($sql)
        {
            echo "Update";
        }
        echo "No";
?>
</body>
</html>