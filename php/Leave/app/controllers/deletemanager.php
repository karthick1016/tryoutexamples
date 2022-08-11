<?php


class DeleteManager extends Controller
{
    function Index()
    {
        $this->model("managerData");
        $this->view("admin/deletemanager");
    }

    public function deleteManager()
    {
        $delete = new ManagerData();
        $id = $_GET['deleteManager'];
        $sql = $delete->deleteManager($id,"managerid");
        echo "ji";
        if($sql)
        {
            echo "Deleted";
        }
        echo "Not";

    }
}


?>