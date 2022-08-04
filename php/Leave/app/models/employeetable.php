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
    public function updateData($table,$id,$name,$email,$password,$number,$Sno)
    {
        $update = "UPDATE $table SET Name = '$name', Email = '$email',Password = '$password',Phone_Number = '$number' WHERE $Sno = '$id'";
        $updating = mysqli_query($this->conn,$update);
        return $updating;
    }
    public function deleteData($table,$id,$Sno)
    {
        $delete = "DELETE from $table where $Sno = '$id'";
        $deleting = mysqli_query($this->conn,$delete);
        return $deleting;
    }

    public function addLeave($table,$type)
    {
        $insertLeave = "INSERT INTO $table(Types) VALUES ('".$type."')";
        $insertingLeave = mysqli_query($this->conn,$insertLeave);
        return $insertingLeave;
    }
    public function updateLeave($table,$id,$type,$Sno)
    {
        $updateLeave = "UPDATE $table SET Types = '$type' WHERE $Sno = '$id'";
        $updatingLeave = mysqli_query($this->conn,$updateLeave);
        return $updatingLeave;
    }
    public function deleteLeave($table,$id,$Sno)
    {
        $deleteLeave = "DELETE from $table where $Sno = '$id'";
        $deletingLeave = mysqli_query($this->conn,$deleteLeave);
        return $deletingLeave;
    }
}


?>