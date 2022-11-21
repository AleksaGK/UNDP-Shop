<?php

require("Customer.php");
require("Product.php");

$c = new Customer(1, "Aleksa", "Miletic", 24, 1000);

$p1 = new Product(1, "Smoki", 'sweet', 90, 3);
$p2 = new Product(2, "Smederevka", 'wine', 600, 5);
$p3 = new Product(3, "Chocolate", 'sweet', 110, 10);

echo $c;

echo $p1;
echo $p2;
echo $p3;

// echo "<br>Procetak:" . $p1->getAmount() . "<br>";
$c->buyProduct($p1, 4);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1);
// echo "<br>" . $p1->getAmount() . "<br>";
$c->buyProduct($p2);
echo "<br>" . $p2->getAmount() . "<br>";
// $c->buyProduct($p2);
// $c->buyProduct($p2);

echo $c->getMoney();
