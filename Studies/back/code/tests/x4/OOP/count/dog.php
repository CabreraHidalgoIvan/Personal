<?php

class dog extends pet
{
    public static $_dogsCount = 0;
    private $_name;

    public function __construct($_name) {
        $this -> _name;
        $this -> _dogsCount ++;
    }

    public static function getName() {
        echo 'I am a dog';
    }

    public static function getCount() {
        echo "There are " + self::$_dogsCount + " pets alive";
    }
}
