<?php

require_once __DIR__ . '/../models/product.php';

class ProductController {
    public function index() {
        echo "Productos";
    }

    public function searchProduct() {
        $product = new Product;
        echo $product -> getProductByBarCode("Product");
        return;
    }
}