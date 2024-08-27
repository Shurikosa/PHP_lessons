<?php

/**
 * Description of Triangle
 *
 * @author oleksandr
 */
class Triangle implements IShape{
    
    private float $sideA;
    private float $sideB;
    private float $sideC;  
    
    public function __construct(float $sideA, float $sideB, float $sideC) {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }

    #[\Override]
    public function calculateArea(): float {
        $semiPerimeter = ($this->sideA + $this->sideB + $this->sideC) / 2;
        return sqrt($semiPerimeter * 
                ($semiPerimeter - $this->sideA) * 
                ($semiPerimeter - $this->sideB) * 
                ($semiPerimeter - $this->sideC));
    }
    

    #[\Override]
    public function calculatePerimeter(): float {
    return $this->sideA + $this->sideB + $this->sideC;
    }

    #[\Override]
    public function describe(): string {
        return 'Figure - ' . __CLASS__ . 
                PHP_EOL .
                'Perimeter - ' . "{$this->calculatePerimeter()}" . 
                PHP_EOL .
                'Area - ' . "{$this->calculateArea()}";
    }
}

