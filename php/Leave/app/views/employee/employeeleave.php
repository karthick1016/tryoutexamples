<?php
$this->view("employee/employeenavbar");
$this->view("employee/employeeheader");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request Leave</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/leaveApply.css">
</head>
<body>
    <div class="container">
        <div class="title-leave">
            <h4>Request Leave</h4>
        </div>
        <div>
            <form action="" method="POST">
                <div class="elements">
                <label for="from_date">From Date (dd-mm-yyyy)</label>
                <input type="date" name="fromdate" id="from_date" min="2022-08-10">
                </div>
                <div class="elements">
                <label for="to_date">To Date (dd-mm-yyyy)</label>
                <input type="date" name="to_date" id="to_date" min="2022-08-10">
                </div>
                <div class="elements">
                <label for="select_leaves">Leave Types</label>
                <select name="leave_types">
                    <option value=""><--SELECT LEAVE TYPE--></option>
                    <?php
                        $dropdown = new LeaveApply();
                        $sql = $dropdown->dropDown();
                        $count = 0;
                        while($row = mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $row['types'];  ?>"><?php echo $row['types']; ?></option>
                    <?php
                        $count++;
                        }
                    ?>
                </select>
                </div>
                <div class="elements">
                <label for="number">Number Of Days</label>
                <input type="number" name="number" id="number">
                </div>
                <div class="elements">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="20" rows="4"></textarea>
                </div>
                <div>
                    <button class="btn"><h3>Apply</h3></button>
                </div>
            </form>
        </div>
    </div>
    <script>
        var date = new Date();
        var tdate = date.getDate();
        var month = date.getMonth()+1;
        if(tdate < 10)
        {
            tdate = '0' + tdate;
        }
        if(month < 10)
        {
            month = '0' + month;
        }
        var year = date.getUTCFullYear();
        var minDate = year + "-" + month + "-" + tdate;
        document.getElementById("from_date").setAttribute('min',minDate);
        document.getElementById("to_date").setAttribute('min',minDate);
       
    </script>
    <?php
        $leaveApply = new Employeeleave();
        $leaveApply->leaveApply();
    ?>

</body>
</html>