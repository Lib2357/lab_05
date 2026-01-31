<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">Chỉnh sửa sản phẩm: <?= htmlspecialchars($product['name']) ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="?page=product-update&id=<?= $product['id'] ?>" method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($product['name']) ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Giá sản phẩm (VNĐ)</label>
                                <input type="number" name="price" class="form-control" value="<?= $product['price'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Mô tả sản phẩm</label>
                                <textarea name="description" class="form-control" rows="4"><?= htmlspecialchars($product['description']) ?></textarea>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="?page=product-list" class="btn btn-secondary">Hủy bỏ</a>
                                <button type="submit" class="btn btn-warning px-4">Cập nhật thay đổi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>