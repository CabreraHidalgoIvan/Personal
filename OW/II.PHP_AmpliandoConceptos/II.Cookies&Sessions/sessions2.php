<?php

session_start();

$_SESSION['init'] = true;
$_SESSION['name'] = 'Ivan';
$_SESSION['lastName'] = 'Cabrera';
$_SESSION['age'] = 22;

echo 'Identification: ' . session_id() . '<br>';
echo 'Session name: ' . session_name() . '<br>';

echo 'Name: ' . $_SESSION['name'] . '<br>';
echo 'Last name: ' . $_SESSION['lastName'] . '<br>';
echo 'Age: ' . $_SESSION['age'] . '<br>';

echo '<a href="sessions3.php">Click to validate values in other web </a><br>';
echo '<a href="sessions4.php">Click to finalize the session </a>';