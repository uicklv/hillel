<?php

class Circle implements ShapeInterface
{
    public int|float $radius;

    public function __construct(int|float $radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @param float|int $radius
     */
    public function setRadius(float|int $radius): void
    {
        if ($radius <= 0) {
            throw new Exception('Invalid radius');
        }
        $this->radius = $radius;
    }

    /**
     * @return float|int
     */
    public function getRadius(): float|int
    {
        return $this->radius;
    }

    /**
     * @return int|float
     */
    #[\Override] public function area(): int|float
    {
        return pi() * pow($this->getRadius(), 2);
    }
}