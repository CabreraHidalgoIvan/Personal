<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tb {
            border-collapse: collapse;
        }

        .tb th,
        .tb td {
            padding: 5px;
            border: solid 1px #777;
        }

        .tb th {
            background-color: lightblue;
        }
    </style>
</head>

<body>
<?php

echo "<div align='center'>";
$found = false;

$string = "<table class='tb' style='width:300px;'><tr><th>ID</th><th>NOMBRE</th><th>SUPERPODER</th></tr>";
foreach ($result as $valor) {
    $string .= "<tr><td><a href='../../index.php.php?Modificacion=1&id=" . $valor["id"] . "&nombre="
        . $valor["nombre"] . "&superpoder=" . $valor["superpoder"] . "'>" . $valor["id"] . "</a></td><td>"
        . $valor["name"] . "</td><td>" . $valor["superPower"] . "</td></tr>";
    $found = true;
}
$string .= "</table>";
if (!$found)
    $string = "<font color='red'>No se encontraron coincidencias...</font>";

echo $string;
echo "<br><br><a href='../../index.php.php'>Volver</a>";
echo "</div>";

?>
</body>

</html>