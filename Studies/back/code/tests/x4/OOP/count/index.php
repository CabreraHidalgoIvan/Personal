<?php
require_once 'pet.php';
require_once 'cat.php';
require_once 'dog.php';

$pet1 = new pet();
$cat1 = new cat();
$dog1 = new dog();

echo pet::$_petsCount;
echo dog::$_dogsCount;
echo cat::$_catsCount;