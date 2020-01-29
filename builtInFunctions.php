<?php 

namespace Codecademy;

$first = "Welcome to the magical world of built-in functions.";
  
$second = 82137012983; 

//Write your code below:
echo gettype($first); // string
echo gettype($second); // integer 
 
echo var_dump($first); // string(51) "Welcome to the magical world of built-in functions."
echo var_dump($second); // int(82137012983)