<?php
$pageTitle = 'Single Product';
include_once 'includes/head-vars.php';
include_once 'includes/navbar.php';
?>
<div class="offcanvas-overlay"></div>

<!-- Page Title/Header Start -->
<div class="page-title-section section"
    data-bg-image="https://htmldemo.net/learts/learts/assets/images/bg/page-title-1.webp">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-title">
                    <h1 class="title">Shop</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="shop.php">Products</a></li>
                        <li class="breadcrumb-item active">Cleaning Dustpan & Brush</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->

<!-- Single Products Section Start -->
<div class="section section-padding border-bottom">
    <div class="container">
        <div class="row learts-mb-n40">

            <?php
            $id = $_GET['id']??1;

            $sql = "SELECT products.product_id ,products.product_name,products.product_description,products.product_price,products.product_image,products.product_discount
            ,products.category_id,categories.category_name
            FROM products
            JOIN categories
            ON products.category_id=categories.category_id AND products.product_id='$id'";


            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $product_id = $row['product_id'];
            $product_name = $row['product_name'];
            $product_description = $row['product_description'];
            $product_price = $row['product_price'];
            $product_image = $row['product_image'];
            $product_discount = $row['product_discount'];
            $category_id = $row['category_id'];
            $category_name= $row['category_name'];
            ?>


            <!-- Product Images Start -->
            <div class="col-lg-6 col-12 learts-mb-40">
                <div class="product-images">
                    <button class="product-gallery-popup hintT-left" data-hint="Click to enlarge" data-images='[
                            {"src": "", "w": 700, "h": 1100},
                            {"src": "", "w": 700, "h": 1100},
                            {"src": "", "w": 700, "h": 1100},
                            {"src": "", "w": 700, "h": 1100}
                        ]'><i class="fas fa-expand"></i></button>
                    <a href="https://www.youtube.com/watch?v=1jSsy7DtYgc"
                        class="product-video-popup video-popup hintT-left" data-hint="Click to see video"><i
                            class="fas fa-play"></i></a>
                    <div class="product-gallery-slider">
                        <div class="product-zoom" data-image="">
                            <?php echo '<img src="data:image/webp;base64,' .
                                base64_encode($product_image) . '" alt="" />'; ?>
                        </div>
                        <div class="product-zoom" data-image="">
                            <?php echo '<img src="data:image/webp;base64,' .
                                base64_encode($product_image) . '" alt="" />'; ?>
                        </div>
                        <div class="product-zoom" data-image="">
                            <?php echo '<img src="data:image/webp;base64,' .
                                base64_encode($product_image) . '" alt="" />'; ?>
                        </div>
                        <div class="product-zoom" data-image="">
                            <?php echo '<img src="data:image/webp;base64,' .
                                base64_encode($product_image) . '" alt="" />'; ?>
                        </div>
                    </div>
                    <div class="product-thumb-slider">
                        <div class="item">
                            <?php echo '<img src="data:image/webp;base64,' .
                                base64_encode($product_image) . '" alt="" />'; ?>
                        </div>
                        <div class="item">
                            <?php echo '<img src="data:image/webp;base64,' .
                                base64_encode($product_image) . '" alt="" />'; ?>
                        </div>
                        <div class="item">
                            <?php echo '<img src="data:image/webp;base64,' .
                                base64_encode($product_image) . '" alt="" />'; ?>
                        </div>
                        <div class="item">
                            <?php echo '<img src="data:image/webp;base64,' .
                                base64_encode($product_image) . '" alt="" />'; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Images End -->

            <!-- Product Summery Start -->
            <div class="col-lg-6 col-12 learts-mb-40">
                <div class="product-summery">
                    <!-- <div class="product-nav">
                        <a href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div> -->
                    <!-- <div class="product-ratings">
                        <span class="star-rating">
                            <span class="rating-active" style="width: 100%;">ratings</span>
                        </span>
                        <a href="#reviews" class="review-link">(<span class="count">3</span> customer reviews)</a>
                    </div> -->
                    <h3 class="product-title">
                        <?php echo $product_name ?>
                    </h3>
                    <div class="product-price">
                        <?php echo $product_price ?> JD
                    </div>
                    <div class="product-description">
                        <p>
                            <?php echo $product_description ?>
                        </p>
                    </div>
                    <!-- <div class="product-variations">
                        <table>
                            <tbody>

                                <tr>
                                    <td class="label"><span>Quantity</span></td>
                                    <td class="value">
                                        <div class="product-quantity">
                                            <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                            <input type="text" class="input-qty" value="1">
                                            <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
                    <div class="product-buttons">
                        <a href="wishlistupdate.php?product_id=<?php echo $id ?>" class="btn btn-icon btn-outline-body btn-hover-dark hintT-top"
                            data-hint="Add to Wishlist"><i class="far fa-heart"></i></a>
                        <a href="shopping-cart.php?product_id=<?php echo $id ?>" class="btn btn-dark btn-outline-hover-dark">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </a>
                    </div>
                    <div class="product-brands">
                        <span class="title">Brands</span>
                        <div class="brands">
                            <a href="#"><img src="assets/images/brands/brand-3.webp" alt=""></a>
                            <a href="#"><img src="assets/images/brands/brand-8.webp" alt=""></a>
                        </div>
                    </div>
                    <div class="product-meta">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="label"><span>SKU</span></td>
                                    <td class="value">0404019</td>
                                </tr>
                                <tr>
                                    <td class="label"><span>Category</span></td>
                                    <td class="value">
                                        <ul class="product-category">
                                            <li><a style="color:#F8796C;font-weight:bolder" href="shop.php?id=<?php echo $category_id ?>">
                                                    <?php
                                                     echo $category_name ;
                                                    ?>
                                                </a></li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="label"><span>Share on</span></td>
                                    <td class="va">
                                        <div class="product-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="far fa-envelope"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Product Summery End -->

            <?php
            mysqli_free_result($result);

            ?>
        </div>




    </div>
