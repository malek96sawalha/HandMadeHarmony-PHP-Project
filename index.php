<?php
$pageTitle = 'Home';
include 'includes/head-vars.php';
?>
<!-- Topbar Section Start -->
<div class="topbar-section section border-bottom allContent-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col d-none d-md-block">
        <div class="topbar-menu">
          <ul>
            <li>
              <a href="#"><i class="fa fa-map-marker-alt"></i>Store Location</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-truck"></i>Order Status</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col d-md-none d-lg-block">
        <p class="text-center my-2">Free shipping for orders over 100JOD !</p>
      </div>

      <!-- Header Language & Currency Start -->
      <div class="col d-none d-md-block">
        <ul class="header-lan-curr text-white justify-content-end">
          <li>
            <a href="#">English</a>
            <ul class="curr-lan-sub-menu">
              <li><a href="#">Arabic</a></li>
              <li><a href="#">French</a></li>
            </ul>
          </li>
          <li>
            <a href="#">JOD</a>
            <ul class="curr-lan-sub-menu">
              <li><a href="#">USD</a></li>
              <li><a href="#">EUR</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Header Language & Currency End -->
    </div>
  </div>
</div>
<!-- Topbar Section End -->
<!-- Header Section Start -->
<div class="header-section section bg-white d-none d-xl-block">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <!-- Header Logo Start -->
      <div class="col-auto">
        <div class="header-logo justify-content-center">
          <a href="index.php"><img src="assets/images/logo/logo.PNG" width="100px" /></a>
        </div>
      </div>
      <!-- Header Logo End -->

      <!-- Header Search Start -->
      <!-- <div class="col">
            <div class="header6-search">
              <form action="#">
                <div class="row g-0">
                  <div class="col-auto">
                    <select class="search-select select2-basic">
                      <option value="0">All Categories</option>
                      <option value="home-decor">Home Decor</option>
                      <option value="gift-ideas">Gift ideas</option>
                      <option value="kitchen">Kitchen</option>
                    </select>
                  </div>
                  <div class="col">
                    <input type="text" placeholder="Search Products..." />
                  </div>
                  <button type="submit"><i class="fas fa-search"></i></button>
                </div>
              </form>
            </div>
          </div> -->
      <!-- Header Search End -->

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
                  } else {
                    echo '0';
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

  <!-- Site Menu Section Start -->
  <div class="site-menu-section section border-top">
    <div class="container">
      <nav class="site-main-menu justify-content-center menu-height-60">
        <ul>
          <li class="has-children">
            <a href="index.php"><span class="menu-text">Home</span></a>
          </li>
          <li class="has-children">
            <a href="shop.php?id=<?php echo 0; ?>"><span class="menu-text">Shop</span></a>
          </li>
          <li class="has-children">
            <a href="about-us.php"><span class="menu-text">about</span></a>
          </li>
          <li class="has-children">
            <a href="contact-us.php"><span class="menu-text">contact us</span></a>
          </li>
        </ul>
      </nav>
      <?php
      if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) {
        ?>
        <div class="header-call">
          <h3 style="font-size:24px">Welcome
            <?= $_SESSION['loggedInUserData']['name'] ?>
          </h3>
        </div>
        <?php
      } else {
        ?>
        <div class="header-call">
          <a href="login.php" class="btn btn">Login</a>
          <a href="register.php" class="btn btn-primary">Signup</a>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
  <!-- Site Menu Section End -->
</div>
<!-- Header Section End -->

<!-- Header Sticky Section Start -->
<div class="sticky-header header-menu-center section bg-white d-none d-xl-block">
  <div class="container">
    <div class="row align-items-center">
      <!-- Header Logo Start -->
      <div class="col">
        <div class="header-logo">
          <a href="index.php"><img src="assets/images/logo/logo.PNG" width="100px" /></a>
        </div>
      </div>
      <!-- Header Logo End -->

      <!-- Search Start -->
      <div class="col d-none d-xl-block">
        <nav class="site-main-menu justify-content-center">
          <ul>
            <li class="has-children">
              <a href="index.php"><span class="menu-text">home</span></a>
            </li>
            <li class="has-children">
              <a href="shop.php"><span class="menu-text">shop</span></a>
            </li>
            <li class="has-children">
              <a href="#"><span class="menu-text">about</span></a>
            </li>
            <li class="has-children">
              <a href="contact-us.php"><span class="menu-text">contact us</span></a>
            </li>
          </ul>
        </nav>
      </div>
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
<!-- Header Sticky Section End -->
<!-- Mobile Header Section Start -->
<div class="mobile-header bg-white section d-xl-none">
  <div class="container">
    <div class="row align-items-center">
      <!-- Header Logo Start -->
      <div class="col">
        <div class="header-logo">
          <a href="index.php"><img src="assets/images/logo/logo.PNG" width="100px" /></a>
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
                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                  class="top"></path>
                <path d="M300,320 L540,320" class="middle"></path>
                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                  class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
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
          <a href="index.php"><img src="assets/images/logo/logo.PNG" width="100px" /></a>
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
          <?php if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) { ?>
            <div class="header-wishlist d-none d-sm-block">
              <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count"></span><i
                  class="far fa-heart"></i></a>
            </div>
            <div class="header-cart">
              <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count"></span><i
                  class="fas fa-shopping-cart"></i></a>
            </div>
          <?php } else {
            ?>
            <div class="header-wishlist d-none d-sm-block">
              <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count"></span><i
                  class="far fa-heart"></i></a>
            </div>
            <div class="header-cart">
              <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count"></span><i
                  class="fas fa-shopping-cart"></i></a>
            </div>
            <?php
          } ?>
          <div class="mobile-menu-toggle">
            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
              <svg viewBox="0 0 800 600">
                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                  class="top"></path>
                <path d="M300,320 L540,320" class="middle"></path>
                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                  class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
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
              <div class="col-lg-8 col-12 mb-3">
                <input type="text" placeholder="Search Products..." />
              </div>
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
        <p class="search-description text-body-light mt-2">
          <span># Type at least 1 character to search</span>
          <span># Hit enter to search or ESC to close</span>
        </p>
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
                    $<span class="amount">
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
            <input type="text" placeholder="Search..." />
            <button><i class="fas fa-search"></i></button>
          </form>
        </div> -->
    <div class="offcanvas-menu">
      <ul>
        <li>
          <a href="index.php"><span class="menu-text">Home</span></a>
        </li>
        <li>
          <a href="shop.php"><span class="menu-text">Shop</span></a>
        </li>
        <li>
          <a href="about-us.php"><span class="menu-text">about</span></a>
        </li>
        <li>
          <a href="contact-us.php"><span class="menu-text">contact us</span></a>
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

