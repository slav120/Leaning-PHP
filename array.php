<?php 

$objects = array(1, 2, 4, 6);  //how to create an array
$nono = array("ldask", "ndjkjkld", 54654, "hdahd") //can put whatever you want 


$first_array = array("hello", 1, "what", 5, "up"); 
echo count($first_array); // returns 5 (5 elements in this string)




$number_array = ['hello', 'dear', 'nono']; //shorter syntax 

echo $number_array // returns array 
print_r($number_array) // returns 

                      // [0] => hello
                      // [1] => dear 
                      // [2] => nono

      
echo implode(", ", $number_array);  // returns hello, dear, nono                      