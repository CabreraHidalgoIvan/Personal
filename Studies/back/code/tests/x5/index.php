<?php
// require_once "Mascotas\App\Models\Perro.php";
// require_once "Mascotas\App\Models\Gato.php";
require_once "./vendor/autoload.php";


use App\Models\{Perro, Gato};


$pastorAleman = new Perro("Toby", "3");
$pastorBelga = new Perro("Antonio", "2");
$Bullterrier = new Perro("Rayo", "5");

$Garfield = new Gato("Garfield", "1");
$gatoEgipcio = new Gato("Egipcio", "1");
$gatoCallejero = new Gato("Callejero", "1");
//echo "Numero de mascotas nacidas: " . Mascotas::$numeroNacimientos . "<br>";
echo "Numero de mascotas nacidas: " . Gato::$numeroNacimientos . "<br>";
echo "Numero de perros nacidos: " . Perro::$numeroNacimientosPerro . "<br>";
echo "Numero de gatos nacidos: " . Gato::$numeroNacimientosGato . "<br>";