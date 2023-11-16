<?php
    include "../includes/classes/dbh.php";
    include "../includes/classes/products.php";
    $products = new Products();

    if(isset($_GET["product-id"])) {
        $product = $products->getProduct($_GET["product-id"]);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Un super site">
    <!-- Link -->
    <link rel="preload" href="../assets/style/style.css" as="style">
    <link rel="preload" href="../assets/style/form.css" as="style">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/style/card.css">
    <link rel="stylesheet" href="../assets/style/form.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Wishlist - Accueil</title>
</head>

<body>
    <main>
        <?php include "../includes/modify.php"; ?>
    </main>

    <script>
        let category = "<?= $product[0]["category"] ?>";
        document.querySelector("option[value = '"+category+"']").setAttribute("selected", "selected");
    </script>
</body>

</html>