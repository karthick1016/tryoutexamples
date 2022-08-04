<?php

class Manager extends Controller
{
    function index()
    {
        $this->model("employeetable");
        $this->view("admin/managerpage");
    }
}




?>