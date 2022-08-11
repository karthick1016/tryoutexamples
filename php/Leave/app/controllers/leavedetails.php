<?php

class Leavedetails extends Controller
{
    function Index()
    { 
        $this->model("leaveapply");
        $this->view("employee/leavedetails");
       
    }
}

?>