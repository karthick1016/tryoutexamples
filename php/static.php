<?php
//static method
class Myclass{
	public static function user(){
		echo "Hello";
	}
}
Myclass::user();
$className = 'Myclass';
$className :: user();

//static property 

class animal{
	public static $myAnimal = "Dog";
	public function animalValue(){
		return self::$myAnimal;
	}
}
class dog extends animal{
	public function dogValue(){
		return parent::$myAnimal;
	}
}
print animal::$myAnimal;

$animal = new animal();
print $animal->animalValue();
print $animal->myAnimal;



?>
