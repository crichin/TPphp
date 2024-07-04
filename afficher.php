<?php
      include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_selected'])) {
        if (isset($_POST['select_student'])) {
            $selected_matricules = $_POST['select_student'];
                 $matricules = implode(',', array_map('intval', $selected_matricules));    // pour la securite connexion
      
                 $sql = "DELETE FROM etudiants WHERE matricule IN ($matricules)";
            if (mysqli_query($conn, $sql)) {
                  header("Location: afficher.php"); 
            exit;
              } else {
                   echo "Erreur lors de la suppression : " . mysqli_error($conn);
           }
       } else {
                 echo "Aucun étudiant sélectionné pour la suppression.";
       }
}

       // Récupérons la liste des étudiants
          $sql = "SELECT * FROM etudiants";
            $result = mysqli_query($conn, $sql);

   if (!$result) {
                die("Erreur de requête : " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="affic.css">
    
    </head>
       <?php include 'nav.php'; ?>
       <body>
         <h2>Liste des étudiants</h2>
         <form method="post" action="afficher.php">
        <table border="1">
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
                         <?php while($row = mysqli_fetch_assoc($result)): ?>
                       <tr>
                        <td><input type="checkbox" name="select_student[]" value="<?= $row['matricule'] ?>"></td>
                        
                             <td><a href="modif.php?matricule=<?= $row['matricule'] ?>"><?= htmlspecialchars($row['nom']) ?></a></td>
                        
                                    <td><?= htmlspecialchars($row['prenom']) ?></td>
                           
                              <td><?= htmlspecialchars($row['classe']) ?></td>
                        <td><?= htmlspecialchars($row['contact']) ?></td>
                           
                        <td><a href="./carte.php?matricule=<?= $row['matricule'] ?> " > <img width="25px" src="house-solid.svg" ></a></td>
                       </tr>
                   <?php endwhile; ?>
               </tbody>
        </table>
        <button type="submit" name="delete_selected">Supprimer sélectionnés</button>
    </form>
</body>
</html>
