<?php
// define('MESSAGE', 'Hello World');
// echo MESSAGE;

// define('TEXT', 'Hi I am PHP',true);
// echo TEXT,"\n";
// echo text,"\n";

// define('intro', 'I am Karthick Prabhu',false);
// echo intro;
// echo INTRO;
// const intro = "I am Karthick";
// echo intro,"\n";
// echo constant("intro");


//Magic Constants
//__LINE__
echo "LINE magic constant\n";
echo "You are at the line of ".__LINE__;
//__FILE__

echo "File magic constants\n";
echo __FILE__;

//__DIR__
echo "DIR magic constants\n";
echo __DIR__;

echo "Example Of Function\n";
function test(){
    echo "The function is". __FUNCTION__."\n";
}
test();

function test_function(){
    echo "Hii\n";
}
test_function();
echo __FUNCTION__;
?>
