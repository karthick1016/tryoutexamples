<?php
//Passing function parameters by reference
function greet($name){
	echo $name .= ' is a Good Student';
	echo "<br>";
}
greet('Karthick');
?>

<?php
function intro($name = 'Karthick'){
	return "Myself $name";
}
echo intro();
echo "<br>";
echo intro('Prabhu');
echo "<br>";
echo intro(null);
echo "<br>";
?>

<?php
//Using object as default values

class DefaultCoffeeMaker{
	public function brew(){
		return 'Making Coffee';
		
	}
}
class FancyCofeeMaker{
	public function brew(){
		return 'beautiful Coffee For you';
	}
}
function makecoffee($coffeemaker = new DefaultCoffeeMaker){
	return $coffeemaker->brew();
}
echo makecoffee();
echo "<br>";
echo makecoffee(new FancyCofeeMaker);
echo "<br>";
?>

<?php
function whether($month,$season='Summer')
{
	return "$month Month is a $season Season";
	
}
echo whether('May');
echo "<br>";
?>



<?php
//Default function arguments
function makeYogurt($cont = 'bowl',$flavour='strawberry',$style = 'Greek'){
	return "Making a $cont of $flavour $style Yogurt";
}
echo makeYogurt(style:"natural");
echo "<br>";

?>


<?php
//using ... to access variable arguments

function sum(...$numbers){
	$no = 0;
	foreach($numbers as $n){
		$no+=$n;
	}
	return $no;
}
echo sum(5,10,20);
echo "<br>";
?>

<?php
//Using ... to provide arguments

function add($a,$b){
	return $a + $b;
}
echo add(...[1,3]);
echo "<br>";
$a = [1,7];
echo add(...$a);
echo "<br>";
?>










