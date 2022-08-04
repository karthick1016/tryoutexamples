<?php

class Controller
{
    protected function view($view)
    {
        if(file_exists("../app/views/". $view .".php"))
        {
            include "../app/views/". $view .".php";
        }
        else{
            include "../app/views/404.php";
        }
    }

    protected function model($model)
    {
        if(file_exists("../app/models/". $model .".php"))
        {
            include "../app/models/". $model .".php";
            
            return $model = new $model();
        }
        return false;
    }

    // protected function redirect($page)
    // {
    //     if(file_exists("../app/views/". $page .".php"))
    //     {
    //         header("location:http://localhost/Leave/app/views/admin/ ".$page.".php");
    //     }else{
    //         header("location:../app/views/404.php");
    //     }
    // }
}
?>
