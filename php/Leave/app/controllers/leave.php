<?php

class Leave extends Controller{

    function index()
    {
        $this->model("employeetable");
        $this->view("admin/leavepage");
    }
}
?>