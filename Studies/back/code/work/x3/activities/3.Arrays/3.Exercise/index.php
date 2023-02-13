<?php

$info = [
  "Months" => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
  "table" => [1 => ['A', 'B', 'C', 'D', 'E'],
              2 => ['A', 'B', 'C', 'D', 'E'],
              3 => ['A', 'B', 'C', 'D', 'E'],
              4 => ['A', 'B', 'C', 'D', 'E'],
              5 => ['A', 'B', 'C', 'D', 'E'],
              ],
  "qualifications" => ['Jose' => 0, 'Rafa' => 0, 'Fran' => 0, 'Moyano' => 0],
  "irregularVerbs" => ['to be' => 'was/were', 'to become' => 'became', 'to begin' => 'began', 'to break' => 'broke', 'to bring' => 'brought', 'to build' => 'built', 'to buy' => 'bought', 'to catch' => 'caught', 'to choose' => 'chose', 'to come' => 'came', 'to cost' => 'cost', 'to cut' => 'cut', 'to do' => 'did', 'to draw' => 'drew', 'to drink' => 'drank', 'to drive' => 'drove', 'to eat' => 'ate', 'to fall' => 'fell', 'to feel' => 'felt', 'to fight' => 'fought', 'to find' => 'found', 'to fly' => 'flew', 'to forget' => 'forgot', 'to forgive' => 'forgave', 'to freeze' => 'froze', 'to get' => 'got', 'to give' => 'gave', 'to go' => 'went', 'to grow' => 'grew', 'to hang' => 'hung', 'to have' => 'had', 'to hear' => 'heard', 'to hide' => 'hid', 'to hit' => 'hit', 'to hold' => 'held', 'to hurt' => 'hurt', 'to keep' => 'kept', 'to know' => 'knew', 'to learn' => 'learned', 'to leave' => 'left', 'to lend' => 'lent', 'to let' => 'let', 'to lie' => 'lay', 'to lose' => 'lost'],
  "continents" => ['Europe' => ['Spain', 'France', 'Germany', 'Italy', 'Portugal', 'United Kingdom'], 'America' => ['United States', 'Canada', 'Mexico', 'Brazil', 'Argentina', 'Colombia'], 'Asia' => ['China', 'India', 'Japan', 'Indonesia', 'Pakistan', 'Bangladesh'], 'Africa' => ['Nigeria', 'Egypt', 'Ethiopia', 'Democratic Republic of the Congo', 'South Africa', 'Tanzania'], 'Oceania' => ['Australia', 'Papua New Guinea', 'Indonesia', 'Fiji', 'New Zealand', 'Solomon Islands']]
];

echo "<h1>Months</h1>";
echo "<ul>";
foreach ($info['Months'] as $month) {
  echo "<li>" . $month . "</li>";
}
echo "</ul>";

echo "<h1>Table</h1>";
echo "<table>";
foreach ($info['table'] as $row) {
  echo "<tr>";
  foreach ($row as $cell) {
    echo "<td>" . $cell . "</td>";
  }
  echo "</tr>";
}
echo "</table>";

echo "<h1>Qualifications</h1>";
echo "<ul>";

foreach ($info['qualifications'] as $name => $qualification) {
  echo "<li>" . $name . " has a qualification of " . $qualification . "</li>";
}
echo "</ul>";

echo "<h1>Irregular Verbs</h1>";
echo "<ul>";
foreach ($info['irregularVerbs'] as $verb => $past) {
  echo "<li>" . $verb . " - " . $past . "</li>";
}
echo "</ul>";

echo "<h1>Continents</h1>";
echo "<ul>";
foreach ($info['continents'] as $continent => $countries) {
  echo "<li>" . $continent . "</li>";
  echo "<ul>";
  foreach ($countries as $country) {
    echo "<li>" . $country . "</li>";
  }
  echo "</ul>";
}
echo "</ul>";
