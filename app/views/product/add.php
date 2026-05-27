<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-5">
    
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h3 class="mb-0">Thêm sản phẩm mới</h3>
        </div>

        <div class="card-body">

            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" 
                  action="/webbanhang/Product/save" 
                  enctype="multipart/form-data">

                <div class="mb-3">
                    <label class="form-label">Tên sản phẩm</label>
                    <input type="text" 
                           name="name" 
                           class="form-control" 
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea name="description" 
                              class="form-control" 
                              rows="4" 
                              required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Giá sản phẩm</label>
                    <input type="number" 
                           name="price" 
                           class="form-control" 
                           step="0.01" 
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Số lượng</label>
                    <input type="number"
                            name="quantity"
                            class="form-control"
                            min="0"
                            required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh mục</label>
                    <select name="category_id" 
                            class="form-select" 
                            required>

                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category->id; ?>">
                                <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                            </option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hình ảnh</label>
                    <input type="file" 
                           name="image" 
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-success">
                    Thêm sản phẩm
                </button>

                <a href="/webbanhang/Product/list" 
                   class="btn btn-secondary">
                    Quay lại
                </a>

            </form>
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>