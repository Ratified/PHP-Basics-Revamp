<?php 

$fruits = ['apple', 'orange', 'pear'];

echo count($fruits);

//Search array
var_dump(in_array('apple', $fruits));

//Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry');
array_unshift($fruits, 'mango');

//Remove from array
array_pop($fruits);
array_shift($fruits);
unset($fruits[2]);

print_r($fruits);