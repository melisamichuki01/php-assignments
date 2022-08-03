<?php
// Loops

// Everyday, we are faced with repetitive tasks that quite some time
// to complete e.g washing dishes 
// This is similar to coding,there are tasks that are repetitive in nature
// instead of writing the code to do a certain task 
// we can use loops to solve these repetitive tasks
// In PHP, we have the following loop types:

//while - loops through a block of code as long as the specified condition is true
//do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
//for - loops through a block of code a specified number of times
//foreach - loops through a block of code for each element in an array

// let's start with the while loop

// while (condition is true) {
  //code to be executed;
//}

// One place where the while loop is used is when you want to repeat a task a number of times 
// can be ,if you are a player in a game and you want to the game again
// so long as your answer is "yes" you are allowed to continue playing the game
// Note that loops can contain a counter variable 
// to track the number of times it has been repeated

// Example 1
// Say you want to print the numbers from 1 to 10
// this is how you would use loops to print the numbers

$x = 0; //
while ($x < 10) {
    echo $x."\n";
    $x++;// this is a counter that is incremented each time the loop runs
}
// let's try another example where we get the 
// multiplication table of 10

$i = 10;
while ($i <= 10){
  echo $i*10;
  $i-=1;
}



?>