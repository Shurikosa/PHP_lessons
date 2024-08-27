<?php

namespace OOP;

class Cart{

  private array $data = [];
  private static int $count = 0;

  public function add(Product $product): static{
    $this->data[] = $product;
    self::$count++;                                // таким чином (self::) ми даємо зрозуміти що працюэмо зі статичними полями класу 
    return $this;
  }

  public function getTotalPrice(): int|float{
    $total = 0;
    /**@var Product $item*/
    foreach ($this->data as $item){
      $total += $item->getPrice();
    }
    return $total;
  }
  
  public static function getCountOfProducts(): string {
      return 'Product count: ' . self::$count;
  }
}
