<?php
require_once __DIR__ . "/../../config/database.php";

class Product {
    protected array $aux = [];

    public function getProductByBarCode(string $b_code) {
        return "Product: {$b_code}";
    }

    public function getAllProducts() {
        $PDO = new Database();
        $conn = $PDO->connect();
        // Ejecutar query para obtener los datos de la base.
        return $data;
    }
}
