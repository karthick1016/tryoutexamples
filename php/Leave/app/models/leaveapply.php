<?php

class LeaveApply extends Database
{
    public function dropDown()
    {
        $result = mysqli_query($this->conn,"SELECT * FROM leaves");
        return $result;
    }


    public function insertData($table,$fromDate,$toDate,$leavetypes,$days,$description,$name,$id)
    {
        // echo "hi";
      $sql = "INSERT INTO $table(fromdate,todate,leavetypes,days,description,employeename,employeeid) VALUES ('".$fromDate."','".$toDate."','".$leavetypes."','$days','".$description."','".$name."','$id')";
      $inserting = mysqli_query($this->conn,$sql);
    //   echo "hi";
      return $inserting;
    }

   
    public function leaveDetails($name)
    {
        $leavedetails = "SELECT leaveapprove.fromdate,leaveapprove.todate,leaveapprove.leavetypes,leaveapprove.days,leaveapprove.description,leaveapprove.status,
        manager.managername,employee.name FROM leaveapprove,employee,manager WHERE employee.id = leaveapprove.employeeid AND manager.managerid = employee.managerid AND 
        employee.name = '$name'";
        $details = mysqli_query($this->conn,$leavedetails);
        return $details;
    }
}



?>