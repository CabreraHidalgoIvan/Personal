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

<?php

$total = 0;

// Tarifas

$tarifas = [
  "picapiedra" => ["A" => 20, "B" => 40, "C" => 50, "D" => 60],
  "roedores" => ["A" => 30, "B" => 50, "C" => 60, "D" => 70],
  "perezosos" => ["A" => 40, "B" => 60, "C" => 70, "D" => 80],
  "invisibles" => ["A" => 50, "B" => 70, "C" => 80, "D" => 90],
  "legendarios" => ["A" => 60, "B" => 80, "C" => 90, "D" => 100],
  "magos" => ["A" => 70, "B" => 90, "C" => 100, "D" => 110],
  "sultanes" => ["A" => 80, "B" => 100, "C" => 110, "D" => 120]
];

// Abonados
function abonados() {
  $arrayAbonados = [];

  $numeroAbonos = random_int(20, 200);

  for ($i = 0; $i < $numeroAbonos; $i++) {
    $arrayAbonados[$i] = random_int(1, 100);

  }


  echo "<br>";
  echo "Abonados = [";
  for ($i = 0; $i < $numeroAbonos;$i++) {
    echo $arrayAbonados[$i] . ", ";
  }
  echo "]";

  return $arrayAbonados;

}

$array = abonados();

// muestra de las tablas segun tarifas

$zona = $_POST['zona'];
$equipo = $_POST['equipos'];


if ($equipo == "picapiedra") {
  if ($zona == "a") {
    crearTabla($tarifas["picapiedra"]["A"]);
  } elseif ($zona == "b") {
    crearTabla($tarifas["picapiedra"]["B"]);
  } elseif ($zona == "c") {
    crearTabla($tarifas["picapiedra"]["C"]);
  } else {
    crearTabla($tarifas["picapiedra"]["D"]);
  }
} elseif ($equipo == "roedores") {
  if ($zona == "a") {
    crearTabla($tarifas["roedores"]["A"]);
  } elseif ($zona == "b") {
    crearTabla($tarifas["roedores"]["B"]);
  } elseif ($zona == "c") {
    crearTabla($tarifas["roedores"]["C"]);
  } else {
    crearTabla($tarifas["roedores"]["D"]);
  }
} elseif ($equipo == "perezosos") {
  if ($zona == "a") {
    crearTabla($tarifas["perezosos"]["A"]);
  } elseif ($zona == "b") {
    crearTabla($tarifas["perezosos"]["B"]);
  } elseif ($zona == "c") {
    crearTabla($tarifas["perezosos"]["C"]);
  } else {
    crearTabla($tarifas["perezosos"]["D"]);
  }
} elseif ($equipo == "invisibles") {
  if ($zona == "a") {
    crearTabla($tarifas["invisibles"]["A"]);
  } elseif ($zona == "b") {
    crearTabla($tarifas["invisibles"]["B"]);
  } elseif ($zona == "c") {
    crearTabla($tarifas["invisibles"]["C"]);
  } else {
    crearTabla($tarifas["invisibles"]["D"]);
  }
} elseif ($equipo == "legendarios") {
  if ($zona == "a") {
    crearTabla($tarifas["legendarios"]["A"]);
  } elseif ($zona == "b") {
    crearTabla($tarifas["legendarios"]["B"]);
  } elseif ($zona == "c") {
    crearTabla($tarifas["legendarios"]["C"]);
  } else {
    crearTabla($tarifas["legendarios"]["D"]);
  }
}
elseif ($equipo == "magos") {
  if ($zona == "a") {
    crearTabla($tarifas["magos"]["A"]);
  } elseif ($zona == "b") {
    crearTabla($tarifas["magos"]["B"]);
  } elseif ($zona == "c") {
    crearTabla($tarifas["magos"]["C"]);
  } else {
    crearTabla($tarifas["magos"]["D"]);
  }
}
elseif ($equipo == "sultanes") {
  if ($zona == "a") {
    crearTabla($tarifas["sultanes"]["A"]);
  } elseif ($zona == "b") {
    crearTabla($tarifas["sultanes"]["B"]);
  } elseif ($zona == "c") {
    crearTabla($tarifas["sultanes"]["C"]);
  } else {
    crearTabla($tarifas["sultanes"]["D"]);
  }
}




function crearTabla($value)
{
  echo "<h1>Butacas disponibles</h1>";
  echo "<form method='post' action='../precio.php'>";
  echo "<table>";


  for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 10; $j++) {

      echo "<td style='background-color: lightgreen'><input type='checkbox' name='check' value='" . $value . "'>" . $value . "€</td>";
    }
    echo "</tr>";
  }
  echo "<label>Precio entrada: </label>";
  echo "<input type='checkbox' name='precio' checked disabled value='" . $value . "'>" . $value . "€";
  echo "</table>";




  echo "<input name='submit' type='submit' value='Comprar'>";
  echo "</form>";


}

?>

</body>
</html>
