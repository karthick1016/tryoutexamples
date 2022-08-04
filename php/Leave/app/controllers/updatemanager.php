<?php

class UpdateManager extends Controller
{
    function index()
    {
        $this->model("employeetable");
        $this->view("admin/updatemanager");
    }
}


?>