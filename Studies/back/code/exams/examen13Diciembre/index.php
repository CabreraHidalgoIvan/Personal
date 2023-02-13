<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen PHP</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 350px;
        }
    </style>
</head>
<body>

<h1>Venta de Localidades</h1>

<?php

echo "<form action='./conf/config.php' method='post'>";
echo "<label> Seleccionar equipo -> </label>";
echo "<select name='equipos'>";
echo "<option value=''> Selecciona un equipo</option>";
echo "<option name='equipos' value='picapiedra'>Picapiedra</option>";
echo "<option name='equipos' value='roedores'>Roedores</option>";
echo "<option name='equipos' value='perezosos'>Perezosos</option>";
echo "<option name='equipos' value='invisibles'>Invisibles</option>";
echo "<option name='equipos' value='legendarios'>Legendarios</option>";
echo "<option name='equipos' value='magos'>Magos</option>";
echo "<option name='equipos' value='sultanes'>Sultanes</option>";
echo "</select>";
echo "<br>";

echo "<label>Elegir zona</label><br>";
echo "<input type='radio' name='zona' value='a'>Zona A</input><br>";
echo "<input type='radio' name='zona' value='b'>Zona B</input><br>";
echo "<input type='radio' name='zona' value='c'>Zona C</input><br>";
echo "<input type='radio' name='zona' value='d'>Zona D</input><br>";

echo "<input name='submit' type='submit' value='Enviar'>";

echo "</form>";

// Funciones

function crearTabla()
{

  echo "<table>";
    for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 10; $j++) {
            echo "<td><input type='checkbox' name='check'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>


</body>
</html>