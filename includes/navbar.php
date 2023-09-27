<!-- Header Section Start -->
<div class="header-section section section-fluid bg-white d-none d-xl-block">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col-auto">
                <div class="header-logo">
                    <a href="index.php"><img src="assets/images/logo/logo.PNG" width="100px"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Search Start -->
            <div class="col-auto me-auto">
                <nav class="site-main-menu site-main-menu-left menu-height-100 justify-content-center">
                    <ul>
                        <li class="has-children">
                            <a href="index.php"><span class="menu-text">Home</span></a>
                        </li>
                        <li class="has-children">
                            <a href="shop.php"><span class="menu-text">Shop</span></a>
                        </li>
                        <li class="has-children">
                            <a href="about-us.php"><span class="menu-text">About</span></a>
                        </li>
                        <li class="has-children">
                            <a href="contact-us.php"><span class="menu-text">Contact us</span></a>
                        </li>
                        <li class="has-children">
                    </ul>
                </nav>
            </div>
            <!-- Search End -->

            <!-- Search Start -->
            <!-- <div class="col-auto d-none d-xl-block">
                <div class="header2-search">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button class="btn"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div> -->
            <!-- Search End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <?php
                    if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) { ?>
                        <div class="header-login">
                            <a href="my-account.php"><i class="far fa-user"></i></a>
                        </div>
                        <?php
                    } else { ?>
                        <div class="header-login">
                        </div>
                        <?php
                    }
                    ?>
                    <?php if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) {
                        $userId = $_SESSION['loggedInUserData']['id'];
                        ?>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle">
                                <?php if ((calculateTableForUser('wish_list', "$userId")) > 0) { ?>
                                    <span class="wishlist-count">
                                        <?= calculateTableForUser('wish_list', "$userId") ?>
                                    </span>
                                <?php } else { ?>
                                <?php } ?>
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle">
                                <?php if ((calculateTableForUser('cart', "$userId")) > 0) { ?>
                                    <span class="cart-count">
                                        <?= calculateTableForUser('cart', "$userId") ?>
                                    </span>
                                <?php } else { ?>
                                <?php } ?>
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    <?php } else {
                        ?>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">
                                    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                        echo count($_SESSION['cart']);
                                    } ?>
                                </span><i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                        <?php
                    } ?>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>

</div>
<!-- Header Section End -->

<!-- Header Section Start -->
<div class="sticky-header section bg-white section-fluid d-none d-xl-block">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col-xl-auto col">
                <div class="header-logo">
                    <a href="index.php"><img src="assets/images/logo/logo.PNG" width="100px"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Search Start -->
            <div class="col-auto me-auto d-none d-xl-block">
                <nav class="site-main-menu site-main-menu-left justify-content-center">
                    <ul>
                        <li class="has-children">
                            <a href="index.php"><span class="menu-text">Home</span></a>
                        </li>
                        <li class="has-children">
                            <a href="shop.php"><span class="menu-text">Shop</span></a>
                        </li>
                        <li class="has-children">
                            <a href="about-us.php"><span class="menu-text">About</span></a>
                        </li>
                        <li class="has-children">
                            <a href="contact-us.php"><span class="menu-text">contact us</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Search End -->

            <!-- Search Start -->
            <!-- <div class="col-auto d-none d-xl-block">
                <div class="header2-search">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button class="btn"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div> -->
            <!-- Search End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <?php
                    if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) { ?>
                        <div class="header-login">
                            <a href="my-account.php"><i class="far fa-user"></i></a>
                        </div>
                        <?php
                    } else { ?>
                        <div class="header-login">
                        </div>
                        <?php
                    }
                    ?>
                    <?php if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) {
                        $userId = $_SESSION['loggedInUserData']['id'];
                        ?>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle">
                                <?php if ((calculateTableForUser('wish_list', "$userId")) > 0) { ?>
                                    <span class="wishlist-count">
                                        <?= calculateTableForUser('wish_list', "$userId") ?>
                                    </span>
                                <?php } else { ?>
                                <?php } ?>
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle">
                                <?php if ((calculateTableForUser('cart', "$userId")) > 0) { ?>
                                    <span class="cart-count">
                                        <?= calculateTableForUser('cart', "$userId") ?>
                                    </span>
                                <?php } else { ?>
                                <?php } ?>
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    <?php } else {
                        ?>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">
                                    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                        echo count($_SESSION['cart']);
                                    } ?>
                                </span><i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                        <?php
                    } ?>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>

