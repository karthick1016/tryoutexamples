<?php

function someFunction(){
}
$fxnvariable = 'someFunction';

var_dump(is_callable($fxnvariable,false,$callable_name));

echo $callable_name;

?>

<?php
class someClass{
	function someMethod(){
	}
}

$anobject = new someClass();

$methodvar = array($anobject,'someMethod');

var_dump(is_callable($methodvar,false,$callable_name));

echo $callable_name;

?>
