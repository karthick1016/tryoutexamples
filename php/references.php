<?php
//Pass by reference
function foo(&$var){
	echo ++$var;
}
$a = 7;
foo($a);


?>

<?php
class foo{
	public $value = 42;
	
	public function &getValue(){
		return $this->value;
	}
}
$obj = new foo;
$myValue = &$obj->getValue();
$obj->value
echo $myValue;
?>

