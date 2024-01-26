<?php

class FixedDiscount implements DiscountInterface, Test
{
    private float $discount;

    private float $limit;

    public function __construct(float $discount, float $limit)
    {
        $this->setDiscount($discount);
        $this->setLimit($limit);
    }

    /**
     * @param float $total
     * @return float
     */
    #[\Override] public function applyDiscount(float $total): float
    {
        if ($total >= $this->getLimit()) {
            $total -= $this->getDiscount();
        }

        return $total;
    }

    /**
     * @param float $limit
     */
    public function setLimit(float $limit): void
    {
        if ($limit <= 0) {
            throw new Exception('Invalid limit');
        }
        $this->limit = $limit;
    }

    /**
     * @param float $discount
     */

    public function setDiscount(float $discount): void
    {
        if ($discount <= 0) {
            throw new Exception('Invalid discount');
        }

        $this->discount = $discount;
    }

    /**
     * @return float
     */
    public function getLimit(): float
    {
        return $this->limit;
    }

    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @param string $text
     */
    #[\Override] public function test(string $text): void
    {
        echo $text;
    }
}