<?php

abstract class Adminlogin extends Database
{
    abstract public function adminLogin();
    abstract public function employeeLogin();
    abstract public function managerlogin();
}


?>