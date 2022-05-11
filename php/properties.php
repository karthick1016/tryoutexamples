<?php
class User{
	public int $id;
	
	public function __construct(int $id){
		$this->id =$id;
	}
}
$user =  new User(1234);
var_dump($user->id);


class Shape{
	public int $numberOfSides;
	public string $name;
	
	public function setNumberOfSides(int $numberOfSides):void{
		$this->numberOfSides = $numberOfSides;
	}
	public function setName(String $name):void{
		$this->name = $name;
	}
	public function getNumberOfSides():int{
		return $this->numberOfSides;
	}
	public function getName(): string{
		return $this->name;
	}
}
$triangle = new Shape();
$triangle -> setName("triangle");
$triangle -> setNumberOfSides(3);
var_dump($triangle -> getName());
var_dump($triangle -> getNumberOfSides());

$circle = new Shape();
$circle -> setName("circle");
$circle -> setNumberOfSides(0);
var_dump($circle->getName());
var_dump($circle->getNumberOfSides());

//constant class
//Access outside the class
class code{
	const greeting = "Welcome My World";
}
echo code::greeting;


?>

<?php

const one = 1;
class calc{
	const two = one*2;
	const three = one + self::two;
	const sentence = "The value of three is".self::three;
}


?>


















