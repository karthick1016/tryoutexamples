<?php

class Home extends Controller
{
    function index()
    {
        $this->model("employeelogin");
        $this->view("home");
        
    }
}

?>