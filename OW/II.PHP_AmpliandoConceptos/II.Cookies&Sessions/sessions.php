<?php

// Sessions

session_id('22'); // Set the session id
echo session_name() . '<br>'; // Get the session name
session_start(); // Start the session

$_SESSION['init'] = true;
$_SESSION['name'] = 'Ivan';

var_dump($_SESSION);

unset($_SESSION['name']); // Delete a session variable
if(isset($_ESSION['name']) === false) {
  echo 'The session variable does not exist' . '<br>';
} else {
  echo 'The session variable exists' . '<br>';
}

session_destroy(); // Destroy the session