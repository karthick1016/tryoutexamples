<?php
$watch = 2500;

if($watch < 3000){
echo "I will buy this";
echo "</br>";  
}
?>


<?php
$saree = 1600;

if($saree < 1000) {
echo "I will Buy this";
echo "</br>";  
} else {
echo "I will not buy this";
echo "</br>";  
}

?>


<?php
$beast = "NotFull";
$kgf = "Full";

if($beast == "Full"){
echo "Go to KGF";
}
else if ($beast == "Notful"){
echo "Go to Beast";
}
else {
echo "Go to Home";
echo "</br>";  
}	
?>

<?php
$marks = 63;

if($marks<=40){
echo "Fail";
}else if($marks>=41 && $marks<=50){
echo "E grade";
}else if($marks>=51 && $marks<=60){
echo "D Grade";
}else if($marks>=61 && $marks<=70){
echo "C Grade";
}else if($marks>=71 && $marks <=80){
echo "B Grade";
}else if($marks>= 81 && $marks<=90){
echo "A Grade";
}else if($marks>=91 && $marks<=100){
echo "O Grade";
}else{
echo "Invalid";
}
?>

<?php
$dept = "EEE";

switch($dept)
{
case "MECH":
echo "Mechanical Engineering";
break;

case "EEE":

echo "Electrical And Electronics Engineering";
break;

case "ECE":

echo "Electronics and Communication Engineering";
break;

case "CSE":

echo "Computer Science Engineering";
break;

case "IT":

echo "Information Technology";
break;

default:
echo "Wrong Choice";
break;
}
?>


























