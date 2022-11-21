<?php

class Product
{
    private int $id;
    private string $productName;
    private string $productType;
    private float $price;
    private int $amount;

    public function __construct($id, $productName, $productType, $price, $amount)
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->productType = $productType;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function reduceAmount($quantity)
    {
        if ($this->amount >= $quantity) {
            $this->amount -= $quantity;
            return TRUE;
        } else {
            return FALSE;
        }
        // if ($this->amount == 0)
        //     return FALSE;
        // $this->amount--;
        // return TRUE;
    }

    public function __toString()
    {
        return "Product: $this->productName with id: $this->id is type of $this->productType. Price of this product is {$this->price}din and its amount is $this->amount <br>";
    }
}
