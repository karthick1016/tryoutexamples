<?php

class Updateemployee extends Controller
{
    function index()
    {
        $this->model("employeeData");
        $this->model("employeeallcrud");
        $this->view("admin/updateEmployee");
    }

    
}

?>