<?php

const NAME = 'Ivan';
$password = '1234';
$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
function wordDNI($dni) {
  $letter = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E');
  return $letter[$dni % 23];
}

switch ($_GET['choice']) {
  case 1:

    if (NAME === 'Ivan') {
      echo "Welcome Ivan <br>";
      if ($password === '1234') {
        echo "Your password is correct <br>";
      } else {
        echo "Your password is incorrect <br>";
      }
    } else {
      echo "You are not Ivan <br>";
    }

    break;

  case 2:
    echo "<h2>Menu</h2>";
    include 'index.php';
    break;

  case 3:
    echo "<h2>Executed File</h2>";
    echo "The executed file is: " . __FILE__ . "<br>";
    echo "The executes file is " . $_SERVER['PHP_SELF'] . "<br>";
    break;

  case 4:
    echo "<h2>Traverse Array</h2>";
    for ($i = count($months); $i >= 0; $i--) {
      echo $months[$i] . "<br>";
    }
    break;
  case 5:
    echo "<h2>Sorted Currencies and Countries</h2>";
    $currencies = array('EUR' => 'Euro', 'USD' => 'Dollar', 'GBP' => 'Pound');
    sort($currencies);
    foreach ($currencies as $key => $value) {
      echo $key . " => " . $value . "<br>";
    }

    break;
  case 6:
    echo "<h2>Calculate DNI letter</h2>";
    echo "The letter of your DNI is: " . wordDNI(46267975) . "<br>";
    break;
  case 7:
    echo "<h2>Show year</h2>";
    echo "The year is: " . date('Y') . "<br>";

    break;

  default:
    echo "Please select a valid option";
    break;
}