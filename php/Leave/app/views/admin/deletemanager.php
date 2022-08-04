<?php

$delete = new Employeetable();
$id = $_GET['deletemanager'];
$sql = $delete->deleteData("manager",$id,"ManagerId");

if($sql)
{
    echo "Deleted";
}
echo "Not";

?>