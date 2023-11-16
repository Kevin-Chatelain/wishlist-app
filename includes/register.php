<h2>Ajouter un produit à la wishlist</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
            <option value="Livre">Livre</option>
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

    <svg class="close-form" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
</form> 
                                   


<?php
    if(isset($_POST["register-product"]) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $products->register($_POST["name"], $_POST["picture"], $_POST["category"], $_POST["price"], $_POST["link"] );
        header("Location: /wishlist");
        exit;
    }
?>