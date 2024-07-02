<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion des Cartes d'Étudiants</title>
    <link rel="stylesheet" href="accueil.css">
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo de l'école" id="logo">
        <h1>Ecole Supérieur de Gestion  d'Informatiques et des  Sciences</h1>
        <form action="recherche.php" method="GET" id="search-form">
            <input type="text" name="query" placeholder="Rechercher un étudiant...">
            <button type="submit">Rechercher</button>
        </form>
    </header>

    <?php include 'nav.php'; ?>

    <main>
        <h1>Bienvenue à l'école XYZ</h1>
        <p>Notre école offre une formation de qualité en L1 IRT...</p>
        <!-- Ajoutez plus de contenu sur l'école et la formation ici -->
    </main>

    <footer>
        <p>&copy; 2024 Nom de l'école. Tous droits réservés.</p>
    </footer>
</body>
</html>
