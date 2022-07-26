<?php

include "../config/dbconn.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from admin where Name = '".$username."' AND Password = '".$password."'";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);
    if($row["usertype"] == "admin"){
        header("location:../admin/adminpage.php");
    }else{
        header("location:../admin/adminlogin.php");
    }
}
?>