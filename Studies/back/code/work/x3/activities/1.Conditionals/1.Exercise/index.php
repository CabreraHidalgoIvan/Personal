<?php
$num1 = 10;
$num2 = 2;
$num3 = 5;

if ($num1 < $num2 && $num1 < $num3) {
  if ($num2 < $num3) {
    echo 'Numbers: ' . $num1 . ' - ' . $num2 . ' -' . $num3;
  } else {
    echo 'Numbers: ' . $num1 . ' - ' . $num3 . ' - ' . $num2;
  }
} else if ($num2 < $num3 && $num2 < $num1) {
  if ($num1 < $num3) {
    echo 'Numbers: ' . $num2 . ' - ' . $num1 . ' - ' . $num3;
  } else {
    echo 'Numbers: ' . $num2 . ' - ' . $num3 . ' - ' . $num1;
  }
} else if ($num1 < $num2) {
  echo 'Numbers: ' . $num3 . ' - ' . $num1 . ' - ' . $num2;
} else {
  echo 'Numbers: ' . $num3 . ' - ' . $num2 . ' - ' . $num1;
}