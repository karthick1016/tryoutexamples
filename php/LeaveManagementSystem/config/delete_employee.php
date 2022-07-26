<?php
include("dbconn.php");

$id = $_GET['deletedata'];
echo $delete = "DELETE from employee where Id='$id'";
// echo "hi";
$result = mysqli_query($conn,$delete);
// echo "hi";
if($result){
    echo "Delete Succesful";
}
echo "Not";
?>