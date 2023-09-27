<?php
$pageTitle = 'Cart';
include 'includes/head-vars.php';
include 'includes/navbar.php';

// session_start();
$id = $_GET['product_id'] ?? 0;
$qua = 1;

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


$existingProductIds = array_column($_SESSION['cart'], 'productid');
if (in_array($id, $existingProductIds)) {

} else {
    $_SESSION['cart'][] = array(
        "productid" => $id,
        "quantity" => $qua
    );
}


// echo '<pre>';
// print_r($_SESSION['cart']);
// echo '</pre>';

?>

<div class="offcanvas-overlay"></div>

<!-- Page Title/Header Start -->
<div class="page-title-section section"
    data-bg-image="https://htmldemo.net/learts/learts/assets/images/bg/page-title-1.webp ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-title">
                    <h1 class="title">Cart</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->

<!-- Shopping Cart Section Start -->
<div class="section section-padding">
    <div class="container">
        <form class="cart-form" action="shopping-cart.php" method="POST">
            <table class="cart-wishlist-table table">
                <thead>
                    <tr>
                        <th class="name" colspan="2">Product</th>
                        <th class="price">Price</th>
                        <th class="price">Price After Discount</th>
                        <th class="quantity">Quantity</th>
                        <th class="subtotal">Total</th>
                        <th class="remove">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>



                    <?php
                    $totalPrice = 0;

                    foreach ($_SESSION['cart'] as $products) {

                        $id = $products["productid"];


                        $sql = "SELECT * FROM products WHERE product_id='$id'";


                        $result = mysqli_query($conn, $sql);



                        if ($result && mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);




                            $product_id = $row['product_id'];
                            $product_name = $row['product_name'];
                            $product_description = $row['product_description'];
                            $product_price = $row['product_price'];
                            $product_image = $row['product_image'];
                            $product_discount = $row['product_discount'];
                            $category_id = $row['category_id'];


                            $PriceAfterDiscount = $product_price - ($product_price * $product_discount);

                            $quan = $products["quantity"];
                            $totalSingleProduct = $PriceAfterDiscount * $quan;

                            $totalPrice += $totalSingleProduct;



                            ?>

                            <tr>
                                <td class="thumbnail"><a href="product-details.php">
                                        <?php echo '<img src="data:image/webp;base64,' .
                                            base64_encode($product_image) . '" alt="product image" />'; ?>
                                    </a></td>
                                <td class="name"> <a href="product-details.php">
                                        <?php echo $product_name ?>
                                    </a></td>
                                <td class="price"><span>
                                        <?php echo $product_price ?>JD
                                    </span></td>
                                <td class="price"><span>
                                        <?php echo $PriceAfterDiscount ?>JD
                                    </span></td>
                                <td class="quantity">

                                    <div class="product-quantity">
                                        <span class="qty-btn minus"><a href="load.php?minusid=<?php echo $id ?>"><i
                                                    class="ti-minus"></i></a></span>
                                        <input type="text" class="input-qty" name="quantity" value="<?php echo $quan ?>">
                                        <span class="qty-btn plus"><a href="load.php?plusid=<?php echo $id ?>"><i
                                                    class="ti-plus"></i></a></span>
                                    </div>
                                </td>
                                <td class="subtotal"><span>
                                        <?php echo $totalSingleProduct ?>JD
                                    </span></td>
                                <td class="remove"><a href="delete_cart.php?delid=<?php echo $id ?>" class="btn">×</a></td>
                            </tr>

                        <?php }
                    } ?>


                </tbody>
            </table>
            <div class="row justify-content-between mb-n3">
                <div class="col-auto mb-3">
                    <div class="cart-coupon">
                        <input type="text" name="coupon" placeholder="Enter your coupon code">
                        <button class="btn"><i class="fas fa-gift"></i></button>
                    </div>
                </div>
                <div class="col-auto">
                    <a class="btn btn-light btn-hover-dark mr-3 mb-3" href="shop.php">Continue Shopping</a>
                </div>
            </div>
        </form>
        <div class="cart-totals mt-5">
            <h2 class="title">Cart totals</h2>
            <table>
                <tbody>
                    <tr class="subtotal">
                        <th>Subtotal</th>
                        <td><span class="amount">
                                <?php echo $totalPrice ?>JD
                            </span></td>
                    </tr>
                    <tr class="total">
                        <?php

                        $discount = 0.2;
                        $mess = '';
                        if (isset($_POST['coupon']) && $_POST['coupon'] == "group1") {
                            $total = $totalPrice - ($totalPrice * $discount);
                            $mess = 'Coupon applied successfully!';
                        } else {
                            $total = $totalPrice;
                        }
                        $_SESSION['total'] = $total; ?>
                        <h5 class="text-success">
                            <?= $mess ?>
                        </h5>
                        <th>total</th>
                        <td>
                            <strong><span class="amount">
                                    <?php echo $total ?>
                                    JD
                                </span></strong>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="savecart.php" class="btn btn-dark btn-outline-hover-dark">Proceed to checkout</a>
        </div>
    </div>

</div>
<!-- Shopping Cart Section End -->


<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>