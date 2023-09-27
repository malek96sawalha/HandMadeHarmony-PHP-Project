<?php 
require '../config/function.php';

$paraResult = chechParamId('product_id');
if(is_numeric($paraResult)){
    $productId = validate($paraResult);

    $product = getById('products', $productId, 'product_id');
    if($product['status'] == 200) {
        $productDeleteRes = deleteQuery('products', $productId, 'product_id');
        if($productDeleteRes){
            $product = redirect('products.php', 'Product Deleted Successfuly');
        } else {
            $product = redirect('products.php', 'Somthing Went Wrong');
        }
    } else {
        $product = redirect('products.php', $category['message']);
    }
} else {
    redirect('products.php', $paraResult);
}
?>