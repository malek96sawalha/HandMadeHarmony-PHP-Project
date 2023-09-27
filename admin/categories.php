<?php include('inc/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Category Lists
                    <a href="categories-create.php" class="btn btn-secondary float-end">Add categories</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage(); ?>
                <div class="table-responsive">
                    <table class="table table-lg table-borderd table-striped align-middle text-center" style="width:100%">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>image</th>
                                <th>name</th>
                                <th>description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $categories = getAll('categories');
                                if(mysqli_num_rows($categories) > 0) {
                                    foreach($categories as $categoryItem) {
                                        ?>
                                        <tr>
                                            <td><?= $categoryItem['category_id'] ?></td>
                                            <td><?= '<img style="width:120px;"  src="data:image/webp;base64,' . base64_encode($categoryItem['category_image']) . '" />'; ?></td>
                                            <td><?= $categoryItem['category_name'] ?></td>
                                            <td><?= $categoryItem['categories_description'] ?></td>
                                            <td>
                                                <a href="categories-edit.php?category_id=<?= $categoryItem['category_id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                                <a href="categories-delete.php?category_id=<?= $categoryItem['category_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
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
