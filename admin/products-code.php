<?php 
require_once '../config/function.php';
if(isset($_POST['saveProduct'])) {
    $name = validate($_POST['name']);
    $description = validate($_POST['description']);
    $image = $_FILES["image"]["tmp_name"];
    $imageData = addslashes(file_get_contents($image));
    $price = validate($_POST['price']);
    $discount = validate($_POST['discount']);
    $category = validate($_POST['category']);
    
    if ($name != '' || $description != '' || $imageData != '' || $price != '' || $discount != '' || $category != '') {
        $query = "INSERT INTO products (product_name, product_image, product_description, product_price, product_discount, category_id) 
                VALUES ('$name','$imageData','$description','$price','$discount','$category')";
        $result = mysqli_query($conn, $query);
        if($result){
            redirect('products.php', 'Product Added Successfuly');
        } else {
            redirect('products-create.php', 'Somthing Went Wrong');
        }
    } else {
        redirect('products-create.php', 'Please fill all the input fields.');
    }
}

if(isset($_POST['updateProduct'])) {
    $name = validate($_POST['name']);
    $description = validate($_POST['description']);
    $image = $_FILES["image"]["tmp_name"];
    $imageData = addslashes(file_get_contents($image));
    $price = validate($_POST['price']);
    $discount = validate($_POST['discount']);
    $category = validate($_POST['category']);

    $productId = validate($_POST['productId']);
    $product = getById('products', $productId, 'product_id');
    if($product['status'] != 200) {
        redirect('products-edit.php?product_id='.$productId, 'No Such ID is Found.');
    }
    
    if ($name != '' || $description != '' || $imageData != '' || $price != '' || $discount != '' || $category != '') {
        $query = "UPDATE products SET 
                    product_name = '$name',
                    product_description = '$description',
                    product_image = '$imageData'
                    WHERE product_id = '$productId'";
        $result = mysqli_query($conn, $query);
        if($result){
            redirect('products-edit.php?product_id='.$productId, 'Product Updated Successfuly');
        } else {
            redirect('products-create.php', 'Somthing Went Wrong');
        }
    } else {
        redirect('products-create.php', 'Please fill all the input fields.');
    }
}
?>