<?php

switch ($_GET['choice']) {
  case 1:

    echo "<h1>Menu Admin</h1>";
    echo "<ol>";
    echo "<li> <a href='../1.Exercise/cv.php'>Page 1 </a> </li>";
    echo "<li> <a href='../2.Exercise/cv.php'>Page 2 </a> </li>";
    echo "<li> <a href='../3.Exercise/cv.php'>Page 3 </a> </li>";
    echo "<li> <a href='../4.Exercise/cv.php'>Page 4 </a> </li>";
    echo "</ol>";

    break;

  case 2:

      echo "<h1>Menu User</h1>";
      echo "<ol>";
      echo "<li> <a href='../1.Exercise/cv.php'>Page 1 </a> </li>";
      echo "<li> <a href='../2.Exercise/cv.php'>Page 2 </a> </li>";
      echo "</ol>";

      break;
}