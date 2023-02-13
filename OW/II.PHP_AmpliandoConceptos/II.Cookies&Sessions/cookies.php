<?php

// Cookies

setcookie('noExpira', 1);

setcookie('mycookie', 2, time() + 10);

setcookie('language', 'esp');

if (isset($_COOKIE['language'])) {
    echo 'The language is: ' . $_COOKIE['language'] . '<br>';
} else {
    echo 'There is no language';
}

// unset($_COOKIE['noExpira']); // Don't remove the cookie, just the value

setcookie('noExpira', null, -1); // Remove the cookie


// Accept and Enable Cookies

if(count($_COOKIE) > 0) {
    echo 'There are ' . count($_COOKIE) . ' Cookies';
} else {
    echo 'There are no Cookies';
}

if(isset($_GET['accept'])) {
  $expire = time() + (60 * 60 * 24 * 365);
  setcookie('myCookie', '1', $expire);
}


if(!isset($_COOKIE['accept']) && !isset($_COOKIE['myCookie'])) {
  echo '<h2> Cookies </h2>';
  echo '<p> This website uses 1.Cookies to improve your experience. </p>';
  echo '<a href="1.Cookies.php?accept=1"> Accept </a>';
}