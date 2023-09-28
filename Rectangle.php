<?php

class Rectangle implements ShapeInterface, DisplayInterface
{
    private float $width;
    private float $height;

    public function __construct(float $width, float $height)
    {
        $this->setWidth($height);
        $this->setHeight($width);
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $height
     * @return void
     * @throws Exception
     */
    public function setHeight(float $height): void
    {
        if (!$this->checkProperty($height)) {
            throw new Exception("Invalid height");
        }

        $this->height = $height;
    }

    /**
     * @param float $width
     * @return void
     * @throws Exception
     */
    public function setWidth(float $width): void
    {
        if (!$this->checkProperty($width)) {
            throw new Exception("Invalid width");
        }
        $this->width = $width;
    }

    /**
     * @param float $property
     * @return bool
     */
    private function checkProperty(float $property): bool
    {
        if ($property <= 0) {
            return false;
        }
        return true;
    }

    /**
     * @return float
     */
    public function calculateArea(): float
    {
        return $this->getHeight() * $this->getWidth();
    }

    /**
     * @return void
     */
    public function displayInfo(string $info): void
    {
        echo $info . PHP_EOL;
    }
}