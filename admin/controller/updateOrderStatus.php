<?php

    include_once "../../config/dbcon.php";
   
    $order_id = $_POST['record'];

    $sql = "SELECT order_status from orders where order_id='$order_id'"; 
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    
   // echo $row["pay_status"];
    
    if($row["order_status"]==0){
         $update = mysqli_query($conn,"UPDATE orders SET order_status = 1 where order_id='$order_id'");
    }
    else if($row["order_status"]==1){
         $update = mysqli_query($conn,"UPDATE orders SET order_status = 0 where order_id='$order_id'");
    }

?>