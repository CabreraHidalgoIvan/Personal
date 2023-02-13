<?php


// Directories
echo getcwd();
echo "<br>";

$directory = scandir(getcwd());
var_dump($directory);

echo "<br>";
chdir('..');
echo getcwd();

// Number formats
echo "<br> ------------------ <br>";
echo "<br> Number formats <br>";

$num = 7.5;

if (is_int($num)) {
    echo "is integer";
} elseif (is_float($num)) {
    echo "is float";
}

echo "<br>";
echo number_format($num) . ' -->  without decimals';
echo "<br>";
echo number_format($num, 2) . ' -->  with two decimals';
echo "<br>";
echo number_format($num, 2, ',', '.') . ' -->  with two decimals and comma as decimal separator';

// Number functions
echo "<br> ------------------ <br>";
echo "<br> Number funtions  <br>";

echo "ROUND: " . "<br>";
echo round(0.5) . '<br>';
echo round(-0.6) . '<br>';
echo round(1.5, 0, PHP_ROUND_HALF_UP) . '<br>';
echo round(0.49434, 2) . '<br>';
echo "<br>";

echo "CEIL: " . "<br>";
echo ceil(0.5) . '<br>';
echo ceil(-0.6) . '<br>';
echo "<br>";

echo "FLOOR: " . "<br>";
echo floor(0.5) . '<br>';
echo floor(-0.6) . '<br>';
echo "<br>";

echo "RAND: " . "<br>";
echo mt_rand() . '<br>';
echo random_int(1, 10) . '<br>';
echo "<br>";

echo "MAX: " . "<br>";
echo max(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . '<br>';
echo "<br>";

echo "MIN: " . "<br>";
echo min(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . '<br>';
echo "<br>";

echo "ABS: " . "<br>";
echo abs(-1) . '<br>';
echo abs(1) . '<br>';
echo "<br>";

echo "SQRT: " . "<br>";
echo sqrt(9) . '<br>';
echo sqrt(10) . '<br>';

// Change the number format
echo "<br> ------------------ <br>";
echo "<br> Change the number format <br>";

$number = 15;

echo "Number: " . $number . "<br>";
echo "Number to binary: " . decbin($number) . "<br>";
echo "Number to octal: " . decoct($number) . "<br>";
echo "Number to hexadecimal: " . dechex($number) . "<br>";
