<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Un super site">
    <link rel="preload" href="assets/style/style.css" as="style">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Template</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
        }
    </style>
</head>

<body>

    <h1>Ajouter un produit à la wishlist</h1>
    <form action="products.php" method="POST">
        <label for="name">
            <p>Nom : </p>
            <input type="text" id="name" name="name">
        </label>
        <label for="picture">
            <p>Photo : </p>    
            <input type="text" id="picture" name="picture">
        </label>
        <label for="category">
            <p>Catégorie : </p> 
            <select id="category" name="category">
                <option value="vetement">Vêtement</option>
                <option value="high-tech">High-Tech</option>
                <option value="divers">Divers</option>
            </select>
        </label>
        <label for="price">
            <p>Prix : </p> 
            <input type="text" id="price" name="price">
        </label>
        <label for="link">
            <p>Lien du produit : </p> 
            <input type="text" id="link" name="link">
        </label>
        <input type="submit" id="submit" name="register-product" value="Enregistrer">
    </form>


    <script src="assets/js/main.js"></script>
</body>

</html>