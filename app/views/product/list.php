<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-4">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Danh sách sản phẩm</h2>
        <a href="/webbanhang/Product/add" class="btn btn-success">
            + Thêm sản phẩm
        </a>
    </div>

    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">

                    <?php if ($product->image): ?>
                        <img 
                            src="/webbanhang/<?php echo $product->image; ?>" 
                            class="card-img-top"
                            style="height: 250px; object-fit: cover;"
                        >
                    <?php else: ?>
                        <img 
                            src="https://via.placeholder.com/300x250?text=No+Image"
                            class="card-img-top"
                            style="height: 250px; object-fit: cover;"
                        >
                    <?php endif; ?>

                    <div class="card-body d-flex flex-column">
                        
                        <h5 class="card-title">
                            <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                        </h5>

                        <p class="text-muted small">
                            <?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>
                        </p>

                        <p class="mb-1">
                            <strong>Giá:</strong> 
                            <span class="text-danger fw-bold">
                                <?php echo number_format($product->price); ?> VNĐ
                            </span>
                        </p>

                        <p>
                            <strong>Danh mục:</strong>
                            <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?>
                        </p>

                        <div class="mt-auto">
                            <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" 
                               class="btn btn-primary btn-sm">
                                Xem
                            </a>

                            <a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" 
                               class="btn btn-warning btn-sm">
                                Sửa
                            </a>

                            <a href="/webbanhang/Product/delete/<?php echo $product->id; ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                                Xóa
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php include 'app/views/shares/footer.php'; ?>