<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form id="formRead" method="get" action="V.update.php">
    <p>


        <label for="name">Name</label>
        <input type="text" name="name" id="name">

    </p>


<?php

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

echo "<label for='select'>Select</label>";
echo "<select name='select' id='select'>";
while ($register = mysqli_fetch_row($registration)) {
    echo "<option value='$register[0]'>$register[0]</option>";
}
echo "</select>";

?>

<p>
    <input type="submit" name="enviando" value="update">
</p>

</form>

<?php

$found = false;
$name = $_GET["name"];

$modify = $_GET["select"];

// New

mysqli_select_db($connection, 'USERS');

$sql = "UPDATE clientes SET nombre = '$name' WHERE nombre = '$modify'";

mysqli_query($connection, $sql);


?>

</body>
</html>
