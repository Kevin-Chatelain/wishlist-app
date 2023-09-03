<h2>Ajouter un produit à la wishlist</h2>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
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
            <option value="Vêtement">Vêtement</option>
            <option value="High-Tech">High-Tech</option>
            <option value="Divers">Divers</option>
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
                                   


<?php 
    if(isset($_POST["register-product"])) {
        include "classes/dbh.php";
        include "classes/products.php";
        $products = new Products();
        $products->register($_POST["name"], $_POST["picture"], $_POST["category"], $_POST["price"], $_POST["link"] );
    }
?>