</div>

</div>
<!-- Single Products Section End -->



<!-- Single Products Infomation Section Start -->
<div class="section section-padding border-bottom">
    <div class="container">



        <div class="tab-content product-infor-tab-content">

            <ul class="nav product-info-tab-list">

                <li><a class="active" data-bs-toggle="tab" href="#tab-reviews"> Reviews <span class="title" > for <?php echo $product_name ?> 
                            </span></a></li>
                
            </ul>

            <?php
            $sqlc = "SELECT comments.comment_id, comments.comment_text, comments.rating, comments.comment_date, users.username
            FROM comments
             JOIN users ON comments.user_id = users.user_id AND comments.product_id = '$id'";
            

            $resultc = mysqli_query($conn, $sqlc);

            if ($resultc) {
                while ($row1 = mysqli_fetch_assoc($resultc)) {
                    $comment_id = $row1['comment_id'];

                    $comment_text = $row1['comment_text'];
                    $rating = $row1['rating'];
                    $comment_date = $row1['comment_date'];
                    $username = $row1['username'];
                    
                    ?>

                    <div class="tab-pane fade show active" id="tab-reviews">
                        <div class="product-review-wrapper ">
                            
                            <ul class="product-review-list">
                                <li>
                                    <div class="product-review">
                                        <div class="thumb"><img src="assets/images/review/avatar.png" alt=""></div>
                                        <div class="content">
                                            <div class="ratings">
                                               <h5 style="margin-bottom :0; margin-right: 10px"><?php echo $rating?></h5>
                                               <i class="fa-solid fa-star" style="color: #f5cc26;"></i>
                                            </div>
                                            <div class="meta">
                                                <h5 class="title"><?php echo $username ?> </h5>
                                                <span class="date"><?php echo $comment_date ?></span>
                                            </div>
                                            <p><?php echo $comment_text  ?></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>  
                    <?php

            }
            mysqli_free_result($resultc);
            } else {
            echo 'Query failed: ' . mysqli_error($conn);
            }



        ?>
        <?php if(isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true){
            $loggedInName = $_SESSION['loggedInUserData']['name'];
            $loggedInEmail = $_SESSION['loggedInUserData']['email'];
            
        }else {
            $loggedInName = NULL;
            $loggedInEmail = NULL;
        } ?>
        <span class="title">Add a review</span>
        <!-- <div class="review-form">
            <form action="product-details.php?id=<?=$id?>" method="post">
                <div class="row learts-mb-n30">
                    <div class="col-md-6 col-12 learts-mb-30">
                        <input type="text" value="<?php echo $loggedInName?>" name="name" placeholder="Your Name" required>
                    </div>
                    
                    <div class="col-md-6 col-12 learts-mb-30">
                        <input type="email" value="<?php echo $loggedInEmail?>" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="col-md-6 col-12 learts-mb-30">
                        <input type="hidden" name="comment_date"  required>
                    </div>
                    <div class="col-md-6 learts-mb-10">
                        <div class="rateyo" id="drating" ></div>
                        <input type="number" name="rating" id="rating" min="1" max='5'  placeholder="Rate This Product From 1 to 5" required>
                    </div>
                    <div class="col-12 learts-mb-30">
                        <textarea name="comment" placeholder="Your Review" required></textarea>
                    </div>
                    <div class="col-12 text-center learts-mb-30">
                        <button class="btn btn-dark btn-outline-hover-dark" type="submit" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div> -->
        <div class="review-form">
    <form action="product-details.php?id=<?=$id?>" method="post">
        <div class="row learts-mb-n30">
            <div class="col-md-6 col-12 learts-mb-30">
                <input type="text" value="<?php echo $loggedInName?>" name="name" placeholder="Your Name" required>
            </div>
            
            <div class="col-md-6 col-12 learts-mb-30">
                <input type="email" value="<?php echo $loggedInEmail?>" name="email" placeholder="Your Email" required>
            </div>
            
            <div class="col-12 learts-mb-30">
                <input type="hidden" name="comment_date"  required>
            </div>
            
            <div class="col-12 learts-mb-10">
                <div class="rateyo" id="drating"></div>
            </div>
            
            <div class="col-md-6 col-12 learts-mb-30">
                <input type="number" name="rating" id="rating" min="1" max="5" placeholder="Rate This Product From 1 to 5" required>
            </div>
            
            <div class="col-12 learts-mb-30">
                <textarea name="comment" placeholder="Your Review" required></textarea>
            </div>
            
            <div class="col-12 text-center learts-mb-30">
                <button class="btn btn-dark btn-outline-hover-dark" type="submit" name="submit">Submit</button>
            </div>
        </div>
    </form>
