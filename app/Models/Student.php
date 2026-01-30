<?php
// Namespace phải khớp với cấu hình trong composer.json và đường dẫn thư mục
namespace App\Models;

class Student {
    public function getInfo() {
        return "Sinh viên: Nguyễn Văn A - Lớp: WD18301";
    }
}