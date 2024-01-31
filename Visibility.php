<?php

require_once "data/Product.php";

$product = new Product("Apple", 6500000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 10000);
$dummy->info();