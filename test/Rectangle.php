<?php

class Rectangle implements ShapeInterface
{
    public int|float $width;
    public int|float $height;

    public function __construct(int|float $width, int|float $height)
    {
        $this->setHeight($height);
        $this->setWidth($width);
    }

    /**
     * @param float|int $height
     */
    public function setHeight(float|int $height): void
    {
        if ($height <= 0) {
            throw new Exception('Invalid height');
        }

        $this->height = $height;
    }

    /**
     * @param float|int $width
     */
    public function setWidth(float|int $width): void
    {
        if ($width <= 0) {
            throw new Exception('Invalid width');
        }

        $this->width = $width;
    }

    /**
     * @return float|int
     */
    public function getHeight(): float|int
    {
        return $this->height;
    }

    /**
     * @return float|int
     */
    public function getWidth(): float|int
    {
        return $this->width;
    }
    /**
     * @return int|float
     */
    #[\Override] public function area(): int|float
    {
        return $this->getWidth() * $this->getHeight();
    }
}