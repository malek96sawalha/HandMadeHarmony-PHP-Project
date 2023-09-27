<?php 
require_once '../config/function.php';
if(isset($_POST['saveUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $is_ban = validate($_POST['is_ban']) == true ? 1:0;
    $role = validate($_POST['role']);
    $pass = password_hash($password, PASSWORD_DEFAULT);

    if ($name != '' || $email != '' || $phone != '' || $password != '' || $role != '' || $is_ban != '' ) {
        $emailCheckQuery = "SELECT * FROM users WHERE user_email = '$email' LIMIT 1";
        $emailCheckResult = mysqli_query($conn, $emailCheckQuery);

        if (mysqli_num_rows($emailCheckResult) > 0) {
            invRedirect('users-create.php', "Email address is already registered.");
        } else {
            if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/', $password))  {
                invRedirect('users-create.php', "Password should contain one uppercase letter, lowercase letters, digit, and special character");
            } else {
                $query = "INSERT INTO users (username, user_email, user_password, user_phone, is_ban, role) 
                        VALUES ('$name','$email','$pass','$phone','$is_ban','$role')";
                $result = mysqli_query($conn, $query);
                if($result){
                    redirect('users.php', 'User/Admin Added Successfuly');
                } else {
                    redirect('users-create.php', 'Somthing Went Wrong');
                }
            }
        }
    } else {
        redirect('users-create.php', 'Please fill all the input fields.');
    }
}

if(isset($_POST['updateUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $is_ban = validate($_POST['is_ban']) == true ? 1:0;
    $role = validate($_POST['role']);
    $pass = password_hash($password, PASSWORD_DEFAULT);

    $userId = validate($_POST['userId']);
    $user = getById('users', $userId, 'user_id');
    if($user['status'] != 200) {
        redirect('users-edit.php?user_id='.$userId, 'No Such ID is Found.');
    }
    
    if ($name != '' || $email != '' || $phone != '' || $password != '' || $role != '' || $is_ban != '' ) {
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/', $password))  {
            invRedirect('users-edit.php?user_id='.$userId, "Password should contain one uppercase letter, lowercase letters, digit, and special character");
        } else {
            $query = "UPDATE users SET 
                        username = '$name',
                        user_email = '$email',
                        user_password = '$pass', 
                        user_phone = '$phone', 
                        is_ban = '$is_ban', 
                        role = '$role'
                        WHERE user_id = '$userId'";
            $result = mysqli_query($conn, $query);
            if($result){
                redirect('users-edit.php?user_id='.$userId, 'User/Admin Updated Successfuly');
            } else {
                redirect('users-create.php', 'Somthing Went Wrong');
            }
        }
    } else {
        redirect('users-create.php', 'Please fill all the input fields.');
    }
}
?>