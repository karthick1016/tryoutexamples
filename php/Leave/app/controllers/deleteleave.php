<?php


class Deleteleave extends Controller
{
    function Index()
    {
        $this->model("employeetable");
        $this->view("admin/deleteleave");
    }
}


?>