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
    <title>Liste des Étudiants</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="affic.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <main>
        <h1>Liste des Étudiants</h1>
        <!-- Vérifier s'il y a des étudiants dans la base de données -->
                 <?php if ($result->num_rows > 0): ?>
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
                    <!-- Boucle sur chaque étudiant et afficher ses données -->
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><input type="checkbox" name="select_student" value="<?php echo $row['id']; ?>"></td>
                            <td><a href="modifier_etudiant.php?id=<?php echo $row['id']; ?>"><?php echo $row['nom']; ?></a></td>
                            
                            <td><?php echo $row['nom']; ?></td>
                            <td><?php echo $row['prenom']; ?></td>
                            <td><?php echo $row['classe']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td>
                                <a href="voir_carte.php?id=<?php echo $row['id']; ?>" class="view-card-button">Voir la carte</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <button class="delete-button">Supprimer sélectionnés</button>
        <?php else: ?>
            
            <p>Aucun étudiant enregistré.</p>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; 2024 Nom de l'école. Tous droits réservés.</p>
    </footer>
</body>
</html>
<?php $conn->close(); ?>