<div class="offcanvas-overlay"></div>

<!-- Slider main container Start -->
<div
  class="home2-slider swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal">
  <div class="swiper-wrapper" style="transition-duration: 0ms;">
    <div class="home2-slide-item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
      data-swiper-autoplay="5000" data-bg-color="#F1DED0"
      style="background-color: rgb(241, 222, 208); width: 679px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"
      data-swiper-slide-index="2">
      <div class="home2-slide3-image">
        <img src="assets/images/slider/home2/slider-3.webp" alt="Slide One Image">

        <div class="home2-slide3-product1">
          <button class="slide-pointer"><span>+</span></button>
          <div class="slide-product">
            <div class="image"><img src="https://htmldemo.net/learts/learts/assets/images/slider/home2/slider-3-2.webp"
                alt="Slide Product Image"></div>
            <h6 class="title">Country Feast set </h6>
            <span class="price">$39.00</span>
          </div>
        </div>
        <div class="home2-slide3-product2">
          <button class="slide-pointer"><span>+</span></button>
          <div class="slide-product">
            <div class="image"><img src="https://htmldemo.net/learts/learts/assets/images/slider/home2/slider-3-3.webp"
                alt="Slide Product Image"></div>
            <h6 class="title">Country Feast set </h6>
            <span class="price">$39.00</span>
          </div>
        </div>

      </div>
      <div class="home2-slide-content">
        <h5 class="sub-title">DAILY OFFER</h5>
        <h2 class="title">Country Feast Set</h2>
        <div class="link"><a href="shop.php">shop collection</a></div>
      </div>
      <div class="home2-slide-pages">
        <span class="current">3</span>
        <span class="border"></span>
        <span class="total">3</span>
      </div>
    </div>
    <div class="home2-slide-item swiper-slide swiper-slide-duplicate-next" data-swiper-autoplay="5000"
      data-bg-color="#EEE5DD"
      style="background-color: rgb(238, 229, 221); width: 679px; opacity: 1; transform: translate3d(-679px, 0px, 0px); transition-duration: 0ms;"
      data-swiper-slide-index="0">
      <div class="home2-slide1-image">
        <img src="https://htmldemo.net/learts/learts/assets/images/slider/home2/slider-1-1.webp" alt="Slide One Image">

        <div class="home2-slide1-product1">
          <button class="slide-pointer"><span>+</span></button>
          <div class="slide-product">
            <div class="image"><img src="https://htmldemo.net/learts/learts/assets/images/slider/home2/slider-1-2.webp"
                alt="Slide Product Image"></div>
            <h6 class="title">Country Feast set </h6>
            <span class="price">$39.00</span>
          </div>
        </div>

      </div>
      <div class="home2-slide-content">
        <h5 class="sub-title">DAILY OFFER</h5>
        <h2 class="title">Country Feast Set</h2>
        <div class="link"><a href="shop.php">shop collection</a></div>
      </div>
      <div class="home2-slide-pages">
        <span class="current">1</span>
        <span class="border"></span>
        <span class="total">3</span>
      </div>
    </div>
    <div class="home2-slide-item swiper-slide swiper-slide-prev" data-swiper-autoplay="5000" data-bg-color="#F5F1F1"
      style="background-color: rgb(245, 241, 241); width: 679px; opacity: 1; transform: translate3d(-1358px, 0px, 0px); transition-duration: 0ms;"
      data-swiper-slide-index="1">
      <div class="home2-slide2-image">
        <img src="https://htmldemo.net/learts/learts/assets/images/slider/home2/slider-2-1.webp" alt="Slide One Image">

        <div class="home2-slide2-product1">
          <button class="slide-pointer"><span>+</span></button>
          <div class="slide-product">
            <div class="image"><img src="https://htmldemo.net/learts/learts/assets/images/slider/home2/slider-2-2.webp"
                alt="Slide Product Image"></div>
            <h6 class="title">Country Feast set </h6>
            <span class="price">$39.00</span>
          </div>
        </div>
        <div class="home2-slide2-product2">
          <button class="slide-pointer"><span>+</span></button>
          <div class="slide-product">
            <div class="image"><img src="https://htmldemo.net/learts/learts/assets/images/slider/home2/slider-2-3.webp"
                alt="Slide Product Image"></div>
            <h6 class="title">Country Feast set </h6>
            <span class="price">$39.00</span>
          </div>
        </div>

      </div>
      <div class="home2-slide-content">
        <h5 class="sub-title">DAILY OFFER</h5>
        <h2 class="title">DESIGNS FOR YOU</h2>
        <div class="link"><a href="shop.php">shop collection</a></div>
      </div>
      <div class="home2-slide-pages">
        <span class="current">2</span>
        <span class="border"></span>
        <span class="total">3</span>
      </div>
    </div>
    <div class="home2-slide-item swiper-slide swiper-slide-active" data-swiper-autoplay="5000" data-bg-color="#F1DED0"
      style="background-color: rgb(241, 222, 208); width: 679px; opacity: 1; transform: translate3d(-2037px, 0px, 0px); transition-duration: 0ms;"
      data-swiper-slide-index="2">
      <div class="home2-slide3-image">
        <img src="assets/images/slider/home2/slider-3.webp" alt="Slide One Image">

        <div class="home2-slide3-product1">
          <button class="slide-pointer"><span>+</span></button>
          <div class="slide-product">
            <div class="image"><img src="https://htmldemo.net/learts/learts/assets/images/slider/home2/slider-3-2.webp"
                alt="Slide Product Image"></div>
            <h6 class="title">Country Feast set </h6>
            <span class="price">$39.00</span>
          </div>
        </div>
        <div class="home2-slide3-product2">
          <button class="slide-pointer"><span>+</span></button>
          <div class="slide-product">
            <div class="image"><img src="https://htmldemo.net/learts/learts/assets/images/slider/home2/slider-3-3.webp"
                alt="Slide Product Image"></div>
            <h6 class="title">Country Feast set </h6>
            <span class="price">$39.00</span>
          </div>
        </div>

      </div>
      <div class="home2-slide-content">
        <h5 class="sub-title">DAILY OFFER</h5>
        <h2 class="title">Country Feast Set</h2>
        <div class="link"><a href="shop.php">shop collection</a></div>
      </div>
      <div class="home2-slide-pages">
        <span class="current">3</span>
        <span class="border"></span>
        <span class="total">3</span>
      </div>
    </div>
    <div class="home2-slide-item swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-autoplay="5000"
      data-bg-color="#EEE5DD"
      style="background-color: rgb(238, 229, 221); width: 679px; opacity: 0; transform: translate3d(-2716px, 0px, 0px); transition-duration: 0ms;"
      data-swiper-slide-index="0">
      <div class="home2-slide1-image">
        <img src="https://htmldemo.net/learts/learts/assets/images/slider/home2/slider-1-1.webp" alt="Slide One Image">

        <div class="home2-slide1-product1">
          <button class="slide-pointer"><span>+</span></button>
          <div class="slide-product">
            <div class="image"><img src="https://htmldemo.net/learts/learts/assets/images/slider/home2/slider-1-2.webp"
                alt="Slide Product Image"></div>
            <h6 class="title">Country Feast set </h6>
            <span class="price">$39.00</span>
          </div>
        </div>

      </div>
      <div class="home2-slide-content">
        <h5 class="sub-title">DAILY OFFER</h5>
        <h2 class="title">Country Feast Set</h2>
        <div class="link"><a href="shop.php">shop collection</a></div>
      </div>
      <div class="home2-slide-pages">
        <span class="current">1</span>
        <span class="border"></span>
        <span class="total">3</span>
      </div>
    </div>
  </div>
  <div class="home2-slider-prev swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i
      class="ti-angle-left"></i></div>
  <div class="home2-slider-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i
      class="ti-angle-right"></i></div>
  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
