<?php

class Product {
    protected array $aux = [];

    public function getProductByBarCode(string $b_code) {
        return "Product: {$b_code}";
    }
}