<?php

class Employee extends Controller{

    function index()
    {
        $this->view("adminnavbar");
        $this->view("adminheader");
        $this->model("employeetable");
        $this->view("employeepage");
    }
}
?>