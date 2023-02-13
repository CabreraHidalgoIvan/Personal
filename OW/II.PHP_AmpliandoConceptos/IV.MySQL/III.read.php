<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form id="formRead" method="get" action="III.read.php">
    <p>


        <label for="name">Name</label>
        <input type="text" name="name" id="name">

    </p>

    <p>
        <input type="submit" name="enviando" value="Show">
    </p>
</form>

<?php

$name = $_GET['name'];

$server = 'localhost';
$user = 'root';
$pass = '';

// Check connection
$connection = mysqli_connect($server, $user, $pass) or die('No se ha podido conectar con el servidor');

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
    echo "<br>" . "REGISTERED: " . $name . "<br>";
} else {
    echo "NOT FOUND: ". $name. "\n";
}

?>



</body>
</html>