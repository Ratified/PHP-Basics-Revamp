<?php 

//set cookie
setcookie('name', 'Brad', time() + 86400); //this will set a cookie for a one whole day
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}