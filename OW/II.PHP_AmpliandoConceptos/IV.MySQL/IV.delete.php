<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form id="formRead" method="get" action="IV.delete.php">
    <p>


        <label for="name">Name</label>
        <input type="text" name="name" id="name">

    </p>

    <p>
        <input type="submit" name="enviando" value="delete">
    </p>
</form>

<?php

$found = false;
$name = $_GET["name"];

// Create connection
$server = 'localhost';
$user = 'root';
$pass = '';

// Check connection
$connection = mysqli_connect($server, $user, $pass);

// New

mysqli_select_db($connection, 'USERS');

$sql = "SELECT nombre FROM clientes";

$registration = mysqli_query($connection, $sql);

while ($register = mysqli_fetch_row($registration)) {
    echo "NAME: " . $register[0] . "<br>";

    if ($register[0] === $name) {
        $found = true;
    }
}

if ($found) {

    $sql = "DELETE FROM clientes WHERE nombre = '$name'";
    mysqli_query($connection, $sql);
    echo "<p>Cliente ". $name. " fue eliminado.</p>";
} else {
    echo "<p>Cliente ". $name. " no encontrado.</p>";
}


?>

</body>
</html>
