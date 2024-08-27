<?php

/**
 * Description of Transport
 *
 * @author oleksandr
 */
abstract class Shape {
    
    protected string $color;
    
    public function __construct($color) {
        $this->color = $color;
    }
    
    //метод який має бути реалізований в усіх підкласах
    abstract public function calculateArea(): float;
    
    abstract public function describe(): string;
}
