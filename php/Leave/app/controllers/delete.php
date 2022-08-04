<?php

class Delete extends Controller
{
    function Index()
    {
        $this->model("employeetable");
        $this->view("admin/deleteemployee");
    }
}
?>