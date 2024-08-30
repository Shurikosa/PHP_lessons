<?php

namespace OOP;

use OOP\Shape;

/**
 * Description of Rectangle
 *
 * @author oleksandr
 */
class Rectangle extends Shape{
    
    private float $width;
    private float $height;
    
    public function __construct(float $width, float $height, string $color) {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }
    
    #[\Override]
    public function calculateArea(): float {
        return $this->height * $this->width;
    }

    #[\Override]
    public function describe(): string {
        return 'Figure - ' . __CLASS__ . 
                PHP_EOL .
                'Width - ' . "{$this->width}" . 
                PHP_EOL .
                'Height - ' . "{$this->height}".
                PHP_EOL .
                'Area - ' . "{$this->calculateArea()}";
    }
}
