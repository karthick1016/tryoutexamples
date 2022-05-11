<?php
class Visible{
	public $public = "Karthi";
	private $private = "Saravana";
	protected $protect = "jeeva";
	
	function msg(){
		echo $this->public;
		echo $this->private;
		echo $this->protect;
	}
}
$obj = new Visible();
	echo $obj->public;
	echo $obj->protect;
	echo $obj->private;
	$obj->msg();

?>

<?php
//Method Visibility
class Myclass{
	public function __contruct(){}
	
	public function myPublic(){
	echo "hello";
	}
	private function myPrivate(){}
	protected function myProtected(){}
	
	function foo(){
		this->myPublic();
		this->myPrivate();
		this->myProtected();
	}
}

?>

<?php
//Constant Visibility

class myClass{
	public const PUBLIC = "public";
	private const PRIVATE = "private";
	protected const PROTECTED = "protected";
	
	public function foos(){
		echo self::PUBLIC;
		echo self::PRIVATE;
		echo self::PROTECTED;
	}
}
$my_cls = new myClass();
myClass::PUBLIC;





























?>
