<?php
$count = 0;
$sum = 0;

for ($i = 0; $i <= 10; $i++) {
  if ($i % 2 === 0) {
    echo $i . " is even <br>";

    $sum += $i;
    $count++;
    if ($count === 3) {
      break;
    }
  }
}
echo "<br> --------------------------- <br>";
echo $sum . " is the sum of the first 3 even numbers";