<?php

class Employeeleave extends Controller
{
    function Index()
    { 
        $this->model("leaveapply");
        $this->model("employeecode");
        $this->view("employee/employeeleave");
       
    }

    public function leaveApply()
    {
        $insert = new LeaveApply();

        $fromDate = $_POST['fromdate'];
        $toDate = $_POST['to_date'];
        $leave_type = $_POST['leave_types'];
        $days = $_POST['number'];
        $description = $_POST['description'];
        
        $sql=$insert->insertData("leave_apply",$fromDate,$toDate,$leave_type,$days,$description,$_SESSION['auth_user']['name'],$_SESSION['auth_user']['id']);
        $leaveapproval = $insert->insertData("leaveapprove",$fromDate,$toDate,$leave_type,$days,$description,$_SESSION['auth_user']['name'],$_SESSION['auth_user']['id']);
        if($sql)
        {
            if($leaveapproval)
            {
                echo "inserted";
            }   
        }
        echo "not";
    }
}

?>