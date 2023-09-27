<?php include('inc/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit Product
                    <a href="products.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <form enctype='multipart/form-data' action="products-code.php" method="POST">

                    <?php 
                        $paramResult = chechParamId('product_id');
                        if(!is_numeric($paramResult)) {
                            echo '<h5>'.$paramResult.'</h5>';
                            return false;
                        }

                        $product = getById('products', chechParamId('product_id'), 'product_id');
                        if($product['status'] == 200) {

                            ?>

                            <input type="hidden" name="productId"  value="<?= $product['data']['product_id'] ;?>" required>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="col-md-12">Product image</label>
                                        <?php echo '<img class="mb-5" style="width:200px; border-radius:12px;" src="data:image/webp;base64,' . base64_encode($product['data']['product_image']) . '" />'; ?>
                                        <input type="file" accept="image/*" name="image" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="mb-3">
                                        <label>Product description</label>
                                        <textarea rows="13" name="description" class="form-control" required><?= $product['data']['product_description'] ;?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Product name</label>
                                        <input type="text" name="name" value="<?= $product['data']['product_name'] ;?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Product price</label>
                                        <input type="text" name="price" value="<?= $product['data']['product_price'] ;?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Product discount</label>
                                        <input type="text" name="discount" value="<?= $product['data']['product_discount'] ;?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Category</label>
                                        <select name="category" class="form-select">
                                            <option>Select Role</option>
                                            <option value="Gift ideas" <?= $product['data']['category_id'] == '1' ? 'selected' : '' ; ?>>Gift ideas</option>
                                            <option value="Home Decor" <?= $product['data']['category_id'] == '2' ? 'selected' : '' ; ?>>Home Decor</option>
                                            <option value="Kitchen" <?= $product['data']['category_id'] == '3' ? 'selected' : '' ; ?>>Kitchen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 text-end">
                                        <br>
                                        <button type="submit" name="updateProduct" class="btn btn-secondary">Update</button>
                                    </div>
                                </div>
                            </div>

                            <?php
                        } else {
                            echo '<h5>'.$user['message'].'</h5>';
                        }
                    ?>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>