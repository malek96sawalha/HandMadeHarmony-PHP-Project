<?php
$pageTitle = 'Contact Us';
include 'includes/head-vars.php';
include 'includes/navbar.php';
?>
<div class="offcanvas-overlay"></div>

<!-- Page Title/Header Start -->
<div class="page-title-section section"
    data-bg-image="https://htmldemo.net/learts/learts/assets/images/bg/page-title-1.webp">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-title">
                    <h1 class="title">Contact us</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Contact us</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->

<!-- Contact Information & Map Section Start -->
<div class="section section-padding">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title">Keep in touch with us</h2>
            <p>Been tearing your hair out to find the perfect gift for your loved ones? Try visiting our nationwide
                local stores. You can also contact us to become partner or distributor. Call us, send us an email or
                make an appointment now.</p>
        </div>
        <!-- Section Title End -->

        <!-- Contact Information Start -->
        <div class="row learts-mb-n30">
            <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                <div class="contact-info">
                    <h4 class="title">ADDRESS</h4>
                    <span class="info"><i class="icon fas fa-map-marker-alt"></i> 1234 Rainbow Street, Building C,
                        Apartment 5
                        Amman, Jordan</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                <div class="contact-info">
                    <h4 class="title">CONTACT</h4>
                    <span class="info"><i class="icon fas fa-phone-alt"></i> Mobile: (+962) – 777 - 2121 <br> Hotline:
                        0800 – 2222</span>
                    <span class="info"><i class="icon far fa-envelope"></i> Mail: <a
                            href="#">contact@leartsstore.com</a></span>
                </div>
                <div class="map_section clearfix">
                    <div id="mapBox" data-lat="31.9556" data-lon="35.9286" data-zoom="15"
                        data-info="Rainbow Street, Rabbath Ammon" data-mlat="31.9556" data-mlon="35.9286">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                <div class="contact-info">
                    <h4 class="title"> HOUR OF OPERATION</h4>
                    <span class="info"><i class="icon far fa-clock"></i> Monday – Friday : 09:00 – 20:00 <br> Sunday &
                        Saturday: 10:30 – 22:00</span>
                </div>
            </div>
        </div>
        <!-- Contact Information End -->

        <!-- Contact Map Start -->
        <div class="row learts-mt-60">
            <div class="col">
                <img src="assets/images/contact/location-map.PNG" alt="location-map"
                    style="width: 100%; height: auto; max-width: 100%;">
            </div>
        </div>
    </div>
</div>
<!-- Contact Map End -->


<!-- Contact Information & Map Section End -->

<!-- Contact Form Section Start -->
<div class="section section-padding pt-0">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title">Send a message</h2>
        </div>
        <!-- Section Title End -->

        <div class="row">
            <div class="col-lg-8 col-12 mx-auto">
                <div class="contact-form">



                    <?php

                    include "mail.php";
                    //send_mail($recipient,$subject,$message);
                    
                    $error = "";

                    if (count($_POST) > 0) {

                        //something was posted
                        $recipient = "sawalhhamalik@gmail.com";
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];
                        $name = $_POST['name'];
                        $email = $_POST['email'];

                        if (empty($recipient)) {
                            $error .= "recipient can not be empty<br>";
                        }

                        if (empty($subject)) {
                            $error .= "subject can not be empty<br>";
                        }

                        if (empty($message)) {
                            $error .= "message can not be empty<br>";
                        }
                        if (empty($name)) {
                            $error .= "message can not be empty<br>";
                        }

                        if ($error == "") {
                            if (send_mail($recipient, $subject, $message, $name)) {
                                $error .= "Message sent!<br>";
                            } else {
                                $error .= "Message NOT sent!<br>";
                            }
                        }
                    }

                    ?>


                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <form method="post" class="border p-4 shadow rounded">
                                    <h3 class="mb-3">Send Email</h3>
                                    <div class="mb-3">
                                        <?php if ($error == "Message NOT sent!<br>") { ?>
                                            <span class="text-danger">
                                                <?= $error ?>
                                            </span>
                                        <?php } else {
                                            ?>
                                            <span class="text-success">
                                                <?= $error ?>
                                            </span>
                                            <?php
                                        } ?>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="email" class="form-control"
                                            placeholder="Receiver Email" autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>



                    <!-- <form action="assets/php/contact-mail.php" id="contact-form" method="post">
                            <div class="row learts-mb-n30">
                                <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Your Name *" name="name"></div>
                                <div class="col-md-6 col-12 learts-mb-30"><input type="email" placeholder="Email *" name="email"></div>
                                <div class="col-12 learts-mb-30"><textarea name="message" placeholder="Message"></textarea></div>
                                <div class="col-12 text-center learts-mb-30"><button class="btn btn-dark btn-outline-hover-dark">Submit</button></div>
                            </div>
                        </form> -->
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Contact Form Section End -->
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>