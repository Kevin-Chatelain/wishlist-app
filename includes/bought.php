<?php 
    include "../includes/classes/dbh.php";
    include "../includes/classes/products.php";
    $products = new Products();

    if($_GET) {
        $productId = $_GET["mark-id"];
        $products->markAsBought($productId);
        header('Location: ../index.php');
    }
    
?>