<?php
$months = [
  'January' => 31,
  'February' => 28,
  'March' => 31,
  'April' => 30,
  'May' => 31,
  'June' => 30,
  'July' => 31,
  'August' => 31,
  'September' => 30,
  'October' => 31,
  'November' => 30,
  'December' => 31
];


$month = 'February';
$year = 2017;

switch ($month) {
  case 'February':
    if (!($year % 4) && ($year % 100 || !($year % 400))) {
      echo 'February have 29 days';
      break;
    } else {
      echo 'February have 28 days';
      break;
    }
  case 'April':
  case 'June':
  case 'September':
  case 'November':
    echo '30 days';
    break;
  default:
    echo '31 days';
    break;
};
