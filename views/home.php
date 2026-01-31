<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= $product['image'] ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title"><?= $product['name'] ?></h3>
                            <p class="text-danger h4 fw-bold"><?= number_format($product['price']) ?> VNĐ</p>
                            <hr>
                            <p class="card-text text-muted">Mô tả: <?= $product['description'] ?></p>
                            <a href="index.php?page=product-list" class="btn btn-secondary">Quay lại danh sách</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>