<?php

class Customer
{
    protected Dollars $account;

    public function chargeMoney(Dollars $sum): Customer
    {
        $result = $this->account - $sum->getAmount();
        if ($result < 0) {
            throw new Exception("invalid result");
        }

        return $this;
    }
}