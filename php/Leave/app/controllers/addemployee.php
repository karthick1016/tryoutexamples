<?php

class Addemployee extends Controller{

    function index()
    {   
        $this->model("employeetable");
        $this->view("addemployee");
    }
}
?>