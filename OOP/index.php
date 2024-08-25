<?php

error_reporting(-1);
// require_once 'Product.php';
// require_once 'Cart.php';
require __DIR__ . '/Product.php';
require __DIR__ . '/Phone.php';
require __DIR__ . '/Cart.php';
require_once 'Book.php';

$product = new Product('Some product', 1000);
$product2 = new Product('Some product 2', 500); 
$book = new Book('Story Book', 10000, 480);
$phone = new Phone('Samsung', 12000, 'galaxy');
$cart = new Cart();

echo $cart->add($product)->getTotalPrice() . PHP_EOL;
echo $cart->add($product2)->getTotalPrice() . PHP_EOL;
echo $cart->add($phone)->getTotalPrice() . PHP_EOL;
echo $cart->add($book)->getTotalPrice() . PHP_EOL;
echo $cart->getCountOfProducts() . PHP_EOL;
//
// echo $product2->info() . PHP_EOL;
// echo $book->info() . PHP_EOL;
// echo $phone->info(). PHP_EOL;
// echo $phone->getRealPrice() . PHP_EOL;
