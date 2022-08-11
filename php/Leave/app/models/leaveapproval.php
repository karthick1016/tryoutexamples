<?php

class Leaveapproval extends Database
{
    public function display($name)
    {
        $query = "SELECT leaveapprove.id,leaveapprove.fromdate,leaveapprove.todate,leaveapprove.leavetypes,leaveapprove.days,leaveapprove.description,leaveapprove.status,employee.name,manager.managername
        FROM leaveapprove,employee,manager WHERE employee.id = leaveapprove.employeeid AND employee.managerid = manager.managerid AND manager.managername = '$name' "; 
        $leaveapproval = mysqli_query($this->conn,$query);
        return $leaveapproval;  
    }

    public function approveUpdate($id,$status)
    {
        $insert = "UPDATE leaveapprove SET status = '$status' WHERE id = '$id'";
        $sql = mysqli_query($this->conn,$insert);
        return $sql;
    }

    public function delete($id)
    {
        $delete = "DELETE FROM leaveapprove WHERE id = '$id'";
        $deleteData = mysqli_query($this->conn,$delete);
        return $deleteData;
    }
    public function leaveDetails($name)
    {
        $leavedetails = "SELECT leaveapprove.id,leaveapprove.fromdate,leaveapprove.todate,leaveapprove.leavetypes,leaveapprove.days,leaveapprove.description,leaveapprove.status,
        manager.managername,employee.name FROM leaveapprove,employee,manager WHERE employee.id = leaveapprove.employeeid AND manager.managerid = employee.managerid AND 
        manager.managername = '$name'";
        $details = mysqli_query($this->conn,$leavedetails);
        return $details;
    }
}



?>