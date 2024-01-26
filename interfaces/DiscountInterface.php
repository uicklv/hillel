<?php
interface DiscountInterface
{
    public function applyDiscount(float $total): float;
}