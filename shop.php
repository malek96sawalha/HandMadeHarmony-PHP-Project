<?php 
$pageTitle = 'Shop';
include 'includes/head-vars.php';
include 'includes/navbar.php';


$id = $_GET['id']??0; 
$range = $_GET['range']??0; 
?>
 

  
    <!-- OffCanvas Search Start -->
    <div id="offcanvas-search" class="offcanvas offcanvas-search">
        <div class="inner">
            <div class="offcanvas-search-form">
                <button class="offcanvas-close">×</button>
                <form action="#">
                    <div class="row mb-n3">
                        <div class="col-lg-8 col-12 mb-3"><input type="text" placeholder="Search Products..."></div>
                        <div class="col-lg-4 col-12 mb-3">
                            <select class="search-select select2-basic">
                                <option value="0">All Categories</option>
                                <option value="kids-babies">Kids &amp; Babies</option>
                                <option value="home-decor">Home Decor</option>
                                <option value="gift-ideas">Gift ideas</option>
                                <option value="kitchen">Kitchen</option>
                                <option value="toys">Toys</option>
                                <option value="kniting-sewing">Kniting &amp; Sewing</option>
                                <option value="pots">Pots</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span> <span># Hit enter to search or ESC to close</span></p>

        </div>
    </div>
    <!-- OffCanvas Search End -->

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-1.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-2.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-3.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-1.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-2.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-3.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <strong>Subtotal :</strong>
                    <span class="amount">$144.00</span>
                </div>
                <div class="buttons">
                    <a href="shopping-cart.html" class="btn btn-dark btn-hover-primary">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark">checkout</a>
                </div>
                <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="offcanvas-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Home Group</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index.html"><span class="menu-text">Arts Propelled</span></a></li>
                                    <li><a href="index-2.html"><span class="menu-text">Decor Thriving</span></a></li>
                                    <li><a href="index-3.html"><span class="menu-text">Savvy Delight</span></a></li>
                                    <li><a href="index-4.html"><span class="menu-text">Perfect Escapes</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Home Group</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index-5.html"><span class="menu-text">Kitchen Cozy</span></a></li>
                                    <li><a href="index-6.html"><span class="menu-text">Dreamy Designs</span></a></li>
                                    <li><a href="index-7.html"><span class="menu-text">Crispy Recipes</span></a></li>
                                    <li><a href="index-8.html"><span class="menu-text">Decoholic Chic</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Home Group</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index-9.html"><span class="menu-text">Reblended Dish</span></a></li>
                                    <li><a href="index-10.html"><span class="menu-text">Craftin House</span></a></li>
                                    <li><a href="index-11.html"><span class="menu-text">Craftswork Biz</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html"><span class="menu-text">Shop No Sidebar</span></a></li>
                                    <li><a href="shop-left-sidebar.html"><span class="menu-text">Shop Left Sidebar</span></a></li>
                                    <li><a href="shop-right-sidebar.html"><span class="menu-text">Shop Right Sidebar</span></a></li>
                                    <li><a href="shop-fullwidth-no-gutters.html"><span class="menu-text">Shop Fullwidth No Space</span></a></li>
                                    <li><a href="shop-fullwidth.html"><span class="menu-text">Shop Fullwidth No Sidebar</span></a></li>
                                    <li><a href="shop-fullwidth-left-sidebar.html"><span class="menu-text">Shop Fullwidth Left Sidebar</span></a></li>
                                    <li><a href="shop-fullwidth-right-sidebar.html"><span class="menu-text">Shop Fullwidth Right Sidebar</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Product Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="product-details.html"><span class="menu-text">Basic</span></a></li>
                                    <li><a href="product-details-fullwidth.html"><span class="menu-text">Fullwidth</span></a></li>
                                    <li><a href="product-details-sticky.html"><span class="menu-text">Sticky Details</span></a></li>
                                    <li><a href="product-details-sidebar.html"><span class="menu-text">Width Sidebar</span></a></li>
                                    <li><a href="product-details-extra-content.html"><span class="menu-text">Extra Content</span></a></li>
                                    <li><a href="product-details-image-variation.html"><span class="menu-text">Variations Images</span></a></li>
                                    <li><a href="product-details-group.html"><span class="menu-text">Bought Together</span></a></li>
                                    <li><a href="product-details-360.html"><span class="menu-text">Product 360</span></a></li>
                                    <li><a href="product-details-background.html"><span class="menu-text">Product with Background</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT & Other PAGES</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shopping-cart.html"><span class="menu-text">Shopping Cart</span></a></li>
                                    <li><a href="checkout.html"><span class="menu-text">Checkout</span></a></li>
                                    <li><a href="order-tracking.html"><span class="menu-text">Order Tracking</span></a></li>
                                    <li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a></li>
                                    <li><a href="login-register.html"><span class="menu-text">Customer Login</span></a></li>
                                    <li><a href="my-account.html"><span class="menu-text">My Account</span></a></li>
                                    <li><a href="lost-password.html"><span class="menu-text">Lost Password</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Project</span></a>
                        <ul class="sub-menu">
                            <li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3 Columns</span></a></li>
                            <li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4 Columns</span></a></li>
                            <li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5 Columns</span></a></li>
                            <li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Elements</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">Column One</span></a>
                                <ul class="sub-menu">
                                    <li><a href="elements-products.html"><span class="menu-text">Product Styles</span></a></li>
                                    <li><a href="elements-products-tabs.html"><span class="menu-text">Product Tabs</span></a></li>
                                    <li><a href="elements-product-sale-banner.html"><span class="menu-text">Product & Sale Banner</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">Column Two</span></a>
                                <ul class="sub-menu">
                                    <li><a href="elements-category-banner.html"><span class="menu-text">Category Banner</span></a></li>
                                    <li><a href="elements-team.html"><span class="menu-text">Team Member</span></a></li>
                                    <li><a href="elements-testimonials.html"><span class="menu-text">Testimonials</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">Column Three</span></a>
                                <ul class="sub-menu">
                                    <li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a></li>
                                    <li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
                                    <li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">Column Four</span></a>
                                <ul class="sub-menu">
                                    <li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a></li>
                                    <li><a href="elements-faq.html"><span class="menu-text">FAQs / Toggles</span></a></li>
                                    <li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><span class="menu-text">Standard Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                    <li><a href="blog-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                    <li><a href="blog-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Grid Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                    <li><a href="blog-grid-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                    <li><a href="blog-grid-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">List Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                    <li><a href="blog-list-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                    <li><a href="blog-list-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Masonry Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                    <li><a href="blog-masonry-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                    <li><a href="blog-masonry-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Single Post Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-details-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                    <li><a href="blog-details-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                    <li><a href="blog-details-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="about-us.html"><span class="menu-text">About us</span></a></li>
                            <li><a href="about-us-2.html"><span class="menu-text">About us 02</span></a></li>
                            <li><a href="contact-us.html"><span class="menu-text">Contact us</span></a></li>
                            <li><a href="coming-soon.html"><span class="menu-text">Coming Soon</span></a></li>
                            <li><a href="404.html"><span class="menu-text">Page 404</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="offcanvas-buttons">
                <div class="header-tools">
                    <div class="header-login">
                        <a href="my-account.html"><i class="far fa-user"></i></a>
                    </div>
                    <div class="header-wishlist">
                        <a href="wishlist.html"><span></span><i class="far fa-heart"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="shopping-cart.html"><span class="cart-count"></span><i class="fas fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="https://htmldemo.net/learts/learts/assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Shop</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Shop Products Section Start -->
    <div class="section section-padding pt-0">

        <!-- Shop Toolbar Start -->
        <div class="shop-toolbar border-bottom">
            <div class="container">
                <div class="row learts-mb-n20">

                    <!-- Isotop Filter Start -->
      

                    <div class="col-md col-12 align-self-center learts-mb-20">
                        <div class="isotope-filter shop-product-filter" data-target="#shop-products">
                            <button  data-filter="*"><a href="shop.php?id=<?php echo 0;?>">all</a></button>
                            <button data-filter=".featured"><a href="shop.php?id=<?php echo 1;?>">Gift ideas</a></button>
                            <button data-filter=".new"  ><a href="shop.php?id=<?php echo 2;?>">Home Decor</a></button>
                            <button data-filter=".sales" ><a href="shop.php?id=<?php echo 3;?>">Kitchen</a></button>
                        </div>
                    </div>


                    <!-- Isotop Filter End -->

                    <div class="col-md-auto col-12 learts-mb-20">
                        <ul class="shop-toolbar-controls">


                            <li>
                                <div class="product-column-toggle d-none d-xl-flex">
                                    <button class="toggle active hintT-top" data-hint="5 Column" data-column="5"><i class="ti-layout-grid4-alt"></i></button>
                                    <button class="toggle hintT-top" data-hint="4 Column" data-column="4"><i class="ti-layout-grid3-alt"></i></button>
                                    <button class="toggle hintT-top" data-hint="3 Column" data-column="3"><i class="ti-layout-grid2-alt"></i></button>
                                </div>
                            </li>
                            <li>
                                <a class="product-filter-toggle" href="#product-filter">Filters</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- Shop Toolbar End -->

        <!-- Product Filter Start -->
        <div id="product-filter" class="product-filter bg-light">
            <div class="container">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 learts-mb-n30">

                    <!-- Sort by Start -->
                    <!-- <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Sort by</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li><a href="#">Popularity</a></li>
                            <li><a href="#">Average rating</a></li>
                            <li><a href="#">Newness</a></li>
                            <li><a href="#">Price: low to high</a></li>
                            <li><a href="#">Price: high to low</a></li>
                        </ul>
                    </div> -->
                    <!-- Sort by End -->

                    <!-- Price filter Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Price filter</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li> <a href="shop.php?id=<?php echo 0;?>">All </a></li>
                            <li> <a href="shop.php?range=<?php echo 1?>"><span class="amount"><span class="cur-symbol"></span>5</span>JD - <span class="amount"><span class="cur-symbol"></span>30</span>JD</a></li>
                            <li> <a href="shop.php?range=<?php echo 2?>"><span class="amount"><span class="cur-symbol"></span>31</span>JD - <span class="amount"><span class="cur-symbol"></span>70</span>JD</a></li>
                            <li> <a href="shop.php?range=<?php echo 3?>"><span class="amount"><span class="cur-symbol"></span>71</span>JD - <span class="amount"><span class="cur-symbol"></span>100</span>JD</a></li>

                        </ul>
                    </div>
                    <!-- Price filter End -->

                    <!-- Categories Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Categories</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li><a href="#">Gift ideas</a> </li>
                            <li><a href="#">Home Decor</a> </li>
                            <li><a href="#">Kitchen</a> </li>

                        </ul>
                    </div>
                    <!-- Categories End -->



                </div>
            </div>
        </div>
        <!-- Product Filter End -->

        <div class="section learts-mt-70">
            <div class="container">
                <!-- Products Start -->
                <div id="shop-products" class="products isotope-grid row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                    <div class="grid-sizer col-1"></div>

                    
                    <?php
                     

                    //  switch ($favcolor) {
                    //     case "red":
                    //       echo "Your favorite color is red!";
                    //       break;
                    //     case "blue":
                    //       echo "Your favorite color is blue!";
                    //       break;
                    //     case "green":
                    //       echo "Your favorite color is green!";
                    //       break;
                    //     default:
                    //       echo "Your favorite color is neither red, blue, nor green!";
                    //   }

                     $sql;
                   


                    
                        if($id == 0 && $range == 0 ){
                            $sql = "SELECT * FROM products";
    
    
                         }else if($id == 0 && $range == 1 ){
                            $sql ="SELECT * FROM products WHERE product_price >= 5 AND product_price <= 30";
                         }else if($id == 0 && $range == 2 ){
                            $sql ="SELECT * FROM products WHERE product_price >= 31 AND product_price <= 70";
                         }else if($id == 0 && $range == 3 ){
                            $sql ="SELECT * FROM products WHERE product_price >= 71 AND product_price <= 100";
                         }else{
                            $sql = "SELECT * FROM products WHERE category_id='$id'";
                         }

                     
                      


                    
                    
                  
                    $result = mysqli_query($conn, $sql);
                  
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            

                            $product_id=$row['product_id'];
                            $product_name=$row['product_name'];
                            $product_description=$row['product_description'];
                            $product_price=$row['product_price'];
                            $product_image=$row['product_image'];
                            $product_discount=$row['product_discount'];
                            $category_id=$row['category_id'];

                    $fil="sales";
                            
                    ?>


                        <div class="grid-item col sales">
                            <div class="product">
                                <div class="product-thumb">
                                    <a href="product-details.php?id=<?php echo $product_id ?>"  class="image">
                                  

                                        <?php if($product_discount > 0){  ?>
                                            <span class="product-badges">
                                            <span class="onsale"><?php echo $product_discount*100;?>%</span>
                                        </span>
                                        
                                        <?php
                                        }
                                            echo '<img src="data:image/webp;base64,' . 
                                            base64_encode($product_image) . '" alt="Product Image" />';

                                            echo '<img src="data:image/webp;base64,' . 
                                            base64_encode($product_image) . '" class="image-hover " alt="Product Image" />';
                                        ?>
                                

                                    </a>
                                    <a href="wishlist-upd-shop.php?product_id=<?php echo $product_id ?>" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="product-info">
                                    <h6 class="title"><a href="product-details.php"><?php echo $product_name  ;?></a></h6>
                                    <span class="price">
                                    <?php if($product_discount > 0){  ?>
                                        <span class="old"><?php echo $product_price;?>JD</span> <?php }?>
                                        
                                    <span class="new"><?php echo $product_price - ($product_price * $product_discount)  ;?>JD</span>
                                    </span>
                                    <div class="product-buttons">
                                        <!-- <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a> -->
                                        <a href="shopping-cart.php?product_id=<?php echo $product_id ?>" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                        <!-- <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php

                        } 
                        mysqli_free_result($result);
                    } else {
                        echo 'Query failed: ' . mysqli_error($conn);
                    }

                    mysqli_close($conn);

                    ?>



                </div>

                <!-- Products End -->
                
            </div>
        </div>

    </div>
    <!-- Shop Products Section End -->



<?php 
include 'includes/footer.php';
include 'includes/scripts.php';
?>
