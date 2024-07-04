<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nous contacter</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <?php require 'nav.php'; ?>
    <h2>Nous contacter</h2>
    <form class="formulaire" action="sendmail.php" method="post">
        <label for="expediteur">Votre email :</label>
        <input type="email" id="expediteur" name="email" required>

        <label for="objet">Objet :</label>
        <input type="text" id="objet" name="objet" required>

        <label for="message">Message :</label>
        <textarea id="message" name="msg" rows="5" required></textarea>

        <input type="hidden" name="destinataire" value="votre-email@example.com">

        <button type="submit" name="envoyer">Envoyer</button>
    </form>
</body>
</html>
