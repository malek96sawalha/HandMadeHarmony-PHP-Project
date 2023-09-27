<?php 



if(isset($_GET['minusid'])){
    $id=$_GET['minusid'];
    session_start();
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['productid'] === $id) {
                if($item['quantity']==1){
                    break;
                   }
                $item['quantity']--; 

                break; 
            }
        }
        unset($item); 
        header('Location:shopping-cart.php'); 
    }


else{
    $id = $_GET['minusid']; 
    try{
    $query = "SELECT quantity FROM cart WHERE productid = $id";
    $result = $pdo->prepare($query);
    $result->execute();

    $quantityData = $result->fetch(PDO::FETCH_ASSOC);
    if ($quantityData) {
        $quantity = $quantityData['quantity'];
        $qty= --$quantity;
        $PDOupdate = "UPDATE cart SET quantity='$qty' WHERE productid=$id";
        $statement = $pdo->prepare($PDOupdate);
        $statement->execute();
    } 
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
header('Location:shopping-cart.php'); 
}}
else if(isset($_GET['plusid'])){
    $id=$_GET['plusid'];
    session_start();
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['productid'] === $id) {
                $item['quantity']++; 
                break; 
            }
        }
        unset($item); 
        header('Location:shopping-cart.php'); 
    }


else{
    $id = $_GET['plusid']; 
    try{
    $query = "SELECT quantity FROM cart WHERE productid = $id";
    $result = $pdo->prepare($query);
    $result->execute();

    $quantityData = $result->fetch(PDO::FETCH_ASSOC);
    if ($quantityData) {
        $quantity = $quantityData['quantity'];
        $qty= ++$quantity;


        $PDOupdate = "UPDATE cart SET quantity='$qty' WHERE productid=$id";
        $statement = $pdo->prepare($PDOupdate);
        $statement->execute();
    } 
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
header('Location:shopping-cart.php'); 
}}
?>