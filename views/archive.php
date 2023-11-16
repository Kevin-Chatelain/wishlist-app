<?php
    include "../includes/classes/dbh.php";
    include "../includes/classes/products.php";
    $products = new Products();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Un super site">
    <!-- Link -->
    <link rel="preload" href="../assets/style/style.css" as="style">
    <link rel="preload" href="../assets/style/card.css" as="style">
    <link rel="preload" href="../assets/style/form.css" as="style">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/style/card.css">
    <link rel="stylesheet" href="../assets/style/form.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Wishlist - Archive</title>
</head>

<body>
    <div class="body-shadow hidden"></div>
    <main>
        <h1>Wishlist - Produits achetés</h1>
        <div class="options">
            <div class="filters">
                <?php $products->displayFilters(); ?>
            </div>
        </div>
        <div class="total">
            <p>Total : <span></span> €</p>
            <a href="../index.php">Retour<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="rgb(43, 43, 43)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h13M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="card-grid">
            <?php $products->displayProducts("bought"); ?>
        </div>
    </main>

    <script src="../assets/js/main.js"></script>
</body>

</html>