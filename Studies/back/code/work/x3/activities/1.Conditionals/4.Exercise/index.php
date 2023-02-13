<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
        }

        h1 {
            color: #00f;
            background-color: #eee;
        }
    </style>
</head>
<body>

<div>
    <h1>Exercise</h1>
</div>
</body>
</html>


<?php

$date = new DateTime("now");
// Change the header color
if ($date->format("H") >= 6 && $date->format("H") < 12) {
  echo "Good morning baby";
  echo '<style> h1 {background-color:blanchedalmond} </style>';
} elseif ($date->format("H") >= 12 && $date->format("H") < 19) {
  echo "Good afternoon";
  echo '<style> h1 {background-color:yellow} </style>';
} elseif ($date->format("H") >= 18 && $date->format("H") < 24) {
  echo "Good night <br>";
  echo '<style> h1 {background-color:red} </style>';
} elseif ($date->format("H") >= 0 && $date->format("H") < 6) {
  echo "Go sleep beach";
  echo '<style> h1 {background-color:cadetblue} </style>';
} else {
  echo "Wrong date format";
}

switch ($date->format("m")) {
  case 12:
  case 1:
  case 2:
    echo "The month " . $date->format("m") . " is winter";
    echo '<style> body {background-color: cadetblue} </style>';
    break;

  case 3:
  case 4:
  case 5:
    echo "The month " . $date->format("m") . " is spring";
    echo '<style> body {background-color: mediumseagreen} </style>';
    break;

  case 6:
  case 7:
  case 8:
    echo "The month " . $date->format("m") . " is summer";
    echo '<style> body {background-color: yellow} </style>';
    break;

  case 9:
  case 10:
  case 11:
    echo "The month " . $date->format("m") . " is autumn";
    echo '<style> body {background-color: orange} </style>';
    break;

  default:
    echo "Wrong date format";
    break;
}
?>
