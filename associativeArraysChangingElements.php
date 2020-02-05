<?php 

$new_arr = ["first" => "I am first!", "second" => "I am second!"]; 
$new_arr["third"] = "I am third!";
echo $new_arr["third"]; // Prints: I am third!

$new_arr["third"] = "I am the *NEW* third!";
echo $new_arr["third"]; // Prints: I am the *NEW* third!



$nums = ["one" => 1,"two"=> 2];
echo implode(", ", $nums); // Prints: 1, 2

unset($nums["one"]);
echo implode(", ", $nums); // Prints: 2

