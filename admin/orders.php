<?php include('inc/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Orders Details
                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage(); ?>
                <div class="table-responsive">
                    <table class="table table-lg table-borderd table-striped align-middle text-center" style="width:100%">
                        <thead>
                            <tr>
                                <th>O.N.</th>
                                <th>Customer</th>
                                <th>Contact</th>
                                <th>OrderDate</th>
                                <th>Order Status</th>
                                <th>More Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $orders = validate('orders');

                                $query = "SELECT * FROM $orders INNER JOIN users ON orders.user_id = users.user_id;";
                                $result = mysqli_query($conn, $query);

                                if(mysqli_num_rows($result) > 0) {
                                    foreach($result as $orederItem) {
                                        ?>
                                        <tr>
                                            <td><?= $orederItem['order_id'] ?></td>
                                            <td><?= $orederItem['username'] ?></td>
                                            <td><?= $orederItem['user_phone'] ?></td>
                                            <td><?= $orederItem['order_date'] ?></td>
                                            <td><?= $orederItem['order_status'] ?></td>
                                            <td>
                                                <a href="oreders-view.php?order_id=<?= $orederItem['order_id'] ?>" class="btn btn-info btn-sm">View</a>
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
