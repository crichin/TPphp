<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecss.css">
    <title>Accueil</title>
</head>
<body>
    <nav>
        <img src="" alt="">

        <div class="onglet">
            <a href="Acceuil.php">Accueil</a>
            <a href="presentation.php">Qui somme nous ?</a>
            <a href="ajouter.php">Ajouter etudiant</a>
            <a href="afficher.php">Afficher etudiant</a>
            <a href="contact.php">Nous contacter</a>
        </div>

        <form action="recherche.php" method="get">
            <input type="text" name="query" placeholder="Rechercher..." class="reche">
            <button type="submit" class="rechercher">Rechercher</button>
        </form>
    </nav>

    <center><h1>Nous contacter</h1></center>
</body>
</html>