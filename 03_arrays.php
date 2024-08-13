<?php 
//simple array
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');
//var_dump($numbers);
//Asociative Array
#colors 
$colors = [
    1 => 'red',
    2 => 'green',
    3 => 'blue'
];
echo $colors[1];
$person = [
    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com'
    ]
];
//var_dump(json_encode($person));
$json = json_encode($person);
echo $json;