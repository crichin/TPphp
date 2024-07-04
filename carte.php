<?php
include 'db.php';

if (isset($_GET['matricule'])) {
    $matricule = $_GET['matricule'];
    $sql = "SELECT * FROM etudiants WHERE matricule = '$matricule'";
    $result = mysqli_query($conn, $sql);
    $student = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Carte d'étudiant</title>
    <style>
        .card {
            width: 300px;
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Carte d'étudiant</h2>

        <img src="./<?=htmlspecialchars($student['photo'])?>" alt="Photo de l'étudiant"><br>
        <img src="./<?=htmlspecialchars($student['qrCode'])?>" alt="qrcode de l'étudiant"><br>
        <strong>Matricule :</strong> <?= htmlspecialchars($student['matricule']) ?><br>
        <strong>Nom :</strong> <?= htmlspecialchars($student['nom']) ?><br>
        <strong>Prénom :</strong> <?= htmlspecialchars($student['prenom']) ?><br>
        <strong>Filière :</strong> <?= htmlspecialchars($student['filiere']) ?><br>
        <strong>Classe :</strong> <?= htmlspecialchars($student['classe']) ?><br>
        <strong>Contact :</strong> <?= htmlspecialchars($student['contact']) ?><br>
    </div>
</body>
</html>