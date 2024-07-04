<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('./6.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: rgba(48, 51, 50, 0.2); /* Fond gris transparent */
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
        nav .search-form {
            display: flex;
            align-items: center;
        }
        .reche {
            padding: 10px 20px;
            border: none;
            border-radius: 5px 0 0 5px;
            outline: none;
        }
        .rechercher {
            padding: 10px 20px;
            border: none;
            border-radius: 0 5px 5px 0;
            background-color: #ff6347;
            color: #fff;
            cursor: pointer;
            transition: 0.3s;
        }
        .rechercher:hover {
            background-color: #ff4500;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .content {
            background-color: rgba(53, 55, 54, 0.4); /* Fond gris transparent */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #fff;
            font-weight: 700;
            font-size: 2.8em; /* Augmenter la taille de l'écriture du titre */
        }
        p {
            line-height: 1.8;
            color: #fff;
            font-size: 1.6em; /* Augmenter la taille de l'écriture des paragraphes */
        }
        .styled-paragraph {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6em; /* Augmenter la taille de l'écriture du paragraphe stylé */
            font-family: 'Roboto', sans-serif;
            line-height: 1.8;
            color: white;
            background-color: rgba(51, 51, 51, 0.7);
            padding: 15px;
            border: 1px solid #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php require 'nav.php'; ?>

    <div class="container">
        <div class="content">
            <h1 id="accueilTitle" style="background-color: #ff6347; padding: 10px; border-radius: 5px;">Bienvenue sur l'Accueil</h1>
            <p>
                L'ESGIS Bénin (École Supérieure de Gestion, d'Informatique et des Sciences) est un 
                établissement d'enseignement supérieur situé au Bénin. Elle a 
                pour vocation de former des étudiants dans les domaines de la gestion, de l'informatique et 
                des sciences connexes.
            </p>
            <p>
                En Licence 1 (L1), l'ESGIS Bénin propose le parcours IRT (Informatique, Réseaux et 
                Télécommunications) qui couvre les éléments clés suivants :
            </p>
            <p>
                <strong>1. Algorithmes et Structures de Données :</strong><br>
                - Étude approfondie des structures de données fondamentales comme les listes, piles, files 
                d'attente, arbres, etc.<br>
                - Apprentissage des principaux algorithmes de tri, de recherche et de manipulation de ces 
                structures.
            </p>
            <p>
                <strong>2. Création de sites web :</strong><br>
                - Maîtrise des langages de programmation web tels que HTML, CSS, JavaScript et PHP.<br>
                - Apprentissage des techniques de développement de sites web statiques et dynamiques.<br>
                - Utilisation de bases de données, notamment MySQL, pour stocker et récupérer les informations.
            </p>
            <p>
                <strong>3. Systèmes et Réseaux :</strong><br>
                - Étude approfondie des architectures et des protocoles des réseaux informatiques.<br>
                - Compréhension des principes de fonctionnement des différents types de réseaux (LAN, WAN, 
                Internet, etc.).<br>
                - Apprentissage des techniques d'administration et de sécurisation des systèmes et réseaux.
            </p>
            <p>
                Cette formation en Licence 1 IRT vise à doter les étudiants des compétences techniques et pratiques 
                nécessaires pour concevoir, développer et administrer des systèmes informatiques et des 
                applications web. Elle leur permet également d'acquérir une solide base en sciences de 
                l'informatique, les préparant ainsi à poursuivre leurs études en master ou à s'insérer dans le monde 
                professionnel.
            </p>
            <p class="styled-paragraph">
                &copy; 2024 ESGIS L1 Groupe3. Tous droits réservés.
            </p>
        </div>
    </div>

    <script>
        // Sélectionner le titre "Accueil"
        const accueilTitle = document.getElementById('accueilTitle');
        
        // Afficher le titre pendant 5 secondes puis le cacher
        setTimeout(() => {
            accueilTitle.style.display = 'none';
        }, 5000);
    </script>
</body>
</html>
