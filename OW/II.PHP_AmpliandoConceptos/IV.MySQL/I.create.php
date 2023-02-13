<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

// Create connection
$server = 'localhost';
$user = 'root';
$pass = '';

// Check connection
$conection = mysqli_connect($server, $user, $pass);

if (!$conection) {
    die('No se ha podido conectar con el servidor');
} else {
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS USERS";

    if(mysqli_query($conection, $sql)) {
        echo "Base de datos creada correctamente";
    } else {
        echo "ERROR: " . mysqli_error($conection);
    }

    mysqli_select_db($conection, 'USERS');

    // Create table
    $sql2 = "CREATE TABLE clientes(nombre VARCHAR(20))";

    if(mysqli_query($conection, $sql2)) {
        echo "Tabla creada correctamente";
    } else {
        echo "ERROR: " . mysqli_error($conection);
    }

}

?>

</body>
</html>
