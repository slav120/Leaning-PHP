<?php 

namespace Codecademy;

$first = "Welcome to the magical world of built-in functions.";
  
$second = 82137012983; 

//Write your code below:
echo gettype($first); // string
echo gettype($second); // integer 
 
echo var_dump($first); // string(51) "Welcome to the magical world of built-in functions."
echo var_dump($second); // int(82137012983)




echo strrev("Hello, World!"); // !dlroW ,olleH

echo strtolower("HeLLo"); //  hello

echo str_repeat("hi", 10); //  hihihihihihihihihihi 


$story = "I was like, \"Dude, like just tell me what you like think because like everyone else is like being totally honest, and like I just want to know what you like think.\" So like I don't know...";

echo substr_count($story, "like"); // Prints: 8


echo abs(-10.99); // Prints: 10.99

echo abs(127); // Prints: 127

echo round(1.2); // Prints 1

echo round(1.5); //Prints 2

echo round(1298736.821763876); // Prints: 1298737