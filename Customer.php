<?php

class Customer
{
    private int $id;
    private string $firstname;
    private string $lastname;
    private int $age;
    private float $money;


    public function __construct($id, $firstname, $lastname, $age, $money)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->money = $money;
    }

    public function buyProduct(Product $p, $quantity = 1)
    {
        // $this->money = $this->money - $p->getPrice();
        if ($this->money < $p->getPrice() * $quantity)
            echo "You don't have enough money!";
        else {
            if ($p->reduceAmount($quantity))
                $this->money -= $p->getPrice() * $quantity;
            else
                echo "There is no more {$p->getProductName()}s";
        }
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function __toString()
    {
        return "Customer with id: $this->id is called $this->firstname $this->lastname and is $this->age years old. He went to the shop with {$this->money}din. <br>";
    }
}
