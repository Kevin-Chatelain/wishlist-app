<div class="card">
    <div class="card-image">
        <img src="<?= $products[$i]["picture"]?>" alt="<?= $products[$i]["name"]?>" />
    </div>
    <div class="card-infos">
        <p class="card-name"><?= $products[$i]["name"]?></p>
        <div class="card-low-row">
            <p class="card-price"><?= $products[$i]["price"]?> €</p>
            <span>-</span>
            <p class="card-category"><?= $products[$i]["category"]?></p>
        </div>
        <a class="card-link" href="<?= $products[$i]["link"]?>">Voir le produit<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0"/></svg></span></a>
    </div>
</div>