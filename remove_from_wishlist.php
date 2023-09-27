<?php
include_once 'config/function.php';

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    
    // Perform the deletion query
    $delete_query = "DELETE FROM wish_list WHERE product_id = $product_id";
    mysqli_query($conn, $delete_query);
    
    // Redirect back to the wishlist page
    header("Location: wishlist.php");
    exit();
}
?>