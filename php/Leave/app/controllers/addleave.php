<?php

class Addleave extends Controller{

    function index()
    {   
        $this->model("employeetable");
        $this->view("admin/addLeave");
    }
}

?>