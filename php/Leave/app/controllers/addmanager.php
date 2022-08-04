<?php

class Addmanager extends Controller
{
    function index()
    {
        $this->model("employeetable");
        $this->view("admin/addManager");
    }
}




?>