</div>
<!-- Header Section End -->
<!-- Mobile Header Section Start -->
<div class="mobile-header bg-white section d-xl-none">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="index.php"><img src="assets/images/logo/logo.PNG" width="100px"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <?php
                    if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) { ?>
                        <div class="header-login">
                            <a href="my-account.php"><i class="far fa-user"></i></a>
                        </div>
                        <?php
                    } else { ?>
                        <div class="header-login">
                        </div>
                        <?php
                    }
                    ?>
                    <!-- <div class="header-search d-none d-sm-block">
                <a href="#offcanvas-search" class="offcanvas-toggle"
                  ><i class="fas fa-search"></i
                ></a>
              </div> -->
                    <?php if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) {
                        $userId = $_SESSION['loggedInUserData']['id'];
                        ?>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle">
                                <?php if ((calculateTableForUser('wish_list', "$userId")) > 0) { ?>
                                    <span class="wishlist-count">
                                        <?= calculateTableForUser('wish_list', "$userId") ?>
                                    </span>
                                <?php } else { ?>
                                <?php } ?>
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle">
                                <?php if ((calculateTableForUser('cart', "$userId")) > 0) { ?>
                                    <span class="cart-count">
                                        <?= calculateTableForUser('cart', "$userId") ?>
                                    </span>
                                <?php } else { ?>
                                <?php } ?>
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    <?php } else {
                        ?>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">
                                    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                        echo count($_SESSION['cart']);
                                    } ?>
                                </span><i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                        <?php
                    } ?>
                    <div class="mobile-menu-toggle">
                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                <path
                                    d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                    class="top"></path>
                                <path d="M300,320 L540,320" class="middle"></path>
                                <path
                                    d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                    class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>
</div>
<!-- Mobile Header Section End -->

<!-- Mobile Header Section Start -->
<div class="mobile-header sticky-header bg-white section d-xl-none">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="index.php"><img src="assets/images/logo/logo.PNG" width="100px"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <?php
                    if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) { ?>
                        <div class="header-login">
                            <a href="my-account.php"><i class="far fa-user"></i></a>
                        </div>
                        <?php
                    } else { ?>
                        <div class="header-login">
                        </div>
                        <?php
                    }
                    ?>
                    <!-- <div class="header-search d-none d-sm-block">
                <a href="#offcanvas-search" class="offcanvas-toggle"
                  ><i class="fas fa-search"></i
                ></a>
              </div> -->
                    <?php if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) {
                        $userId = $_SESSION['loggedInUserData']['id'];
                        ?>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle">
                                <?php if ((calculateTableForUser('wish_list', "$userId")) > 0) { ?>
                                    <span class="wishlist-count">
                                        <?= calculateTableForUser('wish_list', "$userId") ?>
                                    </span>
                                <?php } else { ?>
                                <?php } ?>
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle">
                                <?php if ((calculateTableForUser('cart', "$userId")) > 0) { ?>
                                    <span class="cart-count">
                                        <?= calculateTableForUser('cart', "$userId") ?>
                                    </span>
                                <?php } else { ?>
                                <?php } ?>
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    <?php } else {
                        ?>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">
                                    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                        echo count($_SESSION['cart']);
                                    } ?>
                                </span><i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                        <?php
                    } ?>
                    <div class="mobile-menu-toggle">
                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                <path
                                    d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                    class="top"></path>
                                <path d="M300,320 L540,320" class="middle"></path>
                                <path
                                    d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                    class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>
</div>
<!-- Mobile Header Section End -->
<!-- OffCanvas Search Start -->
<!-- <div id="offcanvas-search" class="offcanvas offcanvas-search">
    <div class="inner">
        <div class="offcanvas-search-form">
            <button class="offcanvas-close">×</button>
            <form action="#">
                <div class="row mb-n3">
                    <div class="col-lg-8 col-12 mb-3"><input type="text" placeholder="Search Products..."></div>
                    <div class="col-lg-4 col-12 mb-3">
                        <select class="search-select select2-basic">
                            <option value="0">All Categories</option>
                            <option value="home-decor">Home Decor</option>
                            <option value="gift-ideas">Gift ideas</option>
                            <option value="kitchen">Kitchen</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span> <span>#
                Hit enter to search or ESC to close</span></p>
    </div>
