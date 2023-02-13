<?php
echo '<h1>Exercise 1</h1>';
echo '<p>Click the link to generate a cookie that expires </p>';
echo '<a href="index.php.php?cookie=1">Click here to generate a cookie</a>';

if(isset($_GET['cookie'])) {
  setcookie('cookie', '1', time() + 60);
}