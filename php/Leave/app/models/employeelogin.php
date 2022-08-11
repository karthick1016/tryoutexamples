<?php

class Employeelogin extends Database
{
    public function employeelogin()
    {
        if(isset($_POST['login_btn']))
        {
            $username = mysqli_real_escape_string($this->conn,$_POST['username']);
            $password = mysqli_real_escape_string($this->conn,$_POST['password']);

            $sql = "SELECT * from employee WHERE name = '$username' AND password = '$password'";

            $result = mysqli_query($this->conn,$sql);
            // echo "hi";
            // var_dump(mysqli_num_rows($result));
            if(mysqli_num_rows($result)>0)
            {
                foreach($result as $data)
                {
                    echo $employeeid = $data['id'];
                    echo $username = $data['name'];
                    echo $usertype = $data['usertype'];
                }
                $_SESSION['auth'] = true;
               $_SESSION['auth_id'] = $employeeid;
                $_SESSION['auth_role'] = $usertype;
                $_SESSION['auth_user'] = [
                    'id'=>$employeeid,
                    'name' =>$username,
                    'usertype'=>$usertype
                ];
                if($_SESSION['auth_role'] == 'Employee')
                {
                     header("location:http://localhost/Leave/public/employeedashboard");
                }
                else{
                    header("location:http://localhost/Leave/public/home");
                }
            }
        }
    }

    public function managerLogin()
    {
        if(isset($_POST['login_btn']))
        {
            $username = mysqli_real_escape_string($this->conn,$_POST['username']);
            $password = mysqli_real_escape_string($this->conn,$_POST['password']);

            $sql = "SELECT * from manager WHERE managername = '$username' AND password = '$password'";

            $result = mysqli_query($this->conn,$sql);
            // echo "hi";
            var_dump(mysqli_num_rows($result));
            if(mysqli_num_rows($result)>0)
            {
                foreach($result as $data)
                {
                    echo $employeeid = $data['managerid'];
                    echo $username = $data['managername'];
                    echo $usertype = $data['usertype'];
                }
                $_SESSION['auth'] = true;
                $_SESSION['auth_id'] = $employeeid;
                $_SESSION['auth_role'] = $usertype;
                $_SESSION['auth_user'] = [
                    'id'=>$employeeid,
                    'name' =>$username,
                    'usertype'=>$usertype
                ];
                if($_SESSION['auth_role'] == 'Manager')
                {
                    header("location:http://localhost/Leave/public/managerdashboard");
                }
                else{
                    header("location:http://localhost/Leave/public/home");
                }
            }
        }
    }
}








?>