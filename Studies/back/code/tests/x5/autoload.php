<?php
use App\Models\Perro;
use App\Models\Gato;
 
spl_autoload_register(function ($nombre_clase) {
    require_once $nombre_clase . ".php";
});

?>