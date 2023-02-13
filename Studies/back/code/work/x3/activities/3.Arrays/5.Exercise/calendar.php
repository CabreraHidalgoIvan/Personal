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

echo "<h1>Calendar</h1>";
echo "<form action='cv.php' method='post'>";
echo "<label>Month:</label>";
echo "<input type='text' name='month' value=''>";
echo "<label>Year:</label>";
echo "<input type='text' name='year' value=''>";
echo "<input type='submit' name='submit' value='send'>";
echo "</form>";

?>

</body>
</html>

