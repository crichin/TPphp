<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('5.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: rgba(51, 51, 51, 0.9);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        nav .logo img {
            height: 50px;
        }
        nav .onglet {
            display: flex;
            align-items: center;
        }
        nav .onglet a {
            text-decoration: none;
            color: #fff;
            margin-right: 15px;
            padding: 10px 15px;
            transition: 0.3s;
            font-weight: 700;
        }
        nav .onglet a:hover {
            background-color: #555;
            border-radius: 5px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .content {
            background-color: rgba(53, 53, 53, 0.3); /* Fond gris transparent */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #fff;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 2.8em; /* Augmenter la taille de l'écriture du titre */
        }
        p {
            line-height: 1.6;
            color: #fff;
            font-size: 1.4em; /* Augmenter la taille de l'écriture des paragraphes */
        }
        .styled-paragraph {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4em; /* Augmenter la taille de l'écriture du paragraphe stylé */
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            color: white;
            background-color: rgba(51, 51, 51, 0.7);
            padding: 15px;
            border: 1px solid #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        #welcome-message {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: orange; /* Fond orange */
            color: #fff; /* Texte blanc */
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            font-size: 1.5em; /* Augmenter la taille de l'écriture du message de bienvenue */
            z-index: 1000;
        }
    </style>
</head>
<body>
    <?php require 'nav.php'; ?>

    <div id="welcome-message">Bienvenue sur notre page de présentation !</div>

    <div class="container">
        <div class="content">
            <h1>Qui sommes nous ?</h1>
            <p>
                Voici les membres du groupe TP et leurs rôles :
                <br><br> 1. ACODJI Fabiola : Responsable de l'organisation du groupe et spécifiquement de la page afficher etudiants
                <br><br> 2. HOUNDOLO Elsa : Chargée de la page de Contact
                <br><br> 3. HOUNDETON Jeffry : Responsable de la base de données
                <br><br> 4. SOGOE Bryan : Chargé de la page contact
                <br><br> 5. OWONIKOKO Sadikou : Responsable de la partie ajouter etudiant
                <br><br> Ensemble, ce groupe TP travaille de manière collaborative pour mener à bien le projet qui leur a été 
                confié.
            </p>
            <p class="styled-paragraph">
                &copy; 2024 ESGIS L1 Groupe3. Tous droits réservés.
            </p>
        </div>
    </div>

    <script>
        // Affichage du message de bienvenue et déplacement aléatoire
        window.onload = function() {
            const welcomeMessage = document.getElementById('welcome-message');
            
            // Fonction pour générer un nombre aléatoire dans une plage donnée
            function getRandomNumber(min, max) {
                return Math.random() * (max - min) + min;
            }

            // Fonction pour déplacer le message de bienvenue à une nouvelle position aléatoire
            function moveWelcomeMessage() {
                const newPositionX = getRandomNumber(0, window.innerWidth - welcomeMessage.offsetWidth);
                const newPositionY = getRandomNumber(0, window.innerHeight - welcomeMessage.offsetHeight);
                welcomeMessage.style.left = `${newPositionX}px`;
                welcomeMessage.style.top = `${newPositionY}px`;
            }

            // Animation : déplacer le message de bienvenue toutes les 3 secondes
            setInterval(moveWelcomeMessage, 3000);

            // Disparition du message après 5 secondes
            setTimeout(() => {
                welcomeMessage.style.opacity = '0';
                setTimeout(() => {
                    welcomeMessage.remove();
                }, 1000);
            }, 5000);
        };
    </script>
</body>
</html>
