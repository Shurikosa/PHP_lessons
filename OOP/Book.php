<?php

class Book extends Product {
    
    private const PUBLISHER = 'Eneyida';// константи до php 7.1 могли бути тільки публічними

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
}
