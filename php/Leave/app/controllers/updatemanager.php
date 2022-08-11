<?php

class UpdateManager extends Controller
{
    function index()
    {
        $this->model("managerData");
        $this->view("admin/updatemanager");
    }

    public function update()
    {
        $updateManager = new ManagerData();
        
        // $employeeid = $_GET['updatedata'];
        $managerId = $_GET['updateManager'];
        $managerName = $_POST['name'];
        $managerEmail = $_POST['email'];
        $managerPassword = $_POST['password'];
        $managerNumber = $_POST['phone'];
        // echo "<pre>";
        // print_r($_POST);
        
        // exit();
        $assignEmp = $_POST['assign_emp'];

        $managerSql = $updateManager->updateManager($managerId,$managerName,$managerEmail,$managerPassword,$managerNumber,"managerid");
        // echo "hlo";
        $assignEmployee = $updateManager->assignEmployee("employee",$managerId,$assignEmp);
        $assocemployee = $updateManager->assocEmployee("assoc",$managerId,$assignEmp);

        if($managerSql)
        {
            // echo "hi";  

            if($assignEmployee)
            {
                if($assocemployee)
                {
                    echo "update";  
                    header("location:http://localhost/Leave/public/manager");
                }
            }
           
        }echo "Not";
    }
}


?>