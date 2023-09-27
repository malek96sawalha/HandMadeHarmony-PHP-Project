<?php 
$pageTitle = 'Login';
include 'includes/head-vars.php';

if(isset($_SESSION['loggedInStatus'])) {
    redirect('index.php', 'You are already logged in.');
}
?>
    <div class="offcanvas-overlay"></div>
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="https://htmldemo.net/learts/learts/assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        <h1 class="title">Login</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Login</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Login Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 offset-lg-3">
                    <div class="user-login-register bg-light rounded-4">
                        <div class="login-register-title">
                            <h2 class="title">Login</h2>
                            <p class="desc">Great to have you back!</p>
                        </div>
                        <div class="login-register-form">
                            <?= alertMessage(); ?>
                            <form action="login-code.php" method="POST">
                                <div class="row learts-mb-n50">
                                    <div class="col-12 learts-mb-50">
                                        <input type="email" name="email" placeholder="email address">
                                    </div>
                                    <div class="col-12 learts-mb-50">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-12 text-center learts-mb-50">
                                        <button type="submit" name="loginBtn" class="btn btn-dark btn-outline-hover-dark">login</button>
                                    </div>
                                    <div class="col-12 learts-mb-50">
                                        <div class="row learts-mb-n20">
                                            <div class="col-12 learts-mb-20">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-12 learts-mb-20">
                                                <a href="resend-verification.php" class="fw-400">Didnt recieve verification email?</a>
                                            </div>
                                            <div class="col-12 learts-mb-20">
                                                <a href="reset-password.php" class="fw-400">Lost your password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login & Register Section End -->
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>