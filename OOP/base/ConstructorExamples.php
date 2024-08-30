<?php

namespace base;

class ConstructorExamples{

//constructor before php 8
  // private ?string $name;
  // private int $id;
  //
  // public function __construct(string $name, int $id){
  //   $this->name = $name;
  //   $this->id = $id;
  // }
    
  


    //new constructor version.
  public function __construct(protected string $name, protected int $id){
  }
  
  
  //Depricated version of constructor
  public function ConstructorExamples(string $name, int $id){
      $this->name = $name;
      $this->id = $id;
  }
}
