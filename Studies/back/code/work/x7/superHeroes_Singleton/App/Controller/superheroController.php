<?php


require_once "..\Model\SuperheroModelSuperhero.php";

use App\Model\SuperheroModelSuperhero;

if (isset($_POST["Store"]) && isset($_POST["id"])) {

    $superHero = SuperheroModelSuperhero::getInstance();

    $superHero->edit(array("name"=>$_POST["name"],"superPower"=>$_POST["superPower"],"id"=>$_POST["id"]));

    header("location:../../index.php.php?message=" . $superHero->message);



} else if (isset($_POST["Store"])) {

    $superHero = SuperheroModelSuperhero::getInstance();
    $superHero->set(array("name"=>$_POST["name"],"superPower"=>$_POST["superPower"]));

    header("location:../../index.php.php?message= " . $superHero->message);



} else if (isset($_POST["Delete"])) {

    $superHero = SuperheroModelSuperhero::getInstance();
    $superHero->delete($_POST["id"]);

    header("location:../../index.php.php?message=" . $superHero->message);



} else if (isset($_POST["Search"])) {

    $superHero = SuperheroModelSuperhero::getInstance();


    $result = $superHero->getByAnyField(array("name"=>$_POST["name"],"superPower"=>$_POST["superPower"]));


    include("..\View\superHeroList.php");




}

exit();