<?php
class Employeedata extends Database
{
    public function insertEmployee($name,$email,$password,$number,$usertype)

    {
        $inserting = mysqli_query($this->conn,"INSERT INTO employee (name,email,password,phonenumber,usertype) VALUES ('".$name."','".$email."','".$password."','".$number."','".$usertype."')");
        return $inserting;
    }

    public function displayEmployee()
    {
        $result = $this->conn->query("SELECT * FROM employee");
        return $result;
    }

    public function updateEmployee($id,$name,$email,$password,$number,$Sno)
    {
        $update = mysqli_query($this->conn,"UPDATE employee SET name = '$name', email = '$email',password = MD5('$password'),phonenumber = '$number' WHERE $Sno = '$id'");
        return $update;
    }

    public function deleteEmployee($id,$Sno)
    {
        echo "hlo";
        $delete = mysqli_query($this->conn,"DELETE from employee where $Sno = '$id'");
        return $delete;
    }

    // public function deleteLogin($usertype)
    // {
    //     $delete = mysqli_query($this->conn,"DELETE from login_table WHERE username = '$usertype'");
    //     return $delete;
    // }

    public function login_table($username,$password,$usertype)
    {
        $login_table = mysqli_query($this->conn,"INSERT INTO login_table(username,password,usertype) VALUES ('".$username."',MD5('".$password."'),'".$usertype."')");
        return $login_table;
    }

    public function updateLogin($username,$password,$usertype)
    {
        $updateLogin = mysqli_query($this->conn,"UPDATE login_table SET username = '$username',password = MD5('$password') WHERE usertype = '$usertype'");
        return $updateLogin;
    }

    public function display_logindata($name)
    {
        $display_login = "SELECT * FROM employee WHERE Name = '$name'" ;
        $result = mysqli_query($this->conn,$display_login);
        return $result;
    }

    // public function insertassoc($name)
    // {
    //      // echo "INSERT INTO assoc(employeename) VALUES ('".$name."')";
    //     $assoc = mysqli_query($this->conn,"INSERT INTO assoc(employeename) VALUES ('".$name."')");
    //     return $assoc;
    // }

    public function insertId($name)
    {
       $ins = "INSERT INTO assoc(employeeid) SELECT id from employee WHERE name = '$name'";
        $insertId = mysqli_query($this->conn,$ins);
        return $insertId;
    }
}


?>