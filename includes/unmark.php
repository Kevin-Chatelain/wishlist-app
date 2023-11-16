<?php 
    include "../includes/classes/dbh.php";
    include "../includes/classes/products.php";
    $products = new Products();

    if($_GET) {
        $productId = $_GET["unmark-id"];
        $products->unmarkBoughtItem($productId);
        header('Location: ../index.php');
    }
    
?>