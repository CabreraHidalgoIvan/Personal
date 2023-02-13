<?php

$class = array('jose' => 'jose.jpg', 'rafa' => 'rafa.jpg', 'fran' => 'fran.jpg', 'moyano' => 'moyano.jpg');

$random = random_int(1, count($class) - 1);

switch ($random) {
  case 1:
    echo "<p> Jose </p>";
    echo "<img src='" . $class['jose'] . "'>";
    break;
  case 2:
    echo "<p> Rafa </p>";
    echo "<img src='" . $class['rafa'] . "'>";
    break;
  case 3:
    echo "<p> Fran </p>";
    echo "<img src='" . $class['fran'] . "'>";
    break;
  case 4:
    echo "<p> Moyano </p>";
    echo "<img src='" . $class['moyano'] . "'>";
    break;
}