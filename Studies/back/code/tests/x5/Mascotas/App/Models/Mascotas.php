<?php
namespace App\Models;
class Mascotas{

    public static $numeroNacimientos=0;
    private $_nombre;
    private $_edad;
            
    function __construct($nombre, $edad )
    {
        $this->_nombre=$nombre;
        $this->_edad=$edad;
        self::$numeroNacimientos++;

    }
    function corre()
    {
        echo "Mi mascota corre<br>";
    }
    function emiteSonido()
    {
        echo "Mi mascota emiteSonido<br>";
    }
    



}