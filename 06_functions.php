<?php 

function registerUser($email){
    echo $email . " registered";
}

registerUser("kamnnge");

function sum($n1, $n2){
    return $n1 + $n2;
}

$number = sum(5, 5);

$multiply = fn($n1, $n2) =>  $n1 + $n2;