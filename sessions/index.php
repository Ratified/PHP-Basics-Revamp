<?php 

    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        if(isset($name) && isset($email)){
            echo "You've signed in as " . $name . " with the email " . $email;
        } 
        else{
            header("Location: signup.php");
        }    

    ?>

</body>
</html>