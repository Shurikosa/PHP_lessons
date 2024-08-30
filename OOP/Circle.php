<?php

namespace OOP;

use OOP\Shape;
/**
 * Description of Circle
 *
 * @author oleksandr
 */
class Circle extends Shape {
    
    private float $radius;
    
    public function __construct(float $radius, string $color) {
        parent::__construct($color);
        $this->radius = $radius;
    }
    #[\Override]// - не є обов'язковим, є нововведенням у PHP 8.1
    public function calculateArea(): float {
        return pi() * pow($this->radius, 2);
    }

    #[\Override]
    public function describe(): string {
        return "Figure - " . __CLASS__ . 
                PHP_EOL .
                "Radius - " . "{$this->radius}".
                PHP_EOL .
                'Area - ' . "{$this->calculateArea()}";
    }
}
