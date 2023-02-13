<?php

echo "<h1>Contact form</h1>";

echo "<h2>Personal information</h2>";

echo "<form action='cv.php' method='post'>";
echo "<label>Name:</label>";
echo "<input type='text' name='name' value=''><br>";
echo "<label> Last Name:</label>";
echo "<input type='text' name='lastName' value=''><br>";
echo "<label>Email:</label>";
echo "<input type='text' name='email' value=''><br>";
echo "<label>Phone:</label>";
echo "<input type='tel' name='phone' value=''><br>";
echo "<label>Birthdate:</label>";
echo "<input type='date' name='birthdate' value=''><br>";
echo "<label>children:</label><br>";
echo "<select name='children'>";
echo "<option value='0'>0</option>";
echo "<option value='1'>1</option>";
echo "<option value='2'>2</option>";
echo "<input type='submit' name='submit' value='send'>";
echo "<input type='reset' name='reset' value='reset'>";
echo "</form>";

echo "<h2>Experience</h2>";

echo "<form action='cv.php' method='post'>";
echo "<label>Company:</label>";
echo "<input type='text' name='company' value=''><br>";
echo "<label>Position:</label>";
echo "<input type='text' name='position' value=''><br>";
echo "<label>Start date:</label>";
echo "<input type='date' name='startDate' value=''><br>";
echo "<label>End date:</label>";
echo "<input type='date' name='endDate' value=''><br>";
echo "<label>Link:</label>";
echo "<input type='url' name='link' value=''><br>";
echo "<label>Tasks:</label><br>";
echo "<input type='checkbox' name='tasks' value=''> task1 <br>";
echo "<input type='checkbox' name='tasks' value=''> task2 <br>";
echo "<input type='checkbox' name='tasks' value=''> task3 <br>";
echo "<input type='checkbox' name='tasks' value=''> task4 <br>";
echo "<input type='submit' name='submit' value='send'>";
echo "<input type='reset' name='reset' value='reset'>";
echo "</form>";