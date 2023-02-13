<?php

if(isset($_POST['user']) && !empty($_POST['user'])) {
  $user = $_POST['user'];
  echo "El usuario es: $user" . "<br>";
}

if(isset($_POST['pass']) && !empty($_POST['pass'])) {
  $pass = $_POST['pass'];
  echo "La contraseña es: $pass" . "<br>";
}