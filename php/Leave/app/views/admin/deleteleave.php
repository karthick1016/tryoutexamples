<?php

$delete = new Employeetable();
$id = $_GET['deletedata'];
$sql = $delete->deleteData("leaves",$id,"SNo");

if($sql)
{
    echo "Deleted";
}
echo "Not";

?>