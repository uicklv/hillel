<?php

class Shiping
{
    public int $percent = 10;
    public function calculate(float $total): float
    {
        return $total - ($total * ($this->percent / 100));
    }
}