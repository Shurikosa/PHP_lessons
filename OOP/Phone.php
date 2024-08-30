<?php

namespace OOP;

use \traits\TColor;

class Phone extends Product{
    
    use TColor;

// TODO раннє чи пізнє зв'язування?
  public function __construct(
    string $title,
    int $price,
    private string $modelName
  )
  {
    parent::__construct($title, $price);
  }

  public function info(): string{
    $parentInfo = parent::info();
    return $parentInfo . "MODEL NAME: {$this->modelName}";
  }

  public function getModelName(): string{
    return $this->modelName;
  }


}
