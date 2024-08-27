<?php


/**
 *
 * @author oleksandr
 */
interface IShape {
    
    public function calculateArea(): float;
    public function calculatePerimeter(): float;
    public function describe(): string;

}
