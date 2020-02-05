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



$num_array = [1000 => "one thousand", 100 => "one hundred", 600 => "six hundred"];
echo $num_array[1000]; // Prints: one thousand

$ordered = [99, 1, 7, 8];
$ordered["special"] = "Cool!";
echo $ordered[3]; // Prints: 8
echo $ordered["special"]; // Prints: Cool!

$num_array = [1000 => "one thousand", 100 => "one hundred", 600 => "six hundred"];
$num_array[] = "New Element in \$num_array";
echo $num_array[1001]; // Prints: New Element in $num_array

$animals_array = ["panda"=>"very cute", "lizard"=>"cute", "cockroach"=>"not very cute"];
array_push($animals_array, "New Element in \$animals_array");
echo $animals_array[0]; // Prints: New Element in $animals_array



$hybrid_array = ["cat", "dog", 9, 18.2];
$hybrid_array[8] = "five more";
print_r($hybrid_array);

array_push($hybrid_array, rand());
echo $hybrid_array[9];

/// Rreturns 

// Array
// (
//     [0] => cat
//     [1] => dog
//     [2] => 9
//     [3] => 18.2
//     [8] => five more
// )
// 270601