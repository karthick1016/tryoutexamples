<?php
class BaseClass{
	function __construct(){
		print "Baseclass constructor";
		print "</br>";
	}
}
class SubClass extends BaseClass {
	function __construct(){
		parent::__construct();
		print "Subclass constructor";
		print "</br>";
	}
}
class OtherSubClass extends BaseClass {

}
$obj = new BaseClass();
$objs = new SubClass();
$objt = new OtherSubClass();

$obj->construct();
$objs -> construct();


//constructor Arguments

class Name{
	public string $firstName;
	public string $lastName;
	
	public function __construct(string $firstName , string $lastName = "null"){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}
}
$candidate1 = new Name("karthick","prabhu");
$candidate2 =  new Name("saravana");
$candidate3 = new Name("kavi","prakash");
$candidate1->__construct();
$candidate2->__construct();

?>
