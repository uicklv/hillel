<?php

class Square implements ShapeInterface
{
    public int|float $length;

    public function __construct(int|float $length)
    {
        $this->setLength($length);
    }

    /**
     * @param float|int $length
     */
    public function setLength(float|int $length): void
    {
        if ($length <= 0) {
            throw new Exception('Invalid length');
        }
        $this->length = $length;
    }

    /**
     * @return float|int
     */
    public function getLength(): float|int
    {
        return $this->length;
    }

    /**
     * @return int|float
     */
    #[\Override] public function area(): int|float
    {
        return pow($this->getLength(), 2);
    }
}