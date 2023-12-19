<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>En maintenance</title>
    <style>
        body {
            font-family: 'Bangers', cursive;
            background-color: #000000;
            color: #ffd600;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .maintenance-container {
            max-width: 600px;
            padding: 20px;
            background-color: #37003c;
            border: 4px solid #ffd600;
            border-radius: 15px;
            /* Ajout de la propriété border-radius */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            color: #ffd600;
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
            border: 2px solid #ffd600;
            border-radius: 15px;
            /* Ajout de la propriété border-radius */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
        }

        footer {
            margin-top: 30px;
            font-size: 14px;
            color: #b3b3b3;
        }

        a {
            color: #b3b3b3;
            text-decoration: none;
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('connexion_bdd.php'); ?>

    <div class="contenu">
        <!-- Votre contenu HTML va ici -->
        <?php
        /*$resultat = getUsers($connexion);
        while ($ligne = $resultat->fetch_assoc()) {
            echo "ID: " . $ligne['id'] . " - Nom: " . $ligne['nom'] . " - Prenom: " . $ligne['prenom'] . "<br>";
        }*/
        ?>
    </div>
    <div class="maintenance-container">
        <img src="CityV.png" alt="Logo" />
        <h1>En maintenance</h1>
        <p>Nous effectuons actuellement des travaux de maintenance pour améliorer votre expérience. Merci de votre compréhension.</p>
        <p>Rejoignez notre serveur Discord pour les dernières mises à jour :</p>
        <a href="https://discord.gg/uSTpkq6dVW" target="_blank">Rejoindre le Discord City V</a>
        <footer>&copy; 2023 City V. Tous droits réservés.</footer>
    </div>
</body>

</html>