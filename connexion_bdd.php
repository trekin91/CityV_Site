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
?>
