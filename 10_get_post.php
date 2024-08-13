<?php 

if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=George&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="">
    </div>

    <div>
        <label for="age">Age: </label>
        <input type="text" name="age" id="">
    </div>

    <input type="submit" value="Submit" name="submit">

</form>