<?php
namespace App\Models;
use PDO;
use PDOException;

class BaseModel {
    protected $pdo;

    public function __construct() {
        // Thông số cấu hình Database
        $host = "localhost";
        $dbname = "lab2_db"; // Tên database của bạn
        $username = "root";
        $password = ""; 

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            // Thiết lập chế độ báo lỗi để dễ debug
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Lỗi kết nối database: " . $e->getMessage());
        }
    }
}