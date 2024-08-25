<?php

class Book extends Product {

    public function __construct(
            string $title,
            int $price,
            private int $numberOfPages
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
}
