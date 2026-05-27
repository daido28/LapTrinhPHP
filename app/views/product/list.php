<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Danh sách sản phẩm</h1>

        <a href="/webbanhang/Product/add"
           class="btn btn-success">
            + Thêm sản phẩm
        </a>
    </div>

    <div class="row">

        <?php foreach ($products as $product): ?>

            <div class="col-md-4 mb-4">

                <div class="card h-100 shadow-sm border-0">

                    <?php if ($product->image): ?>

                        <img src="/webbanhang/<?php echo $product->image; ?>"
                             class="card-img-top"
                             style="height:250px; object-fit:cover;">

                    <?php endif; ?>

                    <div class="card-body">

                        <h4 class="card-title">
                            <?php echo htmlspecialchars($product->name); ?>
                        </h4>

                        <p class="text-muted">
                            <?php echo htmlspecialchars($product->description); ?>
                        </p>

                        <p>
                            <strong>Giá:</strong>
                            <?php echo number_format($product->price); ?> VND
                        </p>

                        <p>
                            <strong>Số lượng:</strong>
                            <?php echo $product->quantity; ?>
                        </p>

                        <p>
                            <strong>Danh mục:</strong>
                            <?php echo htmlspecialchars($product->category_name); ?>
                        </p>
                        <?php if ($product->quantity > 0): ?>

                            <p class="text-success fw-bold">
                                Còn hàng
                            </p>

                        <?php else: ?>

                            <p class="text-danger fw-bold">
                                Hết hàng
                            </p>

                        <?php endif; ?>

                    </div>

                    <div class="card-footer bg-white border-0">

                        <a href="/webbanhang/Product/edit/<?php echo $product->id; ?>"
                           class="btn btn-warning btn-sm">
                            Sửa
                        </a>

                        <a href="/webbanhang/Product/delete/<?php echo $product->id; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Bạn có chắc muốn xóa?');">
                            Xóa
                        </a>

                        <?php if ($product->quantity > 0): ?>

<a href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>"
   class="btn btn-primary">
    Thêm vào giỏ hàng
</a>

<?php else: ?>

<button class="btn btn-secondary" disabled>
    Hết hàng
</button>

<?php endif; ?>
                        

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

<?php include 'app/views/shares/footer.php'; ?>