<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Quản lý sản phẩm</h4>
                <a href="?page=product-add" class="btn btn-light btn-sm fw-bold">Thêm mới</a>
            </div>
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 10%;">ID</th>
                            <th style="width: 45%;">Tên sản phẩm</th>
                            <th style="width: 20%;">Giá (VNĐ)</th>
                            <th style="width: 25%;" class="text-center">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($products)): ?>
                            <?php foreach ($products as $item): ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><strong><?= htmlspecialchars($item['name']) ?></strong></td>
                                <td class="text-danger fw-bold">
                                    <?= number_format($item['price'], 0, ',', '.') ?>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="?page=product-detail&id=<?= $item['id'] ?>" class="btn btn-info btn-sm text-white">Xem</a>
                                        <a href="?page=product-edit&id=<?= $item['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                                        <a href="?page=product-delete&id=<?= $item['id'] ?>" 
                                           class="btn btn-danger btn-sm" 
                                           onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center text-muted">Không có sản phẩm nào trong danh sách.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>