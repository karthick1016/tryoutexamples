<?php

abstract class Abstractmodel extends Database
{
    abstract protected function inserting($name,$email,$password,$number): string;
    public function display($id,$table,$colName){
    {
        if(!empty($id)){
            $result = $this->conn->query("SELECT * FROM $table WHERE $colName = '$id'");  
        }
        else{
            $result = $this->conn->query("SELECT * FROM $table");
        }
        return $result;
    }
    }
    abstract protected function updating($id,$name,$email,$password,$number,$Sno):string;
    abstract protected function deleting($id,$Sno): string;
    public function deletingAssoc($id, $Sno): string{
        $deleteAssoc = mysqli_query($this->conn,"DELETE from assoc WHERE $Sno = '$id'");
        return $deleteAssoc;
    }
    abstract protected function display_logindata($name);
    abstract protected function pagination();
    abstract protected function page();
}



?>