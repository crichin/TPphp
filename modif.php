<?php
include 'db.php';

     // Vérification si un matricule d'étudiant est passé en paramètre
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['matricule'])) {
    $matricule = $_GET['matricule'];
    
    // Récupération des données de l'étudiant depuis la base de données
    $sql = "SELECT * FROM etudiants WHERE matricule = '$matricule'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Erreur de requête : " . mysqli_error($conn));
    }

    // Vérification si l'étudiant existe
    if (mysqli_num_rows($result) == 1) {
        $student = mysqli_fetch_assoc($result);
    } else {
        die("L'étudiant avec le matricule $matricule n'existe pas.");
    }
}

     // traite formulaire mis a jour 
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $matricule = $_POST['matricule'];
         $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
       $date_naissance = $_POST['date_naissance'];
        $lieu_naissance = $_POST['lieu_naissance'];
       $filiere = $_POST['filiere'];
      $classe = $_POST['classe'];
       $contact = $_POST['contact'];

    // mise a jour donne etudiant
    $sql = "UPDATE etudiants SET 
            nom='$nom', 
             prenom='$prenom', 
            date_naissance='$date_naissance', 
            lieu_naissance='$lieu_naissance', 
            filiere='$filiere', 
            classe='$classe', 
            contact='$contact' 
            WHERE matricule='$matricule'";

    if (mysqli_query($conn, $sql)) {
        header("Location: afficher.php"); // Redirection vers la liste des étudiants après la mise à jour
        exit;
    } else {
        echo "Erreur lors de la mise à jour : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un étudiant</title>
    <link rel="stylesheet" href="modif.css">
    
</head>
<?php include 'nav.php'; ?>
<body>
    <h2>Modifier un étudiant</h2>
    <form action="modif.php" method="post">
        <input type="hidden" name="matricule" value="<?= htmlspecialchars($student['matricule']) ?>">
        
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($student['nom']) ?>" required><br>
        
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?= htmlspecialchars($student['prenom']) ?>" required><br>
        
        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" value="<?= htmlspecialchars($student['date_naissance']) ?>" required><br>
        
        <label for="lieu_naissance">Lieu de naissance :</label>
        <input type="text" id="lieu_naissance" name="lieu_naissance" value="<?= htmlspecialchars($student['lieu_naissance']) ?>" required><br>
        
        <label for="filiere">Filière :</label>
        <input type="text" id="filiere" name="filiere" value="<?= htmlspecialchars($student['filiere']) ?>" required><br>
        
        <label for="classe">Classe :</label>
        <input type="text" id="classe" name="classe" value="<?= htmlspecialchars($student['classe']) ?>" required><br>
        
        <label for="contact">Contact :</label>
        <input type="text" id="contact" name="contact" value="<?= htmlspecialchars($student['contact']) ?>" required><br>
        
        <button type="submit">Modifier</button>
    </form>
</body>
</html>