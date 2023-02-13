<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 3</title>
</head>

<?php

if (isset($_GET['error'])) {
  $error = $_GET['error'];

  if ($error === 'incorrect') {
    echo '<p style="color: red">Incorrect username or password</p>';
  }

  if ($error === 'empty') {
    echo '<p style="color: red">Please fill in all fields</p>';
  }
}
?>

<body>



<form action="index.php" method="post" id="form" name="form">
    <h2>Session Start</h2>
    <ul>
        <li><label for="user">User: <input type="text" name="user" id="user"></label></li>
        <li><label for="password">Password: <input type="password" name="password" id="password"></label></li>

        <li><label for="check"><input type="checkbox" name="check" value="check" id="check"> Delete User and Password</label></li>
        <li><input type="submit" value="Login" name="login"></li>
    </ul>
</form>

</body>
</html>