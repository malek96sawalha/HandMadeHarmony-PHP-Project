<?php include('inc/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Add category
                    <a href="categories.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage(); ?>
                <form enctype='multipart/form-data' action="categories-code.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Category name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Category image</label>
                                <input type="file" name="catImage" accept="image/*" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label>Category description</label>
                                <textarea rows="10" type="text" name="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 text-end">
                                <br>
                                <button type="submit" name="saveCategory" class="btn btn-secondary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>