</div> -->
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
                <?php
                $totalPrice = 0;
                if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) {
                    $userId = $_SESSION['loggedInUserData']['id'];
                    $query = "SELECT * FROM wish_list INNER JOIN products ON wish_list.product_id=products.product_id WHERE user_id='$userId';";
                    $run_query = mysqli_query($conn, $query);
                    if (mysqli_num_rows($run_query) > 0) {
                        foreach ($run_query as $item) {
                            $productId = $item['product_id'];
                            $productName = $item['product_name'];
                            $product_image = $item['product_image'];
                            $product_price = $item['product_price'];
                            ?>
                            <li>
                                <!-- <img style="width:80px;" src="data:image/webp;base64,' . base64_encode($productItem['product_image']) . '" /> -->
                                <a href="product-details.php" class="image">
                                    <img style="width:80px;" src="data:image/webp;base64,<?= base64_encode($product_image); ?>" />
                                </a>
                                <div class="content">
                                    <a href="product-details.php" class="title">
                                        <?= $productName ?>
                                    </a>
                                    <span class="quantity-price">
                                        <span class="amount">
                                            $
                                            <?= $product_price ?>
                                        </span>
                                    </span>
                                    <a href="#" class="remove">×</a>
                                </div>
                            </li>
                            <?php
                        }
                    } else {
                        echo "Your Wishlist Is Empty!";
                    }
                }
                ?>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons">
                <a href="wishlist.php" class="btn btn-dark btn-hover-primary">view wishlist</a>
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
                <?php
                $totalPrice = 0;
                if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) {
                    $userId = $_SESSION['loggedInUserData']['id'];
                    $query = "SELECT * FROM cart INNER JOIN products ON cart.product_id=products.product_id WHERE user_id='$userId';";
                    $run_query = mysqli_query($conn, $query);
                    if (mysqli_num_rows($run_query) > 0) {
                        foreach ($run_query as $item) {
                            $productId = $item['product_id'];
                            $productName = $item['product_name'];
                            $product_image = $item['product_image'];
                            $product_quantity = $item['product_quantity'];
                            $product_price = $item['product_price'];
                            $totalPrice += ($product_quantity * $product_price);
                            ?>
                            <li>
                                <!-- <img style="width:80px;" src="data:image/webp;base64,' . base64_encode($productItem['product_image']) . '" /> -->
                                <a href="product-details.php" class="image">
                                    <img style="width:80px;" src="data:image/webp;base64,<?= base64_encode($product_image); ?>" />
                                </a>
                                <div class="content">
                                    <a href="product-details.php" class="title">
                                        <?= $productName ?>
                                    </a>
                                    <span class="quantity-price">
                                        <?= $product_quantity ?> x <span class="amount">
                                            <?= $product_price ?>
                                        </span>
                                    </span>
                                    <a href="#" class="remove">×</a>
                                </div>
                            </li>
                            <?php
                        }
                    } else {
                        echo "Your Cart Is Empty!";
                    }
                } else {
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                        foreach ($_SESSION['cart'] as $item) {
                            $product_id = $item['productid'];
                            $product_quantity = $item['quantity'];

                            // Change "cart" to the actual table name containing product information
                            $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
                            $sql_run = mysqli_query($conn, $sql);

                            // Fetch product information
                            if ($sql_run && mysqli_num_rows($sql_run) > 0) {
                                $product_data = mysqli_fetch_assoc($sql_run);
                                $productName = $product_data['product_name'];
                                $product_image = $product_data['product_image'];
                                $product_price = $product_data['product_price'];
                                $totalPrice += ($product_quantity * $product_price);
                            }
                            ?>
                            <li>
                                <a href="product-details.php" class="image">
                                    <img style="width: 80px;" src="data:image/webp;base64,<?= base64_encode($product_image); ?>" />
                                </a>
                                <div class="content">
                                    <a href="product-details.php" class="title">
                                        <?= $productName ?>
                                    </a>
                                    <span class="quantity-price">
                                        <?= $product_quantity ?> x <span class="amount">
                                            <?= $product_price ?>
                                        </span>
                                    </span>
                                    <a href="#" class="remove">×</a>
                                </div>
                            </li>
                            <?php
                        }
                    }
                }
                ?>
            </ul>
        </div>
        <div class="foot">
            <div class="sub-total">
                <strong>Subtotal :</strong>
                <span class="amount">$
                    <?= $totalPrice; ?>
                </span>
            </div>
            <div class="buttons">
                <a href="shopping-cart.php" class="btn btn-dark btn-hover-primary">view cart</a>
                <a href="checkout.php" class="btn btn-outline-dark">checkout</a>
            </div>
            <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- OffCanvas Search Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <div class="inner customScroll">
        <!-- <div class="offcanvas-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div> -->
        <div class="offcanvas-menu">
            <ul>
                <li><a href="index.php"><span class="menu-text">Home</span></a>
                </li>
                <li><a href="shop.php"><span class="menu-text">Shop</span></a>
                </li>
                <li><a href="about-us.php"><span class="menu-text">about</span></a>
                </li>
                <li><a href="contact-us.php"><span class="menu-text">contact us</span></a>
                </li>
            </ul>
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