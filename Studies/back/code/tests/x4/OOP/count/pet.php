<?php

class pet
{
    public static $_petsCount = 0;

    public static function getName() {
        echo 'I am a pet';
    }

    public static function whoAmI() {
        static::getName();
    }

    public function _construct($_count) {
        $this -> _petsCount ++;
    }

    public static function getCount() {
        echo "There are " + self::$_petsCount + " pets alive";
    }
}