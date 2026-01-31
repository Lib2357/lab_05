<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Thêm sản phẩm mới</h4>
                    </div>
                    <div class="card-body">
                        <form action="?page=product-store" method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm..." required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Giá sản phẩm (VNĐ)</label>
                                <input type="number" name="price" class="form-control" placeholder="Ví dụ: 150000" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Mô tả sản phẩm</label>
                                <textarea name="description" class="form-control" rows="4" placeholder="Nhập mô tả chi tiết..."></textarea>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="?page=product-list" class="btn btn-secondary">Quay lại</a>
                                <button type="submit" class="btn btn-success px-4">Lưu sản phẩm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>