</div>


 
                        </div>
                    </div>

        </div>

    </div>
</div>
<!-- Single Products Infomation Section End -->





<!-- Recommended Products Section Start -->
<div class="section section-padding">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title">You Might Also Like</h2>
        </div>
        <!-- Section Title End -->

        <!-- Products Start -->
        <div class="product-carousel">

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.php" class="image">
                            <span class="product-badges">
                                <span class="onsale">-13%</span>
                            </span>
                            <img src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-1.webp"
                                alt="Product Image">
                            <img class="image-hover "
                                src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-1-hover.webp"
                                alt="Product Image">
                        </a>
                        <a href="wishlist.php" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i
                                class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.php">Boho Beard Mug</a></h6>
                        <span class="price">
                            <span class="old">30 JD</span>
                            <span class="new">26.1 JD</span>
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top"
                                data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                    class="fas fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.php" class="image">
                            <img src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-2.webp"
                                alt="Product Image">
                            <img class="image-hover "
                                src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-2-hover.webp"
                                alt="Product Image">
                        </a>
                        <a href="wishlist.php" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i
                                class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.php">Motorized Tricycle</a></h6>
                        <span class="price">
                            35 JD
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top"
                                data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                    class="fas fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <span class="product-badges">
                            <span class="hot">hot</span>
                        </span>
                        <a href="product-details.php" class="image">
                            <img src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-3.webp"
                                alt="Product Image">
                            <img class="image-hover "
                                src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-3-hover.webp"
                                alt="Product Image">
                        </a>
                        <a href="wishlist.php" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i
                                class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.php">Walnut Cutting Board</a></h6>
                        <span class="price">
                            30 JD
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top"
                                data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                    class="fas fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.php" class="image">
                            <span class="product-badges">
                                <span class="onsale">-27%</span>
                            </span>
                            <img src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-4.webp"
                                alt="Product Image">
                            <img class="image-hover "
                                src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-4-hover.webp"
                                alt="Product Image">
                        </a>
                        <a href="wishlist.php" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i
                                class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.php">Pizza Plate Tray</a></h6>
                        <span class="price">
                            <span class="old">25 JD</span>
                            <span class="new">18.25 JD</span>
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top"
                                data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                    class="fas fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.php" class="image">
                            <img src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-5.webp"
                                alt="Product Image">
                            <img class="image-hover "
                                src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-5-hover.webp"
                                alt="Product Image">
                        </a>
                        <a href="wishlist.php" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i
                                class="far fa-heart"></i></a>
                        <div class="product-options">
                            <ul class="colors">
                                <li style="background-color: #c2c2c2;">color one</li>
                                <li style="background-color: #374140;">color two</li>
                                <li style="background-color: #8ea1b2;">color three</li>
                            </ul>
                            <ul class="sizes">
                                <li>Large</li>
                                <li>Medium</li>
                                <li>Small</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.php">Minimalist Ceramic Pot</a></h6>
                        <span class="price">
                            $120.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top"
                                data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                    class="fas fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.php" class="image">
                            <img src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-6.webp"
                                alt="Product Image">
                            <img class="image-hover "
                                src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-6-hover.webp"
                                alt="Product Image">
                        </a>
                        <a href="wishlist.php" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i
                                class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.php">Clear Silicate Teapot</a></h6>
                        <span class="price">
                            $140.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top"
                                data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                    class="fas fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.php" class="image">
                            <span class="product-badges">
                                <span class="hot">hot</span>
                            </span>
                            <img src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-7.webp"
                                alt="Product Image">
                            <img class="image-hover "
                                src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-7-hover.webp"
                                alt="Product Image">
                        </a>
                        <a href="wishlist.php" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i
                                class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.php">Lucky Wooden Elephant</a></h6>
                        <span class="price">
                            $35.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top"
                                data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                    class="fas fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="product-details.php" class="image">
                            <span class="product-badges">
                                <span class="outofstock"><i class="far fa-frown"></i></span>
                                <span class="hot">hot</span>
                            </span>
                            <img src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-8.webp"
                                alt="Product Image">
                            <img class="image-hover "
                                src="https://htmldemo.net/learts/learts/assets/images/product/s270/product-8-hover.webp"
                                alt="Product Image">
                        </a>
                        <a href="wishlist.php" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i
                                class="far fa-heart"></i></a>
                        <div class="product-options">
                            <ul class="colors">
                                <li style="background-color: #000000;">color one</li>
                                <li style="background-color: #b2483c;">color two</li>
                            </ul>
                            <ul class="sizes">
                                <li>Large</li>
                                <li>Medium</li>
                                <li>Small</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="product-details.php">Decorative Christmas Fox</a></h6>
                        <span class="price">
                            $50.00
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top"
                                data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                    class="fas fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Products End -->

    </div>
</div>
<!-- Recommended Products Section End -->


<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>

<?php
// $count=0;

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST["rating"];
    $comment = $_POST["comment"];

    $idResult = mysqli_query($conn, "SELECT user_id FROM users WHERE user_email='$email'");
    $row = mysqli_fetch_assoc($idResult);
    $user_id = $row['user_id'];

    $sqlr = "INSERT INTO comments (comment_text,user_id,rating ,product_id ) VALUES ('$comment', '$user_id','$rating' ,'$id')";
    if (mysqli_query($conn, $sqlr))
    {
        echo "New Rate added successfully";
        // $count++;
    }
    else
    {
        echo "Error: " . $sqlr . "<br>" . mysqli_error($conn);
    }
}
?>

