<?php

class Demo{
	public $msg = "Hello World";
	
	public function print(){
		echo $this -> msg; 
		echo "</br>";
	}
}
$obj = new Demo();
$obj->print();



class MyClass{
	public $message = "Hii Karthick";
	
	public function display(){
		echo $this->message;
		echo "</br>";
	}
}
$obj = new MyClass();
$obj->display();
var_dump($obj);

?>