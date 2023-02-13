<?php

$error = '';

if (isset($_COOKIE['user'], $_COOKIE['password'])) {
  if(!empty($_POST['user']) && !empty($_POST['password'])) {

    $username = $_POST['user'];
    $password = $_POST['password'];

    if($username === $_COOKIE['user'] && $password === $_COOKIE['password']) {
      $error = 'Ok';
      echo "You are logged in!";
      if (isset($_POST['check'])) {
        setcookie('user', '', time() - 3600);
        setcookie('password', '', time() - 3600);
      } else {


        setcookie('user', $username, time() + 3600);
        setcookie('password', $password, time() + 3600);
      }
    } else {
      $error = 'incorrect';
      header("Location: form.php?error=$error");
    }

  } else {
    $error = 'empty';
    header("Location: form.php?error=$error");
  }
} else if(!empty($_POST['user']) && !empty($_POST['password'])) {
  if (isset($_POST['check'])) {
    setcookie('user', '', time() - 3600);
    setcookie('password', '', time() - 3600);
  } else {
    $username = $_POST['user'];
    $password = $_POST['password'];

    setcookie('user', $username, time() + 3600);
    setcookie('password', $password, time() + 3600);
  }
}

