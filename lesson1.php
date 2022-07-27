<?php

//swith cases

//The switch statement is similar to a series of IF statements on the same expression.
//In many occasions, you may want to compare the same variable (or expression) with many different values,
//and execute a different piece of code depending on which value it equals to

//remember the if statement syntax
//if(condition) {
    //code to be executed if condition is true}

//switch case syntax is
//switch (expression){
    //case value1:
        //code to be executed if expression equals value1
        //break;
    //case value2:
        //code to be executed if expression equals value2
        //break;
    //case value3:
        //code to be executed if expression equals value3
        //break;
    //default:
        //code to be executed if expression does not match any of the cases
        //break;
//}

// You can have as many cases as you want just like in a nested if statement.
// if (expression) {
    // code to be executed if expression is true
    //} elseif (expression) {
        //code to be executed if first expression is false
    //} elseif (expression) {
        //code to be executed if first expression is true
    //} //else {
        //code to be executed if all expressions are false
    //}

// switch case example

$grade = 100;

// lets create a grading system

switch($grade) {
    case ($grade >= 90):
        echo "You got an A";
        break;
    case ($grade >= 80 && $grade < 89):
        echo "You got an B";
        break;
    case ($grade >= 60 && $grade < 79):
        echo "You got an C";
        break;
    case ($grade >= 50 && $grade < 59):
        echo "You got an D";
        break;
    default:
        echo "You failed";
        break;
}

// the if statement equivalent would be

if ($grade >= 90) {
    echo "You got an A";
} elseif ($grade >= 80 && $grade < 89) {
    echo "You got an B";
} elseif ($grade >= 60 && $grade < 79) {
    echo "You got an C";
} elseif ($grade >= 50 && $grade < 59) {
    echo "You got an D";
} else {
    echo "You failed";
}

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


?>