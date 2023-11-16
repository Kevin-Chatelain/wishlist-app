<?php 
    include "../includes/classes/dbh.php";
    include "../includes/classes/products.php";
    $products = new Products();

    if($_GET) {
        $productId = $_GET["delete-id"];
        $products->deleteProduct($productId);
        header('Location: ../index.php');
    }
    
?>