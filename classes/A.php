<?php

class A
{
    public static $name = 'Class A';

    public function getName()
    {
        return self::$name;
    }

    public function getStaticName()
    {
        return static::$name;
    }
}