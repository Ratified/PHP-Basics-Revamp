<?php 

    session_start();
        if(isset($_POST['submit'])){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['email'] = $_POST['email'];
            header('Location: index.php');
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email">
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>