<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "leavemanagementsystem";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
	echo "Not Connected";
}
// echo "conect";





























// class Dbconn{
//     public $host;
//     public $username;
//     public $password;
//     public $database;

//     public function connect(){
//         $this->host = "localhost";
//         $this->username = "root";
//         $this->password = "";
//         $this->database = "leavemanagementsystem";

//         $conn = mysqli_connect($this->host,$this->username,$this->password,$this->database);

//         if(!$conn){
//             $result = "Not Connected";
//         }
//         return $result;
//     }

    
// }

?>