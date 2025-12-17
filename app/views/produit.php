<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit - E-commerce</title>
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
        <section class="product-detail">
            <?php 
                if(!empty($produit)){    
            ?>
                <img src="/assets/images/<?= $produit['image'] ?>" alt="Produit 1">
                <div class="info">
                    <h1><?= $produit['name'] ?></h1>
                    <p>Description détaillée du produit.</p>
                    <p><strong>Prix :</strong> <?= $produit['price'] ?> Ar</p>
                    <a href="/ajout/<?= $produit['id'] ?>">Modifier le produit</a>
                </div>
            <?php } ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 E-Varotra</p>
    </footer>
</body>
</html>