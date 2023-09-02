<?php 
    if(isset($_POST["register-product"])) {
        include "classes/dbh.php";
        include "classes/products.php";
        $products = new Products();
        $products->register($_POST["name"], $_POST["picture"], $_POST["category"], $_POST["price"], $_POST["link"] );
    }
?>