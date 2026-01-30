<?php
namespace App\Controllers;

// Import Model Student từ bài 2
use App\Models\Student;

class HomeController {
    public function index() {
        // 1. Chuẩn bị dữ liệu (Logic)
        $message = "Chào mừng bạn đến với hệ thống Mini MVC!";
        
        $studentModel = new Student();
        $studentInfo = $studentModel->getInfo();

        // 2. Gọi (include) View và truyền dữ liệu
        // Lưu ý: Các biến $message và $studentInfo sẽ có sẵn trong file home.php
        include 'views/home.php';
    }
}