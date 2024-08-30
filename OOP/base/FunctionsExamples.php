<?php

namespace base;
/**
 *
 */
class FunctionsExamples
{

public ?string $title = 'Some title';//   char "?" near "string" - mean that this variale can be null

  public function printTitle()
  {
    echo $this->title;
  }

  public function oddOrEven(int $input) : string
  {
    $result = $input % 2;
    if($result === 0)
    {
      return "Even";
    }else
    {
      return "Odd";
    }
  }

  public function evenOrOddByTernarOperator(int $input) : string
  {
    return($input % 2 === 0) ? "Even" : "Odd";
  }
}
