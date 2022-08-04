<?php

$delete = new Employeetable();
$id = $_GET['deletedata'];
$sql = $delete->deleteData("employee",$id,"Id");
if($sql)
{
    header("location:http://localhost/Leave/public/employee");
}
echo "Not";

?>