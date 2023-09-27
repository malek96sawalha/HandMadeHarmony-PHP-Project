<?php 
require '../config/function.php';

$paraResult = chechParamId('category_id');
if(is_numeric($paraResult)){
    $categoryId = validate($paraResult);

    $category = getById('categories', $categoryId, 'category_id');
    if($category['status'] == 200) {
        $categoryDeleteRes = deleteQuery('categories', $categoryId, 'category_id');
        if($categoryDeleteRes){
            $category = redirect('categories.php', 'Category Deleted Successfuly');
        } else {
            $category = redirect('categories.php', 'Somthing Went Wrong');
        }
    } else {
        $category = redirect('categories.php', $category['message']);
    }
} else {
    redirect('categories.php', $paraResult);
}
?>