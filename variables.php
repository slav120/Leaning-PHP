<?php

<?php
// Write your code below:

// Variables alaways start with $ always use snake case  
$my_name = "Slav Lalev";  
$biography = "\n Hello im from bla bla";
$favorite_food = "\n" . "tur" . "duck" . "en";


$favorite_food = "Red curry with eggplant, green beans, and peanuts";
echo $favorite_food; 
// Prints: Red curry with eggplant, green beans, and peanuts

$dog_name = "Tadpole";
echo "My dog is named " . $dog_name; 
// Prints: My dog is named Tadpole

$dog_name = "Tadpole";
$favorite_food = "salmon";
$color = "brown";

echo "I have a " . $color . " dog named " . $dog_name . " and her favorite food is " . $favorite_food . ".";
// Prints: I have a brown dog named Tadpole and her favorite food is salmon.


$dog_name = "Tadpole";
$favorite_food = "salmon";
$color = "brown";

echo "I have a $color dog named $dog_name and her favorite food is $favorite_food.";
// Prints: I have a brown dog named Tadpole and her favorite food is salmon.


$dog_name = "Tadpole";
$favorite_food = "treat";
$color = "brown";

echo "I have a ${color}ish dog named $dog_name and her favorite food is ${favorite_food}s.";
// Prints: I have a brownish dog named Tadpole and her favorite food is treats.