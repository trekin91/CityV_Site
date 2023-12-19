<?php
$serveur = "localhost";
$utilisateur = "ewrqmgzl_trekin";
$motDePasse = "@Normandie27";
$baseDeDonnees = "ewrqmgzl_test";

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

function getUsers($connexion) {
    // Requête SQL pour récupérer toutes les colonnes de la table 'test'
    $sql = "SELECT * FROM test";

    // Exécution de la requête
    $resultat = $connexion->query($sql);

    // Vérifier si la requête a réussi
    if ($resultat) {

        // Affichage des résultats
        return $resultat;

        // Libérer le résultat
        $resultat->free();
    } else {
        // Affichage d'une erreur si la requête a échoué
        return "Erreur de requête : " . $connexion->error;
    }

    // Fermer la connexion
    $connexion->close();
}
?>