<?php 
require_once 'config/function.php';
if(isset($_GET['token'])){
    $token = $_GET['token'];
    $verify_query = "SELECT verify_token,verify_status FROM users WHERE verify_token='$token' LIMIT 1";
    $verify_query_run = mysqli_query($conn, $verify_query);
    if(mysqli_num_rows($verify_query_run)>0){
        $row = mysqli_fetch_array($verify_query_run);
        if($row['verify_status'] == '0'){
            $clicked_token = $row['verify_token'];
            $update_query = "UPDATE users SET verify_status = '1' WHERE verify_token='$clicked_token' LIMIT 1";
            $update_query_run = mysqli_query($conn, $update_query);
            if($update_query_run){
                redirect('login.php','Your Account has been verified Seccessfully.');
            }
        } else {
            redirect('login.php','Email Already Verified. Please Login');
        }
    }else {
        redirect('login.php','This token does not exists');
    }
} else {
    redirect('login.php','Not Allowed');
}
?>