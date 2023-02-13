<?php


$birthDate = new DateTime("07/12/2000");
$today = new DateTime("today");

echo "Birthday -> " . $birthDate->format("d-m-Y");
echo "<br>";
echo "Today -> " . $today->format("d-m-Y");

$age = $birthDate->diff($today)->y;

echo "<br>";
echo "You are " . $age . " years old";