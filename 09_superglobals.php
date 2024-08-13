<?php 

/* -------SUPERGLOBALS-------- */
//Built in variables that are always available in all scopes

/*
$_GET - Contains information about variables passed through a URL or a form.
$_POST - Contains information about variables passed through a form.
$_COOKIE - Contains information about variables passed through a cookie.
$_SESSION - Contains information about variables passed through a session
$_ENV - Contains information about the environment variables
$_SERVER - Contains information about the server environment.
$_FILES - Contains information about files uploaded to the script.
$_REQUEST - Contains information about variables passed through the form or URL.
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li>Server Port: <?php echo $_SERVER['SERVER_PORT'] ?></li>
    </ul>
</body>
</html>