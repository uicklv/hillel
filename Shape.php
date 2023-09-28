<?php

abstract class Shape
{
    protected float $area;

    abstract public function calculateArea(): float;

    public function displayInfo()
    {
        if (isset($this->area)) {
            echo $this->area . PHP_EOL;
        } else {
            echo "Pls calculate area!";
        }
    }
}