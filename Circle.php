<?php

class Circle implements ShapeInterface, DisplayInterface
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     * @return void
     * @throws Exception
     */
    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @param float $radius
     * @return void
     * @throws Exception
     */
    private function checkRadius(float $radius): void
    {
        if ($radius <= 0) {
            throw new Exception("Invalid radius");
        }
    }

    /**
     * @return float
     */
    public function calculateArea(): float
    {
        return pi() * ($this->getRadius() ** 2);
    }

    /**
     * @return void
     */
    public function displayInfo(string $info): void
    {
        echo $info . PHP_EOL;
    }
}