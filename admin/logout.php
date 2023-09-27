<?php 
require '../config/function.php';
if(isset($_SESSION['loggedInStatus'])) {
    logoutSession();
    redirect('../login.php', 'Logged Out Successfuly');
}
?>