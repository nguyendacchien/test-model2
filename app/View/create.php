<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            <h3> Thêm mới Product</h3>
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" >
                        <?php if (isset($errors['name'])): ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category:</label>
                        <input type="text" name="category" class="form-control" >
                        <?php if (isset($errors['category'])): ?>
                            <p class="text-danger"><?php echo $errors['category'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">

                        <label class="form-label">price:</label>
                        <input type="text" name="price" class="form-control" >
                        <?php if (isset($errors['price'])): ?>
                            <p class="text-danger"><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="text" class="form-control" name="quantity" >
                        <?php if (isset($errors['quantity'])): ?>
                            <p class="text-danger"><?php echo $errors['quantity'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">date</label>
                        <input type="date" class="form-control" name="date" >
                        <?php if (isset($errors['date'])): ?>
                            <p class="text-danger"><?php echo $errors['date'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">detail</label>
                        <input type="text" class="form-control" name="detail" required>
                        <?php if (isset($errors['detail'])): ?>
                            <p class="text-danger"><?php echo $errors['detail'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a type="button" href="index.php?page=list" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>
