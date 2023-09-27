<?php
require_once 'config/function.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
function resend_email_verify($name, $email, $verify_token)
{
    $mail = new PHPMailer(true);
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'omar.migdadi43@gmail.com';
    $mail->Password = 'ngsnlxfadyhdeyms';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    //Recipients
    $mail->setFrom('omar.migdadi43@gmail.com', $name);
    $mail->addAddress($email);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Resen - Email verification';

    $email_template = "
                            <h2>You have registered with Home Made Harmony</h2>
                            <h5>Verify your email address to login with the bellow given link</h5><br/><br/>
                            <a href='http://localhost/E-commerce-based-database/verify-email.php?token=$verify_token'>Click Me</a>
                        ";
    $mail->Body = $email_template;
    $mail->send();
    // echo 'Message has been sent';
}
if (isset($_POST['resend'])) {
    if (!empty(trim($_POST['email']))) {
        $email = validate($_POST['email']);
        $checkEmail_query = "SELECT * FROM users WHERE user_email='$email' LIMIT 1";
        $checkEmail_query_run = mysqli_query($conn, $checkEmail_query);

        if (mysqli_num_rows($checkEmail_query_run) > 0) {
            $row = mysqli_fetch_array($checkEmail_query_run);
            if ($row['verify_status'] == '0') {
                $name = $row['username'];
                $email = $row['user_email'];
                $verify_token = $row['verify_token'];
                resend_email_verify($name, $email, $verify_token);
                redirect('login.php', 'Verification Email link has been sent to your email address.!');
            } else {
                redirect('login.php', 'Email already verified please login.');
            }
        } else {
            redirect('register.php', 'Email is not registered. Please Register now.!');
        }

    } else {
        redirect('resend-verification.php', 'Please enter email address');
    }
}
?>