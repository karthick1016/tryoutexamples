<?php
$season = array("summer","winter","autumn","spring");
foreach($season as $elements){
	echo "$elements";
	echo "</br>";
}
?>

<?php
$employee = array (  
        "Name" => "Alex",  
        "Email" => "alex_jtp@gmail.com",  
        "Age" => 21,  
        "Gender" => "Male"  
    );  
      
    //display associative array element through foreach loop  
    foreach ($employee as $key => $element) {  
        echo $key . " : " . $element;  
        echo "</br>";   
    }    
?>	
