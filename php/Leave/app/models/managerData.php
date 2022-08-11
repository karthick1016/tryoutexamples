<?php

class ManagerData extends Database
{
    public function insertManager($name,$email,$password,$number,$usertype)
    {
        $insert = mysqli_query($this->conn,"INSERT INTO manager(managername,email,password,phonenumber,usertype) VALUES ('".$name."','".$email."','".$password."','".$number."','".$usertype."')");
        return $insert;
    }

    public function displayManager()
    {
        $display = mysqli_query($this->conn,"SELECT * FROM manager");
        return $display;
    }

    public function updateManager($id,$name,$email,$password,$number,$Sno)
    {   
        $update = mysqli_query($this->conn,"UPDATE manager SET managername = '$name',email = '$email',password = '$password',phonenumber = '$number' WHERE $Sno = '$id'");
        // echo "hi";
        return $update;
    }

    public function deleteManager($id,$Sno)
    {
        $delete = mysqli_query($this->conn,"DELETE FROM manager WHERE $Sno = '$id'");
        return $delete;
    }

    public function dropDown()
    {
        // echo "SELECT employeename FROM assoc WHERE managerid IS NUll";
        $dropDown = mysqli_query($this->conn,"SELECT id,name FROM employee WHERE managerid IS NUll");
        return $dropDown;
    }

    public function insertUnder($name,$managername)
    {
        $insert = mysqli_query($this->conn,"INSERT INTO undermanager (Name,ManagerName) VALUES ('".$name."','".$managername."')");
        return $insert;
    }

    public function login_table($username,$password,$usertype)
    {
        $login_table = mysqli_query($this->conn,"INSERT INTO login_table(Username,Password,Usertype) VALUES ('".$username."',MD5('".$password."'),'".$usertype."')");
        return $login_table;
    }
    
    public function display_login($name)
    {
        $display_login = mysqli_query($this->conn,"SELECT * FROM manager WHERE ManagerName = '$name'");
        return $display_login;
    }

    public function assignEmployee($table,$managerId,$assignName)
    {
        // echo $assigning = "UPDATE $table SET ManagerId = '$managerId' WHERE id = '$assignName'";
        $assign = mysqli_query($this->conn,"UPDATE $table SET managerid = '$managerId' WHERE id = '$assignName'");
        return $assign;
    }

    public function assocEmployee($table,$managerId,$assignName)
    {
        // echo $assigning = "UPDATE $table SET ManagerId = '$managerId' WHERE employeeid = '$assignName'";
        $assign = mysqli_query($this->conn,"UPDATE $table SET managerid = '$managerId' WHERE employeeid = '$assignName'");
        return $assign;
    }
    
}



?>