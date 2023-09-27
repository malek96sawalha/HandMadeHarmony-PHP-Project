<?php
include 'includes/head-vars.php';


if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) {
    $loggedInId = $_SESSION['loggedInUserData']['id'];

    if (isset($_GET['product_id'])) {
        $product_id = $_GET['product_id'];

        $sqlw = "INSERT INTO wish_list ( product_id, user_id	
    ) VALUES ('$product_id', '$loggedInId')";
        if (mysqli_query($conn, $sqlw)) {
            echo "Product ID: $product_id";
            header("Location: product-details.php?id=" . $product_id);

            exit();
        } else {
            echo "Error: " . $sqlw . "<br>" . mysqli_error($conn);
        }

    }
} else {
    $loggedInId = NULL;
    header('Location: login.php');
    exit(0);
}

?>