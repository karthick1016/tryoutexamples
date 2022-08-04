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
        $insert = new Employeetable();

        $leave = $_POST['types'];

        $sql = $insert->addLeave("leaves",$leave);

        if($sql)
        {
            echo "Inserted";
        }
        echo "Not";



?>
</body>
</html>