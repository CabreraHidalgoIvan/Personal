<?php

// Restrictions
$directory ="uploads/";
$maxFileSize = "512000";
$extensions = array("jpg", "jpeg", "png", "gif");

if(isset($_FILES['img'])) {

  $error = 0;
  $fileName = $_FILES['img']['name'];
  echo "File name: " . $fileName . "<br>";
  $fileSize = $_FILES['img']['size'];
  echo "File size: " . $fileSize . "<br>";
  $tempDirectory = $_FILES['img']['tmp_name'];
  echo "Temp directory: " . $tempDirectory . "<br>";
  $fileType = $_FILES['img']['type'];
  echo "File type: " . $fileType . "<br>";
  $fileArray = pathinfo($fileName);
  var_dump($fileArray);
  echo "<br>";

  $extension = $fileArray['extension'];
  echo "Extension: " . $extension . "<br>";

  if(!in_array($extension, $extensions, true)) {
    $error = 1;
    echo "Extension not allowed" . "<br>";
  }

  if($fileSize > $maxFileSize) {
    $error = 1;
    echo "File size too big" . "<br>";
  }

  if($error === 0) {
    $completeName = $directory . $fileName;
    echo "Complete name: " . $completeName . "<br>";
    move_uploaded_file($tempDirectory, $completeName);
  }

}