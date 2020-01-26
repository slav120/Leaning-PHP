<?php

// defining a function 
function greetLearner()
{
  echo "Hello, Learner!\n";
  echo "I hope you're enjoying PHP!\n";
  echo "Love, Codecademy";
}


function greetLearner()
{
  echo "Hello, Learner!\n";
  echo "I hope you're enjoying PHP!\n";
  echo "Love, Codecademy";
}

greetLearner(); 
/*
Prints:
Hello, Learner!
I hope you're enjoying PHP!
Love, Codecademy
*/


function countdown() 
{
  echo "4, 3, 2, 1, ";
  return "blastoff!";
}

$return_value = countdown(); // Prints: 4, 3, 2, 1, 
echo $return_value; // Prints: blastoff!


<?php
// Write your code below:
function increaseEnthusiasm($str_param)
{
  return $str_param . "!";
}

function repeatThreeTimes($str_param)
{
  return $str_param . $str_param . $str_param;
}  

echo increaseEnthusiasm("oh");

echo repeatThreeTimes("wow");

echo increaseEnthusiasm(repeatThreeTimes("hai"));
// prints oh!wowwowwowhaihaihai!

<?php
// Write your code below:
function calculateArea($height, $width) 
{
  return $height * $width; 
}
echo calculateArea(5, 5);  //prints 25 

function calculateVolume($height, $width, $volume)
{
  return $height * $width * $volume; 
}
echo calculateVolume(5, 5, 5);  //prints 125


// Write your code below:
function calculateTip($total, $tip = 20)
{
  return $total * (1 + $tip/100);
}
/*
// An Alternate Version:
function calculateTip($total, $tip = 20)
{
  return $total + ($total * $tip/100);
}
*/

echo calculateTip(100, 25);
echo "\n";
echo calculateTip(100); 
echo "\n";
echo calculateTip(65, 15); 
// returns 125 , 120 , 74.75



function addX ($param)
{
  $param = $param . "X";
  echo $param;
};
$word = "Hello";
addX($word); // Prints: HelloX
echo $word; // Prints: Hello



$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

// Write your code below:
function convertToQuestion(&$str)
{
  $str = "Do you think " . $str . "?\n";
}

convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);

echo $string_one;
echo $string_two;
echo $string_three;
// prints        Do you think you have teeth?
// Do you think toads are nice?
// Do you think brown is my favorite color?

