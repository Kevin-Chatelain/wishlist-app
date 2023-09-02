<div class="card">
    <div class="card-image">
        <img src="<?= $products[$i]["picture"]?>" alt="<?= $products[$i]["name"]?>" />
    </div>
    <div class="card-infos">
        <p class="card-name"><?= $products[$i]["name"]?></p>
        <a class="card-link" href="<?= $products[$i]["link"]?>">Voir le produit</a>
        <p class="card-price"><?= $products[$i]["price"]?> €</p>
    </div>
</div>