<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            <h3> UpDate Product</h3>
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <?php if (isset($products)) {
                        foreach ($products as $item): ?>
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $item->name ?>" >
                        <?php if (isset($errors['name'])): ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <input type="text" name="category" class="form-control"  value="<?php echo $item->category ?>">
                        <?php if (isset($errors['category'])): ?>
                            <p class="text-danger"><?php echo $errors['category'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">

                        <label class="form-label">price</label>
                        <input type="text" name="price" class="form-control" value="<?php echo $item->price ?>" >
                        <?php if (isset($errors['price'])): ?>
                            <p class="text-danger"><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="text" class="form-control" name="quantity"  value="<?php echo $item->quantity ?>">
                        <?php if (isset($errors['quantity'])): ?>
                            <p class="text-danger"><?php echo $errors['quantity'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">date</label>
                        <input type="date" class="form-control" name="date" value="<?php echo $item->date ?>" >
                        <?php if (isset($errors['date'])): ?>
                            <p class="text-danger"><?php echo $errors['date'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">detail</label>
                        <input type="text" class="form-control" name="detail" value="<?php echo $item->detail ?>">
                        <?php if (isset($errors['detail'])): ?>
                            <p class="text-danger"><?php echo $errors['detail'] ?></p>
                        <?php endif; ?>
                        <?php endforeach;
                        } ?>

                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a type="button" href="index.php?page=list" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>
