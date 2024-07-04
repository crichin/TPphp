<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = "votre-adresse-email@example.com";
    $expediteur = filter_var($_POST['expediteur'], FILTER_SANITIZE_EMAIL);
    $objet = strip_tags(trim($_POST['objet']));
    $message = htmlspecialchars(trim($_POST['message']));
    $headers = "From: $expediteur";

    if (!filter_var($expediteur, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse email invalide.";
        exit;
    }

    if (empty($objet) || empty($message)) {
        echo "L'objet et le message ne doivent pas être vides.";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO contact_messages (expediteur, objet, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $expediteur, $objet, $message);

    if ($stmt->execute()) {
        
        // Envoi de l'email
        if (mail($to, $objet, $message, $headers)) {
            echo "Email envoyé avec succès.";
        } else {
            echo "Échec de l'envoi de l'email.";
        }
    } else {
        echo "Erreur lors de l'enregistrement du message : " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
