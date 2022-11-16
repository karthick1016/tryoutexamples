<?php

class Login extends Controller
{
    function index()
    {
        $this->model("allLogin");
        $this->view("login");
    }
}



?>