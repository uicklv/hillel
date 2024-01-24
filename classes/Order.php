<?php

class Order
{
    private array $items = [];

    private $discount;

    public function __construct(array $items)
    {
        $this->setItems($items);
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        foreach ($items as $item) {
            if (!isset($item['name'], $item['price'], $item['amount'])) {
                throw new Exception("Invalid item structure");
            }

            if ($item['price'] <= 0 || $item['amount'] <= 0) {
                throw new Exception("Invalid price or amount for item");
            }
        }
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function calculateTotal(): float
    {
        $total = 0;
        $items = $this->getItems();
        foreach ($items as $item) {
            $total += $item['price'] * $item['amount'];
        }

        if ($total >= 1000) {
            $total -= $total * (10/100); // 10 percent
        }

        return $total;
    }
}