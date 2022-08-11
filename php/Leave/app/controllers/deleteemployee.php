<?php

class Deleteemployee extends Controller
{
    function Index()
    {
        $this->model("employeeData");
        $this->view("admin/deleteemployee");
    }
    
    public function deleteEmployee()
    {
            $delete = new Employeedata();
            $id = $_GET['deletedata'];
            $sql = $delete->deleteEmployee($id,"id");
            // $deleteLogin = $delete->deleteLogin("Employee");
            echo "hi";
           if($sql)
            {

            }
                echo "Not";
    }
}
?>