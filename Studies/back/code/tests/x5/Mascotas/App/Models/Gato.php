<?php
namespace App\Models;

require_once "Mascotas.php";
class Gato extends Mascotas{

    public static $numeroNacimientosGato=0;
    private $_nombre;
    private $_edad;
            
    function __construct($nombre, $edad )
    {
        parent::__construct($nombre,$edad);
    
        self::$numeroNacimientosGato++;

    }
    function corre()
    {
        echo "Corro como un gato<br>";
    }
    function emiteSonido()
    {
        echo "Miau,miau,...<br>";
    }



}