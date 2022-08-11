<?php

class Addmanager extends Controller
{
    function index()
    {
        $this->model("managerData");
        $this->view("admin/addManager");
    }

    public function insertManager()
    {
        $insert = new ManagerData();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['phone'];
        $Name = $_POST['employee_name'];
        $usertype = $_POST['user_type'];
        
        $sql = $insert->insertManager($name,$email,$password,$number,$usertype);
        $login_table = $insert->login_table($name,$password,$usertype);

        if($sql)
        {
                if($login_table)
                {
                    echo "Inserted";
                    header("location:http://localhost/Leave/public/manager");
                }
        }
        echo "No";

    }
}




?>