<?php

class Addemployee extends Controller{

    function index()
    {   
        $this->model("employeeData");
        $this->view("admin/addemployee");
    }

    public function insert()
    {
        $insert = new Employeedata();
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['phone'];
        $usertype = $_POST['usertype'];

        
        $sql = $insert->insertEmployee($name,$email,$password,$number,$usertype);
        $logintable = $insert->login_table($name,$password,$usertype);
        
          
        $assocId= $insert->insertId($name);
        
        // echo "hi";
       
       if($sql)
       {
        if($logintable)
        {
            if($assocId)
            {
                echo "inserted";
         header("location:http://localhost/Leave/public/employee");
            }

        }
       }
    }
}
?>