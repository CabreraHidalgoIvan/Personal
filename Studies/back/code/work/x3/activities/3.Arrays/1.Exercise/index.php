<?php

$exercises = array("1" => "/1.Exercise/cv.php", "2" => "/2.Exercise/cv.php", "3" => "/3.Exercise/cv.php", "4" => "/4.Exercise/cv.php", "5" => "/5.Exercise/cv.php");

for ($i = 1; $i <= count($exercises); $i++) {
    echo "<a href='" . $exercises[$i] . "'>Exercise " . $i . "</a><br>";
}