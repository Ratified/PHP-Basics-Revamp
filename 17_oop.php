<?php 

class User{
    public $name;
    public $email;
    public $password;

    function set_name($name){
        $this->name = $name;
    }
}

//Instatiate a user object
$user1 = new User();
$user1->name = 'Brad';

var_dump($user1);