<?php

var_dump($_FILES);
echo "<br>";

$directory = ini_get('upload_tmp_dir');
echo $directory;

$tempDirectory = $_FILES['img']['tmp_name'];
move_uploaded_file($tempDirectory, $_FILES['img']['name']);