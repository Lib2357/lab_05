<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">Thông tin chi tiết sản phẩm</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th style="width: 30%;">ID:</th>
                                <td><?= $product['id'] ?></td>
                            </tr>
                            <tr>
                                <th>Tên:</th>
                                <td><strong><?= htmlspecialchars($product['name']) ?></strong></td>
                            </tr>
                            <tr>
                                <th>Giá:</th>
                                <td class="text-danger fw-bold"><?= number_format($product['price'], 0, ',', '.') ?> VNĐ</td>
                            </tr>
                            <tr>
                                <th>Mô tả:</th>
                                <td><?= nl2br(htmlspecialchars($product['description'])) ?></td>
                            </tr>
                        </table>
                        <div class="text-end">
                            <a href="index.php?page=product-list" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>