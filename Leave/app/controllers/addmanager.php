<?php

class Addmanager extends Controller
{
    function index()
    {
        $this->model("managerData");
        $this->model("managerallcrud");
        $this->view("admin/addManager");
    }
}




?>