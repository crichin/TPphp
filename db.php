<?php
    $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "gestion_etudiants";

    //  connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

      // Vérifions la connexion
       if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
