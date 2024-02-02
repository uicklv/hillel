<?php

class ParentClass
{
    public int $percent = 10;
    public function calculate(float $total): float
    {
        return plusPercent($total, $this->percent);
    }
}