<?php

$my_int = 78;
$my_float = -897.21;

echo $my_int; // Prints: 78
echo $my_float; // Prints: -897.21


$tadpole_age = 7;
$lily_age = 6; 
$age_difference = $tadpole_age - $lily_age;
echo $age_difference; // Prints 1

$favorite_num = 22;
echo $favorite_num + 1; // Prints 23
echo $favorite_num; //Prints 22

$age = 82;
echo $age; // Prints: 82

$age = $age + 2;
echo $age; // Prints: 84


$last_month = 1187.23; 
$this_month = 1089.98; 
echo $last_month - $this_month; // Prints 97.25


$num_cookies = 24;
$num_friends = 7;
$cookies_per_friend = $num_cookies / $num_friends;
echo $cookies_per_friend; // Prints: 3.4285714285714


$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language; //Prints 44



echo 4 ** 2; // Prints: 16
echo 2.89 ** 3.2;  // Prints: 29.845104015297
echo 10 ** -1; // Prints: 0.1

  
echo 94 - 4.25 + 7 - (23.50 + 23.50 * 0.20) + 20 / 4;  // prints 73.55


// remainder modulo operator 
echo 7 % 3; // Prints: 1


$num_cookies = 27;
$cookies_per_serving = 4;
$leftover_cookies = $num_cookies % $cookies_per_serving;
echo $leftover_cookies; // Prints: 3
