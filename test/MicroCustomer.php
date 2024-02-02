<?php

class MicroCustomer extends Customer
{
    public function putMoney(int|float $sum): void
    {
        if ($sum <= 0) {
            throw new Exception("invalid sum");
        }

        if ($sum > 100) {
            throw new Exception("invalid sum");
        }

        $this->account += $sum;
    }
}