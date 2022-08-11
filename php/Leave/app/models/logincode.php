<?php
session_start();
class Logincode extends Database
{
    public function login()
    {
        
        if(isset($_POST['login_btn']))
        {
            
            $username = mysqli_real_escape_string($this->conn,$_POST['username']);
            $password = mysqli_real_escape_string($this->conn,$_POST['password']);
            
            $sql = "SELECT * FROM admin WHERE name = '$username' AND password = '$password'";
            
            $result = mysqli_query($this->conn,$sql);
            
            if(mysqli_num_rows($result)>0)
            {
               
                foreach($result as $data)
                {
                    
                    echo $username = $data['name'];
                    echo $usertype = $data['usertype'];
                }
                $_SESSION['auth'] = true;
                $_SESSION['auth_role'] = $usertype;
                $_SESSION['auth_user'] = [
                    'username'=>$username,
                    'usertype'=>$usertype
                ];
                if($_SESSION['auth_role'] == 'admin')
                {
                    header("location:http://localhost/Leave/public/adminpage");
                }
                else{
                    header("location:http://localhost/Leave/public/admin");
                    exit(0);
                }
            }
        }
        // else
        // {
        //     header("location:http://localhost/Leave/public/admin");
        //     exit(0);
        // }
    }
}

?>