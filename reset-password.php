<?php 
$pageTitle = 'Reset password';
include 'includes/head-vars.php';
include 'includes/navbar.php';
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
                        <h1 class="title">Reset Password</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Reset Password</li>
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
                            <h2 class="title">Reset Password</h2>
                        </div>
                        <div class="login-register-form">
                            <?= alertMessage(); ?>
                            <form action="reset-password-code.php" method="POST">
                                <!-- Your form fields here -->
                                <div class="col-12 learts-mb-20">
                                    <label for="email">Email address <abbr class="required" required>*</abbr></label>
                                    <input type="text" id="email" name="email">
                                    <?php //if (!empty($emailError)) echo "<span style='color: red;'>$emailError</span>"; ?>
                                </div>
                                <div class="col-12 text-center learts-mb-50">
                                    <button class="btn btn-dark btn-outline-hover-dark" type="submit" name="reset">Submit</button>
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
