<?php
require 'db.php';
require 'qrCode.php';

if (isset($_POST['submit'])) {
      $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
     $date_naissance = $_POST['date_naissance'];
       $lieu_naissance = $_POST['lieu_naissance'];
      $filiere = $_POST['filiere'];
     $classe = $_POST['classe'];
     $contact = $_POST['contact'];
    
     $photo = $_FILES['photo']['name'];
   
     $basePhoto = basename($photo);
   
     $get = explode("." , $basePhoto) ;
    
     $newname = $get[0].uniqid().".".$get[1];
   
         $target =    "images/" . $newname ;
   
       $qrCode =    qrCode("$nom , $prenom , $classe ,$contact" , 'arcode'.uniqid().'.png' , './');

            // Upload photo
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
                 
        $sql = "INSERT INTO etudiants (matricule, nom, prenom, date_naissance, lieu_naissance, filiere, classe, contact, photo,qrCode)   VALUES ('$matricule', '$nom', '$prenom', '$date_naissance', '$lieu_naissance', '$filiere', '$classe', '$contact', '$target' , '$qrCode')";

                  if ($conn->query($sql) === TRUE) {
            echo "Nouvel étudiant ajouté avec succès";
                } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Échec du téléchargement de la photo.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajouter Étudiant</title>
         <link rel="stylesheet" href="ajout.css">
</head>
<body>
    <?php include 'nav.php'; ?>
    

    <main>
               <h1>Ajouter un étudiant</h1>
             <form action="ajout.php" method="POST" enctype="multipart/form-data" class="student-form" id="student-form">
            <label for="matricule">Matricule:</label>
            <input type="text" id="matricule" name="matricule" required class="form-input">
            
               <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required class="form-input">
            
                 <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required class="form-input">
            
               <label for="date_naissance">Date de naissance:</label>
            <input type="date" id="date_naissance" name="date_naissance" required class="form-input">
            
               <label for="lieu_naissance">Lieu de naissance:</label>
              <input type="text" id="lieu_naissance" name="lieu_naissance" required class="form-input">
            
                <label for="filiere">Filière:</label>
                 <input type="text" id="filiere" name="filiere" required class="form-input">
            
                <label for="classe">Classe:</label>
                  <input type="text" id="classe" name="classe" required class="form-input">
            
               <label for="contact">Contact:</label>
              <input type="text" id="contact" name="contact" required class="form-input">
            
                <label for="photo">Photo:</label>
             <input type="file" id="photo" name="photo" required class="form-input">
            
              <img id="photo-preview" src="#" alt="Prévisualisation de la photo" class="photo-preview">
            
                <button type="submit" name="submit" class="submit-button">Ajouter</button>
        </form>
    </main>
    
    <script src="script.js"></script>
</body>
</html>
