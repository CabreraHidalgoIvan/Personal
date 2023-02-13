<?php

// --------- SYNTAX & PARAMETERS --------- \\
echo "SYNTAX & PARAMETERS <br>";

$num1 = 5;
$num2 = 10;

function sum($num1, $num2) {
  return $num1 + $num2;
}

echo sum($num1, $num2);

echo "<br> --------------------------- <br>";

// --------- VALUE & REFERENCE --------- \\
echo "VALUE & REFERENCE <br>";

$num = 5;

function value($number) {
  $number += 10;
}

function reference(&$number) {
  $number += 10;
}

value($num);
echo $num; // 5
echo "<br />";

reference($num);
echo $num; // 15

echo "<br> --------------------------- <br>";

// --------- RECURSION --------- \\
echo "RECURSION <br>";

function factorial($n) {
  if ($n === 1 || $n === 0) {
    return 1;
  }

  echo $n . " * ";
  return $n * factorial($n - 1);
}

$result = factorial(5);
echo "<br />";
echo $result;

echo "<br> --------------------------- <br>";

// --------- Compare and Join --------- \\
echo "COMPARE AND JOIN <br>";

$arrayNums1 = array(1, 2, 3, 4, 5);
$arrayNums2 = array(3, 4, 5, 6, 7);

$arrayColors1 = array("color1" => "red", "color2" =>  "green", "color3" =>  "blue");
$arrayColors2 = array("color1" => "green", "color2" =>  "red", "color3" =>  "purple");

$diff1 = array_diff($arrayNums1, $arrayNums2);
$diff2 = array_diff($arrayColors1, $arrayColors2);
echo "<br /> DIFFERENCE: <br />";

var_dump($diff1);
echo "<br />";
var_dump($diff2);
echo "<br />";

$newArray = array_merge($arrayNums1, $arrayNums2);
echo "<br /> MERGE: <br />";
var_dump($newArray);

echo "<br> --------------------------- <br>";

// --------- SORT --------- \\
echo "SORT <br>";

$array = array(1, 5, 3, 2, 4);
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
$days2 = array("day1" => "Monday", "day2" => "Tuesday", "day3" => "Wednesday", "day4" => "Thursday", "day5" => "Friday", "day6" => "Saturday", "day7" => "Sunday");

sort($array);
sort($days);

var_dump($array);
echo "<br />";
var_dump($days);
echo "<br />";

echo "<br /> RSORT <br>";
rsort($array); // reverse sort
var_dump($array);
echo "<br />";

echo "<br /> ASORT <br>";
asort($days2); // associative sort
var_dump($days2);
echo "<br />";

echo "<br> KSORT <br>";
ksort($days2); // key sort
var_dump($days2);
echo "<br />";

echo "<br> SHUFFLE <br>";
shuffle($array); // shuffle
var_dump($array);

echo "<br> --------------------------- <br>";

// --------- MODIFY ARRAYS --------- \\
echo "MODIFY ARRAYS <br>";

echo "<br /> SHIFT: <br />";
$fruits = array("apple", "orange", "banana", "pineapple", "strawberry");
$deleted = array_shift($fruits); // delete first element
echo $deleted . " is the deleted fruit (first element)<br />";
var_dump($fruits);
echo "<br />";

echo "<br /> UNSHIFT: <br />";
array_unshift($fruits, "watermelon"); // add element to the beginning
var_dump($fruits);
echo "<br />";

echo "<br /> POP: <br />";
$deleted = array_pop($fruits); // delete last element
echo $deleted . " is the deleted fruit (last element)<br />";
var_dump($fruits);
echo "<br />";

echo "<br /> PUSH: <br />";
array_push($fruits, "mango"); // add element to the end
var_dump($fruits);
echo "<br />";

echo "<br> --------------------------- <br>";

// --------- ARRAY FUNCTIONS --------- \\

echo "ARRAY FUNCTIONS <br>";

echo "<br /> COUNT: <br />";
echo count($fruits);
echo "<br />";

echo "<br /> RESET: <br />";
$pointer = reset($fruits); // reset pointer to the first element
echo $pointer;
echo "<br />";

echo "<br /> CURRENT: <br />";
while ($pointer) {
  echo current($fruits) . " - ";
  $pointer = next($fruits);
}
echo "<br />";

echo "<br /> ARRAY SEARCH: <br />";
echo array_search("orange", $fruits) . " -> is the index of the element orange"; // search for an element and return its index
echo "<br />";

echo "<br> --------------------------- <br>";

// --------- DATES & TIME --------- \\
echo "DATES & TIME <br>";

echo "<br /> DATE: <br />";
echo date("d/m/Y"); // date
echo "<br />";
echo date("d/m/Y", time() + 60 * 60 * 24 * 365); // date + 1 year
echo "<br />";
echo date("l jS \of F Y h:i:s A"); // date with day, month, year, hour, minutes and seconds
echo "<br />";


echo "<br /> TIME: <br />";
echo date ("h:i:sa"); // time
echo "<br />";

echo "<br> EXAMPLE <br>";
$today = getdate();
var_dump($today);
echo $today['weekday'] . " " . $today['mday'] . " " . $today['month'] . " " . $today['year'] . " " . $today['hours'] . ":" . $today['minutes'] . ":" . $today['seconds'];
echo "<br />";

if($today['month'] === "December" && $today['mday'] === 25) {
  echo "Merry Christmas!";
} else {
  echo "Today is not Christmas";
}
echo "<br />";

echo "Hour zone: " . date_default_timezone_get(); // get hour zone