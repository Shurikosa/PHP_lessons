<?php

require_once 'FunctionsExamples.php';
require_once 'A.php';
require_once 'B.php';

echo PHP_VERSION.'<br>';


$number1 = 5;
$string = "Hello";
	echo $number1 . "  " . $string . "  " . "Hello World!";
  echo "<input type=\"text\">".'<br>';
$number2 = 6;
if($number1 == $number2){
  echo $number1 + $number2;
}else {
  echo "numbers is not equals" . '<br>';
}
// for cycle
	for ($i = 10; $i <= 20; $i++)
		echo $i . " for " . '<br>';

// while cycle
	while ($j <= 10) {
		echo $j . " while ";
		$j++;
	}

// do while cycle
	$i = 100;
	do{
		echo '<br>' . $i . " do while ". '<br>';
	} while( $i < 10);

// asociative array
	$list = ["age" => 35, "name" => "Oleksandr", "hobby" => "coding"];

// simple array
	$arr = [5,5,6,8,9];

// foreach cycle
	 foreach ($list as $key => $value) {
	 	echo "Key: $key. Value: $value. <br>";
	 }

	 foreach ($arr as $value) {
	 	echo "Value: $value.<br>";
	 }
//foreach cycle for simple array with indexes
	 foreach ($arr as $i => $value) {
		echo "Value: $value.<br>";
	}
$functionsExamples = new FunctionsExamples();
$functionsExamples->printTitle();
echo '<br>';
$functionsExamples->value = 'Big';//Dynamic creation - bad practice!!! Because this variable is not exist
var_dump($functionsExamples); // var_dump - this is object info method
echo $functionsExamples->oddOrEven(17);
echo $functionsExamples->evenOrOddByTernarOperator(24) . PHP_EOL;

$a = new A();
$b = new B();
$a->getTest();
$a->getTest2();
$b->getTest();
$b->getTest2();
