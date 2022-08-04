<?php


class Deletemanager extends Controller
{
    function Index()
    {
        $this->model("employeetable");
        $this->view("admin/deletemanager");
    }
}


?>