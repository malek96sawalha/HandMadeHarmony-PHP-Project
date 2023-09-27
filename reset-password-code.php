<?php 
require_once 'config/function.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
function send_password_reset($get_name, $get_email, $token){
    $mail = new PHPMailer(true);
        $mail->isSMTP();    

        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'omar.migdadi43@gmail.com';
        $mail->Password   = 'ngsnlxfadyhdeyms';       

        $mail->SMTPSecure = 'tls';  
        $mail->Port       = 587 ;

        //Recipients
        $mail->setFrom('omar.migdadi43@gmail.com', $get_name);
        $mail->addAddress($get_email);
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );
        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Reset Password Notification';

        $email_template = "
                            <h2>Hello</h2>
                            <h3>You are reciving this email because we recieved a password reset rwquest for your account.</h3><br/><br/>
                            <a href='http://localhost/E-commerce-based-database/change-password.php?token=$token&email=$get_email'>Click Me</a>
                        ";
        $mail->Body = $email_template;
        $mail->send();
        // echo 'Message has been sent';
}
if(isset($_POST['reset'])) {
    $email = validate($_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT user_email FROM users WHERE user_email='$email' LIMIT 1";
    $check_email_run = mysqli_query($conn, $check_email);

    if(mysqli_num_rows($check_email_run) > 0){  
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['username'];
        $get_email = $row['user_email'];

        $update_token = "UPDATE users SET verify_token='$token' WHERE user_email='$get_email' LIMIT 1";
        $update_token_run = mysqli_query($conn, $update_token);

        if($update_token_run){
            send_password_reset($get_name, $get_email, $token);
            redirect('reset-password.php', 'Reset Password Email has been sent.!');
        } else {
            redirect('reset-password.php', 'Somthing Went Wronge. #1');
        }
    } else {
        redirect('reset-password.php', 'No Such Email Found!');
    }
}


if(isset($_POST['resetPass'])) {
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $confirm_password = validate($_POST['confirm_password']);
    $token = validate($_POST['password_token']);

    if(!empty($token)) {
        if(!empty($email) && !empty($password) && !empty($confirm_password)) {
            $check_token = "SELECT verify_token FROM users WHERE verify_token='$token' LIMIT 1";
            $check_token_run = mysqli_query($conn, $check_token);

            if(mysqli_num_rows($check_token_run) > 0) {
                if($password == $confirm_password){
                    $pass = password_hash($password, PASSWORD_DEFAULT);
                    $update_password = "UPDATE users SET user_password='$pass' WHERE verify_token='$token' LIMIT 1";
                    $update_password_run = mysqli_query($conn, $update_password);

                    if($update_password_run){
                        redirect("login.php", "New Password Updated Successfully!");
                    } else {
                        redirect("change-password.php?token=$token&email=$email", "Didn't update your password somthing went wrong!");
                    }
                } else {
                    redirect("change-password.php?token=$token&email=$email", 'Passwords does NOT Match!');
                }
            } else {
                redirect("change-password.php?token=$token&email=$email", 'Invalid Token!');
            }
        } else {
            redirect("change-password.php?token=$token&email=$email", 'Please fill all data!');
        }
    } else {
        redirect('change-password.php', 'No Token available!');
    }
}
?>