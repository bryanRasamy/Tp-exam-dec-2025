<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - E-commerce</title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="/" class="logo">E-Varotra</a>
                <ul class="menu">
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/ajout">Ajouter produit</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <h1>Bienvenue sur notre boutique</h1>
        <section class="product-list">
            <?php 
                if(!empty($produits)){
                    foreach($produits as $produit){
            ?>
                <article class="product-card">
                    <a href="/produit/<?= $produit['id'] ?>">
                        <img src="/assets/images/<?= $produit['image'] ?>" alt="Produit 1">
                        <h2><?= $produit['name'] ?></h2>
                        <p>Prix : <?= $produit['price'] ?> Ar</p>
                    </a>
                </article>
            <?php 
                    }
                }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 E-Varotra</p>
    </footer>
</body>
</html>