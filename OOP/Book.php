<?php

namespace OOP;

use OOP\Product;


class Book extends Product {
    /*
     *  константи до php 7.1 могли бути тільки публічними
        константи можна перевизначати в підкласах                  
        належать класу тп. як статичні
     */
    private const PUBLISHER = 'Eneyida';
    
    
    public function __construct(
            string $title,
            int $price,
            private int $numberOfPages,
    ) {
        parent::__construct($title, $price);
    }

    public function info(): string {
        $parentInfo = parent::info();
        return $parentInfo . "NUMBER OF PAGES: {$this->numberOfPages}";
    }

    public function getNumberOfPages(): int {
        return $this->numberOfPages;
    }
    
    public function getPublisher(): string {
        return self::PUBLISHER;
    }
    
    public function __toString() {
        $result = parent::info();
        $result .= "NUMBER OF PAGES: {$this->numberOfPages}" . PHP_EOL;
        $result .= 'PUBLISHER: ' . self::PUBLISHER;
        return $result;
        
    }
}
