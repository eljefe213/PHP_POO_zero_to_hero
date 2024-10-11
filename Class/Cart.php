<?php

class Cart
{
    public int $quantity;
    public float $totalPrice;

    public function __construct(int $quantity, float $totalPrice)
    {
        $this->quantity = $quantity;
        $this->totalPrice = $totalPrice;
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }
}
