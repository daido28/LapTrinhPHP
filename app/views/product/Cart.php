<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-5">

    <h1 class="fw-bold mb-4">🛒 Giỏ hàng</h1>

    <?php if (!empty($cart)): ?>

        <?php $total = 0; ?>

        <div class="card shadow border-0">

            <div class="card-body">

                <?php foreach ($cart as $id => $item): ?>

                    <?php 
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                    ?>

                    <div class="row align-items-center border-bottom py-4">

                        <!-- Hình ảnh -->
                        <div class="col-md-2 text-center">

                            <?php if ($item['image']): ?>

                                <img src="/webbanhang/<?php echo $item['image']; ?>"
                                     class="img-fluid rounded"
                                     style="max-height:120px; object-fit:cover;">

                            <?php endif; ?>

                        </div>

                        <!-- Thông tin -->
                        <div class="col-md-4">

                            <h4 class="fw-bold">
                                <?php echo htmlspecialchars($item['name']); ?>
                            </h4>

                            <p class="text-danger fw-bold fs-5">
                                <?php echo number_format($item['price']); ?> VND
                            </p>

                        </div>

                        <!-- Tăng giảm số lượng -->
                        <div class="col-md-3">

                            <div class="d-flex align-items-center">

                                <a href="/webbanhang/Product/decrease/<?php echo $id; ?>"
                                   class="btn btn-outline-danger">
                                    -
                                </a>

                                <span class="mx-3 fs-5 fw-bold">
                                    <?php echo $item['quantity']; ?>
                                </span>

                                <a href="/webbanhang/Product/increase/<?php echo $id; ?>"
                                   class="btn btn-outline-success">
                                    +
                                </a>

                            </div>

                        </div>

                        <!-- Thành tiền -->
                        <div class="col-md-3 text-end">

                            <h5 class="text-primary fw-bold">
                                <?php echo number_format($subtotal); ?> VND
                            </h5>

                        </div>

                    </div>

                <?php endforeach; ?>

                <!-- Tổng tiền -->
                <div class="d-flex justify-content-end mt-4">

                    <h3 class="fw-bold text-success">
                        Tổng tiền:
                        <?php echo number_format($total); ?> VND
                    </h3>

                </div>

            </div>

        </div>

        <!-- Button -->
        <div class="mt-4 d-flex gap-2">

            <a href="/webbanhang/Product"
               class="btn btn-secondary">
                ← Tiếp tục mua sắm
            </a>

            <a href="/webbanhang/Product/checkout"
               class="btn btn-primary">
                Thanh toán
            </a>

        </div>

    <?php else: ?>

        <div class="alert alert-warning">
            Giỏ hàng của bạn đang trống.
        </div>

    <?php endif; ?>

</div>

<?php include 'app/views/shares/footer.php'; ?>