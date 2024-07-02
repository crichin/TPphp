<?php
include 'db.php';

// Récupérer la liste des étudiants
$sql = "SELECT * FROM etudiants";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher Étudiants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="logo.png" alt="Logo de l'école" id="logo">
        <h1>Nom de l'école</h1>
        <form action="recherche.php" method="GET" id="search-form">
            <input type="text" name="query" placeholder="Rechercher un étudiant...">
            <button type="submit">Rechercher</button>
        </form>
    </header>

    <?php include 'nav.php'; ?>

    <main>
        <h1>Liste des Étudiants</h1>
        <table class="student-table">
            <thead>
                <tr>
                    <th>Sélectionner</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Classe</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><input type="checkbox" name="select_student" value="<?php echo $row['id']; ?>"></td>
                            <td><a href="modifier_etudiant.php?id=<?php echo $row['id']; ?>"><?php echo $row['nom']; ?></a></td>
                            <td><?php echo $row['prenom']; ?></td>
                            <td><?php echo $row['classe']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td>
                                <a href="voir_carte.php?id=<?php echo $row['id']; ?>" class="view-card-button">Voir la carte</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">Aucun étudiant trouvé.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <button type="button" onclick="supprimerSelection()">Supprimer sélectionnés</button>
    </main>

    <footer>
        <p>&copy; 2024 Nom de l'école. Tous droits réservés.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
