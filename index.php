<?php


/**
 * require і require_once це один зі способів імпорту класів.
 * далі буде приклад імпорту за допомогою namespace та slp_autoload_register()
 */
//require __DIR__ . '/Product.php';
//require __DIR__ . '/Phone.php';
//require __DIR__ . '/Cart.php';
//require_once 'Book.php';
//require_once 'Shape.php';
//require_once 'IShape.php';
//require_once 'Circle.php';
//require_once 'Rectangle.php';
//require_once 'Triangle.php';

use OOP\Product;
use OOP\Cart;
use OOP\Phone;
use OOP\Book;
use OOP\Circle;
use OOP\Rectangle;
use OOP\Triangle;


function autoloader($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . "/{$class}.php";
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('autoloader');


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
echo Cart::getCountOfProducts() . PHP_EOL; // виклик статичного методу відбувається через оператор - ::

 echo $product2->info() . PHP_EOL;
 echo $book->info() . PHP_EOL;
 echo $phone->info(). PHP_EOL;
 echo $phone->getRealPrice() . PHP_EOL;

$circle = new Circle(8, 'red');
$rectangle = new Rectangle(45, 63, 'blue');
$triangle = new Triangle(5,5,5);

echo $circle->describe(). PHP_EOL;
echo $rectangle->describe(). PHP_EOL;
echo $triangle->describe() . PHP_EOL;
