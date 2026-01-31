<?php
namespace App\Models;

use PDO;

class Product extends BaseModel {
    // Hàm lấy toàn bộ danh sách sản phẩm
    public function all() {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute([$id]);

    
}
public function find($id) {
    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(\PDO::FETCH_ASSOC); // Lấy ra 1 mảng duy nhất
}

public function update($id, $data) {
    $sql = "UPDATE products SET name = ?, price = ?, description = ? WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute([
        $data['name'], 
        $data['price'], 
        $data['description'], 
        $id
    ]);
}
}