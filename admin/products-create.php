<?php include('inc/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Add product
                    <a href="products.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage(); ?>
                <form enctype='multipart/form-data' action="products-code.php" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Product name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Product price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Product discount</label>
                                <input type="text" name="discount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Category</label>
                                <select name="category" class="form-select">
                                    <option value="">Select Role</option>
                                    <option value="1">Gift ideas</option>
                                    <option value="2">Home Decor</option>
                                    <option value="3">Kitchen</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Product image</label>
                                <input type="file" name="image" accept="image/*" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label>Product description</label>
                                <textarea rows="10" type="text" name="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 text-end">
                                <br>
                                <button type="submit" name="saveProduct" class="btn btn-secondary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>