<?php

class Database {
    private string $host = "localhost";
    private string $db = "tu_base_de_datos";
    private string $user = "root";
    private string $password = "tu_contraseña";
    private string $charset = "utf8mb4";

    public function connect() {
        // Constructing Data Source Name so PDO knows how to connect to a database;
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        try {
            $pdo = new PDO($dsn, $this->user, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return $pdo;
        } catch(PDOException $error) {
            $_SESSION["db_error_message"] = $error->getMessage();
            $_SESSION["db_error_code"] = $error->getCode();
            header ("Location: /database_error");
            exit;
        }

    }
}
