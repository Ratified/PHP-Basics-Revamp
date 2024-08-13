<?php

$string = 'Hello World';

//Get length of the string
echo strlen($string);

//Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');

//Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

//Reverse a string
echo strrev($string);

//Convert all characters to lowercase
echo strtolower($string);

//Convert all characters to uppercase
echo strtoupper($string);

//Uppercase the first character of each word
echo ucwords($string);

//String replace
echo str_replace('World', 'Everyone', $string);

$string2 = '<script>alert(1)</script>';
echo htmlspecialchars($string2);

printf('%s likes to %s', 'Brad', 'Code');

