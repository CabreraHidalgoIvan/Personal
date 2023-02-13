<?php

// --------- Variables --------- \\

$age = 22;
$Age = 0;
$size = 1.73;

$name = "Ivan";
$lastName = 'Cabrera';

$student = true;

// ---------  Constants --------- \\

const NUMBER = 1;

define('PI', 3.14);

// --------- Print --------- \\
echo $name . " " . $lastName . "<br> I have " . $age . " years old. <br>";
/*echo json_encode($student);*/

// --------- URL variables (destination.html) --------- \\
echo "Name (URL variables): " .$_GET["nameURL"] . " ";
echo $_GET["lastNameURL"] . "<br>";


// --------- Arrays --------- \\

$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Saturday"];
$months = array("January", "February", "March", "April", "May");

$emptyArrayWithPositions = array(10);  // Create an array with 10 positions
$emptyArray = array();

  // Get values
  echo $days[0] . "<br>";   // Monday

  var_dump($days);  // Detailed info about the days array
  echo "<br>";

// --------- Associative Arrays --------- \\

$browsers = array("browser1" => "Safari", "browser2" => "Chrome", "browser3" => "Firefox", "browser4" => "Opera");

echo "Browser 1: " . $browsers["browser1"] . "<br>";

var_dump($browsers);
echo "<br>";

// --------- Operators --------- \\

$num1 = 5;
$num2 = 10;

echo "Simple Operators: <br>";
echo $num1 . "+" . $num2 . " = " . ($num1 + $num2) . "<br>";
echo $num1 . "-" . $num2 . " = " . ($num1 - $num2) . "<br>";
echo $num1 . "x" . $num2 . " = " . ($num1 * $num2) . "<br>";
echo $num1 . "/" . $num2 . " = " . ($num1 / $num2) . "<br>";
echo $num1 . "%" . $num2 . " = " . ($num1 % $num2) . "<br>";
echo $num1 . "**" . $num2 . " = " . ($num1 ** $num2) . "<br>";

echo "<br>";
echo "Complex Operators: <br>";
echo $num1 . "+=" . $num2 . " = " . ($num1 += $num2) . "<br>";
echo $num1 . "-=" . $num2 . " = " . ($num1 -= $num2) . "<br>";
echo $num1 . "x=" . $num2 . " = " . ($num1 *= $num2) . "<br>";
echo $num1 . "/=" . $num2 . " = " . ($num1 /= $num2) . "<br>";
echo $num1 . "%=" . $num2 . " = " . ($num1 %= $num2) . "<br>";
echo $num1 . "**=" . $num2 . " = " . ($num1 **= $num2) . "<br>";

echo "<br>";
echo "Comparison operators: <br>";

$num = 10;
if ($num == "10") {
  echo $num . " = '10' <br>";
}


if ($num === "10") {
  echo $num . " = '10' <br>";
}

if ($num !== "10") {
  echo $num . " != '10' <br>";
}

if ($num >= 1) {
  echo $num . " > 1 <br>";
}

echo "<br>";
echo "Increment/Decrement operators: <br>";

echo "++$num = " . ++$num;
echo  "<br>";
echo "--$num = " . --$num;
echo  "<br>";

echo "<br>";
echo "Logical operators: <br>";

echo "(10 == 10 && 5 == 5) => true";
echo "(10 == 10 && 5 == 20) => false";

echo "(10 == 10 || 5 == 20) => true";

