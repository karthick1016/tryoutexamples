<?php
class MyClass{
	public $var = "Hello World";
	
	public function display(){
		echo $this -> var; 
		echo "</br>";
	}
}
$obj = new MyClass();
$obj->display();

class Demo{
	public $msg = "I am Karthick";
	
	public function message(){
		echo $this->msg;
		echo "</br>";
	}
}
$obj = new Demo();
$obj->message();
var_dump($obj);
//property & method same name
class Foo
{
	public $bar = "property";
	
	public function bar(){
		return 'methd';
	}
}
$obj = new Foo();
echo $obj->bar,$obj->bar();
//anonymous function
class Foos
{
	public $bar;
	
	public function __construct(){
		$this->bar =  function(){
			return 42;
		};
	}
}
$obj = new Foos();

echo ($obj->bar)();




?>

