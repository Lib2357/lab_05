<?php
require_once "vendor/autoload.php";

use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'product-list';
$productCtrl = new ProductController();

switch ($page) {


    case 'product-list':
        $productCtrl->index();
        break;

    // Case hiển thị form
    case 'product-add':
        $productCtrl->create();
        break;

    // Case xử lý lưu dữ liệu (không có view, chỉ xử lý rồi chuyển trang)
    case 'product-store':
        $productCtrl->store();
        break;

    case 'product-detail':
        $id = $_GET['id'] ?? null;
        $productCtrl->show($id);
        break;
        
    case 'product-delete':
        $id = $_GET['id'] ?? null;
        $productCtrl->destroy($id);
        break;
    case 'product-edit':
    $id = $_GET['id'] ?? null;
    $productCtrl->edit($id);
    break;

case 'product-update':
    $id = $_GET['id'] ?? null;
    $productCtrl->update($id);
    break;

    // Các case khác sẽ bổ sung ở phần tiếp theo...
    default:
        echo "404 - Không tìm thấy trang!";
        break;
}