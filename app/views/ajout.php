<?php 
    $titre="Ajouter";

    if(!empty($id)){
        $titre="Modifier";
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?> - E-commerce</title>
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
        <h2><?= $titre ?> un produit</h2>
        <section class="product-detail">
            <form action="/add" method="post">
                <?php if(!empty($id)){?>
                    <input type="hidden" name="id" value="<?= $id ?>">
                <?php } ?>
                
                <h4>Nom du produit:</h4>
                <input type="text" name="name" id="">

                <h4>Prix:</h4>
                <input type="number" name="price" id="">

                <input type="submit" value="<?= $titre ?> produit">
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 E-Varotra</p>
    </footer>
</body>
</html>