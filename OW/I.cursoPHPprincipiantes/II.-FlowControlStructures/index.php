<?php

// ---------- IF ELSE---------- \\
echo "IF ELSE <br>";
$grade1 = 10;
$grade2 = 5;
$grade3 = 0;

if ($grade1 >= 5) {
  echo "You have passed <br>";
}

if ($grade3 <= 5) :
  echo "You haven't passed <br>";
endif;

// ---------- Ternary Operator ---------- \\
$result = $grade2 >= 5 ? "You have passed <br>" : "You haven't passed <br>";
echo $result;

echo "<br> --------------------------- <br>";

// ---------- Switch ---------- \\
echo "SWITCH <br>";

$day = 1;

switch ($day) {
  case 1:
    echo "Monday <br>";
    break;
  case 2:
    echo "Tuesday <br>";
    break;
  case 3:
    echo "Wednesday <br>";
    break;
  case 4:
    echo "Thursday <br>";
    break;
  case 5:
    echo "Friday <br>";
    break;
  case 6:
    echo "Saturday <br>";
    break;
  case 7:
    echo "Sunday <br>";
    break;
  default:
    echo "Invalid day <br>";
    break;
}
echo "<br> --------------------------- <br>";

// ---------- For ---------- \\
echo "FOR <br>";

$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

for ($i = 0, $iMax = count($days); $i < $iMax; $i++) {
  echo $days[$i] . "<br>";
};

echo "<br> --------------------------- <br>";

// ---------- Foreach ---------- \\
echo "FOREACH <br>";
foreach ($days as $day) {
  echo $day . "<br>";
};

echo "<br> --------------------------- <br>";

// ---------- While ---------- \\
echo "WHILE <br>";
$counter = 0;

while ($counter < 10) {
  echo $counter . "<br>";
  $counter++;
};

echo "<br> --------------------------- <br>";

// ---------- Do While ---------- \\
echo "DO WHILE <br>";
$counter = 0;

do {
  echo $counter . "<br>";
  $counter++;
} while ($counter < 10);

echo "<br> --------------------------- <br>";

// ---------- Break ---------- \\
echo "BREAK <br>";
$counter = 0;

while ($counter < 10) {
  echo $counter . "<br>";
  $counter++;

  if ($counter === 5) {
    break;
  }
}

echo "<br> --------------------------- <br>";

// ---------- Continue ---------- \\
echo "CONTINUE <br>";
$counter = 0;

while ($counter < 10) {
  $counter++;

  if ($counter === 5) {
    continue;
  }

  echo $counter . "<br>";
}

echo "<br> --------------------------- <br>";

// ---------- Include - Require - Goto ---------- \\
echo "INCLUDE - REQUIRE<br>";

echo "I am the first file <br>";
include "include.php"; // If the file doesn't exist, it will continue the execution
echo "<br> Require <br>";
require "include.php"; // If the file doesn't exist, it will stop the execution
require "include2.php"; // If the file doesn't exist, it will stop the execution