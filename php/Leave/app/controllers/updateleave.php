<?php

class UpdateLeave extends Controller
{
    function index()
    {
        $this->model("employeetable");
        $this->view("admin/updateleave");
    }
}


?>