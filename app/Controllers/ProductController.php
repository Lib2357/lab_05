<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController {
    public function list() {
        // 1. Lấy dữ liệu từ Model
        $model = new Product();
        $products = $model->getAllProducts();

        // 2. Truyền sang View
        include 'views/product_list.php';
    }
}