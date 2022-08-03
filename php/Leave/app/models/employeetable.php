<?php
class Employeetable extends Database
{
    public function insertData($table,$name,$email,$password,$number)
    {
        $insert = "INSERT INTO $table(Name,Email,Password,Phone_Number) VALUES ('".$name."','".$email."','".$password."','".$number."')";
        $inserting = mysqli_query($this->conn,$insert);
        return $inserting;
    }
    public function displayData($table)
    {
        $sql = "SELECT * FROM $table";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function updateData($table,$id,$name,$email,$password,$number)
    {
        $update = "UPDATE $table SET Name = '$name', Email = '$email',Password = '$password',Phone_Number = '$number' WHERE Id = '$id'";
        $updating = mysqli_query($this->conn,$update);
        return $updating;
    }
}


?>