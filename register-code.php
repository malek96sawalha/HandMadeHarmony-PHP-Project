<?php
include_once 'config/function.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
function sendEmailVerify($name, $email, $verify_token)
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
    $mail->Subject = 'Email verification';

    $email_template = "
                            <h2>You have registered with Home Made Harmony</h2>
                            <h5>Verify your email address to login with the bellow given link</h5><br/><br/>
                            <a href='http://localhost/E-commerce-based-database/verify-email.php?token=$verify_token'>Click Me</a>
                        ";

    $mail->Body = $email_template;
    $mail->send();
    // echo 'Message has been sent';

}
if (isset($_POST['signup'])) {
    $registerEmail = $_POST['registerEmail'];
    $registerUserName = $_POST['registerUserName'];
    $registerPhone = $_POST['registerPhoneNumber'];
    $registerPassword = $_POST['registerPassword'];
    $registerConfrimPassword = $_POST["registerConfrimPassword"];
    $verify_token = md5(rand());

    // Check if the email is a Gmail address using regular expression
    if (!preg_match('/^[a-zA-Z0-9._%+-]+@gmail\.com$/', $registerEmail)) {
        invRedirect('register.php', "Please use a Gmail address for registration.");
    } else {
        if (!preg_match('/^07[0-9]{8}$/', $registerPhone)) {

            invRedirect('register.php', "Please use a valid Phone Number .");

        } else {

            // Check if the password starts with an uppercase letter
            if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/', $registerPassword)) {
                invRedirect('register.php', "Password should contain one uppercase letter, lowercase letters, digit, and special character");
            } else {
                // Check if passwords match
                if ($registerPassword !== $registerConfrimPassword) {
                    invRedirect('register.php', "Passwords does not match.");
                } else {
                    // Hash the password
                    $hashedPassword = password_hash($registerPassword, PASSWORD_DEFAULT);

                    // Check if email already exists in the database
                    $emailCheckQuery = "SELECT * FROM users WHERE user_email = '$registerEmail' LIMIT 1";
                    $emailCheckResult = mysqli_query($conn, $emailCheckQuery);

                    if (mysqli_num_rows($emailCheckResult) > 0) {
                        $emailError = "Email address is already registered.";
                    } else {
                        // Insert the new user record
                        $sql = "INSERT INTO users (username, user_email, user_password, user_phone,verify_token) VALUES ('$registerUserName', '$registerEmail', '$hashedPassword','$registerPhone','$verify_token')";

                        if ($query_run = mysqli_query($conn, $sql)) {
                            sendEmailVerify($registerUserName, $registerEmail, $verify_token);
                            redirect('register.php', "Register Successfull. Pleace verify your Email Address.");
                        } else {
                            redirect('register.php', "Register Failed.");
                        }
                    }
                }
            }
        }
    }
}
//     $check_email_query = "SELECT user_email FROM users WHERE user_email='$registerEmail' LIMIT 1";
//     $check_email_query_run = mysqli_query($conn, $check_email_query);

//     if(mysqli_num_rows($check_email_query_run) > 0) {
//         redirect('register.php', "Email Address already Exists");
//     } else {
//         $query = "INSERT INTO users (username, user_email, user_password, user_phone,verify_token) VALUES ('$registerUserName','$registerEmail','$registerPassword','$phone','$verify_token')";
//         $query_run = mysqli_query($conn, $query);

//         if($query_run){
//             sendEmailVerify($registerUserName,$registerEmail,$verify_token);
//             redirect('register.php', "Register Successfull. Pleace verify your Email Address.");
//         } else {
//             redirect('register.php', "Register Failed.");
//         }
//     }

?>