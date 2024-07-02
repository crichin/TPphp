<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "gestion_etudiants "; 

//  la connexion a la bbd
     
$conn = new mysqli($servername, $username, $password, $dbname);

   // Vérification de  la connexion
  
   if ($conn->connect_error) {
         die("La connexion a échoué : " . $conn->connect_error);
}
  echo "Connexion réussie";


    // Vérification connexion 
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
      //donnee du formulaire recupeeree
       
      $nom = $_POST['nom'];
       $prenom = $_POST['prenom'];
       $date_naissance = $_POST['date_naissance'];
       $lieu_naissance = $_POST['lieu_naissance'];
       $filiere = $_POST['filiere'];
        $classe = $_POST['classe'];
         $contact = $_POST['contact'];
           $photo = $_FILES['photo']['name'];

    
    
           // requete insertion recupere
    
    $sql = "INSERT INTO gestion_etudiants (nom, prenom, date_naissance, lieu_naissance, filiere, classe, contact, photo)
               VALUES ('$nom', '$prenom', '$date_naissance', '$lieu_naissance', '$filiere', '$classe', '$contact', '$photo')";

        if ($conn->query($sql) === TRUE) {
       
            
        
            header("Location: enregistre.php");
        exit();
    } else {
        
        
        header("Location: erreur.php");
        exit();
    }
}


$conn->close();
?>
