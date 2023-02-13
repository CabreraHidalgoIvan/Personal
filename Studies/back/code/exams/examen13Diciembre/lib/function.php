<?php

function abonados() {
  $arrayAbonados = [];

  $numeroAbonos = random_int(20, 200);
  echo $numeroAbonos;

  for ($i = 0; $i < $numeroAbonos; $i++) {
    $arrayAbonados[$i] = random_int(1, 100);

  }

  echo "<br>";
  for ($i = 0; $i < $numeroAbonos;$i++) {
    echo $arrayAbonados[$i] . "<br>";
  }

}

abonados();


