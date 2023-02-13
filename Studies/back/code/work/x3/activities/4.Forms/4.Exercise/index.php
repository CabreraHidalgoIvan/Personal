<?php
$num = $_POST['number'];
$total = 0;

for ($i = 1; $i <= $num; $i++) {
  $random = random_int(0, 10);
  $total += $random;
}

echo "Total: " . $total;