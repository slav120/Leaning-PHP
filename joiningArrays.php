<?php 


$giraffe_foods = ["dip"=>"guacamole", "chips"=>"corn", "entree"=>"grilled chicken"];

$impala_foods = ["dessert"=>"cookies", "vegetable"=>"asparagus", "side"=>"mashed potatoes"];

$rat_foods = ["dip"=>"mashed earth worms", "entree"=>"trash pizza", "dessert"=>"sugar cubes", "drink"=>"lemon water"];

$potluck = $giraffe_foods + $impala_foods + $rat_foods; 
print_r($potluck); 

// RETURNS 

Array
(
    [dip] => guacamole
    [chips] => corn
    [entree] => grilled chicken
    [dessert] => cookies
    [vegetable] => asparagus
    [side] => mashed potatoes
    [drink] => lemon water
)