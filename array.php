<?php 

$objects = array(1, 2, 4, 6);  //how to create an array
$nono = array("ldask", "ndjkjkld", 54654, "hdahd"); //can put whatever you want 


$first_array = array("hello", 1, "what", 5, "up"); 
echo count($first_array); // returns 5 (5 elements in this string)




$number_array = ['hello', 'dear', 'nono']; //shorter syntax 

echo $number_array; // returns array 
print_r($number_array); // returns 

                      // [0] => hello
                      // [1] => dear 
                      // [2] => nono

      
echo implode(", ", $number_array);  // returns hello, dear, nono


echo $number_array[0]; // returns the element at position 0 withc is hello 

$number_array[0] = 'blablabla'; // the element at position 0 is now blablabla instead of hello
echo $number_array[0]; // returns blablabla

$number_array[] = 'klm'; // this will just add to our array, so position 3 is added and is now klm 


array_pop($number_array); // removes the last element of the array 
array_push($number_array, 'yoyo', 'nooo', 'blue'); // add these elements at the end of the array