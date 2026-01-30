<?php
namespace App\Models;

use PDO; // Quan trọng
use PDOException; // Quan trọng

class BaseModel {
    protected $connect;

    public function __construct() {
        try {
            // Nếu đã có 'use PDO' ở trên thì không cần \PDO
            $this->connect = new PDO("mysql:host=localhost;dbname=lab2_db;charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}