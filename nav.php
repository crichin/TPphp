<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="logoesgis.jpeg" alt="Logo ESGIS">
        </div>
        <div class="onglet">
            <a href="accueil.php">Accueil</a>
            <a href="presentation.php">Qui sommes-nous ?</a>
            <a href="ajout.php">Ajouter étudiant</a>
            <a href="afficher.php">Afficher étudiant</a>
            <a href="contact.php">Nous contacter</a>
        </div>
        <form action="recherche.php" method="get" class="search-form">
            <input type="text" name="query" placeholder="Rechercher..." class="reche">
            <button type="submit" class="rechercher">Rechercher</button>
        </form>
    </nav>
    <!-- Add main content here -->
</body>
</html>
