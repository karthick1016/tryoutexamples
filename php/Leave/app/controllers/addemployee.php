<?php

class Addemployee extends Controller{

    function index()
    {   
        $this->model("employeetable");
        $this->view("admin/addemployee");
        // $this->redirect("employeepage");
    }
}
?>