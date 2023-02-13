<?php
$string = "Hello World";
$double = 123.456;
$integer = 1234;
$boolean = true;
$null = null;

echo "Value is " . gettype($string) . "<br />"; // Value is string
echo "Value is " . gettype($double) . "<br />"; // Value is double
echo "Value is " . gettype($boolean) . "<br />"; // Value is boolean
echo "Value is " . gettype($integer) . "<br />"; // Value is integer
echo "Value is " . gettype($null) . "<br />"; // Value is NULL