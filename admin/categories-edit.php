<?php include('inc/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit Category
                    <a href="categories.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <form enctype='multipart/form-data' action="categories-code.php" method="POST">

                    <?php 
                        $paramResult = chechParamId('category_id');
                        if(!is_numeric($paramResult)) {
                            echo '<h5>'.$paramResult.'</h5>';
                            return false;
                        }

                        $category = getById('categories', chechParamId('category_id'), 'category_id');
                        if($category['status'] == 200) {

                            ?>

                            <input type="hidden" name="categoryId" value="<?= $category['data']['category_id'] ;?>" required>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label>Category name</label>
                                        <input type="text" name="name" value="<?= $category['data']['category_name'] ;?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label>Category image</label>
                                        <?php echo '<img class="mb-5" style="width:400px; border-radius:12px;" src="data:image/webp;base64,' . base64_encode($category['data']['category_image']) . '" />'; ?>
                                        <input type="file" name="catImage" accept="image/*" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="mb-3">
                                        <label>Category description</label>
                                        <textarea rows="13" name="description" class="form-control" required><?= $category['data']['categories_description'] ;?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 text-end">
                                        <br>
                                        <button type="submit" name="updateCategory" class="btn btn-secondary">Update</button>
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