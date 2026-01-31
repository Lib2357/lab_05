<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {
    protected $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function index() {
        // 1. Gọi Model lấy dữ liệu
        $products = $this->productModel->all();

        // 2. Gọi View (Truyền biến $products sang view)
        include "views/product_list.php";
    }

    public function destroy($id) {
    // Gọi model thực hiện xóa
    $this->productModel->delete($id);

    
    
    // Điều hướng về trang danh sách kèm thông báo (nếu muốn)
    header("Location: index.php?page=product-list");
    exit();
}

public function show($id) {
    $product = $this->productModel->find($id);
    
    if (!$product) {
        echo "Sản phẩm không tồn tại!";
        return;
    }

    include "views/product-detail.php";
}


// Hiển thị form thêm mới
public function create() {
    include "views/product_add.php";
}

// Xử lý dữ liệu từ POST gửi lên
public function store() {
    // 1. Kiểm tra xem người dùng có submit form không
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // 2. Lấy dữ liệu từ $_POST
        $name = $_POST['name'] ?? '';
        $price = $_POST['price'] ?? 0;
        $description = $_POST['description'] ?? '';

        // 3. Kiểm tra sơ bộ (Validate)
        if (empty($name) || empty($price)) {
            // Bạn có thể cải tiến bằng cách thông báo lỗi ra View
            die("Lỗi: Tên sản phẩm và Giá không được để trống!");
        }

        // 4. Chuẩn bị mảng dữ liệu để gửi sang Model
        $data = [
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'image' => '' // Tạm thời để trống ở phần này
        ];

        // 5. Gọi hàm lưu của Model (Hàm insert này sẽ viết ở Phần 4)
        $this->productModel->insert($data);

        // 6. Sau khi lưu thành công, chuyển hướng về trang danh sách
        header("Location: index.php?page=product-list");
        exit();
    }
}

// 1. Hiển thị form sửa với dữ liệu cũ
public function edit($id) {
    $product = $this->productModel->find($id);
    if (!$product) {
        die("Sản phẩm không tồn tại!");
    }
    include "views/product_edit.php";
}

// 2. Xử lý lưu dữ liệu vừa sửa
public function update($id) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'description' => $_POST['description']
        ];

        if ($this->productModel->update($id, $data)) {
            header("Location: index.php?page=product-list");
            exit();
        } else {
            echo "Có lỗi xảy ra khi cập nhật!";
        }
    }
}
}