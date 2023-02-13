<?php

echo '<h1> Exercise 2 </h1>';

if(isset($_COOKIE) > 0) {
  echo 'There are ' . count($_COOKIE) . ' Cookies';
} else {
    echo 'There are no Cookies';
}

if(isset($_GET['accept'])) {
  $expire = time() + (60 * 60 * 24 * 365);
  setcookie('myCookie', '1', $expire);
}

if(!isset($_COOKIE['accept']) && !isset($_COOKIE['myCookie'])) {
  echo '<p> This website uses cookies to improve your experience. </p>';
  echo '<a href="index.php.php?accept=1"> Accept </a>';
}