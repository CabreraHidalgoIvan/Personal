<?php
namespace App\Models;
require_once "Mascotas.php";
class Perro extends Mascotas{

    public static $numeroNacimientosPerro=0;
    private $_nombre;
    private $_edad;
            
    function __construct($nombre, $edad )
    {
        parent::__construct($nombre,$edad);
    
        self::$numeroNacimientosPerro++;

    }
    function corre()
    {
        echo "Corro como un perro<br>";
    }
    function emiteSonido()
    {
        echo "Guau, guau,...<br>";
    }



}