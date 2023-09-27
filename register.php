<?php 
$pageTitle = 'Login & Register';
include 'includes/head-vars.php';
include 'includes/navbar.php';
require_once 'register-code.php';
// if(isset($_SESSION['loggedInStatus'])) {
//     redirect('index.php', 'You are already logged in.');
// }
?>    
    <div class="offcanvas-overlay"></div>
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="https://htmldemo.net/learts/learts/assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        <h1 class="title">Register</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Page Title/Header End -->

    <!-- Register Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="alert">
            </div>
            <div class="row g-0">
                <div class="col-lg-6 offset-lg-3">
                    <div class="user-login-register bg-light rounded-4">
                        <div class="login-register-title" >
                            <h2 class="title">Register</h2>
                            <p class="desc">If you don’t have an account, register now!</p>
                        </div>
                        <div class="login-register-form">
                            <?= alertMessage(); ?>
                            <form action="register-code.php" method="POST">
                                <!-- Your form fields here -->
                                <div class="col-12 learts-mb-20">
                                    <label for="registerEmail">Email address <abbr class="required" required>*</abbr></label>
                                    <input type="text" id="registerEmail" name="registerEmail">
                                    <?=validationREGEX()?>
                                </div>
                                <div class="col-12 learts-mb-20">
                                    <label for="registerUserName">User name <abbr class="required" required>*</abbr></label>
                                    <input type="text" id="registerUserName" name="registerUserName">
                                    <?=validationREGEX()?>
                                </div>
                                <div class="col-12 learts-mb-20">
                                    <label for="registerUserName">Phone Number <abbr class="required" required>*</abbr></label>
                                    <input type="text" id="registerPhoneNumber" name="registerPhoneNumber">
                                    <?=validationREGEX()?>
                                </div>
                                <div class="col-12 learts-mb-20">
                                    <label for="registerPassword">Enter Password <abbr class="required" required>*</abbr></label>
                                    <input type="password" id="registerPassword" name="registerPassword">
                                    <?=validationREGEX()?>
                                </div>
                                <div class="col-12 learts-mb-20">
                                    <label for="registerConfirmPassword">Confirm Password <abbr class="required" required>*</abbr></label>
                                    <input type="password" id="registerConfrimPassword" name="registerConfrimPassword">
                                    <?=validationREGEX()?>
                                </div>
                                <div class="col-12 text-center learts-mb-50">
                                    <button class="btn btn-dark btn-outline-hover-dark" type="submit" id="sign-up" name="signup" >Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>
