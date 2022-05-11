<?php
//array_change_key_case

$array = array("FiRsT"=>1,"SeCoNd"=>5);
print_r(array_change_key_case($array , CASE_UPPER));
echo "<br>";
//array_chunk

$input_arr = array('a','b','c','d','e');
print_r(array_chunk($input_arr,2));
echo "<br>";
print_r(array_chunk($input_arr,2,true));
echo "<br>";
//array_column
$employees = array(
	array('Id' => 101,'firstname' => 'Karthick','lastname'=>'Prabhu'),
	array('Id' =>102,'firstname' => 'jeeva','lastname'=>'saro'),
	array('Id' =>103,'firstname' => 'kavi','lastname'=>'surya')
);
$first_names = array_column($employees,'firstname');
$last_names = array_column($employees,'lastname','Id');
print_r($first_names);
echo "<br>";
print_r($last_names);
echo "<br>";
//Array_combine

$favourite = array('cricket','football','movies');
$person = array('Dhoni','ronaldo','Vijay');
$c = array_combine($favourite,$person);
print_r($c);
echo "<br>";
//array_count_values
$counts = array(1,1,3,4,5,6,6,7,4,3,3);
print_r(array_count_values($counts));
echo "<br>";
//array_diff_assoc
$array1 = array(1=>"red",2=>"green",3=>"yellow");
$array2 = array(1=>"yellow",2=>"green");
print_r(array_diff_assoc($array1,$array2));
echo "<br>";	
//array_fill_keys()
$a = array_fill(6,3,'carrot');
$b = array_fill(-2,3,'Potato');
print_r($a);
echo "<br>";
print_r($b);
echo "<br>";

//array_flip
$input = array('karthi','prabhu','venki');
print_r($input);
echo "<br>";
//array_intersect_assoc
$array1 = array("a" => "green","b"=>"blue","c"=>"yellow");
$array2 = array("a" => "green","b"=>"blue","c"=>"pink");
print_r(array_intersect_assoc($array1,$array2));
echo "<br>";
//array_intersect_uassoc

$array1 = array("a" => "karthi","b"=>"PRABHU");
$array2 = array("a" => "KARTHI","b"=> "PRABHU");
print_r(array_intersect_uassoc($array1,$array2,"strcasecmp"));

//array_intersect_ukey()

function key_comp($key1,$key2)
{
	if($key1 == $key2){
		return 0;
	}else if($key1>$key2){
		return 1;
	}else{
		return -1;
	}
}
$array1 = array("blue"=>8,"green"=>3,"yellow"=>5);
$array2 = array("grey"=>7,"blue"=>1,"green"=>9);
print_r(array_intersect_ukey($array1,$array2,'key_comp'));
echo "<br>";
var_dump(array_intersect_ukey($array1,$array2,'key_comp')); 	
echo "<br>";
//array_is_list()

echo array_is_list([]);
echo array_is_list(['0'=>'key']);
echo array_is_list(['1'=>'prabhu','0'=>'karthi']);
echo array_is_list(['prabhu'=>'1']);
echo "<br>";
//array_key_exists()

$my_array = array("id"=>100,"name"=>"Karthick");
if(array_key_exists("id",$my_array)){
	echo "ID is Present";
	echo "<br>";
}

//array_key_first()
$my_arr = array('a'=> 1,'b'=>4,'c'=>6);
print_r(array_key_first($my_arr));
echo "<br>";
//array_keys()
$array = array("id","fname","lname","email");
print_r(array_keys($array));
echo "<br>";
//array_map
function multiple($n)
{
	return ($n*($n+1));
}
$nums = [1,2,3,4,5,6,7,8];
print_r(array_map('multiple',$nums));
echo "<br>";
//array_merge_recursive

$array3 = array("color" => array("favourtie" => "red"),5);
$array4 = array(10,"color"=>array("favourite"=>"red","blue"));
print_r(array_merge_recursive($array3,$array4));
echo "<br>";
//array_merge

$array4 = array("color"=>"red",2,4);
$array5 = array("d","e","color"=>"yellow","email"=>"karthi@gm.com","p");
print_r(array_merge($array4,$array5));





?>
