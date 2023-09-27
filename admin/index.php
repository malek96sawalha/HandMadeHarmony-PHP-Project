<?php
include_once('inc/header.php');

?>

<div class="row">
    <?=alertMessage();?>
    <div class="col-md-3 mb-4">
        <div class="card card-body p-3">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Users Registered</p>
            <h5 class="font-weight-bolder mb-0">
                <?php echo calculateTable('users'); ?>
            </h5>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-body p-3">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Categories</p>
            <h5 class="font-weight-bolder mb-0">
                <?php echo calculateTable('categories'); ?>
            </h5>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-body p-3">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Products</p>
            <h5 class="font-weight-bolder mb-0">
                <?php echo calculateTable('products'); ?>
            </h5>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-body p-3">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Orders</p>
            <h5 class="font-weight-bolder mb-0">
                <?php echo calculateTable('orders'); ?>
            </h5>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>

