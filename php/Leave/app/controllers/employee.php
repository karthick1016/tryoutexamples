<?php

class Employee extends Controller{

    function index()
    {
        $this->model("employeetable");
        $this->view("admin/employeepage");
    }
}
?>