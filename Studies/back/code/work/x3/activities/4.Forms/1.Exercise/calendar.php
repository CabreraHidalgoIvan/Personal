<html>

<head>
  <style>
      table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
          width: 350px;
      }
  </style>
</head>
<body>
<?php

$month = getdate()['mon'];
$year = getdate()['year'];

echo "<h1>Calendar</h1>";
echo "<form action='1.Cookies.php' method='post'>";
echo "<label>Month:</label>";
echo "<input type='text' name='month' value='$month'>";
echo "<label>Year:</label>";
echo "<input type='text' name='year' value='$year'>";
echo "<input type='submit' name='submit' value='send'>";
echo "</form>";

?>

</body>
</html>

