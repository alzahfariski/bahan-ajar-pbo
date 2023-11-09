<?php

require_once "data/Product.php";

$product = new Product("Apple", 20000);

// tampilkan product get name
// tampilkan product get price

$dummy = new ProductDummy("Dummy", 1000);
$dummy->info();