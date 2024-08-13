<?php 

for($x=1; $x < 10; $x++){
    echo 'Number: ' . $x . '<br>';
}

$posts = ['First Post', 'Second Post', 'Third Post'];

/*for($x = 0; $x < count($posts); $x++){
    echo $posts[$x];
}*/

foreach($posts as $post){
    echo $post;
}

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

foreach($person as $key => $value){
    echo "$key - $value <br>";
}