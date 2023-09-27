<?php

require_once 'config/function.php';

if(isset($_POST['loginBtn'])){
    $emailInput = validate($_POST['email']);
    $passwordInput = validate($_POST['password']);

    $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
    $password = filter_var($passwordInput, FILTER_SANITIZE_STRING);

    if($email != '' && $password != ''){
        $query = "SELECT * FROM users WHERE user_email='$email' LIMIT 1";
        $result = mysqli_query($conn, $query);
        
        if($result) {
            if(mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if(password_verify($password, $row['user_password'])){
                    if($row['verify_status'] == '1'){
                        if($row['role'] == 'admin') {
                            if($row['is_ban'] == 1) {
                                redirect('login.php', 'Your Account has been banned. Please contact the admin.');
                            }
                        $_SESSION['loggedInStatus'] = true;
                        $_SESSION['loggedInUserRole'] = $row['role'];
                        $_SESSION['loggedInUserData'] = [
                            'id' => $row['user_id'],
                            'name' => $row['username'],
                            'email' => $row['user_email'],
                            'phone' => $row['user_phone']
                        ];
                        $_SESSION['user_id'] = $row['user_id']; // to store the user id in the session
                        // var_dump($_SESSION);
                        // exit;
                        redirect('admin/index.php', 'Logged In Successfuly!');

                    } else {
                        if($row['is_ban'] == 1) {
                            redirect('login.php', 'Your Account has been banned. Please contact the admin.');
                        }
                        $_SESSION['user_id'] = $row['user_id'];// to store the user id in the session
                        $_SESSION['loggedInStatus'] = true;
                        $_SESSION['loggedInUserRole'] = $row['role'];
                        $_SESSION['loggedInUserData'] = [
                            'id' => $row['user_id'],
                            'name' => $row['username'],
                            'email' => $row['user_email'],
                            'phone' => $row['user_phone']
                        ];
                        // var_dump($_SESSION);
                        // exit;
                        if(isset($_SESSION['nextPage'])) {
                            redirect('checkout.php', '');
                        }
                        redirect('index.php', 'Logged In Successfuly!');
                    }
                } else {
                    redirect('login.php', 'Please Verify Your Email.!');
                }
            } else {
                redirect('login.php', 'Invalid Password!');
            }
        } else {
            redirect('login.php', 'Somthing Went Wrong');
        }
    }
}
}
?>