<?php

session_start();

if(isset($_SESSION['init']) === true ) {
  echo '<h1>Session 3</h1>';
  echo 'Identification: ' . session_id() . '<br>';
  echo 'Session name: ' . session_name() . '<br>';

  echo 'Name: ' . $_SESSION['name'] . '<br>';
  echo 'Last name: ' . $_SESSION['lastName'] . '<br>';
  echo 'Age: ' . $_SESSION['age'] . '<br>';
} else {
  echo 'The session has not been initialized';
}

echo '<a href="sessions2.php">Click to go back </a><br>';
echo '<a href="sessions4.php">Click to finalize the session </a>';
