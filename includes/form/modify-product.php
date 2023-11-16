<?php 

include "../classes/dbh.php";
include "../classes/products.php";
$products = new Products();

if(isset($_POST["modify-product"])) {
    $products->updateProduct($_POST["id"], $_POST["name"], $_POST["picture"], $_POST["category"], $_POST["price"], $_POST["link"]);
}
header('Location: ../../index.php');

?>