</div>
<!-- Slider main container End -->
<!-- Category Banner Section Start -->
<div class="section-title text-center mb-0 mt-5">
  <h3 class="sub-title">Just for you</h3>
  <h2 class="title title-icon-both">Our Categories</h2>
</div>
<div class="section section-fluid learts-pt-30">
  <div class="container">
    <div class="category-banner1-carousel">
      <?php
      $sql = "SELECT * FROM categories";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {

          $id = $row['category_id'];
          $name = $row['category_name'];
          $image = $row['category_image'];
          $description = $row['categories_description'];
          ?>
          <div class="col cathov">
            <div class="category-banner1">
              <div class="inner">
                <a href="shop.php?id=<?php echo $id; ?>" class="image"><?php

                   echo '<img src="data:image/webp;base64,' .
                     base64_encode($image) . '" alt="" />';

                   ?></a>

                <div class="content">
                  <h3 class="title">
                    <a href="shop.php?id=<?php echo $id; ?>">
                      <?php echo $name; ?>
                    </a>
                  </h3>
                  <p>
                    <?php echo $description; ?>
                  </p>
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
  </div>
</div>
<!-- Category Banner Section End -->



<!-- Product Section Start -->
<div class="section section-padding">
  <div class="container">
    <div class="row learts-mb-50">
      <div class="col">
        <!-- Section Title Start -->
        <div class="section-title text-center mb-0">
          <h3 class="sub-title">Just for you</h3>
          <h2 class="title title-icon-both">Making & crafting</h2> <br>
          <h2 class="title title-icon-both">Events</h2>
        </div>
        <!-- Section Title End -->
      </div>
    </div>
  </div>
</div>





<!-- Product/Sale Banner Section Start -->
<div class="section section-padding pt-0">
  <div class="container">
    <div class="row row-cols-lg-2 row-cols-1 learts-mb-n30">
      <div class="col learts-mb-30">
        <div class="sale-banner8">
          <img src="https://htmldemo.net/learts/learts/assets/images/banner/sale/sale-banner8-1.webp"
            alt="Sale Banner Image" />
          <div class="content">
            <h2 class="title">
              Little simple <br />
              things
            </h2>
            <a href="shop.php?id=2" class="link">shop now</a>
          </div>
        </div>
      </div>

      <div class="col learts-mb-30">
        <div class="sale-banner8">
          <img src="https://htmldemo.net/learts/learts/assets/images/banner/sale/sale-banner8-2.webp"
            alt="Sale Banner Image" />
          <div class="content">
            <h2 class="title">
              Holiday <br />
              Gifts
            </h2>
            <a href="shop.php?id=1" class="link">shop now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Product/Sale Banner Section End -->

<!-- Deal of the Day Section Start -->
<div class="section section-fluid section-padding" data-bg-color="#f4f3ec">
  <div class="container">
    <div class="row align-items-center learts-mb-n30">
      <div class="col-lg-6 col-12 learts-mb-30">
        <div class="product-deal-image text-center">
          <img src="https://htmldemo.net/learts/learts/assets/images/product/deal-product-2.webp" alt="" />
        </div>
      </div>

      <div class="col-lg-6 col-12 learts-mb-30">
        <div class="product-deal-content">
          <h2 class="title">Deal of the day</h2>
          <div class="desc">
            <p>
              Years of experience brought about by our skilled craftsmen
              could ensure that every piece produced is a work of art. Our
              focus is always the best quality possible.
            </p>
          </div>
          <div class="countdown1" data-countdown="2024/01/01"></div>
          <a href="shop.php" class="btn btn-dark btn-hover-primary">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Deal of the Day Section End -->

<!-- List Product Section Start -->
<div class="section section-padding">
  <div class="container">
    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 learts-mb-n30">
      <!-- New arrivals Start -->
      <div class="col learts-mb-30">
        <div class="block-title">
          <h3 class="title">New arrivals</h3>
        </div>

        <div class="product-list-slider">
          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-1.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Boho Beard Mug</a>
              </h6>
              <span class="price">
                <span class="old">20 JD</span>
                <span class="new">16.5 JD</span>
              </span>
            </div>
          </div>

          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-2.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Motorized Tricycle</a>
              </h6>
              <span class="price"> 30 JD </span>
            </div>
          </div>

          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-3.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Walnut Cutting Board</a>
              </h6>
              <span class="price"> 25 JD </span>
              <div class="ratting">
                <span class="rate" style="width: 80%"></span>
              </div>
            </div>
          </div>

          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-4.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Pizza Plate Tray</a>
              </h6>
              <span class="price">
                <span class="old">25 JD</span>
                <span class="new">21 JD</span>
              </span>
              <div class="ratting">
                <span class="rate" style="width: 80%"></span>
              </div>
            </div>
          </div>

          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-5.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Minimalist Ceramic Pot</a>
              </h6>
              <span class="price"> 45 JD </span>
              <div class="ratting">
                <span class="rate" style="width: 100%"></span>
              </div>
            </div>
          </div>

          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-6.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Clear Silicate Teapot</a>
              </h6>
              <span class="price"> 45 JD </span>
            </div>
          </div>
        </div>
      </div>
      <!-- New arrivals End -->

      <!-- Top rate Start -->
      <div class="col learts-mb-30">
        <div class="block-title">
          <h3 class="title">Top rate</h3>
        </div>

        <div class="product-list-slider">
          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-7.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Pottery Bowl Set</a>
              </h6>
              <span class="price">
                <span class="old">45 JD</span>
                <span class="new">39 JD</span>
              </span>
              <div class="ratting">
                <span class="rate" style="width: 100%"></span>
              </div>
            </div>
          </div>

          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-8.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Electric Egg Blender</a>
              </h6>
              <span class="price"> 80 JD </span>
              <div class="ratting">
                <span class="rate" style="width: 100%"></span>
              </div>
            </div>
          </div>

          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-9.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Hallmark Grandma Mug</a>
              </h6>
              <span class="price">
                <span class="old">25 JD</span>
                <span class="new">21 JD</span>
              </span>
              <div class="ratting">
                <span class="rate" style="width: 100%"></span>
              </div>
            </div>
          </div>

          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-10.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Modern Camera</a>
              </h6>
              <span class="price"> 100 JD </span>
              <div class="ratting">
                <span class="rate" style="width: 100%"></span>
              </div>
            </div>
          </div>

          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-11.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Steel Watering Can</a>
              </h6>
              <span class="price">
                <span class="old">25 JD</span>
                <span class="new">22 JD</span>
              </span>
              <div class="ratting">
                <span class="rate" style="width: 100%"></span>
              </div>
            </div>
          </div>

          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-12.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Minimalist Ceramic Pot</a>
              </h6>
              <span class="price"> 45 JD </span>
              <div class="ratting">
                <span class="rate" style="width: 100%"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top rate End -->

      <!-- Sale items Start -->
      <div class="col learts-mb-30">
        <div class="block-title">
          <h3 class="title">Sale items</h3>
        </div>

        <div class="product-list-slider">
          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-1.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Boho Beard Mug</a>
              </h6>
              <span class="price">
                <span class="old">25 JD</span>
                <span class="new">21 JD</span>
              </span>
            </div>
          </div>

          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-13.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Antique Sewing Scissors</a>
              </h6>
              <span class="price">
                <span class="old">20 JD</span>
                <span class="new">16 JD</span>
              </span>
              <div class="ratting">
                <span class="rate" style="width: 80%"></span>
              </div>
            </div>
          </div>

          <div class="list-product">
            <div class="thumbnail">
              <a href="product-details.php"><img
                  src="https://htmldemo.net/learts/learts/assets/images/product/list-product-4.webp"
                  alt="List product" /></a>
            </div>
            <div class="content">
              <h6 class="title">
                <a href="product-details.php">Pizza Plate Tray</a>
              </h6>
              <span class="price">
                <span class="old">25 JD</span>
                <span class="new">21 JD</span>
              </span>
              <div class="ratting">
                <span class="rate" style="width: 80%"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sale items End -->
    </div>
  </div>
</div>
<!-- List Product Section End -->

<!-- Gallery Section Start -->
<div class="section section-padding pt-0">
  <div class="container">
    <!-- Section Title Start -->
    <div class="section-title2 text-center">
      <h3 class="sub-title">Follow us on Instagram</h3>
      <h2 class="title">@HandMade_Harmony</h2>
    </div>
    <!-- Section Title End -->

    <div class="instafeed instafeed-carousel instafeed-carousel1">
      <a class="instafeed-item" href="#">
        <img src="assets/images/instagram/instagram-1.webp" alt="instagram image" />
        <i class="fab fa-instagram"></i>
      </a>
      <a class="instafeed-item" href="#">
        <img src="assets/images/instagram/instagram-2.webp" alt="instagram image" />
        <i class="fab fa-instagram"></i>
      </a>
      <a class="instafeed-item" href="#">
        <img src="assets/images/instagram/instagram-3.webp" alt="instagram image" />
        <i class="fab fa-instagram"></i>
      </a>
      <a class="instafeed-item" href="#">
        <img src="assets/images/instagram/instagram-4.webp" alt="instagram image" />
        <i class="fab fa-instagram"></i>
      </a>
      <a class="instafeed-item" href="#">
        <img src="assets/images/instagram/instagram-2.webp" alt="instagram image" />
        <i class="fab fa-instagram"></i>
      </a>
      <a class="instafeed-item" href="#">
        <img src="assets/images/instagram/instagram-3.webp" alt="instagram image" />
        <i class="fab fa-instagram"></i>
      </a>
    </div>
  </div>
</div>
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>