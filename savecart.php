<?php
include 'includes/head-vars.php';

if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) {
    $loggedInId = $_SESSION['loggedInUserData']['id'];
    $array_product = $_SESSION['cart'];
    foreach ($_SESSION['cart'] as $item) {
        $product_id = $item['productid'];
        $product_quantity = $item['quantity'];

        $check_sql = "SELECT * FROM cart WHERE user_id='$loggedInId' AND product_id = '$product_id'";
        $check_result = mysqli_query($conn, $check_sql);

        if (mysqli_num_rows($check_result) > 0) {
            $sql_c = "INSERT INTO cart (user_id, product_id, product_quantity)
                      VALUES ('$loggedInId', '$product_id', '$product_quantity')";
            $result = mysqli_query($conn, $sql_c);
            var_dump($result);
            if (!$result) {
                error_log("SQL Error: " . mysqli_error($conn)); // Log the error
                // You might want to handle this error more gracefully, e.g., display a message to the user
            }
        }
    }

    unset($_SESSION['cart']);
    header('Location: checkout.php');
    exit(0);
} else {
    $_SESSION['nextPage'] = 'checkout.php';
    redirect('login.php', 'Please login to proceed to checkout.');
}
?>
