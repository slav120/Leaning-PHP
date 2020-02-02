<?php

// long syntax
$php_array = array(
  "language" => "PHP", 
  "creator" => "Rasmus Lerdorf", 
  "year_created" => 1995, 
  "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]
);

// short syntax 
$php_short = [
  "language" => "PHP", 
  "creator" => "Rasmus Lerdorf", 
  "year_created" => 1995, 
  "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]
];


$september_hits = ["The Sixth Sense" => 22896967,
"Stigmata" => 18309666,
"Blue Streak" => 19208806,
"Double Jeopardy" => 23162542];

echo implode(", ", $september_hits);   // returns 22896967, 18309666, 19208806, 23162542

print_r($september_hits); // returns 

// Array
// (
//     [The Sixth Sense] => 22896967
//     [Stigmata] => 18309666
//     [Blue Streak] => 19208806
//     [Double Jeopardy] => 23162542
// )