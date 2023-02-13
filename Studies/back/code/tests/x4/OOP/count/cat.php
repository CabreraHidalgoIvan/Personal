<?php

class cat extends pet
{
    public static $_catsCount = 0;
    private $_name;

    public function _construct($_count, $_name) {
        $this -> _name;
        $this -> _catsCount ++;
    }

    public static function getName() {
        echo 'I am a cat';
    }

    public static function getCount() {
        echo "There are " + self::$_catsCount + " pets alive";
    }
}