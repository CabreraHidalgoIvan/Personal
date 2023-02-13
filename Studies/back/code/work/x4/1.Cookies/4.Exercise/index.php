<?php

if(isset($_COOKIE['count'])) {

  setcookie('count', $_COOKIE['count'] + 1);
  echo 'You have visited this page ' . $_COOKIE['count'] + 1 . ' times.';

} else {

  setcookie('count', 1);
  echo 'Welcome to this page for the first time!';

}