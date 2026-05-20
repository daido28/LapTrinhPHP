<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-5">

    <div class="card shadow-lg">
        
        <div class="card-header bg-warning">
            <h3 class="mb-0 text-dark">Sửa sản phẩm</h3>
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
                  action="/webbanhang/Product/update"
                  enctype="multipart/form-data">

                <input type="hidden" 
                       name="id" 
                       value="<?php echo $product->id; ?>">

                <input type="hidden" 
                       name="existing_image" 
                       value="<?php echo $product->image; ?>">

                <div class="mb-3">
                    <label class="form-label">Tên sản phẩm</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea name="description"
                              class="form-control"
                              rows="4"
                              required><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Giá</label>
                    <input type="number"
                           name="price"
                           class="form-control"
                           step="0.01"
                           value="<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh mục</label>

                    <select name="category_id"
                            class="form-select"
                            required>

                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category->id; ?>"
                                <?php echo $category->id == $product->category_id ? 'selected' : ''; ?>>

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

                    <?php if ($product->image): ?>
                        <div class="mt-3">
                            <img src="/webbanhang/<?php echo $product->image; ?>"
                                 style="max-width: 150px;"
                                 class="rounded border shadow-sm">
                        </div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-warning">
                    Lưu thay đổi
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