<?php
// Include necessary files and establish database connection

// Include header and navigation
$pageTitle = 'Wishlist';
include 'includes/head-vars.php';
include 'includes/navbar.php';


// Retrieve wishlist items with associated product information
$query = "SELECT w.product_id, p.product_name, p.product_image, p.product_price 
FROM wish_list w
INNER JOIN products p ON w.product_id = p.product_id";
$result = mysqli_query($conn, $query);

?>
<div class="offcanvas-overlay"></div>

<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="https://htmldemo.net/learts/learts/assets/images/bg/page-title-1.webp ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-title">
                    <h1 class="title">Wishlist</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->

<!-- Wishlist Section Start -->
        <div class="section section-padding">
            <div class="container">
                <form class="cart-form" action="#">
                <table class="cart-wishlist-table table">
            <tr>
                <th class="name"rowspan="2" >Product</th>
                <th class="name"rowspan="2" >Image</th>
                <th class="price" rowspan="2">Unit Price</th>
                <th class="add-to-cart" rowspan="2">&nbsp;</th>
            </tr>
            <tr>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                <td><?php echo $row["product_name"]; ?></td>
                    <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row["product_image"]); ?>" alt="Product Image" width="100" height="100"></td>
                    <td><?php echo $row["product_price"]; ?></td>
                    <td class="add-to-cart">
                        <a href="#" class="btn btn-light btn-hover-dark">
                            <i class="fas fa-shopping-cart mr-2"></i>Add to Cart
                        </a>
                    </td>
                    <td class="remove">
                        <a href="remove_from_wishlist.php?product_id=<?php echo $row['product_id']; ?>" class="btn">×</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    
            <div class="row">
                <div class="col text-center mb-n3">
                    <a class="btn btn-light btn-hover-dark mr-3 mb-3" href="shop.php">Continue Shopping</a>
                    <a class="btn btn-dark btn-outline-hover-dark mb-3" href="shopping-cart.php">View Cart</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Wishlist Section End -->
<?php 
include 'includes/footer.php';
include 'includes/scripts.php';
?>