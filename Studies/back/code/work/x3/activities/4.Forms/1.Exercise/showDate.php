<?php

$day = "";
$month = "";
$year = "";
$holiday = "";

if (isset($_GET["day"])) {
    $day = $_GET["day"];
}

if (isset($_GET["month"])) {
    $month = $_GET["month"];
}

if (isset($_GET["year"])) {
    $year = $_GET["year"];
}

if (isset($_GET["holiday"])) {
    $holiday = $_GET["holiday"];
}

echo "<h2>" . $day . " of " . $month . " of " . $year . "</h2>";
echo "<h1>" . $holiday . "</h1>";