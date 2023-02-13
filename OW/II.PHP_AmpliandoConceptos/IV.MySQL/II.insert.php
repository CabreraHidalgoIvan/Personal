<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form id="form" method="get" action="II.insert.php">
    <p>


        <label for="name">Name</label>
        <input type="text" name="name" id="name">

    </p>

    <p>
        <input type="submit" name="enviando" value="Insert">
    </p>
</form>

<?php

// Create connection
$server = 'localhost';
$user = 'root';
$pass = '';

// Check connection
$conection = mysqli_connect($server, $user, $pass) or die('No se ha podido conectar con el servidor');

mysqli_select_db($conection, 'USERS');

$insert = "INSERT INTO clientes (nombre) VALUES ('$_GET[name]')";

mysqli_query($conection, $insert);

?>

</body>
</html>