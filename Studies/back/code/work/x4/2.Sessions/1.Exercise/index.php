<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <fieldset>
        <legend>Insertar contacto</legend>
        <form action="" method="post">
            <label for="name">Nombre</label><br>
            <input type="text" name="name" id="name"><br><br>
            <label for="apellido">Apellidos</label><br>
            <input type="text" name="apellido" id="apellido"><br><br>
            <label for="phone">Teléfono</label><br>
            <input type="text" name="phone" id="phone"><br><br>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email"><br><br>
            <input type="submit" value="Insertar" name="insert">
        </form>
    </fieldset>
</body>
</html>

<?php

class Archivo {
    public $name;
    public $archivo;

    public function __construct($n) {
        $this->name = $n;
    }

    function insert($nom, $ape, $tel, $email) {
        if(file_exists($this->name)) {
          $this->archivo = fopen($this->name, 'a');
          fwrite($this->archivo, PHP_EOL); // Salto de línea
          fwrite($this->archivo, $nom . '//' . $ape . '//' . $tel . '//' . $email);
          fclose($this->archivo);
        } else {
            $this->archivo = fopen($this->name, 'w');
            fwrite($this->archivo, $nom . '//' . $ape . '//' . $tel . '//' . $email . PHP_EOL); // PHP_EOL = \r
            fclose($this->archivo);
        }
    }
}

if(isset($_POST['insert'])) {
    $nom = $_POST['name'];
    $ape = $_POST['apellido'];
    $tel = $_POST['phone'];
    $email = $_POST['email'];
    $obj = new Archivo('agenda');
    $obj->insert($nom, $ape, $tel, $email);
}
?>
