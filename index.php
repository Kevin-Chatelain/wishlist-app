<?php
    include "includes/classes/dbh.php";
    include "includes/classes/products.php";
    $products = new Products();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Un super site">
    <!-- Link -->
    <link rel="preload" href="assets/style/style.css" as="style">
    <link rel="preload" href="assets/style/card.css" as="style">
    <link rel="preload" href="assets/style/form.css" as="style">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/card.css">
    <link rel="stylesheet" href="assets/style/form.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Wishlist - Accueil</title>
</head>

<body>
    <div class="register-form hidden">
        <?php include "includes/register.php"; ?>
    </div>
    <div class="body-shadow hidden"></div>
    <main>
        <h1>Wishlist - Liste des produits</h1>
        <div class="options">
            <div class="filters">
                <?php $products->displayFilters(); ?>
            </div>
            <button class="new-product">Ajouter un produit <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="rgb(43, 43, 43)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button>
        </div>
        <div class="card-grid">
            <?php $products->displayProducts(); ?>
        </div>
    </main>

    <script src="assets/js/main.js"></script>
</body>

</html>