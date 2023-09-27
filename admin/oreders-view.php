<?php include('inc/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    View Order Details
                    <a href="orders.php" class="btn btn-danger btn-sm mb-0 float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <?php 
                $paramResult = chechParamId('order_id');
                if(!is_numeric($paramResult)) {
                    echo '<h5>'.$paramResult.'</h5>';
                    return false;
                }
                $order = getByIdJoin('orders', 'users', chechParamId('order_id'), 'user_id');
                if($order) {
                    if($order['status'] == 200) {

                ?>
                <table class="table table-lg table-borderd table-striped align-middle text-center w-100">
                    <tbody>
                        <tr>
                            <td>Order ID</td>
                            <td><?=$order['data']['order_id']?></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><?=$order['data']['username']?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?=$order['data']['user_email']?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><?=$order['data']['order_status']?></td>
                        </tr>
                </table>
                <?php 
                    } else {
                        echo "<h5>No Record Found</h5>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>