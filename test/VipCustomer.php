<?php

class VipCustomer extends Customer
{
    public function chargeMoney(Dollars $sum): VipCustomer
    {
        $result = $this->account - $sum->getAmount();
        if ($result < 1000) {
           $result -= 5;
        }

        return $this;
    }

    public function test()
    {

    }
}