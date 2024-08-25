<?php

class Cart{

  private array $data = [];

  public function add(Product $product): static{
    $this->data[] = $product;
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
}
