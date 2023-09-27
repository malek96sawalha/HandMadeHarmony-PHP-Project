<?php 
require_once '../config/function.php';
if(isset($_POST['saveCategory'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = validate($_POST['name']);
        $description = validate($_POST['description']);
        $image = $_FILES["catImage"]["tmp_name"];
        $imageData = addslashes(file_get_contents($image));
        
        if ($name != '' || $description != '' || $image != '') {
            $query = "INSERT INTO categories (category_name, category_image, categories_description) 
                    VALUES ('$name','$imageData','$description')";
            $result = mysqli_query($conn, $query);
            if($result){
                redirect('categories.php', 'Category Added Successfuly');
            } else {
                redirect('categories-create.php', 'Somthing Went Wrong');
            }
        } else {
            redirect('categories-create.php', 'Please fill all the input fields.');
        }
    }
}

if(isset($_POST['updateCategory'])) {
    $name = validate($_POST['name']);
    $description = validate($_POST['description']);
    $image = $_FILES["catImage"]["tmp_name"];
    $imageData = addslashes(file_get_contents($image));

    $categoryId = validate($_POST['categoryId']);
    $category = getById('categories', $categoryId, 'category_id');
    if($category['status'] != 200) {
        redirect('categories-edit.php?category_id='.$categoryId, 'No Such ID is Found.');
    }
    
    if ($name != '' || $description != '' || $image != '') {
        $query = "UPDATE categories SET 
                    category_name = '$name',
                    categories_description = '$description',
                    category_image = '$imageData'
                    WHERE category_id = '$categoryId'";
        $result = mysqli_query($conn, $query);
        if($result){
            redirect('categories-edit.php?category_id='.$categoryId, 'Category Updated Successfuly');
        } else {
            redirect('categories-create.php', 'Somthing Went Wrong');
        }
    } else {
        redirect('categories-create.php', 'Please fill all the input fields.');
    }
}
?>