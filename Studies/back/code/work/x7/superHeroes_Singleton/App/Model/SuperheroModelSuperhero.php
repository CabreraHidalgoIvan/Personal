<?php

namespace App\Model;

require_once("DBAbstractModelSuperhero.php");

class SuperheroModelSuperhero extends DBAbstractModelSuperhero
{

    private static $instance;
    private $id;
    private $nameHero;
    private $superPower;


    public static function getInstance()
    {

        if (!isset(self::$instance)) {
            $myclass = __CLASS__;
            self::$instance = new $myclass;
        }
        return self::$instance;
    }

    public function __clone()
    {
        trigger_error('La clonación no es permitida!.', E_USER_ERROR);
    }


    public function setNameHero($nameHero)
    {
        $this->nameHero = $nameHero;
    }

    public function setSuperPower($superPower)
    {
        $this->superPower = $superPower;

    }

    public function getMenssage()
    {
        return $this->message;
    }

    public function storeOnDatabase()
    {
        $this->query = "INSERT INTO superhero(nameHero, superPower) VALUES(:nameHero, :superPower)";

        $this->parameters['nameHero'] = $this->nameHero;
        $this->parameters['superPower'] = $this->superPower;
        $this->getResultsFromQuery();

        $this->message = "Superheroes Added: ";
    }

    public function setSuperHero($superHeroData = array())
    {
        if (array_key_exists('id', $superHeroData)) {
            $this->get($superHeroData['id']);
            if ($superHeroData['id'] != $this->id) {
                foreach ($superHeroData as $key => $value) {
                    $this->$key = $value;
                }

                $this->query = "INSERT INTO superhero(nameHero, superPower) VALUES(:nameHero, :superPower)";

                $this->parameters['nameHero'] = $this->nameHero;
                $this->parameters['superPower'] = $this->superPower;
                $this->getResultsFromQuery();

                $this->message = "Superhero Created";
            } else {
                $this->message = "Superhero Already Exists";
            }
        } else {
            $this->message = "Superhero not added";
        }
    }

    public function set($userData = array())
    {
        foreach ($userData as $key => $value) {
            $this->$key = $value;
        }

        $this->query = "INSERT INTO superhero(nameHero, superPower)
VALUES(:name, :superPower)";

        $this->parameters['nameHero'] = $this->nameHero;
        $this->parameters['superPower'] = $this->superPower;
        $this->getResultsFromQuery();

        $this->message = "Superhero Added Successfully";
    }


    public function get($id = '')
    {

        if ($id != '') {
            $this->query = "SELECT * FROM superhero WHERE id = :id";
            $this->parameters['id'] = $id;
            $this->getResultsFromQuery();
        }

        if (count($this->rows) == 1) {
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }
            $this->message = "Superhero Found";
        } else {
            $this->message = "Superhero Not Found";
        }

        return $this->rows;
    }

    public function edit($userData = array())
    {
        foreach ($userData as $key => $value) {
            $this->$key = $value;
        }

        $this->query = "UPDATE superhero SET nameHero = :nameHero, superPower = :superPower WHERE id = :id";
        $this->parameters['id'] = $this->id;
        $this->parameters['nameHero'] = $this->nameHero;
        $this->parameters['superPower'] = $this->superPower;
        $this->getResultsFromQuery();

        $this->message = "Superhero Updated Successfully";
    }

    public function delete($id = '')
    {
        $this->query = "DELETE FROM superhero WHERE id = :id";
        $this->parameters['id'] = $id;
        $this->getResultsFromQuery();

        $this->message = "Superhero Deleted Successfully";
    }

    public function __construct()
    {
        // Singleton no recomienda parámetros ya que
// podría dificultar la lectura de las instancias.
    }
}