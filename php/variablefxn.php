<?php
//Variable fxn
function foo(){
	echo "In foo()";
	echo "<br>";
}
function bar($arg = ''){
	echo "Hello $arg";
	echo "<br>";
}
function echoit($string){
	echo "$string";
	echo "<br>";	
}
$func = 'foo';
$func();

$func = 'bar';
$func('Karthick');

$func = 'echoit';
$func('prabhu');
?>

<?php
//Variable method

class Foo{
	function Variable()
	{
		$name = 'Bar';
		$this->$name();
	}
	function Bar(){
		echo "This is a Bar";
	}
}
$foo = new Foo();
$func = "Variable";
$foo->$func();

?>
	
<?php
class Foo{
	static $variable = 'My Property';
	static function Variable(){
		echo "Method called";
	}
}
echo Foo::$variable;
$variable = "Variable";
Foo::$variable();
?>



<?php
class Foo{
	static function bar(){
		echo "bar";
	}
	function base(){
		echo "base";
	}
}
$func = array("Foo","bar");
$func();
$func = array(new Foo,"base");
$func();
?>
