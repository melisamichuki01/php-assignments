<?php
echo "Hello World\n";
$name = "John";
$age = 18;
$greetings = "Hello, I hope you are good day";
echo strrev($greetings)."\n";
echo strlen($name)."\n";
echo $age;
//strpos(string, string being searched for)
echo strpos("Please call me","call");
//str_replace(string to be replaced, string to replace with, string to be replaced in)
echo str_replace("call","text","Please call me")."\n";

echo "My name is".$name."\n"."I am ".$age." years old\n";

//php math function
// operators

echo(round(pi())."\n");

echo(max(89,90,45,34,56,78)."\n");
$x = 30;
$y = 45;
echo $y%$x."\n";

$x = 40;
$attendance = 30;
if($x>=90){
    echo "You have an A";
}elseif($x>=80){
    echo "You have an B";
}else{
    echo "You have an C";
}
?>