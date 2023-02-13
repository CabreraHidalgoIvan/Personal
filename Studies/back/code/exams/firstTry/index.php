<?php


echo "<h1> Choose a test</h1>";

echo "<form action='test.php' method='post'>";
echo "<select name='test'>";
echo "<option value=''> Choose a test </option>";
echo "<option value='1'> Test 1 </option>";
echo "<option value='2'> Test 2 </option>";
echo "<option value='3'> Test 3 </option>";
echo "</select><br>";
echo "<input type='submit' name='submit' value='send' />";