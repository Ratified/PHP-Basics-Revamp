<?php 

/*
    < less than
    > Greater than
    <== Less than or equal to
    == equal to
    === identical to
    != Not equal to
    !== Not identical to

*/

$age = 20;
if($age > 18){
    echo '<h1> ' . $age . '</h1>';
}

$t = date("F j D H");

echo $t;

$posts = ['First Post']; 
echo !empty($posts) ? $posts[0]: 'No Posts'; 

$favColor = 'red';

switch($favColor){
    case 'red':
        echo "Your favourite color is red";
        break;
    case 'blue':
        echo "Blue";
        break;
    default:
        echo "";
}