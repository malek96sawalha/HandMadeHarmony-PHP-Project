
<?php
session_start();

if(isset($_GET['delid'])) {
    $product_id = $_GET['delid'];

    // Loop through the cart array and find the item to remove
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['productid'] == $product_id) {
            // Remove the item from the cart array
            unset($_SESSION['cart'][$key]);
            break; // Exit the loop once the item is found and removed
        }
    }

    // Optional: Reindex the array to maintain sequential keys
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

// Redirect back to the cart page
header('Location: shopping-cart.php');
exit();
?>
