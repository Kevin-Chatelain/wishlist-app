<h1>Modifier le produit "<?= $product[0]["name"]?>"</h1>

<form action="../includes/form/modify-product.php" class="modify-form" method="POST">
    <input type="hidden" id="id" name="id" value="<?= $product[0]["id"]?>">
    <label for="name">
        <p>Nom : </p>
        <input type="text" id="name" name="name" value="<?= $product[0]["name"]?>">
    </label>
    <label for="picture">
        <p>Photo : </p>
        <input type="text" id="picture" name="picture"  value="<?= $product[0]["picture"]?>">
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
        <input type="text" id="price" name="price"  value="<?= $product[0]["price"]?>">
    </label>
    <label for="link">
        <p>Lien du produit : </p>
        <input type="text" id="link" name="link"  value="<?= $product[0]["link"]?>">
    </label>
    <input type="submit" id="submit" name="modify-product" value="Enregistrer">
</form>


