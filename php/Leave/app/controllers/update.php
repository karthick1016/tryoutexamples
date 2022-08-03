<?php

class Update extends Controller
{
    function index()
    {
        $this->model("employeetable");
        $this->view("updateEmployee");
    }
}

?>