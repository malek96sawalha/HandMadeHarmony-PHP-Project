<?php include('inc/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Products Lists
                    <a href="products-create.php" class="btn btn-secondary float-end">Add Product</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>
                <div class="table-responsive ">
                    <table class="table table-lg table-borderd table-striped align-middle text-center">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>image</th>
                                <th>name</th>
                                <th>description</th>
                                <th>price</th>
                                <th>discount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $products = getAll('products');
                                if(mysqli_num_rows($products) > 0) {
                                    foreach($products as $productItem) {
                                        ?>
                                        <tr>
                                            <td><?= $productItem['product_id'] ?></td>
                                            <td><?php echo '<img style="width:80px;" src="data:image/webp;base64,' . base64_encode($productItem['product_image']) . '" />'; ?></td>
                                            <td><?= $productItem['product_name'] ?></td>
                                            <td><?= $productItem['product_description'] ?></td>
                                            <td><?= $productItem['product_price'] ?></td>
                                            <td><?= $productItem['product_discount'] ?></td>
                                            <td>
                                                <a href="products-edit.php?product_id=<?= $productItem['product_id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                                <a href="products-delete.php?product_id=<?= $productItem['product_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="7">No Record Found</td>
                                    </tr>
                                    <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>
