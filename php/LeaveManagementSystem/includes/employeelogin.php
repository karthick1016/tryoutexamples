<?php
session_start();
include "../config/dbconn.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sqls = "select * from login_table where Email = '".$email."' AND Password = '".$password."'";

    $results = mysqli_query($conn,$sqls);

    $rows = mysqli_fetch_array($results);

    if($rows["usertype"] == "manager"){
        header("location:../admin/managerpage.php");
    }else if($rows["usertype"] == "employee" ){
        header("location:../admin/employeepage.php");
    }
    else{
        header("location:../index.php");
    }
}

?>