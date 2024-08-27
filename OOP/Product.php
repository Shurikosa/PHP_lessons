<?php

class Product
{
  public function __construct(
    protected string $title,
    protected int $price
)
  {
  }
  public function sayHello(): string{
    return 'Hello from ' . __CLASS__;// constant variable __CLASS__ mean current class name
  }

  public function getRealPrice($currency = '$') : string{
      return "{$currency}" . $this->price / 100;
    }

    public function setPrice($input){
      $this->price = $input;
    }

    public function info(): string{
      return "\nABOUT PRODUCT:\nNAME: {$this->title}\nPRICE:{$this->getRealPrice()}\n";
    }
    public function getTitle(): string{
      return $this->title;
    }
    public function getPrice(): int{
      return $this->price;
    }
}
